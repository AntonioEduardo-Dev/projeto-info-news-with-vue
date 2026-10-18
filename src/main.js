import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'
import './assets/main.css'
import 'bootstrap/dist/css/bootstrap.min.css'

const routes = [
  { path: '/', component: () => import('./views/HomeView.vue') },
  { path: '/about', component: () => import('./views/AboutView.vue') },
  { path: '/contact', component: () => import('./views/ContactView.vue') },
  { path: '/form', component: () => import('./views/FormView.vue') },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

const app = createApp(App)
app.use(router)
app.mount('#app')
