import { createApp } from 'vue';

import HomeStudent from "./components/HomeStudent.vue";

import CrudUsuaris from './components/CrudUsuaris.vue';

import CrudDoubts from './components/CrudDoubts.vue';

import ListDoubts from "./components/ListDoubts.vue";

import Teacher from './components/Teacher.vue';

import Dashboard from "./components/Dashboard.vue";

import Randomstudent from "./components/Randomstudent.vue";

const app = createApp({});

app.component('home-student', HomeStudent);

app.component('crud-usuari', CrudUsuaris);

app.component('crud-doubts', CrudDoubts);

app.component('list-doubts', ListDoubts);

app.component('teacher', Teacher);

app.component('dashboard', Dashboard);

app.component('random-student', Randomstudent);

app.mount('#app');
