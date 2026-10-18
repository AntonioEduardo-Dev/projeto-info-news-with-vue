<template>
  <footer class="bg-brand-dark text-white py-8 mt-12">
    <div class="container mx-auto px-4 text-center">
      <div class="flex justify-center gap-6 mb-6">
        <a href="#" class="hover:scale-125 transition-transform"><img src="/images/icons/facebook.svg" class="w-7 h-7 brightness-0 invert" alt="Facebook"></a>
        <a href="#" class="hover:scale-125 transition-transform"><img src="/images/icons/x-twitter.svg" class="w-7 h-7 brightness-0 invert" alt="X"></a>
        <a href="#" class="hover:scale-125 transition-transform"><img src="/images/icons/whatsapp.svg" class="w-7 h-7 brightness-0 invert" alt="WhatsApp"></a>
      </div>
      <p class="text-sm opacity-80 font-light">INFO NEWS {{ currentYear }} / Todos os direitos reservados</p>
      <p class="text-sm opacity-80 font-light mt-1">Autores do site / Allan 02, Antonio Eduardo 07, Daniel 21</p>
    </div>
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>
