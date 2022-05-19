require('./bootstrap');


import App from "./components/App.vue"
import { createApp } from 'vue'

import router from "./router"

import 'sweetalert2/dist/sweetalert2.css'
import Swal from 'sweetalert2/dist/sweetalert2.js'


Window.Swal=Swal;
const toast = Swal.mixin({
    toast:true,
    position:'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar:true,
});
window.toast=toast;

createApp(App).use(router).mount("#app")