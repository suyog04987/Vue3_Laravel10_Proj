<template>
  <header class="bg-dark py-5">
    <div class="container px-5">
      <div class="row gx-5 justify-content-center">
        <div class="text-center my-5">
          <h1 class="display-5 fw-bolder text-white mb-2">Live Score</h1>
          <p class="lead text-white-50 mb-4">Watch the Live Score of your Favourite Club And Hlep Us Improve!</p>
          <div class="row">
            <div class="col-sm">
              <ScoreCard :teams="teams" />
            </div>
            <div class="col-sm">
              <TimeCard :currentTime="Time" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <Fixture/>
</template>


<script setup>
import ScoreCard from './ScoreCard.vue';
import { ref, computed, onMounted } from 'vue';
import TimeCard from './timeCard.vue';
import Fixture from './fixture.vue';




const teams = ref([
  {
    name: "Lalitpur",
    score: 5,
    imageSrc: "/img/chelsea.png",
    booked: "ABCD"
  },
  {
    name: "Kathma",
    score: 4,
    imageSrc: "/img/roma.png",
    booked: "EFGH"
  },

]);
const Time = computed(() => {
  const now = new Date();
  return now.toLocaleTimeString();
});

</script>

<style></style>
  