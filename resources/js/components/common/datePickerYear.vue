<template>
  <datepicker
    autoApply
    v-model="date"
    :monthChangeOnScroll="false"
    locale="vi"
    year-picker
    :name="NameDate"
    :maxDate="new Date()"
    selectText="chọn"
    cancelText="đóng lại"
    format="yyyy"
  />
</template>

<script>
import Datepicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'
export default {
  props: {
    NameDate: {
      type: String
    }
  },
  data() {
    return {
      date: new Date()
    }
  },
  created() {},
  components: {
    Datepicker
  },
  methods: {}
}
</script>
