<template>
  <div class="container">
    <div class="row">
      <VeeForm
        as="div"
        v-slot="{ handleSubmit }"
        @invalid-submit="onInvalidSubmit"
      >
        <VeeForm
          method="POST"
          @submit="handleSubmit($event, onSubmit)"
          ref="formData"
        >
          <Field type="hidden" :value="csrfToken" name="_token" />
          <div class="mb-2">
            <label class="label-event col-sm-3" require>表示名</label>
            <Field name="表示名" class="form-control input-event" />
            <ErrorMessage class="error" name="" />
          </div>
          <div class="mb-2">
            <label class="label-event col-sm-3" require>イベント概要</label>
            <Field
              name="イベント概要"
              as="textarea"
              rows="4"
              class="form-control input-event"
            />
            <ErrorMessage class="error" name="" />
          </div>
          <div class="mb-2">
            <label class="label-event col-sm-3" require>達成条件</label>
            <Field
              name="達成条件"
              as="textarea"
              rows="4"
              class="form-control input-event"
            />
            <ErrorMessage class="error" name="" />
          </div>
          <div class="mb-2">
            <label class="label-event col-sm-3" require>タグ</label>
            <Field name="タグ" type="text" class="form-control input-event" />
            <!-- <multiselect
              :v-model="value"
              :options="options"
              :allow-empty="false"
              :multiple="true"
              placeholder="abcd"
              label="tag_name"
              track-by="id"
            >
            </multiselect> -->
            <ErrorMessage class="error" name="" />
          </div>

          <div class="mb-2">
            <label class="label-event col-sm-3" require>報酬金額</label>
            <Field
              name="報酬金額"
              type="text"
              autocomplete="off"
              class="form-control input-event"
            />
            <ErrorMessage class="error" name="" />
          </div>
          <div class="mb-2">
            <label class="label-event col-sm-3" require>参加費</label>
            <Field
              name="参加費"
              type="text"
              autocomplete="off"
              class="form-control input-event"
            />
            <ErrorMessage class="error" name="" />
          </div>
          <div class="mb-2">
            <label class="label-event col-sm-3" require>コレクション設定</label>
            <Field
              name="コレクション設定"
              type="text"
              autocomplete="off"
              class="form-control input-event"
            />
            <ErrorMessage class="error" name="" />
          </div>
          <div class="row px-4 mt-5 mb-5">
            <div class="col-4 pe-1 text-center btn-box p-0 my-0 mb-3">
              <button type="submit" class="btn btn-100 btn-w-100">
                プレビュー
              </button>
            </div>
            <div class="col-4 text-center btn-box p-0 my-0 mb-3">
              <button type="submit" class="btn btn-100 btn-w-100">
                下書き保存
              </button>
            </div>
            <div class="col-4 ps-1 text-center btn-box p-0 my-0 mb-3">
              <button type="submit" class="btn btn-100 btn-save btn-w-100">
                確認
              </button>
            </div>
          </div>
        </VeeForm>
      </VeeForm>
    </div>
  </div>
</template>

<script>
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
    return {
      options: [
        { tag_name: '1', id: 1 },
        { tag_name: '2', id: 2 },
        { tag_name: '3', id: 3 },
        { tag_name: '4', id: 4 }
      ]
    }
  },
  props: ['data'],
  methods: {}
}
</script>

