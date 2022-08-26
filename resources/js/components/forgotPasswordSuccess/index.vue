<template>
  <div class="container">
    <div class="fade-in">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body card-login">
              <div class="row justify-content-center">
                <div class="col-sm-8 text-center title-login">
                  <h3>確認メールを送信致しました</h3>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-8">
                  <div class="form-group text-center">
                    <label class="title-forgot-password text-center"
                      >入力されたメールアドレスに確認メールを送信いたしました。<br />
                      メールの手順に沿ってパスワードを変更してください
                    </label>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center group-back-login">
                <div class="col-sm-8 p-l-20">
                  <a class="btn-link px-0" :href="loginUrl">ログイン画面へ</a
                  ><br />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {},
  props: ["loginUrl"],
};
</script>
