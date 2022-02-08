import { createApp } from 'vue';

// import Usuari from './components/Usuari.vue';

import Exemple from "./components/Exemple.vue";

const app = createApp({});

app.component('exemple', Exemple);

app.mount('#app');