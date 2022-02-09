import { createApp } from 'vue';

import CrudUsuaris from './components/CrudUsuaris.vue';

const app = createApp({});

app.component('crud-usuari', CrudUsuaris);

app.mount('#app');