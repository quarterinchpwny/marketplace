import React from "react";
import { Route, Redirect } from 'react-router-dom';
import PropTypes from 'prop-types';
import { useAuth } from '../helpers/auth';

function AuthRoute({ children, ...rest }) {
  const auth = useAuth();

  return (
    <Route
      {...rest}
      render={({ location }) =>
        auth.isAuthenticated ? (
          children
        ) : (
          <Redirect
            to={{
              pathname: '/login',
              state: { from: location }
            }}
          />
        )
      }
    />
  );
}

AuthRoute.propTypes = {
  children: PropTypes.oneOfType([PropTypes.func, PropTypes.node]),
};

export default AuthRoute;