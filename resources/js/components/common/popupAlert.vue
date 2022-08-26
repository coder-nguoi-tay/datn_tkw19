<template>
<div>
</div>
</template>

<script>
export default {
  mounted() {
  },
  created: function () {
    if (this.data) {
      this.showNotification();
    }
  },
  props: ['data'],
  mounted() {},
  methods: {
    showNotification() {
      let urlRedirect = this.data.urlRedirect;
      this.$swal({
        position: 'center-center',
        icon: this.data.mode,
        title: this.data.message,
        showConfirmButton: true,
        // timer: 5000,
        customClass: {
          confirmButton: 'w-100',
          cancelButton: 'w-100',
          title: 'sweetalert-title'
        },
        confirmButtonText: '閉じる'
      }).then(function () {
        if (urlRedirect != "") {
          window.location = urlRedirect;
        }
      });
    },
  }
};
</script>
