<template>
  <div class="name">
    <div class="container change-name">
      <div class="form-content">
        <div class="name-form">
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
              id="form-data"
            >
              <Field type="hidden" :value="csrfToken" name="_token" />
              <Field type="hidden" value="PUT" name="_method" />
              <div class="name__container">
                <div class="name">
                  <div class="input-label m-t-10">
                    <span>アカウント表示名</span>
                    <span class="required">必須</span>
                  </div>
                  <div class="form-group">
                    <Field
                      name="show_name"
                      type="text"
                      v-model="model.show_name"
                      autocomplete="off"
                      rules="required|max:255"
                      class="form-control input-bg placeholder"
                    />
                    <ErrorMessage class="error-msg" name="show_name" />
                  </div>
                  <div class="input-label m-t-10">
                    <span>自己紹介文</span>
                    <span class="required black">任意</span>
                  </div>
                  <div class="form-group">
                    <Field
                      as="textarea"
                      rows="5"
                      name="memo"
                      v-model.trim="model.memo"
                      autocomplete="off"
                      rules="required|max:10000"
                      class="form-control input-bg placeholder"
                    />
                    <ErrorMessage class="error-msg" name="memo" />
                  </div>
                  <div class="input-label m-t-10">ユーザー情報表示</div>
                  <div class="d-flex align-items-center display-item">
                    <div class="input-text m-t-10">表示する</div>
                    <div class="display-toogle d-flex">
                      <Toggle
                        name="display_info_flag"
                        v-model="model.display_info_flag"
                      />
                    </div>
                  </div>
                </div>
                <div class="m-t-4 d-flex submit-change">
                  <button type="submit" ref="btnSubmit" class="btn-submit_nor">
                    保存する
                  </button>
                  <a :href="data.urlBack">
                    <button class="btn btn-submit_ex">戻る</button>
                  </a>
                </div>
              </div>
            </form>
          </VeeForm>
        </div>
      </div>
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
import Loader from '../../common/loader'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import $ from 'jquery'
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
    Loader,
    VeeForm,
    Field,
    ErrorMessage,
    Toggle
  },
  props: ['data'],
  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      flagShowLoader: false,
      model: {
        display_info_flag: true
      },
      error: ''
    }
  },
  created() {
    let messError = {
      en: {
        fields: {
          show_name: {
            required: '表示名を入力してください。',
            max: '表示名255文字を超えてはなりません。'
          },
          memo: {
            required: '自己紹介文を入力してください。',
            max: '自己紹介文10000文字を超えてはなりません。'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
    this.model = this.data.user
  },
  methods: {
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      this.$el.querySelector('[name=' + firstInputError + ']').focus()
      $('html, body').animate(
        {
          scrollTop: $('[name=' + firstInputError + ']').offset().top - 150
        },
        500
      )
    },
    onSubmit() {
      this.flagShowLoader = true
      this.$refs.formData.submit()
    }
  }
}
</script>
