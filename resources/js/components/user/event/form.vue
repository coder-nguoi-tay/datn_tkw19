<template>
  <UserHeader
    :data="{
      prev: {
        url: data.urlEventList
      },
      page_name: 'イベント新規作成'
    }"
  ></UserHeader>
  <div class="event-create">
    <div class="container event-create__container">
      <VeeForm
        as="div"
        v-slot="{ handleSubmit }"
        @invalid-submit="onInvalidSubmit"
      >
        <form
          method="POST"
          @submit="handleSubmit($event, onSubmit)"
          :action="data.urlStore"
          ref="formData"
          id="formData"
        >
          <input type="hidden" :value="csrfToken" name="_token" />
          <div class="event-create__wrapper" v-show="step == 1">
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
                <Field
                  name="name"
                  type="text"
                  v-model="model.name"
                  rules="required|max:40"
                  class="form-control"
                  placeholder="例）参加費1,000円で、世界中を飛び回る私を見つけたら賞金!!"
                />
                <div class="form-text txt-validate text-end">
                  {{ model.name.length }} / 40文字中
                </div>
                <ErrorMessage class="error-msg" name="name" />
              </div>
              <div class="form-group">
                <label class="form-label" require>イベントの詳細</label>
                <Field
                  as="textarea"
                  name="detail"
                  rules="required|max:2000"
                  v-model="model.detail"
                  class="form-control"
                  :placeholder="detailPlace"
                  rows="11"
                />
                <div class="form-text txt-validate text-end">
                  {{ model.detail.length }} / 2,000文字中
                </div>
                <ErrorMessage class="error-msg" name="detail" />
              </div>
              <div class="form-group mb-16">
                <div class="form-add-file">
                  <label class="form-label" optional>添付資料</label>
                  <div class="form-text">
                    イベントに関する画像や資料を最大3つまで添付することができます。
                  </div>
                  <button
                    class="btn-add-file"
                    type="button"
                    @click="$refs.fileAttachment.$el.click()"
                  >
                    添付資料を追加する
                  </button>
                  <Field
                    class="hidden"
                    type="file"
                    readonly
                    name="attachment"
                    id="attachment"
                    ref="fileAttachment"
                    multiple
                    @change="changeFile($event, 1)"
                    :rules="'size:10240'"
                  />
                </div>
                <ErrorMessage class="error-msg" name="attachment" />
                <div class="file-list">
                  <div
                    class="file-item"
                    v-for="(item, index) in attachment_files"
                    :key="index"
                  >
                    <div>
                      <span class="ic-link">
                        <img src="/assets/img/user/event/ic_link.svg" />
                      </span>
                      <input
                        type="hidden"
                        :name="'event_files[' + index + '][file_name]'"
                        :value="item.file_name"
                      />
                      <input
                        type="hidden"
                        v-if="item.id"
                        :name="'event_files[' + index + '][id]'"
                        :value="item.id"
                      />
                      <input
                        type="hidden"
                        :name="'event_files[' + index + '][path]'"
                        :value="item.path"
                      />
                      <input
                        type="hidden"
                        :name="'event_files[' + index + '][type]'"
                        value="1"
                      />
                      <span class="file-name">{{ item.file_name }}</span>
                    </div>
                    <span class="ic-close" @click="removeFile(index, 1)">
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
                  <Field
                    class="hidden"
                    type="file"
                    readonly
                    name="avatar"
                    id="avatar"
                    ref="fileAvatar"
                    accept="image/*"
                    @change="changeFile($event, 2)"
                    :rules="
                      data.isEdit
                        ? 'image|size:10240'
                        : 'required|image|size:10240'
                    "
                  />
                  <Field
                    type="hidden"
                    name="image_path"
                    v-model="model.image_path"
                    :rules="'required'"
                  />
                </div>
                <div class="file-list img-list">
                  <div class="img-item" v-if="model.image_url">
                    <img :src="model.image_url" />
                    <span class="ic-remove">
                      <img
                        src="/assets/img/user/event/ic_remove.svg"
                        @click="model.image_url = ''"
                      />
                    </span>
                  </div>
                  <button
                    v-else
                    class="btn-add-img"
                    type="button"
                    @click="$refs.fileAvatar.$el.click()"
                  >
                    <img src="/assets/img/user/event/ic_add.svg" />
                  </button>
                </div>
                <ErrorMessage class="error-msg" name="avatar" />
                <ErrorMessage class="error-msg" name="image_url" />
              </div>
              <div class="form-group mb-16">
                <div class="form-add-file mb-16">
                  <label class="form-label" require>詳細表示用画像</label>
                  <div class="form-text mt-0">
                    イベント詳細の表示時に表示されるカバー画像です。横長の画像を推奨しています。最大で5枚まで設定することが可能です。
                  </div>
                  <Field
                    class="hidden"
                    type="file"
                    readonly
                    name="imageFile"
                    id="imageFile"
                    ref="imageFile"
                    accept="image/*"
                    multiple
                    @change="changeFile($event, 3)"
                    :rules="
                      data.isEdit
                        ? 'image|size:10240'
                        : 'required|image|size:10240'
                    "
                  />
                </div>
                <div class="file-list img-list">
                  <div
                    class="img-item"
                    v-for="(item, index) in image_details"
                    :key="index"
                  >
                    <input
                      type="hidden"
                      :name="
                        'event_files[' +
                        (index + attachment_files.length) +
                        '][file_name]'
                      "
                      :value="item.file_name"
                    />
                    <input
                      type="hidden"
                      v-if="item.id"
                      :name="
                        'event_files[' +
                        (index + attachment_files.length) +
                        '][id]'
                      "
                      :value="item.id"
                    />
                    <input
                      type="hidden"
                      :name="
                        'event_files[' +
                        (index + attachment_files.length) +
                        '][path]'
                      "
                      :value="item.path"
                    />
                    <input
                      type="hidden"
                      :name="
                        'event_files[' +
                        (index + attachment_files.length) +
                        '][type]'
                      "
                      value="3"
                    />
                    <img :src="item.file_url" />
                    <span class="ic-remove" @click="removeFile(index, 3)">
                      <img src="/assets/img/user/event/ic_remove.svg" />
                    </span>
                  </div>
                  <button
                    class="btn-add-img"
                    type="button"
                    v-if="image_details.length < 10"
                    @click="$refs.imageFile.$el.click()"
                  >
                    <img src="/assets/img/user/event/ic_add.svg" />
                  </button>
                </div>
                <ErrorMessage class="error-msg" name="imageFile" />
              </div>
              <div class="form-group mb-16">
                <label class="form-label" require>カテゴリ</label>
                <div class="form-text mt-0 mb-8">
                  イベント内容に該当するカテゴリを選択してください。
                </div>
                <div class="custom-input">
                  <Field
                    as="select"
                    name="category_id"
                    rules="required"
                    class="form-control select-placeholder"
                    v-model="model.category_id"
                    @change="selectPlaceholder($event)"
                  >
                    <option value="">-- カテゴリを選択してください --</option>
                    <option
                      :value="item.value"
                      v-for="item in data.categories"
                      :key="item.value"
                    >
                      {{ item.label }}
                    </option>
                  </Field>
                  <span class="ic-arrow"
                    ><img src="/assets/img/user/event/ic_arrow_down.svg" alt=""
                  /></span>
                </div>
                <ErrorMessage class="error-msg" name="category_id" />
              </div>
              <div class="form-group mb-16">
                <label class="form-label" optional>実施地域</label>
                <div class="custom-input">
                  <input
                    class="form-control"
                    type="text"
                    placeholder="東京都、埼玉県、千葉県、群馬県、大阪府、宮城県、熊本県、大分県、... 他"
                    v-model="model.placePref"
                    @click="showAdditionModal"
                  />
                  <span class="ic-arrow ic-duplicate">
                    <img src="/assets/img/user/event/ic_copy.svg" />
                  </span>
                </div>
                <Field
                  name="detail_location"
                  type="text"
                  v-model="model.detail_location"
                  rules="max:255"
                  class="form-control"
                  placeholder="詳細な場所"
                />
                <ErrorMessage class="error-msg" name="detail_location" />
              </div>
              <div class="form-group form-group-tag mb-16">
                <label class="form-label" optional>タグ</label>
                <div class="tag-list">
                  <p
                    class="tag-item"
                    v-for="(item, index) in model.event_tags"
                    :key="index"
                  >
                    # {{ item }}
                    <input type="hidden" name="tags[]" :value="item" />
                    <span class="ic-close" @click="removeTag(index)">
                      <img
                        src="/assets/img/user/event/ic_close.svg"
                        alt=""
                        width="5"
                      />
                    </span>
                  </p>
                </div>
                <div class="form-add-tag d-flex">
                  <Multiselect
                    v-model="model.tags"
                    mode="tags"
                    placeholder="追加したいタグを入力"
                    track-by="name"
                    label="name"
                    :createTag="true"
                    :close-on-select="false"
                    :searchable="true"
                    :object="true"
                    :searchStart="true"
                    :resolve-on-load="false"
                    :delay="0"
                    :min-chars="1"
                    @select="selectTag"
                    noOptionsText="リストが空です"
                    noResultsText="結果が見つかりません"
                    :options="
                      async (query) => {
                        return await getTags(query)
                      }
                    "
                  >
                    <!-- :options="data.suggestTags" -->
                  </Multiselect>
                  <button
                    type="button"
                    @click="addTag"
                    class="btn-event-outline btn-add-tag"
                  >
                    追加する
                  </button>
                </div>
                <ErrorMessage class="error-msg" name="tag_name" />
              </div>
            </div>
            <div class="input-section">
              <h2 class="input-title">参加条件</h2>
              <div class="form-group form-multiple">
                <label class="form-label" require>対象の性別</label>
                <div class="form-inline d-flex flex-wrap">
                  <div
                    class="form-check"
                    v-for="item in GENDER_OPTIONS"
                    :key="item.value"
                  >
                    <Field
                      v-slot="{ field }"
                      name="target_gender[]"
                      type="checkbox"
                      rules="required"
                      @change="changeGender"
                      v-model="model.event_condition.target_gender"
                      :value="item.value"
                    >
                      <input
                        type="checkbox"
                        class="form-check-input"
                        :id="'gender_' + item.value"
                        name="target_gender"
                        v-bind="field"
                        :value="item.value"
                      />
                      <label
                        class="form-check-label label"
                        :for="'gender_' + item.value"
                        >{{ item.text }}</label
                      >
                    </Field>
                  </div>
                </div>
                <ErrorMessage class="error-msg" name="target_gender[]" />
              </div>
              <div class="form-group form-multiple">
                <label class="form-label" require>対象の年齢</label>
                <div class="form-radio">
                  <div class="form-check">
                    <input
                      type="radio"
                      v-model="model.event_condition.target_age_type"
                      class="form-check-input"
                      id="target_age_1"
                      name="target_age"
                      value="0"
                      checked
                    />
                    <label class="form-check-label label" for="target_age_1"
                      >すべて</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      v-model="model.event_condition.target_age_type"
                      class="form-check-input"
                      id="target_age_2"
                      name="target_age"
                      value="1"
                    />
                    <label class="form-check-label label" for="target_age_2"
                      >年齢を詳細指定</label
                    >
                  </div>
                </div>
                <div
                  class="form-group mt-8"
                  v-if="model.event_condition.target_age_type == 1"
                >
                  <div class="input-container">
                    <Field
                      name="target_age_from"
                      type="text"
                      v-model="model.event_condition.target_age_from"
                      rules="required"
                      class="form-control w-160 d-inline-block"
                      placeholder="例）8,10-20,50-65"
                    />
                    <label class="label ml-6">歳</label>
                  </div>
                  <ErrorMessage class="error-msg" name="target_age_from" />
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
                      v-model="
                        model.event_condition.limit_number_of_participants_flag
                      "
                      id="participant_1"
                      name="limit_number_of_participants_flag"
                      value="0"
                      checked
                    />
                    <label class="form-check-label label" for="participant_1"
                      >何人でも参加可能</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      v-model="
                        model.event_condition.limit_number_of_participants_flag
                      "
                      class="form-check-input"
                      id="participant_2"
                      name="limit_number_of_participants_flag"
                      value="1"
                    />
                    <label class="form-check-label label" for="participant_2"
                      >人数制限有り</label
                    >
                  </div>
                </div>
                <div
                  class="form-group"
                  v-if="
                    model.event_condition.limit_number_of_participants_flag == 1
                  "
                >
                  <label class="label pl-20">最大参加可能人数</label>
                  <div class="input-container d-flex">
                    <label class="label">～</label>
                    <div class="ml-8">
                      <Field
                        name="limit_number_of_participants"
                        type="number"
                        v-model="
                          model.event_condition.limit_number_of_participants
                        "
                        rules="required"
                        class="form-control w-160 d-inline-block text-end"
                        placeholder="9,999"
                      />
                    </div>
                    <label class="label ml-8">名</label>
                  </div>
                  <ErrorMessage
                    class="error-msg"
                    name="limit_number_of_participants"
                  />
                </div>
              </div>
              <div class="form-group form-multiple mb-16">
                <label class="form-label" require>参加費用</label>
                <div class="form-radio">
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      id="entry_type_1"
                      name="entry_type"
                      v-model="model.entry_type"
                      value="0"
                      checked
                    />
                    <label class="form-check-label label" for="entry_type_1"
                      >参加費無料（\0）</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      v-model="model.entry_type"
                      id="entry_type_2"
                      name="entry_type"
                      value="1"
                    />
                    <label class="form-check-label label" for="entry_type_2"
                      >参加費を設定する</label
                    >
                  </div>
                </div>
                <div class="form-group" v-if="model.entry_type == 1">
                  <div class="input-container">
                    <Field
                      name="entry_fee"
                      type="number"
                      v-model="model.entry_fee"
                      rules="required"
                      class="form-control w-160 d-inline-block text-end"
                      placeholder="500"
                    />
                    <label class="label ml-6">円</label>
                  </div>
                  <ErrorMessage class="error-msg" name="entry_fee" />
                  <div class="form-text mt-8">
                    1名の参加者に対し参加する際に必要な参加費を設定します。参加費の入金タイミングは<b
                      ><a href="#">こちら</a></b
                    >からご確認ください。
                  </div>
                  <ErrorMessage class="error-msg" name="entry_fee" />
                </div>
              </div>
              <div class="form-group mb-16">
                <label class="form-label" optional="">その他の参加条件</label>
                <Field
                  as="textarea"
                  name="other_conditions"
                  rules="max:2000"
                  v-model="model.event_condition.other_conditions"
                  class="form-control"
                  :placeholder="conditionsPlace"
                  rows="11"
                />
                <div class="form-text txt-validate text-end">
                  {{ model.event_condition.other_conditions.length }} /
                  2,000文字中
                </div>
                <ErrorMessage class="error-msg" name="other_conditions" />
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
                      id="participation_terms_type_1"
                      name="participation_terms_type"
                      v-model="model.event_condition.participation_terms_type"
                      value="0"
                      checked
                    />
                    <label
                      class="form-check-label label"
                      for="participation_terms_type_1"
                      >ひな形をそのまま使用する</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      id="participation_terms_type_2"
                      name="participation_terms_type"
                      v-model="model.event_condition.participation_terms_type"
                      value="1"
                    />
                    <label
                      class="form-check-label label"
                      for="participation_terms_type_2"
                      >ひな形を変更する</label
                    >
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label" optional>特記事項（任意）</label>
                  <div>
                    <Field
                      as="textarea"
                      name="special_notes"
                      rules="max:10000"
                      v-model="model.event_condition.special_notes"
                      class="form-control"
                      :placeholder="specialNotePlace"
                      rows="11"
                    />
                    <div class="form-text txt-validate text-end">
                      {{ model.event_condition.special_notes.length }} /
                      10,000文字中
                    </div>
                    <ErrorMessage class="error-msg" name="special_notes" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label" require>住所</label>
                  <Field
                    name="address"
                    type="text"
                    v-model="model.event_condition.address"
                    rules="required|max:255"
                    class="form-control"
                    placeholder="東京都千代田区永田町"
                  />
                  <ErrorMessage class="error-msg" name="address" />
                </div>
                <div class="form-group">
                  <label class="form-label" require>氏名または会社名</label>
                  <Field
                    name="company_name"
                    type="text"
                    v-model="model.event_condition.company_name"
                    rules="required|max:255"
                    class="form-control"
                    placeholder="商社太郎丸"
                  />
                  <ErrorMessage class="error-msg" name="company_name" />
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
                <Field
                  as="textarea"
                  name="meet_condition"
                  rules="required|max:2000"
                  v-model="model.event_condition.meet_condition"
                  class="form-control"
                  :placeholder="accomplishmentConditionPlace"
                  rows="11"
                />
                <div class="form-text txt-validate text-end">
                  {{ model.event_condition.meet_condition.length }} /
                  2,000文字中
                </div>
                <ErrorMessage class="error-msg" name="meet_condition" />
              </div>
              <div class="form-group mb-16">
                <label class="form-label" require>報酬</label>
                <div class="form-text mt-0">
                  達成者に対しての報酬を設定します。報酬は（最大9種までの）複数種類設定することができ、また総合報酬額は9,999,999円が限度額になります。達成者は1種類の報酬のみ受け取ることができます。なお報酬の決済のタイミングは、都度参加者がイベントを達成したタイミングになります。詳しくは<b
                    ><a href="#">こちら</a></b
                  >でご確認ください。
                </div>
                <div class="input-item-container">
                  <div
                    class="input-item mt-8"
                    v-for="(item, index) in model.event_rewards"
                    :key="index"
                  >
                    <p class="input-sub-title">
                      報酬 {{ index + 1
                      }}<span
                        @click="removeReward(index)"
                        class="ic-minus"
                      ></span>
                    </p>
                    <div class="input-item-group">
                      <div class="form-group">
                        <label class="form-label">報酬名</label>
                        <Field
                          :name="'event_rewards[' + index + '][name]'"
                          type="text"
                          v-model="item.name"
                          rules="required|max:255"
                          class="form-control"
                          placeholder="例）1等賞　”ニュージェネレーション!!!”"
                        />
                        <ErrorMessage
                          class="error-msg"
                          :name="'event_rewards[' + index + '][name]'"
                        />
                      </div>
                      <div class="form-group d-flex justify-content-between">
                        <div class="input-col-half">
                          <label class="form-label">報酬額</label>
                          <div class="input-container">
                            <Field
                              :name="
                                'event_rewards[' + index + '][reward_amount]'
                              "
                              type="number"
                              v-model="item.reward_amount"
                              rules="required|min_value:0"
                              class="form-control text-end"
                              placeholder="100,000"
                            />
                            <label class="label">円</label>
                          </div>
                          <ErrorMessage
                            class="error-msg"
                            :name="
                              'event_rewards[' + index + '][reward_amount]'
                            "
                          />
                        </div>
                        <div class="input-col-half">
                          <label class="form-label">達成者枠数</label>
                          <div class="input-container">
                            <Field
                              :name="'event_rewards[' + index + '][quantity]'"
                              type="number"
                              v-model="item.quantity"
                              rules="required|min_value:1"
                              class="form-control text-end"
                              placeholder="2"
                            />
                            <label class="label">枠</label>
                          </div>
                          <ErrorMessage
                            class="error-msg"
                            :name="'event_rewards[' + index + '][quantity]'"
                          />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">報酬額合計</label>
                        <div class="input-container">
                          <count-up
                            class="form-control text-end count-group"
                            :end-val="
                              item.reward_amount && item.quantity
                                ? item.reward_amount * item.quantity < 0
                                  ? 0
                                  : item.reward_amount * item.quantity
                                : 0
                            "
                          ></count-up>
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
                  <button
                    type="button"
                    @click="addReward"
                    class="btn-event-outline btn-add-reward mt-8"
                  >
                    報酬を追加する
                  </button>
                </div>
              </div>
            </div>
            <div class="input-section">
              <h2 class="input-title">開催情報</h2>
              <div class="form-group mb-16">
                <label class="form-label" require>公開期間</label>
                <!-- <div class="form-text mt-0 mb-8">
                  開催期間は最大7日間ですが、開始後にイベント設定で延長することが可能です。
                </div> -->
                <div class="custom-input">
                  <Field
                    as="div"
                    name="publish_end_datetime"
                    v-model="model.publish_end_datetime"
                    rules="required"
                  >
                    <datepicker
                      autoApply
                      keepActionRow
                      :closeOnAutoApply="false"
                      v-model="model.publish_end_datetime"
                      :monthChangeOnScroll="false"
                      locale="ja"
                      name="publish_end_datetime"
                      :minTime="setMinTime()"
                      :minDate="
                        model.publish_start_datetime
                          ? new Date(model.publish_start_datetime)
                          : null
                      "
                      selectText="選択"
                      cancelText="閉じる"
                      format="yyyy/MM/dd HH:mm"
                    />
                  </Field>
                  <ErrorMessage class="error-msg" name="publish_end_datetime" />
                </div>
              </div>
              <div class="form-group form-datetime">
                <label class="form-label" require>開始日時</label>
                <div class="form-text mt-0 mb-8">
                  本日以降で開始日時を設定することができます。
                </div>
                <div class="input-container d-block">
                  <Field
                    as="div"
                    name="publish_start_datetime"
                    v-model="model.publish_start_datetime"
                    rules="required"
                  >
                    <datepicker
                      autoApply
                      keepActionRow
                      :closeOnAutoApply="false"
                      v-model="model.publish_start_datetime"
                      :monthChangeOnScroll="false"
                      locale="ja"
                      :maxDate="
                        model.publish_end_datetime
                          ? new Date(model.publish_end_datetime)
                          : null
                      "
                      :maxTime="setMaxTime()"
                      name="publish_start_datetime"
                      selectText="選択"
                      cancelText="閉じる"
                      format="yyyy/MM/dd HH:mm"
                    />
                  </Field>
                  <ErrorMessage
                    class="error-msg"
                    name="publish_start_datetime"
                  />
                </div>
              </div>
            </div>
          </div>
          <FormConfirm
            v-if="step == 2"
            ref="formConfirm"
            :model="model"
            :data="data"
            :attachmentFiles="attachment_files"
            :imageDetails="image_details"
            @updateCreateCard="updateCreateCard"
            @getTokenComplete="getTokenComplete"
          ></FormConfirm>
          <div class="event-btn btn-container">
            <button
              v-if="step == 1 && data.isEdit"
              class="btn-event-outline btn-cancel"
              type="button"
              data-bs-toggle="modal"
              data-bs-target="#deleteConfirmModal"
            >
              削除
            </button>
            <button
              v-if="step == 2"
              class="btn-event-outline btn-cancel"
              type="button"
              @click="step = 1"
            >
              編集
            </button>
            <button
              type="button"
              v-if="isCreateCard && step == 2"
              class="btn-confirm"
              @click="getTokenCard"
            >
              確認create
            </button>
            <button v-else class="btn-confirm">確認</button>
          </div>
          <AdditionModal
            @updateArea="updateArea"
            :data="data"
            :event-area="model.events_area"
          ></AdditionModal>
        </form>
      </VeeForm>
    </div>

    <ConfirmModal></ConfirmModal>
  </div>
