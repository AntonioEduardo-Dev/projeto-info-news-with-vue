<template>
  <footer>
    <div class="social-icons mb-2">
      <a href="#" target="_blank" rel="noopener noreferrer">
        <img src="/images/icons/facebook.svg" alt="Facebook">
      </a>
      <a href="#" target="_blank" rel="noopener noreferrer">
        <img src="/images/icons/x-twitter.svg" alt="X">
      </a>
      <a href="#" target="_blank" rel="noopener noreferrer">
        <img src="/images/icons/whatsapp.svg" alt="WhatsApp">
      </a>
    </div>
    <p class="mb-2 mt-0">INFO NEWS {{ currentYear }} / Todos os direitos reservados</p>
    <p class="mb-2 mt-0">Autores do site / Allan 02, Antonio Eduardo 07, Daniel 21</p>
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>
