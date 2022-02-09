import { createApp } from 'vue';

import Usuari from './components/Usuari.vue';
import Doubt from './components/Doubt.vue';


const app = createApp({});

app.component('usuari', Usuari);
app.component('doubt', Doubt);


app.mount('#app');