require("./bootstrap");
import { createApp } from "vue";
import $ from "jquery";
import { configure, defineRule } from "vee-validate";
import Nl2br from 'vue3-nl2br'

configure({
    validateOnBlur: false,
    validateOnChange: false,
    validateOnInput: true,
    validateOnModelUpdate: false,
});
const app = createApp({});

import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";
app.use(VueSweetalert2);
app.component('nl2br', Nl2br)

import Register from "./components/user/register/index.vue";
import EventCreate from "./components/event/create.vue";
import EventConfirm from "./components/event/confirm.vue";


app.component("register", Register);
app.component("event-create", EventCreate);
app.component("event-confirm", EventConfirm);

app.mount("#app");