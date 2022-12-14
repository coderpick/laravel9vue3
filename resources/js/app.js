import "bootstrap/dist/css/bootstrap.min.css"

import { createApp } from 'vue';
import router from './router';

import App from './layouts/App.vue';

createApp(App)
.use(router)
.mount('#app')

import "bootstrap/dist/js/bootstrap.js"
