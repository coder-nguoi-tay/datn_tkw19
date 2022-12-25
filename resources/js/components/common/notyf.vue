<template>
  <div></div>
</template>
<script>
import { Notyf } from 'notyf'
import 'notyf/notyf.min.css'

export default {
  mounted() {},
  created: function () {
    if (this.data) {
      this.showNotification()
    }
  },
  props: ['data'],
  mounted() {},
  methods: {
    showNotification() {
      const notyf = new Notyf({
        duration: 6000,
        position: {
          x: 'right',
          y: 'bottom'
        },
        types: [
          {
            type: 'error',
            duration: 8000,
            dismissible: true
          }
        ]
      })

      if (this.data.mode === 'error') {
        return notyf.error(this.data.message)
      }

      if (this.data.mode === 'warning') {
        return notyf.warning(this.data.message)
      }

      return notyf.success(this.data.message)
    }
  }
}
</script>
