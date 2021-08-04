import React from 'react';
import Header from '../Header';
import { Container, Row, Col } from 'react-bootstrap';

function Home() {
  return (
    <div>
      <Header />
      <Container>
        <Row>
          <Col>
            <h1>Home</h1>
          </Col>
        </Row>
      </Container>
    </div>
  );
}

export default Home;