<template>
    <UserHeader :data="{
      prev: {
        url: data.urlBack
      },
      page_name: 'パスワード設定'
    }"></UserHeader>
    <div class="password-change">
        <div class="container password-change__container">
            <VeeForm as="div" v-slot="{ handleSubmit,values,errors}" @submit="null" @invalid-submit="onInvalidSubmit">
                <form method="POST" @submit.prevent="handleSubmit(onSubmit)" :action="data.urlUpdate" ref="formData"
                    id="formData">
                    <input type="hidden" :value="csrfToken" name="_token" />
                    <div class="password-change__wrapper">
                        <div class="input-section">
                            <div class="form-group">
                                <label class="form-label" require>現在のパスワード</label>
                                <div class="position-relative">
                                    <!-- rules="required|max:16|min:8" -->
                                    <Field name="current_password" type="password" class="form-control"
                                        placeholder="********" @keyup="onKeyUpPasswordField(errors, values)" />

                                    <span v-if="values['current_password']" toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"
                                        toggle-target="current_password" @click.prevent="onShowPassword"></span>
                                </div>
                                <ErrorMessage class="error-msg" name="current_password" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" require>新しいパスワード</label>
                                <div class="position-relative">
                                    <!-- rules="required|max:255|min:8|newPass:@current_password" -->
                                    <Field name="new_password" type="password" ref="new_passwordRef"
                                        class="form-control" placeholder="********"
                                        @keyup="onKeyUpPasswordField( errors, values)" />

                                    <span v-if="values['new_password']" toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password" toggle-target="new_password"
                                        @click="onShowPassword"></span>
                                </div>
                                <ErrorMessage class="error-msg" name="new_password" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" require>新しいパスワード (確認)</label>
                                <div class="position-relative">
                                    <!-- rules="required|max:16|min:8|confirmed:@new_password" -->
                                    <Field name="confirm_password" type="password" ref="confirm_password"
                                        class="form-control" placeholder="********"
                                        @keyup="onKeyUpPasswordField( errors, values)" />
                                    <span v-if="values['confirm_password']" toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"
                                        toggle-target="confirm_password" @click="onShowPassword"></span>
                                </div>
                                <ErrorMessage class="error-msg" name="confirm_password" />
                            </div>
                            <button class="btn btn-submit" disabled>アップデート</button>
                        </div>
                    </div>
                </form>
            </VeeForm>
        </div>
    </div>
    <popup-alert :data="dataAlert"></popup-alert>
</template>

<script>
import {
    Form as VeeForm,
    Field,
    ErrorMessage,
    defineRule,
    configure,
} from 'vee-validate'
import Datepicker from '@vuepic/vue-datepicker'
import $ from 'jquery'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import UserHeader from '../../common/userHeader.vue'
import Toggle from '@vueform/toggle'
import '@vueform/toggle/themes/default.css'

// defineRule('confirmed', (value, [target]) => {
//     if (value === target) {
//         return true;
//     }
//     return false;
// });

// defineRule('newPass', (value, [target]) => {
//     if (value !== target) {
//         return true;
//     }
//     return '新しいパスワードを現在のパスワードと同じにすることはできません';
// });

export default {
    setup() {
        Object.keys(rules).forEach((rule) => {
            if (rule != 'default') {
                defineRule(rule, rules[rule])
            }
        })
    },
    components: {
        VeeForm,
        Field,
        ErrorMessage,
        Datepicker,
        UserHeader,
        Toggle
    },
    props: ['data', 'dataModel'],
    data: function () {
        return {
            model: this.data.user,
            csrfToken: Laravel.csrfToken,
            statusShowPasswordFields: {},
            dataAlert: null
        }
    },
    created() {
        let messError = {
            en: {
                // fields: {
                //     current_password: {
                //         required: 'アカウント名を入力してください。',
                //         max: '255文字以内で入力してください。',
                //         min: '8 文字以上'
                //     },
                //     new_password: {
                //         required: 'イベントの詳細を入力してください。',
                //         max: '255文字以内で入力してください。',
                //         min: '8 文字以上',
                //     },
                //     confirm_password: {
                //         required: 'イベントの詳細を入力してください。',
                //         max: '255文字以内で入力してください。',
                //         min: '8 文字以上',
                //         confirmed: '確認パスワードは新しいパスワードと同じでなければなりません'
                //     }
                // }
            }
        }
        configure({
            generateMessage: localize(messError)
        })
    },
    methods: {
        onInvalidSubmit({ values, errors, results }) {
            let firstInputError = Object.entries(errors)[0][0]
            let ele = $('[name="' + firstInputError + '"]')
            if (
                $('[name="' + firstInputError + '"]').hasClass('hidden') ||
                $('[name="' + firstInputError + '"]').attr('type') == 'hidden'
            ) {
                ele = $('[name="' + firstInputError + '"]').closest('div')
            }
            ele.focus()
            $('html, body').animate(
                {
                    scrollTop: ele.offset().top - 150 + 'px'
                },
                500
            )
        },
        onKeyUpPasswordField(errors, values) {
            const currentPassword = values['current_password'];
            const newPassword = values['new_password'];
            const confirmPassword = values['confirm_password'];

            const isValidForm = newPassword && currentPassword && confirmPassword
            if ($.isEmptyObject(errors) && isValidForm) {
                $('.btn-submit').prop('disabled', false)
            }
            else {
                $('.btn-submit').prop('disabled', true)
            }
        },
        onShowPassword(event) {
            const currentShowPasswordIcon = $(event.target);
            currentShowPasswordIcon.toggleClass("fa-eye fa-eye-slash")
            const fieldPassword = $('input[name="' + currentShowPasswordIcon.attr('toggle-target') + '"]')
            if (fieldPassword.attr("type") == "password") {
                fieldPassword.attr("type", "text")
            } else {
                fieldPassword.attr("type", "password")
            }
        },
        resetDataAlert() {
            this.dataAlert = null
        },
        onSubmit() {
            let that = this
            $('.loading-div').removeClass('hidden')
            axios
                .post(this.data.urlUpdate, $('#formData').serialize())
                .then(function (response) {
                    $('.loading-div').addClass('hidden')
                    console.log(response)
                    that.dataAlert = {
                        message: response.data['message'],
                        content: response.data['content'],
                        mode: response.data['mode'],
                        urlRedirect: ''
                    }

                })
                .catch((error) => {
                    $('.loading-div').addClass('hidden')
                    that.dataAlert = {
                        message: error.response.data.message,
                        mode: 'error',
                        urlRedirect: ''
                    }
                })
        },
    },
}
</script>

