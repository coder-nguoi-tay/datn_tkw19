<template>
  <div
    class="modal fade delete-confirm-modal"
    id="deleteConfirmModal"
    tabindex="-1"
    aria-labelledby="deleteConfirmModal"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div
          class="modal-body d-flex justify-content-center align-items-center"
        >
          <div class="warning-container text-center">
            <div class="ic-warning">
              <img src="/assets/img/user/event/ic_warning.svg" alt="" />
            </div>
            <h2 class="warning-title">下書きを削除します</h2>
            <p class="warning-desc">
              削除すると今までの編集情報はすべてなくなり、復元することはできません。本当に削除しますか？
            </p>
            <div class="warning-btn">
              <button
                class="btn-modal btn-continue-edit"
                type="button"
                data-bs-dismiss="modal"
              >
                編集を続ける
              </button>
              <a href="#" class="btn-modal btn-delete">下書きを削除する</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
