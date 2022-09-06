<template>
  <div class="register-card" v-if="flagShow">
    <div class="close-popup text-end">
      <button @click="$emit('close')">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
    </div>
    <div class="container card">
      <div class="register-card__header my-2">
        <p>報奨金をクレジットする</p>
      </div>
      <div class="register-card__desc mb-2">
        <p>
          イベント投稿時に報奨金額分、登録したクレジットカードから与信枠が確保されます。イベント達成時に報奨金分が引き落しされ、達成者がいない場合は引き落としがキャンセルされます。
        </p>
      </div>
      <div class="register-card__body row">
        <form>
          <input type="hidden" :value="csrfToken" name="_token" />
          <div v-if="hasCard">
            <div class="mt-3">
              <input
                type="radio"
                name="option"
                v-model="option"
                class="me-1"
                value="1"
              />
              <label>前回使用したカードを使用する</label>
              <div
                class="register-card__info card mt-2"
                :class="{ disable: disableCard }"
              >
                <div class="row">
                  <div class="col-6 pe-0">
                    <p>カード番号</p>
                    <img
                      src="/assets/img/user/common/new_visa.png"
                      alt=""
                    /><span>{{ cardInfo.number }}</span>
                  </div>
                  <div class="col-3 pe-0">
                    <p>有効期限</p>
                    <span>{{ cardInfo.expiration_date }}</span>
                  </div>
                  <div class="col-3 ps-0">
                    <p>前回の使用日</p>
                    <span>{{ cardInfo.last_used }}</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-3">
              <input
                type="radio"
                name="option"
                v-model="option"
                class="me-1"
                value="0"
              />
              <label>新しいカードを使用する</label>
            </div>
          </div>

          <div class="form-add-card">
            <div>
              <label for="" class="my-2" :class="{ disable: disableAddCard }"
                >カード番号</label
              >
              <input
                type="text"
                class="form-control"
                placeholder="1234 1234 1234 1234"
                :disabled="disableAddCard"
              />
            </div>
            <div class="row">
              <div class="col-6">
                <label for="" class="my-2" :class="{ disable: disableAddCard }"
                  >有効期限</label
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="月 / 年"
                  :disabled="disableAddCard"
                />
              </div>
              <div class="col-6">
                <label for="" class="my-2" :class="{ disable: disableAddCard }"
                  >セキュリティコード</label
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="CVC"
                  :disabled="disableAddCard"
                />
              </div>
            </div>
          </div>

          <div class="register-card__btn row">
            <div class="col-sm-12 text-center mt-3">
              <button type="submit" class="btn btn-confirm active">
                投稿確定する
              </button>
            </div>
            <div class="col-sm-12 text-center mt-2 mb-3">
              <button class="btn btn-cancel">戻る</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    if (this.hasCard == true) {
      this.disableCard = false
      this.disableAddCard = true
      this.option = 1
    }
  },
  data() {
    let hasCard = true
    let disableCard = false
    let disableAddCard = false
    let option = 0
    return {
      cardInfo: {
        number: '**** **** **** **32',
        expiration_date: '12 / 24',
        last_used: '2022/6/26'
      },
      hasCard: hasCard,
      disableCard: disableCard,
      disableAddCard: disableAddCard,
      option: option
    }
  },
  props: {
    flagShow: {
      type: Boolean
    }
  },
  methods: {},
  watch: {
    option() {
      if (this.option == 0) {
        this.disableCard = true
        this.disableAddCard = false
      }
      if (this.option == 1) {
        this.disableCard = false
        this.disableAddCard = true
      }
    }
  }
}
</script>