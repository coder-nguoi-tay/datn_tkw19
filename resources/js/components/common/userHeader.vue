<template>
  <header class="header">
    <div class="container header__container">
      <div class="header__wrapper">
        <a v-if="data.prev" :href="data.prev.url" class="btn-back">
          <img class="ic-back" src="/assets/img/user/common/ic_back.svg" />
        </a>
        <p class="header-title" v-if="data.page_name">{{ data.page_name }}</p>
        <a v-if="data.next" :href="data.next.url" class="h-btn-close">{{
          data.next.text
        }}</a>
      </div>
    </div>
  </header>
</template>
<script>
export default {
  props: ['data']
}
</script>

