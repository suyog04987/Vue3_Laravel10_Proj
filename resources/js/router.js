import { createRouter, createWebHistory } from "vue-router";
import App from "./App.vue";
import League from "./components/League.vue";
import Teams from "./components/Teams.vue";
import Scoreboard from "./components/Scoreboard.vue";
import Register from "./Registration/registration.vue";
import Dashboard from "./views/Admin/Dashboard.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/",
            name: "Scoreboard",
            component: Scoreboard,
        },
        {
            path: "/league",
            name: "league",
            component: League,
        },
        {
            path: "/teams",
            name: "teams",
            component: Teams,
        },
        {
            path: "/registerTeam",
            name: "register",
            component: Register,
        },
        {
            path: "/dashboard",
            name: "dashboard",
            component: Dashboard,
        },
    ],
});

export default router;
