<template>
  <UserHeader :data="{
    page_name: 'マイイベント',
    next: {
      url: data.urlClose,
    }
  }"/>
  <div class="container my-event">
    <TabsMyEvent :tabList="tabList">
      <template v-slot:tabPanel-1>
        <div class="event-list">
          <div class="ongoing-list">
            <div class="event-item__container">
              <div class="event-item">
                <div class="event-left">
                  <div class="event-img">
                    <img src="/assets/img/user/common/post_2a.png" width="140" />
                  </div>
                  <div class="avatar">
                    <img src="/assets/img/user/event/avatar_6.png" width="25" />
                  </div>
                </div>
                <div class="event-right">
                  <div class="event-right__container">
                    <div class="d-flex">
                      <a href="" class="cat-name event-new">新着</a>
                      <a href="" class="cat-name">アドベンチャー</a>
                    </div>
                    <h2 class="event-title">
                      参加費1,000円で、世界中を飛び回る私を見つけたら賞金!!
                    </h2>
                    <div class="event-meta d-flex align-items-center flex-wrap">
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_period_2.svg" /><span>残り...</span><b>1日と<span
                            class="txt-time">12</span>時間<span class="txt-time">32</span>分</b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_people_2.svg" /><b><span class="txt-number">120人</span></b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_coin_2.svg" /><b>1,000円</b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_reward_2.svg" /><b>9,999,999円</b>
                      </span>
                    </div>
                    <div class="event-tag">
                    <a v-for="(tag, index) in tags" href="" :class="(index==3?'fw-bold':'')"># {{ tag }}</a>
                    </div>
                  </div>
                  <div class="event-start">
                    started 2022/12/3 16:00 by<b>@tanaka_osmu</b>
                  </div>
                  <!-- <a :href="'event/'" class="event-link"></a> -->
                </div>
              </div>
              <a href="#" class="post-event-btn d-flex align-items-center justify-content-center">
                イベントに参加する
              </a>
            </div>
            <div class="event-item__container">
              <div class="event-item">
                <div class="event-left">
                  <div class="event-img">
                    <img src="/assets/img/user/common/post_1a.png" width="140" />
                  </div>
                  <div class="avatar">
                    <img src="/assets/img/user/event/avatar_6.png" width="25" />
                  </div>
                </div>
                <div class="event-right">
                  <div class="event-right__container">
                    <div class="d-flex">
                      <a href="" class="cat-name">お助け</a>
                    </div>
                    <h2 class="event-title">
                      取引先の50周年祝いの品を選んでください!!
                    </h2>
                    <div class="event-meta d-flex align-items-center flex-wrap">
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_period_2.svg" /><span>残り...</span><b>5日と<span
                            class="txt-time">12</span>時間<span class="txt-time">32</span>分</b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_people_2.svg" /><b><span class="txt-number">3人</span></b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_coin_2.svg" /><b>無料</b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_reward_2.svg" /><b>40,000円</b>
                      </span>
                    </div>
                    <div class="event-tag">
                      <a v-for="tag in tags" :key="tag" href="" class="fw-bold"># {{ tag }}</a>
                    </div>
                  </div>
                  <div class="event-start">
                    started 2022/12/3 16:00 by<b>@tanaka_osmu</b>
                  </div>
                  <!-- <a :href="'event/'" class="event-link"></a> -->
                </div>
              </div>
              <a href="#" class="post-event-btn d-flex align-items-center justify-content-center">
                イベントに参加する
              </a>
            </div>
          </div>
        </div>
      </template>
      <!-- tabPanel-2 -->
      <template v-slot:tabPanel-2>
        <div class="event-list">
          <div class="ongoing-list">
            <div class="event-item__container">
              <div class="event-item">
                <div class="event-left">
                  <div class="event-img">
                    <img src="/assets/img/user/common/post_2a.png" width="140" />
                  </div>
                  <div class="avatar">
                    <img src="/assets/img/user/event/avatar_6.png" width="25" />
                  </div>
                </div>
                <div class="event-right">
                  <div class="event-right__container">
                    <div class="d-flex">
                      <a href="" class="cat-name event-new">新着</a>
                      <a href="" class="cat-name">アドベンチャー</a>
                    </div>
                    <h2 class="event-title">
                      参加費1,000円で、世界中を飛び回る私を見つけたら賞金!!
                    </h2>
                    <div class="event-meta d-flex align-items-center flex-wrap">
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_period_2.svg" /><span>残り...</span><b>1日と<span
                            class="txt-time">12</span>時間<span class="txt-time">32</span>分</b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_people_2.svg" /><b><span class="txt-number">120人</span></b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_coin_2.svg" /><b>1,000円</b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_reward_2.svg" /><b>9,999,999円</b>
                      </span>
                    </div>
                    <div class="event-tag">
                      <a v-for="(tag, index) in tags" href="" :class="(index==3?'fw-bold':'')"># {{ tag }}</a>
                    </div>
                  </div>
                  <div class="event-start">
                    started 2022/12/3 16:00 by<b>@tanaka_osmu</b>
                  </div>
                  <!-- <a :href="'event/'" class="event-link"></a> -->
                </div>
              </div>
              <a href="#" class="post-event-btn d-flex align-items-center justify-content-center post-event-btn-note">
                参加者専用チャット
              </a>
            </div>
          </div>
        </div>
      </template>
      <!-- tabPanel-3 -->
      <template v-slot:tabPanel-3>
        <div class="event-list">
          <div class="ongoing-list">
            <div class="event-item__container">
              <div class="event-item">
              <div class="event-left">
                <div class="event-img">
                  <img src="/assets/img/user/common/post_2a.png" width="140" />
                </div>
                <div class="avatar">
                  <img src="/assets/img/user/event/avatar_6.png" width="25" />
                </div>
                <div class="txt-finished">
                  このイベントは<br />
                  終了しました
                </div>
              </div>
              <div class="event-right">
                <div class="event-right__container">
                  <div class="d-flex">
                    <a href="" class="cat-name event-new">新着</a>
                    <a href="" class="cat-name">アドベンチャー</a>
                  </div>
                  <h2 class="event-title">
                    参加費1,000円で、世界中を飛び回る私を見つけたら賞金!!
                  </h2>
                  <div class="event-meta d-flex align-items-center flex-wrap">
                    <span class="meta-item">
                      <img src="/assets/img/user/event/ic_period_2.svg" /><span>残り...</span><b>1日と<span
                          class="txt-time">12</span>時間<span class="txt-time">32</span>分</b>
                    </span>
                    <span class="meta-item">
                      <img src="/assets/img/user/event/ic_people_2.svg" /><b><span class="txt-number">120人</span></b>
                    </span>
                    <span class="meta-item">
                      <img src="/assets/img/user/event/ic_coin_2.svg" /><b>1,000円</b>
                    </span>
                    <span class="meta-item">
                      <img src="/assets/img/user/event/ic_reward_2.svg" /><b>9,999,999円</b>
                    </span>
                  </div>
                  <div class="event-tag">
                    <a v-for="(tag, index) in tags" href="" :class="(index==3?'fw-bold':'')"># {{ tag }}</a>
                  </div>
                </div>
                <div class="event-start">
                  started 2022/12/3 16:00 by<b>@tanaka_osmu</b>
                </div>
                <a :href="'event/'" class="event-link"></a>
              </div>
            </div>
            </div><div class="event-item__container">
              <div class="event-item">
                <div class="event-left">
                  <div class="event-img">
                    <img src="/assets/img/user/common/post_1a.png" width="140" />
                  </div>
                  <div class="avatar">
                    <img src="/assets/img/user/event/avatar_6.png" width="25" />
                  </div>
                  <div class="txt-finished">
                    このイベントは<br />
                    終了しました
                  </div>
                </div>
                <div class="event-right">
                  <div class="event-right__container">
                    <div class="d-flex">
                      <a href="" class="cat-name">お助け</a>
                    </div>
                    <h2 class="event-title">
                      取引先の50周年祝いの品を選んでください!!
                    </h2>
                    <div class="event-meta d-flex align-items-center flex-wrap">
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_period_2.svg" /><span>残り...</span><b>5日と<span
                            class="txt-time">12</span>時間<span class="txt-time">32</span>分</b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_people_2.svg" /><b><span class="txt-number">3人</span></b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_coin_2.svg" /><b>無料</b>
                      </span>
                      <span class="meta-item">
                        <img src="/assets/img/user/event/ic_reward_2.svg" /><b>40,000円</b>
                      </span>
                    </div>
                    <div class="event-tag">
                      <a v-for="tag in tags" :key="tag" href="" class="fw-bold"># {{ tag }}</a>
                    </div>
                  </div>
                  <div class="event-start">
                    started 2022/12/3 16:00 by<b>@tanaka_osmu</b>
                  </div>
                  <a :href="'event/'" class="event-link"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </template>
    </TabsMyEvent>
  </div>
</template>

<script>
import TabsMyEvent from '../common/tabsMyEvent.vue';
import PostEvent from '../common/postEvent.vue';
import UserHeader from '../common/userHeader.vue';
export default {
  created: function () {},
  data() {
    return {
      tabList: ['投稿中(2)', '参加中(1)', '終了済み(0)'],
      tags: ['人探し', 'ヨーロッパ', '日本', '探偵系']
    };
  },
  mounted() {},
  props: ['data'],
  components: { TabsMyEvent, PostEvent, UserHeader },
  methods: {}
};
</script>
