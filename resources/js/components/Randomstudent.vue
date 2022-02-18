<template>
  <div class="container is-max-desktop">
    <div class="notification is-light">
      <div class="columns">
        <div class="column">
      <button class="button is-warning" @click="generate"> Generate</button>
        </div>
        <div class="column">
          <p class="text-black" id="studentrandom"></p>
        </div>
        </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'Dashboard',
  methods: {
    generate() {
      axios.get('/api/testuser')
          .then((response) => {
            console.log(response.data);
            document.getElementById("studentrandom").innerHTML = "";
            document.getElementById("studentrandom").innerHTML = response.data.name + " " + response.data.lastname;
          })
          .catch(error => {
          });
    },
  }
}
</script>