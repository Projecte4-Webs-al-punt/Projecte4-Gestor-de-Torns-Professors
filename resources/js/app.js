import { createApp } from 'vue';

import Usuari from './components/Usuari.vue';

const app = createApp({});

app.component('usuari', Usuari);

app.mount('#app');