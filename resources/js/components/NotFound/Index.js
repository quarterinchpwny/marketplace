import React from 'react';
import { useLocation } from 'react-router-dom';

function NotFound() {
  const location = useLocation();

  return (
    <div>
      Page not found <code>{location.pathname}</code>
    </div>
  );
}

export default NotFound;