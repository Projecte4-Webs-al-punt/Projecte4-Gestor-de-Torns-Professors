import { createApp } from 'vue';

import CrudUsuaris from './components/CrudUsuaris.vue';

import CrudDoubts from './components/CrudDoubts.vue';

import ListDoubts from "./components/ListDoubts.vue";

import SliderComponent from "./components/SliderComponent.vue";

const app = createApp({});

app.component('crud-usuari', CrudUsuaris);

app.component('crud-doubts', CrudDoubts);

app.component('list-doubts', ListDoubts);

app.component('SliderComponent', SliderComponent);


app.mount('#app');

