<template>
  <div>
  <form action="/api/senddoubt" type="POST">
  <div class="columns">
    <div class="column is-6">
  <div class="select is-warning is-fullwidth">
    <select>
      <option>Selecciona el professor</option>
      <option v-for="(teacher, index) in teachers.data" :key="index" v-bind:value='teacher.id'>{{ teacher.name }} {{ teacher.lastname }}</option>
    </select>
  </div>
    </div>
  <div class="column is-6">
    <input class="input is-warning" type="text"
           placeholder="Escriu el teu assumpte">
  </div>
  </div>
  <textarea id="myeditorinstance">Hello, World!</textarea>
  <button class="button-send">
    Enviar&emsp;<i class="fas fa-paper-plane"></i>
  </button>
  </form>
  </div>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      teachers: {
        type: Array,
        default: null
      },
    };
  },
  mounted() {
    this.list();
  },
  methods: {
    list() {
      axios.get('/api/teachers')
          .then((response) => {
            this.teachers = response;
            console.log(response);
          });
    }
  }
};

</script>