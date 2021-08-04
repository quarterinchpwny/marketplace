import axios from 'axios';

const instance = axios.create({
  baseURL: '/api',
});

export const setAuthHeader = (token = null) => {
  if (token) {
    instance.defaults.headers.common.Authorization = `Bearer ${token}`;
  } else {
    delete instance.defaults.headers.common.Authorization;
  }

  instance.defaults.headers.post.Accept = 'application/json';
  instance.defaults.headers.post['Content-Type'] = 'application/json';
  instance.defaults.headers.post['Content-Type'] = 'multipart/form-data';
};

instance.interceptors.request.use(config => {
  return config;
}, error => {
  return Promise.reject(error);
});

instance.interceptors.response.use(response => {
  return response;
}, error => {
  return Promise.reject(error);
});

export default instance;
