require('./bootstrap');

import Vue from 'vue'
import FooBar from './components/FooBar'

const app = new Vue({
  el: '#app',
  components: {
    FooBar,
  }
})