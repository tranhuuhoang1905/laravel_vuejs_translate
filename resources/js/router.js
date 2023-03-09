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

import Admin from './components/admin/ExampleComponent.vue';
import AllLanguages from './components/admin/language/AllLanguages.vue';
import AddLanguage from './components/admin/language/AddLanguage.vue';
import EditLanguage from './components/admin/language/EditLanguage.vue';
import Login from './components/auth/Login.vue';
import Register from './components/auth/Register.vue';

export const routes = [
    { name: 'home', path: '/', component: AllPosts },
    { name: 'add', path: '/add', component: AddPost },
    { name: 'edit', path: '/edit/:id', component: EditPost },
    { name: 'admin', path: '/admin', component: Admin },
    { name: 'languages', path: '/admin/languages', component: AllLanguages },
    { name: 'add-language', path: '/admin/language/add', component: AddLanguage },
    { name: 'edit-language', path: '/admin/language/edit/:id', component: EditLanguage },
    { name: 'login', path: '/login', component: Login },
    { name: 'register', path: '/register', component: Register }
];
const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router