<template>
  <div class="event-create">
    <div class="container event-create__container">
      <form action="" method="POST" ref="formData">
        <div class="event-create__wrapper">
          <p class="create-note">
            こちらから自由にイベントを開催することができます。ただし、すべてのイベントは<a
              href="#"
              ><b>利用規約</b></a
            >及び<a href="#"><b>プライバシーポリシー</b></a
            >に準じたもののみといたします。
          </p>
          <div class="input-section">
            <h2 class="input-title">基本情報</h2>
            <div class="form-group">
              <label class="form-label" require>タイトル</label>
              <input
                type="text"
                class="form-control"
                placeholder="例）参加費1,000円で、世界中を飛び回る私を見つけたら賞金!!"
              />
              <div class="form-text txt-validate text-end">0 / 40文字中</div>
            </div>
            <div class="form-group">
              <label class="form-label" require>イベントの詳細</label>
              <textarea
                class="form-control"
                rows="11"
                maxlength="2000"
                name="event_detail"
                :placeholder="detailPlace"
              ></textarea>
              <div class="form-text txt-validate text-end">0 / 2,000文字中</div>
            </div>
            <div class="form-group mb-16">
              <div class="form-add-file">
                <label class="form-label" optional>添付資料</label>
                <div class="form-text">
                  イベントに関する画像や資料を最大3つまで添付することができます。
                </div>
                <button class="btn-add-file" @click.prevent="addAttachment">
                  添付資料を追加する
                </button>
                <input
                  type="file"
                  name="attachment[]"
                  id="attachment"
                  class="hidden"
                />
              </div>
              <div class="file-list">
                <div class="file-item">
                  <div>
                    <span class="ic-link">
                      <img src="/assets/img/user/event/ic_link.svg" alt="" />
                    </span>
                    <span class="file-name">私の画像1.jpg</span>
                  </div>
                  <span class="ic-close">
                    <img
                      src="/assets/img/user/event/ic_close_blue.svg"
                      alt=""
                    />
                  </span>
                </div>
                <div class="file-item">
                  <div>
                    <span class="ic-link">
                      <img src="/assets/img/user/event/ic_link.svg" alt="" />
                    </span>
                    <span class="file-name">私の画像2.jpg</span>
                  </div>
                  <span class="ic-close">
                    <img
                      src="/assets/img/user/event/ic_close_blue.svg"
                      alt=""
                    />
                  </span>
                </div>
                <div class="file-item">
                  <div>
                    <span class="ic-link">
                      <img src="/assets/img/user/event/ic_link.svg" alt="" />
                    </span>
                    <span class="file-name">私の画像3.jpg</span>
                  </div>
                  <span class="ic-close">
                    <img
                      src="/assets/img/user/event/ic_close_blue.svg"
                      alt=""
                    />
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group mb-16">
              <div class="form-add-file mb-16">
                <label class="form-label" require>一覧表示用画像</label>
                <div class="form-text">
                  ホームや関連イベントに表示されるときのサムネイルになります。正方形より少し縦に長いの画像の設定を推奨しています。1枚のみ設定できます。
                </div>
                <input type="file" name="image_1" id="image_1" class="hidden" />
              </div>
              <div class="file-list img-list">
                <div class="img-item">
                  <img src="/assets/img/user/event/animal.png" alt="" />
                  <span class="ic-remove">
                    <img src="/assets/img/user/event/ic_remove.svg" alt="" />
                  </span>
                </div>
                <button class="btn-add-img" @click.prevent="addImage1">
                  <img src="/assets/img/user/event/ic_add.svg" alt="" />
                </button>
              </div>
            </div>
            <div class="form-group mb-16">
              <div class="form-add-file mb-16">
                <label class="form-label" require>詳細表示用画像</label>
                <div class="form-text mt-0">
                  イベント詳細の表示時に表示されるカバー画像です。横長の画像を推奨しています。最大で5枚まで設定することが可能です。
                </div>
                <input
                  type="file"
                  name="image_2[]"
                  id="image_2"
                  class="hidden"
                />
              </div>
              <div class="file-list img-list">
                <div class="img-item">
                  <img src="/assets/img/user/event/hands.png" alt="" />
                  <span class="ic-remove">
                    <img src="/assets/img/user/event/ic_remove.svg" alt="" />
                  </span>
                </div>
                <div class="img-item">
                  <img src="/assets/img/user/event/hands.png" alt="" />
                  <span class="ic-remove">
                    <img src="/assets/img/user/event/ic_remove.svg" alt="" />
                  </span>
                </div>
                <button class="btn-add-img" @click.prevent="addImage2">
                  <img src="/assets/img/user/event/ic_add.svg" alt="" />
                </button>
              </div>
            </div>
            <div class="form-group mb-16">
              <label class="form-label" require>カテゴリ</label>
              <div class="form-text mt-0 mb-8">
                イベント内容に該当するカテゴリを選択してください。
              </div>
              <div class="custom-input">
                <select
                  name="category"
                  class="form-control select-placeholder"
                  @change="selectPlaceholder($event)"
                >
                  <option value="">-- カテゴリを選択してください --</option>
                  <option value="1">qaz</option>
                  <option value="2">wsx</option>
                </select>
                <span class="ic-arrow"
                  ><img src="/assets/img/user/event/ic_arrow_down.svg" alt=""
                /></span>
              </div>
            </div>
            <div class="form-group mb-16">
              <label class="form-label" optional>実施地域</label>
              <div class="custom-input">
                <input
                  class="form-control place-black"
                  type="text"
                  name=""
                  placeholder="東京都、埼玉県、千葉県、群馬県、大阪府、宮城県、熊本県、大分県、... 他"
                  @click="showAdditionModal"
                />
                <span class="ic-arrow ic-duplicate">
                  <img src="/assets/img/user/event/ic_copy.svg" alt="" />
                </span>
              </div>
              <input
                class="form-control"
                type="text"
                name="detail_location"
                placeholder="詳細な場所"
              />
            </div>
            <div class="form-group form-group-tag mb-16">
              <label class="form-label" optional>タグ</label>
              <div class="tag-list">
                <p class="tag-item">
                  # 探偵系
                  <span class="ic-close">
                    <img
                      src="/assets/img/user/event/ic_close.svg"
                      alt=""
                      width="5"
                    />
                  </span>
                </p>
                <p class="tag-item">
                  # だれでも参加可
                  <span class="ic-close">
                    <img
                      src="/assets/img/user/event/ic_close.svg"
                      alt=""
                      width="5"
                    />
                  </span>
                </p>
              </div>
              <div class="form-add-tag d-flex">
                <input
                  type="text"
                  name="tag"
                  class="form-control"
                  placeholder="追加したいタグを入力"
                />
                <button class="btn-event-outline btn-add-tag">追加する</button>
              </div>
            </div>
          </div>
          <div class="input-section">
            <h2 class="input-title">参加条件</h2>
            <div class="form-group form-multiple">
              <label class="form-label" require>対象の性別</label>
              <div class="form-inline d-flex flex-wrap">
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="check1"
                    name="participation_condition_1"
                    value=""
                  />
                  <label class="form-check-label label" for="check1"
                    >すべて</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="check2"
                    name="participation_condition_2"
                  />
                  <label class="form-check-label label" for="check2">男</label>
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="check3"
                    name="participation_condition_3"
                  />
                  <label class="form-check-label label" for="check3">女</label>
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="check4"
                    name="participation_condition_4"
                  />
                  <label class="form-check-label label" for="check4"
                    >その他</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="check5"
                    name="participation_condition_5"
                  />
                  <label class="form-check-label label" for="check5"
                    >事業者</label
                  >
                </div>
              </div>
            </div>
            <div class="form-group form-multiple">
              <label class="form-label" require>対象の年齢</label>
              <div class="form-radio">
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="target_age_1"
                    name="target_age"
                    value=""
                  />
                  <label class="form-check-label label" for="target_age_1"
                    >すべて</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="target_age_2"
                    name="target_age"
                    value=""
                    checked
                  />
                  <label class="form-check-label label" for="target_age_2"
                    >年齢を詳細指定</label
                  >
                </div>
              </div>
              <div class="form-group mt-8">
                <div class="input-container">
                  <input
                    class="form-control w-160 d-inline-block"
                    type="number"
                    placeholder="例）8,10-20,50-65"
                  />
                  <label class="label ml-6">歳</label>
                </div>
                <div class="form-text mt-8">
                  10歳以上20歳未満の場合は、例のように半角英数字と『-（半角ハイフン）』を使用ください。なお、複数ある場合は『,（半角カンマ）』を区切り文字として使用ください。
                </div>
              </div>
            </div>
            <div class="form-group form-multiple">
              <label class="form-label" require>参加可能人数</label>
              <div class="form-text mt-0">
                イベントに参加できる最大可能人数となります。参加者（参加申請の承諾後のユーザー）が参加可能人数に達した場合、自動的に参加申請が締め切られます。
              </div>
              <div class="form-radio mt-8">
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="participant_1"
                    name="participant"
                    value=""
                  />
                  <label class="form-check-label label" for="participant_1"
                    >何人でも参加可能</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="participant_2"
                    name="participant"
                    value=""
                    checked
                  />
                  <label class="form-check-label label" for="participant_2"
                    >人数制限有り</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label class="label pl-20">最大参加可能人数</label>
                <div class="input-container d-flex">
                  <label class="label">～</label>
                  <div class="ml-8">
                    <input
                      class="form-control w-160 d-inline-block text-end"
                      type="number"
                      placeholder="9,999"
                    />
                  </div>
                  <label class="label ml-8">名</label>
                </div>
              </div>
            </div>
            <div class="form-group form-multiple mb-16">
              <label class="form-label" require>参加費用</label>
              <div class="form-radio">
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="participation_fee_1"
                    name="participation_fee"
                    value=""
                  />
                  <label
                    class="form-check-label label"
                    for="participation_fee_1"
                    >参加費無料（\0）</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="participation_fee_2"
                    name="participation_fee"
                    value=""
                    checked
                  />
                  <label
                    class="form-check-label label"
                    for="participation_fee_2"
                    >参加費を設定する</label
                  >
                </div>
              </div>
              <div class="form-group">
                <div class="input-container">
                  <input
                    class="form-control w-160 d-inline-block text-end"
                    type="number"
                    placeholder="500"
                  />
                  <label class="label ml-6">円</label>
                </div>
                <div class="form-text mt-8">
                  1名の参加者に対し参加する際に必要な参加費を設定します。参加費の入金タイミングは<b
                    ><a href="#">こちら</a></b
                  >からご確認ください。
                </div>
              </div>
            </div>
            <div class="form-group mb-16">
              <label class="form-label" optional="">その他の参加条件</label>
              <textarea
                class="form-control"
                rows="11"
                maxlength="2000"
                name="other_participation_conditions"
                :placeholder="conditionsPlace"
              ></textarea>
              <div class="form-text txt-validate text-end">0 / 2,000文字中</div>
            </div>
            <div class="form-group">
              <label class="form-label" require>イベント参加規約</label>
              <div class="form-text mt-0 mb-8">
                イベントに参加するときに本規約の同意が求められます。規約内容への記載内容は、<br />
                ひな形が用意されていますが、一部の内容を変更することができます。変更した内容は最終条へ加筆されます。
              </div>
              <div class="form-radio mb-8">
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="participation_term_1"
                    name="participation_term"
                    value=""
                  />
                  <label
                    class="form-check-label label"
                    for="participation_term_1"
                    >ひな形をそのまま使用する</label
                  >
                </div>
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="participation_term_2"
                    name="participation_term"
                    value=""
                    checked
                  />
                  <label
                    class="form-check-label label"
                    for="participation_term_2"
                    >ひな形を変更する</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label class="label sub-label">特記事項（任意）</label>
                <div>
                  <textarea
                    class="form-control"
                    rows="11"
                    maxlength="10000"
                    name="special_notes"
                    :placeholder="specialNotePlace"
                  ></textarea>
                  <div class="form-text txt-validate text-end">
                    0 / 10,000文字中
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="label sub-label"
                  >住所（<span class="txt-require">必須</span>）</label
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="東京都千代田区永田町"
                />
              </div>
              <div class="form-group">
                <label class="label sub-label"
                  >氏名または会社名（<span class="txt-require">必須</span
                  >）</label
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="商社太郎丸"
                />
              </div>
              <div class="form-note">
                <label class="label color-gray">※ 参加者への表示</label>
                <div class="txt-desc note-txt">
                  甲および乙は、本契約に定めのない事項または本契約の条項の解釈に疑義が生じたときは、本契約締結の趣旨に則り、甲乙誠意をもって協議の上解決するものとする。<br /><br />
                  第14条（特記事項）<br />
                  甲：東京都千代田区永田町<br />
                  　　商社太郎丸<br />
                  乙：　　
                </div>
              </div>
            </div>
          </div>
          <div class="input-section">
            <h2 class="input-title">達成条件と報酬</h2>
            <div class="form-group mb-16">
              <label class="form-label" require>達成条件</label>
              <textarea
                class="form-control"
                rows="14"
                maxlength="2000"
                name="accomplishment_condition"
                :placeholder="accomplishmentConditionPlace"
              ></textarea>
              <div class="form-text txt-validate text-end">0 / 2,000文字中</div>
            </div>
            <div class="form-group mb-16">
              <label class="form-label" require>報酬</label>
              <div class="form-text mt-0">
                達成者に対しての報酬を設定します。報酬は（最大9種までの）複数種類設定することができ、また総合報酬額は9,999,999円が限度額になります。達成者は1種類の報酬のみ受け取ることができます。なお報酬の決済のタイミングは、都度参加者がイベントを達成したタイミングになります。詳しくは<b
                  ><a href="#">こちら</a></b
                >でご確認ください。
              </div>
              <div class="input-item-container">
                <div class="input-item">
                  <p class="input-sub-title">
                    報酬 1<span class="ic-minus"></span>
                  </p>
                  <div class="input-item-group">
                    <div class="form-group">
                      <label class="form-label">報酬名</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="例）1等賞　”ニュージェネレーション!!!”"
                      />
                    </div>
                    <div class="form-group d-flex justify-content-between">
                      <div class="input-col-half">
                        <label class="form-label">報酬額</label>
                        <div class="input-container">
                          <input
                            type="number"
                            class="form-control text-end"
                            placeholder="100,000"
                          />
                          <label class="label">円</label>
                        </div>
                      </div>
                      <div class="input-col-half">
                        <label class="form-label">達成者枠数</label>
                        <div class="input-container">
                          <input
                            type="number"
                            class="form-control text-end"
                            placeholder="2"
                          />
                          <label class="label">枠</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">報酬額合計</label>
                      <div class="input-container">
                        <input
                          type="number"
                          class="form-control"
                          placeholder="200,000"
                          name="total_reward_amount"
                        />
                        <label class="label">円</label>
                      </div>
                    </div>
                    <p class="ic-group-dot text-center mt-8">
                      <img
                        src="/assets/img/user/event/ic_group_dot.svg"
                        alt=""
                      />
                    </p>
                  </div>
                </div>
                <div class="input-item mt-8">
                  <p class="input-sub-title">
                    報酬 2<span class="ic-minus"></span>
                  </p>
                  <div class="input-item-group">
                    <div class="form-group">
                      <label class="form-label">報酬名</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="例）1等賞　”ニュージェネレーション!!!”"
                      />
                    </div>
                    <div class="form-group d-flex justify-content-between">
                      <div class="input-col-half">
                        <label class="form-label">報酬額</label>
                        <div class="input-container">
                          <input
                            type="number"
                            class="form-control text-end"
                            placeholder="100,000"
                          />
                          <label class="label">円</label>
                        </div>
                      </div>
                      <div class="input-col-half">
                        <label class="form-label">達成者枠数</label>
                        <div class="input-container">
                          <input
                            type="number"
                            class="form-control text-end"
                            placeholder="2"
                          />
                          <label class="label">枠</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">報酬額合計</label>
                      <div class="input-container">
                        <input
                          type="number"
                          class="form-control"
                          placeholder="0"
                          name="total_reward_amount"
                        />
                        <label class="label">円</label>
                      </div>
                    </div>
                    <p class="ic-group-dot text-center mt-8">
                      <img
                        src="/assets/img/user/event/ic_group_dot.svg"
                        alt=""
                      />
                    </p>
                  </div>
                </div>
                <button class="btn-event-outline btn-add-reward mt-8">
                  報酬を追加する
                </button>
              </div>
            </div>
          </div>
          <div class="input-section">
            <h2 class="input-title">開催情報</h2>
            <div class="form-group mb-16">
              <label class="form-label" require>開催期間</label>
              <div class="form-text mt-0 mb-8">
                開催期間は最大7日間ですが、開始後にイベント設定で延長することが可能です。
              </div>
              <div class="custom-input">
                <select name="category" class="form-control select-placeholder">
                  <option value="">-- 開催期間を選択してください --</option>
                  <option value="1">qaz</option>
                  <option value="2">wsx</option>
                </select>
                <span class="ic-arrow"
                  ><img src="/assets/img/user/event/ic_arrow_down.svg" alt=""
                /></span>
              </div>
            </div>
            <div class="form-group form-datetime">
              <label class="form-label" require>開始日時</label>
              <div class="form-text mt-0 mb-8">
                本日以降で開始日時を設定することができます。
              </div>
              <div class="input-container d-block">
                <input
                  class="form-control d-block"
                  type="date"
                  name=""
                  placeholder="2022 / 12 / 3"
                />
                <div class="custom-input">
                  <select name="" class="form-control select-placeholder">
                    <option value="">18:00頃</option>
                    <option value="1">qaz</option>
                    <option value="2">wsx</option>
                  </select>
                  <span class="ic-arrow"
                    ><img src="/assets/img/user/event/ic_arrow_down.svg" alt=""
                  /></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="event-btn btn-container">
          <button
            class="btn-event-outline btn-cancel"
            type="button"
            data-bs-toggle="modal"
            data-bs-target="#deleteConfirmModal"
          >
            削除
          </button>
          <button class="btn-confirm">確認</button>
        </div>
      </form>
    </div>
    <AdditionModal></AdditionModal>
    <ConfirmModal></ConfirmModal>
  </div>
