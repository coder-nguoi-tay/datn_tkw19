
  <!-- <div class="container">
    <div class="fade-in">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <form action="">
              <div class="card-body">
                <div class="row">
                  <div class="mb-2">
                    <label for="">通知受信用メールアドレス</label>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="" id="" class="form-control" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="">お得情報通知</label>
                    <span>受け取る</span>
                  </div>
                  <div class="col-sm-6">Toggle</div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> -->


<template>
  <div class="notification-container">
    <div class="row">
      <div class="col-md-12">
        <div class="card notification-card">
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

              <div class="card-body" style="margin-left: 15px">
                <div class="input-label m-t-10">
                  <span>通知受信用メールアドレス</span>
                  <span class="required black">任意</span>
                </div>
                <div class="form-group">
                  <Field
                    name="notcie_email"
                    type="text"
                    v-model="model.notcie_email"
                    autocomplete="off"
                    :value="data.user.notcie_email"
                    rules="required|email"
                    class="form-control input-bg placeholder"
                  />
                  <ErrorMessage class="error-msg" name="notcie_email" />
                </div>
             

                <!-- deals_notification_flag -->

                <div class="input-label m-t-10">お得情報通知</div>
                <div class="d-flex align-items-center display-item">
                  <div class="input-text m-t-10">受け取る</div>
                  <div class="display-toggle d-flex">
                    <Toggle
                      name="deals_notification_flag"
                      v-model="model.deals_notification_flag"
                      :value="model.deals_notification_flag"
                      trueValue="1"
                      falseValue="0"
                    />
                  </div>
                </div>

                <!-- publish_chat_notification_flag -->

                <div class="input-label m-t-10">公開チャット通知</div>
                <div class="d-flex align-items-center display-item">
                  <div class="input-text m-t-10">受け取る</div>
                  <div class="display-toggle d-flex">
                    <Toggle
                      name="publish_chat_notification_flag"
                      v-model="model.publish_chat_notification_flag"
                      :value="model.publish_chat_notification_flag"
                      trueValue="1"
                      falseValue="0"
                    />
                  </div>
                </div>

                <!-- participant_chat_notification_flag -->

                <div class="input-label m-t-10">参加者専用チャット通知</div>
                <div class="d-flex align-items-center display-item">
                  <div class="input-text m-t-10">受け取る</div>
                  <div class="display-toggle d-flex">
                    <Toggle
                      name="participant_chat_notification_flag"
                      v-model="model.participant_chat_notification_flag"
                      :value="model.participant_chat_notification_flag"
                      trueValue="1"
                      falseValue="0"
                    />
                  </div>
                </div>

                <!-- event_join_notification_flag -->
                <div class="input-label m-t-10">
                  参加イベントのアクション通知
                </div>
                <div class="d-flex align-items-center display-item">
                  <div class="input-text m-t-10">受け取る</div>
                  <div class="display-toggle d-flex">
                    <Toggle
                      name="event_join_notification_flag"
                      v-model="model.event_join_notification_flag"
                      :value="model.event_join_notification_flag"
                      trueValue="1"
                      falseValue="0"
                    />
                  </div>
                </div>
                <!-- Button-->
                <!-- <div class="status">
                  <button
                    type="submit"
                    class="btn btn-danger"
                    style="margin-top: 20px; margin-right: 10px"
                  >
                    保存する
                  </button>
                </div> -->
                <div class="m-t-4 d-flex submit-change">
                  <button type="submit" ref="btnSubmit" class="btn-submit_nor">
                    保存する
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
        deals_notification_flag:
          this.data.user.deals_notification_flag === 1 ? true : false,
        publish_chat_notification_flag:
          this.data.user.publish_chat_notification_flag === 1 ? true : false,
        participant_chat_notification_flag:
          this.data.user.participant_chat_notification_flag === 1
            ? true
            : false,
        event_join_notification_flag:
          this.data.user.event_join_notification_flag === 1 ? true : false
        // deals_notification_flag: true,
        // publish_chat_notification_flag: true,
        // participant_chat_notification_flag: true,
        // event_join_notification_flag: true
      }
    }
  },

  created() {
    let messError = {
      en: {
        fields: {
          notcie_email: {
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


