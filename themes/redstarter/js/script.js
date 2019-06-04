(function($) {
  const searchField = $('.search-field');
  $(function() {
    searchField.on('click', function(event) {
      event.preventDefault();
      searchField.toggle('slow').focus();
    });

    searchField.on('blur', function(event) {
      event.preventDefault();
      searchField.hide();
    });
  });
})(jQuery);

// Since you are using  $('.search-field') more than once try storing the DOM reference
// in a variable e.g. const searchField =  $('.search-field'); and you can use this e.g. searchField.show(); etc...
