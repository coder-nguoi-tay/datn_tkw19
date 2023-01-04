<template>
  <div class="support-ticket-modal">
    <!-- <VeeForm
      as="div"
      v-slot="{ handleSubmit }"
      @invalid-submit="onInvalidSubmit"
    > -->
    <form
      id="frmSubmitTicket"
      method="POST"
      enctype="multipart/form-data"
      ref="formData"
    >
      <Field type="hidden" :value="csrfToken" name="_token" />
      <div class="container">
        <div class="support-ticket-modal-header">
          <h4 class="support-ticket-modal-title st-text-highlight">
            Gửi yêu cầu hỗ trợ
          </h4>
        </div>
        <div class="support-ticket-modal-body">
          <div class="st-row">
            <div class="st-form-group st-col-12">
              <span class="st-text-dark-gray" for="name"
                >Họ tên <span class="st-text-red">*</span></span
              >
              <Field
                type="text"
                name="name"
                class="form-control"
                id="name"
                placeholder="Nhập họ tên của bạn"
              />
              <!-- <ErrorMessage class="error" name="name" /> -->
            </div>
          </div>
          <div class="st-row">
            <div class="st-form-group st-col-6">
              <span class="st-text-dark-gray" for="email"
                >Email <span class="st-text-red">*</span></span
              >
              <Field
                type="text"
                class="form-control"
                id="email"
                placeholder="Nhập email của bạn"
              />
              <!-- <ErrorMessage class="error" name="email" /> -->
            </div>
          </div>
          <div class="st-row">
            <div class="st-form-group st-col-6">
              <span class="st-text-dark-gray" for="phone"
                >Số điện thoại <span class="st-text-red">*</span></span
              >
              <Field
                type="text"
                class="form-control"
                id="phone"
                placeholder="Nhập số điện thoại"
              />
              <!-- <ErrorMessage class="error" name="phone" /> -->
            </div>
          </div>
          <div class="st-row">
            <div class="st-form-group st-col-12">
              <span class="st-text-dark-gray"
                >Vấn đề cần hỗ trợ <span class="st-text-red">*</span></span
              >
              <Field
                name="support"
                as="select"
                type="text"
                class="form-select"
              />
              <!-- <ErrorMessage class="error" name="support" /> -->
            </div>
          </div>

          <div class="st-row">
            <div class="st-form-group st-col-12">
              <span class="st-text-dark-gray" for="mo_ta"
                >Mô tả vấn đề cần hỗ trợ
                <span class="st-text-red">*</span></span
              >
              <textarea
                class="form-control"
                id="mo_ta"
                rows="3"
                placeholder="Mô tả rõ vấn đề bạn gặp phải hoặc thông tin góp ý để ITWork có thể xử lý chính xác nhất."
              ></textarea>
              <!-- <ErrorMessage class="error" name="mo_ta" /> -->
              
            </div>
          </div>
        </div>
        <div class="support-ticket-modal-footer text-center">
          <button
            type="submit"
            style="min-width: 117px; margin-left: 10px"
            class="st-btn st-btn-primary"
          >
            Gửi yêu cầu
          </button>
        </div>
      </div>
    </form>
    <!-- </VeeForm> -->
  </div>
</template>

<script>
import {
  Form as VeeForm,
  Field,
  // ErrorMessage,
  defineRule,
  configure
} from 'vee-validate'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import $ from 'jquery'
export default {
  // setup() {
  //   Object.keys(rules).forEach((rule) => {
  //     if (rule != 'default') {
  //       defineRule(rule, rules[rule])
  //     }
  //   })
  // },
  components: {
    VeeForm,
    Field
    // ErrorMessage
  },
  // props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {}
    }
  },
  created() {
    let messError = {
      // en: {
      //   fields: {
      //     name: {
      //       required: 'Xin hãy nhập tên của bạn.',
      //       max: 'Vui lòng nhập tên của bạn trong 128 ký tự.'
      //     },
      //     support: {
      //       required: 'Vui lòng chọn vấn đề cần hỗ trợ.'
      //     },
      //     email: {
      //       required: 'Hãy điền địa chỉ email của bạn.',
      //       email: 'Vui lòng nhập đúng định dạng địa chỉ email.',
      //       max: 'Vui lòng nhập địa chỉ email của bạn trong 255 ký tự.'
      //     },
      //     phone: {
      //       required: 'Vui lòng nhập số điện thoại',
      //       telephone: 'Vui lòng nhập chính xác định dạng số điện thoại.'
      //     },
      //     mo_ta: {
      //       required: 'vui lòng mô tả vấn đề cần hỗ trợ.',
      //       max: 'Mô tả vấn đề cần hỗ trợ quá 255 ký tự.'
      //     }
      //   }
      // }
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

