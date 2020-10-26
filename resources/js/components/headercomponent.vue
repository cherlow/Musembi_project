<template>
  <div id="header">
    <div class="container">
      <!-- Left Side Content -->
      <div class="left-side">
        <!-- Logo -->
        <div id="logo">
          <a href="/"><h2 style="color: white; padding-top: 20px">Ajira</h2></a>
        </div>

        <!-- Main Navigation -->
        <nav id="navigation">
          <ul id="responsive">
            <li><a href="/" class="current">Home</a></li>

            <li><a href="/tasks" class="current">Jobs</a></li>

            <li><a href="/hustlancers">Users</a></li>

            <li v-if="auth">
              <a href="/home"
                ><i class="icon-material-outline-dashboard"></i> Dashboard</a
              >
              <!-- <ul class="dropdown-nav">
                <li><a href="/home">Dashboard</a></li>
                <li><a href="/messages">Messages</a></li>
                <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                <li><a href="dashboard-reviews.html">Reviews</a></li>
                <li>
                  <a href="dashboard-manage-jobs.html">Jobs</a>
                  <ul class="dropdown-nav">
                    <li>
                      <a href="dashboard-manage-jobs.html">Manage Jobs</a>
                    </li>
                    <li>
                      <a href="dashboard-manage-candidates.html"
                        >Manage Candidates</a
                      >
                    </li>
                    <li><a href="dashboard-post-a-job.html">Post a Job</a></li>
                  </ul>
                </li>
                <li>
                  <a href="dashboard-manage-tasks.html">Tasks</a>
                  <ul class="dropdown-nav">
                    <li>
                      <a href="dashboard-manage-tasks.html">Manage Tasks</a>
                    </li>
                    <li>
                      <a href="dashboard-manage-bidders.html">Manage Bidders</a>
                    </li>
                    <li>
                      <a href="dashboard-my-active-bids.html">My Active Bids</a>
                    </li>
                    <li>
                      <a href="dashboard-post-a-task.html">Post a Task</a>
                    </li>
                  </ul>
                </li>
                <li><a href="/my-account">Settings</a></li>
              </ul> -->
            </li>

            <li v-if="!auth">
              <a href="#" class="button ripple-effect" style="color: white"
                >Create a Job</a
              >
            </li>
          </ul>
        </nav>
        <div class="clearfix"></div>
        <!-- Main Navigation / End -->
      </div>
      <!-- Left Side Content / End -->

      <!-- Right Side Content / End -->
      <div v-if="auth" class="right-side">
        <!--  User Notifications -->

        <!--  User Notifications / End -->

        <!-- User Menu -->
        <div class="header-widget">
          <!-- Messages -->
          <div class="header-notifications user-menu">
            <div class="header-notifications-trigger">
              <a href="#"
                ><div class="user-avatar status-online">
                  <img :src="image" alt="" /></div
              ></a>
            </div>

            <!-- Dropdown -->
            <div class="header-notifications-dropdown">
              <!-- User Status -->
              <div class="user-status">
                <!-- User Name / Avatar -->
                <div class="user-details">
                  <div class="user-avatar status-online">
                    <img :src="image" alt="" />
                  </div>
                  <div class="user-name">
                    {{ user.username }} <span>{{ user.account_type }}</span>
                  </div>
                </div>

                <!-- User Status Switcher -->
              </div>

              <ul class="user-menu-small-nav">
                <li>
                  <a href="/home"
                    ><i class="icon-material-outline-dashboard"></i>
                    Dashboard</a
                  >
                </li>

                <li>
                  <a href="/logout" @click.prevent="logout"
                    ><i class="icon-material-outline-power-settings-new"></i>
                    Logout</a
                  >
                </li>

                <form
                  id="logout-form"
                  action="/logout"
                  method="POST"
                  style="display: none"
                >
                  <input type="hidden" name="_token" :value="token" />
                </form>
                <!-- end logout form -->
              </ul>
            </div>
          </div>
        </div>
        <!-- User Menu / End -->

        <!-- Mobile Navigation Button -->
        <span class="mmenu-trigger">
          <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </span>
      </div>

      <div v-else class="right-side">
        <div class="header-widget">
          <a href="/login" class="log-in-button"
            ><i class="icon-feather-log-in"></i> <span>My Account</span></a
          >
        </div>

        <!-- Mobile Navigation Button -->
        <span class="mmenu-trigger">
          <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </span>
      </div>
      <!-- Right Side Content / End -->
    </div>
  </div>
</template>

<script>
export default {
  name: "headercomponent",

  props: ["auth"],
  data() {
    return {
      token: document.head.querySelector('meta[name="csrf-token"]').content,
      user: {},
    };
  },
  created() {
    this.getuser();
  },
  methods: {
    getuser() {
      if (this.auth) {
        axios
          .get("/api/user")
          .then((res) => {
            this.user = res.data.data;
            this.image = res.data.data.avatar;
          })
          .catch((err) => console.log(err));
      }
    },
    logout() {
      document.getElementById("logout-form").submit();
    },
  },
};
</script>

<style>
</style>
