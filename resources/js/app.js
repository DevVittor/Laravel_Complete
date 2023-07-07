import "./bootstrap";
import { createApp } from "vue";
import App from "./components/App.vue";
import Likes from "./components/Likes.vue";
import TypeAccount from "./components/TypeAccount.vue";
import Man from "./components/Man.vue";

const app = createApp();

app.component("app", App);
app.component("likes", Likes);
app.component("typeaccount", TypeAccount);
app.component("man", Man);

app.mount("#app");
