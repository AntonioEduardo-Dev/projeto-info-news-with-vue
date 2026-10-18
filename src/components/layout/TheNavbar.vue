<template>
  <nav class="sticky top-0 z-50 glass-panel border-b border-gray-200">
    <div class="container mx-auto px-6 flex justify-between items-center py-4">
      <div class="flex items-center justify-center flex-1">
        <ul class="flex gap-2 text-center font-bold uppercase tracking-widest text-xs md:text-sm">
          <li v-for="link in navLinks" :key="link.path" class="relative">
            <router-link 
              :to="link.path" 
              class="px-5 py-2 rounded-full transition-all duration-300" 
              :class="link.active ? 'bg-brand-blue text-white shadow-lg shadow-brand-blue/40' : 'text-slate-600 hover:bg-brand-blue/10 hover:text-brand-blue'"
              active-class="bg-brand-blue text-white shadow-lg shadow-brand-blue/40"
            >
              {{ link.name }}
            </router-link>
          </li>
        </ul>
      </div>
      
      <div class="flex gap-3 items-center">
        <a v-for="social in socials" :key="social.icon" href="#" class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center hover:bg-brand-blue hover:text-white transition-all duration-300 group shadow-sm">
          <img :src="'/images/icons/' + social.icon" class="w-4 h-4 group-hover:brightness-0 group-hover:invert transition-all" :alt="social.name">
        </a>
      </div>
    </div>
  </nav>
</template>

<script setup>
const navLinks = [
  { name: 'Home', path: '/' },
  { name: 'Form', path: '/form' },
  { name: 'About', path: '/about' },
  { name: 'Contact', path: '/contact' },
]
const socials = [
  { name: 'Facebook', icon: 'facebook.svg' },
  { name: 'X', icon: 'x-twitter.svg' },
  { name: 'WhatsApp', icon: 'whatsapp.svg' },
]
</script>
