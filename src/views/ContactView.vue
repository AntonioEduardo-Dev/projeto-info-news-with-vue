<template>
  <div id="form-container">
    <h3>Quem faz o site funcionar?</h3>
    <hr>
    <table class="table" id="table-funcionarios">
      <tbody>
        <tr id="tr-table">
          <td id="a1">Desenvolvedor:</td>
          <td id="a2">Contato:</td>
          <td id="a3">Email:</td>
        </tr>
        <tr id="tr-table">
          <td id="a1">Alan</td>
          <td id="a2">9 0000-9007</td>
          <td id="a3">0000.ana116@gmail.com</td>
        </tr>
        <tr id="tr-table">
          <td id="a1">Antonio Eduardo</td>
          <td id="a2">9 0000-2308</td>
          <td id="a3">0000.adriano69@gmail.com</td>
        </tr>
        <tr id="tr-table">
          <td id="a1">Francisco Daniel</td>
          <td id="a2">9 0000-9007</td>
          <td id="a3">0000.dand@gmail.com</td>
        </tr>
      </tbody>
    </table>
    <hr>
    <form @submit.prevent="handleSubmit">
      <div id="contato">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" v-model="comment"></textarea>
          <label for="floatingTextarea">Reclamações ou Sugestões para o site?</label>
        </div>
      </div>
      <div id="box-caixa">
        <br>
        <p id="pv">O que você achou do site?</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="option" id="option1" value="gostei" v-model="feedback" checked>
          <label class="form-check-label" for="option1">Gostei</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="option" id="option2" value="nao-gostei" v-model="feedback">
          <label class="form-check-label" for="option2">Não gostei</label>
        </div>
      </div>
      <div class="form-row mt-3">
        <div class="form-group col-md-6">
          <button type="submit" class="btn btn-dark">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script setup>
import { ref } from 'vue'
const comment = ref('')
const feedback = ref('gostei')
const handleSubmit = () => {
  alert('Obrigado pelo seu feedback!')
}
</script>
