import React, { useEffect } from 'react';
import { Switch, Route, withRouter } from 'react-router-dom';
import Login from './components/Login/Index';
import Register from './components/Register/Index';
import Home from './components/Home/Index';
import Dashboard from './components/Dashboard/Index';
import AuthRoute from './components/AuthRoute';
import NotFound from './components/NotFound/Index';
import ExternalLink from './components/ExternalLink';

function App() {
  return (
    <React.Fragment>
      <Switch>
        <Route exact path="/">
          <Home />
        </Route>
        <Route path="/login">
          <Login />
        </Route>
        <Route path="/logout">
          <ExternalLink
            link="/"
            message="Please wait..."
          />
        </Route>
        <Route path="/register">
          <Register />
        </Route>
        <AuthRoute path="/dashboard">
          <Dashboard />
        </AuthRoute>
        <Route path="*">
          <NotFound />
        </Route>
      </Switch>
    </React.Fragment>
  )
}

export default withRouter(App);