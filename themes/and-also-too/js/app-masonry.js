console.log('masonry');

var elem = document.querySelector('.grid');
console.log(elem);
var msnry = new Masonry(elem, {
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: 80,
                gutter: '.gutter-sizer'
            });
