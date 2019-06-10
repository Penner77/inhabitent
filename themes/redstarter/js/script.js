(function($) {
  $(function() {
    const searchField = $('.site-header .search-field');

    $('.site-header .icon-search').on('click', function(event) {
      event.preventDefault();
      searchField.toggle('slow').focus();
    });

    searchField.on('blur', function(event) {
      event.preventDefault();
      searchField.hide('slow');
    });
  });
})(jQuery);
