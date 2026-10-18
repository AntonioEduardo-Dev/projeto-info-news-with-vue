<template>
  <div class="max-w-4xl mx-auto">
    <div class="text-center mb-16 space-y-4">
      <h2 class="text-5xl font-black text-brand-dark tracking-tighter">
        Torne-se um <span class="text-gradient">Membro</span>
      </h2>
      <p class="text-slate-500 text-lg">Preencha seus dados para acessar conteúdos exclusivos.</p>
    </div>

    <div class="bg-white p-10 md:p-16 rounded-[3rem] shadow-2xl border border-slate-100 relative overflow-hidden">
      <!-- Background decoration -->
      <div class="absolute top-0 right-0 w-32 h-32 bg-brand-blue/5 rounded-bl-full"></div>
      
      <form @submit.prevent="handleSubmit" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-8 relative z-10">
        <div class="md:col-span-2 space-y-2">
          <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Nome Completo</label>
          <input type="text" v-model="formData.name" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-brand-blue focus:bg-white outline-none transition-all" placeholder="Ex: João Silva">
        </div>
        <div class="md:col-span-2 space-y-2">
          <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">E-mail Profissional</label>
          <input type="email" v-model="formData.email" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-brand-blue focus:bg-white outline-none transition-all" placeholder="exemplo@email.com">
        </div>
        <div class="space-y-2">
          <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Cidade</label>
          <input type="text" v-model="formData.city" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-brand-blue focus:bg-white outline-none transition-all" placeholder="Sua cidade">
        </div>
        <div class="space-y-2">
          <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Estado</label>
          <select v-model="formData.state" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-brand-blue focus:bg-white outline-none transition-all appearance-none cursor-pointer">
            <option value="">Escolher...</option>
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
          </select>
        </div>
        <div class="md:col-span-2 space-y-2">
          <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">CEP</label>
          <input type="text" v-model="formData.cep" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-brand-blue focus:bg-white outline-none transition-all" placeholder="00000-000">
        </div>
        <div class="md:col-span-2 flex flex-col sm:flex-row justify-center gap-6 mt-12">
          <button type="submit" class="bg-brand-dark text-white px-12 py-4 rounded-2xl font-bold hover:bg-brand-blue transition-all shadow-xl hover:shadow-brand-blue/40 active:scale-95">
            Finalizar Cadastro
          </button>
          <button type="button" @click="resetForm" class="bg-slate-100 text-slate-600 px-12 py-4 rounded-2xl font-bold hover:bg-slate-200 transition-all active:scale-95">
            Limpar
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { reactive } from 'vue'
const formData = reactive({
  name: '',
  email: '',
  city: '',
  state: '',
  cep: ''
})
const handleSubmit = () => {
  alert('Cadastro realizado com sucesso!')
}
const resetForm = () => {
  formData.name = ''
  formData.email = ''
  formData.city = ''
  formData.state = ''
  formData.cep = ''
}
</script>
