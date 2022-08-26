<template>
<div>
  <a class="dropdown-item" @click="showAlert" style="cursor: pointer">
    <i class="fa fa-trash" aria-hidden="true"></i>
    削除
  </a>
  <loader :flag-show="flagShowLoader"></loader>
</div>
</template>

<script>
import Loader from "./loader.vue"
import axios from "axios";
import $ from 'jquery'

export default {
  data() {
    return {
      flagShowLoader: false,
    }
  },
  components: {
    Loader
  },
  props: ['deleteAction', 'listUrl', 'messageConfirm'],
  mounted() {},
  methods: {
    showAlert() {
      let that = this;
      this.$swal({
        title: that.messageConfirm,
        icon: "warning",
        confirmButtonText: "削除する",
        cancelButtonText: "閉じる",
        showCancelButton: true
      }).then(result => {
        if (result.value) {
          that.flagShowLoader = true;
          $('.loading-div').removeClass('hidden');
          axios
            .delete(that.deleteAction, {
              _token: Laravel.csrfToken
            })
            .then(function (response) {
              that.flagShowLoader = false;
              $('.loading-div').addClass('hidden');
              that
                .$swal({
                  title: response.data.message,
                  icon: "success",
                  confirmButtonText: "閉じる"
                })
                .then(function () {
                  //   window.location.href = that.listUrl;
                  location.reload();
                });
            })
            .catch(error => {
              that.flagShowLoader = false;
            });
        }
      });
    }
  }
};
</script>
