console.log('packery-app.js');

// document.addEventListener("DOMContentLoaded", function(event) {
//   console.log("DOM fully loaded and parsed");
//
// // jQuery( document ).ready(function() {
//     // console.log( "ready!" );
//
//
//     var elem = document.querySelector('.grid');
//     var pckry = new Packery( elem, {
//       // options
//       itemSelector: '.grid-item',
//       percentPosition: true,
//       columnWidth: '.grid-sizer',
//       gutter: '.gutter-sizer'
//     });
//
// });

var $grid = jQuery('.grid').packery({
    // options
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer',
    gutter: '.gutter-sizer'
});

// layout Packery after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.packery();
});
