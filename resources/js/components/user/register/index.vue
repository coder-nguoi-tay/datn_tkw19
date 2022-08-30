<template>
  <div class="register">
    <div class="container register__container">
      <h1 class="title text-center">会員登録</h1>
      <div class="form-content">
        <form id="register" class="register-form" name="register" method="POST" action="">
          <div class="form-header d-flex">
            <span class="step-indicator active">SMS認証</span>
            <span class="step-indicator">ユーザー情報登録</span>
            <span class="step-indicator">完了</span>
          </div>
          <div class="step__container">
            <div class="step">
              <label class="input-label">電話番号</label>
              <div class="input-group">
                <span class="input-group-text">+81</span>
                <input type="tel" class="form-control input-tel" placeholder="000 0000 0000" name="tel" />
              </div>
              <p class="error-msg">
                連続で3回以上の送信はできません。しばらく時間を空けて再度お試しください。
              </p>
            </div>
          </div>
          <div class="capcha text-center">
            <img src="/assets/img/user/register/capcha.jpg" alt="" width="181" />
          </div>
          <div class="submit__container have-capcha">
            <a href="#" class="btn-submit">送信する</a>
            <p class="txt-login">
              既にアカウントをお持ちの方は<a href="">こちら</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {}
</script>
