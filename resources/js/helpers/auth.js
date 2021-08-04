import { useSelector, useDispatch } from 'react-redux';
import { selectUser } from '../reducers/user';
import { selectToken } from '../reducers/token';

export const useAuth = () => {
  const dispatch = useDispatch();
  const token = useSelector(selectToken);
  const user = useSelector(selectUser);

  return {
    isAuthenticated: (token && user) ? true : false,
    getName: user?.lawyer?.first_name,
    getToken: token?.accessToken,
    logout: callback => {
      dispatch({ type: 'USER_LOGOUT' });
      callback();
    }
  }
}