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

// admin
import CreateAdmin from './components/admin/create.vue';
app.component('create-admin', CreateAdmin);
import btnDeleteAdmin from './components/common/deleteAdmin.vue'
app.component('btn-delete-admin', btnDeleteAdmin)
// new
import CreateNew from './components/new/create.vue';

app.component('create-new', CreateNew);
import EditNew from './components/new/edit.vue'
app.component('edit', EditNew);

//employer
import CreateNewEmployer from './components/employer/new/create.vue';
app.component('create-new-employer', CreateNewEmployer);
import EditNewEmployer from './components/employer/new/edit.vue';
app.component('edit-new-employer', EditNewEmployer);


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



app.mount('#app');



