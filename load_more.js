  $(document).ready(function(){
  $('.gallery1').slice(0,10).show();
  $(document).on('click', '.btn', function(){
    $('.gallery1:hidden').slice(0,10).slideDown('show');
    if($('.gallery1:hidden').length == 0 ){
      $(this).text('Plus d\'images à afficher');
    }
    return false;
  });
});


