
import Vue from 'vue'
import App from './App.vue';
import VueAxios from 'vue-axios'
import axios from 'axios'
import router from '../router/index';

window.Vue = require('vue').default;
Vue.use(VueAxios,axios);

const app = new Vue({
    el: '#app',
    components: { 
        App
    },
    router,
});

