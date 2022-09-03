<template>
  <div class="post-event" :class="(eventDone == true ? 'post-event-done' : '')">
    <div class="post-event-img">
      <img :src="imgPost" alt="" />
    </div>
    <div class="post-event-text">
      <div class="post-event-title d-flex align-items-center">
        <div
          class="
            post-event-title-note
            d-flex
            align-items-center
            justify-content-center
          "
        >
          新着
        </div>
        {{ title }}
      </div>
      <div class="post-event-user d-flex align-items-center">
        <div class="post-event-avata">
          <img src="/assets/img/avatars/avatar_1.png" alt="" />
        </div>
        <div class="post-event-name d-flex align-items-center">{{ name }}</div>
      </div>
      <div class="post-event-money post-event-info d-flex">
        <div class="post-event-meta d-flex align-items-center">
          <div class="post-event-meta-icon">
            <img src="/assets/img/user/common/icon_fee.png" alt="" />
          </div>
          <div class="post-event-meta-name">参加費：</div>
          <div class="post-event-meta-des">
            <template v-if="fee">{{ formatPrice(fee) }}円</template>
            <template v-else>---</template>
          </div>
        </div>
        <div class="post-event-meta d-flex align-items-center">
          <div class="post-event-meta-icon">
            <img src="/assets/img/user/common/icon_reward.png" alt="" />
          </div>
          <div class="post-event-meta-name">報酬：</div>
          <div class="post-event-meta-des">{{ formatPrice(reward) }}円</div>
        </div>
      </div>
      <div class="post-event-info d-flex align-items-center">
        <div class="post-event-meta d-flex align-items-center">
          <div class="post-event-meta-icon">
            <img src="/assets/img/user/common/icon_conditions.png" alt="" />
          </div>
          <div class="post-event-meta-name">参加条件 / 達成条件：</div>
          <div class="post-event-meta-des">{{ conditions }}</div>
        </div>
        <div class="post-event-meta d-flex align-items-center">
          <div class="post-event-meta-icon">
            <img src="/assets/img/user/common/icon_period.png" alt="" />
          </div>
          <div class="post-event-meta-name">残り期間：</div>
          <div class="post-event-meta-des">{{ period }}</div>
        </div>
      </div>
      <div class="post-event-tags">{{ tags }}</div>
    </div>
    <a 
    v-if="hiddenBtn == false" 
    href="#" 
    class="post-event-btn d-flex align-items-center justify-content-center"
    :class="(noteBtn == true ? 'post-event-btn-note' : '')"
    >
      参加者専用チャット
    </a>
  </div>
</template>

<script>
export default {
  props: {
    tabList: {
      type: Array,
      required: true
    },
    imgPost: {
      type: String,
      required: true
    },
    title: {
      type: String,
      required: true
    },
    fee: {
      type: Number,
      default: '',
      required: false
    },
    reward: {
      type: Number,
      required: true
    },
    conditions: {
      type: String,
      default: '',
      required: false
    },
    period: {
      type: String,
      default: '',
      required: false
    },
    tags: {
      type: String,
      default: '',
      required: false
    },
    hiddenBtn: {
      type: Boolean,
      default: false,
      required: false 
    },
    noteBtn: {
      type: Boolean,
      default: false,
      required: false 
    },
    eventDone: {
      type: Boolean,
      default: false,
      required: false 
    }
  },
  data() {
    return {
      activeTab: 1
    };
  },
  methods: {
    formatPrice(value) {
      let val = (value / 1).toFixed(0).replace(',', '.');
      return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }
  }
};
</script>
