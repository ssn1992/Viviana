
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Template Base
/**
 *
require('./template/main');
require('./template/script');
require('./template/modernizr');
require('./template/classie');
require('./template/waypoints.min');
require('./template/plugins/flexslider/jquery.flexslider');
require('./template/plugins/textrotator/jquery.simple-text-rotator');
require('./template/plugins/smoothscroll/smoothscroll');
require('./template/plugins/lightbox/js/lightbox.min');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
 */

require('./bootstrap');
window.Vue = require('vue');

/**
 * Instagram Component instance
 */
const instagramComponent = require('./components/instagram/instagram');

// Instagram component init
instagramComponent.start();

/**
 * Contact Component instance
 */
const contactComponent = require('./components/contact/contact');

// Contact component init
contactComponent.start();