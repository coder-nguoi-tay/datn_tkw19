<template>
  <div class="event-detail">
    <header class="header">
      <div class="container header__container">
        <div class="header__wrapper d-flex align-items-center justify-content-between">
          <a href="/my-event" class="btn-back position-relative">
            <img class="ic-back" src="/assets/img/user/common/ic_back.svg" />
          </a>
          <p class="header-title">イベント詳細</p>
          <div class="header_option d-flex">
            <img src="/assets/img/my_page/icon_share.png" class="icon_share" alt="" />
            <img src="/assets/img/user/common/icon_refresh.png" class="icon_refresh" alt="" />
          </div>
        </div>
      </div>
    </header>
    <div class="event-detail__container">
      <div class="event-info">
        <Carousel :autoplay="3000" :wrap-around="true">
          <Slide v-for="slide in 3" :key="slide">
            <div class="event__img carousel__item">
              <img src="/assets/img/user/event/hands.png" alt="" />
            </div>
          </Slide>
          <template #addons>
            <Pagination />
          </template>
        </Carousel>
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
              <div class="d-flex flex-column align-items-center">
                <img src="/assets/img/user/event/ic_fee.svg" alt="" /><span>参加費</span>
              </div>
              1,000円
            </span>
            <span class="meta-item">
              <div class="d-flex flex-column align-items-center">
                <img src="/assets/img/user/event/ic_reward.svg" alt="" /><span>総額報酬金</span>
              </div>
              9,999,999円
            </span>
            <span class="meta-item fw-bold">
              <div class="d-flex flex-column align-items-center">
                <img src="/assets/img/user/event/ic_period.svg" alt="" /><span>残り時間</span>
              </div>
              1日と12時間32分
            </span>
            <span class="meta-item meta-item-avatar fw-bold">
              <div class="d-flex flex-column align-items-center">
                <img src="/assets/img/user/event/avatar_2.png" alt="" /><span>主催者</span>
              </div>
              商社太郎
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
        <div class="container tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="group-chat-tab"
            role="tabpanel"
            aria-labelledby="group-chat-tab"
          >
            <form action="" method="POST" name="" enctype="multipart/form-data">
              <div class="group-chat">
                <div class="chat__header d-flex justify-content-between align-items-center">
                  <span class="txt-all-people">すべての人</span>
                  <div class="d-flex">
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
                          <img
                            src="/assets/img/user/event/avatar_1.png"
                            alt=""
                          />
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
                          <img
                            src="/assets/img/user/event/avatar_2.png"
                            alt=""
                          />
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
                          <img
                            src="/assets/img/user/event/avatar_3.png"
                            alt=""
                          />
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
                  <button
                    type="button"
                    class="btn-join"
                    :disabled="!isAllowRegister"
                  >
                    {{
                      isAllowRegister
                        ? 'イベントに参加する'
                        : 'このイベントの参加は締め切られました'
                    }}
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div
            class="tab-pane fade"
            id="private-chat-tab"
            role="tabpanel"
            aria-labelledby="private-chat-tab"
          >
            <form action="" method="POST" name="" enctype="multipart/form-data">
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
                          <div class="chat__content">
                            是非参加させていただきたいです。
                          </div>
                          <div class="chat-time">18:22<span>・・・</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="chat__container">
                      <p class="chat-datetime text-center">2021年12月10日</p>
                      <div class="chat__item other-people d-flex">
                        <div class="avatar">
                          <img
                            src="/assets/img/user/event/avatar_2.png"
                            alt=""
                          />
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
                          <img
                            src="/assets/img/user/event/avatar_4.png"
                            alt=""
                          />
                        </div>
                        <div class="chat__right">
                          <div class="chat__content">
                            企画者が参加を承諾いたしました。イベント達成に向けて活動を開始してください。
                          </div>
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
                    イベントに参加する
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div
            class="tab-pane fade"
            id="chat-list-tab"
            role="tabpanel"
            aria-labelledby="chat-list-tab"
          >
            <form action="" method="POST" name="" enctype="multipart/form-data">
              <div class="group-chat message-list">
                <div class="message__header d-flex justify-content-between">
                  <div class="mess__header-item">
                    <p class="txt-people">
                      参加人数<img
                        src="/assets/img/user/event/ic_people_grey.svg"
                        alt=""
                      />
                    </p>
                    <p class="txt-number-people">120<span>人</span></p>
                  </div>
                  <div class="mess__header-item">
                    <p class="txt-people">
                      達成人数<img
                        src="/assets/img/user/event/ic_room_grey.svg"
                        alt=""
                      />
                    </p>
                    <p class="txt-number-people">4<span>人</span></p>
                  </div>
                </div>
                <div class="chat__body message__body">
                  <div class="message-box">
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="11.43"
                              height="9"
                              viewBox="0 0 11.43 9"
                            >
                              <g
                                id="ic_mark"
                                transform="translate(-332.37 -276.039)"
                              >
                                <path
                                  id="Path_1408"
                                  data-name="Path 1408"
                                  d="M142.608,80.019h-10V73.45l2.429,2.855,2.57-2.855,2.57,2.855,2.429-2.855Z"
                                  transform="translate(200.476 205.02)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_394"
                                  data-name="Ellipse 394"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(332.37 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_395"
                                  data-name="Ellipse 395"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(337.441 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_396"
                                  data-name="Ellipse 396"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(342.513 276.039)"
                                  fill="#cfcfcf"
                                />
                              </g>
                            </svg>
                          </span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_5.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">ミラクルポン酢</p>
                            <p class="last-mess">ゴッドファーザー</p>
                          </div>
                        </div>
                        <p class="mess-status">達成者</p>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark marked">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="11.43"
                              height="9"
                              viewBox="0 0 11.43 9"
                            >
                              <g
                                id="ic_mark"
                                transform="translate(-332.37 -276.039)"
                              >
                                <path
                                  id="Path_1408"
                                  data-name="Path 1408"
                                  d="M142.608,80.019h-10V73.45l2.429,2.855,2.57-2.855,2.57,2.855,2.429-2.855Z"
                                  transform="translate(200.476 205.02)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_394"
                                  data-name="Ellipse 394"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(332.37 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_395"
                                  data-name="Ellipse 395"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(337.441 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_396"
                                  data-name="Ellipse 396"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(342.513 276.039)"
                                  fill="#cfcfcf"
                                />
                              </g>
                            </svg>
                          </span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_1.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">酒井商事</p>
                            <p class="last-mess">最速の賢者</p>
                          </div>
                        </div>
                        <p class="mess-status">達成者</p>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark"></span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_2.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">まるる。</p>
                            <p class="last-mess">スーパーバニー</p>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark"></span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_4.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">🌹星のカビー🌹</p>
                            <p class="last-mess">聖なるユニコーン</p>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark favorite">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="11.43"
                              height="9"
                              viewBox="0 0 11.43 9"
                            >
                              <g
                                id="ic_mark"
                                transform="translate(-332.37 -276.039)"
                              >
                                <path
                                  id="Path_1408"
                                  data-name="Path 1408"
                                  d="M142.608,80.019h-10V73.45l2.429,2.855,2.57-2.855,2.57,2.855,2.429-2.855Z"
                                  transform="translate(200.476 205.02)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_394"
                                  data-name="Ellipse 394"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(332.37 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_395"
                                  data-name="Ellipse 395"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(337.441 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_396"
                                  data-name="Ellipse 396"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(342.513 276.039)"
                                  fill="#cfcfcf"
                                />
                              </g>
                            </svg>
                          </span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_1.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">😀😀😀</p>
                            <p class="last-mess">虹色のおじさん</p>
                          </div>
                        </div>
                        <p class="mess-status">達成者</p>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="11.43"
                              height="9"
                              viewBox="0 0 11.43 9"
                            >
                              <g
                                id="ic_mark"
                                transform="translate(-332.37 -276.039)"
                              >
                                <path
                                  id="Path_1408"
                                  data-name="Path 1408"
                                  d="M142.608,80.019h-10V73.45l2.429,2.855,2.57-2.855,2.57,2.855,2.429-2.855Z"
                                  transform="translate(200.476 205.02)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_394"
                                  data-name="Ellipse 394"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(332.37 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_395"
                                  data-name="Ellipse 395"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(337.441 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_396"
                                  data-name="Ellipse 396"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(342.513 276.039)"
                                  fill="#cfcfcf"
                                />
                              </g>
                            </svg>
                          </span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_2.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">❤</p>
                            <p class="last-mess">愉快な雀士</p>
                          </div>
                        </div>
                        <p class="mess-status">達成者</p>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark"></span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_2.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">ミラクルポン酢</p>
                            <p class="last-mess">ゴッドファーザー</p>
                          </div>
                        </div>
                        <p class="mess-status">達成者</p>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark"></span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_5.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">ミラクルポン酢</p>
                            <p class="last-mess">ゴッドファーザー</p>
                          </div>
                        </div>
                        <p class="mess-status">達成者</p>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark"></span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_4.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">ミラクルポン酢</p>
                            <p class="last-mess">ゴッドファーザー</p>
                          </div>
                        </div>
                        <p class="mess-status">達成者</p>
                      </div>
                    </a>
                    <a href="">
                      <div class="chat__item">
                        <div class="chat__left">
                          <span class="ic-mark">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="11.43"
                              height="9"
                              viewBox="0 0 11.43 9"
                            >
                              <g
                                id="ic_mark"
                                transform="translate(-332.37 -276.039)"
                              >
                                <path
                                  id="Path_1408"
                                  data-name="Path 1408"
                                  d="M142.608,80.019h-10V73.45l2.429,2.855,2.57-2.855,2.57,2.855,2.429-2.855Z"
                                  transform="translate(200.476 205.02)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_394"
                                  data-name="Ellipse 394"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(332.37 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_395"
                                  data-name="Ellipse 395"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(337.441 276.039)"
                                  fill="#cfcfcf"
                                />
                                <circle
                                  id="Ellipse_396"
                                  data-name="Ellipse 396"
                                  cx="0.644"
                                  cy="0.644"
                                  r="0.644"
                                  transform="translate(342.513 276.039)"
                                  fill="#cfcfcf"
                                />
                              </g>
                            </svg>
                          </span>
                          <div class="avatar">
                            <img
                              src="/assets/img/user/event/avatar_5.png"
                              alt=""
                            />
                          </div>
                          <div class="chat-info">
                            <p class="username">ミラクルポン酢</p>
                            <p class="last-mess">ゴッドファーザー</p>
                          </div>
                        </div>
                        <p class="mess-status">達成者</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="chat__footer">
                  <button type="button" class="btn-join btn-join-private">
                    イベントに参加する
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>
<script>
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination } from 'vue3-carousel'
export default {
  components: {
    Carousel,
    Slide,
    Pagination,
  },
  props: ['data'],
  data: function () {
    return {
      haveMessage: true,
      havePrivateMess: true,
      isAllowRegister: true
    }
  },
  created() {},
  methods() {}
}
</script>
