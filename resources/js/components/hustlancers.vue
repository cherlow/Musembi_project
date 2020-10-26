<template>
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4 hustlancers-sidebar">
        <div class="sidebar-container">
          <!-- Location -->
          <div class="sidebar-widget">
            <h3>Location</h3>
            <div class="input-with-icon">
              <div id="">
                <input
                  v-model="location"
                  id=""
                  type="text"
                  placeholder="Location"
                />
              </div>
              <i class="icon-material-outline-location-on"></i>
            </div>
          </div>

          <!-- Keywords -->
          <div class="sidebar-widget">
            <h3>Name</h3>
            <div class="keywords-container">
              <div class="keyword-input-container">
                <input
                  type="text"
                  class="keyword-input"
                  placeholder="e.g. name"
                  v-model="name"
                />
              </div>
              <div class="keywords-list"><!-- keywords go here --></div>
              <div class="clearfix"></div>
            </div>
          </div>

          <!-- Hourly Rate -->

          <!-- Tags -->

          <div class="clearfix"></div>

          <div class="sidebar-widget">
            <a href="" @click.prevent="searchusers()"
              ><span class="button button-sliding-icon ripple-effect">
                Search
                <i class="icon-material-outline-arrow-right-alt"></i></span
            ></a>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-lg-8 content-left-offset">
        <h3 class="page-title">
          Huge community of designers, developers and creatives ready for your
          project.
        </h3>

        <!-- my accordion here -->

        <!-- Freelancers List Container -->
        <div
          class="freelancers-container freelancers-list-layout margin-top-35"
          v-for="hustlancer in hustlancers"
          :key="hustlancer.name"
        >
          <!--Freelancer -->
          <div class="freelancer">
            <!-- Overview -->
            <div class="freelancer-overview">
              <div class="freelancer-overview-inner">
                <!-- Bookmark Icon -->
                <span class="bookmark-icon"></span>

                <!-- Avatar -->
                <div class="freelancer-avatar">
                  <div class="verified-badge"></div>
                  <a href="javascript:void(0)"
                    ><img :src="hustlancer.avatar" alt=""
                  /></a>
                </div>

                <!-- Name -->
                <div class="freelancer-name">
                  <h4>
                    <a :href="'/hustlancers/' + hustlancer.name"
                      >{{ hustlancer.name }}
                    </a>
                  </h4>
                  <span>{{ hustlancer.tagline }}</span>

                  <!-- Rating -->
                </div>
              </div>
            </div>

            <!-- Details -->
            <div class="freelancer-details">
              <div class="freelancer-details-list">
                <ul>
                  <li>
                    Location
                    <strong
                      ><i class="icon-material-outline-location-on"></i>
                      {{ hustlancer.location }}</strong
                    >
                  </li>
                  <li>
                    Reviews <strong>{{ hustlancer.reviews.length }}</strong>
                  </li>
                  <li>
                    Job Done <strong>{{ hustlancer.tasks.length }}</strong>
                  </li>
                </ul>
              </div>
              <a
                :href="'/hustlancers/' + hustlancer.name"
                class="button button-sliding-icon ripple-effect"
                >View Profile
                <i class="icon-material-outline-arrow-right-alt"></i
              ></a>
            </div>
          </div>
          <!-- Freelancer / End -->
        </div>
        <!-- Tasks Container / End -->

        <!-- Pagination -->
        <div class="clearfix"></div>

        <!-- Pagination / End -->
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "hustlancers",
  created() {
    this.gethustlancers();
  },
  data() {
    return {
      hustlancers: [],
      name: "",
      location: "",
    };
  },
  methods: {
    gethustlancers() {
      axios
        .get("/api/gethustlancers")
        .then((res) => (this.hustlancers = res.data.data))
        .catch((e) => console.log(e));
    },

    searchusers() {
      let formData = new FormData();
      formData.append("location", this.location);
      formData.append("name", this.name);

      axios
        .post("/api/usersearch", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          this.hustlancers = res.data.data;
          console.log(res);
        })
        .catch((e) => console.log(e));
    },
  },
};
</script>
<style scoped>
</style>
