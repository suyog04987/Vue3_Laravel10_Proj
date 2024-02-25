<template>
  <div>
    <Carousel :autoplay="5000" :wrap-around="true" class="bg-dark">
      <slide v-for="slide in slides" :key="slide.id">
        <div>
          <div class="img-div">
            <img :src="slide.image" class="carousel-img" />
          </div>
          <div class="carousel-content">
            <h2>{{ slide.heading }}</h2>
            <p>{{ slide.text }}</p>
          </div>
        </div>
      </slide>

      <template #addons>
        <Pagination />
      </template>
    </Carousel>
  </div>
</template>

<script>
import { ref } from 'vue'
import { Carousel, Pagination, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'


export default {
  name: 'Teams',
  components: {
    Carousel,
    Pagination,
    Slide
  },
  setup() {
    const slides = ref([
      {
        id: 1,
        title: 'Slide 1',
        image: "/img/crousel.jpg",
        heading: "This is heading Part",
        text: "this is text part and it is in paragraph"
      },
      {
        id: 2,
        title: 'Slide 2',
        image: "/img/crousel2.jpg",
        heading: "This is heading Part",
        text: "this is text part and it is in paragraph"

      },
      {
        id: 3,
        title: 'Slide 3',
        image: "/img/crousel3.jpg",
        heading: "This is heading Part",
        text: "this is text part and it is in paragraph"
      }
    ])

    return {
      slides
    }
  }
}
</script>

<style scoped>
.carousel-img {}

.img-div{
  height: 380px;
  width: auto;
  object-fit: fill;
}

.carousel-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.carousel-content h2 {
  font-size: 24px;
}

.carousel-content p {
  font-size: 16px;
}
</style>