import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import { createPinia } from 'pinia';

import './assets/css/bootstrap.min.css';
import './assets/css/icons.min.css'
import './assets/css/app.min.css'

import VeeValidatePlugin from './utils.validation';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';


const app = createApp(App);
app.use(router);
const pinia = createPinia();
app.use(pinia);
app.use(VeeValidatePlugin);
app.use(VueSweetAlert2, {
    confirmButtonColor: '#A95EEA',
    cancelButtonColor: '#FF7674',
})

app.mount("#app");


import 'bootstrap';
import './assets/libs/metismenujs/metismenujs.min';
import './assets/libs/simplebar/simplebar.min';
import './assets/libs/feather-icons/feather.min';

