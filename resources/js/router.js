// import ExampleComponent from '../components/ExampleComponent'

// export default [{
//     path: '/',
//     component: ExampleComponent,
//     name: 'ExampleComponent',
//     meta: {
//         permission: []
//     }
// }]
import { createRouter, createWebHistory } from 'vue-router';
import AllPosts from './components/AllPosts.vue';
import AddPost from './components/AddPost.vue';
import EditPost from './components/EditPost.vue';
import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllPosts
    },
    {
        name: 'add',
        path: '/add',
        component: AddPost
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditPost
    },
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    {
        name: 'register',
        path: '/register',
        component: Register
    }
];
const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router