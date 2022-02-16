<template>
  <div class="b-table has-pagination">
    <div class="table-wrapper has-mobile-cards">
      <table class="table is-fullwidth is-striped is-hoverable">
        <thead>
          <tr class="has-background-dark">
            <th class="has-text-light"><abbr title="Avatar"></abbr>#</th>
            <th class="has-text-light">
              <abbr title="Codi identificador">Id</abbr>
            </th>
            <th class="has-text-light">
              <abbr title="Estat del dubte">Estat</abbr>
            </th>
            <th class="has-text-light">
              <abbr title="Data d'inici">Data d'inici</abbr>
            </th>
            <th class="has-text-light">
              <abbr title="Assumpte">Assumpte</abbr>
            </th>
            <th class="has-text-light">
              <abbr title="Alumne">Alumne</abbr>
            </th>
            <th class="has-text-light has-text-right">
              <abbr title="Accions">Accions</abbr>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(doubt, index) in doubts.data" :key="index">
            <td class="is-image-cell">
              <div class="image">
                <img
                  src="https://bulma.io/images/placeholders/128x128.png"
                  class="is-rounded"
                />
              </div>
            </td>
            <td data-label="Id">
              <p>{{ doubt.id }}</p>
            </td>
            <td data-label="status">
              <p>{{ doubt.status }}</p>
            </td>
            <td data-label="status">
              <p>{{ doubt.date_opening }}</p>
            </td>
            <td data-label="Missatge">{{ doubt.matter }}</td>
            <td data-label="idstudent">{{ doubt.student_id }}</td>
            <td class="is-actions-cell">
              <div class="buttons is-right">
                <button
                  v-on:click="showModal('1', doubt.id)"
                  class="button is-small is-primary"
                  type="button"
                >
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button
                  v-on:click="showModal('2', doubt.id)"
                  class="button is-small is-warning jb-modal"
                  data-target="sample-modal"
                  type="button"
                >
                  <span class="icon"><i class="fas fa-reply"></i></span>
                </button>
                <button
                  v-on:click="showModal('3', doubt.id)"
                  class="button is-small is-danger jb-modal"
                  data-target="sample-modal"
                  type="button"
                >
                  <span class="icon"><i class="fas fa-archive"></i></span>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="modal" id="ModalDeleteDoubts">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">
            <span class="icon is-size-5 mr-1"
              ><i class="fas fa-trash"></i
            ></span>
            Avís!
          </p>
          <button
            v-on:click="hideModal"
            class="delete"
            aria-label="close"
          ></button>
        </header>
        <section class="modal-card-body">
          <article class="message is-dark">
            <div class="message-body">Estàs Segur que vols esborrar el dubte?</div>
          </article>
        </section>
        <footer class="modal-card-foot is-flex is-justify-content-end">
          <button
            class="button is-danger"
            v-on:click="formDelete(this.doubts.id)"
          >
            Esborrar Dubte
            <span class="icon is-size-5 ml-1"
              ><i class="fas fa-trash"></i
            ></span>
          </button>
          <button class="button is-light" v-on:click="hideModal">
            Cancel·la
          </button>
        </footer>
      </div>
    </div>
    <div class="modal" id="ModalSendDoubt">
      <div class="modal-background"></div>
      <div class="modal-card modal-reply">
        <header class="modal-card-head">
          <p class="modal-card-title">
            <span class="icon is-size-5 mr-1"
              ><i class="fas fa-reply"></i
            ></span>
            Respondre
          </p>
          <button
            v-on:click="hideModal"
            class="delete"
            aria-label="close"
          ></button>
        </header>
        <section class="modal-card-body">
          <article class="message is-dark">
            <div class="message-body">
              <textarea v-model="message" id="myeditorinstance">Escriu el teu problema</textarea
              >
            </div>
          </article>
        </section>
        <footer class="modal-card-foot is-flex is-justify-content-end">
          <button
            class="button is-primary"
            v-on:click="formSend(this.doubts.id)"
          >
            Enviar
            <span class="icon is-size-5 ml-1"
              ><i class="fas fa-reply"></i
            ></span>
          </button>
          <button class="button is-light" v-on:click="hideModal">
            Cancel·la
          </button>
        </footer>
      </div>
    </div>
    <div class="modal" id="ModalShowMessage">
      <div class="modal-background"></div>
      <div class="modal-card modal-reply">
        <header class="modal-card-head">
          <p class="modal-card-title">
            <span class="icon is-size-5 mr-1"
              ><i class="fas fa-reply"></i
            ></span>
            Mostrar el Dubte
          </p>
          <button
            v-on:click="hideModal"
            class="delete"
            aria-label="close"
          ></button>
        </header>
        <section class="modal-card-body">
          <article class="message is-dark">
            <div class="message-body">
              {{ this.doubts.message }}
            </div>
          </article>
        </section>
        <footer class="modal-card-foot is-flex is-justify-content-end">
          <button class="button is-light" v-on:click="hideModal">
            Tanca el Missatge
          </button>
        </footer>
      </div>
    </div>
    <div class="notification is-light">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div class="buttons has-addons">
              <div v-for="item in this.totalPages" :key="item">
                <button
                  type="button"
                  class="button is-warning"
                  @click="list(item)"
                  v-if="currentPage == item"
                >
                  {{ item }}
                </button>
                <button
                  type="button"
                  class="button is-dark"
                  @click="list(item)"
                  v-else
                >
                  {{ item }}
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <small class="is-size-5"
              >Pàgina {{ currentPage }} de {{ totalPages }}</small
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import pagination from "laravel-vue-pagination";

