<template>
  <div class="container my-page">
    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content profile-modal-content">
          <img
            src="/assets/img/my_page/icon_modal_close.png"
            class="profile-modal-close"
            alt=""
            data-bs-dismiss="modal"
            aria-label="Close"
          />
          <div class="modal-body profile-modal-body">
            <img
              src="/assets/img/my_page/icon_share_black.png"
              class="profile-modal-share"
              alt=""
            />
            <div class="profile-modal-img">
              <img src="/assets/img/my_page/my_page_modal.png" alt="" />
            </div>
            <div
              class="
                profile-modal-name
                d-flex
                align-items-center
                justify-content-center
              "
            >
              秘密の地図
            </div>
            <div class="profile-modal-des">
              #アドベンチャータグ が付けたイベントを2回以上企画したユー
              ザーへの記念アイテム。地図には宝の在処が記されているという
              噂があるが定かではない。
            </div>
            <div class="profile-modal-list">
              <div class="profile-modal-row d-flex justify-content-between">
                <div class="profile-modal-info">アイテム保有者数</div>
                <div class="profile-modal-info">2名</div>
              </div>
              <div class="profile-modal-row d-flex justify-content-between">
                <div class="profile-modal-info">アイテムレア度</div>
                <div class="profile-modal-info">★★☆☆☆</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal -->

    <div
      class="profile-banner d-flex justify-content-between"
      style="background-image: url('/assets/img/my_page/my_page_banner.png')"
    >
      <div
        class="
          profile-banner-top
          d-flex
          align-items-center
          justify-content-center
        "
      >
        <div class="profile-banner-left d-flex align-items-center">
          <a :href="data.urlEarn"
            ><img
              src="/assets/img/my_page/icon_pig.png"
              class="icon_pig"
              alt=""
          /></a>
          <img
            src="/assets/img/my_page/icon_metro_profile.png"
            class="icon_metro_profile"
            alt=""
          />
        </div>
        <div class="profile-banner-center">{{ data.userInfo.show_name }}</div>
        <div class="profile-banner-right">
          <a href="#" @click.prevent="showSettingSidebar" class="btn-setting">
            <img
              src="/assets/img/my_page/icon_settings.png"
              class="icon_settings"
              alt=""
            />
          </a>
        </div>
      </div>
      <div class="profile-banner-bottom d-flex justify-content-between">
        <div
          class="profile-banner-share d-flex"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          <img
            src="/assets/img/my_page/icon_share.png"
            class="icon_share"
            alt=""
          />
        </div>
        <div class="profile-banner-edit d-flex">
          <img
            src="/assets/img/my_page/icon_edit_banner.png"
            class="icon_edit_banner"
            alt=""
          />
        </div>
      </div>
    </div>

    <div class="profile-user">
      <div class="profile-user-avatar">
        <img src="/assets/img/avatars/avatar_1.png" alt="" />
        <div
          class="
            profile-user-avatar-edit
            d-flex
            justify-content-center
            align-items-center
          "
        >
          <img
            src="/assets/img/my_page/icon_edit_avatar.png"
            class="icon_edit_avatar"
            alt=""
          />
        </div>
      </div>
      <div class="profile-user-name">{{ data.userInfo.name }}</div>
      <div class="profile-user-subname">{{ data.userInfo.name_kana }}</div>
      <div class="profile-user-des">
        <nl2br
          tag="p"
          v-if="data.userInfo.self_introduction"
          class="nl2br"
          :text="data.userInfo.self_introduction"
        />
      </div>
    </div>

    <div class="profile-posts d-flex">
      <div class="profile-heading">POSTS</div>
      <div class="profile-posts-box d-flex">
        <div class="profile-posts-name">イベント参加数</div>
        <div class="profile-posts-number justify-content-center">
          <count-up
            :end-val="data.userInfo.event_applications_count"
          ></count-up>
        </div>
      </div>
      <div class="profile-posts-box">
        <div class="profile-posts-name">イベント企画数</div>
        <div class="profile-posts-number justify-content-center">
          <count-up :end-val="data.userInfo.events_count"></count-up>
        </div>
      </div>
      <div class="profile-posts-des">もっと見る</div>
    </div>

    <div class="profile-rankings">
      <div class="profile-heading">RANKINGS</div>
      <div class="profile-rankings-row d-flex">
        <div class="profile-rankings-text">報奨累計金額</div>
        <div class="profile-rankings-text">\17,204,321</div>
        <div class="profile-rankings-text">20位</div>
      </div>
      <div class="profile-rankings-row d-flex">
        <div class="profile-rankings-text">獲得累計金額</div>
        <div class="profile-rankings-text">\0</div>
        <div class="profile-rankings-text">19,001位</div>
      </div>
      <div class="profile-rankings-row d-flex">
        <div class="profile-rankings-text">OPENチャット参加数</div>
        <div class="profile-rankings-text">34回</div>
        <div class="profile-rankings-text">530位</div>
      </div>
      <div class="profile-rankings-row d-flex">
        <div class="profile-rankings-text">アカウント登録日</div>
        <div class="profile-rankings-text">2018年6月12日</div>
        <div class="profile-rankings-text">12番目</div>
      </div>
    </div>

    <div class="profile-collection">
      <div class="profile-heading">COLLECTION</div>
      <div class="profile-collection-list">
        <div class="d-flex profile-collection-row justify-content-between">
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_01.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_02.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_03.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_04.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_05.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_06.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_07.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_08.png" alt="" />
          </div>
        </div>
        <div class="d-flex profile-collection-row justify-content-between">
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_09.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_10.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_11.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_12.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_13.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_14.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_15.png" alt="" />
          </div>
          <div class="profile-collection-item">
            <img src="/assets/img/my_page/icon_collection_16.png" alt="" />
          </div>
        </div>
      </div>
      <div class="profile-collection-des">もっと見る</div>
    </div>

    <div class="profile-info">
      <div class="profile-heading">USER INFO</div>
      <div class="profile-info-row">
        <div class="profile-info-col">
          <div class="profile-info-des">アカウント名</div>
          <div class="profile-info-des">性別</div>
          <div class="profile-info-des">活動地域</div>
          <div class="profile-info-des">活動形態</div>
        </div>
        <div class="profile-info-col">
          <div class="profile-info-des">{{ data.userInfo.show_name }}</div>
          <div class="profile-info-des">{{ data.userInfo.gender_text }}</div>
          <div class="profile-info-des">
            {{ data.userInfo.prefecture ? data.userInfo.prefecture.name : '' }}
          </div>
          <div class="profile-info-des">
            {{ data.userInfo.city ? data.userInfo.city.name : '' }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <SettingSidebar :data="data"></SettingSidebar>
</template>

<script>
import $ from 'jquery'
import SettingSidebar from './settingSidebar'
import CountUp from 'vue-countup-v3'
export default {
  created: function () {},
  data() {
    return {}
  },
  mounted() {},
  props: ['data'],
  components: {
    SettingSidebar,
    CountUp
  },
  methods: {
    showSettingSidebar() {
      $(document).ready(function () {
        let sidebar = $('.setting-sidebar')
        if (sidebar.hasClass('close-sidebar')) {
          sidebar.removeClass('close-sidebar').addClass('open-sidebar')
        } else {
          sidebar.removeClass('open-sidebar').addClass('close-sidebar')
        }
      })
    }
  }
}
</script>
