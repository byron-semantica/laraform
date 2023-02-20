import './bootstrap';

import Alpine from 'alpinejs';
import Vue from 'vue'
import Laraform from '@laraform/laraform'

Vue.use(Laraform)

const app = new Vue({
  el: '#app'
})
window.Alpine = Alpine;

Alpine.start();
