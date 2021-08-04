import React from 'react';
import Header from '../Header';
import { Container, Row, Col } from 'react-bootstrap';

function Dashboard() {
  return (
    <div>
      <Header />
      <Container>
        <Row>
          <Col>
            <h1>Dashboard</h1>
          </Col>
        </Row>
      </Container>
    </div>
  );
}

export default Dashboard;