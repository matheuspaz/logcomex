import { reactive } from 'vue'
import { defineStore } from 'pinia'
import axios from 'axios'

export const useJobsStore = defineStore('jobs', () => {
  const jobs = reactive({})
  const code = reactive('')
  const priority = reactive('')
  const quantity = reactive('')
  const description = reactive('')

  async function getJobsChartsFromAPI() {
    const response = await axios.get(`${import.meta.env.VITE_API_URL}/jobs/charts`)
    return response.data
  }

  return { code, quantity, priority, description, getJobsChartsFromAPI, jobs }
})
