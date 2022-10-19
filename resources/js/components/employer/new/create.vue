<template>
    <!-- <div class="row">
        <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
            <form method="POST" @submit="handleSubmit($event, onSubmit)" ref="formData" enctype="multipart/form-data"
                :action="data.urlStore">
                <div class="container col-8">

                    <input type="hidden" :value="csrfToken" name="_token" />
                    <div class="col">
                        <label class="form-label">Tiêu đề</label>
                        <Field type="text" name="title" rules="required|max:255" v-model="model.title"
                            class="form-control" />
                        <ErrorMessage class="error" name="title" />
                    </div>
                    <div class="col">
                        <label class="form-label">Só lượng cần tuyển</label>
                        <Field type="text" name="quatity" rules="required|max:255" class="form-control" />
                    </div>
                    <div class="col">
                        <label class="form-label">Giới tính</label>
                        <select name="" id="" class="form-control">
                            <option value="nam">Nam</option>
                            <option value="nữ">nữ</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="form-label">Mô tả công việc</label>
                        <Field type="text" name="describe" rules="required|max:255" class="form-control" />
                    </div>
                    <div class="col">
                        <label class="form-label">Trình độ học vẫn</label>
                        <Field name="level_id" as="select" v-model="model.level_id" rules="required"
                            class="form-control">
                            <option value disabled selected>Chọn Trình độ học vẫn</option>
                            <option v-for="item in data.lever" :key="item.id" :value="item.id">
                                {{ item.label }}
                            </option>
                        </Field>

                    </div>
                    <div class="col">
                        <label class="form-label">Kinh nghiệm</label>
                        <Field name="experience_id" as="select" v-model="model.experience" rules="required"
                            class="form-control">
                            <option value disabled selected>Chọn Kinh nghiệm</option>
                            <option v-for="item in data.experience" :key="item.id" :value="item.id">
                                {{ item.label }}
                            </option>
                        </Field>
                    </div>
                    <div class="col">
                        <label class="form-label">Mức lương</label>
                        <Field name="wage_id" as="select" v-model="model.wage" rules="required" class="form-control">
                            <option value disabled selected>Chọn Mức lương</option>
                            <option v-for="item in data.wage" :key="item.id" :value="item.id">
                                {{ item.label }}
                            </option>
                        </Field>
                    </div>
                    <div class="col">
                        <label class="form-label">Phúc lợi</label>
                        <Field type="text" name="benefit" rules="required|max:255" class="form-control" />
                    </div>
                    <div class="col">
                        <label class="form-label">Ngành nghề</label>
                        <Field name="profession_id" as="select" v-model="model.profession" rules="required"
                            class="form-control">
                            <option value disabled selected>Chọn Ngành nghề</option>
                            <option v-for="item in data.profession" :key="item.id" :value="item.id">
                                {{ item.label }}
                            </option>
                        </Field>
                    </div>
                    <div class="col">
                        <label class="form-label">Địa chỉ</label>

                        <Field name="location_id" as="select" v-model="model.location" rules="required"
                            class="form-control">
                            <option value disabled selected>Chọn Địa chỉ</option>
                            <option v-for="item in data.location" :key="item.id" :value="item.id">
                                {{ item.label }}
                            </option>
                        </Field>
                    </div>
                    <div class="col">
                        <label class="form-label">Địa chỉ cụ thể</label>
                        <Field type="text" name="address" rules="required|max:255" class="form-control" />
                    </div>
                    <div class="col">
                        <label class="form-label">Ngành nghề</label>

                        <Field name="majors_id" as="select" v-model="model.majors" rules="required"
                            class="form-control">
                            <option value disabled selected>Chọn Ngành nghề</option>
                            <option v-for="item in data.majors" :key="item.id" :value="item.id">
                                {{ item.label }}
                            </option>
                        </Field>
                    </div>
                    <div class="col">
                        <label class="form-label">Hình thức làm việc</label>
                        <Field name="wk_form_id" as="select" v-model="model.workingform" rules="required"
                            class="form-control">
                            <option value disabled selected>Chọn Hình thức làm việc</option>
                            <option v-for="item in data.workingform" :key="item.id" :value="item.id">
                                {{ item.label }}
                            </option>
                        </Field>
                    </div>
                    <div class="col">
                        <label class="form-label">hạn nộp hồ sơ</label>
                        <Field type="text" name="end_job_time" rules="required|max:255" class="form-control" />
                    </div>
                    <div class="col">
                        <label class="form-label">Yêu cầu thời gian làm việc</label>
                        <Field name="time_work_id" as="select" v-model="model.timework" rules="required"
                            class="form-control">
                            <option value disabled selected>Chọn Yêu cầu thời gian làm việc</option>
                            <option v-for="item in data.timework" :key="item.id" :value="item.id">
                                {{ item.label }}
                            </option>
                        </Field>
                    </div>
                    <div class="col">
                        <label class="form-label">Yêu cầu công việc</label>
                        <Field type="text" name="candidate_requirements" rules="required|max:255"
                            class="form-control" />
                    </div>


                </div>
                <div class="col-4">
                    <h4>Thông tin liên hệ</h4>
                    <div class="">
                        <label class="form-label">Họ và tên</label>
                        <Field type="text" name="name_employer" rules="required|max:255" class="form-control" />
                    </div>
                    <div class="">
                        <label class="form-label">Email</label>
                        <Field type="text" name="name_employer" rules="required|max:255" class="form-control" />
                    </div>
                    <div class="">
                        <label class="form-label">Địac chỉ</label>
                        <Field type="text" name="name_employer" rules="required|max:255" class="form-control" />
                    </div>
                    <div class="">
                        <label class="form-label">Số điện thoại</label>
                        <Field type="text" name="name_employer" rules="required|max:255" class="form-control" />
                    </div>

                </div>
                <div class="text-center text-1">
                    <a class="btn btn-danger" style="margin-right: 10px;">
                        Cancel
                    </a>
                    <button class="btn btn-info">Thực hiện</button>
                </div>
            </form>
        </VeeForm>
    </div> -->
    <VeeForm as="div" v-slot="{ handleSubmit }" @invalid-submit="onInvalidSubmit">
        <form class="recuitment-form" method="POST" @submit="handleSubmit($event, onSubmit)" ref="formData"
            enctype="multipart/form-data" :action="data.urlStore">
            <div class="accordion">
                <div class="card recuitment-card">
                    <div class="card-header recuitment-card-header" id="headingOne">
                        <h2 class="mb-0">
                            <span class="btn btn-block text-left recuitment-header">
                                Đăng tin tuyển dụng
                            </span>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse  show">
                        <div class="card-body recuitment-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Tiêu đề<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nhập tiêu đề" />
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Số lượng cần tuyển</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" placeholder="1" />
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Giới tính<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <select typeof="number" class="form-control">
                                        <option value="">Chọn giới tính</option>
                                        <option>Không yêu cầu</option>
                                        <option>Nam</option>
                                        <option>Nữ</option>
                                    </select>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Mô tả công việc<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" placeholder="mô tả công việc" />
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Yêu cầu công việc<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" placeholder="Yêu cầu công việc" />
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Chuyên Ngành<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <Field name="majors_id" as="select" v-model="model.majors" rules="required"
                                        class="form-control">
                                        <option value disabled selected>Chọn chuyên nghề</option>
                                        <option v-for="item in data.majors" :key="item.id" :value="item.id">
                                            {{ item.label }}
                                        </option>
                                    </Field>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Trình độ<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <Field name="level_id" as="select" v-model="model.level_id" rules="required"
                                        class="form-control">
                                        <option value disabled selected>Chọn Trình độ học vẫn</option>
                                        <option v-for="item in data.lever" :key="item.id" :value="item.id">
                                            {{ item.label }}
                                        </option>
                                    </Field>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Kinh nghiệm<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <Field name="experience_id" as="select" v-model="model.experience" rules="required"
                                        class="form-control">
                                        <option value disabled selected>Chọn Kinh nghiệm</option>
                                        <option v-for="item in data.experience" :key="item.id" :value="item.id">
                                            {{ item.label }}
                                        </option>
                                    </Field>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Mức lương<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <Field name="wage_id" as="select" v-model="model.wage" rules="required"
                                        class="form-control">
                                        <option value disabled selected>Chọn Mức lương</option>
                                        <option v-for="item in data.wage" :key="item.id" :value="item.id">
                                            {{ item.label }}
                                        </option>
                                    </Field>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Hình thức làm việc<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <Field name="wk_form_id" as="select" v-model="model.workingform" rules="required"
                                        class="form-control">
                                        <option value disabled selected>Chọn Hình thức làm việc</option>
                                        <option v-for="item in data.workingform" :key="item.id" :value="item.id">
                                            {{ item.label }}
                                        </option>
                                    </Field>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Thời gian làm việc<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <Field name="time_work_id" as="select" v-model="model.timework" rules="required"
                                        class="form-control">
                                        <option value disabled selected>Chọn Yêu cầu thời gian làm việc</option>
                                        <option v-for="item in data.timework" :key="item.id" :value="item.id">
                                            {{ item.label }}
                                        </option>
                                    </Field>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Quyền lợi<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" placeholder="Quyền lợi" />
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Vị trí ứng tuyển</label>
                                <div class="col-sm-9">
                                    <Field name="profession_id" as="select" v-model="model.profession" rules="required"
                                        class="form-control">
                                        <option value disabled selected>Chọn vị trí</option>
                                        <option v-for="item in data.profession" :key="item.id" :value="item.id">
                                            {{ item.label }}
                                        </option>
                                    </Field>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Nơi làm việc</label>
                                <div class="col-sm-9">
                                    <Field name="location_id" as="select" v-model="model.location" rules="required"
                                        class="form-control">
                                        <option value disabled selected>Chọn Địa chỉ</option>
                                        <option v-for="item in data.location" :key="item.id" :value="item.id">
                                            {{ item.label }}
                                        </option>
                                    </Field>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Địa chỉ cụ thể</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" />
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right label">Hạn nộp hồ sơ<span
                                        class="pl-2">*</span></label>
                                <div class="col-sm-9">
                                    <picker-new-employer></picker-new-employer>
                                    <p class='text-danger pt-1'></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card recuitment-card">
                <div class="card-header recuitment-card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <span class="btn btn-block text-left recuitment-header">
                            Kỹ Năng
                        </span>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse show">
                    <div class="card-body recuitment-body">
                        <div class="checkboxsec">
                            <label class="label-container">
                                <div class="filter-topic">
                                    <label class="label-container" v-for="item in data.skill" :key="item.id"
                                        :value="item.id">
                                        <input type="checkbox" style="margin-top: ;10px" />
                                        <span class="text-skill">{{ item.label }}</span>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <p class='text-danger pt-1'></p>
            </div>
            <div class="card recuitment-card">
                <div class="card-header recuitment-card-header" id="headingThree">
                    <h2 class="mb-0">
                        <span class="btn btn-block text-left recuitment-header">
                            Thông Tin Liên Hệ
                        </span>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body recuitment-body">
                        <input type="hidden" />
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Tên người liên hệ</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Điện thoại</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Số điệnt thoại</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card recuitment-card">
                <div class="card-header recuitment-card-header" id="heading4">
                    <h2 class="mb-0">
                        <span class="btn btn-block text-left recuitment-header">
                            Thông Tin Công Ty
                        </span>
                    </h2>
                </div>

                <div id="collapse4" class="collapse show" aria-labelledby="heading4" data-parent="#collapse4">
                    <div class="card-body recuitment-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Tên công ty<span
                                    class="pl-2">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Tên công ty" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Địa chỉ<span
                                    class="pl-2">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Nhập địa chỉ" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Email<span
                                    class="pl-2">*</span></label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="Nhập Email" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Tỉnh/Thành phố</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>Chọn Tỉnh/Thành phố</option>

                                </select>
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Quy mô nhân sự</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Sơ lược về công ty<span
                                    class="pl-2">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" placeholder="Sơ lược về công ty" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Logo</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right label">Quy mô nhân sự<span
                                    class="pl-2">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Nhập số lượng nhân viên" />
                                <p class='text-danger pt-1'></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rec-submit">
                    <button type="submit" class="btn-submit-recuitment">
                        <i class="fa fa-floppy-o pr-2 icon-save" />Lưu Tin
                    </button>
                </div>
            </div>
        </form>
    </VeeForm>
