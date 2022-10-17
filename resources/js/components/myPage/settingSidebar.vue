<template>
  <div class="setting-sidebar close-sidebar">
    <UserHeader
      :data="{
        prev: {
          url: data.urlMyPage,
          closeModel: true
        },
        page_name: 'システム設定'
      }"
    ></UserHeader>
    <div class="setting-container">
      <div class="setting-item">
        <p class="setting-title">アカウント設定</p>
        <div class="setting-nav">
          <a href="/profile" class="s-nav-link">プロフィール設定</a>
          <a href="/user-setting" class="s-nav-link">ユーザー情報設定</a>
          <a href="#" class="s-nav-link">登録電話番号設定</a>
          <a href="#" class="s-nav-link">メールアドレス設定</a>
          <a href="/change-password" class="s-nav-link">パスワード設定</a>
          <a href="#" class="s-nav-link">個人/個人事業主または法人設定</a>
          <a href="#" class="s-nav-link">アカウントを削除する</a>
        </div>
      </div>
      <div class="setting-item">
        <p class="setting-title">通知設定</p>
        <div class="setting-nav">
          <a href="/notification-setting" class="s-nav-link">通知受信設定</a>
        </div>
      </div>
      <div class="setting-item">
        <p class="setting-title">入出金設定</p>
        <div class="setting-nav">
          <a href="#" class="s-nav-link">振込口座設定</a>
        </div>
      </div>
      <div class="setting-item app-info">
        <p class="setting-title">アプリケーション情報</p>
        <div class="setting-nav">
          <a href="#" class="s-nav-link" target="_blank">運営会社情報</a>
          <a href="#" class="s-nav-link" target="_blank">利用規約</a>
          <a href="#" class="s-nav-link" target="_blank"
            >プライバシーポリシー</a
          >
          <a href="#" class="s-nav-link" target="_blank"
            >特定商取引法に基づく表記</a
          >
          <a href="#" class="s-nav-link" target="_blank">リリース最新情報</a>
          <a href="#" class="s-nav-link" target="_blank">リリース最新情報</a>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import UserHeader from '../common/userHeader'
export default {
  components: {
    UserHeader
  },
  props: ['data'],
  data: function () {
    return {}
  },
  created() {},
  methods: {}
}
</script>
