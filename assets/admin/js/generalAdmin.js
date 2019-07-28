$(function() {
  $('#main-menu li a').on('click', function(){
    $('li a').removeClass('active-menu');
    $(this).addClass('active-menu');
});
});
