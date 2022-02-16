<template>
  <div>
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
                      <p class="title m-2">{{ doubt.matter }}</p>
                      <p class="subtitle is-6 m-2">Estat: {{ doubt.status }}</p>
                    </div>
                  </div>
                  <div class="content" v-if="doubt.message.length > 50">
                    {{ doubt.message.substring(0, 50) }} ...
                  </div>
                  <div class="content" v-else>
                    {{ doubt.message }}
                  </div>
                </div>

              </div>
            </a>
          </div>
    </div>
  </div>
      </div>
  <div>
    <div class="modal" id="modal">
      <div class="modal-background" @click="hidemodal"></div>
      <div class="modal-content">
        <div class="box">
          <article class="message">
            <div class="message-header">
              <p>{{ this.dataDoubt.matter }}</p>
            </div>
            <div id="message_tinymce" class="message-body mt-3">
            </div>
          </article>
        </div>
      </div>
      <button class="modal-close" @click="hidemodal"></button>
    </div>
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
      dataDoubt: {
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
            this.dataDoubt = response.data[0];
            var message = this.dataDoubt.response;
            if (this.dataDoubt.status === "Resolt") {
              if (typeof code_happened === 'undefined') {
                window.code_happened = true;
                document.getElementById("message_tinymce").innerHTML += message;
              }
            }
          });
    },
    hidemodal(){
      document.getElementById("modal").classList.remove("is-active");
    }
  }
}
</script>