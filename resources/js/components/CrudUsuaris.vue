<template>
  <div>
    <div class="is-flex is-justify-content-center">
      <button v-on:click="showModal('1', 0)" class="button is-warning mb-5">Crear Alumne <span class="icon is-size-5 ml-1"><i class="fas fa-folder-plus"></i></span></button>
    </div>
    <div class="b-table has-pagination">
      <div class="table-wrapper has-mobile-cards">
        <table class="table is-fullwidth is-striped is-hoverable">
          <thead>
          <tr class="has-background-dark">
            <th class="has-text-light"><abbr title="Avatar"></abbr>#</th>
            <th class="has-text-light"><abbr title="Codi identificador">Id</abbr></th>
            <th class="has-text-light"><abbr title="Nom de l'alumne">Nom i cognom</abbr></th>
            <th class="has-text-light"><abbr title="Correu Electrònic">Email</abbr></th>
            <th class="has-text-light"><abbr title="Numero de Telefón">Telefón</abbr></th>
            <th class="has-text-light"><abbr title="Presencial, Telemàtic o Híbrid">Modalitat</abbr></th>
            <th class="has-text-light has-text-right"><abbr  title="Accions">Accions</abbr></th>
          </tr>
          </thead>
          <tbody>
            <tr v-for="(user, index) in users.data" :key="index">
              <td class="is-image-cell">
                <div class="image">
                    <img v-bind:src="'/storage/avatar/'+user.image" class="is-rounded">
                </div>
              </td>
              <td data-label="Id"><p>{{ user.id }}</p></td>
              <td data-label="Nom"><p>{{ user.name }} {{ user.lastname }}</p></td>
              <td data-label="Email"><a :href="'mailto:'+user.email">{{ user.email }}</a></td>
              <td data-label="Phone"><a :href="'tel:'+user.phone">{{ user.phone }}</a></td>
              <td data-label="Modality">{{ user.modality }}</td>
              <td class="is-actions-cell">
                <div class="buttons is-right">
                  <button v-on:click="showModal('2', user.id)" class="button is-small is-primary" type="button">
                    <span class="icon"><i class="fas fa-edit"></i></span>
                  </button>
                  <button v-on:click="showModal('3', user.id)" class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                    <span class="icon"><i class="fas fa-trash"></i></span>
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

    <div class="modal" id="ModalCrearUsuaris">
            <div class="modal-background"></div>
            <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title"><span class="icon is-size-5 mr-1"><i class="fas fa-user-plus"></i></span> Afegir un Alumne Nou</p>
                <button v-on:click="hideModal" class="delete" aria-label="close"></button>
            </header>
              <section class="modal-card-body">
                <div class="field">
                    <label class="label">Nom</label>
                    <div class="control">
                      <input class="input" type="text" name="nomalumn" v-model="formcreatearray.name" placeholder="Nom de l'Alumne">
                    </div>
                  </div>
                  <div class="field">
                    <label class="label">Cognoms</label>
                    <div class="control">
                      <input class="input" type="text" name="cognomsalumn" v-model="formcreatearray.lastname" placeholder="Cognoms de l'Alumne">
                    </div>
                  </div>
                  <div class="field">
                    <label class="label">Correu Electronic</label>
                    <div class="control">
                      <input class="input" type="email" name="emailalumn" v-model="formcreatearray.email" placeholder="exemple@gmail.com">
                    </div>
                  </div>
                  <div class="field">
                    <label class="label">Telèfon</label>
                    <div class="control">
                      <input class="input" type="text" name="phonealumn" v-model="formcreatearray.phone" placeholder="000 000 000">
                    </div>
                  </div>
                  <div class="field">
                    <label class="label">Modalitat</label>
                    <div class="control">
                      <div class="select">
                        <select name="modalityalumn" v-model="formcreatearray.modality">
                          <option value="Presencial">Presencial</option>
                          <option value="Telemàtic">Telemàtic</option>
                          <option value="Híbrid">Híbrid</option>
                        </select>
                      </div>
                    </div>
                  </div>
              </section>
              <footer class="modal-card-foot is-flex is-justify-content-end">
                  <button class="button is-link" v-on:click="formCreate">Crear Alumne <span class="icon is-size-5 ml-1"><i class="fas fa-folder-plus"></i></span></button>
                  <button class="button is-light" v-on:click="hideModal">Cancel·la</button>
              </footer>
            </div>
        </div>
        <div class="modal" id="ModalEditarUsuaris">
            <div class="modal-background"></div>
            <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title"><span class="icon is-size-5 mr-1"><i class="fas fa-user-edit"></i></span> {{ this.dataUser.name }} {{ this.dataUser.lastname }}</p>
                <button v-on:click="hideModal" class="delete" aria-label="close"></button>
            </header>
            <!-- <form v-bind:action="'/api/users/update/'+this.dataUser.id" method="POST"> -->
              <section class="modal-card-body">
                <input type="hidden" name="idalumn" v-bind:value="this.dataUser.id">
                <div class="field">
                  <label class="label">Nom</label>
                  <div class="control">
                    <input class="input" type="text" name="nomalumn" v-bind:value="this.dataUser.name" placeholder="Nom de l'Alumne">
                  </div>
                </div>
                <div class="field">
                  <label class="label">Cognoms</label>
                  <div class="control">
                    <input class="input" type="text" name="cognomsalumn" v-bind:value="this.dataUser.lastname" placeholder="Cognoms de l'Alumne">
                  </div>
                </div>
                <div class="field">
                  <label class="label">Correu Electronic</label>
                  <div class="control">
                    <input class="input" type="email" name="emailalumn" v-bind:value="this.dataUser.email" placeholder="exemple@gmail.com">
                  </div>
                </div>
                <div class="field">
                  <label class="label">Telèfon</label>
                  <div class="control">
                    <input class="input" type="text" name="phonealumn" v-bind:value="this.dataUser.phone" placeholder="000 000 000">
                  </div>
                </div>
                <div class="field">
                  <label class="label">Modalitat</label>
                  <div class="control">
                    <div class="select">
                      <select name="modalityalumn">
                        <option v-bind:value="this.dataUser.modality" selected>{{ this.dataUser.modality }}</option>
                        <option value="Presencial">Presencial</option>
                        <option value="Telemàtic">Telemàtic</option>
                        <option value="Híbrid">Híbrid</option>
                      </select>
                    </div>
                  </div>
                </div>
            </section>
            <footer class="modal-card-foot is-flex is-justify-content-end">
                <button class="button is-link" v-on:click="formUpdate">Desar els Canvis <span class="icon is-size-5 ml-1"><i class="fas fa-save"></i></span></button>
                <button class="button is-light" v-on:click="hideModal">Cancel·la</button>
            </footer>
            </div>
        </div>
        <div class="modal" id="ModalEsborrarUsuaris">
            <div class="modal-background"></div>
            <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title"><span class="icon is-size-5 mr-1"><i class="fas fa-trash"></i></span> Avís!</p>
                <button v-on:click="hideModal" class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <article class="message is-dark">
                  <div class="message-body">
                    Estàs Segur que vols esborrar l'alumne {{ this.dataUser.name }} {{ this.dataUser.lastname }} ?
                  </div>
                </article>
            </section>
            <footer class="modal-card-foot is-flex is-justify-content-end">
                <button class="button is-danger" v-on:click="formDelete(this.dataUser.id)">Esborrar Alumne <span class="icon is-size-5 ml-1"><i class="fas fa-trash"></i></span></button>
                <button class="button is-light" v-on:click="hideModal">Cancel·la</button>
            </footer>
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
      }, 
      dataUser: {
        type: Object, 
        default: null
      }, 
      currentPage: 0, 
      totalPages: 0, 
      openModal: false, 
      actionModal: '', 
      formcreatearray: {
        "name": '', 
        "lastname": '', 
        "email": '', 
        "phone": '', 
        "modality": ''
      }
    }
  }, 
  mounted() {
    this.list();
  }, 
  methods: {
    list(page=1) {
      axios.get(`/api/users?page=${ page }`)
      .then((response) => {
        this.currentPage = response.data.current_page;
        this.totalPages = response.data.last_page;
        this.users = response.data;
      });
    },
    showModal(accions, id) {
      this.actionModal = accions;
      if (!this.openModal) {
        this.openModal = true;
        if (accions == "1") {
          document.getElementById("ModalCrearUsuaris").classList.add("is-active");
        } else if (accions == "2") {
          document.getElementById("ModalEditarUsuaris").classList.add("is-active");

          axios.get(`/api/users/${ id }`)
          .then((response) => {
            this.dataUser = response.data[0];
            console.log(response.data[0]);
          });
        } else if (accions == "3") {
          document.getElementById("ModalEsborrarUsuaris").classList.add("is-active");

          axios.get(`/api/users/${ id }`)
          .then((response) => {
            this.dataUser = response.data[0];
          });
        }
      }
    }, 
    hideModal() {
      if (this.openModal) {
        this.openModal = false;
        if (this.actionModal == "1") {
          document.getElementById("ModalCrearUsuaris").classList.remove("is-active");
        } else if (this.actionModal == "2") {
          document.getElementById("ModalEditarUsuaris").classList.remove("is-active");
        } else if (this.actionModal == "3") {
          document.getElementById("ModalEsborrarUsuaris").classList.remove("is-active");
        }
      }
      this.actionModal = '';
    }, 
    formDelete(id) {
      axios.delete(`/api/users/${ id }`)
      .then((response) => {
        document.getElementById("ModalEsborrarUsuaris").classList.remove("is-active");
        this.openModal = false;
        this.list();
      });
    }, 
    formUpdate() {
      //
    }, 
    formCreate() {
      axios.post(`/api/users/store/`, {
        "name": this.formcreatearray.name, 
        "lastname": this.formcreatearray.lastname, 
        "email": this.formcreatearray.email, 
        "phone": this.formcreatearray.phone, 
        "modality": this.formcreatearray.modality
      }).then((response) => {
        //document.getElementById("ModalCrearUsuaris").classList.remove("is-active");
        //this.openModal = false;
        //this.list();
      });
    }
  }
}
</script>