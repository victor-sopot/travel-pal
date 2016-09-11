
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
 Vue.component('example', require('./components/Example.vue'));

Vue.component('DotLoader', DotLoader);
var DotLoader = require('vue-spinner/src/DotLoader.vue');
Vue.component('v-select', VueSelect.VueSelect);
const app = new Vue({
    el: 'body'
});

Vue.http.options.root = '/root';
Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk';

Vue.http.get('/provider').then(function(res){
	console.log(res);
});




/* Bootstrap */
$('.dropdown-toggle').dropdown()
