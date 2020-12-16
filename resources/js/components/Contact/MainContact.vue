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
                                    :icon="['fas', 'angle-double-right']"
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
                                    :icon="['fas', 'angle-double-right']"
                                    class="icon"
                                />
                            </div>
                            <div class="text">
                                <h2>Location</h2>
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
                                    :icon="['fas', 'angle-double-right']"
                                    class="icon"
                                />
                            </div>
                            <div class="text">
                                <h2>Location</h2>
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
                        <form action="" @submit.prevent="a">
                            <div class="row items">
                                <div class="col item">
                                    <input
                                        type="text"
                                        placeholder="Full Name Here"
                                    />
                                    <font-awesome-icon
                                        :icon="['fas', 'user']"
                                        class="icon"
                                    />
                                </div>
                                <div class="col item">
                                    <input
                                        type="email"
                                        placeholder="Full Name Here"
                                    />
                                    <font-awesome-icon
                                        :icon="['fas', 'envelope-open']"
                                        class="icon"
                                    />
                                </div>
                                <div class="w-100"></div>
                                <div class="col item">
                                    <input
                                        type="text"
                                        placeholder="Full Name Here"
                                    />
                                    <font-awesome-icon
                                        :icon="['fas', 'phone']"
                                        class="icon"
                                    />
                                </div>
                                <div class="col item">
                                    <input
                                        type="text"
                                        placeholder="Full Name Here"
                                    />
                                    <font-awesome-icon
                                        :icon="['fas', 'user']"
                                        class="icon"
                                    />
                                </div>
                                <div class="col-12 item item-mess">
                       
                                        <input
                                            type="text"
                                            placeholder="Full Name Here"
                            
                                        />
                                        <font-awesome-icon
                                            :icon="['fas', 'pencil-alt']"
                                            class="icon"
                                        />
                                  
                                </div>
                                <button class="btn-form">
                                    SEND MASSAGE
                                    <font-awesome-icon
                                        :icon="['fas', 'arrow-right']"
                                        class="icon"
                                    />
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d18200.97139022586!2d107.56485644342054!3d16.461206913067993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1608019497176!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</template>

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
.contact-form .items .item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: 2px solid #ececec;
    height: 50px;
    border-radius: 5px;
    margin: 0 20px 20px 0;
}

.contact-form form .items .item input {
    border: none;
    outline: none;
    font-size: 15px;
    color: #888888;
    font-weight: 400;
}
.contact-form form .items .item-mess{
    height: 150px;
    max-width: 97%!important;
    align-items: flex-start!important;
    padding-top: 20px;
}
.contact-form .items .item .icon {
    color: #0988ff;
}
.contact-form .items .btn-form{
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
.contact-form .items .btn-form:hover{
    opacity: 0.8;
}
.contact-form .items .btn-form .icon{
    margin-left: 5px;
}
</style>
