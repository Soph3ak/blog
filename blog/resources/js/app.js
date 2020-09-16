require('./bootstrap');


window.Vue=require('vue');

Vue.component('post', require('./components/Post.vue').default);

const app = new Vue({
    el: '#app'
});
