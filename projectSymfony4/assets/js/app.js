/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
var $ = require('jquery');

require('../css/app.css');
require('bootstrap');
require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');
require('@fullcalendar/core');
require('@fullcalendar/daygrid');
require( 'datatables.net' );
 var dt = require( 'datatables.net-bs4' )( window, $ );

const imagesContext = require.context('../css/img', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);
imagesContext.keys().forEach(imagesContext);


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
    $('#table_id').dataTable();

});




