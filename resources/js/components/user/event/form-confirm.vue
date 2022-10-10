<template>
  <div class="event-create__wrapper event-confirm mt-16">
    <div class="input-section">
      <h2 class="input-title title-group">
        基本情報 <i class="fa fa-arrow-down" aria-hidden="true"></i>
      </h2>
      <div class="d-group">
        <div class="form-group">
          <label class="form-label">タイトル</label>
          <div>
            <label class="lbl-value">{{ model.name }}</label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">イベントの詳細</label>
          <div>
            <label class="lbl-value">
              <nl2br tag="p" class="nl2br" :text="model.detail" />
            </label>
          </div>
        </div>
        <div class="form-group" v-if="attachmentFiles.length != 0">
          <label class="form-label">添付資料</label>
          <div class="file-list">
            <div
              class="file-item"
              v-for="(item, index) in attachmentFiles"
              :key="index"
            >
              <div>
                <span class="ic-link">
                  <img src="/assets/img/user/event/ic_link.svg" />
                </span>
                <span class="file-name">{{ item.file_name }}</span>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">一覧表示用画像</label>
          <div class="file-list img-list">
            <div class="img-item">
              <img :src="model.image_url" />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">詳細表示用画像</label>
          <div class="file-list img-list">
            <div
              class="img-item"
              v-for="(item, index) in imageDetails"
              :key="index"
            >
              <img :src="item.file_url" />
            </div>
          </div>
        </div>
        <div class="form-group" v-if="model.category_id">
          <label class="form-label">カテゴリ</label>
          <div>
            <label class="lbl-value">{{
              data.categories.find((x) => x.value == model.category_id).label
            }}</label>
          </div>
        </div>
        <div class="form-group" v-if="model.placePref || model.detail_location">
          <label class="form-label">実施地域</label>
          <div v-if="model.placePref">
            <label class="lbl-value">{{ model.placePref }}</label>
          </div>
          <div v-if="model.detail_location">
            <label class="lbl-value">{{ model.detail_location }}</label>
          </div>
        </div>
        <div
          class="form-group form-group-tag"
          v-if="model.event_tags.length != 0"
        >
          <label class="form-label">タグ</label>
          <div class="tag-list">
            <p
              class="tag-item"
              v-for="(item, index) in model.event_tags"
              :key="index"
            >
              # {{ item }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="input-section">
      <h2 class="input-title title-group">
        参加条件<i class="fa fa-arrow-down" aria-hidden="true"></i>
      </h2>
      <div class="d-group">
        <div class="form-group">
          <label class="form-label">対象の性別</label>
          <div>
            <label class="lbl-value">{{ model.targetGenderText }}</label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">対象の年齢</label>
          <div>
            <label class="lbl-value">{{
              model.event_condition.credit_id_type == 0
                ? 'すべて'
                : '年齢を詳細指定'
            }}</label>
          </div>
          <div v-if="model.event_condition.credit_id_type == 1">
            <label class="lbl-value">{{
              model.event_condition.credit_id_from
            }}</label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">参加可能人数</label>
          <div>
            <label class="lbl-value">{{
              model.event_condition.limit_number_of_participants_flag == 0
                ? '何人でも参加可能'
                : '人数制限有り'
            }}</label>
          </div>
          <div
            v-if="model.event_condition.limit_number_of_participants_flag == 1"
          >
            <label class="lbl-value">{{
              model.event_condition.limit_number_of_participants
            }}</label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">参加費用</label>
          <div>
            <label class="lbl-value">{{
              model.event_condition.entry_type == 0
                ? '参加費無料（\0）'
                : '参加費を設定する'
            }}</label>
          </div>
          <div v-if="model.event_condition.entry_type == 1">
            <label class="lbl-value">{{
              model.event_condition.entry_fee
            }}</label>
          </div>
        </div>
        <div class="form-group" v-if="model.event_condition.other_conditions">
          <label class="form-label">その他の参加条件</label>
          <div>
            <label class="lbl-value">
              <nl2br
                tag="p"
                class="nl2br"
                :text="model.event_condition.other_conditions"
              />
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">イベント参加規約</label>
          <div>
            <label class="lbl-value">{{
              model.event_condition.participation_terms_type == 0
                ? 'ひな形をそのまま使用する'
                : 'ひな形を変更する'
            }}</label>
          </div>
        </div>
        <div class="form-group" v-if="model.event_condition.special_notes">
          <label class="form-label">特記事項（任意）</label>
          <div>
            <label class="lbl-value">
              <nl2br
                tag="p"
                class="nl2br"
                :text="model.event_condition.special_notes"
              />
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">住所</label>
          <div>
            <label class="lbl-value">{{ model.event_condition.address }}</label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">氏名または会社名</label>
          <div>
            <label class="lbl-value">{{
              model.event_condition.company_name
            }}</label>
          </div>
        </div>
      </div>
    </div>
    <div class="input-section">
      <h2 class="input-title title-group">
        達成条件と報酬<i class="fa fa-arrow-down" aria-hidden="true"></i>
      </h2>
      <div class="d-group">
        <div class="form-group">
          <label class="form-label">達成条件</label>
          <div>
            <label class="lbl-value">
              <nl2br
                tag="p"
                class="nl2br"
                :text="model.event_condition.meet_condition"
              />
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">報酬</label>
          <div class="input-item-container">
            <div
              class="input-item mt-8"
              v-for="(item, index) in model.event_rewards"
              :key="index"
            >
              <p class="input-sub-title">報酬 {{ index + 1 }}</p>
              <div class="input-item-group">
                <div class="form-group">
                  <label class="form-label">報酬名</label>
                  <div>
                    <label class="lbl-value">
                      {{ item.name }}
                    </label>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="input-col-half">
                    <label class="form-label">報酬額</label>
                    <div class="input-container">
                      <label class="lbl-value">
                        {{ item.reward_amount }}
                      </label>
                      <label class="label">円</label>
                    </div>
                  </div>
                  <div class="input-col-half">
                    <label class="form-label">達成者枠数</label>
                    <div class="input-container">
                      <label class="lbl-value">
                        {{ item.quantity }}
                      </label>
                      <label class="label">枠</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">報酬額合計</label>
                  <div class="input-container">
                    <label class="lbl-value">
                      {{ item.reward_amount * item.quantity }}
                    </label>

                    <label class="label">円</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="input-section">
      <h2 class="input-title title-group">
        開催情報<i class="fa fa-arrow-down" aria-hidden="true"></i>
      </h2>
      <div class="d-group">
        <div class="form-group">
          <label class="form-label">公開期間</label>
          <div>
            <label class="lbl-value">
              {{ model.publish_end_datetime }}
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">開始日時</label>
          <div>
            <label class="lbl-value">
              {{ model.publish_start_datetime }}
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="input-section">
      <h2 class="input-title">支払い方法</h2>
      <div class="form-group">
        <label class="form-label">クレジットカード</label>
        <div class="form-group form-multiple">
          <label class="form-label" require>対象の年齢</label>
          <div class="form-radio">
            <div class="form-check" v-if="data.userCredit">
              <input
                type="radio"
                v-model="credit_id"
                class="form-check-input"
                id="credit_id_1"
                name="event_credit[user_credit_id]"
                :value="data.userCredit.id"
                checked
              />
              <label class="form-check-label label" for="credit_id_1"
                >前回使用したカードを使用する</label
              >
            </div>
            <div v-if="data.userCredit" class="form-group mt-8">
              <table style="width: 100%">
                <thead>
                  <tr>
                    <th>カード番号</th>
                    <th class="text-center">有効期限</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      {{ data.userCredit.brand }}
                      {{ '**** **** **** ' + data.userCredit.last4 }}
                    </td>
                    <td class="text-center">
                      {{
                        data.userCredit.exp_month +
                        '/' +
                        data.userCredit.exp_year
                      }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="form-check">
              <input
                type="radio"
                v-model="credit_id"
                class="form-check-input"
                id="credit_id_2"
                name="event_credit[user_credit_id]"
                :checked="data.userCredit ? false : true"
                :value="0"
              />
              <label class="form-check-label label" for="credit_id_2"
                >新しいカードを使用する</label
              >
            </div>
          </div>
          <div class="form-group mt-8" v-if="credit_id == 0">
            <StripeElements
              v-slot="{ elements }"
              ref="elm"
              :stripe-key="data.STRIPE_PUBLISH_KEY"
            >
              <StripeElement
                ref="card"
                :elements="elements"
                :options="{
                  style: style
                }"
              />
            </StripeElements>
            <Field
              name="card_id"
              type="hidden"
              ref="card_id"
              v-model="card_id"
              rules="required"
            />
            <ErrorMessage class="error-msg" name="card_id" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import $ from 'jquery'
