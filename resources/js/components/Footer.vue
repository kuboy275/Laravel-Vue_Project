<template>
    <div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sub d-flex align-items-center">
                            <div class="col-lg-4 content_sub">
                                <h2>Our Newsletter</h2>
                            </div>
                            <div class="col-lg-5">
                                <input
                                    type="text"
                                    placeholder="Enter your email"
                                />
                            </div>
                            <div class="col-lg-3">
                                <button>
                                    subscribe
                                    <font-awesome-icon
                                        :icon="['fas', 'angle-double-right']"
                                        class="icon_btn"
                                    />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_main">
                    <div class="row">
                        <div class="col-lg-3 item">
                            <h3>About Us</h3>
                            <p>
                                Lorem ipsum dolor adipisci repellendus ipsum,
                                esse saepe corporis voluptate consequatur
                                corrupti sint eos reiciendis?
                            </p>
                            <div class="social d-flex align-items-center">
                                <!-- <div class="social_item" 
                                    v-for="link in links" :key="link.id" >
                                    <div  v-if="link.config_key === 'facebook' ">
                                        <a :href="`${link.config_value}`">
                                            <font-awesome-icon
                                            :icon="['fab', 'facebook-f']"
                                            class="icon_social"/>
                                        </a>
                                    </div>
                                </div> -->
                    

                                <div class="social_item">
                                    <a :href="`${facebook}`">
                                        <font-awesome-icon
                                            :icon="['fab', 'facebook-f']"
                                            class="icon_social"
                                        />
                                    </a>
                                </div>
                                <div class="social_item">
                                    <a :href="`${twitter}`">
                                        <font-awesome-icon
                                            :icon="['fab', 'twitter']"
                                            class="icon_social"
                                        />
                                    </a>
                                </div>
                                <div class="social_item">
                                    <a :href="`${instagram}`">
                                        <font-awesome-icon
                                            :icon="['fab', 'instagram']"
                                            class="icon_social"
                                        />
                                    </a>
                                </div>
                                <div class="social_item">
                                    <a :href="`${googlePlus}`">
                                        <font-awesome-icon
                                            :icon="['fab', 'google-plus-g']"
                                            class="icon_social"
                                        />
                                    </a>
                                </div>                               
                            </div>
                        </div>
                        <div class="col-lg-3 item">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <font-awesome-icon
                                        :icon="['fas', 'dot-circle']"
                                        class="icon_fter"
                                    />
                                 <router-link :to="{ name: 'PageNotFound' }">Create Post</router-link>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 item">
                            <h3>Our Services</h3>
                            <ul>
                                <li>
                                    <font-awesome-icon
                                        :icon="['fas', 'dot-circle']"
                                        class="icon_fter"
                                    />
                                    <a href="#">
                                        About Companny
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-3 item">
                            <h3>Contact Us</h3>
                            <div class="location_item d-flex align-items-center ">
                                <font-awesome-icon
                                        :icon="['fas', 'map-marker-alt']"
                                        class="icon_location"
                                />
                                <div class="text">
                                    <span>Message us</span>
                                    <h5>support@gmail.com</h5>
                                </div>
                            </div>
                            <div class="location_item d-flex align-items-center ">
                                <font-awesome-icon
                                        :icon="['fas', 'phone']"
                                        class="icon_location"
                                />
                                <div class="text">
                                    <span>Message us</span>
                                    <h5>support@gmail.com</h5>
                                </div>
                            </div>
                            <div class="location_item d-flex align-items-center ">
                                <font-awesome-icon
                                        :icon="['fas', 'envelope-open']"
                                        class="icon_location"
                                />
                                <div class="text">
                                    <span>Message us</span>
                                    <h5>support@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="coppy_right">
                        <hr>
                        <a href="#" class="onTop">
                            <font-awesome-icon
                                :icon="['fas', 'arrow-up']"
                                class="icon_onTop"
                            />
                        </a>
                    </div>
                </div>
            </div>
            <div class="coppy_right_text pb-3">
                <div class="container pt-3">
                    <div class="row d-flex align-items-center ">
                        <div class="col-lg-6 col-md-12">
                            <h5> Copyright  2019 <span> Speedy </span> All Rights Reserved </h5>
                        </div>
                        <div class="col-lg-6 col-md-12 item_text d-flex align-items-center justify-content-end">
                            <a href="#!">
                                Setting & Privacy             
                            </a>
                            <a href="#!"> News </a>
                            <a href="#!"> Need a Job? </a>
                            <a href="#!"> Shop  </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {

    data() {
        return {
            facebook:'',
            twitter:'',
            instagram:'',
            googlePlus:'',
        }
    },

    mounted() {
        this.$store.dispatch("getApiLinks");
    },

    computed: {
        links(){
            return this.$store.getters.getLinks;
        }
    },

    watch: {
        links(){
            for (let i = 0; i <this.links.length; i++) {
                if(this.links[i].config_key === "facebook"){
                    this.facebook = this.links[i].config_value;
                };
                if(this.links[i].config_key === "twitter"){
                    this.twitter = this.links[i].config_value;
                };
                if(this.links[i].config_key === "instagram"){
                    this.instagram = this.links[i].config_value;
                };
                if(this.links[i].config_key === "googlePlus"){
                    this.googlePlus = this.links[i].config_value;
                }                
            }
        }
    },

}
</script>
<style scoped>
    .footer {
        background-image: url(http://127.1:8000/storage/footer/footer-bg-light.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding-bottom: 10px;
    }
    
    .sub {
        text-align: center;
        padding: 50px 0px;
        background-color: #232628;
        transform: translateY(-50%);
        
    }
    
    .sub h2 {
        font-size: 40px;
        letter-spacing: -1px;
        color: #ffffff;
        font-weight: 700;
    }
    
    .sub input {
        width: 90%;
        border: none;
        outline: none;
        background-color: transparent;
        font-size: 14px;
        color: #9a9a9a;
        font-weight: 400;
        padding-bottom: 5px;
        border-bottom: 1px solid #3b4247;
    }
    
    .sub button {
        border: none;
        outline: none;
        background-color: #0988ff;
        border-radius: 5px;
        padding: 15px 35px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        opacity: 1;
        transition: all 0.5s ease-in-out;
    }
    
    .sub button:hover {
        opacity: 0.9;
    }
    
    .footer_main {
        margin-bottom: 30px;
    }
    
    .footer_main h3 {
        font-size: 22px;
        color: #232628;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .footer_main .item:nth-child(1) p {
        font-size: 14px;
        color: #232628;
        font-weight: 400;
        line-height: 30px;
    }
    
    .footer_main .item:nth-child(1) .social .social_item {
        width: 40px;
        height: 40px;
        border-radius: 5px;
        background-color: #4661c5;
        text-align: center;
        line-height: 42px;
        margin-right: 10px;
        opacity: 1;
        cursor: pointer;
        position: relative;
        
    }
    .footer_main .item:nth-child(1) .social .social_item a{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .footer_main .item:nth-child(1) .social .social_item:hover {
        opacity: 0.8;
    }
    
    .footer_main .item:nth-child(1) .social .social_item:nth-child(2) {
        background-color: #1ab2e8;
    }
    
    .footer_main .item:nth-child(1) .social .social_item:nth-child(3) {
        background-color: #d03086;
    }
    
    .footer_main .item:nth-child(1) .social .social_item:nth-child(4) {
        background-color: #ea4335;
    }
    
    .footer_main .item:nth-child(1) .social .social_item .icon_social {
        color: white;
        font-size: 14px;
    }
    
    .footer_main .item ul {
        list-style: none;
        padding-left: 0;
    }
    
    .footer_main .item ul li {
        display: flex;
        align-items: center;
        margin-bottom: 9px;
    }
    
    .footer_main .item ul li a {
        font-size: 14px;
        line-height: 30px;
        color: #232628;
        font-weight: 500;
        text-decoration: none;
        margin-left: 8px;
    }
    
    .footer_main .item ul li a:hover {
        color: #0988ff;
        transition: all .3s linear;
    }
    
    .footer_main .item ul li .icon_fter {
        font-size: 10px;
        color: #0988ff;
    }
    
    .footer_main .item:nth-child(4) .location_item .icon_location {
        font-size: 20px;
        color: #0988ff;
    }
    
    .footer_main .item:nth-child(4) .location_item .text {
        margin-left: 20px;
    }
    
    .footer_main .item:nth-child(4) .location_item .text span {
        font-size: 14px;
        color: #6a6a6a;
        font-weight: 600;
    }
    
    .footer_main .item:nth-child(4) .location_item .text h5 {
        font-size: 18px;
        color: #232628;
        font-weight: 600;
    }
    
    .footer .coppy_right {
        width: 100%;
        position: relative;
    }
    
    .footer .coppy_right hr {
        width: 100%;
        height: 2px;
        background-color: #e7e7e7;
    }
    
    .footer .coppy_right .onTop {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        border-radius: 5px;
        background-color: #0988ff;
        line-height: 50px;
        text-align: center;
    }
    
    .footer .coppy_right .onTop .icon_onTop {
        font-size: 16px;
        color: #ffffff;
    }
    
    .footer .coppy_right_text h5 {
        font-size: 15px;
        color: #6a6a6a;
        font-weight: 400;
        margin: 0;
    }
    
    .footer .coppy_right_text h5 span {
        color: #188FFE;
        cursor: pointer;
    }
    
    .footer .coppy_right_text h5 span:hover {
        color: #0364be;
        transition: all .3s linear;
    }
    
    .footer .coppy_right_text .item_text a {
        font-size: 15px;
        color: #6a6a6a;
        font-weight: 400;
        text-decoration: none;
        margin-right: 20px;
    }
    
    .footer .coppy_right_text .item_text a:hover {
        color: #292525;
        transition: all .3s linear;
    }
    
    @media(max-width: 991px) {
        .footer_main .item:nth-child(1) .social {
            margin-bottom: 20px;
        }
        .footer .coppy_right_text .item_text {
            margin-top: 20px;
            justify-content: flex-start!important;
        }
        .footer .sub .content_sub {
            display: none;
        }
    }
</style>