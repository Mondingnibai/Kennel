
import Vue from 'vue'
import App from './App.vue';
import Aboutus from '../js/components/public/Aboutus.vue'
import Malebreed from '../js/components/public/Malebreed.vue'
import Femalebreed from '../js/components/public/Femalebreed.vue'
import Contactus from '../js/components/public/Contactus.vue'
import VueAxios from 'vue-axios'
import axios from 'axios'
import router from '../router/index';

window.Vue = require('vue').default;
Vue.use(VueAxios,axios);

const app = new Vue({
    el: '#app',
    components: { 
        App,
        Aboutus,
        Malebreed,
        Femalebreed,
        Contactus
    },
    router,
});

