<template>
  <div class="container my-page">
    <div class="profile-banner d-flex justify-content-between" style="background-image: url('/assets/img/my_page/my_page_banner.png');">
      <div class="profile-banner-top d-flex align-items-center justify-content-center">
        <div class="profile-banner-left d-flex align-items-center">
          <img src="/assets/img/my_page/icon_pig.png" class="icon_pig" alt="">
          <img src="/assets/img/my_page/icon_metro_profile.png" class="icon_metro_profile" alt="">
        </div>
        <div class="profile-banner-center">tanaka_tarou</div>
        <div class="profile-banner-right">
          <img src="/assets/img/my_page/icon_settings.png" class="icon_settings" alt="">
        </div>
      </div>
      <div class="profile-banner-bottom d-flex justify-content-between">
        <div class="profile-banner-share d-flex">
          <img src="/assets/img/my_page/icon_share.png" class="icon_share" alt="">
        </div>
        <div class="profile-banner-edit d-flex">
          <img src="/assets/img/my_page/icon_edit_banner.png" class="icon_edit_banner" alt="">
        </div>
      </div>
    </div>
    <div class="profile-user">
      <div class="profile-user-avatar">
        <img src="/assets/img/avatars/avatar_1.png" alt="">
      </div>
      <div class="profile-user-name">田中 太郎</div>
      <div class="profile-user-subname">ゴッドファーザー</div>
      <div class="profile-user-des">
        私はイベントを企画するのが大好きです😳😈面白いイベント
        にたくさんチャレンジ👑するので、ぜひ参加ご応募お願いい
        たします😮🙋😮😮
      </div>
    </div>
    <div class="profile-posts d-flex">
      <div class="profile-heading">POSTS</div>
      <div class="profile-posts-box d-flex">
        <div class="profile-posts-name">イベント参加数</div>
        <div class="profile-posts-number justify-content-center">0</div>
      </div>
      <div class="profile-posts-box">
        <div class="profile-posts-name">イベント企画数</div>
        <div class="profile-posts-number justify-content-center">3</div>
      </div>
      <div class="profile-posts-des">もっと見る</div>
    </div>
    <div class="profile-rankings">
      <div class="profile-heading">RANKINGS</div>
      <div class="profile-rankings-row">
        <div class="profile-rankings-text">報奨累計金額</div>
        <div class="profile-rankings-text">\17,204,321</div>
        <div class="profile-rankings-text">20位</div>
      </div>
      <div class="profile-rankings-row">
        <div class="profile-rankings-text">獲得累計金額</div>
        <div class="profile-rankings-text">\0</div>
        <div class="profile-rankings-text">19,001位</div>
      </div>
      <div class="profile-rankings-row">
        <div class="profile-rankings-text">OPENチャット参加数</div>
        <div class="profile-rankings-text">34回</div>
        <div class="profile-rankings-text">530位</div>
      </div>
      <div class="profile-rankings-row">
        <div class="profile-rankings-text">アカウント登録日</div>
        <div class="profile-rankings-text">2018年6月12日</div>
        <div class="profile-rankings-text">12番目</div>
      </div>
    </div>
    <div class="profile-collection">
      <div class="profile-heading">COLLECTION</div>
      <div class="profile-collection-list d-flex">
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_01.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_02.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_03.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_04.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_05.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_06.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_07.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_08.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_09.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_10.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_11.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_12.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_13.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_14.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_15.png" alt="">
        </div>
        <div class="profile-collection-item">
          <img src="/assets/img/my_page/icon_collection_16.png" alt="">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// import PostEvent from '../common/postEvent.vue';
export default {
  created: function () {},
  data() {
    return {
    };
  },
  mounted() {},
  props: ['data'],
  components: {},
  methods: {}
};
</script>
