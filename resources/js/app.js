import { createApp } from 'vue';

import Component from './components/ExampleComponent.vue';

const app = createApp({});

app.component('example-component', Component);

app.mount('#app');
