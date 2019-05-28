(function($) {
  $(function() {
    console.log('Hello Jim');
  });

  $('.search-field').hide();

  $('.icon-search').click(function() {
    $('.search-field').show();
    $('.search-field').focus();
  });

  $('.search-field').blur(function() {
    $('.search-field').hide();
  });

  //do a function for the search box here using toggle and hide, using event listener
})(jQuery);

//the above maps $ as the jquery shortcut as normal but needs to be done for Wordpress
