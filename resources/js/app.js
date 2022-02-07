import { createApp } from 'vue';

import Usuari from './components/Usuari.vue';

const crudUser = createApp({});

crudUser.component('crud-users', Usuari);

crudUser.mount('#AppCrudUser');