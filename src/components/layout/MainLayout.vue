<template>
  <div>
    <TheHeader />
    <TheNavbar />
    <div class="container">
      <div class="content-box">
        <slot />
      </div>
    </div>
    <TheFooter />
  </div>
</template>

<script setup>
import TheHeader from './TheHeader.vue'
import TheNavbar from './TheNavbar.vue'
import TheFooter from './TheFooter.vue'
</script>
