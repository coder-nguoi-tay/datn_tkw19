<template>
  <div class="event-list h-100">
    <div class="container event-list__container h-100">
      <div class="event-list__wrapper" v-if="haveDate">
        <div class="cat-list draft-list">
          <h3 class="event-cat-title">
            下書き中({{
              data.events.filter((x) => x.publish_flag == 0).length
            }})
          </h3>
          <div class="event-item__container">
            <div
              class="event-item"
              v-for="item in data.events.filter((x) => x.publish_flag == 0)"
              :key="item.id"
            >
              <div class="txt-draft">(下書き)</div>
              <div class="last-save">
                最終保存日 {{ item.reservation_date }}
              </div>
              <h2 class="event-title">
                {{ item.name }}
              </h2>
              <a :href="'event/' + item.id" class="event-link"></a>
            </div>
          </div>
        </div>
        <div class="cat-list ongoing-list">
          <h3 class="event-cat-title">
            開催中({{ data.events.filter((x) => x.is_publish).length }})
          </h3>
          <div
            class="event-item__container"
            v-for="item in data.events.filter((x) => x.is_publish)"
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
                        ><span class="txt-number">{{ item.reward_person }}</span
                        >人</b
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
                  }}<b>@{{ data.showName }}</b>
                </div>
                <a href="" class="event-link"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="cat-list ongoing-list reserved-list">
          <h3 class="event-cat-title">
            予約中({{ data.events.filter((x) => x.waiting_publish).length }})
          </h3>
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
                    <img src="/assets/img/user/event/avatar_6.png" width="25" />
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
                        <img
                          src="/assets/img/user/event/ic_period_2.svg"
                        /><span>残り...</span
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
                            item.reward_person
                          }}</span
                          >人</b
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
                    }}<b>@{{ data.showName }}</b>
                  </div>
                  <a href="" class="event-link"></a>
                </div>
              </div>
              <div class="btn__container">
                <a href="" class="btn-cancel">予約を取り消し下書きにする</a>
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
          <div class="img-nodata text-center"></div>
          <div class="btn-nodata">
            <a href="#" class="btn-create-event">イベントを企画する</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="modal fade event-created-modal"
    id="eventCreatedModal"
    tabindex="-1"
    aria-labelledby="eventCreatedModal"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body text-center">
          <div class="e-body-content">
            <h2 class="e-modal-title">イベントが投稿されました！！</h2>
            <div class="e-modal-img"></div>
            <a href="#" class="btn-create-event e-modal-btn"
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
export default {
  components: {
    CountUp
  },
  props: ['data'],
  data: function () {
    return {
      haveDate: true,
      eventCreated: true,
      isFinished: true
    }
  },
  created() {},
  methods: {
    showModal() {
      let modalCreated = new bootstrap.Modal(
        document.getElementById('eventCreatedModal')
      )
      if (this.eventCreated) {
        modalCreated.show()
      } else {
        modalCreated.hide()
      }
    }
  }
}
</script>
