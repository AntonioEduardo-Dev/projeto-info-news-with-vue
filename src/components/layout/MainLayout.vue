<template>
  <div class="min-h-screen flex flex-col">
    <TheHeader />
    <TheNavbar />
    <main class="flex-grow container mx-auto px-4 py-8">
      <div class="content-box p-6 md:p-10 min-h-[60vh]">
        <slot />
      </div>
    </main>
    <TheFooter />
  </div>
</template>

<script setup>
import TheHeader from './TheHeader.vue'
import TheNavbar from './TheNavbar.vue'
import TheFooter from './TheFooter.vue'
</script>
