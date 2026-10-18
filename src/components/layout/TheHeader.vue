<template>
  <header class="relative w-full py-12 bg-brand-dark overflow-hidden">
    <!-- Animated background shapes -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-brand-blue/20 rounded-full -translate-x-1/2 -translate-y-1/2 blur-[100px] animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-600/10 rounded-full translate-x-1/3 translate-y-1/3 blur-[100px]"></div>
    
    <div class="container mx-auto px-4 relative z-10 flex justify-center">
      <div class="relative group">
        <div class="absolute -inset-1 bg-gradient-to-r from-brand-blue to-blue-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
        <img src="/images/header.svg" alt="header" class="relative h-20 md:h-32 object-contain transition-transform duration-500 hover:scale-105" />
      </div>
    </div>
  </header>
</template>
