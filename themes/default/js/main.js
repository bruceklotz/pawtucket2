import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import VueCarousel from 'vue-carousel';
//require("expose-loader?vue/dist/vue.esm.js");

require('bootstrap');

Vue.use(VueCarousel);

new Vue({
  el: '#app',
  data: {
    appname: "Pawtucket"
  }
});