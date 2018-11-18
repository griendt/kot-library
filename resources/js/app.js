import Vue from 'vue';

import App from './App.vue';

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import AsyncComputed from 'vue-async-computed';

Vue.use(VueRouter, VueAxios, axios, AsyncComputed);


const router = new VueRouter({ mode: 'history'});
new Vue(Vue.util.extend({ router })).$mount('#app');

