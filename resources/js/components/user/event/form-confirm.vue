<template>
  <div class="event-create__wrapper event-confirm">
    <div class="input-section">
      <h2 class="input-title">基本情報</h2>
      <div class="form-group">
        <label class="form-label">タイトル</label>
        <div>
          <label class="lbl-value">{{ model.name }}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">イベントの詳細</label>
        <div>
          <label class="lbl-value">
            <nl2br tag="p" :text="model.detail" />
          </label>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">添付資料</label>
        <div class="file-list">
          <div
            class="file-item"
            v-for="(item, index) in attachmentFiles"
            :key="index"
          >
            <div>
              <span class="ic-link">
                <img src="/assets/img/user/event/ic_link.svg" />
              </span>
              <span class="file-name">{{ item.file_name }}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">一覧表示用画像</label>
        <div class="file-list img-list">
          <div class="img-item">
            <img :src="model.image_url" />
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">詳細表示用画像</label>
        <div class="file-list img-list">
          <div
            class="img-item"
            v-for="(item, index) in imageDetails"
            :key="index"
          >
            <img :src="item.file_url" />
          </div>
        </div>
      </div>
      <div class="form-group" v-if="model.category_id">
        <label class="form-label">カテゴリ</label>
        <div>
          <label class="lbl-value">{{
            data.categories.find((x) => x.value == model.category_id).label
          }}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">実施地域</label>
        <div>
          <label class="lbl-value">{{ model.placePref }}</label>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">実施地域</label>
        <div>
          <label class="lbl-value">{{ model.placePref }}</label>
        </div>
        <div>
          <label class="lbl-value">{{ model.detail_location }}</label>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ['data', 'model', 'attachmentFiles', 'imageDetails']
}
</script>

