<template>
  <div class="b-table has-pagination">
    <div class="table-wrapper has-mobile-cards">
      <table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
        <thead>
        <tr>
          <th><abbr title="Avatar"></abbr>#</th>
          <th><abbr title="Codi identificador">Id</abbr></th>
          <th><abbr title="Nom de l'alumne">Nom i cognom</abbr></th>
          <th><abbr title="Correu Electrònic">Email</abbr></th>
          <th><abbr title="Numero de Telefón">Telefón</abbr></th>
          <th class="has-text-right"><abbr  title="Accions">Accions</abbr></th>
        </tr>
        </thead>
        <tbody v-if="users && users.data.length > 0">
          <tr v-for="(user, index) in users.data" :key="index">
            <td class="is-image-cell">
              <div class="image">
                  <img src="https://bulma.io/images/placeholders/128x128.png" class="is-rounded">
              </div>
            </td>
            <td data-label="Id">{{ user.id }}</td>
            <td data-label="Nom">{{ user.name }} {{ user.lastname }}</td>
            <td data-label="Email">{{ user.email }}</td>
            <td data-label="Phone">{{ user.phone }}</td>
            <td class="is-actions-cell">
              <div class="buttons is-right">                                         
                <button class="button is-small is-primary" type="button">
                  <span class="icon"><i class="fas fa-edit"></i></span>
                </button>
                <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash"></i></span>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
        <body v-else>
          <tr>
            <td>No hi han Registres</td>
          </tr>
        </body>
      </table>
    </div>
    <div class="notification">
      <div class="level">
          <div class="level-left">
              <div class="level-item">
                  <div class="buttons has-addons">
                      <button type="button" class="button" @click="list(1)">1</button>
                      <button type="button" class="button" @click="list(2)">2</button>
                      <button type="button" class="button" @click="list(4)">3</button>
                  </div>
              </div>
          </div>
          <div class="level-right">
              <div class="level-item">
                  <small>Page 1 of 3</small>
              </div>
          </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import pagination from "laravel-vue-pagination";

export default {
  name: "CrudUsuaris", 
  components: {
    pagination
  }, 
  data() {
    return {
      users: {
        type: Object, 
        default: null
      }
    }
  }, 
  mounted() {
    this.list();
  }, 
  methods: {
    list(page=1) {
      axios.get(`/api/users?page=${ page }`)
      .then(({data}) => {
        this.users = data;
      });
    }
  }
}
</script>

<style>
</style>

<style scoped>
    .pagination{
        margin-bottom: 0;
    }
</style>