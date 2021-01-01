<template>
    <div>
        <div class="" id="status">
            <div class="check online" v-if="isOnline" >
                <font-awesome-icon
                    :icon="['fas', 'wifi']"
                    class="icon"
                />
                <span> Kết nối internet thành công </span>
                <div class="btn-close" @click="btnCloseOnline()">
                    <font-awesome-icon
                        :icon="['fas', 'times-circle']"
                        class="icon"
                    />
                </div>
            </div>
            <div class="check offline" v-if="isOffline" >
                <font-awesome-icon
                    :icon="['fas', 'wifi']"
                    class="icon"
                />
                <span>Mất kết nối internet  </span>
                <div class="btn-close" @click="btnCloseOffline()">
                    <font-awesome-icon
                        :icon="['fas', 'times-circle']"
                        class="icon"
                    />
                </div>        
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isOnline : false,
            isOffline : false
        }
    },
    created() {
        window.addEventListener('load',this.updateStatus);
        window.addEventListener('online', this.updateStatus);
        window.addEventListener('offline', this.updateStatus);

    },
    methods: {
        
        updateStatus(event){    
            const online = document.querySelector(".online");
            const offline = document.querySelector(".offline");
            if(navigator.onLine){
                this.isOnline = true
                this.isOffline = false
            }else{
                this.isOnline = false
                this.isOffline = true
            }
        },
        btnCloseOnline(){
            this.isOnline = !this.isOnline 
        },
        btnCloseOffline(){
            this.isOffline = !this.isOffline
        }
    },
}
</script>
<style scoped>

#status{
    position: fixed;
    bottom: 30px;
    left: 30px;
    z-index: 100;
}
.check{
    width: 350px;
    height: 50px;
    border-radius: 5px;
    background-color: #4b4b4b;
    padding-left: 20px;
    line-height: 50px;
    position: relative;
}
/* .online.active,
.offline.active{
    display: block;
} */
.active{
    display: block;
}
.check .btn-close{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
    cursor: pointer;
}
.check span{
    color: #ffffff;
}

.online .icon{
    margin-right: 10px;
    color: #3ae374;
}
.offline .icon{
    color: #d1d8e0;
    margin-right: 10px;
}
.none{
    display: none;
}
</style>