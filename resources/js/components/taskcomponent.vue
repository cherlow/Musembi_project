<template>
    <div class="row">
                <div class="col-xl-3 col-lg-4 task-sidebar">
                    <div class="sidebar-container">
                        
                        <!-- Location -->
                        <div class="sidebar-widget">
                            <h3>Location</h3>
                            <div class="input-with-icon">
                                <div id="autocomplete-container">
                                    <input id="autocomplete-input" type="text" placeholder="Location">
                                </div>
                                <i class="icon-material-outline-location-on"></i>
                            </div>
                        </div>
        
                        <!-- Category -->
                        <div class="sidebar-widget">
                            <h3>Category</h3>
                            <select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >
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
                            <h3>Keywords</h3>
                            <div class="keywords-container">
                                <div class="keyword-input-container">
                                    <input type="text" class="keyword-input" placeholder="e.g. task title"/>
                                    <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                </div>
                                <div class="keywords-list"><!-- keywords go here --></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
        
                        <!-- Budget -->
                        <div class="sidebar-widget">
                            <h3>Fixed Price</h3>
                            <div class="margin-top-55"></div>
        
                            <!-- Range Slider -->
                            <input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="10" data-slider-max="2500" data-slider-step="25" data-slider-value="[50,2500]"/>
                        </div>
        
                        <!-- Hourly Rate -->
                        <div class="sidebar-widget">
                            <h3>Hourly Rate</h3>
                            <div class="margin-top-55"></div>
        
                            <!-- Range Slider -->
                            <input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="10" data-slider-max="150" data-slider-step="5" data-slider-value="[10,200]"/>
                        </div>
        
                        <!-- Tags -->
                        <div class="sidebar-widget">
                            <h3>Skills</h3>
        
                            <div class="tags-container">
                                <div class="tag">
                                    <input type="checkbox" id="tag1"/>
                                    <label for="tag1">front-end dev</label>
                                </div>
                                <div class="tag">
                                    <input type="checkbox" id="tag2"/>
                                    <label for="tag2">angular</label>
                                </div>
                                <div class="tag">
                                    <input type="checkbox" id="tag3"/>
                                    <label for="tag3">react</label>
                                </div>
                                <div class="tag">
                                    <input type="checkbox" id="tag4"/>
                                    <label for="tag4">vue js</label>
                                </div>
                                <div class="tag">
                                    <input type="checkbox" id="tag5"/>
                                    <label for="tag5">web apps</label>
                                </div>
                                <div class="tag">
                                    <input type="checkbox" id="tag6"/>
                                    <label for="tag6">design</label>
                                </div>
                                <div class="tag">
                                    <input type="checkbox" id="tag7"/>
                                    <label for="tag7">wordpress</label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
        
                            <!-- More Skills -->
                            <div class="keywords-container margin-top-20">
                                <div class="keyword-input-container">
                                    <input type="text" class="keyword-input" placeholder="add more skills"/>
                                    <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                </div>
                                <div class="keywords-list"><!-- keywords go here --></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
        
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 content-left-offset">
        
                    <h3 class="page-title">Online Freelance Jobs For You</h3>
        
                    <div class="notify-box margin-top-15">
                         <div class="sort-by">
                            <span>Sort by:</span>
                            <select class="selectpicker hide-tick">
                                
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Random</option>
                            </select>
                        </div>
                        <div class="switch-container">
                            <!-- <label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label> -->
                        </div>
        
                       
                    </div>
                    <!-- my accordion here -->
                    <div class="accordion js-accordion task-filters">

                            <!-- Accordion Item -->
                            <div class="accordion__item js-accordion-item">
                                <div class="accordion-header js-accordion-header"> <i class="icon-feather-filter"></i> Filters</div> 
            
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
                                                                <div id="autocomplete-container">
                                                                    <input id="autocomplete-input" type="text" placeholder="Location">
                                                                </div>
                                                                <i class="icon-material-outline-location-on"></i>
                                                            </div>
                                                        </div>
                                        
                                                        <!-- Category -->
                                                        <div class="sidebar-widget">
                                                            <h3>Category</h3>
                                                            <select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >
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
                                                            <h3>Keywords</h3>
                                                            <div class="keywords-container">
                                                                <div class="keyword-input-container">
                                                                    <input type="text" class="keyword-input" placeholder="e.g. task title"/>
                                                                    <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                                                </div>
                                                                <div class="keywords-list"><!-- keywords go here --></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                        
                                                        <!-- Budget -->
                                                        <div class="sidebar-widget">
                                                            <h3>Fixed Price</h3>
                                                            <div class="margin-top-55"></div>
                                        
                                                            <!-- Range Slider -->
                                                            <input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="10" data-slider-max="2500" data-slider-step="25" data-slider-value="[50,2500]"/>
                                                        </div>
                                        
                                                        <!-- Hourly Rate -->
                                                        <div class="sidebar-widget">
                                                            <h3>Hourly Rate</h3>
                                                            <div class="margin-top-55"></div>
                                        
                                                            <!-- Range Slider -->
                                                            <input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="10" data-slider-max="150" data-slider-step="5" data-slider-value="[10,200]"/>
                                                        </div>
                                        
                                                        <!-- Tags -->
                                                        <div class="sidebar-widget">
                                                            <h3>Skills</h3>
                                        
                                                            <div class="tags-container">
                                                                <div class="tag">
                                                                    <input type="checkbox" id="tag1"/>
                                                                    <label for="tag1">front-end dev</label>
                                                                </div>
                                                                <div class="tag">
                                                                    <input type="checkbox" id="tag2"/>
                                                                    <label for="tag2">angular</label>
                                                                </div>
                                                                <div class="tag">
                                                                    <input type="checkbox" id="tag3"/>
                                                                    <label for="tag3">react</label>
                                                                </div>
                                                                <div class="tag">
                                                                    <input type="checkbox" id="tag4"/>
                                                                    <label for="tag4">vue js</label>
                                                                </div>
                                                                <div class="tag">
                                                                    <input type="checkbox" id="tag5"/>
                                                                    <label for="tag5">web apps</label>
                                                                </div>
                                                                <div class="tag">
                                                                    <input type="checkbox" id="tag6"/>
                                                                    <label for="tag6">design</label>
                                                                </div>
                                                                <div class="tag">
                                                                    <input type="checkbox" id="tag7"/>
                                                                    <label for="tag7">wordpress</label>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                        
                                                            <!-- More Skills -->
                                                            <div class="keywords-container margin-top-20">
                                                                <div class="keyword-input-container">
                                                                    <input type="text" class="keyword-input" placeholder="add more skills"/>
                                                                    <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                                                </div>
                                                                <div class="keywords-list"><!-- keywords go here --></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
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
                    <!-- Tasks Container -->
                    <div class="tasks-list-container margin-top-35">
                        
                      
                       
        
        
                        <!-- Task -->
                        <a :href="'/tasks/'+task.slug" class="task-listing" v-for="task in tasks" :key="task.id">
        
                            <!-- Job Listing Details -->
                            <div class="task-listing-details">
        
                                <!-- Details -->
                                <div class="task-listing-description">
                                    <h3 class="task-listing-title">{{task.title}}</h3>
                                    <ul class="task-icons">
                                        <li><i class="icon-material-outline-location-on"></i> {{ task.location}}</li>
                                        <li><i class="icon-material-outline-access-time"></i> {{ task.created}}</li>
                                    </ul>
                                    <p class="task-listing-text"> {{ task.details.length > 140 ? task.details.substring(0,140) + "...":task.details}}</p>
                                    <div class="task-tags">
                                        <span v-for="skill in task.skills" :key="skill.id"> {{ skill.skill}}</span>
                                       
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="task-listing-bid">
                                <div class="task-listing-bid-inner">
                                    <div class="task-offers">
                                        <strong>${{task.min_budget}} - ${{task.max_budget}}</strong>
                                        <span>{{task.mode}}</span>
                                    </div>
                                    <span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
                                </div>
                            </div>
                        </a>
        
                        <!-- Pagination -->
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Pagination -->
                                <div class="pagination-container margin-top-30 margin-bottom-60" v-if="meta.from != meta.last_page">
                                    <nav class="pagination">
                                        <ul>
                                            <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                            <li><a href="#" class="ripple-effect">1</a></li>
                                            <li><a href="#" class="current-page ripple-effect">2</a></li>
                                            <li><a href="#" class="ripple-effect">3</a></li>
                                            <li><a href="#" class="ripple-effect">4</a></li>
                                            <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Pagination / End -->
        
                    </div>
                    <!-- Tasks Container / End -->
        
                </div>
            </div>
</template>
<script>
export default {
 name:'taskcomponent',
 created(){
     this.gettasks()
 },
 data(){
     return{
         tasks:[],
         links:{},
         meta:{}
     }
 },
 methods:{
     gettasks(){
         axios.get('/api/gettasks').then((res)=>{
             this.tasks=res.data.data
             this.links=res.data.links
             this.meta=res.data.meta
             
             }).catch((e)=>console.log(e))
     }
 }
}
</script>
<style scoped>

</style>