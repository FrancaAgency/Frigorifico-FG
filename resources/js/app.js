/*@ -4,64 +4,32 @@
 * building robust, powerful web applications using Vue and Laravel.
 */


 require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        posts: [
            {
                images:'img1.png',
                content:'Feria Ganadera'
            },
            {
                images:'img2.png',
                content:'Sacrificio bovino'
            },
            {
                images:'img3.png',
                content:'SACRIFICIO porcino'
            },
            {
                images:'img4.png',
                content:'central de carnes'
            }
        ],
      }
});
