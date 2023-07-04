import "./bootstrap";
import { createApp } from "vue";
import App from "./components/App.vue";
import Likes from "./components/Likes.vue";

const app = createApp();

app.component("app", App);
app.component("likes", Likes);

app.mount("#app");
