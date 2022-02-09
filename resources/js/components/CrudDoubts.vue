<template>
  <div class="b-table has-pagination">
    <div class="table-wrapper has-mobile-cards">
      <table class="table is-fullwidth is-striped is-hoverable">
        <thead>
        <tr class="has-background-dark">
          <th class="has-text-light"><abbr title="Avatar"></abbr>#</th>
          <th class="has-text-light"><abbr title="Codi identificador">Id</abbr></th>
          <th class="has-text-light"><abbr title="Estat del dubte">Estat</abbr></th>
          <th class="has-text-light"><abbr title="Data d'inici">Data d'inici</abbr></th>
          <th class="has-text-light"><abbr title="Data d'inici">Missatge</abbr></th>
          <th class="has-text-light"><abbr title="Data d'inici">Student id</abbr></th>
          <th class="has-text-light has-text-right"><abbr  title="Accions">Accions</abbr></th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="(doubt, index) in doubts.data" :key="index">
          <td class="is-image-cell">
            <div class="image">
              <img src="https://bulma.io/images/placeholders/128x128.png" class="is-rounded">
            </div>
          </td>
          <td data-label="Id"><p>{{ doubt.id }}</p></td>
          <td data-label="status"><p>{{ doubt.status }}</p></td>
          <td data-label="status"><p>{{ doubt.date_opening }}</p></td>
          <td data-label="Missatge">{{ doubt.message }}</td>
          <td data-label="idstudent">{{ doubt.student_id }}</td>
          <td class="is-actions-cell">
            <div class="buttons is-right">
              <button class="button is-small is-primary" type="button">
                <span class="icon"><i class="fas fa-eye"></i></span>
              </button>
              <button class="button is-small is-warning jb-modal" data-target="sample-modal" type="button">
                <span class="icon"><i class="fas fa-reply"></i></span>
              </button>
              <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                <span class="icon"><i class="fas fa-archive"></i></span>
              </button>
            </div>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <div class="notification is-light">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="buttons has-addons">
              <div v-for="item in this.totalPages" :key="item">
                <button type="button" class="button is-warning" @click="list(item)" v-if="currentPage == item">{{ item }}</button>
                <button type="button" class="button is-dark" @click="list(item)" v-else>{{ item }}</button>
              </div>
            </div>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <small class="is-size-5">Pàgina {{ currentPage }} de {{ totalPages }}</small>
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
  name: "CrudDoubts",
  components: {
    pagination
  },
  data() {
    return {
      doubts: {
        type: Object,
        default: null
      },
      currentPage: 0,
      totalPages: 0
    }
  },
  mounted() {
    this.list();
  },
  methods: {
    list(page=1) {
      axios.get(`/api/doubts?page=${ page }`)
          .then((response) => {
            this.currentPage = response.data.current_page;
            this.totalPages = response.data.last_page;
            this.doubts = response.data;
          });
    }
  }
}
</script>