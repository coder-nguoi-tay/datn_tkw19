<template>
  <div class="container">
    <div class="fade-in">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body card-login">
              <div class="row justify-content-center">
                <div class="col-sm-8 text-center title-login">
                  <h3>変更メールを送信しました！！</h3>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-8">
                  <div class="form-group text-center">
                    <p>
                      まだ変更手続きは完了していません。変更用のメールを送信いたしましたので、メールに記載の確認リンクにアクセスし、変更を完了させてください。
                    </p>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center group-back-login">
                <div class="col-sm-8 p-l-20">
                  <a
                    class="btn-link px-0"
                    style="color: #e5352b"
                    :href="loginUrl"
                    >ログイン画面へ</a
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
  props: ['loginUrl']
}
</script>
