<template>
  <div class="space-y-16">
    <div class="text-center space-y-6 py-10">
      <h1 class="text-5xl md:text-7xl font-black text-brand-dark tracking-tighter">
        INFO<span class="text-gradient">NEWS</span>
      </h1>
      <div class="flex items-center justify-center gap-4">
        <div class="h-px w-12 bg-gray-300"></div>
        <p class="text-slate-500 uppercase tracking-widest text-sm font-semibold">Portal de Tecnologia & Inovação</p>
        <div class="h-px w-12 bg-gray-300"></div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <div v-for="(post, index) in posts" :key="index" class="group bg-white rounded-3xl overflow-hidden border border-slate-200 neo-shadow transition-all duration-500 hover:shadow-2xl hover:-translate-y-3">
        <div class="relative overflow-hidden aspect-video">
          <img :src="post.image" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" :alt="post.title">
          <div class="absolute top-4 left-4">
            <span class="bg-brand-blue text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-lg">
              {{ post.category }}
            </span>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
            <button @click="openNews(post)" class="bg-white text-brand-dark px-4 py-2 rounded-lg font-bold text-sm hover:bg-brand-blue hover:text-white transition-colors">
              Ler Notícia Completa
            </button>
          </div>
        </div>
        <div class="p-8 space-y-4">
          <div class="flex justify-between items-center">
             <span class="text-xs font-medium text-slate-400">{{ post.date }}</span>
             <span class="text-xs font-bold text-brand-blue">{{ post.readTime }} min read</span>
          </div>
          <h5 class="text-2xl font-bold text-brand-dark leading-tight group-hover:text-brand-blue transition-colors">
            {{ post.title }}
          </h5>
          <p class="text-slate-500 line-clamp-3 leading-relaxed">
            {{ post.text }}
          </p>
          <div class="pt-6 border-t border-slate-100 flex justify-between items-center">
            <button @click="openNews(post)" class="text-brand-blue font-bold text-sm hover:text-blue-700 transition-colors flex items-center gap-1">
              Continuar lendo <span class="text-lg">→</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const posts = [
  { id: 1, image: '/images/posts/n2.png', category: 'AI', title: 'Inovações em IA 2026', text: 'A inteligência artificial generativa está atingindo novos patamares, integrando-se organicamente ao fluxo de trabalho corporativo e redefinindo a criatividade humana.', date: 'Há 2 horas', readTime: '5' },
  { id: 2, image: '/images/posts/n1.png', category: 'Vue.js', title: 'O Futuro do Vue.js', text: 'Com a evolução do Composition API e a chegada de novas ferramentas de build, o Vue se consolida como a escolha ideal para dashboards complexos.', date: 'Há 5 horas', readTime: '3' },
  { id: 3, image: '/images/posts/n3.png', category: 'Segurança', title: 'Segurança Digital', text: 'Novas vulnerabilidades de zero-day foram detectadas em protocolos de rede comuns. Saiba como proteger sua infraestrutura agora.', date: 'Ontem', readTime: '8' },
  { id: 4, image: '/images/posts/n1.png', category: 'Cloud', title: 'Cloud Computing', text: 'A migração para arquiteturas serverless está reduzindo custos operacionais em até 40% para startups de médio porte.', date: '2 dias atrás', readTime: '4' },
]

const openNews = (post) => {
  alert(`Abrindo a notícia: ${post.title}\n\n${post.text}\n\n(Simulação: redirecionando para página de detalhes...)`);
}
</script>
