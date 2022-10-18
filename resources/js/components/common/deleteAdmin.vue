<template>
    <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Create user"
        @click="showAlert" style="cursor: pointer">
        <i class="fa fa-trash" aria-hidden="true"></i>
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
  