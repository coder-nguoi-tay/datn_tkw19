<template>
  <div class="popup-custom" v-if="flagShow">
    <div class="close-popup text-end">
      <button @click="$emit('close')">
        <i class="fa fa-times" aria-hidden="true"></i>
      </button>
    </div>
    <div class="containet card">
      <div class="popup__header text-center mt-5 mb-3">
        <p class="popup-title">イベントが投稿されました！！</p>
      </div>
      <div class="popup__content text-center mb-2">
        <img src="/images/register_event_success.png" alt="" />
      </div>
      <div class="register-card__btn row mb-5">
        <div class="col-sm-12 text-center mt-3">
          <button type="" class="btn btn-confirm active">
            イベント企画に戻る
          </button>
        </div>
        <div class="col-sm-12 text-center mt-2 mb-3">
          <button class="btn btn-cancel">続けて作成する</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {},
  data() {
    return {}
  },
  props: {
    flagShow: {
      type: Boolean
    }
  },
  methods: {}
}
</script>