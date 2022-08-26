<template>
  <div class="loading-div" v-if="flagShow">
    <div class="loader-img"></div>
  </div>
</template>

<script>
export default {
  mounted() {
  },
  props: {
    flagShow: {
      type: Boolean
    }
  },
  methods: {}
};
</script>
