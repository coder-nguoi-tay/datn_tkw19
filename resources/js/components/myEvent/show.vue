<template>
  <div class="event-detail">
    <div class="container event-detail__container">
      <div class="event-info">
        <div class="event__img">
          <img src="/assets/img/user/event/hands.png" alt="" />
        </div>
        <div class="info-box">
          <div class="event-desc d-flex align-items-center flex-wrap">
            <span class="event__category">新着</span>
            <p class="event__title">取引先の50周年祝いの品を選んでください!!</p>
            <a href="" class="btn-view-detail">
              <span
                >詳細<img src="/assets/img/user/event/ic_open.svg" alt=""
              /></span>
            </a>
          </div>
          <div class="event-meta d-flex align-items-center flex-wrap">
            <span class="meta-item">
              <img src="/assets/img/user/event/ic_fee.svg" alt="" />1,000円
            </span>
            <span class="meta-item">
              <img src="/assets/img/user/event/ic_reward.svg" alt="" />500,000円
            </span>
            <span class="meta-item">
              <img src="/assets/img/user/event/ic_period.svg" alt="" />残り5日
            </span>
            <span class="meta-item">
              <img src="/assets/img/user/event/ic_noti.svg" alt="" /><b
                >商社太郎</b
              >
            </span>
          </div>
        </div>
      </div>
      <div class="event-tabs">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button
              class="nav-link active"
              id="nav-group-chat-tab"
              data-bs-toggle="tab"
              data-bs-target="#group-chat-tab"
              type="button"
              role="tab"
              aria-controls="group-chat-tab"
              aria-selected="true"
            >
              <img
                class="img-red"
                src="/assets/img/user/event/ic_people.svg"
                alt=""
              />
              <img
                class="img-white"
                src="/assets/img/user/event/ic_people_white.svg"
                alt=""
              />
              <span>公開チャット</span>
            </button>
            <button
              class="nav-link"
              id="nav-private-chat-tab"
              data-bs-toggle="tab"
              data-bs-target="#private-chat-tab"
              type="button"
              role="tab"
              aria-controls="private-chat-tab"
              aria-selected="false"
            >
              <img
                class="img-red"
                src="/assets/img/user/event/ic_person.svg"
                alt=""
              />
              <img
                class="img-white"
                src="/assets/img/user/event/ic_person_white.svg"
                alt=""
              />
              <span>参加者専用チャット</span>
            </button>
            <button
              class="nav-link"
              id="nav-chat-list-tab"
              data-bs-toggle="tab"
              data-bs-target="#chat-list-tab"
              type="button"
              role="tab"
              aria-controls="chat-list-tab"
              aria-selected="false"
            >
              <img
                class="img-red"
                src="/assets/img/user/event/ic_rank.svg"
                alt=""
              />
              <img
                class="img-white"
                src="/assets/img/user/event/ic_rank_white.svg"
                alt=""
              />
              達成状況
            </button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="group-chat-tab"
            role="tabpanel"
            aria-labelledby="group-chat-tab"
          >
            <div class="group-chat">
              <div class="chat__header d-flex justify-content-between">
                <span class="txt-all-people">すべての人</span>
                <div>
                  <span class="c-header__txt all-people">
                    <img
                      src="/assets/img/user/event/ic_people_black.svg"
                      alt=""
                    />120人
                  </span>
                  <span class="c-header__txt people-on-chat">
                    <img
                      src="/assets/img/user/event/ic_p_on_chat.svg"
                      alt=""
                    />{{ haveMessage ? '4' : '0' }}人
                  </span>
                </div>
              </div>
              <div class="chat__body">
                <div class="message-box" v-if="haveMessage">
                  <div class="chat__container">
                    <p class="chat-datetime text-center">2021年11月5日</p>
                    <div class="chat__item other-people d-flex">
                      <div class="avatar">
                        <img src="/assets/img/user/event/avatar_1.png" alt="" />
                      </div>
                      <div class="chat__right">
                        <div class="chat__content">
                          昨日、渋谷のハチ公前で煙草を吸っていた人がそっくりだったんですが、違う人でした...泣
                        </div>
                        <div class="chat-time">11:22<span>・・・</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="chat__container">
                    <p class="chat-datetime text-center">2021年12月5日</p>
                    <div class="chat__item other-people d-flex">
                      <div class="avatar">
                        <img src="/assets/img/user/event/avatar_2.png" alt="" />
                      </div>
                      <div class="chat__right">
                        <div class="chat__content">
                          こんにちは。今日は渋谷周辺でジョギングをします。
                        </div>
                        <div class="chat-time">9:10<span>・・・</span></div>
                      </div>
                    </div>
                    <div class="chat__item me d-flex">
                      <div class="chat__right">
                        <div class="chat__content">全然見つからん！！</div>
                        <div class="chat-time">9:10<span>・・・</span></div>
                      </div>
                    </div>
                    <div class="chat__item other-people d-flex">
                      <div class="avatar">
                        <img src="/assets/img/user/event/avatar_3.png" alt="" />
                      </div>
                      <div class="chat__right">
                        <div class="chat__content">Who are u????</div>
                        <div class="chat-time">9:22<span>・・・</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="message-box none-message" v-else>
                  このイベントにまだ投稿はありません。
                </div>
                <div class="message-input-group d-flex align-items-center">
                  <input
                    type="text"
                    class="form-control"
                    placeholder=""
                    name="message"
                  />
                  <button class="btn-send-image">
                    <img src="/assets/img/user/event/ic_camera.svg" alt="" />
                  </button>
                  <button class="btn-send-message">投稿</button>
                </div>
              </div>
              <div class="chat__footer">
                <p class="txt-updated-at text-end">
                  最終更新日時：2021年12月10日 21:21
                </p>
                <button type="button" class="btn-join" :disabled="!isAllowRegister">
                  {{ isAllowRegister ? 'イベントに参加する' : 'このイベントの参加は締め切られました' }}
                </button>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="private-chat-tab"
            role="tabpanel"
            aria-labelledby="private-chat-tab"
          >
            <div class="group-chat private-chat">
              <div class="chat__header d-flex justify-content-between">
                <span class="txt-all-people">企画者（商社太郎）</span>
                <div>
                  <span class="c-header__txt all-people">
                    <img
                      src="/assets/img/user/event/ic_people_black.svg"
                      alt=""
                    />120人
                  </span>
                  <span class="c-header__txt people-on-chat">
                    <img
                      src="/assets/img/user/event/ic_p_on_chat.svg"
                      alt=""
                    />{{ haveMessage ? '4' : '0' }}人
                  </span>
                </div>
              </div>
              <div class="chat__body">
                <div class="message-box" v-if="havePrivateMess">
                  <div class="chat__container">
                    <p class="chat-datetime text-center">2021年12月9日</p>
                    <div class="chat__item me d-flex">
                      <div class="chat__right">
                        <div class="chat__content">是非参加させていただきたいです。</div>
                        <div class="chat-time">18:22<span>・・・</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="chat__container">
                    <p class="chat-datetime text-center">2021年12月10日</p>
                    <div class="chat__item other-people d-flex">
                      <div class="avatar">
                        <img src="/assets/img/user/event/avatar_2.png" alt="" />
                      </div>
                      <div class="chat__right">
                        <div class="chat__content">
                          参加を承諾させていただきます。
                        </div>
                        <div class="chat-time">9:10<span>・・・</span></div>
                      </div>
                    </div>
                    <div class="chat__item other-people d-flex">
                      <div class="avatar">
                        <img src="/assets/img/user/event/avatar_4.png" alt="" />
                      </div>
                      <div class="chat__right">
                        <div class="chat__content">企画者が参加を承諾いたしました。イベント達成に向けて活動を開始してください。</div>
                        <div class="chat-time">9:10<span>・・・</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="message-box none-message" v-else>
                  チャット内にまだ投稿はありません。
                </div>
                <div class="message-input-group d-flex align-items-center">
                  <input
                    type="text"
                    class="form-control"
                    placeholder=""
                    name="message"
                  />
                  <button class="btn-send-image">
                    <img src="/assets/img/user/event/ic_camera.svg" alt="" />
                  </button>
                  <button class="btn-send-message">投稿</button>
                </div>
              </div>
              <div class="chat__footer">
                <p class="txt-updated-at text-end">
                  最終更新日時：2021年12月10日 21:21
                </p>
                <button type="button" class="btn-join btn-join-private">
                  達成報告
                </button>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="chat-list-tab"
            role="tabpanel"
            aria-labelledby="chat-list-tab"
          >
            c
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  components: {},
  props: ['data'],
  data: function () {
    return {
      haveMessage: true,
      havePrivateMess: true,
      isAllowRegister: true,
    }
  },
  created() {},
  methods() {}
}
</script>
