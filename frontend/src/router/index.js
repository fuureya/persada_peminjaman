import HomePage from '@/views/HomePage.vue';
import PeminjamanPage from '@/views/PeminjamanPage.vue';
import PengembalianPage from '@/views/PengembalianPage.vue';
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
    },

    {
      path: '/pengembalian',
      component: PengembalianPage
    }

  ]
})

export default router
