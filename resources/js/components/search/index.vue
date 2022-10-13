<template>
  <div class="search-page">
    <header class="header d-flex align-items-center">
      <div class="container header__container">
        <div class="header__wrapper">
          <form action="" class="form-inline">
            <input
              name="heaeder_search"
              class="form-control header-search"
              placeholder="&#xF002;&ensp;検索"
              value=""
              autocomplete="off"
              type="control"
              id="heaeder_search"
            />
            <button type="submit" hidden class="btn btn-primary w-100">
              <i class="fa fa-search"></i> &nbsp; 検索
            </button>
            <div class="header-filter" @click="showSearchSidebar">
              <img
                class="header-filter-icon"
                src="/assets/img/user/common/icon_filter.png"
              />
            </div>
          </form>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="search-tags-list d-flex align-items-center">
        <div class="search-tags-item d-flex align-items-center">
          <span class="search-tags-item-name">参加費: ~ 3,000円</span>
          <div class="search-tags-item-button">
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
        <div class="search-tags-item d-flex align-items-center">
          <span class="search-tags-item-name">性別: 男性限定</span>
          <div class="search-tags-item-button">+</div>
        </div>
        <div class="search-tags-item d-flex align-items-center">
          <span class="search-tags-item-name"># 探偵系</span>
          <div class="search-tags-item-button">+</div>
        </div>
      </div>
    </div>
    <div class="event-list h-100">
      <div class="container event-list__container h-100">
        <div class="event-list__wrapper pt-0" v-if="data.events.length">
          <div class="cat-list ongoing-list reserved-list">
            <div class="event-item__container">
              <div
                class="event-item__wrapper"
                v-for="item in data.events.filter((x) => x.waiting_publish)"
                :key="item.id"
              >
                <div class="event-item">
                  <div class="event-left">
                    <div class="event-img">
                      <img :src="item.image_full_url" width="140" />
                    </div>
                    <div class="avatar">
                      <img
                        src="/assets/img/user/event/avatar_6.png"
                        width="25"
                      />
                    </div>
                  </div>
                  <div class="event-right">
                    <div class="event-right__container">
                      <a href="" class="cat-name">{{
                        item.category?.category_name
                      }}</a>
                      <h2 class="event-title">
                        {{ item.name }}
                      </h2>
                      <div
                        class="event-meta d-flex align-items-center flex-wrap"
                      >
                        <span class="meta-item">
                          <img
                            src="/assets/img/user/event/ic_period_2.svg"
                          /><span>残り...</span
                          ><b
                            >{{ item.remaining_day }}日と<span
                              class="txt-time"
                              >{{ item.remaining_hour }}</span
                            >時間<span class="txt-time">{{
                              item.remaining_minute
                            }}</span
                            >分</b
                          >
                        </span>
                        <span class="meta-item">
                          <img src="/assets/img/user/event/ic_people_2.svg" /><b
                            ><span class="txt-number">{{
                              !item.event_condition
                                .limit_number_of_participants_flag
                                ? '何人でも参加可能'
                                : item.event_condition
                                    .limit_number_of_participants + '人'
                            }}</span></b
                          >
                        </span>
                        <span class="meta-item">
                          <img src="/assets/img/user/event/ic_coin_2.svg" /><b
                            >{{
                              item.entry_type == 0
                                ? '無料'
                                : new Intl.NumberFormat().format(
                                    item.entry_fee
                                  ) + '円'
                            }}</b
                          >
                        </span>
                        <span class="meta-item">
                          <img src="/assets/img/user/event/ic_reward_2.svg" /><b
                            >{{
                              new Intl.NumberFormat().format(
                                item.reward_amount
                              )
                            }}円</b
                          >
                        </span>
                      </div>
                      <div class="event-tag">
                        <a
                          v-for="tag in item.event_tags.filter((x) => x.tag)"
                          :key="tag.id"
                          href=""
                          ># {{ tag.tag.name }}</a
                        >
                      </div>
                    </div>
                    <div class="event-start">
                      started {{ item.publish_start_datetime
                      }}<b>@{{ item.user.show_name }}</b>
                    </div>
                    <a
                      :href="'/event/' + item.id + '/edit'"
                      class="event-link"
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="event-nodata__wrapper h-100" v-else>
          <div class="event-nodata">
            <p class="nodata-title">
              まだ企画されたイベントがありません。<br />
              早速あなたの企画を作成しましょう。
            </p>
            <div class="img-nodata text-center">
              <img src="/assets/img/user/event/no_data.png" />
            </div>
            <div class="btn-nodata">
              <a :href="data.urlCreate" class="btn-create-event"
                >イベントを企画する</a
              >
            </div>
          </div>
        </div>
        <div v-if="data.events.length" class="btn-nodata d-btn-create-event">
          <a :href="data.urlCreate" class="btn-create-event"
            >イベントを新しく作成する</a
          >
        </div>
      </div>
    </div>
    <SearchFilter :data="data"></SearchFilter>
  </div>
</template>
<script>
import $ from 'jquery'
import SearchFilter from './searchFilter'
export default {
  components: {
    SearchFilter
  },
  props: ['data'],
  data: function () {
    return {}
  },
  created() {},
  methods: {
    showSearchSidebar() {
      $(document).ready(function () {
        let sidebar = $('.search-filter-sidebar')
        setInterval(function () {
          $('.dp__pointer.dp__input_readonly').removeClass('dp__input_icon_pad')
        }, 1)
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
