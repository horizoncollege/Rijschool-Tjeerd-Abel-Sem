import {createRouter, createWebHistory} from "vue-router";
import Home from "../views/Home.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    mode: "history",
    routes: [
        {
            path: `/`,
            name: 'home',
            component: Home
        },
    ],
});
export default router
