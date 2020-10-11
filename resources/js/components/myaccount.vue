<template>
       <!-- Row -->
                    <div class="row">

                        <!-- Dashboard Box -->
                        <div class="col-xl-12">
                            <div class="dashboard-box margin-top-0">

                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
                                </div>

                                <div class="content with-padding padding-bottom-0">

                                    <div class="row">

                                        <div class="col-auto">
                                            <div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
                                                <img class="profile-pic" :src="image" alt="" />
                                                <div class="upload-button"></div>
                                                <input class="file-upload" type="file" id="myfile" accept="image/*" @change="newimage"/>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="row">

                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Username</h5>

                                                    <input type="text" class="with-border" v-model="user.username" disabled readonly>
                                                    </div>
                                                </div>
                                                  <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Email</h5>
                                                    <input type="email" class="with-border" v-model="user.email" readonly>
                                                    </div>
                                                </div>



                                                <div class="col-xl-6">
                                                    <!-- Account Type -->
                                                    <div class="submit-field">
                                                        <h5>Account Type</h5>
                                                        <div class="account-type">
                                                            <div>
                                                                <input value="hustlancer" v-model="user.account_type" type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio"/>
                                                                <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
                                                            </div>

                                                            <div>
                                                                <input value="employer" v-model="user.account_type" type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
                                                                <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Mobile</h5>
                                                    <input type="text" class="with-border" v-model="user.mobile" >
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
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <div class="bidding-widget">
                                                        <!-- Headline -->
                                                        <span class="bidding-detail">Set your <strong>minimal hourly rate </strong></span>

                                                        <!-- Slider -->
                                                        <div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
                                                    <input class="bidding-slider" type="text" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" :data-slider-value="auth"  data-slider-step="1" data-slider-tooltip="hide"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Skills <i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills"></i></h5>

                                                    <!-- Skills List -->
                                                    <div class="keywords-container">
                                                        <div class="keyword-input-container">
                                                            <input v-model="skill" type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>
                                                            <button @click.prevent="addskill()" class="keyword-input-button ripple-effect" :disabled="skill.length < 1 "><i class="icon-material-outline-add"></i></button>
                                                        </div>
                                                        <div class="keywords-list">


                                                            <span v-for="skill in user.skills" :key="skill.id" class="keyword"><span class="keyword-remove"></span><span class="keyword-text">{{skill.skill}}</span></span>

                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Attachments</h5>

                                                    <!-- Attachments -->
                                                    <div class="attachments-container margin-top-0 margin-bottom-0">

                                                        <div class="attachment-box ripple-effect" v-for="attachment in user.attachments" :key="attachment.id">
                                                            <span>{{attachment.name}}</span>
                                                            <i>{{attachment.type}}</i>
                                                            <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                                        </div>

                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <!-- Upload Button -->
                                                    <div class="uploadButton margin-top-0">
                                                        <input class="uploadButton-input" type="file" id="upload" @change="addattachment"/>
                                                        <label class="uploadButton-button ripple-effect" for="upload">Upload File</label>
                                                        <span class="uploadButton-file-name" id="uploadButton-file">Maximum file size: 10 MB</span>
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
                                                    <input type="text" class="with-border" placeholder="e.g Full stack Developer" v-model="user.tagline">
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Category</h5>
                                                    <select class="selectpicker with-border" data-size="7" title="location" data-live-search="true" v-model="user.location">
                                                        <option value="AR" selected>Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Côte d'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US" selected>United States</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xl-12">
                                                <div class="submit-field">
                                                    <h5>Introduce Yourself</h5>
                                                <textarea cols="30" rows="5" class="with-border" v-model="user.bio"></textarea>
                                                </div>
                                            </div>

                                               <!-- Button -->
                        <div class="col-xl-12">
                            <a href="javascript:void(0)" class="button ripple-effect big margin-top-30" @click="submitform">Save Changes</a>
                        </div>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                            </div>
                        </div>


                        <!-- Dashboard Box -->
                        <div class="col-xl-12">
                            <div id="test1" class="dashboard-box">

                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
                                </div>

                                <div class="content with-padding">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Current Password</h5>
                                                <input type="password" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>New Password</h5>
                                                <input type="password" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-4">
                                            <div class="submit-field">
                                                <h5>Repeat New Password</h5>
                                                <input type="password" class="with-border">
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="checkbox">
                                                <input type="checkbox" id="two-step" checked>
                                                <label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="col-xl-12">
                            <a href="#" class="button ripple-effect big margin-top-30">Change Password</a>
                        </div>

                    </div>
                    <!-- Row / End -->
</template>
<script>
export default {
    name:'myaccount',
    props:['auth'],
    data(){
        return{
            user:{},
            skill:'',
            image:'',
            attachments:'',


        }
    },
    created(){
        this.getuser()
    },
    methods:{
        addattachment(){
            let files=document.querySelector('#upload');

          this.attachments=files.files[0];

        },
        getuser(){
            axios.get('/api/user').then((res)=>{
                this.user=res.data.data;
                this.image=res.data.data.avatar;

                console.log(res)
            }).catch(err=>console.log(err))

        },
        submitform(){
            let rate=document.getElementById('biddingVal').innerText;





            let formData= new FormData();
            formData.append('attachments',this.attachments);
            formData.append('rate',rate);
            formData.append('account_type',this.user.account_type);
            formData.append('mobile',this.user.mobile);
            formData.append('tagline',this.user.tagline);
            formData.append('nationality',this.user.location);
            formData.append('bio',this.user.bio);



            axios.post('/api/updateuser',formData,{
                headers:{
                    'Content-Type':'multipart/form-data'
                }
            }).then((res)=>{
                this.user=res.data.data
                this.attachments=''
                document.getElementById('uploadButton-file').innerHTML="Maximum file size: 10 MB";
                }).catch(e=>console.log(e))

        },
        addskill(){
           axios.post('/api/adduserskill',{
               skill: this.skill,
           }).then((res)=>this.user.skills=res.data.data).catch((e)=>console.log(e))

           this.skill='';
        },

        newimage(e){

            let files=e.target.files || e. dataTranfer.files
            if(!files.length)
                return;
            this.createImage(files[0]);
            this.avatar=e.target.files[0];
        },
        createImage(file){
            let reader=new FileReader();
            let vm=this;
            reader.onload=(e)=>{
                vm.image=e.target.result;
            };
            reader.readAsDataURL(file);
            let imagefile=document.querySelector('#myfile');

            let formData= new FormData();
            formData.append('file',imagefile.files[0]);


            axios.post('/api/changeavatar',formData,{
                headers:{
                    'Content-Type':'multipart/form-data'
                }
            }).then(res=>this.image=res.data).catch(e=>console.log(e))
        }
    }
}
</script>
<style scoped>

</style>
