console.log('packery-app.js');

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
