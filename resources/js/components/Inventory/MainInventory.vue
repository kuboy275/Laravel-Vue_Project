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
        <!-- START AREA MAIN HOME -->
        <div class="inventory py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="side-bar">
                            <div class="search">
                                <div class="col-lg-12 item">
                                    <div class="content">
                                        <h3>Search Vehicles</h3>
                                    </div>
                                    <div class="select_item">
                                        <select name="" id="">
                                            <option value="" selected
                                                >Make1</option
                                            >
                                            <option value="">Make</option>
                                            <option value="">Make</option>
                                            <option value="">Make</option>
                                            <option value="">Make</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing ">
                                <div class="col-lg-12 item">
                                    <div class="content">
                                        <h3>Search Vehicles</h3>
                                    </div>
                                    <div class="range">
                                        <div class="field">
                                            <div class="value left">0$ - </div>
                                            <div class="value right" v-text="total+'$'">  </div>
                                            <input
                                                type="range"
                                                min="0"
                                                max="2000"
                                                step="1"
                                                v-model="value_ranger_price"
                                            />

                                          
                                        </div>
                                    </div>
                                    <div class="search_price text-center mb-3">
                                        <button>
                                            Seach Now
                                            <font-awesome-icon
                                                :icon="['fas', 'angle-double-right']"
                                                class="icon_btn"
                                            />
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="color ">
                                <div class="col-lg-12 item">
                                    <div class="content">
                                        <h3>Choose Color</h3>
                                    </div>
                                    <div class="item_color">
                                        <div class="row">
                                            <div class="col-3 bg-color-item">
                                                <button class="btn_color"></button>
                                            </div>
                                            <div class="col-3 bg-color-item">
                                                <button class="btn_color"></button>
                                            </div>
                                            <div class="col-3 bg-color-item">
                                                <button class="btn_color"></button>
                                            </div>
                                            <div class="col-3 bg-color-item">
                                                <button class="btn_color"></button>
                                            </div>
                                            <div class="col-3 bg-color-item">
                                                <button class="btn_color"></button>
                                            </div>
                                            <div class="col-3 bg-color-item">
                                                <button class="btn_color"></button>
                                            </div>
                                            <div class="col-3 bg-color-item">
                                                <button class="btn_color"></button>
                                            </div>
                                            <div class="col-3 bg-color-item">
                                                <button class="btn_color"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SIDE BAR INVENTORY -->
                    <div class="col-lg-8">
                        <div class="content">
                            <div class="title">
                                <h4>Showing <span> 06 </span> of 25 Results</h4>
                            </div>
                            <div class="short">
                                <b-dropdown
                                    id="dropdown-1"
                                    text="Dropdown Button"
                                    class="m-md-2"
                                >
                                    <b-dropdown-item
                                        >First Action</b-dropdown-item
                                    >
                                    <b-dropdown-item
                                        >Second Action</b-dropdown-item
                                    >
                                    <b-dropdown-item
                                        >Third Action</b-dropdown-item
                                    >
                                </b-dropdown>
                            </div>
                        </div>
                        <div class="items">
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-6 item_img">
                                        <img
                                            src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                            width="100%"
                                            alt=""
                                        />
                                        <div class="tag_new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="col-6 item_des">
                                        <h2>New Gradant Cars</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste
                                            natus error
                                        </p>
                                        <div class="row details">
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="[
                                                        'fas',
                                                        'tachometer-alt'
                                                    ]"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> 35000mm</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'car']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Model 2020</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'gas-pump']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Mileaga 45/46</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'coins']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Price $ ( $4.8M )</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-6 item_img">
                                        <img
                                            src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                            width="100%"
                                            alt=""
                                        />
                                        <div class="tag_new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="col-6 item_des">
                                        <h2>New Gradant Cars</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste
                                            natus error
                                        </p>
                                        <div class="row details">
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="[
                                                        'fas',
                                                        'tachometer-alt'
                                                    ]"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> 35000mm</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'car']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Model 2020</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'gas-pump']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Mileaga 45/46</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'coins']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Price $ ( $4.8M )</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-6 item_img">
                                        <img
                                            src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                            width="100%"
                                            alt=""
                                        />
                                        <div class="tag_new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="col-6 item_des">
                                        <h2>New Gradant Cars</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste
                                            natus error
                                        </p>
                                        <div class="row details">
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="[
                                                        'fas',
                                                        'tachometer-alt'
                                                    ]"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> 35000mm</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'car']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Model 2020</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'gas-pump']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Mileaga 45/46</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'coins']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Price $ ( $4.8M )</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-6 item_img">
                                        <img
                                            src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                            width="100%"
                                            alt=""
                                        />
                                        <div class="tag_new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="col-6 item_des">
                                        <h2>New Gradant Cars</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste
                                            natus error
                                        </p>
                                        <div class="row details">
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="[
                                                        'fas',
                                                        'tachometer-alt'
                                                    ]"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> 35000mm</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'car']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Model 2020</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'gas-pump']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Mileaga 45/46</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'coins']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Price $ ( $4.8M )</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-6 item_img">
                                        <img
                                            src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                            width="100%"
                                            alt=""
                                        />
                                        <div class="tag_new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="col-6 item_des">
                                        <h2>New Gradant Cars</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste
                                            natus error
                                        </p>
                                        <div class="row details">
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="[
                                                        'fas',
                                                        'tachometer-alt'
                                                    ]"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> 35000mm</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'car']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Model 2020</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'gas-pump']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Mileaga 45/46</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'coins']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Price $ ( $4.8M )</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-6 item_img">
                                        <img
                                            src="http://127.1:8000/storage/inventory/car-img10.jpg"
                                            width="100%"
                                            alt=""
                                        />
                                        <div class="tag_new">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="col-6 item_des">
                                        <h2>New Gradant Cars</h2>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste
                                            natus error
                                        </p>
                                        <div class="row details">
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="[
                                                        'fas',
                                                        'tachometer-alt'
                                                    ]"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> 35000mm</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'car']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Model 2020</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'gas-pump']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Mileaga 45/46</span>
                                            </div>
                                            <div
                                                class="col-lg-6 details_item d-flex align-items-center mb-2"
                                            >
                                                <font-awesome-icon
                                                    :icon="['fas', 'coins']"
                                                    class="icon_detail mr-2"
                                                />
                                                <span> Price $ ( $4.8M )</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEMS CAR INVENTORY -->
                </div>
            </div>
        </div>
        <!-- END AREA MAIN HOME -->
        <!-- **************************************** -->
    </div>
