import AwesomeDebouncePromise from 'awesome-debounce-promise';
import Config from 'react-native-config';

// url {required}
// method {string POST || GET}
// data to post {object}

let options = {
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json',
  },
};

export const setTokenSearchAPI = token => {
  options.headers.Authorization = 'Bearer ' + token;
};

const searchAPI = (url, method, data) => {
  url = `${Config.APP_API}${url}`;

  if (method === 'POST' || method === 'post') {
    options.method = 'POST';
    options.body = JSON.stringify(data);
  }

  return fetch(url, options).then(response => response.json());
};

const searchAPIDebounced = AwesomeDebouncePromise(searchAPI, 200);

export default searchAPIDebounced;
