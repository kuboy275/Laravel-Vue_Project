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
                        <FormContact> </FormContact>
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
import FormContact from './FormContact'
export default {
    components:{
        FormContact
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

</style>
