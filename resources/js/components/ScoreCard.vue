<template>
  <div class="col-md-4" v-for="(team, teamIndex) in teams" :key="teamIndex">
    <div class="card">
      <img :src="team.imageSrc" class="card-img-top" alt="Image 1" />
      <div class="card-body">
        <h5 class="card-title">name : {{ team.name }}</h5>
        <p class="card-text">score : {{ team.score }}</p>
        <p class="card-text">Booked Player: {{ team.booked }}</p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps} from 'vue';


const props = defineProps({
  teams: Array
});

</script>

<style scoped></style>
