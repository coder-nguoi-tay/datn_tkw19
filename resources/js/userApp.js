require('./bootstrap')
import { createApp } from 'vue'

import { configure, defineRule } from 'vee-validate'


configure({
    validateOnBlur: false,
    validateOnChange: false,
    validateOnInput: true,
    validateOnModelUpdate: false
})
const app = createApp({})
defineRule('password_rule', (value) => {
    return /^[A-Za-z0-9]*$/i.test(value)
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

import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css'
app.use(VueSweetalert2)

import userProfile from "./components/client/seeker/profile.vue";
app.component('user-profile', userProfile);
import userUploadCv from "./components/client/seeker/uploadcv.vue";
app.component('user-uploadcv', userUploadCv);
import showNew from "./components/client/home/show-new.vue";
app.component('show-new', showNew);
import Paginate from "./components/common/customPaginate.vue";
app.component('paginate', Paginate);
// import test from "./components/client/seeker/test.vue";
// app.component('user-uploadcv', test);
import UserFavourite from "./components/client/seeker/favourite.vue";
app.component('user-favourite', UserFavourite);



app.mount('#app')
