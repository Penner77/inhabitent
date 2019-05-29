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
})(jQuery);
