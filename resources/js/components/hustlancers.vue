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
                <input id="" type="text" placeholder="Location" />
              </div>
              <i class="icon-material-outline-location-on"></i>
            </div>
          </div>

          <!-- Category -->
          <div class="sidebar-widget">
            <h3>Category</h3>
            <select
              class="selectpicker default"
              multiple
              data-selected-text-format="count"
              data-size="7"
              title="All Categories"
            >
              <option>Admin Support</option>
              <option>Customer Service</option>
              <option>Data Analytics</option>
              <option>Design & Creative</option>
              <option>Legal</option>
              <option>Software Developing</option>
              <option>IT & Networking</option>
              <option>Writing</option>
              <option>Translation</option>
              <option>Sales & Marketing</option>
            </select>
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
            <a href="#"
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
        <div class="accordion js-accordion hustlancers-filters">
          <!-- Accordion Item -->
          <div class="accordion__item js-accordion-item">
            <div class="accordion-header js-accordion-header">
              <i class="icon-feather-filter"></i> Filters
            </div>

            <!-- Accordtion Body -->
            <div class="accordion-body js-accordion-body">
              <!-- Accordion Content -->
              <div class="accordion-body__contents">
                <div class="col-xl-3 col-lg-4">
                  <div class="sidebar-container">
                    <!-- Location -->
                    <div class="sidebar-widget">
                      <h3>Location</h3>
                      <div class="input-with-icon">
                        <div id="">
                          <input id="" type="text" placeholder="Location" />
                        </div>
                        <i class="icon-material-outline-location-on"></i>
                      </div>
                    </div>

                    <!-- Category -->
                    <div class="sidebar-widget">
                      <h3>Category</h3>
                      <select
                        class="selectpicker default"
                        multiple
                        data-selected-text-format="count"
                        data-size="7"
                        title="All Categories"
                      >
                        <option>Admin Support</option>
                        <option>Customer Service</option>
                        <option>Data Analytics</option>
                        <option>Design & Creative</option>
                        <option>Legal</option>
                        <option>Software Developing</option>
                        <option>IT & Networking</option>
                        <option>Writing</option>
                        <option>Translation</option>
                        <option>Sales & Marketing</option>
                      </select>
                    </div>

                    <!-- Keywords -->
                    <div class="sidebar-widget">
                      <h3>Name</h3>
                      <div class="keywords-container">
                        <div class="keyword-input-container">
                          <input
                            type="text"
                            class="keyword-input"
                            placeholder="e.g. task title"
                          />
                          <button class="keyword-input-button ripple-effect">
                            <i class="icon-material-outline-add"></i>
                          </button>
                        </div>
                        <div class="keywords-list">
                          <!-- keywords go here -->
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>

                    <!-- Hourly Rate -->

                    <!-- Tags -->

                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Accordion Body / End -->
          </div>
          <!-- Accordion Item / End -->
        </div>

        <!-- my accordion end  -->
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
                  <li>Reviews <strong>0</strong></li>
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
    };
  },
  methods: {
    gethustlancers() {
      axios
        .get("/api/gethustlancers")
        .then((res) => (this.hustlancers = res.data.data))
        .catch((e) => console.log(e));
    },
  },
};
</script>
<style scoped>
</style>
