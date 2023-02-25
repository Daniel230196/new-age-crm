import {Vue} from "vue";
import VueRouter from "vue-router";
import Home from "../components/Home";



Vue.use(VueRouter)

let router = new VueRouter({
    mode: "history",
    routes: [
        { path: "/home", component: Home },
        { path: "/*", redirect: "/home" },
    ]
})