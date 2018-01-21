require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuikit from 'vuikit'

Vue.use(Vuikit)


//Vue.component('VkButton', Button)
//Vue.component('VkModal', Modal)


//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
	message: 'test',
	radio: "success",
    }
});
