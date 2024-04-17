import {createRouter, createWebHistory} from "vue-router";
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Register from "../views/Register.vue";
import Contact from "../views/Contact.vue"

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    mode: "history",
    routes: [
        {
            path: `/`,
            name: 'home',
            component: Home
        },
        {
            path: `/login`,
            name: 'login',
            component: Login
        },
        {
            path: `/register`,
            name: 'register',
            component: Register
        },
        {
            path: `/contact`,
            name: 'contact',
            component: Contact
        },
    ],
});
export default router
