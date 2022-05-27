window.axios = require("axios");

window.Vue = require("vue");
import VueRouter from "vue-router";
import App from "./views/App";

window.Vue.use(VueRouter);

import Home from "./pages/Home";
import About from "./pages/About";

const router = new VueRouter({
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/about",
            name: "about",
            component: About,
        },
    ],
});

const app = new Vue({
    el: "#root",
    render: (h) => h(App),
    router,
});
