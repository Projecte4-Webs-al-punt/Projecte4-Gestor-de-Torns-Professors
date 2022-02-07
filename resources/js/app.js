import { createApp } from 'vue';

import Component from './components/ExampleComponent.vue';

const app = createApp({});

app.component('ExampleComponent', Component);

app.mount('#app');