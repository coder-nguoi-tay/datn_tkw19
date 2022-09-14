<template>
  <div class="container container-setting">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <VeeForm
            as="div"
            v-slot="{ handleSubmit }"
            @invalid-submit="onInvalidSubmit"
          >
            <form
              method="POST"
              @submit="handleSubmit($event, onSubmit)"
              :action="data.urlStore"
              ref="formData"
            >
              <Field type="hidden" :value="csrfToken" name="_token" />

              <div class="card-body card-login" style="margin-left: 15px">
                <div class="col-sm-12" style="margin-top: -30px">
                  <div class="left-title">
                    <div class="form-group text-left">
                      <h5 style="font-weight: 600">
                        通知 受信 用 メール アドレス
                      </h5>
                    </div>
                  </div>
                  <div class="right-title">
                    <span class="btn-title" style="text-decoration: none"
                      >必須</span
                    >
                  </div>
                </div>
                <Field
                  type="text"
                  class="form-control"
                  placeholder="sample@example.com"
                  style="margin-top: 40px"
                  name="email"
                  :value ="data.user.email"
                  v-model="model.email"
                  rules="required|email"
                />
                <ErrorMessage class="error" name="email" />
                <!--Status-->
                <div class="col-sm-12">
                  <div class="left">
                    <div class="form-group text-left">
                      <h6 style="font-weight: 600">お得情報通知</h6>

                      <label for="">受け取る</label>
                    </div>
                  </div>
                  <div class="right">
                    <div class="form-check form-switch">
                      <Toggle
                        class="toggle_status"
                        name="deal_noti_flag"
                        :value="data.user.deal_noti_flag"
                        v-model="model.deal_noti_flag"
                        trueValue="1"
                        falseValue="0"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="left">
                    <div class="form-group text-left">
                      <h6 style="font-weight: 600">公開 チャット 通知</h6>
                      <label for="">受け取る</label>
                    </div>
                  </div>
                  <div class="right">
                    <div class="form-check form-switch">
                      <Toggle
                        class="toggle_status"
                        name="public_chat_noti"
                        :value="data.user.public_chat_noti"
                        v-model="model.public_chat_noti"
                        trueValue="1"
                        falseValue="0"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="left">
                    <div class="form-group text-left">
                      <h6 style="font-weight: 600">
                        参加 者 専用 チャット 通知
                      </h6>
                      <label for="">受け取る</label>
                    </div>
                  </div>
                  <div class="right">
                    <div class="form-check form-switch">
                      <Toggle
                        class="toggle_status"
                        name="join_event_noti"
                        v-model="model.join_event_noti"
                        :value="model.join_event_noti"
                        trueValue="1"
                        falseValue="0"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="left">
                    <div class="form-group text">
                      <h6 style="font-weight: 600">
                        参加 イベントのアクション通知
                      </h6>
                      <label for="">受け取る</label>
                    </div>
                  </div>
                  <div class="right">
                    <div class="form-check form-switch" style="">
                      <Toggle
                        class="toggle_status"
                        :value="model.receiving_noti_flag"
                        name="receiving_noti_flag"
                        v-model="model.receiving_noti_flag"
                        trueValue="1"
                        falseValue="0"
                      />
                    </div>
                  </div>
                </div>
                <!-- Button-->
                <div class="status">
                  <button
                    type="submit"
                    class="btn btn-danger"
                    style="margin-top: 20px; margin-right: 10px"
                  >
                    保存 する
                  </button>
                  <button
                    type="button"
                    class="btn btn-outline-danger"
                    style="margin-top: 20px"
                  >
                   <a :href="data.urlMyevent" class="back-url">戻る</a>
                  </button>
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
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import $ from 'jquery'
import Loader from '../../common/loader'
import Toggle from '@vueform/toggle'
import '@vueform/toggle/themes/default.css'

export default {
  props: ['data'],

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
    Loader,
    Toggle,
    ErrorMessage
  },

  data: function () {
    return {
      csrfToken: Laravel.csrfToken,
      flagShowLoader: false,
      model: {
        deal_noti_flag: this.data.user.deal_noti_flag === 1 ? true : false,
        public_chat_noti: this.data.user.public_chat_noti === 1 ? true : false,
        join_event_noti: this.data.user.join_event_noti === 1 ? true : false,
        receiving_noti_flag:
          this.data.user.receiving_noti_flag === 1 ? true : false
      }
    }
  },

  created() {
    let messError = {
      en: {
        fields: {
          email: {
            required: '電話番号 / メールアドレスを入力してください。',
            email: 'メールの形式が正しくありません'
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
      this.flagShowLoader = true
      
    }
  }
}
</script>


