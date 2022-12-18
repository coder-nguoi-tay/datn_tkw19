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

$(document).ready(function () {
    $(".select2").select2({
        multiple: true,

    });
});
$(document).ready(function () {
    $(".select2-location").select2({
        MaximumSelectionLength: 2
    });
    $('#exampleModalcheckSeeker').click(function () {
        $('#exampleModalcheckSeeker').removeClass('show')
        this.removeAttribute('style')
    })
});


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
import ChangePassword from "./components/client/seeker/change-password.vue";
app.component('change-password', ChangePassword);
import popup from './components/common/popupAlert.vue'
app.component('popup-alert', popup)
import Upcv from './components/client/home/upcv.vue';
app.component('up-cv', Upcv)
import clientLogin from "./components/client/login/index.vue";
app.component('client-login', clientLogin);




app.mount('#app')
