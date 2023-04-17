<script setup>
import ChartData from '../components/ChartData.vue'
import { useJobsStore } from '@/stores/jobs'

const jobsStore = useJobsStore();

const data = await jobsStore.getJobsChartsFromAPI();

</script>

<template>
  <ChartData :data="data" />
</template>