</template>

<script>
import $ from 'jquery'
import {
  Form as VeeForm,
  Field,
  ErrorMessage,
  defineRule,
  configure
} from 'vee-validate'
import { localize } from '@vee-validate/i18n'
import * as rules from '@vee-validate/rules'
import axios from 'axios'
import UserHeader from '../../common/userHeader.vue'
import AdditionModal from './createAdditionModal'
import ConfirmModal from './deleteConfirmModal'
import FormConfirm from './form-confirm.vue'
import Multiselect from '@vueform/multiselect'
import CountUp from 'vue-countup-v3'
import Datepicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'
// import { StripeElementCard } from '@vue-stripe/vue-stripe'

const MAX_FILE_SIZE_IN_MB = 10
const GENDER_OPTIONS = [
  { value: 0, text: 'すべて' },
  { value: 1, text: '男' },
  { value: 2, text: '女' },
  { value: 3, text: 'その他' },
  { value: 4, text: '事業者' }
]
export default {
  components: {
    Multiselect,
    VeeForm,
    Field,
    ErrorMessage,
    AdditionModal,
    ConfirmModal,
    CountUp,
    Datepicker,
    UserHeader,
    FormConfirm
  },
  created() {
    this.selectPlaceholder()
    let messError = {
      en: {
        fields: {
          name: {
            required: 'タイトルを入力してください。',
            max: 'タイトルは40文字を超えてはなりません。'
          },
          detail: {
            required: 'イベントの詳細を入力してください。',
            max: 'イベントの詳細は2000文字を超えてはなりません。'
          },
          attachment: {
            size: '10MB以内ファイルをアップロードしてください。'
          },
          avatar: {
            required: '一覧表示用画像を入力してください。',
            size: '10MB以内ファイルをアップロードしてください。'
          },
          imageFile: {
            required: '詳細表示用画像を入力してください。',
            size: '10MB以内ファイルをアップロードしてください。'
          },
          category_id: {
            required: 'カテゴリを入力してください。'
          },
          detail_location: {
            max: '実施地域は255文字を超えてはなりません。'
          },
          tag_name: {
            max: 'タグは255文字を超えてはなりません。'
          },
          target_gender: {
            required: '対象の性別を入力してください。'
          },
          target_age_from: {
            required: '年齢を詳細指定を入力してください。'
          },
          limit_number_of_participants: {
            required: '最大参加可能人数を入力してください。'
          },
          entry_fee: {
            required: '参加費を設定するを入力してください。'
          },
          other_conditions: {
            max: 'その他の参加条件は2000文字を超えてはなりません。'
          },
          special_notes: {
            max: '特記事項（任意）は10000文字を超えてはなりません。'
          },
          address: {
            required: '住所を入力してください。',
            max: '住所は255文字を超えてはなりません。'
          },
          company_name: {
            required: '氏名を入力してください。',
            max: '氏名は255文字を超えてはなりません。'
          },
          meet_condition: {
            required: '達成条件を入力してください。',
            max: '達成条件は2000文字を超えてはなりません。'
          },
          publish_start_datetime: {
            required: '公開期間を入力してください。'
          },
          publish_end_datetime: {
            required: '開始日時を入力してください。'
          }
        }
      }
    }
    configure({
      generateMessage: localize(messError)
    })
    let that = this
    defineRule('unique_telephone', (value) => {
      return axios
        .post(that.data.urlCheckPhone, {
          _token: Laravel.csrfToken,
          phone_number: (that.data.VN_MODE ? '+84' : '+81') + value
        })
        .then(function (response) {
          return response.data.valid
        })
        .catch((error) => {})
    })
    this.setMessageError()
  },
  setup() {
    Object.keys(rules).forEach((rule) => {
      if (rule != 'default') {
        defineRule(rule, rules[rule])
      }
    })
  },
  data() {
    return {
      step: 1,
      isCreateCard: this.data.userCredit ? false : true,
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
        '※なお、3等賞での当選を望まない場合、『2以上』と記載ください。',
      model: {
        tags: [],
        name: '',
        detail: '',
        events_area: {
          area_id: [],
          pref_id: []
        },
        event_condition: {
          target_gender: [],
          other_conditions: '',
          special_notes: '',
          meet_condition: ''
        },
        event_rewards: [
          {
            name: '',
            reward_amount: '',
            quantity: ''
          }
        ],
        event_tags: [],
        placePref: '',
        targetGenderText: ''
      },
      attachment_files: [],
      image_details: [],
      csrfToken: Laravel.csrfToken,
      tags: [],
      GENDER_OPTIONS,
      lastSearch: ''
    }
  },
  props: ['data'],
  methods: {
    getTokenComplete() {
      this.$refs.formData.submit()
    },
    getTokenCard() {
      this.$refs.formConfirm.tokenCreated()
    },
    updateCreateCard(val) {
      this.isCreateCard = val
    },
    changeGender() {
      let that = this
      let tmp = []
      this.model.event_condition.target_gender.forEach(function (item) {
        tmp.push(that.GENDER_OPTIONS.find((x) => x.value == item).text)
      })
      this.model.targetGenderText = tmp.join(', ')
    },
    onInvalidSubmit({ values, errors, results }) {
      let firstInputError = Object.entries(errors)[0][0]
      let ele = $('[name="' + firstInputError + '"]')
      if (
        $('[name="' + firstInputError + '"]').hasClass('hidden') ||
        $('[name="' + firstInputError + '"]').attr('type') == 'hidden'
      ) {
        ele = $('[name="' + firstInputError + '"]').closest('div')
      }
      ele.focus()
      $('html, body').animate(
        {
          scrollTop: ele.offset().top - 150 + 'px'
        },
        500
      )
    },
    onSubmit() {
      let that = this
      if (this.step == 1) {
        this.step = 2
        $('.title-group').click()
      } else {
        $('.loading-div').removeClass('hidden')
        axios
          .post(this.data.urlSendCode, {
            _token: Laravel.csrfToken,
            phone_number: this.model.phone_number
          })
          .then(function (response) {
            $('.loading-div').addClass('hidden')
            //   that.disabledCheckCode = false
          })
          .catch((error) => {
            $('.loading-div').addClass('hidden')
            const { status } = error.response || {}
            if (status == 500 || status == 429 || status == 400) {
              that.error = error.response.data.message
              that.showRecapchar = true
            }
          })
      }
    },
    changeFile(evt, type) {
      if (evt.target.files.length == 0) {
        return
      }
      for (const file of evt.target.files) {
        if (file.size > MAX_FILE_SIZE_IN_MB * Math.pow(2, 20)) {
          continue
        }
        if (type == 3 && this.image_details.length >= 10) {
          continue
        }
        $('.loading-div').removeClass('hidden')
        const formData = new FormData()
        formData.append('file', file)
        let that = this
        axios
          .post(that.data.urlUploadFile, formData)
          .then(function (response) {
            $('.loading-div').addClass('hidden')
            switch (type) {
              case 1:
                that.attachment_files.push({
                  type: type,
                  file_name: file.name,
                  file_url: response.data.full_url,
                  path: response.data.path
                })
                break
              case 2:
                that.model.image_url = response.data.full_url
                that.model.image_path = response.data.path
                break
              case 3:
                if (that.image_details.length < 10) {
                  that.image_details.push({
                    type: type,
                    file_name: evt.target.files[0].name,
                    file_url: response.data.full_url,
                    path: response.data.path
                  })
                }
                break
              default:
                break
            }
          })
          .catch((error) => {
            $('.loading-div').addClass('hidden')
          })
      }
    },
    removeFile(index, type) {
      switch (type) {
        case 1:
          this.attachment_files.splice(index, 1)
          break
        case 3:
          this.image_details.splice(index, 1)
          break
        default:
          break
      }
    },
    removeTag(index) {
      this.model.event_tags.splice(index, 1)
    },
    removeReward(index) {
      this.model.event_rewards.splice(index, 1)
    },
    updateArea(data) {
      let tmp = []
      let that = this
      data.pref_id.forEach(function (item) {
        tmp.push(that.data.prefectures.find((x) => x.id == item).label)
      })
      tmp = tmp.join('、')
      this.model.placePref =
        tmp.length < 40 ? tmp : tmp.substring(0, 40) + '... 他'
    },
    async addTag() {
      if (
        this.lastSearch &&
        !this.model.event_tags.find((x) => x == this.lastSearch)
      ) {
        this.model.event_tags.push(this.lastSearch)
        this.lastSearch = ''
      }
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
    },
    addReward() {
      this.model.event_rewards.push({})
      this.setMessageError()
    },
    setMaxTime() {
      if (
        this.model.publish_end_datetime &&
        this.model.publish_start_datetime
      ) {
        let dateStart = new Date(this.model.publish_start_datetime)
        let dateEnd = new Date(this.model.publish_end_datetime)
        if (
          dateStart.getFullYear() == dateEnd.getFullYear() &&
          dateStart.getMonth() == dateEnd.getMonth() &&
          dateStart.getDate() == dateEnd.getDate()
        ) {
          return {
            hours: dateEnd.getHours(),
            minutes: dateEnd.getMinutes()
          }
        }
      }
      return null
    },
    setMinTime() {
      if (
        this.model.publish_end_datetime &&
        this.model.publish_start_datetime
      ) {
        let dateStart = new Date(this.model.publish_start_datetime)
        let dateEnd = new Date(this.model.publish_end_datetime)
        if (
          dateStart.getFullYear() == dateEnd.getFullYear() &&
          dateStart.getMonth() == dateEnd.getMonth() &&
          dateStart.getDate() == dateEnd.getDate()
        ) {
          return {
            hours: dateStart.getHours(),
            minutes: dateStart.getMinutes()
          }
        }
      }
      return null
    },
    setMessageError() {
      let messError = {
        en: {
          fields: {}
        }
      }
      this.model.event_rewards.map(function (item, index) {
        messError.en.fields['event_rewards[' + index + '][name]'] = {
          required: '報酬名を選択してください。'
        }
        messError.en.fields['event_rewards[' + index + '][reward_amount]'] = {
          required: '報酬額を選択してください。',
          min_value: '最小値は0です'
        }
        messError.en.fields['event_rewards[' + index + '][quantity]'] = {
          required: '達成者枠数を選択してください。',
          min_value: '最小値は1です'
        }
      })
      configure({
        generateMessage: localize(messError)
      })
    },
    // addTag(newTag) {
    //   const tag = {
    //     name: newTag,
    //     id: newTag.substring(0, 2) + Math.floor(Math.random() * 10000000)
    //   }
    //   this.optionTags.push(tag)
    //   this.model.tag_name.push(tag)
    // },
    async getTags(query) {
      this.lastSearch = query
      const formData = new FormData()
      formData.append('_token', this.csrfToken)
      this.model.event_tags.forEach(function (item, index) {
        formData.append(`tags[${index}]`, item)
      })
      const res = await fetch(this.data.urlSearchTag, {
        method: 'post',
        body: formData
      })
      const dataRes = await res.json()
      return dataRes.data
    },
    selectTag(option) {
      if (!this.model.event_tags.find((x) => x == option.name)) {
        this.model.event_tags.push(option.name)
      }
      this.model.tags = []
    }
    // removeTag(option) {}
  }
}
</script>
<style>
.main-content {
  overflow-x: hidden;
  height: 100%;
  width: 100%;
}
</style>

<style src="@vueform/multiselect/themes/default.css"></style>
