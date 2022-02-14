<template>
  <div>
  <form @submit="senddoubt">
  <div class="columns">
    <div class="column is-6">
  <div class="select is-warning is-fullwidth">
    <select v-model="teacher">
      <option>Selecciona el professor</option>
      <option v-for="(teacher, index) in teachers.data" :key="index" v-bind:value='teacher.id'>{{ teacher.name }} {{ teacher.lastname }}</option>
    </select>
  </div>
    </div>
  <div class="column is-6">
    <input class="input is-warning" type="text"
           v-model="subject" placeholder="Escriu el teu assumpte">
  </div>
  </div>
  <textarea v-model="message" id="myeditorinstance">Escriu el teu problema</textarea>
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
      teacher: '',
      subject: '',
      message: '',
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
    },
    formSubmit(e) {
      e.preventDefault();
      axios.post('/api/senddoubt', {
        teacher: this.teacher,
        subject: this.subject,
        message: this.message
      })
          .then(function (response) {
            console.log(response.data);
          })
          .catch(function (error) {
            console.log(error.data);
          });
    },
  }
};

</script>