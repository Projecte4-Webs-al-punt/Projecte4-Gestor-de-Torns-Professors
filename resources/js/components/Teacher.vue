<template>
  <div>
    <article id="alert-error" class="message is-danger is-hidden">
      <div class="message-body">
        <strong> Hi ha hagut un error en el enviament de dades, </strong> revisa els camps introduits.
      </div>
    </article>
    <article id="alert-success" class="message is-success is-hidden">
      <div class="message-body">
        <strong> Les dades s'han enviat correctament, </strong> espera la resposta del teu professor.
      </div>
    </article>
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
      this.message = tinymce.get("myeditorinstance").getContent(self.value);
      axios.post('/senddoubt', {
        teacher: this.teacher,
        subject: this.subject,
        message: this.message
      }).then(function (response) {
        if(response.status === 200){
          document.getElementById("alert-success").classList.remove("is-hidden");
          document.getElementById("alert-error").classList.add("is-hidden");
        }
      })
    .catch(function (error) {
      document.getElementById("alert-error").classList.remove("is-hidden");
      document.getElementById("alert-success").classList.add("is-hidden");

    });
      tinymce.get("myeditorinstance").setContent('');
      this.teacher = 'Selecciona el Professor';
      this.subject = '';
      this.message = '';
    },
  }
};

</script>