</template>
<script>
import {
    Form as VeeForm,
    Field,
    ErrorMessage,
    defineRule,
    configure,
} from "vee-validate";
import { localize } from "@vee-validate/i18n";
import * as rules from "@vee-validate/rules";
export default {
    setup() {
        Object.keys(rules).forEach((rule) => {
            if (rule != "default") {
                defineRule(rule, rules[rule]);
            }
        });
    },
    components: {
        VeeForm,
        Field,
        ErrorMessage,
    },
    props: ["data"],
    data: function () {
        return {
            csrfToken: Laravel.csrfToken,
            model: {},
        };
    },
    created() {
        let messError = {
            en: {
                fields: {
                    title: {
                        required: "Tiêu đề  không được để trống",
                        max: "Tiêu đê không được vượt qua 255 ký tự",
                    },
                    new_image: {
                        required: "Ảnh không được để trống",
                        mimes: "Ảnh không đúng định dạng",
                        max: "Ảnh vượt mức cho phép",

                    },

                },
            },
        };
        configure({
            generateMessage: localize(messError),
        });
    },
    methods: {
        onInvalidSubmit({ values, errors, results }) {
            let firstInputError = Object.entries(errors)[0][0];
            this.$el.querySelector("input[name=" + firstInputError + "]").focus();
            $("html, body").animate(
                {
                    scrollTop:
                        $("input[name=" + firstInputError + "]").offset().top - 150,
                },
                500
            );
        },
        onSubmit() {
            this.$refs.formData.submit();
        },
    },
};
</script>
<style>
.container_package {
    margin: 0 auto;
    width: 50%;
    margin-top: 10px;
}

.text-title {
    font-size: 30px;
    font-weight: 700;
}

.form-label {
    float: left;
    margin-top: 10px;
    font-size: 20px;
}

.btn-primary {
    margin-top: 50px;
    margin-bottom: 50px;
}

.text-1 {
    margin-top: 30px !important;
}
</style>