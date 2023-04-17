<script setup>
</script>

<template>
  <v-app-bar :elevation="2" color="primary" density="compact">
    <template v-slot:prepend>
      Logcomex
    </template>
    <template v-slot:append>
      <RouterLink to="/list">
        <v-btn prepend-icon="mdi-account-group">
          List
        </v-btn>
      </RouterLink>

      <RouterLink to="/">
        <v-btn prepend-icon="mdi-chart-box">
          Chart
        </v-btn>
      </RouterLink>

    </template>
  </v-app-bar>
</template>

<style scoped>

a {
  color: white;
  border-radius: 0.3rem;
}
</style>
