require('./bootstrap')
import { createApp } from 'vue'

// import CoreuiVue from '@coreui/vue'
import { configure, defineRule } from 'vee-validate'
import VueSweetalert2 from 'vue-sweetalert2'
import Nl2br from 'vue3-nl2br'

import 'sweetalert2/dist/sweetalert2.min.css'
configure({
    validateOnBlur: true,
    validateOnChange: true,
    validateOnInput: true,
    validateOnModelUpdate: true
})
defineRule('password_rule', (value) => {
    return /^[A-Za-z0-9]*$/i.test(value)
})
defineRule('furigana', (value) => {
    return value.match(/[一-龥ぁ-ん]/) == null
})
defineRule('kata', (value) => {
    return /^([ァ-ン]|ー)*$/i.test(value)
})
defineRule('telephone', (value) => {
    return (
        /^0(\d-\d{4}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{3}-\d{2}-\d{4})+$/i.test(value.trim()) ||
        /^(070|080|090|050)(-\d{4}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{2}-\d{3}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{9,10})+$/i.test(value.trim())
    )
})
const app = createApp({})

import Register from './components/user/register/index.vue'

import Login from './components/login/index.vue'
import PopupAlert from './components/common/popupAlert.vue'
import ForgotPasswordCreate from './components/forgotPassword/create.vue'
import ForgotPasswordSuccess from './components/forgotPasswordSuccess/index.vue'
import PasswordReset from './components/passwordReset/show.vue'

import UserLogin from './components/user/login/index.vue'

app.use(VueSweetalert2)
app.component('nl2br', Nl2br)
app.component('register', Register)
// app.use(CoreuiVue)
app.component('login', Login)
app.component('popup-alert', PopupAlert)
app.component('forgot-password-create', ForgotPasswordCreate)
app.component('forgot-password-success', ForgotPasswordSuccess)
app.component('password-reset', PasswordReset)
app.component('user-login', UserLogin)

app.mount('#app')
