import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'
import VueCameraLib from 'vue-camera-lib'

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(createPinia())
app.use(router)
app.use(VueCameraLib)

app.mount('#app')
