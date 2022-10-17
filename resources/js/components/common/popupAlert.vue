<template>
  <div></div>
</template>

<script>
export default {
  mounted() { },
  created: function () {
    if (this.data) {
      this.showNotification()
    }
  },
  props: ['data'],
  mounted() { },
  methods: {
    showNotification() {
      let urlRedirect = this.data.urlRedirect
      const that = this;
      this.$swal({
        position: 'center-center',
        icon: this.data.mode,
        title: this.data.message,
        text: this.data.content,
        showConfirmButton: true,
        // timer: 5000,
        customClass: {
          confirmButton: 'w-100',
          cancelButton: 'w-100',
          title: 'sweetalert-title'
        },
        confirmButtonText: '閉じる'
      }).then(function () {
        if (urlRedirect && urlRedirect != '') {
          window.location = urlRedirect
        }
        else {
          that.$emit('resetDataAlert')
        }
      })
    }
  },
  watch: {
    data() {
      if (this.data) {
        this.showNotification()
      }
    }
  }
}
</script>

<style>
.sweetalert-title {
  font-size: 24px !important;
  padding-top: 0px !important;
}

.swal2-html-container {
  font-size: 13px !important;
  color: #9a9a9a;
  margin-top: 16px !important;
}

.swal2-success {
  margin-bottom: 24px;
}
</style>
