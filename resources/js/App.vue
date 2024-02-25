<!-- App.vue -->
<template>
  <div id="app">
    <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
          <a class="navbar-brand" to="/">Goal.com</a>
          <div class="collapse navbar-collapse text-secondary" id="navbarNav">
            <ul class="navbar-nav">
              <li v-for="(menu, index) in menus" :key="index" class="nav-item">
                <router-link class="nav-link" :to="menu.link">{{
                  menu.name
                }}</router-link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <RouterView />
  </div>
</template>

<script>

export default {
  name: "App",
  data() {
    return {
      menus: [
        {
          name: "Scores",
          link: "/",
        },
        {
          name: "League",
          link: "/league",
        },
        {
          name: "Teams",
          link: "/teams",
        },
        {
          name: "Register",
          link: "/registerTeam",
        },
      ],
    };
  },
};
</script>

<style scoped>
#app {
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
}

.bg-black {
  background-color: black;
}

.navbar-dark .navbar-nav .nav-link {
  color: white;
}

.navbar-dark .navbar-brand {
  color: white;
}
</style>
