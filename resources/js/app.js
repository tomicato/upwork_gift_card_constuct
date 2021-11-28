require('./bootstrap');
import {createApp} from "vue";
import axios from "axios";

import Home from './components/Home.vue'

const app = createApp({})

app.component('home', Home);

app.mount('#app')
