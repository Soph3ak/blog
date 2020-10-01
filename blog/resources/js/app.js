require('./bootstrap');


window.Vue=require('vue');

Vue.component('post', require('./components/Post.vue').default);
Vue.component('new-post', require('./components/NewPost.vue').default);

const app = new Vue({
    el: '#app'
});
