<template>
    <div >
        <div class="card">
            <h3> Time: {{ currentTime }}</h3>
        </div>
    </div>
</template>

<script setup>

const props = defineProps({
    currentTime: String,
})


</script>

<style>
.container-time {

    background: white;
    border: 1px solid black;
    border-radius: 10px;

}
</style>