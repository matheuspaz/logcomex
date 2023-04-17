<script setup>
import { GChart } from 'vue-google-charts'

const props = defineProps(['data']);

const sumJobs = {};
props.data.map(job => sumJobs[job.code] = (sumJobs[job.code] || 0) + job.quantity)

const data = [['Code', 'Quantity']];
Object.keys(sumJobs).map(key => data.push([key, sumJobs[key]]));

const options = {
  title: 'Total Jobs by Code',
};

</script>

<template>
  <v-layout>
    <GChart type="PieChart" :data="data" :options="options" />
  </v-layout>
</template>
