jQuery(document).ready(function($){

  //
  // Materialized effect init
  //
  $('.button-collapse').sideNav();

  $(document).ready(function(){
    $('.parallax').parallax();
  });

  //
  // Ajax
  //
  var $selectionButton = $('.selection-button');
  var $article = $('.article');

  $selectionButton.on('click',function(e){
    e.preventDefault();
    $this = $(this);
    var term_id = $this.attr('data-attr');
    $selectionButton.removeClass('disabled');
    $this.addClass('disabled');
    $article.html('Recherche en cours...');
    jQuery.post(
        ajaxurl,
        {
          'action'  : 'filter-category',
          'term_id' : term_id
        },
        function(response)
        {
          $article.html(response);
        }
    );
  });

});
