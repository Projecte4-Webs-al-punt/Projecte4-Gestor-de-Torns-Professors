import { createApp } from 'vue';

// import Usuari from './components/Usuari.vue';

import Exemple from "./components/Exemple.vue";

const crudUser = createApp({});

crudUser.component('exemple', Exemple);

crudUser.mount('#AppCrudUser');