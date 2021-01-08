<template>
    <div>
        <validation-observer
            ref="observer"
            v-slot="{ handleSubmit }">
            <b-form @submit.prevent="handleSubmit(addCustomer)">
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
                        <validation-provider
                            name="type_car"
                            :rules="{
                                required: true,
                                min: 10 , }"
                            v-slot="validationContext">
                            <b-form-group>
                                <b-form-input
                                    name="type_car"
                                    v-model="form.type_car"
                                    :state="getValidationState(validationContext)"
                                    aria-describedby="input-1-live-feedback"
                                ></b-form-input>
                                <!-- <b-form-invalid-feedback
                                    id="input-1-live-feedback">{{validationContext.errors[0]}}
                                </b-form-invalid-feedback> -->
                            </b-form-group>
                        </validation-provider>
                    </div>
                    <!--  INPUT TYPE CAR -->

                    <!--  INPUT MESSAGE -->
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
    components: { ValidationObserver , ValidationProvider},

    data() {
        return {
            form: {
                name: null,
                email: null,
                phone:null,
                message:null,
                type_car : ""
            },
        };
    },

    created() {
        this.$bus.$on("name",nameProduct=>{
            this.form.type_car = nameProduct;
        })
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
                typecar:null,
                message:null,
            };

            this.$nextTick(() => {
                this.$refs.observer.reset();
            });
        },
        
        addCustomer(){
            let url = "http://127.0.0.1:8000/api/customer";
            this.axios.post(url,this.form)
                      .then(reponse=>{
                          this.$router.push({name:"MainHome"});
                });
        }
    }
}
</script>

<style scoped>
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