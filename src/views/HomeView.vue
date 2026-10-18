<template>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div v-for="(post, index) in posts" :key="index" class="col">
      <a href="#">
        <div class="card">
          <img :src="post.image" class="card-img-top img-fluid" style="height: 250px; object-fit: cover;" :alt="post.title">
          <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">{{ post.text }}</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</template>

<script setup>
const posts = [
  { image: '/images/posts/n2.png', title: 'Card title', text: 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' },
  { image: '/images/posts/n1.png', title: 'Card title', text: 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' },
  { image: '/images/posts/n3.png', title: 'Card title', text: 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' },
  { image: '/images/posts/n1.png', title: 'Card title', text: 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.' },
]
</script>
