<template>
     	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Post a Task</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Post a Task</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Task Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Project Name</h5>
										<input type="text" class="with-border" placeholder="e.g. build me a website" v-model="name">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Category</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Category" v-model="projectcategory">
										<option v-for="category in categories" :key="category.id">{{category.category}}</option>
										

										</select>
										
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Location  <i class="help-icon" data-tippy-placement="right" title="Leave blank if it's an online job"></i></h5>
										<div class="input-with-icon">
											<div id="autocomplete-container">
												<input id="autocomplete-input" class="with-border" type="text" placeholder="Anywhere" v-model="location">
											</div>
											<i class="icon-material-outline-location-on"></i>
										</div>
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>What is your estimated budget?</h5>
										<div class="row">
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" type="number" placeholder="Minimum" v-model="min_budget">
													<i class="currency">USD</i>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" type="number" placeholder="Maximum" v-model="max_budget">
													<i class="currency">USD</i>
												</div>
											</div>
										</div>
										<div class="feedback-yes-no margin-top-0">
											<div class="radio">
												<input id="radio-1" name="radio" type="radio"  checked value="fixed price" v-model="mode">
												<label for="radio-1"><span class="radio-label"></span> Fixed Price Project</label>
											</div>

											<!-- <div class="radio">
												<input id="radio-2" name="radio" type="radio" value="hourly project" v-model="mode">
												<label for="radio-2"><span class="radio-label"></span> Hourly Project</label>
											</div> -->
										</div>
									</div>
								</div>

								<div class="col-xl-6">
									<div class="submit-field">
										<h5>What skills are required? <i class="help-icon" data-tippy-placement="right" title="Up to 5 skills that best describe your project"></i></h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
												<input type="text" class="keyword-input with-border" placeholder="Add Skills" v-model="newskill"/>
												<button @click.prevent="newskilladd()" class="keyword-input-button ripple-effect" :disabled="newskill.length < 1 "><i class="icon-material-outline-add"></i></button>
											</div>
											<div class="keywords-list">
                                               
                                                           
                                                            
                                                            <span v-for="skill in skills" :key="skill.id" class="keyword"><span class="keyword-remove"></span><span class="keyword-text">{{skill.skill}}</span></span>
                                                           
                                                       
                                            </div>
											<div class="clearfix"></div>
										</div>

									</div>
								</div>

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Describe Your Project</h5>
										<textarea cols="30" rows="5" class="with-border" v-model="description"></textarea>
										<div class="uploadButton margin-top-30">
											<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your project</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<a href="#" class="button ripple-effect big margin-top-30" @click="submitform()"><i class="icon-feather-plus"></i> Post a Task</a>
				</div>

			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2018 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->
</template>
<script>
export default {
    name:'posttask',
    data(){
        return{
            name:'',
            projectcategory:'',
            location:'',
            min_budget:'',
            max_budget:'',
            skills:[],
            mode:'fixed price',
            description:'',
            attachments:[],
            newskill:'',
            categories:[],
            newtask:{},
        }

    },
created(){
	this.getcategories()
	
},
    methods:{
        getcategories(){
            axios.get('/api/getcategories').then((res)=>{this.categories=res.data.data}).catch((e)=>{console.log(e)})
        },
        newskilladd(){
            axios.post('/api/newskill',{
                skill:this.newskill
            }).then((res)=>{
               this.skills.push(res.data.data)
                this.newskill=''
            }).catch((e)=>{
                console.log(e)
            })

        },
        submitform(){
           
            let skillarray=JSON.stringify(this.skills)
             let formData= new FormData();
            formData.append('name',this.name);
            formData.append('category',this.projectcategory);
            formData.append('location',this.location);
            formData.append('min_budget',this.min_budget);
            formData.append('max_budget',this.max_budget);
            formData.append('skills',skillarray);
            formData.append('mode',this.mode);
            formData.append('description',this.description);

             axios.post('/api/newtask',formData,{
                headers:{
                    'Content-Type':'multipart/form-data'
                }
            }).then((res)=>{
            this.name=''
            this.projectcategory=''
            this.location=''
            this.min_budget=''
            this.max_budget=''
            this.skills=[]
            this.mode='fixed price'
            this.description=''
            this.newtask=res.data.data

            this.uploadtaskattachments()
             }).catch((e)=>{
                 console.log(e)
             })

            


            
        },
        uploadtaskattachments(){
            let attachments=document.querySelector('#upload');
            
            for(let i=0; i < attachments.files.length; i++ ){
                
                let formData= new FormData();
            formData.append('attachments',attachments.files[i]);
            formData.append('task',this.newtask.id);
         

            axios.post('/api/uploadtaskattachments',formData,{
                headers:{
                    'Content-Type':'multipart/form-data'
                }
            }).then((res)=>{
                
            }).catch(e=>console.log(e))
            }

             let origin=window.location.origin
            window.location.replace(origin+'/managetasks')
            
        }
    }
    
}
</script>
<style scoped>

</style>