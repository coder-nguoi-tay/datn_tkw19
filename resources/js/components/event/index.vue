<template>
  <div class="event-list h-100">
    <div class="container event-list__container h-100">
      <div class="event-list__wrapper" v-if="haveDate">
        <div class="cat-list draft-list">
          <h3 class="event-cat-title">下書き中(2)</h3>
          <div class="event-item__container">
            <div class="event-item">
              <div class="txt-draft">(下書き)</div>
              <div class="last-save">最終保存日 20222/10/1</div>
              <h2 class="event-title">
                取引先の50周年祝いの品を選んでください!! - 第2回 -
              </h2>
              <a href="" class="event-link"></a>
            </div>
            <div class="event-item">
              <div class="txt-draft">(下書き)</div>
              <div class="last-save">最終保存日 20222/9/25</div>
              <h2 class="event-title">
                取引先の50周年祝いの品を選んでください!!2
              </h2>
              <a href="" class="event-link"></a>
            </div>
          </div>
        </div>
        <div class="cat-list ongoing-list">
          <h3 class="event-cat-title">開催中(1)</h3>
          <div class="event-item__container">
            <div class="event-item">
              <div class="event-left">
                <div class="event-img">
                  <img
                    src="/assets/img/user/event/hand_2.png"
                    alt=""
                    width="140"
                  />
                </div>
                <div class="avatar">
                  <img
                    src="/assets/img/user/event/avatar_6.png"
                    alt=""
                    width="25"
                  />
                </div>
              </div>
              <div class="event-right">
                <div class="event-right__container">
                  <a href="" class="cat-name">お助け</a>
                  <h2 class="event-title">
                    取引先の50周年祝いの品を選んでください!! - 第2回 -
                  </h2>
                  <div class="event-meta d-flex align-items-center flex-wrap">
                    <span class="meta-item">
                      <img
                        src="/assets/img/user/event/ic_period_2.svg"
                        alt=""
                      /><span>残り...</span
                      ><b
                        >5日と<span class="txt-time">12</span>時間<span
                          class="txt-time"
                          >32</span
                        >分</b
                      >
                    </span>
                    <span class="meta-item">
                      <img
                        src="/assets/img/user/event/ic_people_2.svg"
                        alt=""
                      /><b><span class="txt-number">3</span>人</b>
                    </span>
                    <span class="meta-item">
                      <img
                        src="/assets/img/user/event/ic_coin_2.svg"
                        alt=""
                      /><b>無料</b>
                    </span>
                    <span class="meta-item">
                      <img
                        src="/assets/img/user/event/ic_reward_2.svg"
                        alt=""
                      /><b><span class="txt-number">40,000</span>円</b>
                    </span>
                  </div>
                  <div class="event-tag">
                    <a href=""># 企業</a>
                    <a href=""># 記念日</a>
                    <a href=""># 上場企業</a>
                    <a href=""># お中元</a>
                  </div>
                </div>
                <div class="event-start">
                  started 2021/10/4 16:00 by <b>@tanaka_osmu</b>
                </div>
                <a href="" class="event-link"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="cat-list ongoing-list reserved-list">
          <h3 class="event-cat-title">予約中(2)</h3>
          <div class="event-item__container">
            <div class="event-item__wrapper">
              <div class="event-item">
                <div class="event-left">
                  <div class="event-img">
                    <img
                      src="/assets/img/user/event/animal.png"
                      alt=""
                      width="140"
                    />
                  </div>
                  <div class="avatar">
                    <img
                      src="/assets/img/user/event/avatar_6.png"
                      alt=""
                      width="25"
                    />
                  </div>
                </div>
                <div class="event-right">
                  <div class="event-right__container">
                    <a href="" class="cat-name">お役立ち情報</a>
                    <h2 class="event-title">
                      お忍びデートスポットをリサーチしてください!!
                    </h2>
                    <div class="event-meta d-flex align-items-center flex-wrap">
                      <span class="meta-item">
                        <img
                          src="/assets/img/user/event/ic_period_2.svg"
                          alt=""
                        /><span>残り...</span
                        ><b><span class="txt-time">3</span>日</b>
                      </span>
                      <span class="meta-item">
                        <img
                          src="/assets/img/user/event/ic_people_2.svg"
                          alt=""
                        /><b><span class="txt-number">0</span>人</b>
                      </span>
                      <span class="meta-item">
                        <img
                          src="/assets/img/user/event/ic_coin_2.svg"
                          alt=""
                        /><b><span class="txt-number">1,000</span>円</b>
                      </span>
                      <span class="meta-item">
                        <img
                          src="/assets/img/user/event/ic_reward_2.svg"
                          alt=""
                        /><b><span class="txt-number">100,000,000</span>円</b>
                      </span>
                    </div>
                    <div class="event-tag">
                      <a href=""># 企業</a>
                      <a href=""># 記念日</a>
                      <a href=""># 上場企業</a>
                      <a href=""># お中元</a>
                    </div>
                  </div>
                  <div class="event-start">
                    started 2021/10/4 16:00 by <b>@tanaka_osmu</b>
                  </div>
                  <a href="" class="event-link"></a>
                </div>
              </div>
              <div class="btn__container">
                <a href="" class="btn-cancel">予約を取り消し下書きにする</a>
              </div>
            </div>
            <div class="event-item__wrapper">
              <div class="event-item">
                <div class="event-left">
                  <div class="event-img">
                    <img
                      src="/assets/img/user/event/adventure.png"
                      alt=""
                      width="140"
                    />
                  </div>
                  <div class="avatar">
                    <img
                      src="/assets/img/user/event/avatar_6.png"
                      alt=""
                      width="25"
                    />
                  </div>
                </div>
                <div class="event-right">
                  <div class="event-right__container">
                    <a href="" class="cat-name">アドベンチャー</a>
                    <h2 class="event-title">
                      参加費1,000円で、世界中を飛び回る私を見つけたら賞金!!
                    </h2>
                    <div class="event-meta d-flex align-items-center flex-wrap">
                      <span class="meta-item">
                        <img
                          src="/assets/img/user/event/ic_period_2.svg"
                          alt=""
                        /><span>残り...</span
                        ><b><span class="txt-time">7</span>日</b>
                      </span>
                      <span class="meta-item">
                        <img
                          src="/assets/img/user/event/ic_people_2.svg"
                          alt=""
                        /><b><span class="txt-number">0</span>人</b>
                      </span>
                      <span class="meta-item">
                        <img
                          src="/assets/img/user/event/ic_coin_2.svg"
                          alt=""
                        /><b><span class="txt-number">1,000</span>円</b>
                      </span>
                      <span class="meta-item">
                        <img
                          src="/assets/img/user/event/ic_reward_2.svg"
                          alt=""
                        /><b><span class="txt-number">9,999,999</span>円</b>
                      </span>
                    </div>
                    <div class="event-tag">
                      <a href=""># 企業</a>
                      <a href=""># 記念日</a>
                      <a href=""># 上場企業</a>
                      <a href=""># お中元</a>
                    </div>
                  </div>
                  <div class="event-start">
                    started 2021/10/4 16:00 by <b>@tanaka_osmu</b>
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
          <div class="img-nodata text-center">
            <img src="/assets/img/user/event/no_data.png" alt="" />
          </div>
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
            <div class="e-modal-img">
              <img src="/assets/img/user/event/modal.png" alt="" />
            </div>
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
export default {
  components: {},
  props: ['data'],
  data: function () {
    return {
      haveDate: true,
      eventCreated: true
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
