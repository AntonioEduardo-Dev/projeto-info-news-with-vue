<template>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <router-link class="nav-link" to="/" active-class="active">HOME</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/form" active-class="active">FORM</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/about" active-class="active">ABOUT</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/contact" active-class="active">CONTACT</router-link>
          </li>
        </ul>
      </div>
      <div class="social-icons d-none d-lg-flex">
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
    </div>
  </nav>
</template>
