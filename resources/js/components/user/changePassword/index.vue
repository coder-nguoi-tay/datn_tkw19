<template>
  <UserHeader
    :data="{
      prev: {
        url: data.urlBack
      },
      page_name: 'パスワード設定'
    }"
  ></UserHeader>
  <div class="event-create">
    <div class="container event-create__container user-setting">
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
          <div class="form-group">
            <label class="form-label" require>現在のパスワード</label>
            <div class="position-relative">
              <Field
                name="password_old"
                type="password"
                v-model="model.password_old"
                rules="required|min:8|max:16|password_rule"
                class="form-control"
                placeholder="●●●●●●●●"
              />
              <span
                toggle="#password-field"
                class="fa fa-fw fa-eye field-icon toggle-password"
                toggle-target="password_old"
                @click.prevent="onShowPassword"
              ></span>
              <ErrorMessage class="error-msg" name="password_old" />
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" require>新しいパスワード</label>
            <div class="position-relative">
              <Field
                name="password_new"
                type="password"
                v-model="model.password_new"
                rules="required|min:8|max:16|password_rule"
                class="form-control"
                ref="password_new"
                placeholder="●●●●●●●●●●"
              />
              <span
                toggle="#password-field"
                class="fa fa-fw fa-eye field-icon toggle-password"
                toggle-target="password_new"
                @click.prevent="onShowPassword"
              ></span>
              <ErrorMessage class="error-msg" name="password_new" />
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" require>新しいパスワード（確認）</label>
            <div class="position-relative">
              <Field
                name="confirm_password"
                type="password"
                v-model="model.confirm_password"
                rules="required|password_rule|confirmed:@password_new"
                class="form-control"
                placeholder="●●●●●●●●●●"
              />
              <span
                toggle="#password-field"
                class="fa fa-fw fa-eye field-icon toggle-password"
                toggle-target="confirm_password"
                @click.prevent="onShowPassword"
              ></span>
            </div>
            <ErrorMessage class="error-msg" name="confirm_password" />
          </div>
          <button class="btn btn-submit">保存する</button>
        </form>
      </VeeForm>
    </div>
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
import $ from 'jquery'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import UserHeader from '../../common/userHeader.vue'

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
    UserHeader
  },
  props: ['data'],
  data: function () {
    return {
      model: {},
      csrfToken: Laravel.csrfToken
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          password_old: {
            required: '現在のパスワードを入力してください。',
            max: '現在のパスワードは８文字～１６文字入力してください。',
            min: '現在のパスワードは８文字～１６文字入力してください。',
            password_rule:
              '現在のパスワードは半角英数字で、大文字、小文字、数字で入力してください。'
          },
          password_new: {
            required: '新しいパスワードを入力してください。',
            max: '新しいパスワードは８文字～１６文字入力してください。',
            min: '新しいパスワードは８文字～１６文字入力してください。',
            password_rule:
              '新しいパスワードは半角英数字で、大文字、小文字、数字で入力してください。'
          },
          confirm_password: {
            required: '新しいパスワード（確認）を入力してください。',
            confirmed:
              '新しいパスワード（確認）は新しいパスワードと同じでなければなりません'
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
    onShowPassword(event) {
      const currentShowPasswordIcon = $(event.target)
      currentShowPasswordIcon.toggleClass('fa-eye fa-eye-slash')
      const fieldPassword = $(
        'input[name="' + currentShowPasswordIcon.attr('toggle-target') + '"]'
      )
      if (fieldPassword.attr('type') == 'password') {
        fieldPassword.attr('type', 'text')
      } else {
        fieldPassword.attr('type', 'password')
      }
    },
    onSubmit() {
      $('.loading-div').removeClass('hidden')
      this.$refs.formData.submit()
    }
  }
}
</script>

