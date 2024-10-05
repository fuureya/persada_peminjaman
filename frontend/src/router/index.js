import PeminjamanPage from '@/views/PeminjamanPage.vue';
import { createMemoryHistory, createRouter } from 'vue-router';

const router = createRouter({
  history: createMemoryHistory(),
  routes: [
    {
      path: '/',
      component: PeminjamanPage
    },

  ]
})

export default router
