<template>
    <div class="register">
        <div class="container register__container">
            <h1 class="title text-center">会員登録</h1>
            <div class="form-content">
                <form
                    id="register"
                    class="register-form"
                    name="register"
                    method="POST"
                    action=""
                >
                    <div class="form-header d-flex">
                        <span class="step-indicator active">SMS認証</span>
                        <span class="step-indicator">ユーザー情報登録</span>
                        <span class="step-indicator">完了</span>
                    </div>
                    <div class="step__container">
                        <div class="step">
                            <label class="input-label">認証コード</label>
                            <div class="input_container">
                                <div style="display: flex; flex-direction: row;">
                                    <v-otp-input
                                        ref="otpInput"
                                        input-classes="otp-input"
                                        separator=""
                                        :num-inputs="6"
                                        :should-auto-focus="true"
                                        :is-input-num="true"
                                        :conditionalClass="['one', 'two', 'three', 'four','five','six']"
                                    />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="submit__container have-capcha">
                        <a href="#" class="btn-submit">送信する</a>
                        <p class="txt-login">
                            <a href="">認証コードを再送する</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import VOtpInput from 'vue3-otp-input';
export default {
    components: {
        VOtpInput,
    },
}
</script>

