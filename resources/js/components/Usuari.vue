<template>
  <div>
    <table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
      <thead>
      <tr>
        <th><abbr title="Avatar"></abbr></th>
        <th><abbr title="Codi identificador">Id</abbr></th>
        <th><abbr title="Codi d'usuari">Usuari</abbr></th>
        <th><abbr title="Correu electrònic">Email</abbr></th>
        <th><abbr title="Nom de l'alumne">Nom i cognom</abbr></th>
        <th><abbr title="Numero de Telefón">Telefón</abbr></th>
        <th class="has-text-right"><abbr  title="Accions">Accions</abbr></th>
      </tr>
      </thead>
      <tbody>
        //
      </tbody>
    </table>

    <!-- <td class="is-image-cell">
          <div class="image">
              <img src="https://bulma.io/images/placeholders/128x128.png" class="is-rounded">
          </div>
        </td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
            <td class="is-image-cell">
              <div class="image">
                  <img src="https://bulma.io/images/placeholders/128x128.png" class="is-rounded">
              </div>
          </td>
          <td data-label="Id">{{ $item -> id }}</td>
          <td data-label="Usuari">{{ $item -> name }}</td>
          <td data-label="Email">{{ $item -> email }}</td>
          <td data-label="Email">{{ $item -> firstname }} {{ $item -> lastname }}</td>
          <td data-label="Numero de Telefon">
              <small class="has-text-grey is-abbr-like" title="{{ $item -> telefon }}">{{ $item -> telefon }}</small>
          </td>
          <td class="is-actions-cell">
              <div class="buttons is-right">                                         
                  <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="fas fa-edit"></i></span>
                  </button>
                  <form action="/users/{{ $item -> id }}" method="post">
                      @csrf
                      @method('delete')
                  <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="fas fa-trash"></i></span>
                  </button>
                  </form>
              </div>
          </td> -->

          <ul>
            <li v-for="(user, index) in users.data" :key="index">
              <p>{{ user.id }}</p>
            </li>
          </ul>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Usuari", 
  data() {
    return {
      users: {
        type: Object, 
        default: null
      }
    }
  }, 
  mounted() {
    this.setUsers
  }, 
  methods: {
    setUsers() {
      axios.get("/api/users?page=1")
      .then(function(response) {
        console.log(response);
        this.users = response.data;
      });
    }
  }
}
</script>

<style>
</style>