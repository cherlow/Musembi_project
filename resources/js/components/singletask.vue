<template>
  <div>
    <!-- Titlebar
        ================================================== -->
    <div class="single-page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="single-page-header-inner">
              <div class="left-side">
                <div class="header-image">
                  <a href="javascript:void(0)"
                    ><img :src="this.taskdata.employer.avatar" alt=""
                  ></a>
                </div>
                <div class="header-details">
                  <h3>{{ this.taskdata.title }}</h3>
                  <h5>About the Employer</h5>
                  <ul>
                    <li>
                      <a href="javascript:void(0)"
                        ><i class="icon-material-outline-business"></i>
                        {{ this.taskdata.employer.name }}</a
                      >
                    </li>
                    <!-- <li><div class="star-rating" data-rating="4.0"></div></li> -->
                    <li>{{ this.taskdata.employer.location }}</li>
                  </ul>
                </div>
              </div>
              <div class="right-side"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page Content
        ================================================== -->
    <div class="container">
      <div class="row">
        <!-- Content -->
        <div class="col-xl-8 col-lg-8 content-right-offset">
          <!-- Description -->
          <div class="single-page-section">
            <h3 class="margin-bottom-25">Job Description</h3>
            {{ this.taskdata.details }}
          </div>

          <!-- Atachments -->
          <div class="single-page-section">
            <h3>Attachments</h3>
            <div class="attachments-container">
              <a
                v-for="attachment in this.taskdata.attachments"
                :key="attachment.id"
                :href="'/storage/attachments/' + attachment.link"
                class="attachment-box ripple-effect"
                ><span>{{ attachment.name }}</span
                ><i>{{ attachment.type }}</i></a
              >
            </div>
          </div>

          <!-- Skills -->
          <div class="single-page-section">
            <h3>Skills Required</h3>
            <div class="task-tags">
              <span v-for="skill in this.taskdata.skills" :key="skill.id">{{
                skill.skill
              }}</span>
            </div>
          </div>
          <div class="clearfix"></div>

          <!-- Freelancers Bidding -->
        </div>

        <!-- Sidebar -->
        <div class="col-xl-4 col-lg-4">
          <div class="sidebar-container">
            <div class="countdown green margin-bottom-35">
              {{ this.taskdata.created }}
            </div>

            <div class="sidebar-widget">
              <div class="bidding-widget" v-if="oot.role == 'hustlancer'">
                <div class="bidding-headline"><h3>Apply this job!</h3></div>
                <div class="bidding-inner" v-if="auth">
                  <div class="submit-field">
                    <h5>Introduce Yourself</h5>
                    <textarea
                      cols="30"
                      rows="5"
                      class="with-border"
                      v-model="intro"
                    ></textarea>
                  </div>

                  <!-- Button -->
                  <button
                    id="snackbar-place-bid"
                    class="button ripple-effect move-on-hover full-width margin-top-30"
                    @click.prevent="bidtask()"
                  >
                    <span>Submit Application</span>
                  </button>
                </div>
                <!-- <div v-if="!auth" class="bidding-signup">Sign up to bid on this project <a href="/login" class="register-tab sign-in">Sign Up</a></div> -->
                <div v-if="!auth">
                  <div class="login-register-page">
                    <!-- Welcome Text -->
                    <div class="welcome-text">
                      <span
                        >Don't have an account?
                        <a href="/register">Sign Up!</a></span
                      >
                    </div>

                    <!-- Form -->
                    <form action="/login" method="POST" id="login-form">
                      <input type="hidden" name="_token" :value="token" />
                      <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input
                          type="email"
                          class="input-text with-border"
                          name="email"
                          id="emailaddress"
                          placeholder="Email Address"
                          required
                        />
                      </div>

                      <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input
                          type="password"
                          class="input-text with-border"
                          name="password"
                          id="password"
                          placeholder="Password"
                          required
                        />
                      </div>
                      <a href="#" class="forgot-password">Forgot Password?</a>

                      <!-- Button -->
                      <button
                        class="button full-width button-sliding-icon ripple-effect margin-top-10"
                        type="submit"
                        form="login-form"
                      >
                        Log In
                        <i class="icon-material-outline-arrow-right-alt"></i>
                      </button>
                    </form>

                    <!-- Social Login -->
                    <div class="social-login-separator"><span>or</span></div>
                    <div class="social-login-buttons">
                      <button class="github-login ripple-effect">
                        <i class="icon-brand-github"></i> Log In via Github
                      </button>
                      <button class="google-login ripple-effect">
                        <i class="icon-line-awesome-envelope-o"></i> Log In via
                        Google
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="sidebar-widget">
              <h3>Share</h3>

              <!-- Bookmark Button -->

              <!-- Copy URL -->
              <div class="copy-url">
                <input id="copy-url" type="text" value="" class="with-border" />
                <button
                  class="copy-url-button ripple-effect"
                  data-clipboard-target="#copy-url"
                  title="Copy to Clipboard"
                  data-tippy-placement="top"
                >
                  <i class="icon-material-outline-file-copy"></i>
                </button>
              </div>

              <!-- Share Buttons -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Toasted from "vue-toasted";

Vue.use(Toasted);

export default {
  name: "singletask",
  props: {
    task: String,
    auth: String,
    applicants: String,
  },
  data() {
    return {
      taskdata: {},
      token: document.head.querySelector('meta[name="csrf-token"]').content,

      intro: "",
      applications: [],
      oot: {},
    };
  },
  created() {
    this.oot = JSON.parse(this.auth);

    this.showtoast();
    this.taskdata = JSON.parse(this.task);
    this.applications = JSON.parse(this.applicants);
  },
  methods: {
    bidtask() {
      let task = JSON.parse(this.task);
      let auth = JSON.parse(this.auth);

      let formData = new FormData();
      formData.append("taskid", task["id"]);
      formData.append("details", this.intro);
      formData.append("authid", auth["id"]);

      axios
        .post("/api/bid", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res);

          this.$toasted.show("Job application submitted successfully");
        })
        .catch((e) => {
          console.log(e);

          this.$toasted.show("You already have an active job application");
        });
    },

    showtoast() {
      //
      // $this.$toasted.show("hello toast");
    },
  },
};
</script>
<style scoped>
</style>
