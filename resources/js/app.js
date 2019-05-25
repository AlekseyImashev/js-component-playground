import Vue from 'vue';
import ScrollLink from './components/ScrollLink';
import DropDown from './components/DropDown';

window.Vue = Vue;

Vue.component('scroll-link', ScrollLink);
Vue.component('drop-down', DropDown);

new Vue({
    el: '#app'
});
