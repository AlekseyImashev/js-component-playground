import Vue from 'vue';

import ScrollLink from './components/ScrollLink';
import DropDown from './components/DropDown';
import Visible from './components/Visible';

window.Vue = Vue;

Vue.component('scroll-link', ScrollLink);
Vue.component('drop-down', DropDown);
Vue.component('visible', Visible);

new Vue({
    el: '#app'
});
