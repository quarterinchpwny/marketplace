import AwesomeDebouncePromise from 'awesome-debounce-promise';
import Config from 'react-native-config';

// url {required}
// data to post {object}

let options = {
  method: 'POST',
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json',
  },
};

export const setTokenSaveField = token => {
  options.headers.Authorization = 'Bearer ' + token;
};

const saveFieldValue = (url, data) => {
  url = `${Config.APP_API}${url}`;

  options.body = JSON.stringify(data);

  return fetch(url, options).then(response => response.json());
};

const saveFieldValueDebounced = AwesomeDebouncePromise(saveFieldValue, 200);

export default saveFieldValueDebounced;
