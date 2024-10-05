import HomePage from '@/views/HomePage.vue';
import PeminjamanPage from '@/views/PeminjamanPage.vue';
import { createMemoryHistory, createRouter } from 'vue-router';

const router = createRouter({
  history: createMemoryHistory(),
  routes: [
    {
      path: '/',
      component: HomePage
    },

    {
      path: '/peminjaman',
      component: PeminjamanPage
    }

  ]
})

export default router
