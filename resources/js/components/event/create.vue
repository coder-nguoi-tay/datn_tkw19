<template>
  <div class="event-create">
    <div class="container event-create__container">
      <div class="event-create__wrapper">
        <p class="create-note">
          こちらから自由にイベントを開催することができます。ただし、すべてのイベントは<a
            href="#"
            ><b>利用規約</b></a
          >及び<a href="#"><b>プライバシーポリシー</b></a
          >に準じたもののみといたします。
        </p>
        <form
          action=""
          method="POST"
          ref="formData"
        >
          <div class="input-section">
            <h2 class="input-title">基本情報</h2>
            <div class="form-group">
              <label class="form-label" require>タイトル</label>
              <input
                type="text"
                class="form-control"
                placeholder="例）参加費1,000円で、世界中を飛び回る私を見つけたら賞金!!"
              />
              <div class="form-text text-end">0 / 40文字中</div>
            </div>
            <div class="form-group">
              <label class="form-label" require>イベントの詳細</label>
              <textarea
                class="form-control"
                rows="4"
                maxlength="2000"
              ></textarea>
              <div class="form-text text-end">0 / 40文字中</div>
            </div>
            <div class="form-group mb-16">
              <div class="form-add-file">
                <label class="form-label" optional>イベントの詳細</label>
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
                <button class="btn-add-img" @click.prevent="addImage1">
                  <img src="/assets/img/user/event/ic_add.svg" alt="" />
                </button>
                <div class="img-item">
                  <img src="/assets/img/user/event/animal.png" alt="" />
                  <span class="ic-remove">
                    <img src="/assets/img/user/event/ic_remove.svg" alt="" />
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group mb-16">
              <div class="form-add-file mb-16">
                <label class="form-label" require>詳細表示用画像</label>
                <div class="form-text">
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
              <div class="form-text">
                イベント内容に該当するカテゴリを選択してください。
              </div>
              <select name="category" class="form-control">
                <option>-- カテゴリを選択してください --</option>
                <option value="">qaz</option>
                <option value="">wsx</option>
              </select>
            </div>
            <div class="form-group mb-16">
              <label class="form-label" optional>カテゴリ</label>
              <div class="form-text">
                イベント内容に該当するカテゴリを選択してください。
              </div>
              <input
                class="form-control"
                type="text"
                name=""
                placeholder="東京都、埼玉県、千葉県、群馬県、大阪府、宮城県、熊本県、大分県、... 他"
              />
              <input
                class="form-control"
                type="text"
                name="detail_location"
                placeholder="詳細な場所"
              />
            </div>
            <div class="form-group mb-16">
              <label class="form-label" optional>タグ</label>
              <div class="tag-list"></div>
              <div class="add-tag"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import $ from 'jquery'
import { Form as VeeForm, Field, ErrorMessage } from 'vee-validate'
import Multiselect from 'vue-multiselect'
export default {
  components: {
    Multiselect,
    VeeForm,
    Field,
    ErrorMessage
  },
  data() {
    return {}
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
    }
  }
}
</script>

