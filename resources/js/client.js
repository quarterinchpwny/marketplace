import React from 'react';
import { render } from 'react-dom';
import { BrowserRouter } from 'react-router-dom';
import { Provider } from 'react-redux';
import { store, persistor } from './configureStore';
import App from './app';

delete window.__PRELOADED_STATE__;

const renderApp = () => render(
  <Provider store={store}>
    <BrowserRouter>
      <App />
    </BrowserRouter>
  </Provider>,
document.getElementById('app'));

persistor.subscribe(() => {
  const { bootstrapped } = persistor.getState();

  if (bootstrapped) {
    renderApp();
  }
});

if (process.env.NODE_ENV !== 'production' && module.hot) {
  module.hot.accept('./app', renderApp)
}