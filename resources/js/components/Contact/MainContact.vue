<template>
    <div>
        <!-- START AREA MAIN HOME -->
        <div class="area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Inventory</h1>
                    </div>
                    <div class="col-lg-12">
                        <h5>Home || Inventory</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- END AREA MAIN HOME -->
        <!-- **************************************** -->
        <div class="contact-info py-5">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4 col-md-12 items">
                        <div class="info-item">
                            <div class="icon-item mr-3">
                                <font-awesome-icon
                                    :icon="['fas', 'map-marker-alt']"
                                    class="icon"
                                />
                            </div>
                            <div class="text">
                                <h2>Location</h2>
                                <span>
                                    121 King Street, Melbourne <br />
                                    Victoria 3000, USA
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 items">
                        <div class="info-item">
                            <div class="icon-item mr-3">
                                <font-awesome-icon
                                    :icon="['fas', 'envelope-open']"
                                    class="icon"
                                />
                            </div>
                            <div class="text">
                                <h2>EMail</h2>
                                <span
                                    >supportcar@gmail.com <br />
                                    infospeedy.net
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 items">
                        <div class="info-item">
                            <div class="icon-item mr-3">
                                <font-awesome-icon
                                    :icon="['fas', 'phone']"
                                    class="icon"
                                />
                            </div>
                            <div class="text">
                                <h2>Phone Us</h2>
                                <span>
                                    +812 (345) 789 99 <br />
                                    +001 (234) 566 55
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form py-5 my-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mess">
                            <h2>Message <span>Us</span></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Optio quidem alias, sapiente
                                illum iure vero ipsam ad praesentium inventore
                                soluta? Doloribus sit adipisci excepturi
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Consequatur nobis totam
                                impedit quibusdam. Incidunt possimus soluta quae
                                recusandae
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <validation-observer
                            ref="observer"
                            v-slot="{ handleSubmit }">
                            <b-form @submit.stop.prevent="handleSubmit(onSubmit)">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <validation-provider
                                            name="name"
                                            :rules="{
                                                required: true,
                                                min: 3
                                                }"
                                            v-slot="validationContext">
                                            <b-form-group>
                                                <b-form-input
                                                    placeholder="Full Name Here"
                                                    autocomplete="off"
                                                    name="name"
                                                    v-model="form.name"
                                                    :state="getValidationState(validationContext)"
                                                    aria-describedby="input-1-live-feedback">
                                                </b-form-input>
                                                <b-form-invalid-feedback
                                                    id="input-1-live-feedback">{{validationContext.errors[0]}}
                                                </b-form-invalid-feedback>
                                            </b-form-group>
                                        </validation-provider>
                                    </div>
                                    <!--  INPUT FULL NAME -->
                                    <div class="col-lg-6">
                                        <validation-provider
                                            name="email"
                                            :rules="{
                                                required: true,
                                                min: 3,
                                                email:true
                                                }"
                                            v-slot="validationContext">
                                            <b-form-group>
                                                <b-form-input
                                                    placeholder="Email Here"
                                                    name="email"
                                                    autocomplete="off"
                                                    v-model="form.email"
                                                    :state="getValidationState(validationContext)"
                                                    aria-describedby="input-1-live-feedback">
                                                </b-form-input>
                                                <b-form-invalid-feedback
                                                    id="input-1-live-feedback">{{validationContext.errors[0]}}
                                                </b-form-invalid-feedback>
                                            </b-form-group>
                                        </validation-provider>
                                    </div>
                                    <!--  INPUT EMAIL -->
                                    <div class="col-lg-6">
                                        <validation-provider
                                            name="phone"
                                            :rules="{
                                                required: true,
                                                min: 10 , }"
                                            v-slot="validationContext">
                                            <b-form-group>
                                                <b-form-input
                                                    id="example-input-3"
                                                    name="phone"
                                                    autocomplete="off"
                                                    placeholder="Phone No"
                                                    v-model="form.phone"
                                                    :state="getValidationState(validationContext)"
                                                    aria-describedby="input-1-live-feedback"
                                                ></b-form-input>
                                                <b-form-invalid-feedback
                                                    id="input-1-live-feedback">{{validationContext.errors[0]}}
                                                </b-form-invalid-feedback>
                                            </b-form-group>
                                        </validation-provider>
                                    </div>
                                    <!--  INPUT NUMBER PHONE -->
                                    <div class="col-lg-6">
                                    </div>
                                    <!--  INPUT NUMBER PHONE -->
                                    <div class="col-lg-12">
                                        <validation-provider
                                            name="message"
                                            :rules="{
                                                required: true,
                                                min: 6, }"
                                            v-slot="validationContext">
                                            <b-form-group>
                                                <b-form-textarea
                                                    id="textarea-large"
                                                    size="lg"
                                                    name="message"
                                                    placeholder="Message"
                                                    v-model="form.message"
                                                    :state="getValidationState(validationContext)"
                                                ></b-form-textarea>
                                                <b-form-invalid-feedback
                                                    id="input-1-live-feedback">{{validationContext.errors[0]}}
                                                </b-form-invalid-feedback>
                                            </b-form-group>
                                        </validation-provider>
                                    </div>
                                </div>
                                <b-button type="submit" variant="primary"> SEND MESSAGE </b-button>
                                <b-button class="ml-2" @click="resetForm()">RESET FORM</b-button>
                            </b-form>
                        </validation-observer>
                    </div>
                </div>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d18200.97139022586!2d107.56485644342054!3d16.461206913067993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1608019497176!5m2!1svi!2s"
            width="100%"
            height="450"
            frameborder="0"
            style="border:0;"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
        ></iframe>
    </div>
