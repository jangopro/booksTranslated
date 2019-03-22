import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import App from "./views/App";
import Home from "./views/Home";
import BookDetail from "./views/BookDetail";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/books/:id",
            name: "book.details",
            component: BookDetail
        }
    ]
});

const app = new Vue({
    el: "#app",
    components: { App },
    router
});
