import React from 'react';
import { Redirect, useHistory, useLocation } from 'react-router-dom';
import { useDispatch } from 'react-redux';
import { Container, Row, Col, Card, Button, Form } from 'react-bootstrap';
import { Formik } from 'formik';
import axios from '../../helpers/axios';
import { storeUser } from '../../reducers/user';
import { storeToken } from '../../reducers/token';
import { useAuth } from '../../helpers/auth';
import { updateState } from '../../helpers/updateState';
import Header from '../Header';

function Login() {
  const auth = useAuth();
  const dispatch = useDispatch();
  const history = useHistory();
  const location = useLocation();

  const submit = async (values, callback, setErrors) => {
    try {
      const response = await axios.post('/login', values);
      dispatch(updateState(storeUser(response.data.user)))
      .then(() => dispatch(updateState(storeToken(response.data.token))))
      .then(() => history.push('/dashboard'));
    } catch (error) {
      callback();
      if (error && error.response && error.response.status === 422) {
        setErrors(error.response.data.errors);
      }
    }
  }

  if (auth.isAuthenticated) {
    return (
      <Redirect
        to={{
          pathname: '/dashboard',
          state: { from: location }
        }}
      />
    )
  }

  return (
    <React.Fragment>
      <Header />
      <Container>
        <Row>
          <Col md={{ span: 4, offset: 4 }} className="d-flex justify-content-center align-items-center min-vh-100">
            <Card className="w-100">
              <Card.Body>
                <Card.Title>Login</Card.Title>
                <Formik
                  initialValues={{ 
                    email: '', 
                    password: '' 
                  }}
                  validate={values => {
                   const errors = {};
                   if (!values.email) {
                     errors.email = 'The email field is required.';
                   } else if (
                     !/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i.test(values.email)
                   ) {
                     errors.email = 'The email must be a valid email address.';
                   }
                   if (!values.password) {
                     errors.password = 'The password field is required.';
                   }

                   return errors;
                 }}
                 onSubmit={(values, { setSubmitting, setErrors }) => {
                  setSubmitting(true);
                   setTimeout(() => {
                     submit(values, () => {
                        setSubmitting(false);
                     }, setErrors);
                   }, 400);
                 }}>
                 {({
                   values,
                   errors,
                   touched,
                   handleChange,
                   handleBlur,
                   handleSubmit,
                   isSubmitting,
                 }) => (
                  <Form onSubmit={handleSubmit}>
                    <Form.Group>
                      <Form.Control 
                        type="email" 
                        name="email"
                        placeholder="Email"
                        value={values.email}
                        onChange={handleChange}
                        onBlur={handleBlur}
                        className={errors.email && touched.email && 'is-invalid'}
                      />
                      {errors.email && touched.email && <div className="invalid-feedback">{errors.email}</div>}
                    </Form.Group>
                    <Form.Group>
                      <Form.Control 
                        type="password" 
                        name="password"
                        placeholder="Password"
                        value={values.password}
                        onChange={handleChange}
                        onBlur={handleBlur}
                        className={errors.password && touched.password && 'is-invalid'}
                      />
                      {errors.password && touched.password && <div className="invalid-feedback">{errors.password}</div>}
                    </Form.Group>
                    <Button variant="secondary" type="submit" block>
                      {isSubmitting ? 'Logging in...' : 'Login'}
                    </Button>
                  </Form>
                 )}
                </Formik>
              </Card.Body>
            </Card>
          </Col>
        </Row>
      </Container>
    </React.Fragment>
  );
}

export default Login;