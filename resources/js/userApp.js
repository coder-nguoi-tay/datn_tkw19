require('./bootstrap')
import { createApp } from 'vue'
import $ from 'jquery'
import { configure, defineRule } from 'vee-validate'
import Nl2br from 'vue3-nl2br'

configure({
    validateOnBlur: false,
    validateOnChange: false,
    validateOnInput: true,
    validateOnModelUpdate: false
})
const app = createApp({})
// app.config.errorHandler = () => null
// app.config.warnHandler = () => null
defineRule(
    'compareValueLeftThan',
    (value, [target], ctx) => {
        if (value && ctx.form[target]) {
            return parseInt(value) < parseInt(ctx.form[target])
        }
        return true
    },
    {
        hasTarget: true
    }
)
defineRule(
    'required_if',
    (value, [target], ctx) => {
        return !ctx.form[target] && !value ? false : true
    },
    {
        hasTarget: true
    }
)
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

import Dialog from './components/common/popupSuccess.vue'
import RegisterCard from './components/common/registerCard.vue'

import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css'
app.use(VueSweetalert2)

import Register from './components/user/register/index.vue'
import EventForm from './components/user/event/form.vue'
import EventConfirm from './components/user/event/confirm.vue'
import MyEvent from './components/myEvent/index.vue'
import MyEventShow from './components/myEvent/show.vue'
import MyPage from './components/myPage/index.vue'
import Profile from './components/user/profile/index.vue'
import EventReport from './components/eventReport/index.vue'
import DeleteAccount from './components/deleteAccount/index.vue'
import ChangeName from './components/user/changeName/index.vue'
// import Notification from './components/user/profile/setting-notification.vue'
import EventList from './components/user/event/index.vue'
import EventClose from './components/user/event/close.vue'
import PopupAlert from './components/common/popupAlert.vue'
import MyPageEarn from './components/myPage/earn.vue'
import SearchPage from './components/user/search/index.vue'
import NotificationSetting from './components/user/profile/notification-setting.vue'
import UserSetting from './components/user/userSetting/index.vue'

app.component('nl2br', Nl2br)
app.component('popup-alert', PopupAlert)
app.component('register', Register)
app.component('event-form', EventForm)
app.component('event-confirm', EventConfirm)
app.component('my-event', MyEvent)
app.component('my-page', MyPage)
app.component('event-report', EventReport)
app.component('my-event-show', MyEventShow)
app.component('popup-success', Dialog)
app.component('register-card', RegisterCard)
app.component('profile', Profile)
app.component('change-name', ChangeName)
app.component('notification-setting', NotificationSetting)
app.component('event-list', EventList)
app.component('event-close', EventClose)
app.component('my-page-earn', MyPageEarn)
app.component('search-page', SearchPage)
app.component('delete-account', DeleteAccount)
app.component('user-setting', UserSetting)

app.mount('#app')
