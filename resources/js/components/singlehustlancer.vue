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
                                        <li><div class="star-rating" data-rating="4"></div></li>
                                        <li> {{hustlancer.location}}</li>
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

                    <!-- Boxed List / End -->




                </div>


                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4">
                    <div class="sidebar-container">

                        <!-- Profile Overview -->
                        <div class="profile-overview">
                            <div class="overview-item"><strong>{{hustlancer.tasks.length}}</strong><span>Jobs Done</span></div>
                            <div class="overview-item"><strong>{{hustlancer.reviews}}</strong><span>Reviews</span></div>
                        </div>

                        <!-- Button -->
                        <a href="/messages" class="apply-now-button margin-bottom-50">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></a>

                        <!-- Freelancer Indicators -->
                        <div class="sidebar-widget">
                            <div class="freelancer-indicators">




                                <!-- Indicator -->

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
                            <h3> Share</h3>



                            <!-- Copy URL -->
                            <div class="copy-url">
                                <input id="copy-url" type="text" value="" class="with-border">
                                <button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
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
