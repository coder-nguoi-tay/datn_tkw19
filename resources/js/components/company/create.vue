<template>
  <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
    <form
      class="recuitment-form"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
      method="POST"
      :action="data.urlStore"
      enctype="multipart/form-data"
    >
      <input type="hidden" name="_token" :value="csrfToken" />
      <div class="mb-3"></div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Tên công ty<span class="required-lable">*</span></label
        >
        <Field
          type="text"
          name="name"
          rules="required|max:255"
          class="form-control"
          v-model="model.name"
          id="exampleFormControlInput1"
          placeholder="Nhập tên công ty"
        />
        <ErrorMessage class="error" name="name" />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Địa chỉ<span class="required-lable">*</span></label
        >
        <Field
          type="text"
          rules="required|max:255"
          name="address"
          v-model="model.address"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Nhập địa chỉ"
        />
        <ErrorMessage class="error" name="address" />
      </div>
      <div class="mb-3">
        <div class="row">
          <label for="exampleFormControlInput1" class="form-label"
            >Sơ lược về công ty<span class="required-lable">*</span></label
          >
        </div>

        <div class="row" style="margin-left: 1px">
          <Editor
            name="desceibe"
            v-model="model.desceibe"
            class="text-company-employer"
            rules="required|max:255"
          />
        </div>
        <ErrorMessage class="error" name="desceibe" />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Số lượng thành viên<span class="required-lable">*</span></label
        >
        <Field
          type="number"
          name="number_member"
          rules="required"
          v-model="model.number_member"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Nhập số lượng thành viên"
        />
        <ErrorMessage class="error" name="number_member" />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Email công ty<span class="required-lable">*</span></label
        >
        <Field
          type="email"
          name="email"
          rules="required|max:255|email"
          v-model="model.email"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Nhập email công ty"
        />
        <ErrorMessage class="error" name="email" />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"
          >Logo công ty<span class="required-lable">*</span></label
        >
        <Field
          type="file"
          name="logo"
          v-model="model.logo"
          class="form-control"
          id="exampleFormControlInput1"
        />
        <ErrorMessage class="error" name="logo" />
      </div>
      <button type="submit" class="btn btn-primary" style="margin-left: 48%">
        Lưu
      </button>
    </form>
  </VeeForm>
</template>

<script>
import {
  Form as VeeForm,
  Field,
  ErrorMessage,
  defineRule,
  configure
} from 'vee-validate'

import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import Editor from '@tinymce/tinymce-vue'
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
    Editor,
    ErrorMessage
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {}
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          name: {
            required: 'Tên công ty không được bỏ trống',
            max: 'Tên công ty không được quá 255 ký tự'
          },
          address: {
            required: 'Địa chỉ không được bỏ trống',
            max: 'Địa chỉ không được quá 255 ký tự'
          },
          desceibe: {
            required: 'Mô tả không được bỏ trống',
            max: 'Mô tả không được quá 255 ký tự'
          },
          number_member: {
            required: 'Số lượng thành viên không được bỏ trống',
            max: 'Số lượng thành viên không được quá 255 ký tự'
          },
          email: {
            required: 'Email không được bỏ trống',
            max: 'Email không được quá 255 ký tự'
          },
          logo: {
            required: 'Logo không được bỏ trống',
            max: 'Logo không được quá 255 ký tự'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      this.$el.querySelector('input[name=' + firstInputError + ']').focus()
      $('html, body').animate(
        {
          scrollTop: $('input[name=' + firstInputError + ']').offset().top - 150
        },
        500
      )
    },
    onSubmit() {
      this.$refs.formData.submit()
    }
  }
}
</script>

<style>
</style>