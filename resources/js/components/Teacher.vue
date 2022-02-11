<template>
  <div class="select is-warning is-fullwidth">
    <select>
      <option>Selecciona el professor</option>
      <option v-for="(teacher, index) in teachers.data" :key="index">{{ teacher.name }} {{ teacher.lastname }}</option>
    </select>
  </div>
</template>
<!-- https://www.positronx.io/create-laravel-vue-js-crud-single-page-application/ -->
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