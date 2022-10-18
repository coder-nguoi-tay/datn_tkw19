<template>
  <UserHeader
    :data="{
      prev: {
        url: data.urlBack
      },
      page_name: 'メールアドレス設定'
    }"
  ></UserHeader>
  <div class="event-create">
    <div class="container event-create__container profile-container">
      <VeeForm
        as="div"
        v-slot="{ handleSubmit }"
        @invalid-submit="onInvalidSubmit"
      >
        <form
          method="POST"
          @submit="handleSubmit($event, onSubmit)"
          :action="data.urlUpdate"
          ref="formData"
          id="formData"
        >
          <input type="hidden" value="PUT" name="_method" />
          <input type="hidden" :value="csrfToken" name="_token" />
          <div class="event-create__wrapper">
            <div class="input-section">
              <div class="form-group">
                <label class="form-label noti-lbl" optional
                  >メールアドレス</label
                >
                <Field
                  name="email"
                  type="text"
                  class="form-control"
                  rules="email|unique_email"
                  v-model="model.email"
                  placeholder="sample@example.com"
                />
                <ErrorMessage class="error-msg" name="email" />
                <p class="note mt-1">
                  ※キャリアメールや独自ドメインでのメールではなくインターネットメールアドレスの使用をおすすめいたします。
                </p>
              </div>
              <button class="btn btn-submit">保存する</button>
            </div>
          </div>
        </form>
      </VeeForm>
    </div>
    <loader :flag-show="flagShowLoader"></loader>
  </div>
</template>
<script>
import {
  Form as VeeForm,
  Field,
  ErrorMessage,
  defineRule,
  configure
} from 'vee-validate'
import Datepicker from '@vuepic/vue-datepicker'
import $ from 'jquery'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import UserHeader from '../../common/userHeader.vue'
import Toggle from '@vueform/toggle'
import '@vueform/toggle/themes/default.css'
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
      csrfToken: Laravel.csrfToken
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          email: {
            email: 'メールアドレスを正確に入力してください',
            unique_email: 'このメールアドレスは既に登録されています'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
    let that = this
    defineRule('unique_email', (value) => {
      return axios
        .post(that.data.urlCheckEmail, {
          value: value
        })
        .then(function (response) {
          return response.data.valid
        })
        .catch((error) => {})
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
    onSubmit() {
      $('.loading-div').removeClass('hidden')
      this.$refs.formData.submit()
    }
  }
}
</script>

