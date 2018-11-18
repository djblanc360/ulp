jQuery(window).load(function() {

  var container = document.querySelector('#ms-container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });

});


// When a user clicks the like button
$('.like__btn').on('click', function(){
        // AJAX call goes to our endpoint url
        $.ajax({
            url: bloginfo.site_url + '/wp-json/example/v2/likes/' + bloginfo.post_id.ID,
            type: 'post',
            success: function() {
                console.log('works!');
             },
             error: function() {
                console.log('failed!');
              }
          });

        // Change the like number in the HTML to add 1
        var updated_likes = parseInt($('.like__number').html()) + 1;

        $('.like__number').html(updated_likes);
        // Make the button disabled
        $(this).attr('disabled', true);
    });
    // Make btn disabled
      $(this).attr('disabled', true).addClass('tada');
