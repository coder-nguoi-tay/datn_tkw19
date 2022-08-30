<template>
    <div class="container">
        <CRow>
            <h5>アカウント情報</h5><br>
            <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
                <form method="POST" @submit="handleSubmit($event, onSubmit)" ref="formData">
                    <Field type="hidden" :value="csrfToken" name="_token" />
                    <div>
                        <CFormLabel class="col-sm-3 lbl-input" require>表示名</CFormLabel>
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
        </CRow>
    </div>
</template>

<script>

import {
    Form as VeeForm,
    Field,
    ErrorMessage,
} from "vee-validate";
export default {

    components: {
        VeeForm,
        Field,
        ErrorMessage,
    },
};
</script>
<style>
.error {
    color: rgb(209, 41, 41);
}

button {
    width: 150px;
}

.container {
    border: 1px solid #ccc;
    width: 426px;
    height: auto;
}

.form-control {
    margin-top: 5px;
}

.lbl-input {
    margin-left: 5px;
}

.text-center {
    margin-top: 20px;
    margin-bottom: 30px;
}

.text-center a {
    color: black;
    font-size: 15px;
}

.radio {
    margin-left: 5px;
}
</style>