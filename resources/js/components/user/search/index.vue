<template>
  <div class="search-page">
    <header class="header d-flex align-items-center">
      <div class="container header__container">
        <div class="header__wrapper">
          <form action="" class="form-inline">
            <Multiselect
              v-model="tags"
              mode="tags"
              class="header-search"
              placeholder="検索"
              track-by="name"
              label="name"
              :close-on-select="false"
              :searchable="true"
              :object="true"
              :searchStart="true"
              :resolve-on-load="false"
              :delay="0"
              :min-chars="1"
              noOptionsText="リストが空です"
              noResultsText="結果が見つかりません"
              :options="
                async (query) => {
                  return await getTags(query)
                }
              "
            >
            </Multiselect>
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
        <div
          class="search-tags-item d-flex align-items-center"
          v-if="data.request.category_id"
        >
          <span class="search-tags-item-name"
            >カテゴリ:
            {{
              data.categories.find((x) => x.value == data.request.category_id)
                .label
            }}</span
          >
          <div
            class="search-tags-item-button"
            @click="clearSearch('category_id', '')"
          >
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
        <div
          class="search-tags-item d-flex align-items-center"
          v-if="data.request.day_end"
        >
          <span class="search-tags-item-name"
            >応募期間: {{ data.request.day_end + '日' }}</span
          >
          <div
            class="search-tags-item-button"
            @click="clearSearch('day_end', '')"
          >
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
        <div
          class="search-tags-item d-flex align-items-center"
          v-if="data.request.publish_start_datetime"
        >
          <span class="search-tags-item-name"
            >応募開始日: {{ data.request.publish_start_datetime + '～' }}</span
          >
          <div
            class="search-tags-item-button"
            @click="clearSearch('publish_start_datetime', '')"
          >
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
        <div
          class="search-tags-item d-flex align-items-center"
          v-if="data.request.entry_type == 1"
        >
          <span class="search-tags-item-name"
            >参加費: 有料イベントも含める
            {{
              data.request.entry_fee
                ? '(～' + data.request.entry_fee + '円)'
                : ''
            }}</span
          >
          <div
            class="search-tags-item-button"
            @click="clearSearch('entry_type', 0)"
          >
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
        <div
          class="search-tags-item d-flex align-items-center"
          v-if="data.request.reward_type == 1"
        >
          <span class="search-tags-item-name"
            >報酬: 総合報酬金の範囲で表示
            {{
              data.request.reward_price_start || data.request.reward_price_end
                ? '(' +
                  (data.request.reward_price_start
                    ? data.request.reward_price_start + '円'
                    : '') +
                  '～' +
                  (data.request.reward_price_end
                    ? data.request.reward_price_end + '円'
                    : '') +
                  ')'
                : ''
            }}</span
          >
          <div
            class="search-tags-item-button"
            @click="clearSearch('reward_type', 0)"
          >
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
        <div
          class="search-tags-item d-flex align-items-center"
          v-if="data.request.target_gender && data.request.target_gender != 5"
        >
          <span class="search-tags-item-name"
            >対象の性別: {{ genderTxt() }}
          </span>
          <div
            class="search-tags-item-button"
            @click="clearSearch('target_gender', 5)"
          >
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
        <div
          class="search-tags-item d-flex align-items-center"
          v-if="data.request.target_age_type == 1"
        >
          <span class="search-tags-item-name"
            >対象年齢: 年齢制限有り
            {{
              data.request.target_age_from || data.request.target_age_to
                ? '(' +
                  (data.request.target_age_from
                    ? data.request.target_age_from + '歳'
                    : '') +
                  '～' +
                  (data.request.target_age_to
                    ? data.request.target_age_to + '歳'
                    : '') +
                  ')'
                : ''
            }}</span
          >
          <div
            class="search-tags-item-button"
            @click="clearSearch('target_age_type', 0)"
          >
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
        <div
          class="search-tags-item d-flex align-items-center"
          v-if="data.request.area_id || data.request.prefecture_id"
        >
          <span class="search-tags-item-name"
            >対象の実施地域: {{ getPref() }}
          </span>
          <div
            class="search-tags-item-button"
            @click="clearSearch('area_id', '')"
          >
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
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
                v-for="item in data.events"
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
    <SearchFilter ref="searchDetail" :data="data" :tags="tags"></SearchFilter>
  </div>
</template>
<script>
import $ from 'jquery'
import SearchFilter from './searchFilter'
import Multiselect from '@vueform/multiselect'
export default {
  components: {
    SearchFilter,
    Multiselect
  },
  props: ['data'],
  data: function () {
    return {
      tags: this.data.request.tags ?? [],
      csrfToken: Laravel.csrfToken
    }
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
    },
    async getTags(query) {
      const formData = new FormData()
      formData.append('_token', this.csrfToken)
      formData.append('name', query)
      this.tags.forEach(function (item, index) {
        formData.append(`tags[${index}]`, item.name)
      })
      const res = await fetch(this.data.urlSearchTag, {
        method: 'post',
        body: formData
      })
      const dataRes = await res.json()
      return dataRes.data
    },
    genderTxt() {
      switch (parseInt(this.data.request.target_gender)) {
        case 1:
          return '男性のみ'
        case 2:
          return '女性のみ'
        case 3:
          return '事業者のみ'
        case 4:
          return 'その他可'
      }
    },
    getPref() {
      if (this.data.request.area_id && !this.data.request.prefecture_id) {
        return this.data.areas.find((x) => x.id == this.data.request.area_id)
          .label
      }
      if (!this.data.request.area_id && this.data.request.prefecture_id) {
        return this.data.prefectures.find(
          (x) => x.id == this.data.request.prefecture_id
        ).label
      }
      return (
        this.data.areas.find((x) => x.id == this.data.request.area_id).label +
        '/' +
        this.data.prefectures.find(
          (x) => x.id == this.data.request.prefecture_id
        ).label
      )
    },
    clearSearch(name, val) {
      $("[name='" + name + "']").val(val)
      if (name == 'entry_type') {
        $('[name="entry_fee"]').val('')
      }
      if (name == 'reward_type') {
        $('[name="reward_price_start"]').val('')
        $('[name="reward_price_end"]').val('')
      }
      if (name == 'target_age_type') {
        $('[name="target_age_from"]').val('')
        $('[name="target_age_to"]').val('')
      }
      if (name == 'area_id') {
        $('[name="area_id"]').val('')
        $('[name="prefecture_id"]').val('')
      }
      $('.loading-div').removeClass('hidden')
      setTimeout(function () {
        $('#searchDetail').submit()
      }, 200)
    }
  },
  watch: {
    tags: function () {
      $('.loading-div').removeClass('hidden')
      setTimeout(function () {
        $('#searchDetail').submit()
      }, 100)
    }
  }
}
</script>
