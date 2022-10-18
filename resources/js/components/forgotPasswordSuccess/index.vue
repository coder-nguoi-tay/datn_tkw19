<template>
  <div class="container">
    <h6 class="font-weight-light text-center">Đã có một mail đặt lại mật khẩu được gửi vào email của bạn mới bạn kiểm
      tra email và tiến hành đổi mật khẩu</h6>
    <a :href="data.login">quay về trang đăng nhập</a>
  </div>
</template>

<script>
export default {
  mounted() { },
  props: ["data"],
};
</script>
