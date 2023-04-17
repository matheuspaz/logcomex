<script setup>

</script>

<template>
  <div class="filter">
    <h3 class="text-center py-3">Filtros</h3>

    <v-select class="select" label="Code" density="compact"
      :items="['California', 'Colorado', 'Florida', 'Georgia', 'Texas', 'Wyoming']"></v-select>

    <v-select class="select" label="Description" density="compact"
      :items="['California', 'Colorado', 'Florida', 'Georgia', 'Texas', 'Wyoming']"></v-select>

    <v-select class="select" label="Priority" density="compact"
      :items="['California', 'Colorado', 'Florida', 'Georgia', 'Texas', 'Wyoming']"></v-select>

    <v-select class="select" label="Quantity" density="compact"
      :items="['California', 'Colorado', 'Florida', 'Georgia', 'Texas', 'Wyoming']"></v-select>
  </div>
</template>

<style scoped>
.select {
  margin: 0 10px;
}

.filter {
  height: 100%;
  width: 200px;
  background-color: #CCC;
}
</style>
