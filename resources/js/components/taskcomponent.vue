<template>
  <div class="row">
    <div class="col-xl-3 col-lg-4 task-sidebar">
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

        <!-- Category -->
        <div class="sidebar-widget">
          <h3>Category</h3>
          <select
            class="selectpicker default"
            data-selected-text-format="count"
            data-size="7"
            v-model="category"
            title="All Categories"
          >
            <option
              v-for="category in Categories"
              :key="category.id"
              :value="category.id"
            >
              {{ category.category }}
            </option>
          </select>
        </div>

        <!-- Keywords -->
        <div class="sidebar-widget">
          <h3>Job</h3>
          <div class="keywords-container">
            <div class="keyword-input-container">
              <input
                v-model="query"
                type="text"
                class="keyword-input"
                placeholder="e.g. job title"
              />
            </div>
            <div class="keywords-list"><!-- keywords go here --></div>
            <div class="clearfix"></div>
          </div>
        </div>

        <!-- Budget -->

        <!-- Tags -->

        <div class="clearfix"></div>

        <div class="sidebar-widget">
          <a href="" @click.prevent="submitsearch()"
            ><span class="button button-sliding-icon ripple-effect">
              Search <i class="icon-material-outline-arrow-right-alt"></i></span
          ></a>
        </div>
      </div>
    </div>
    <div class="col-xl-9 col-lg-8 content-left-offset">
      <h3 class="page-title">Jobs For You</h3>

      <!-- my accordion here -->

      <!-- my accordion end  -->
      <!-- Tasks Container -->
      <div class="tasks-list-container margin-top-35">
        <!-- Task -->
        <a
          :href="'/tasks/' + task.slug"
          class="task-listing"
          v-for="task in tasks"
          :key="task.id"
        >
          <!-- Job Listing Details -->
          <div class="task-listing-details">
            <!-- Details -->
            <div class="task-listing-description">
              <h3 class="task-listing-title">{{ task.title }}</h3>
              <ul class="task-icons">
                <li>
                  <i class="icon-material-outline-location-on"></i>
                  {{ task.location }}
                </li>
                <li>
                  <i class="icon-material-outline-access-time"></i>
                  {{ task.created }}
                </li>
              </ul>
              <p class="task-listing-text">
                {{
                  task.details.length > 140
                    ? task.details.substring(0, 140) + "..."
                    : task.details
                }}
              </p>
              <div class="task-tags">
                <span v-for="skill in task.skills" :key="skill.id">
                  {{ skill.skill }}</span
                >
              </div>
            </div>
          </div>

          <div class="task-listing-bid">
            <div class="task-listing-bid-inner">
              <span class="button button-sliding-icon ripple-effect"
                >Apply Now <i class="icon-material-outline-arrow-right-alt"></i
              ></span>
            </div>
          </div>
        </a>

        <!-- Pagination -->
        <div class="clearfix"></div>

        <!-- Pagination / End -->
      </div>
      <!-- Tasks Container / End -->
    </div>
  </div>
</template>
<script>
export default {
  name: "taskcomponent",
  created() {
    this.gettasks();
    this.getcategories();
  },
  data() {
    return {
      tasks: [],
      links: {},
      meta: {},
      location: "",
      category: "",
      query: "",
      Categories: [],
    };
  },
  methods: {
    gettasks() {
      axios
        .get("/api/gettasks")
        .then((res) => {
          this.tasks = res.data.data;
          this.links = res.data.links;
          this.meta = res.data.meta;
        })
        .catch((e) => console.log(e));
    },

    getcategories() {
      axios
        .get("/api/getcategories")
        .then((res) => {
          this.Categories = res.data.data;
        })
        .catch((e) => console.log(e));
    },

    submitsearch() {
      let formData = new FormData();
      formData.append("location", this.location);
      formData.append("category", this.category);
      formData.append("query", this.query);

      axios
        .post("/api/jobsearch", formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res);
          this.tasks = res.data.data;
          this.links = res.data.links;
          this.meta = res.data.meta;
        })
        .catch((e) => console.log(e));
    },
  },
};
</script>
<style scoped>
</style>
