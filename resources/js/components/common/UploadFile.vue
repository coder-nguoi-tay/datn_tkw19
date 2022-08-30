<template>
  <div class="file-upload-custom">
    <div class="d-flex">
      <label :for="name" :class="`flex-grow-1 empty`">
        {{ placeholder }}
        <input
          ref="file"
          type="file"
          :name="inputName"
          :id="name"
          class="form-control d-none"
          :multiple="multiple"
          @change="selectFile"
        />

        <input ref="unset_file" type="hidden" name="unset_file" value="0" />
      </label>
      <button
        class="btn btn-secondary px-5 flex-shrink-0 btn-upload"
        type="button"
        @click="btnClick"
      >
        参考
      </button>
    </div>

    <div class="previews" v-if="files.length">
      <div v-for="file in files" :key="file.id">
        <div class="d-flex align-items-center mt-2">
          <div class="flex-shrink-0">
            <i class="fa fa-paperclip me-3" aria-hidden="true"></i>
          </div>

          <div class="flex-grow-1" style="width: 80%">
            <input type="hidden" name="file_name" :value="file.name" />
            <div class="font-weight-bold file-name">{{ file.name }}</div>
            <div class="text-muted" style="font-size: 0.8em">
              {{ file.smart_size }}
            </div>
          </div>

          <div class="flex-shrink-0 ms-2">
            <i
              class="fa fa-trash fa-delete"
              aria-hidden="true"
              @click="deleteFile(file.id)"
            ></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'UploadFile',
  data() {
    return {
      files: [],
      inputName: '',
      multiple: false
    }
  },
  mounted() {
    this.setIniFile()
  },
  props: {
    name: {
      type: String,
      default: 'files'
    },
    initFile: {
      type: Array,
      default: []
    },
    initMultiple: {
      type: Boolean,
      default: false
    },
    placeholder: {
      type: String,
      default: '添付ファイル名'
    }
  },
  methods: {
    setIniFile() {
      this.files = this.initFile
      this.inputName = !this.multiple ? this.name : this.name + '[]'

      if (this.initMultiple) {
        alert('Upload multiple not suppported yet!')
      } else {
        this.multiple = this.initMultiple //alway false
      }

      if (!this.files || !this.files.length) {
        this.$refs.unset_file.value = 1
      } else {
        this.$refs.unset_file.value = 0
      }
    },
    btnClick(e) {
      const elem = this.$el
      elem.querySelector('label').click()
    },
    selectFile(e) {
      const files = e.target.files
      console.log(e.target.files)

      if (!files || !files.length) {
        return false
      }

      let fileState = this.files
      if (!this.multiple) {
        fileState = []
      }

      for (let file of files) {
        fileState.push({
          id: Math.random(),
          name: file.name,
          size: file.size,
          smart_size: this.smartSize(file.size)
          // file: file,
        })
      }

      this.files = fileState
      this.$refs.unset_file.value = 0

      this.$emit('onSelectFile', this.files, files)
    },
    deleteFile(id) {
      if (!id) {
        return false
      }

      this.files = this.files.filter((h) => {
        return h.id !== id
      })

      this.$refs.file.value = ''

      if (!this.files || !this.files.length) {
        this.$refs.unset_file.value = 1
      }

      this.$emit('onRemoveFile', this.files)
    },
    smartSize(bytes, decimals = 2) {
      if (bytes === 0) return '0 Bytes'

      const k = 1024
      const dm = decimals < 0 ? 0 : decimals
      const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB']

      const i = Math.floor(Math.log(bytes) / Math.log(k))

      return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i]
    }
  },
  watch: {
    initFile() {
      this.setIniFile()
    }
  }
}
</script>

<style lang="scss" scoped>
.file-upload-custom {
  label {
    padding: 0.375rem 0.75rem;
    border: 1px solid var(--cui-form-select-border-color, #b1b7c1);
    border-radius: 0.25em 0 0 0.25em;

    &.empty {
      opacity: 0.5;
    }
  }

  .btn-upload {
    border-radius: 0 0.24em 0.24em 0;
  }

  .delete-file {
    opacity: 0.5;
    transition: 0.2s;
    &:hover {
      opacity: 1;
    }
  }

  .fa-delete {
    opacity: 0.7;
    transition: 0.2s;
    padding: 10px 0 10px 10px;
    cursor: pointer;
    &:hover {
      opacity: 1;
    }
  }
}
</style>
