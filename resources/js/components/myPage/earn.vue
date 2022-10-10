<template>
  <UserHeader
    :data="{
      prev: {
        url: data.urlMyPage
      },
      page_name: '入金（稼ぎ）一覧'
    }"
  ></UserHeader>
  <div class="earn">
    <div class="container earn__container">
      <form action="" method="POST">
        <div class="earn__wrapper">
          <div class="earn-total">
            <div class="earn-first">
              <span class="earn-title">6月分振込金額</span>
              <label class="earn-money" confirm>85,936円</label>
            </div>
            <div class="earn-second">
              <span class="earn-subtitle">6月までの累計入金額</span>
              <span class="earn-title">20,123,123円</span>
            </div>
          </div>
          <div class="help">
            <a href="#" class="btn-help" target="_blank"><i class="fa fa-question-circle" aria-hidden="true"></i>振込に関して</a>
          </div>
          <div class="earn-statistical">
            <div class="earn-nav">
              <button class="btn-nav btn-prev"><img src="/assets/img/my_page/ic_arrow_left.svg" alt=""></button>
              <button class="btn-nav btn-next"><img src="/assets/img/my_page/ic_arrow_left.svg" alt=""></button>
            </div>
            <div class="earn-latest">
              <span class="earn-title earn-time">2022年6月入金</span>
              <span class="earn-title total-money">130,231円</span>
            </div>
            <div class="e-static-list">
              <div class="e-static-item">
                <p class="earn-subtitle earn-time">2022年5月12日</p>
                <div class="earn-group d-flex justify-content-between align-items-center">
                  <span class="earn-title e-static-title">イベント達成による報酬金</span>
                  <span class="earn-title total-money">80,200円</span>
                </div>
                <p class="earn-desc">取引先の50周年祝いの品を選んでください!!</p>
                <div class="e-detail">
                  <div class="e-detail-row">
                    <span class="earn-desc col-title">達成金額</span>
                    <span class="earn-desc col-money">100,000</span>
                  </div>
                  <div class="e-detail-row">
                    <span class="earn-desc col-title">システム手数料</span>
                    <span class="earn-desc col-money">-18,000</span>
                  </div>
                  <div class="e-detail-row">
                    <span class="earn-desc col-title">消費税（10%）</span>
                    <span class="earn-desc col-money">-1,800</span>
                  </div>
                  <div class="e-detail-row row-total">
                    <span class="earn-desc col-title">合計</span>
                    <span class="earn-desc col-money">80,200</span>
                  </div>
                </div>
              </div>
              <div class="e-static-item">
                <p class="earn-subtitle earn-time">2022年5月10日</p>
                <div class="earn-group d-flex justify-content-between align-items-center">
                  <span class="earn-title e-static-title">イベント参加費</span>
                  <span class="earn-title total-money">5,254円</span>
                </div>
                <p class="earn-desc">mafumafu - お忍びデートスポットをリサーチしてください!!</p>
                <div class="e-detail">
                  <div class="e-detail-row">
                    <span class="earn-desc col-title">参加徴収料</span>
                    <span class="earn-desc col-money">6,550</span>
                  </div>
                  <div class="e-detail-row">
                    <span class="earn-desc col-title">システム手数料</span>
                    <span class="earn-desc col-money">-1,179</span>
                  </div>
                  <div class="e-detail-row">
                    <span class="earn-desc col-title"></span>
                    <span class="earn-desc col-money"></span>
                  </div>
                  <div class="e-detail-row row-total">
                    <span class="earn-desc col-title">合計</span>
                    <span class="earn-desc col-money">5,254</span>
                  </div>
                </div>
              </div>
              <div class="e-static-item">
                <p class="earn-subtitle earn-time">2022年5月9日</p>
                <div class="earn-group d-flex justify-content-between align-items-center">
                  <span class="earn-title e-static-title">イベント参加費</span>
                  <span class="earn-title total-money">482円</span>
                </div>
                <p class="earn-desc">onigoroshi_a - お忍びデートスポットをリサーチしてください!!</p>
                <div class="e-detail">
                  <div class="e-detail-row">
                    <span class="earn-desc col-title">参加徴収料</span>
                    <span class="earn-desc col-money">600</span>
                  </div>
                  <div class="e-detail-row">
                    <span class="earn-desc col-title">システム手数料</span>
                    <span class="earn-desc col-money">-108</span>
                  </div>
                  <div class="e-detail-row">
                    <span class="earn-desc col-title">消費税（10%）</span>
                    <span class="earn-desc col-money">-10</span>
                  </div>
                  <div class="e-detail-row row-total">
                    <span class="earn-desc col-title">合計</span>
                    <span class="earn-desc col-money">482</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import UserHeader from '../common/userHeader.vue'
export default {
  created: function () {},
  data() {
    return {
    };
  },
  mounted() {},
  props: ['data'],
  components: {
    UserHeader,
  },
  methods: {}
};
</script>
