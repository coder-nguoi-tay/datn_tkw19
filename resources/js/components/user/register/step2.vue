<template>
  <VeeForm
    as="div"
    v-if="step == 1"
    v-slot="{ handleSubmit }"
    @invalid-submit="onInvalidSubmit"
  >
    <form
      method="POST"
      @submit="handleSubmit($event, onSubmit)"
      ref="formData"
    >
      <div class="step__container">
        <div class="step">
          <div class="input-label">アカウント情報</div>
          <label class="input-label">表示名</label>
          <div class="input-group">
            <Field
              name="show_name"
              type="text"
              v-model="model.show_name"
              rules="required|telephone"
              class="form-control input-tel"
              placeholder="ララプラ太郎"
            />
          </div>
          <ErrorMessage class="error-msg" name="show_name" />
        </div>
      </div>
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
import { VueRecaptcha } from 'vue-recaptcha'
import $ from 'jquery'
import axios from 'axios'
import VOtpInput from 'vue3-otp-input'
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
    VueRecaptcha,
    VOtpInput
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      model: {
        // phone_number: '0368278668'
      },
      step: 1,
      step1: 1,
      error: '',
      showRecapchar: false
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          phone_number: {
            required: '電話番号を入力してください。',
            telephone: '電話番号が正しい形式ではありません。'
          },
          recaptcha_token: {
            required: 'reCAPTCHAを入力してください。'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    verifyMethod(val) {
      this.model.recaptcha_token = val
    },
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
      let that = this
      $('.loading-div').removeClass('hidden')
      axios
        .post(this.data.urlSendCode, {
          _token: Laravel.csrfToken,
          phone_number: this.model.phone_number
        })
        .then(function (response) {
          $('.loading-div').addClass('hidden')
          // response.data.valid
          that.step1 = 2
        })
        .catch((error) => {
          $('.loading-div').addClass('hidden')
          const { status } = error.response || {}
          if (status == 500 || status == 429 || status == 400) {
            that.error = error.response.data.message
            that.showRecapchar = true
          }
        })
      //   this.flagShowLoader = true
      //   this.$refs.formData.submit()
    }
  }
}
</script>
