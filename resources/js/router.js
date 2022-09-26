
import { createWebHistory, createRouter } from "vue-router";
import Home from "./Pages/Home.vue";
import Register from "./Pages/Register.vue";
import Login from "./Pages/Login.vue";

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
    }
];

const router = createRouter({
    history:createWebHistory(),
    routes
})
 export default router;