import { createApp } from 'vue';

import CrudUsuaris from './components/CrudUsuaris.vue';

import CrudDoubts from './components/CrudDoubts.vue';

import ListDoubts from "./components/ListDoubts.vue";

const app = createApp({});

app.component('crud-usuari', CrudUsuaris);

app.component('crud-doubts', CrudDoubts);

app.component('list-doubts', ListDoubts);



app.mount('#app');