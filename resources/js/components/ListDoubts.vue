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
                      <h3 class="title is-3 m-2">{{ doubt.matter }}</h3>
                      <h6 class="subtitle is-6 m-2">Estat: {{ doubt.status }}</h6>
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
          <h3 class="title has-text-centered is-3">{{ this.dataDoubt.matter }}</h3>
          <p class="content">
            {{ this.dataDoubt.message }}
          </p>
        </div>
      </div>
      <button class="modal-close" @click="hidemodal"></button>
    </div>
  </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "ListDoubts", 
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
      showModal: false
    }
  },
  mounted() {
    this.list();
  },

  methods: {
    list(page=1) {
      axios.get(`/doubts/user`)
          .then((response) => {
            this.doubts = response;
          });
    },
    modal(id){
      document.getElementById("modal").classList.add("is-active");
      axios.get(`/api/doubts/${ id }`)
          .then((response) => {
            console.log(response);
            this.dataDoubt = response.data[0];
          });
    },
    hidemodal(){
      document.getElementById("modal").classList.remove("is-active");
    }
  }
}
</script>