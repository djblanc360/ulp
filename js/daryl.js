jQuery(window).load(function() {

  var container = document.querySelector('#ms-container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });

});

// This is how you setup a callback function to work with your new endpoint
function example__like( WP_REST_Request $request ) {

        $likes = 20;

        return $likes;
    }
