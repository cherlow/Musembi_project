<template>
    <div>
         <!-- Titlebar
        ================================================== -->
        <div class="single-page-header freelancer-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-page-header-inner">
                            <div class="left-side">
                                <div class="header-image freelancer-avatar"><img :src="hustlancer.avatar" alt=""></div>
                                <div class="header-details">
                                    <h3>{{hustlancer.name}} <span>{{hustlancer.tagline}}</span></h3>
                                    <ul>
                                        <li><div class="star-rating" data-rating="3"></div></li>
                                        <li><img class="flag" src="/images/flags/de.svg" alt=""> {{hustlancer.location}}</li>
                                        <li><div class="verified-badge-with-title">Verified</div></li>
                                    </ul>
                                </div>
                            </div>
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
                    
                    <!-- Page Content -->
                    <div class="single-page-section">
                        <h3 class="margin-bottom-25">About Me</h3>
                       {{hustlancer.bio}}
                    </div>
        
                    <!-- Boxed List -->
                    <div class="boxed-list margin-bottom-60">
                        <div class="boxed-list-headline">
                            <h3><i class="icon-material-outline-thumb-up"></i> Work History and Feedback</h3>
                        </div>
                        <ul class="boxed-list-ul" v-if="hustlancer.tasks">
                            <li v-for="task in hustlancer.tasks" :key="task.task">
                                <div class="boxed-list-item">
                                    <!-- Content -->
                                    <div class="item-content" v-if="task.review">
                                        <h4>{{task.task}} <span>Rated as Freelancer</span></h4>
                                        <div class="item-details margin-top-10">
                                            <div class="star-rating" :data-rating="task.review.rating"></div>
                                            <div class="detail-item"><i class="icon-material-outline-date-range"></i> {{task.review.created}}</div>
                                        </div>
                                        <div class="item-description">
                                            <p>{{task.review.review}}</p>
                                        </div>
                                    </div>
                                    <div class="item-content" v-else>
                                         <h4>{{task.task}} <span> no review yet</span></h4>
                                    </div>
                                </div>
                            </li>
                            
                           
                        </ul>
                        <div v-else>
                            <br>
                            <h3 class="text-center"><i>no completed jobs yet...</i></h3>
                        </div>
        
                        <!-- Pagination -->
                        <div class="clearfix"></div>
                        <div class="pagination-container margin-top-40 margin-bottom-10">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#" class="ripple-effect current-page">1</a></li>
                                    <li><a href="#" class="ripple-effect">2</a></li>
                                    <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Pagination / End -->
        
                    </div>
                    <!-- Boxed List / End -->
                    
                   
                    
        
                </div>
                
        
                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar-container">
                        
                        <!-- Profile Overview -->
                        <div class="profile-overview">
                            <div class="overview-item"><strong>${{hustlancer.rate}}</strong><span>Hourly Rate</span></div>
                            <div class="overview-item"><strong>{{hustlancer.tasks.length}}</strong><span>Jobs Done</span></div>
                            <div class="overview-item"><strong>{{hustlancer.reviews}}</strong><span>Reviews</span></div>
                        </div>
        
                        <!-- Button -->
                        <a href="/messages" class="apply-now-button margin-bottom-50">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></a>
        
                        <!-- Freelancer Indicators -->
                        <div class="sidebar-widget">
                            <div class="freelancer-indicators">
        
                               
        
                                
                                <!-- Indicator -->
                                <div class="indicator">
                                    <strong>{{hustlancer.ontime}}%</strong>
                                    <div class="indicator-bar" :data-indicator-percentage="hustlancer.ontime"><span></span></div>
                                    <span>On Time</span>
                                </div>	
                                                    
                                <!-- Indicator -->
                                <div class="indicator">
                                    <strong>{{hustlancer.onbudget}}%</strong>
                                    <div class="indicator-bar" :data-indicator-percentage="hustlancer.onbudget"><span></span></div>
                                    <span>On Budget</span>
                                </div>
                            </div>
                        </div>
                       
        
                        <!-- Widget -->
                        <div class="sidebar-widget">
                            <h3>Skills</h3>
                            <div class="task-tags">
                                <span v-for="skill in hustlancer.skills" :key="skill.id">{{skill.skill}}</span>
                                
                                
                            </div>
                        </div>
        
                         <!-- Widget -->
                        <div class="sidebar-widget">
                            <h3>Attachments</h3>
                            <div class="attachments-container">
                                <a v-for="attachment in hustlancer.attachments" :key="attachment.id" :href="'/storage/attachments/'+attachment.link" class="attachment-box ripple-effect"><span>{{attachment.name}}</span><i>{{attachment.type}}</i></a>
                                
                            </div>
                        </div>
        
                        <!-- Sidebar Widget -->
                        <div class="sidebar-widget">
                            <h3>Bookmark or Share</h3>
        
                            <!-- Bookmark Button -->
                            <button class="bookmark-button margin-bottom-25">
                                <span class="bookmark-icon"></span>
                                <span class="bookmark-text">Bookmark</span>
                                <span class="bookmarked-text">Bookmarked</span>
                            </button>
        
                            <!-- Copy URL -->
                            <div class="copy-url">
                                <input id="copy-url" type="text" value="" class="with-border">
                                <button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
                            </div>
        
                            <!-- Share Buttons -->
                            <div class="share-buttons margin-top-25">
                                <div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
                                <div class="share-buttons-content">
                                    <span>Interesting? <strong>Share It!</strong></span>
                                    <ul class="share-buttons-icons">
                                        <li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
                                        <li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
                                        <li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
                                        <li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
        
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
    name:"singlehustlancer",
    props:['resource'],
    data(){
        return{
            hustlancer:{}
        }

    },
    created(){
        this.hustlancer=JSON.parse(this.resource)
    }
}
</script>

<style scoped>

</style>