</template>

<script>
import $ from 'jquery'
import { Form as VeeForm, Field, ErrorMessage } from 'vee-validate'
import Multiselect from 'vue-multiselect'
import AdditionModal from './createAdditionModal'
import ConfirmModal from './deleteConfirmModal'

export default {
  components: {
    Multiselect,
    VeeForm,
    Field,
    ErrorMessage,
    AdditionModal,
    ConfirmModal
  },
  created() {
    this.selectPlaceholder()
  },
  data() {
    return {
      detailPlace:
        '例）\n' +
        '世界中を飛び回っている私が期間限定で近畿エリアを中心に飛び回ります！！\n' +
        '\n' +
        '前回関東でのイベントではなんと達成者0人！今回は前回の報酬に加え大幅報酬アップ！！キャリーオーバー中のこの大人気企画でぜひ私を見つけてください！！\n' +
        '\n' +
        '来週には近畿を離れて再びヨーロッパへ！みんなの参加費が報酬になるこの企画に奮ってご応募ください！',
      conditionsPlace:
        '参加のための条件が他にある場合はこちらに記入ください。\n' +
        '本フォーム内での改行は適用されます。\n' +
        '例）\n' +
        '※近畿圏内在住の利用規約に反していない方\n' +
        '※大学生の方を優遇します！\n' +
        '※容姿に自信のある方を優遇します♡',
      specialNotePlace:
        'ひな形に記載のない個別の記載事項がある場合はこちらに記入ください。\n' +
        '本フォーム内での改行は適用されます。',
      accomplishmentConditionPlace:
        'イベントの達成条件をこちらに記入ください。\n' +
        '本フォーム内での改行は適用されます。\n' +
        '例）\n' +
        '1等賞：\n' +
        '初回報告で全問正解\n' +
        '2等賞：\n' +
        '初回報告で10問中8問以上正解または、2回目以降の報告で全問正解\n' +
        '3等賞：\n' +
        '初回報告で10問中5問以上正解または、2回目以降の報告で10問中7問正解\n' +
        '※なお、3等賞での当選を望まない場合、『2以上』と記載ください。'
    }
  },
  props: ['data'],
  methods: {
    addAttachment() {
      $('#attachment').click()
    },
    addImage1() {
      $('#image_1').click()
    },
    addImage2() {
      $('#image_2').click()
    },
    showAdditionModal() {
      let additionModal = new bootstrap.Modal(
        document.getElementById('additionModal')
      )
      additionModal.show()
    },
    selectPlaceholder(event) {
      $('select.form-control').each(function () {
        let selectVal = event.target.value
        if (selectVal != '') {
          $(this).removeClass('select-placeholder')
        } else {
          $(this).addClass('select-placeholder')
        }
      })
    }
  }
}
</script>
<style>
.main-content {
  overflow-x: hidden;
}
</style>

