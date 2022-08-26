require('./bootstrap');
import { createApp } from 'vue'

// import CoreuiVue from '@coreui/vue'
import { configure, defineRule } from "vee-validate";
import VueSweetalert2 from "vue-sweetalert2";
import Nl2br from 'vue3-nl2br'

import "sweetalert2/dist/sweetalert2.min.css";
configure({
    validateOnBlur: true,
    validateOnChange: true,
    validateOnInput: true,
    validateOnModelUpdate: true,
});
defineRule('password_rule', value => {
    return /^[A-Za-z0-9]*$/i.test(value);
});
defineRule('furigana', value => {
    return value.match(/[一-龥ぁ-ん]/) == null;
});
defineRule('telephone', value => {
    return /^[0-9]{1,20}$/i.test(value.trim())
});
const app = createApp({})

import Login from './components/login/index.vue'
import PopupAlert from "./components/common/popupAlert.vue";
import ForgotPasswordCreate from './components/forgotPassword/create.vue'
import ForgotPasswordSuccess from './components/forgotPasswordSuccess/index.vue'
import PasswordReset from './components/passwordReset/show.vue'

app.use(VueSweetalert2);
app.component('nl2br', Nl2br)
// app.use(CoreuiVue)
app.component('login', Login)
app.component("popup-alert", PopupAlert);
app.component('forgot-password-create', ForgotPasswordCreate)
app.component('forgot-password-success', ForgotPasswordSuccess)
app.component('password-reset', PasswordReset)

app.mount('#app')


