import React from 'react';
import { Nav, Navbar, NavDropdown } from 'react-bootstrap';
import { useSelector } from 'react-redux';
import { Link, useHistory } from 'react-router-dom';
import { useAuth } from '../helpers/auth';

function Header() {
  const auth = useAuth();
  const history = useHistory();

  return (
    <Navbar bg="light">
      <Navbar.Brand as={Link} to="/"></Navbar.Brand>
      <Navbar.Toggle />
      <Navbar.Collapse className="justify-content-end">
        <Nav>
          <Nav.Link as={Link} to="/">
            Home
          </Nav.Link>
          {auth.isAuthenticated ? (
            <React.Fragment>
              <Navbar.Text>
                Signed in as: {auth.getName}
              </Navbar.Text>
              <NavDropdown title="Settings" alignRight>
                <NavDropdown.Item as={Link} to="/profile">
                  Edit Profile
                </NavDropdown.Item>
                <NavDropdown.Divider />
                <NavDropdown.Item 
                  onClick={() => auth.logout(() => history.push("/logout"))}>
                  Logout
                </NavDropdown.Item>
              </NavDropdown>
            </React.Fragment>
          ) : (
            <React.Fragment>
              <Nav.Link as={Link} to="/login">
                Login
              </Nav.Link>
              <Nav.Link as={Link} to="/register">
                Register
              </Nav.Link>
            </React.Fragment>
          )}
        </Nav>
      </Navbar.Collapse>
    </Navbar>
  );
}

export default Header;