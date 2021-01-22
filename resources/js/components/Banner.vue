<template>
    <div>
        <!-- START AREA MAIN HOME -->
        <div class="area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>{{ title }}</h1>
                    </div>
                    <div class="col-lg-12">
                        <h5>Home || {{ title }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- END AREA MAIN HOME -->    
    </div>
</template>

<script>
export default {
    props:['title']
}
</script>

<style>
/* AREA */

.area {
    margin-top: 40px;
    background-position: center;
    background-image: url(/photos/header/featured-title-bg.jpg);
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
</style>