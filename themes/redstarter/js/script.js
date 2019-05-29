(function($) {
  $('.icon-search').on('click', function(event) {
    event.preventDefault();
    $('.search-field')
      .toggle('slow')
      .focus();
  });

  $('.search-field').on('blur', function(event) {
    event.preventDefault();
    $('.search-field').hide();
  });
})(jQuery);
