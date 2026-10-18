<template>
  <form @submit.prevent="handleSubmit">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputName">Nome</label>
        <input type="text" class="form-control" id="inputName" placeholder="Nome" v-model="formData.name">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" v-model="formData.email">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Cidade</label>
        <input type="text" class="form-control" id="inputCity" v-model="formData.city">
      </div>
      <div class="form-group col-md-4">
        <label for="inputEstado">Estado</label>
        <select id="inputEstado" class="form-control" v-model="formData.state">
          <option value="">Escolher...</option>
          <option value="SP">São Paulo</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="MG">Minas Gerais</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputCEP">CEP</label>
        <input type="text" class="form-control" id="inputCEP" v-model="formData.cep">
      </div>
    </div>
    <div class="form-row mt-3">
      <div class="form-group col-md-6">
        <button type="submit" class="btn btn-dark">Enviar</button>
        <button type="button" class="btn btn-dark" @click="resetForm">Limpar</button>
      </div>
    </div>
  </form>
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
  alert('Formulário enviado com sucesso!')
}
const resetForm = () => {
  formData.name = ''
  formData.email = ''
  formData.city = ''
  formData.state = ''
  formData.cep = ''
}
</script>
