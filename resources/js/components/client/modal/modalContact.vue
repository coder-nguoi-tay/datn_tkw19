<template>
  <div id="modalHotlineContact" class="support-ticket-modal">
    <div class="support-ticket-modal-header">
      <h4 class="support-ticket-modal-title st-text-highlight">Liên hệ</h4>
    </div>
    <div class="support-ticket-modal-body">
      <div class="st-text-center">
        <p>
          <strong class="st-text-bold"
            >ITWork cam kết sẽ xử lý các vấn đề của bạn 24/7.</strong
          >
        </p>
        <p>
          Tổng đài:
          <span class="st-text-highlight">(096) 2523 872 </span>
        </p>
        <p>
          Trong trường hợp không liên lạc được, vui lòng gửi hỗ trợ tới email:
          <span class="st-text-highlight">hungnvph14820@fpt.edu.vn</span>
        </p>
        <p>Xin cảm ơn!</p>
      </div>
    </div>
  </div>
</template>

<style>
#support-ticket-modal-wraper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.3);

  z-index: 22071993;
  overflow: auto;
}

.support-ticket-modal {
  width: 600px;
  margin: 30px auto;
  max-width: 100%;
  background-color: #fff;
}

.support-ticket-modal-header {
  padding: 20px;
}

.support-ticket-modal-title {
  font-size: 21px;
  font-weight: 400;
  margin: 0 auto;
}

.st-text-highlight {
  color: #00b14f;
}

.st-text-center {
  text-align: center;
}

.st-text-bold {
  font-weight: 700;
}

.st-text-highlight {
  color: #00b14f;
}

.support-ticket-modal-footer {
  padding: 20px;
}

.text-center {
  text-align: center;
}

#support-ticket-root {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  line-height: 1.42857143;
}

.support-ticket-panel-header {
  padding: 15px;
  font-size: 15px;
  background-color: rgb(164, 174, 192);
  color: #fff;
  box-shadow: 0 1px 4px rgb(0 0 0 / 20%);
  border-radius: 8px 8px 0 0;
}

.support-ticket-panel-header .support-ticket-cs-avatar img {
  height: 50px;
  width: 50px;
  border-radius: 50%;
}

.support-ticket-panel-header .support-ticket-cs-heading {
  text-align: center;
  font-size: 13px;
  margin-top: 10px;
  /* border-top: 1px solid #349bf7; */
  padding-top: 10px;
}

.support-ticket-panel-body ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.support-ticket-panel-body li {
  margin: 0;
  padding: 0;
  border-top: 1px solid #efefef;
}

.support-ticket-panel-body li a {
  display: inline-block;
  height: 100%;
  width: 100%;
  padding: 15px;
}

a {
  text-decoration: none;
}

a {
  color: #666;
}

#support-ticket-laucher {
  position: fixed;
  bottom: 15px;
  right: 15px;
  width: 60px;
  height: 60px;
  background-color: rgb(164, 174, 192);
  color: #fff;
  text-align: center;
  border-radius: 50%;
  font-size: 30px;
  padding: 7px;
  cursor: pointer;
  z-index: 22071992;
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  box-shadow: 0 1px 10px #dfdfdf;
}

.support-ticket-panel-header .support-ticket-cs-name {
  font-size: 12px;
  text-align: center;
  margin-top: 5px;
}

img {
  vertical-align: middle;
}

img {
  border: 0;
}

.support-ticket-panel-header .support-ticket-cs {
  height: 60px;
  margin: 20px auto;
  text-align: center;
}

.support-ticket-panel-header .support-ticket-panel-title {
  text-align: center;
  font-size: 18px;
}

#support-ticket-panel {
  position: fixed;
  bottom: 90px;
  right: 20px;
  min-height: 100px;
  width: 300px;
  max-width: 100%;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 1px 10px #dfdfdf;
  z-index: 22071992;
}

.st-btn {
  padding: 10px 20px;
  display: inline-block;
  cursor: pointer;
}

a {
  text-decoration: none;
}

#support-ticket-root p {
  margin: 0 0 10px;
}

.st-text-italic {
  font-style: italic;
}

.st-text-gray {
  color: #999;
}

.st-text-red {
  color: #d0011b;
}

.st-form-group {
  margin-bottom: 15px;
}

.st-col-12 {
  width: 100%;
}

.st-col-6,
.st-col-12 {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  float: left;
  padding-left: 15px;
  padding-right: 15px;
}

.st-form-control {
  display: block;
  width: 100%;
  padding: 6px 12px;
  line-height: 1.42857143;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  height: 40px;
  font-size: 12px;
  border-radius: 2px;
  outline: none;
  -webkit-appearance: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-color: rgba(0, 0, 0, 0.1);
  padding: 10px 18px;
  color: rgba(0, 0, 0, 0.87);
}

.st-col-6 {
  width: 50%;
}

.st-text-small {
  font-size: 0.9em;
}

.st-text-italic {
  font-style: italic;
}

.st-btn-primary {
  background-color: #00b14f;
  color: #fff;
}

.st-btn {
  padding: 10px 20px;
  display: inline-block;
  cursor: pointer;
}

a {
  text-decoration: none;
}

.st-col-6,
.st-col-12 {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  float: left;
  padding-left: 15px;
  padding-right: 15px;
}
</style>