// require('./bootstrap');
import { createApp } from "vue";
import CoreuiVue from "@coreui/vue";
import { configure, defineRule } from "vee-validate";
configure({
    validateOnBlur: false,
    validateOnChange: false,
    validateOnInput: true,
    validateOnModelUpdate: false,
});
const app = createApp({});
app.use(CoreuiVue);
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";
app.use(VueSweetalert2);

defineRule('password_rule', value => {
    return /^[A-Za-z0-9]*$/i.test(value);
});
defineRule('telephone', (value) => {
    return (
        /^0(\d-\d{4}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{3}-\d{2}-\d{4})+$/i.test(value.trim()) ||
        /^(070|080|090|050)(-\d{4}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{2}-\d{3}-\d{4})+$/i.test(value.trim()) ||
        /^0(\d{9,10})+$/i.test(value.trim())
    )
});
defineRule('kata', (value) => {
    return /^([ァ-ン]|ー)*$/i.test(value)
})
import BtnDeleteConfirm from "./components/common/btnDeleteConfirm.vue";
import DataEmpty from "./components/common/dataEmpty.vue";
import PopupAlert from "./components/common/popupAlert.vue";
import LimitPageOption from "./components/common/limitPageOption.vue";
import UserCreate from "./components/admin/user/create.vue";
import UserEdit from "./components/admin/user/edit.vue";
import NewCreate from "./components/admin/new/create.vue";
import NewEdit from "./components/admin/new/edit.vue";


app.component("btn-delete-confirm", BtnDeleteConfirm);
app.component("data-empty", DataEmpty);
app.component("popup-alert", PopupAlert);
app.component("limit-page-option", LimitPageOption);
app.component("user-create", UserCreate);
app.component("user-edit", UserEdit);
app.component("new-create", NewCreate);
app.component("new-edit", NewEdit);


app.mount("#app");