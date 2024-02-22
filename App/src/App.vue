<script>
// Creo variabile per il mio endpoint
const endpoint = 'http://localhost/php-todo-list-json/api/tasks/';
import axios from 'axios'
export default {
  name: 'App',
  data: ()=>({
    // Creo la mia variabile vuota per importare i dati nelle api
    tasks: []
  }),
  
  created(){
    //importo i dati tramite endpoint
    axios.get(endpoint).then(res => {
      this.tasks = res.data
    })
  }
}
</script>

<template>
  <ul>
    <li v-for="task in tasks">{{ task.text }}</li>
  </ul>
</template>

<style lang="scss">
  @use './assets/scss/style.scss';
</style>


