<template>
  <a class="dropdown-item" @click="showAlert" style="cursor: pointer">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill"
      viewBox="0 0 16 16">
      <path
        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
    </svg>
  </a>
  <loader :flag-show="flagShowLoader"></loader>
</template>

<script>
import Loader from "./loader.vue";
import axios from "axios";
import $ from "jquery";

export default {
  data() {
    return {
      flagShowLoader: false,
    };
  },
  components: {
    Loader,
  },
  props: ["deleteAction", "listUrl", "messageConfirm"],
  mounted() { },
  methods: {
    showAlert() {
      let that = this;
      this.$swal({
        title: that.messageConfirm,
        icon: "warning",
        confirmButtonText: "Xóa",
        cancelButtonText: "Đóng lại",
        showCancelButton: true,
      }).then((result) => {
        if (result.value) {
          that.flagShowLoader = true;
          $(".loading-div").removeClass("hidden");
          axios
            .delete(that.deleteAction, {
              _token: Laravel.csrfToken,
            })
            .then(function (response) {
              that.flagShowLoader = false;
              $(".loading-div").addClass("hidden");
              that
                .$swal({
                  title: response.data.message,
                  icon: "success",
                  confirmButtonText: "đóng lại",
                })
                .then(function () {
                  //   window.location.href = that.listUrl;
                  location.reload();
                });
            })
            .catch((error) => {
              that.flagShowLoader = false;
            });
        }
      });
    },
  },
};
</script>
