import { createApp } from 'vue';

import CrudUsuaris from './components/CrudUsuaris.vue';

import CrudDoubts from './components/CrudDoubts.vue';

const app = createApp({});

app.component('crud-usuari', CrudUsuaris);

app.component('crud-doubts', CrudDoubts);


app.mount('#app');