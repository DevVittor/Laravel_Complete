import "./bootstrap";
import { createApp } from "vue";
import App from "./components/App.vue";
import Likes from "./components/Likes.vue";
import TypeAccount from "./components/TypeAccount.vue";
import Man from "./components/Man.vue";
import Locale from "./components/Locale.vue";
import Etapa3 from "./components/cadastro/Etapa3.vue";
import Demo from "./components/Demo.vue";

const app = createApp();

app.component("app", App);
app.component("likes", Likes);
app.component("typeaccount", TypeAccount);
app.component("man", Man);
app.component("locale", Locale);
app.component("etapa3", Etapa3);
app.component("demo", Demo);

app.mount("#app");
