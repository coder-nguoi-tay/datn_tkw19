import './bootstrap';
import { configure, defineRule } from 'vee-validate'
import { createApp } from 'vue';
import CoreuiVue from "@coreui/vue";
defineRule('password_rule', (value) => {
    return /^[A-Za-z0-9]*$/i.test(value)
})

configure({
    validateOnBlur: false,
    validateOnChange: false,
    validateOnInput: true,
    validateOnModelUpdate: false
})


const app = createApp({});
app.use(CoreuiVue);
defineRule('telephone', (value) => {
    return (
        /^0(\d-\d{4}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{3}-\d{2}-\d{4})+$/i.test(value.trim()) ||
        /^(070|080|090|050)(-\d{4}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{2}-\d{3}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{9,10})+$/i.test(value.trim())
    )
})
import Editor from '@tinymce/tinymce-vue';
// import tinymce from 'tinymce/tinymce';

app.component('editor', Editor);

import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css'
app.use(VueSweetalert2)
import login from './components/login/index.vue';
app.component('login', login);
import EditPackage from './components/package/edit.vue';
app.component('edit-package', EditPackage);
import CreatePackage from './components/package/create.vue';
app.component('create-package', CreatePackage);
import Resetpassword from './components/resetpassword/index.vue';
app.component('reset-password', Resetpassword)
import showPassword from './components/showpassword/show.vue';
app.component('show-password', showPassword)
import forgotPasswordSuccess from './components/forgotPasswordSuccess/index.vue';
app.component('forgot-password-success', forgotPasswordSuccess)
import popup from './components/common/popupAlert.vue'
app.component('popup-alert', popup)
import btnDelete from './components/common/btnDeleteConfirm.vue'
app.component('btn-delete-confirm', btnDelete)
import btnPaymentEmployer from './components/common/btnPaymentEmployer.vue'
app.component('btn-payment-employer', btnPaymentEmployer)

// admin
import CreateAdmin from './components/admin/create.vue';
app.component('create-admin', CreateAdmin);
import btnDeleteAdmin from './components/common/deleteAdmin.vue'
app.component('btn-delete-admin', btnDeleteAdmin)
//jobAttractive
import CreatejobAttractive from './components/jobAttractive/create.vue'
app.component('create-job-attractive', CreatejobAttractive)
import EditjobAttractive from './components/jobAttractive/edit.vue'
app.component('edit-job-attractive', EditjobAttractive)
// new
import CreateNew from './components/new/create.vue';
app.component('create-new', CreateNew);
import EditNew from './components/new/edit.vue'
app.component('edit', EditNew);
import ChangheStatus from './components/employer/new/ChangeStatus.vue'
app.component('change-status-new', ChangheStatus);


//employer
import CreateNewEmployer from './components/employer/new/create.vue';
app.component('create-new-employer', CreateNewEmployer);
import EditNewEmployer from './components/employer/new/edit.vue';
app.component('edit-new-employer', EditNewEmployer);

import ChangePasswordEmployer from "./components/employer/profile/change-password.vue";
app.component('change-password-employer', ChangePasswordEmployer);
import DatePickerCustom from "./components/common/datePickerCustom.vue";
app.component('picker-new-employer', DatePickerCustom);


// client
import clientLogin from "./components/client/login/index.vue";
app.component('client-login', clientLogin);
import clientRegister from "./components/client/register/create.vue";
app.component('client-register', clientRegister);
// home
import homeClient from "./components/client/home/index.vue";
app.component('home-client', homeClient);

// create company
import CretaeCompany from './components/company/create.vue'
app.component('create-company', CretaeCompany);

import Notyf from "./components/common/notyf.vue";
app.component("notyf", Notyf);
import registerEmployer from "./components/employer/register.vue";
app.component('register-employer', registerEmployer);
import ProfileEmployer from './components/employer/profile/update.vue'
app.component('update-profile-employer', ProfileEmployer);
import AccountPayment from './components/employer/payment/index.vue'
app.component('account-payment', AccountPayment);
import SearchCv from './components/employer/manegercv/search.vue'
app.component('search-cv-date', SearchCv);
import Seeker from './components/employer/manegercv/searchSeeker.vue'
app.component('search-seeker', Seeker);

import settingProfile from "./components/employer/profile/setting-profile.vue";
app.component('setting-profile', settingProfile);
import payMoney from "./components/employer/profile/pay-money.vue";
app.component('pay-money', payMoney);
import SeaechCv from "./components/employer/searchCv/index.vue";
app.component('search-cv', SeaechCv);

import showCV from "./components/employer/manegercv/show.vue";
app.component('show-cv', showCV);
import showCvClient from "./components/client/seeker/create-cv.vue";
app.component('show-cv-client', showCvClient);

import Widgets from "./components/employer/widgets.vue";
app.component('widgets', Widgets);
import btnStatusCompany from "./components/admin/company/buttomStatus.vue";
app.component('btn-status-company', btnStatusCompany);
import BoughtCV from "./components/employer/boughtcv/index.vue";
app.component('bought-cv', BoughtCV);

import btnPayment from "./components/common/btnPayment.vue";
app.component('btn-payment-extend-employer', btnPayment);

app.mount('#app');