//let url = `/api/doubts?page=${page}`;

export default {
  name: "CrudDoubts",
  components: {
    pagination,
  },
  data() {
    return {
      doubts: {
        type: Object,
        default: null,
      },
      currentPage: 0,
      totalPages: 0,
    };
  },
  mounted() {
    this.list();
  },
  methods: {
    list(page=1) {
      let status = this.$attrs.status;
     const myArray = status.split("?");
     console.log(myArray[1]);
  
      if (status != '') {
        axios
          .get(`/api/doubts/status/${myArray[0]}?page=${page}`)
          .then((response) => {
                      console.log('is');

            this.currentPage = response.data.current_page;
            this.totalPages = response.data.last_page;
            this.doubts = response.data;
          });
      } else {
        axios.get(`/api/doubts?page=${page}`).then((response) => {
          this.currentPage = response.data.current_page;
          this.totalPages = response.data.last_page;
          this.doubts = response.data;
        });
      }
    },

    showModal(accions, id) {
      this.actionModal = accions;
      if (!this.openModal) {
        this.openModal = true;
        if (accions === "1") {
          document
            .getElementById("ModalShowMessage")
            .classList.add("is-active");
          axios.get(`/api/doubts/${id}`).then((response) => {
            this.doubts = response.data[0];
            console.log(response.data[0]);
          });
        } else if (accions === "2") {
          document.getElementById("ModalSendDoubt").classList.add("is-active");

          axios.get(`/api/doubts/${id}`).then((response) => {
            this.doubts = response.data[0];
            const htmlreply = response.data[0]['response'];
            tinymce.get("myeditorinstance").setContent(htmlreply)
            console.log(response.data[0]);
          });
        } else if (accions === "3") {
          document
            .getElementById("ModalDeleteDoubts")
            .classList.add("is-active");

          axios.get(`/api/doubts/${id}`).then((response) => {
            this.doubts = response.data[0];
            console.log(this.doubts);
          });
        }
      }
    },
    hideModal() {
      if (this.openModal) {
        this.openModal = false;
        if (this.actionModal === "1") {
          document
            .getElementById("ModalShowMessage")
            .classList.remove("is-active");
          this.list();
        } else if (this.actionModal === "2") {
          document
            .getElementById("ModalSendDoubt")
            .classList.remove("is-active");
          this.list();
        } else if (this.actionModal === "3") {
          document
            .getElementById("ModalDeleteDoubts")
            .classList.remove("is-active");
          this.list();
        }
      }
      this.actionModal = "";
    },
    formDelete(id) {
      console.log(1);
      axios.delete(`/api/doubts/${id}`).then((response) => {
        document
          .getElementById("ModalDeleteDoubts")
          .classList.remove("is-active");
        this.openModal = false;
        this.list();
      });
    },
    formSend(id) {
      const reply = tinymce.get("myeditorinstance").getContent();
      console.log(reply);
      axios.post(`/api/doubts/${id}`,{reply:reply,id:id}); {
      };
    },
  },
};
</script>