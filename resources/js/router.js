
import { createWebHistory, createRouter } from "vue-router";
import Home from "./Pages/Home.vue";
import Register from "./Pages/Register.vue";
import Login from "./Pages/Login.vue";
import Dashboard from "./Pages/Dashboard.vue";

const routes =[
    {
        path:'/',
        name:'Home',
        component:Home
    },
    {
        path:'/register',
        name:'Register',
        component:Register
    },
    {
        path:'/login',
        name:'Login',
        component:Login
    },
    {
        path: '/dashboard',
        name: 'Dashboard',
        component: Dashboard
    }
];

const router = createRouter({
    history:createWebHistory(),
    routes
})
 export default router;