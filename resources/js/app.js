import Vue from 'vue';
import Filter from "./components/Filter";
/*Vue.component('dropdown-filter', require('./components/Filter.vue').default);*/

const dropdownFilter = new Vue({
    el:'.container',
    components:{
        'dropdown-filter':Filter
    },
})
