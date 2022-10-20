<template>
  <datepicker autoApply keepActionRow :closeOnAutoApply="false" v-model="date" :monthChangeOnScroll="false" locale="vi"
    name="date" selectText="chọn" cancelText="đóng lại" format="yyyy-MM-dd" />
</template>

<script>
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
export default {
  data() {
    return {
      date: new Date(),
    };
  },
  components: {
    Datepicker,
  },
};
</script>
