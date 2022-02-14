<template>
  <div class="section-dark my-work" id="my-work">
    <div class="container">
      <div
          class="columns is-multiline"
          data-aos="fade-in"
          data-aos-easing="linear"
      >

          <div v-for="(doubt, index) in doubts.data" :key="index" class="column is-12">
            <a @click="modal(doubt.id)">
              <div class="card is-2by1 work-item has-text-centered">

                <div class="card-content">
                  <div class="media">
                    <div class="media-left">

                    </div>
                    <div class="media-content ">
                      <p class="title m-2">Pregunta generica</p>
                      <p class="subtitle is-6 m-2">Estat: {{ doubt.status }}</p>
                    </div>
                  </div>
                  <div class="content">
                    {{ doubt.message }}
                    <br>
                    <time datetime="{{ doubt.date_opening }}">{{ doubt.date_opening }}</time>
                  </div>
                </div>

              </div>
            </a>
          </div>
    </div>
  </div>
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
  <div>
    <div class="modal" id="modal">
      <div class="modal-background"></div>
      <div class="modal-content">
        <div class="box">
          Hola
        </div>
      </div>
      <button class="modal-close" @click="hidemodal"></button>
    </div>
  </div>

</template>

<script>
import axios from "axios";
import pagination from "laravel-vue-pagination";

export default {
  name: "ListDoubts",
  showModal: false,
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
    },
    modal(id){
      document.getElementById("modal").classList.add("is-active");
      axios.get(`/api/doubts/${ id }`)
          .then((response) => {
            console.log(response.data);
          });
    },
    hidemodal(){
      document.getElementById("modal").classList.remove("is-active");
    }
  }
}
</script>