</template>

<script>
import {
    ValidationObserver,
    ValidationProvider,
    extend,
    localize
} from "vee-validate";
import en from "vee-validate/dist/locale/en.json";
import * as rules from "vee-validate/dist/rules";
Object.keys(rules).forEach(rule => {
    extend(rule, rules[rule]);
});
localize("en", en);
export default {
    components: {
        ValidationObserver,
        ValidationProvider
    },
    data() {
        return {
            form: {
                name: null,
                email: null,
                phone:null,
                message:null
            }
        };
    },
    methods: {
        getValidationState({ dirty, validated, valid = null }) {
            return dirty || validated ? valid : null;
        },
        resetForm() {
            this.form = {
                name: null,
                email: null,
                phone:null,
                message:null,
            };

            this.$nextTick(() => {
                this.$refs.observer.reset();
            });
        },
        onSubmit() {
            alert("Form submitted!");
        }
    }
};
</script>

<style scoped>
/* AREA */

.area {
    margin-top: 40px;
    background-position: center;
    background-image: url(http://127.1:8000/storage/inventory/featured-title-bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    height: 350px;
    text-align: center;
}
.area h1 {
    font-size: 85px;
    color: #ffffff;
    font-weight: 700;
}
.area h5 {
    font-size: 20px;
    color: #ffffff;
    font-weight: 600;
}
@media (max-width: 767px) {
    .area h1 {
        font-size: 75px;
    }
}
/* ------------------------------------------ */
.contact-info .items .info-item {
    display: flex;
    align-items: center;
    justify-content: center;
    filter: drop-shadow(0px 16px 16px rgba(235, 235, 235, 0.85));
    background-color: white;
    height: 150px;
    border-top: 5px solid #0988ff;
}
.contact-info .items:nth-child(2) .info-item {
    border-top: 5px solid #ff9600;
}
.contact-info .items:nth-child(3) .info-item {
    border-top: 5px solid #ee2a7b;
}
.contact-info .items:nth-child(2) .icon-item {
    background-color: #ff9600;
}
.contact-info .items:nth-child(3) .icon-item {
    background-color: #ee2a7b;
}
.contact-info .info-item .icon-item {
    width: 60px;
    height: 60px;
    text-align: center;
    line-height: 70px;
    border-radius: 50%;
    color: white;
    background-color: #0988ff;
}
.contact-info .info-item .icon-item .icon {
    font-size: 25px;
}
.contact-info .info-item .text h2 {
    font-size: 24px;
    line-height: 35px;
    color: #232628;
    font-weight: 700;
}
.contact-info .info-item .text span {
    font-size: 14px;
    line-height: 28px;
    color: #888888;
    font-weight: 400;
}
.contact-form .mess h2 {
    font-size: 55px;
    letter-spacing: -2px;
    line-height: 28px;
    color: #232628;
    font-weight: 700;
    margin-bottom: 20px;
}
.contact-form .mess h2 span {
    color: #8dc8ff;
    font-style: italic;
}
.contact-form .mess p {
    font-size: 16px;
    line-height: 28px;
    color: #888888;
    font-weight: 400;
}
.form-control{
    border:2px solid #ececec;
}

.form-control.is-valid{
        background-image: url(http://127.1:8000/storage/inventory/valid.jpg);
}
.form-control.is-invalid{
        background-image: url(http://127.1:8000/storage/inventory/x-valid.png);
}
.invalid-feedback{
    color: #0988ff;
    padding-left: 10px;
}
.form-control:focus{
    border-color: #0988ff;
    box-shadow: none;
}
</style>
