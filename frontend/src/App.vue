<script setup>
import { RouterView } from 'vue-router'
import Navbar from './components/NavBar.vue'
import FiltersBar from './components/FiltersBar.vue'
</script>

<template>
  <Suspense>
    <v-app>
      <Navbar />
      <v-main>
        <FiltersBar />
        <RouterView />
      </v-main>
    </v-app>
  </Suspense>
</template>

<style scoped>
.v-main {
  display: flex;
}
</style>
