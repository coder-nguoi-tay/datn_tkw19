<template>
  <UserHeader
    :data="{
      page_name: '終了済みイベント',
      prev: {
        url: data.urlList
      }
    }"
  ></UserHeader>
  <div class="event-list h-100">
    <div class="container event-list__container h-100">
      <div class="event-list__wrapper" v-if="data.events.length">
        <div class="cat-list ongoing-list">
          <div
            class="event-item__container"
            v-for="item in data.events"
            :key="item.id"
          >
            <div class="event-item">
              <div class="event-left">
                <div class="event-img">
                  <img :src="item.image_full_url" width="140" />
                </div>
                <div class="avatar">
                  <img src="/assets/img/user/event/avatar_6.png" width="25" />
                </div>
                <div class="txt-finished" v-if="isFinished">
                  このイベントは<br />
                  終了しました
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
                  <div class="event-meta d-flex align-items-center flex-wrap">
                    <span class="meta-item">
                      <img src="/assets/img/user/event/ic_period_2.svg" /><span
                        >残り...</span
                      ><b
                        >{{ item.remaining_day }}日と<span class="txt-time">{{
                          item.remaining_hour
                        }}</span
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
                      <img src="/assets/img/user/event/ic_coin_2.svg" /><b>{{
                        item.entry_type == 0
                          ? '無料'
                          : new Intl.NumberFormat().format(item.entry_fee) +
                            '円'
                      }}</b>
                    </span>
                    <span class="meta-item">
                      <img src="/assets/img/user/event/ic_reward_2.svg" /><b
                        >{{
                          new Intl.NumberFormat().format(item.reward_amount)
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
                <a :href="'/event/' + item.id + '/edit'" class="event-link"></a>
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
    </div>
  </div>
</template>
<script>
import CountUp from 'vue-countup-v3'
import UserHeader from '../../common/userHeader.vue'
export default {
  components: {
    CountUp,
    UserHeader
  },
  props: ['data'],
  data: function () {
    return {
      isFinished: true
    }
  },
  created() {},
  methods: {}
}
</script>
