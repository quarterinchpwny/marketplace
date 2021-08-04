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

function Register() {
  const auth = useAuth();
  const dispatch = useDispatch();
  const history = useHistory();
  const location = useLocation();

  const submit = (values, callback, setErrors) => {
    axios.post('/register', values)
    .then(response => {
      dispatch(updateState(storeUser(response.data.user)))
      .then(() => dispatch(updateState(storeToken(response.data.token))))
      .then(() => {
        history.push('/dashboard');
      });
    })
    .catch(error => {
      callback();
      if (error && error.response && error.response.status === 422) {
        setErrors(error.response.data.errors);
      }
    });
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
                <Card.Title>Register</Card.Title>
                <Formik
                 initialValues={{
                    first_name: '',
                    last_name: '',
                    email: '', 
                    password: '', 
                    retype_password: '',
                  }}
                  validate={values => {
                   const errors = {};
                   if (!values.first_name) {
                     errors.first_name = 'The first name field is required.';
                   }
                   if (!values.last_name) {
                     errors.last_name = 'The last name field is required.';
                   }
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
                   if (!values.retype_password) {
                     errors.retype_password = 'The retype password field is required.';
                   } else if (values.password !== values.retype_password) {
                     errors.retype_password = 'The password does not match in retype password';
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
                        type="text"
                        name="first_name"
                        placeholder="Enter First Name"
                        value={values.first_name}
                        onChange={handleChange}
                        onBlur={handleBlur}
                        className={errors.first_name && touched.first_name && 'is-invalid'}
                      />
                      {errors.first_name && touched.first_name && <div className="invalid-feedback">{errors.first_name}</div>}
                    </Form.Group>
                    <Form.Group>
                      <Form.Control 
                        type="text"
                        name="last_name"
                        placeholder="Enter Last Name"
                        value={values.last_name}
                        onChange={handleChange}
                        onBlur={handleBlur}
                        className={errors.last_name && touched.last_name && 'is-invalid'}
                      />
                      {errors.last_name && touched.last_name && <div className="invalid-feedback">{errors.last_name}</div>}
                    </Form.Group>
                    <Form.Group>
                      <Form.Control 
                        type="email" 
                        name="email"
                        placeholder="Enter Email"
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
                    <Form.Group>
                      <Form.Control 
                        type="password" 
                        name="retype_password"
                        placeholder="Retype Password"
                        value={values.retype_password}
                        onChange={handleChange}
                        onBlur={handleBlur}
                        className={errors.retype_password && touched.retype_password && 'is-invalid'}
                      />
                      {errors.retype_password && touched.retype_password && <div className="invalid-feedback">{errors.retype_password}</div>}
                    </Form.Group>
                    <Button variant="secondary" type="submit" block>
                      {isSubmitting ? 'Please wait...' : 'Register'}
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

export default Register;