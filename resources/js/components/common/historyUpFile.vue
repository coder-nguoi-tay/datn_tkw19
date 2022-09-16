<template>
  <div class="history-upfile-item d-flex">
    <div class="history-upfile-date">
      2022年3月12日<br>
      22:00:12
    </div>
    <div class="d-flex flex-column history-upfile-center">
      <div class="history-upfile-title">
        {{ title }}
      </div>
      <div class="upfile-list">
        <div class="upfile-item d-flex align-items-center" v-for="(file, index) in files" :key="index">
          <div class="upfile-item-icon d-flex">
            <img src="/assets/img/user/common/icon_link_simplei.png" alt="">
          </div>
          <span class="upfile-item-name">{{ file }}</span>
        </div>
      </div>
    </div>
    <div v-if="isActive==false" class="history-upfile-note">未達成</div>
    <div v-else class="history-upfile-note history-upfile-note-active">達成</div>
  </div>
</template>

<script>
export default {
  props: {
    date: {
      type: String,
      required: true
    },
    title: {
      type: String,
      required: true
    },
    files: {
      type: Array,
      required: true
    },
    isActive: {
      type: Boolean,
      required: false,
      default: false,
    }
  },
  data() {
    return {
      activeTab: 1
    }
  }
}
</script>