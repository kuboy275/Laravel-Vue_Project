<template>
  <div>
    <vueper-slides
      ref="vueperslides1"
      :arrows="false"
      :touchable="false"
      :fade="true"
      :autoplay="true"
      :bullets="false"
      @slide="$refs.vueperslides2.goToSlide($event.currentSlide.index, { emit: false })"
      fixed-height="460px"
    >
      <vueper-slide
        v-for="(slide, i) in slides"
        :key="i"
        :image="slide.image"
        v-lazy="slide.image"
      >
      </vueper-slide>
    </vueper-slides>
    <!-- SLIDE HEADER -->
    <vueper-slides
      class="no-shadow thumbnails mt-3"
      ref="vueperslides2"
      @slide="$refs.vueperslides1.goToSlide($event.currentSlide.index, { emit: false })"
      :visible-slides="slides.length"
      fixed-height="75px"
      :bullets="false"
      :touchable="false"
      :gap="2.5"
      :arrows="false"
    >
      <vueper-slide
        v-for="(slide, i) in slides"
        :key="i"
        :image="slide.image"
        @click.native="$refs.vueperslides2.goToSlide(i)"
      >
      </vueper-slide>
    </vueper-slides>
    <!-- SLIDE COMPONENTS -->
  </div>
</template>

<script>
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";
export default {
  components: {
    VueperSlides,
    VueperSlide,
  },
  data() {
    return {
      slides: [],
    };
  },
  mounted() {
    this.$store.dispatch("imageDetail", this.$route.params.id);
  },
  computed: {
    images() {
      return this.$store.getters.GET_IMAGE_DETAIL;
    },
  },
  watch: {
    images() {
      for (let i = 0; i < this.images.length; i++) {
        const path = new Object();
        path.image = this.images[i].img_path;
        this.slides.push(path);
      }
    },
  },
};
</script>

<style scoped>
/* CUSTOM SLIDE SHOW  */
.thumbnails {
  margin-top: 20px;
}
.thumbnails .vueperslide {
  border: 4px solid #fff !important;
}
.thumbnails .vueperslide--active {
  border-color: #0988ff !important;
}
.thumbnails .vueperslide {
  box-sizing: border-box;
  border: 1px solid #fff;
  transition: 0.3s ease-in-out;
  opacity: 0.7;
  cursor: pointer;
}

.thumbnails .vueperslide--active {
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
  opacity: 1;
  border-color: #000;
}
</style>
