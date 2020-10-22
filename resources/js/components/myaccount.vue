<template>
  <!-- Row -->
  <div class="row">
    <!-- Dashboard Box -->
    <div class="col-xl-12">
      <div class="dashboard-box margin-top-0">
        <!-- Headline -->
        <div class="headline">
          <h3>
            <i class="icon-material-outline-account-circle"></i> My Account
          </h3>
        </div>

        <div class="content with-padding padding-bottom-0">
          <div class="row">
            <div class="col-auto">
              <div
                class="avatar-wrapper"
                data-tippy-placement="bottom"
                title="Change Avatar"
              >
                <img class="profile-pic" :src="image" alt="" />
                <div class="upload-button"></div>
                <input
                  class="file-upload"
                  type="file"
                  id="myfile"
                  accept="image/*"
                  @change="newimage"
                />
              </div>
            </div>

            <div class="col">
              <div class="row">
                <div class="col-xl-6">
                  <div class="submit-field">
                    <h5>Username</h5>

                    <input
                      type="text"
                      class="with-border"
                      v-model="user.username"
                      disabled
                      readonly
                    />
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="submit-field">
                    <h5>Email</h5>
                    <input
                      type="email"
                      class="with-border"
                      v-model="user.email"
                      readonly
                    />
                  </div>
                </div>

                <div class="col-xl-6">
                  <!-- Account Type -->
                  <div class="submit-field">
                    <h5>Account Type</h5>
                    <div class="account-type">
                      <div>
                        <input
                          value="hustlancer"
                          v-model="user.account_type"
                          type="radio"
                          name="account-type-radio"
                          id="freelancer-radio"
                          class="account-type-radio"
                        />
                        <label for="freelancer-radio" class="ripple-effect-dark"
                          ><i class="icon-material-outline-account-circle"></i>
                          Worker</label
                        >
                      </div>

                      <div>
                        <input
                          value="employer"
                          v-model="user.account_type"
                          type="radio"
                          name="account-type-radio"
                          id="employer-radio"
                          class="account-type-radio"
                        />
                        <label for="employer-radio" class="ripple-effect-dark"
                          ><i class="icon-material-outline-business-center"></i>
                          Employer</label
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-6">
                  <div class="submit-field">
                    <h5>Mobile</h5>
                    <input
                      type="text"
                      class="with-border"
                      v-model="user.mobile"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Dashboard Box -->

    <div class="col-xl-12">
      <div class="dashboard-box">
        <!-- Headline -->
        <div class="headline">
          <h3><i class="icon-material-outline-face"></i> My Profile</h3>
        </div>

        <div class="content">
          <ul class="fields-ul">
            <li>
              <div class="row">
                <div
                  class="col-xl-4"
                  v-if="user.account_type == 'hustlancer'"
                  :key="user.mobile"
                >
                  <div class="submit-field">
                    <h5>
                      Skills
                      <i
                        class="help-icon"
                        data-tippy-placement="right"
                        title="Add up to 10 skills"
                      ></i>
                    </h5>

                    <!-- Skills List -->
                    <div class="keywords-container">
                      <div class="keyword-input-container">
                        <input
                          v-model="skill"
                          type="text"
                          class="keyword-input with-border"
                          placeholder="e.g. Angular, Laravel"
                        />
                        <button
                          @click.prevent="addskill()"
                          class="keyword-input-button ripple-effect"
                          :disabled="skill.length < 1"
                        >
                          <i class="icon-material-outline-add"></i>
                        </button>
                      </div>
                      <div class="keywords-list">
                        <span
                          v-for="skill in user.skills"
                          :key="skill.id"
                          class="keyword"
                          ><span class="keyword-remove"></span
                          ><span class="keyword-text">{{
                            skill.skill
                          }}</span></span
                        >
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4">
                  <div class="submit-field">
                    <h5>Attachments</h5>

                    <!-- Attachments -->
                    <div
                      class="attachments-container margin-top-0 margin-bottom-0"
                    >
                      <div
                        class="attachment-box ripple-effect"
                        v-for="attachment in user.attachments"
                        :key="attachment.id"
                      >
                        <span>{{ attachment.name }}</span>
                        <i>{{ attachment.type }}</i>
                        <button
                          class="remove-attachment"
                          data-tippy-placement="top"
                          title="Remove"
                        ></button>
                      </div>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Upload Button -->
                    <div class="uploadButton margin-top-0">
                      <input
                        class="uploadButton-input"
                        type="file"
                        id="upload"
                        @change="addattachment"
                      />
                      <label
                        class="uploadButton-button ripple-effect"
                        for="upload"
                        >Upload File</label
                      >
                      <span
                        class="uploadButton-file-name"
                        id="uploadButton-file"
                        >Maximum file size: 10 MB</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-xl-6">
                  <div class="submit-field">
                    <h5>Tagline</h5>
                    <input
                      type="text"
                      class="with-border"
                      placeholder="e.g Full stack Developer"
                      v-model="user.tagline"
                    />
                  </div>
                </div>

                <div class="col-xl-6">
                  <div class="submit-field">
                    <h5>Location</h5>
                    <input
                      type="text"
                      class="with-border"
                      placeholder="e.g e.g nairobi"
                      v-model="user.location"
                    />
                  </div>
                </div>

                <div class="col-xl-12">
                  <div class="submit-field">
                    <h5>Introduce Yourself</h5>
                    <textarea
                      cols="30"
                      rows="5"
                      class="with-border"
                      v-model="user.bio"
                    ></textarea>
                  </div>
                </div>

                <!-- Button -->
                <div class="col-xl-12">
                  <a
                    href="javascript:void(0)"
                    class="button ripple-effect big margin-top-30"
                    @click="submitform"
                    >Save Changes</a
                  >
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Row / End -->
</template>
<script>
export default {
  name: "myaccount",
  props: ["auth"],
  data() {
    return {
      user: {},
      skill: "",
      image: "",
      attachments: "",
    };
  },
  created() {
    this.getuser();
  },
  methods: {
    addattachment() {
      let files = document.querySelector("#upload");

      this.attachments = files.files[0];
    },
    getuser() {
      axios
        .get("/api/user")
        .then((res) => {
          this.user = res.data.data;
          this.image = res.data.data.avatar;

          console.log(res);
        })
        .catch((err) => console.log(err));
    },
    submitform() {
      let rate = document.getElementById("biddingVal").innerText;

      let formData = new FormData();
      formData.append("attachments", this.attachments);
      formData.append("rate", rate);
      formData.append("account_type", this.user.account_type);
      formData.append("mobile", this.user.mobile);
      formData.append("tagline", this.user.tagline);
      formData.append("nationality", this.user.location);
      formData.append("bio", this.user.bio);

      axios
        .post("/api/updateuser", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          this.user = res.data.data;
          this.attachments = "";
          document.getElementById("uploadButton-file").innerHTML =
            "Maximum file size: 10 MB";
        })
        .catch((e) => console.log(e));
    },
    addskill() {
      axios
        .post("/api/adduserskill", {
          skill: this.skill,
        })
        .then((res) => (this.user.skills = res.data.data))
        .catch((e) => console.log(e));

      this.skill = "";
    },

    newimage(e) {
      let files = e.target.files || e.dataTranfer.files;
      if (!files.length) return;
      this.createImage(files[0]);
      this.avatar = e.target.files[0];
    },
    createImage(file) {
      let reader = new FileReader();
      let vm = this;
      reader.onload = (e) => {
        vm.image = e.target.result;
      };
      reader.readAsDataURL(file);
      let imagefile = document.querySelector("#myfile");

      let formData = new FormData();
      formData.append("file", imagefile.files[0]);

      axios
        .post("/api/changeavatar", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => (this.image = res.data))
        .catch((e) => console.log(e));
    },
  },
};
</script>
<style scoped>
</style>
