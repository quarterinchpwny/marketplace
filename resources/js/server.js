import React from 'react';
import ReactDOMServer from 'react-dom/server';
import { StaticRouter } from 'react-router-dom';
import { Provider } from 'react-redux';
import { store } from './configureStore';
import App from './app';

const html = ReactDOMServer.renderToString(
  <div id="app">
    <Provider store={store}>
      <StaticRouter location={context.url}>
        <App />
      </StaticRouter>
    </Provider>
  </div>
);

dispatch(html);