</template>
<script>
export default {
    data() {
        return {
            value_ranger_price: 50
        };
    },
    computed: {
        total: function() {
            return this.value_ranger_price * 10 ;
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

/* INVENTORY */
/* -- SIDE BAR CSS */
.inventory .side-bar .item {
    padding: 0;
    background-color: #f1f8ff;
    margin-bottom: 30px;
    padding-bottom: 40px;
}
.inventory .side-bar .item .content {
    background-image: url(http://127.1:8000/storage/inventory/widget-bg1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 20px;
}
.inventory .side-bar .item .content h3{
    font-size: 35px;
    color: #ffffff;
    font-weight: 700;
}
.inventory .side-bar .pricing .item .content {
    background-image: url(http://127.1:8000/storage/inventory/widget-bg2.jpg);
}
.inventory .side-bar .color .item .content {
    background-image: url(http://127.1:8000/storage/inventory/widget-bg3.jpg);
}
.inventory .side-bar .pricing .item .range {
    height: 80px;
    width: 100%;
    border-radius: 10px;
padding: 20px;
}

.inventory .side-bar .pricing .item .range .field {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}
.inventory .side-bar .pricing .item .range .field .value {
    position: absolute;
    font-size: 18px;
    color: purple;
    top: -15px;
}
.inventory .side-bar .pricing .item .range .field .value.left {
    left: 0px;
}
.inventory .side-bar .pricing .item .range .field .value.right {
    left: 40px;
}
.inventory .side-bar .pricing .item .range .field input {
    height: 3px;
    width: 100%;
    background: #ddd;
    border-radius: 5px;
    outline: none;
    border: none;
}
.inventory .side-bar .pricing .item .search_price{
    padding: 20px;
}
.inventory .side-bar .pricing .item .search_price button{
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
.inventory .side-bar .pricing .item .search_price button:hover{
    opacity: 0.8;
}
.inventory .side-bar .color .item_color{
    padding: 0 20px;
}
.inventory .side-bar .color .item_color .btn_color{
    border: none;
    outline: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #ff0000;
    margin-bottom: 10px;
}
.inventory .side-bar .color .item_color .btn_color:focus{
    border: 2px solid rgb(4, 4, 194);
}
.inventory .side-bar .color .item_color .row .bg-color-item:nth-child(2) .btn_color{
    background-color: #0988ff;
}
.inventory .side-bar .color .item_color .row .bg-color-item:nth-child(3) .btn_color{
    background-color: #ff00ff;
}
.inventory .side-bar .color .item_color .row .bg-color-item:nth-child(4) .btn_color{
    background-color: #1b1464;
}
.inventory .side-bar .color .item_color .row .bg-color-item:nth-child(5) .btn_color{
    background-color: #ffffff;
    border: 2px solid gray;
}
.inventory .side-bar .color .item_color .row .bg-color-item:nth-child(6) .btn_color{
    background-color: #111111;
}
.inventory .side-bar .color .item_color .row .bg-color-item:nth-child(7) .btn_color{
    background-color: #c69c6d;
}
.inventory .side-bar .color .item_color .row .bg-color-item:nth-child(8) .btn_color{
    background-color: #ec008c;
}
.inventory .content {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    justify-content: space-between;
}
.inventory .content .title h4 {
    font-size: 18px;
    color: #232628;
    font-weight: 500;
}
.inventory .content .title h4 span {
    color: #489dec;
}
.inventory .items .item {
    overflow: hidden;
    background-color: #f5faff;
    margin-bottom: 30px;
}
.inventory .items .item .item_img {
    position: relative;
}
.inventory .items .item .item_img .tag_new {
    background-color: #0988ff;
    text-align: center;
    width: 120px;
    position: absolute;
    top: 16px;
    left: -20px;
    transform: rotate(-45deg);
}
.inventory .items .item .item_img .tag_new span {
    font-size: 14px;
    color: #ffffff;
    font-weight: 700;
    text-align: center;
    padding: 10px;
}
.inventory .items .item .item_des h2 {
    font-size: 22px;
    line-height: 28px;
    color: #232628;
    font-weight: 700;
}
.inventory .items .item .item_des p {
    font-size: 14px;
    line-height: 28px;
    color: #888888;
    font-weight: 400;
}
.inventory .items .item .details .details_item .icon_detail {
    color: #757575;
}
.inventory .items .item .details .details_item span {
    font-size: 14px;
    line-height: 28px;
    color: #888888;
    font-weight: 400;
}
/* ------------------------------------------ */
</style>
