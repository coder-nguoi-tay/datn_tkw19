<template>
  <div class="col-12 recuitment-inner">
    <div class="card-create-employer">
      <form
        class="recuitment-form"
        ref="formData"
        method="POST"
        enctype="multipart/form-data"
      >
        <Field type="hidden" :value="csrfToken" name="_token" />
        <div class="row">
          <div class="col-lg-12">
            <div class="billing-form-item">
              <!-- billing-title-wrap -->
              <div class="billing-content">
                <div class="contact-form-action">
                  <div class="MultiFile-intercepted">
                    <br />
                    <div class="box-group">
                      <div class="box-group-body">
                        <div class="row box-recruiter">
                          <div
                            class="col-sm-12"
                            v-for="(item, index) in data.job"
                          >
                            <div
                              class="
                                job
                                box
                                box-white
                                box-relative
                                box-overflow-hidden
                                box-view-profile
                              "
                            >
                              <div class="row">
                                <div class="col-md-2 col-sm-3 hidden-xs">
                                  <div class="company-logo">
                                    <img :src="item.logo" />
                                  </div>
                                </div>
                                <div
                                  class="
                                    col-md-7 col-sm-9 col-xs-12
                                    text-right-xs
                                  "
                                >
                                  <div class="text-highlight employer-name">
                                    <a :href="'/home/detail/' + item.id">{{
                                      item.title
                                    }}</a>
                                  </div>
                                  <div
                                    class="company-name text-gray"
                                    style="
                                      text-transform: uppercase;
                                      font-size: 0.9em;
                                    "
                                  >
                                    <a
                                      target="_blank"
                                      :href="'detail-company/' + item.idCompany"
                                      class="text-gray"
                                      rel="nooppener noreferrer"
                                    >
                                      {{ item.nameCompany }}</a
                                    >
                                  </div>
                                </div>
                                <div class="col-md-3 col-xs-12 text-right">
                                  <p>
                                    <span class="open-time text-gray">
                                      4 tháng trước</span
                                    >
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  props: ['data'],
  created() {
    console.log(this.data.job)
  }
}
</script>
<style scoped>
.box-view-profile {
  width: 100%;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 10px;
  height: auto;
}

.company-logo {
  width: 100%;
  height: 55px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.company-logo img {
  width: 100%;
  max-width: 150px;
}

img {
  vertical-align: middle;
}

img {
  border: 0;
}

.employer-name {
  font-size: 16px;
  margin: 7px 0;
  margin-top: 0;
}

.text-highlight {
  color: #00b14f;
}

.text-highlight {
  color: #00b14f;
}

.text-gray {
  color: #999;
}

.open-time {
  font-size: 13px;
  line-height: 20px;
}

.box-white {
  background-color: #fff;
}

.box-overflow-hidden {
  overflow: hidden;
}

.box-relative {
  position: relative;
}

.box {
  margin-bottom: 20px;
  padding: 20px;
}

.box-group {
  margin-top: -20px;
}

a {
  color: #337ab7;
  text-decoration: none;
}

a {
  background-color: transparent;
}

.box-recruiter {
  margin-right: -15px;
  margin-left: -15px;
}
</style>