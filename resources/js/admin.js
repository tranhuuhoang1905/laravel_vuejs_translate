require('./bootstrap');

import { createApp } from 'vue';

// import ExampleComponent from './components/ExampleComponent.vue'
// // import ExampleComponent from './components/ExampleComponent.vue'
// // import ExampleComponent from './components/ExampleComponent.vue'
// // import router from './router'
// // import VueRouter from 'vue-router'

// let app = createApp(ExampleComponent)
// app.mount("#app")
// window.Vue = require("vue").default;
// Vue.use(VueRouter)

import App from './Admin.vue';
import router from './router'
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
const app = createApp(App);
app.use(VueAxios, axios);
app.use(router).mount('#app');
