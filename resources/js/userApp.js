require("./bootstrap");
import { createApp } from "vue";
import $ from "jquery";
import { configure, defineRule } from "vee-validate";

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

import Register from "./components/user/register/index.vue";

app.component("register", Register);
app.mount("#app");
