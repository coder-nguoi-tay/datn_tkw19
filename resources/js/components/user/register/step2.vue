<template>
    <div class="container register__container">
        <h1 class="title text-center">会員登録</h1>
        <div class="register-form">
            <div class="form-header d-flex">
                <span class="step-indicator">SMS認証</span>
                <span class="step-indicator active" style="color: red;">ユーザー情報登録</span>
                <span class="step-indicator">完了</span>
            </div>
        </div>
        <VeeForm as="div">
            <form class="form-step2 container">
                <h5>アカウント情報</h5><br>
                <div>
                    <CFormLabel class=" col-sm-3 lbl-input" require>表示名</CFormLabel>
                    <Field name="code" class="form-control" placeholder="ララプラ太郎" />
                </div><br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>パスワード</CFormLabel>
                    <Field name="code" class="form-control" placeholder="●●●●●●●●" />
                </div><br>
                <div>
                    <h5>利用者情報</h5>
                </div>
                <br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>登録タイプ</CFormLabel>
                    <Field name="code" type="number" autocomplete="off" class="form-control" ref="telephone"
                        placeholder="-- 登録タイプを選択してください --" />
                </div>
                <br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>生年月日</CFormLabel>
                    <Field name="code" type="text" autocomplete="off" class="form-control"
                        placeholder="1990 / 01 / 01" />
                </div><br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>性別</CFormLabel><br>
                    <Field name="" type="radio" class="radio" autocomplete="off" />男
                    <Field name="" type="radio" class="radio" autocomplete="off" />女
                    <Field name="" type="radio" class="radio" autocomplete="off" />その他
                </div><br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>所在地</CFormLabel>
                    <Field name="" type="number" autocomplete="off" class="form-control"
                        placeholder="-- 都道府県を選択してください --" />
                    <Field name="" type="number" autocomplete="off" class="form-control"
                        placeholder="-- 市区町村を選択してください --" />
                    <Field name="code" type="text" autocomplete="off" class="form-control"
                        placeholder="丁番地 ビル・マンション名" />
                </div>
                <br>
                <div>
                    <CFormLabel class="col-sm-3 lbl-input" require>職種</CFormLabel>
                    <Field name="code" type="nember" autocomplete="off" class="form-control"
                        placeholder="-- 職種を選択してください --" />
                    <ErrorMessage class="error" name="" /><br>
                </div>
                <div class="col-md-12 text-center btn-box">
                    <button class="btn btn-danger">登録する</button>
                </div>
                <div class="text-center">
                    <a href="">SMS認証に戻る</a>
                </div>
            </form>
        </VeeForm>
    </div>
</template>
<script>

import {
    Form as VeeForm,
    Field,
} from "vee-validate";
export default {
    components: {
        VeeForm,
        Field,
    },
};
</script>