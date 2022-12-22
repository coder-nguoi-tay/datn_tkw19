<template>
    <div class="container container_package content-wrapper">
        <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
            <form method="POST" @submit="handleSubmit($event, onSubmit)" ref="formData" :action="data.urlStore">
                <input type="hidden" :value="csrfToken" name="_token" />
                <div class="col">
                    <label class="form-label">Name</label>
                    <Field type="text" name="name" rules="required|max:255" v-model="model.name" class="form-control" />
                    <ErrorMessage class="error" name="name" />
                </div>
                <div class="col">
                    <label class="form-label">Email</label>
                    <Field type="text" name="email" rules="required|email" v-model="model.email" class="form-control" />
                    <ErrorMessage class="error" name="email" />
                </div>
                <div class="col">The "2.0" constraint for "laravel/ui" appears too strict and will likely not match what you want. See https://getcomposer.org/constraints
                    <label class="form-label">Password</label>
                    <Field type="password" name="password" rules="required|max:16|min:8|password_rule"
                        v-model="model.password" class="form-control" />
                    <ErrorMessage class="error" name="password" />
                </div>
                <div class="col">
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <Field type="password" name="password_role" rules="required|confirmed:@password"
                        v-model="model.password_role" class="form-control" />
                    <ErrorMessage class="error" name="password_role" />
                </div>
                <div class="text-center text-1">
                    <a :href="data.urlBack" class="btn btn-danger" style="margin-right:10px ;">
                        Cancel
                    </a>
                    <button class="btn btn-info">Thực Hiện</button>

                </div>
            </form>
        </VeeForm>
    </div>
</template>
<script>
import {
    Form as VeeForm,
    Field,
    ErrorMessage,
    defineRule,
    configure,
} from "vee-validate";
import { localize } from "@vee-validate/i18n";
import * as rules from "@vee-validate/rules";
import $ from "jquery";
export default {
    setup() {
        Object.keys(rules).forEach((rule) => {
            if (rule != "default") {
                defineRule(rule, rules[rule]);
            }
        });
    },
    components: {
        VeeForm,
        Field,
        ErrorMessage,
    },
    props: ["data"],
    data: function () {
        return {
            csrfToken: Laravel.csrfToken,
            model: {},
        };
    },
    created() {
        let messError = {
            en: {
                fields: {
                    name: {
                        required: "Tên  không được để trống",
                        max: "Tên không được vượt qua 255 ký tự",
                    },
                    email: {
                        required: "Email không được để trống",
                        email: "Email không đúng định dạng",
                    },
                    password: {
                        required: "password không được để trống",
                        max: "password từ 8 đến 16 ký tự",
                        min: "password từ 8 đến 16 ký tự",
                        password_rule: "Mật khẩu không đúng định dạng",
                    },
                    password_role: {
                        required: "Mật khẩu 2 không được để trống",
                        confirmed: "2 mật khẩu phải giống nhau",
                    },
                },
            },
        };
        configure({
            generateMessage: localize(messError),
        });
    },
    methods: {
        onInvalidSubmit({ values, errors, results }) {
            let firstInputError = Object.entries(errors)[0][0];
            this.$el
                .querySelector("input[name=" + firstInputError + "]")
                .focus();
            $("html, body").animate(
                {
                    scrollTop:
                        $("input[name=" + firstInputError + "]").offset().top -
                        150,
                },
                500
            );
        },
        onSubmit() {
            this.$refs.formData.submit();
        },
    },
};
</script>
<style>
.container_package {
    margin: 0 auto;
    width: 50%;
    margin-top: 10px;
}

.text-title {
    font-size: 30px;
    font-weight: 700;
}

.form-label {
    float: left;
    margin-top: 10px;
    font-size: 20px;
}

.btn-primary {
    margin-top: 50px;
    margin-bottom: 50px;
}

.text-1 {
    margin-top: 30px !important;
}
</style>
