<template>
  <header class="header">
    <div class="container header__container">
      <div class="header__wrapper">
        <template v-if="data.prev">
          <a
            v-if="data.prev.closeModel"
            @click="showSettingSidebar"
            class="btn-back"
          >
            <img class="ic-back" src="/assets/img/user/common/ic_back.svg" />
          </a>
          <a v-else :href="data.prev.url" class="btn-back">
            <img class="ic-back" src="/assets/img/user/common/ic_back.svg" />
          </a>
        </template>
        <p class="header-title" v-if="data.page_name">{{ data.page_name }}</p>
        <a v-if="data.next" :href="data.next.url" class="h-btn-close">{{
          data.next.text
        }}</a>
      </div>
    </div>
  </header>
</template>
<script>
import $ from 'jquery'
export default {
  props: ['data'],
  methods: {
    showSettingSidebar() {
      $(document).ready(function () {
        let sidebar = $('.setting-sidebar')
        if (sidebar.hasClass('close-sidebar')) {
          sidebar.removeClass('close-sidebar').addClass('open-sidebar')
        } else {
          sidebar.removeClass('open-sidebar').addClass('close-sidebar')
        }
      })
    }
  }
}
</script>