import { StripeElements, StripeElement } from 'vue-stripe-js'
import { Form as VeeForm, Field, ErrorMessage, configure } from 'vee-validate'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
export default {
  components: {
    StripeElements,
    StripeElement,
    Field,
    ErrorMessage
  },
  data() {
    return {
      card_id: '',
      credit_id: this.data.userCredit ? this.data.userCredit.id : 0,
      style: {
        base: {
          color: 'black',
          fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
          fontSmoothing: 'antialiased',
          fontSize: '14px',
          '::placeholder': {
            color: '#aab7c4'
          }
        },
        invalid: {
          color: '#fa755a',
          iconColor: '#fa755a'
        }
      }
    }
  },
  props: ['data', 'model', 'attachmentFiles', 'imageDetails'],
  created() {
    $(document).on('click', '.title-group', function () {
      if ($(this).find('i').hasClass('fa-arrow-down')) {
        $(this).find('i').addClass('fa-arrow-up').removeClass('fa-arrow-down')
      } else {
        $(this).find('i').addClass('fa-arrow-down').removeClass('fa-arrow-up')
      }
      $(this).closest('div').find('.d-group').toggle('slow')
    })
    let messError = {
      en: {
        fields: {
          card_id: {
            required: '新しいカードを使用するを入力してください。'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
  },
  methods: {
    async tokenCreated() {
      let that = this
      this.$refs.elm.instance
        .createToken(this.$refs.card.stripeElement)
        .then((result) => {
          that.card_id = result.token.id
          if (that.card_id) {
            $('.loading-div').removeClass('hidden')
            setTimeout(function () {
              that.$emit('getTokenComplete')
            }, 500)
          }
        })
    }
  },
  watch: {
    card_id() {
      this.$emit('updateCreateCard', this.card_id == 0)
    }
  }
}
</script>

