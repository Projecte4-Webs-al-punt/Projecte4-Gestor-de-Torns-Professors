<template>
  <div>
  <div class="columns">
    <div class="column is-6">
  <div class="select is-dark is-fullwidth">
    <select v-model="teacher">
      <option selected>Selecciona el Professor</option>
      <option v-for="(teacher, index) in teachers.data" :key="index" v-bind:value='teacher.id'>
        {{ teacher.name }} {{ teacher.lastname }}
      </option>
    </select>
  </div>
    </div>
  <div class="column is-6">
    <input class="input is-dark" type="text"
           v-model="subject" placeholder="Escriu el teu assumpte">
  </div>
  </div>
  <textarea v-model="message" id="myeditorinstance">Escriu el teu problema</textarea>
  <button @click="formSubmit" class="button is-dark mt-5 is-medium is-fullwidth">
    Enviar&emsp;<span class="icon"><i class="fas fa-paper-plane"></i></span>
  </button>
  </div>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      teacher: 'Selecciona el Professor',
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
          });
    },
    formSubmit(e) {
      e.preventDefault();
      console.log(this.teacher+" "+this.message+" "+this.subject);
      axios.post('/api/senddoubt', {
        teacher: this.teacher,
        subject: this.subject,
        message: this.message
      }).then(function (response) {
        console.log(response.data);
      });
    },
  }
};

</script>