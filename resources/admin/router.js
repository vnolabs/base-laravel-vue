import Page404 from './components/pages/404.vue';
import LogInAdmin from './components/pages/auth/LogIn.vue';
import ForgotPassword from './components/pages/auth/ForgotPassword.vue';
import Dashboard from './components/pages/Dashboard.vue';

// Users
import UserList from './components/pages/user/UserList.vue';

import Profile from './components/pages/Profile.vue';


export default [
    {
        path: '/admin/login',
        name: 'admin.login',
        component: LogInAdmin,
        meta: {
            title: 'Login',
        },
    },
    {
        path: '/admin/forgot-password',
        name: 'admin.password.forgot',
        component: ForgotPassword,
        meta: {
            title: 'Forgot Password',
        },
    },
    {
        path: '/admin/dashboard',
        name: 'admin.dashboard',
        component: Dashboard,
        meta: {
            title: 'Dashboard',
        },
    },
    {
        path: '/admin/users',
        name: 'admin.user.list',
        component: UserList,
        meta: {
            title: 'User',
        },
    },
    {
        path: '/admin/profile',
        name: 'admin.profile',
        component: Profile,
        meta: {
            title: 'Profile',
        },
    },
    {
        path: '*',
        name: '404',
        component: Page404
    }
];
