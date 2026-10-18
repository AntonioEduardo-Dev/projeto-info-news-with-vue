<template>
  <div class="max-w-6xl mx-auto space-y-20">
    <div class="text-center space-y-4">
      <h2 class="text-5xl font-black text-brand-dark tracking-tighter">
        Conecte-se <span class="text-gradient">Conosco</span>
      </h2>
      <p class="text-slate-500 text-lg">Dúvidas, parcerias ou feedbacks? Nossa equipe está pronta para ouvir.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">
      <div class="lg:col-span-2 space-y-8">
        <h3 class="text-2xl font-bold text-brand-dark flex items-center gap-3">
          <span class="w-2 h-8 bg-brand-blue rounded-full"></span>
          Time de Desenvolvimento
        </h3>
        <div class="space-y-4">
          <div v-for="dev in developers" :key="dev.name" class="p-6 bg-white rounded-2xl border border-slate-200 shadow-sm flex flex-col space-y-2 hover:border-brand-blue transition-all duration-300 group">
            <div class="flex justify-between items-center">
              <p class="font-bold text-lg text-brand-dark group-hover:text-brand-blue transition-colors">{{ dev.name }}</p>
              <span class="text-[10px] font-bold bg-slate-100 text-slate-500 px-2 py-1 rounded uppercase tracking-tighter">Dev</span>
            </div>
            <div class="flex flex-col gap-1">
              <p class="text-sm text-slate-500 flex items-center gap-2">
                <span class="text-brand-blue">📞</span> {{ dev.phone }}
              </p>
              <a :href="'mailto:' + dev.email" class="text-sm text-brand-blue font-medium hover:underline flex items-center gap-2">
                <span class="text-brand-blue">✉️</span> {{ dev.email }}
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="lg:col-span-3 bg-white p-10 rounded-3xl shadow-2xl border border-slate-100 space-y-8">
        <div class="text-center space-y-2">
          <h3 class="text-2xl font-bold text-brand-dark">Sua Opinião Importa</h3>
          <p class="text-slate-400 text-sm">Ajude-nos a construir o melhor portal de notícias.</p>
        </div>
        <form @submit.prevent="handleSubmit" class="space-y-6">
          <div class="space-y-2">
            <label class="text-sm font-bold text-slate-600 ml-1">Mensagem / Sugestão</label>
            <textarea 
              v-model="comment"
              class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-brand-blue focus:bg-white outline-none transition-all text-slate-700"
              rows="5" 
              placeholder="Como podemos melhorar o Info-News?"
            ></textarea>
          </div>
          
          <div class="space-y-4">
            <p class="text-sm font-bold text-slate-600 ml-1 text-center">O que você achou da experiência?</p>
            <div class="flex gap-4">
              <label class="flex-1 flex items-center justify-center gap-3 p-4 rounded-2xl border border-slate-200 cursor-pointer transition-all duration-300 has-[:checked]:bg-brand-blue has-[:checked]:text-white has-[:checked]:border-brand-blue hover:bg-slate-50">
                <input type="radio" name="option" value="gostei" v-model="feedback" class="hidden">
                <span class="font-bold">⭐ Excelente</span>
              </label>
              <label class="flex-1 flex items-center justify-center gap-3 p-4 rounded-2xl border border-slate-200 cursor-pointer transition-all duration-300 has-[:checked]:bg-red-500 has-[:checked]:text-white has-[:checked]:border-red-500 hover:bg-red-50">
                <input type="radio" name="option" value="nao-gostei" v-model="feedback" class="hidden">
                <span class="font-bold">⚠️ Regular</span>
              </label>
            </div>
          </div>

          <button type="submit" class="w-full bg-brand-dark text-white py-4 rounded-2xl font-bold hover:bg-brand-blue transition-all shadow-xl hover:shadow-brand-blue/30 active:scale-95">
            Enviar Feedback
          </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
const comment = ref('')
const feedback = ref('gostei')
const developers = [
  { name: 'Alan', phone: '9 0000-9007', email: '0000.ana116@gmail.com' },
  { name: 'Antonio Eduardo', phone: '9 0000-2308', email: '0000.adriano69@gmail.com' },
  { name: 'Francisco Daniel', phone: '9 0000-9007', email: '0000.dand@gmail.com' },
]
const handleSubmit = () => {
  alert('Obrigado pelo seu feedback!')
}
</script>
