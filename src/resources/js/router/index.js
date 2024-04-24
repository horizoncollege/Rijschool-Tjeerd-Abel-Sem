import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";
import Login from "../views/Login.vue";
import Rijschool from "../views/Rijschool.vue";
import Contact from "../views/Contact.vue";
import Pakketen from "../views/Pakketen.vue";
import Proefles from "../views/Proefles.vue";
import Rijbewijs from "../views/Rijbewijs.vue";
import Personeel from "../views/personeel.vue";
import Register from "../views/Register.vue";
import Contact from "../views/Contact.vue"

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/login",
            name: "login",
            component: Login
        },
        {
            path: "/rijschool",
            name: "rijschool",
            component: Rijschool
        },
        {
            path: "/contact",
            name: "contact",
            component: Contact
        },
        {
            path: "/pakketen",
            name: "pakketen",
            component: Pakketen
        },
        {
            path: "/proefles",
            name: "proefles",
            component: Proefles
        },
        {
            path: "/rijbewijs",
            name: "rijbewijs",
            component: Rijbewijs
        },
        {
            path: "/personeel",
            name: "personeel",
            component: Personeel
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
