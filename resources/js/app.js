import { createApp } from 'vue';

import Usuari from './components/Usuari.vue';

const crudUser = createApp({});

crudUser.component('usuari', Usuari);

crudUser.mount('#AppCrudUser');