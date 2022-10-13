<template>
  <div class="search-filter-sidebar close-sidebar">
    <header class="header d-flex align-items-center">
      <div class="container header__container">
        <div class="header__wrapper">
          <form action="" class="form-inline">
            <input name="heaeder_search" class="form-control header-search" placeholder="詳細条件を設定中..." value=""
              autocomplete="off" type="control" id="heaeder_search">
            <button type="submit" hidden class="btn btn-primary w-100"><i class="fa fa-search"></i> &nbsp; 検索</button>
            <div class="header-filter-close" @click="hiddenSearchSidebar">キャンセル</div>
          </form>
        </div>
      </div>
    </header>
    <form action="" class="">
      <div class="search-filter-container">
        <div class="search-filter-title">絞り込み条件</div>
        <div class="search-filter-item">
          <p class="search-filter-heading">カテゴリ</p>
          <div class="col-6">
            <div class="search-filter-select">
              <img src="/assets/img/user/common/icon_select_01.png" class="icon-select-01" alt="" />
              <select class="form-select">
                <option>すべてのカテゴリ</option>
              </select>
            </div>
          </div>
        </div>
        <div class="search-filter-item">
          <p class="search-filter-heading">開催日時</p>
          <div class="search-filter-date">
            <label class="search-filter-label">応募期間</label>
            <div class="col-6">
              <div class="search-filter-select">
                <img src="/assets/img/user/common/icon_select_02.png" class="icon-select-02" alt="" />
                <select class="form-select">
                  <option>すべての応募期間</option>
                </select>
              </div>
            </div>
            <label class="search-filter-label">応募開始日</label>
            <div class="search-filter-datepicker d-flex align-items-center">
              <Field as="div" name="birthday">
                <datepicker autoApply keepActionRow :closeOnAutoApply="false" 
                  :monthChangeOnScroll="false" :maxDate="new Date()" locale="ja" name="birthday" selectText="選択"
                  cancelText="閉じる" format="yyyy/MM/dd" placeholder="2022 / 12 / 3" :enableTimePicker="false" />
              </Field>
              <!-- <ErrorMessage class="error-msg" name="birthday" /> -->
              <span>～</span>
            </div>
          </div>
        </div>
        <div class="search-filter-item search-filter-item-fee">
          <p class="search-filter-heading">参加費</p>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-fee" id="radio-fee1" checked="">
            <label class="search-filter-radio-label" for="radio-fee1">
              有料イベントも含める
            </label>
          </div>
          <label class="search-filter-label">最高額</label>
          <div class="search-filter-fee-input d-flex align-items-center col-6">
            <span>～</span>
            <Field name="" type="text" class="form-control"
              placeholder="1,000,000" />
            <!-- <ErrorMessage class="error-msg" name="address_building" /> -->
            <span>円</span>
          </div>
          <div class="search-filter-label-radio mb-0 d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-fee" id="radio-fee2">
            <label class="search-filter-radio-label" for="radio-fee2">
              無料のみ表示
            </label>
          </div>
        </div>
        <div class="search-filter-item search-filter-item-prize">
          <p class="search-filter-heading">報酬</p>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-prize" id="radio-prize1" checked="">
            <label class="search-filter-radio-label" for="radio-prize1">
              すべて
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-prize" id="radio-prize2">
            <label class="search-filter-radio-label" for="radio-prize2">
              総合報酬金の範囲で表示
            </label>
          </div>
          <div class="d-flex">
            <div class="col-6">
              <label class="search-filter-label">最低金額</label>
              <div class="search-filter-prize-input d-flex align-items-center">
                <Field name="" type="text" class="form-control" placeholder="0" />
                <!-- <ErrorMessage class="error-msg" name="address_building" /> -->
                <span>円</span>
                <span>～</span>
              </div>
            </div>
            <div class="col-6">
              <label class="search-filter-label">最高金額</label>
              <div class="search-filter-prize-input d-flex align-items-center">
                <Field name="" type="text" class="form-control" placeholder="9,999,999" />
                <!-- <ErrorMessage class="error-msg" name="address_building" /> -->
                <span>円</span>
              </div>
            </div>
          </div>
        </div>
        <div class="search-filter-item search-filter-item-gender">
          <p class="search-filter-heading">対象の性別</p>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-gender" id="radio-gender1" checked="">
            <label class="search-filter-radio-label" for="radio-gender1">
              すべて
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-gender" id="radio-gender2">
            <label class="search-filter-radio-label" for="radio-gender2">
              男性のみ
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-gender" id="radio-gender3">
            <label class="search-filter-radio-label" for="radio-gender3">
              女性のみ
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-gender" id="radio-gender4">
            <label class="search-filter-radio-label" for="radio-gender4">
              事業者のみ
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-gender" id="radio-gender5">
            <label class="search-filter-radio-label" for="radio-gender5">
              その他可
            </label>
          </div>
        </div>
        <div class="search-filter-item search-filter-item-age">
          <p class="search-filter-heading">対象年齢</p>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-age" id="radio-age1" checked="">
            <label class="search-filter-radio-label" for="radio-age1">
              すべて
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-age" id="radio-age2">
            <label class="search-filter-radio-label" for="radio-age2">
              年齢制限有り（～を対象としているものを含む）
            </label>
          </div>
          <div class="d-flex">
            <div class="col-6">
              <label class="search-filter-label">最少年齢</label>
              <div class="search-filter-prize-input d-flex align-items-center">
                <div class="search-filter-select">
                  <img src="/assets/img/user/common/icon_select_02.png" class="icon-select-02" alt="" />
                  <select class="form-select">
                    <option>1</option>
                  </select>
                </div>
                <!-- <ErrorMessage class="error-msg" name="address_building" /> -->
                <span>歳</span>
                <span>～</span>
              </div>
            </div>
            <div class="col-6">
              <label class="search-filter-label">最高年齢</label>
              <div class="search-filter-prize-input d-flex align-items-center">
                <div class="search-filter-select">
                  <img src="/assets/img/user/common/icon_select_02.png" class="icon-select-02" alt="" />
                  <select class="form-select">
                    <option>200</option>
                  </select>
                </div>
                <!-- <ErrorMessage class="error-msg" name="address_building" /> -->
                <span>歳</span>
              </div>
            </div>
          </div>
        </div>
        <div class="search-filter-item search-filter-item-implementation">
          <p class="search-filter-heading">対象の実施地域</p>
          <label class="search-filter-label">都道府県 / 市区町村（～を含む）</label>
          <div class="col-6">
            <div class="search-filter-select">
              <img src="/assets/img/user/common/icon_select_01.png" class="icon-select-01" alt="" />
              <select class="form-select">
                <option>すべての都道府県</option>
              </select>
            </div>
            <div class="search-filter-select">
              <img src="/assets/img/user/common/icon_select_01.png" class="icon-select-01" alt="" />
              <select class="form-select">
                <option>すべての市区町村</option>
              </select>
            </div>
          </div>
        </div>
        <div class="search-filter-item search-filter-item-condition">
          <p class="search-filter-title">並び替え条件</p>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-condition" id="radio-condition1" checked="">
            <label class="search-filter-radio-label" for="radio-condition1">
              おすすめ順
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-condition" id="radio-condition2">
            <label class="search-filter-radio-label" for="radio-condition2">
              最新順
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-condition" id="radio-condition3">
            <label class="search-filter-radio-label" for="radio-condition3">
              参加期限が近い順
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-condition" id="radio-condition4">
            <label class="search-filter-radio-label" for="radio-condition4">
              参加人数が多い順
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-condition" id="radio-condition5">
            <label class="search-filter-radio-label" for="radio-condition5">
              参加人数が少ない順
            </label>
          </div>
          <div class="search-filter-label-radio d-flex align-items-center">
            <input class="form-check-input mt-0" type="radio" name="radio-condition" id="radio-condition6">
            <label class="search-filter-radio-label" for="radio-condition6">
              総合報酬金額が多い順
            </label>
          </div>
        </div>
      </div>
      <footer class="search-filter-footer">
        <button type="submit" class="btn-submit-primary">
          <a :href="data.urlBack">戻る</a>
        </button>
        <button type="submit" class="btn-submit">保存する</button>
      </footer>
    </form>
  </div>
</template>
<script>
import $ from 'jquery'
import {
  Field,
  ErrorMessage,
} from 'vee-validate'
import Datepicker from '@vuepic/vue-datepicker'
export default {
  components: {
    Field,
    ErrorMessage,
    Datepicker
  },
  props: ['data'],
  data: function () {
    return {}
  },
  created() { },
  methods: {
    hiddenSearchSidebar() {
      $(document).ready(function () {
        let sidebar = $('.search-filter-sidebar');
        if (sidebar.hasClass('close-sidebar')) {
          sidebar.removeClass('close-sidebar').addClass('open-sidebar');
        } else {
          sidebar.removeClass('open-sidebar').addClass('close-sidebar');
        }
      });
    },
  }
}
</script>
