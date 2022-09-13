<template>
  <div class="container event-report">
    <div class="report-block-top">
      <div class="d-flex justify-content-between report-title">
        <div class="report-title-left">取引先の50周年祝いの品を選んでください!!</div>
        <div class="report-title-right d-flex">
          詳細
          <img src="" alt="">
        </div>
      </div>
      <div class="report-meta d-flex align-items-center">
        <div class="d-flex align-items-center report-meta-item">
          <div class="report-meta-icon">
            <img src="/assets/img/user/common/icon_fee.png" alt="" />
          </div>
          <div class="report-meta-des">{{ formatPrice(1000) }}円</div>
        </div>
        <div class="d-flex align-items-center report-meta-item">
          <div class="report-meta-icon">
            <img src="/assets/img/user/common/icon_reward.png" alt="" />
          </div>
          <div class="report-meta-des">{{ formatPrice(500000) }}円</div>
        </div>
        <div class="d-flex align-items-center report-meta-item">
          <div class="report-meta-icon">
            <img src="/assets/img/user/common/icon_period.png" alt="" />
          </div>
          <div class="report-meta-des">残り5日</div>
        </div>
        <div class="d-flex align-items-center report-meta-item">
          <div class="report-meta-icon">
            <img src="/assets/img/user/common/icon_noti.png" alt="" />
          </div>
          <div class="report-meta-des"><b>商社太郎</b></div>
        </div>
      </div>
      <div class="report-condition">
        <div class="report-heading">達成条件</div>
        <div class="report-condition-des">
          取引先が喜びそうなお祝いの品の写真と商品名を報告してくれた方を達成承
          諾したいと考えています。
        </div>
      </div>
      <div class="report-reward">
        <div class="report-heading">報酬</div>
        <b class="report-reward-note">
          残額　\200,000/\1,000,000　残枠　2枠/3枠
        </b>
        <div class="report-reward-table">
          <div class="table-reward">
            <div class="table-reward-row d-flex table-reward-row-active">
              <div class="table-reward-name">1番目の達成者（1枠）</div>
              <div class="table-reward-money">報酬　\800,000</div>
              <div class="table-reward-slot">残り0枠</div>
            </div>
            <div class="table-reward-row d-flex">
              <div class="table-reward-name">2番目の達成者（1枠）</div>
              <div class="table-reward-money">報酬　\150,000</div>
              <div class="table-reward-slot">残り1枠</div>
            </div>
            <div class="table-reward-row d-flex">
              <div class="table-reward-name">3番目の達成者（1枠）</div>
              <div class="table-reward-money">報酬　\50,000</div>
              <div class="table-reward-slot">残り1枠</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import PostEvent from '../common/postEvent.vue';
export default {
  created: function () {},
  data() {
    return {
    };
  },
  mounted() {},
  props: ['data'],
  components: {},
  methods: {
    formatPrice(value) {
      let val = (value / 1).toFixed(0).replace(',', '.');
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }
  }
};
</script>
