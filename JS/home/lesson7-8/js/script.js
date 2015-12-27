$(function() {

  $('.selectTabs li a').each(function (i) {
    $('.selectTabs li a:eq('+ i +')').on('click', function(e) {
      e.preventDefault();
      $('.selectTabs li a').removeClass('active');
      $(this).addClass('active');
      $('.content div').hide();
      $('.tab' + (i + 1)).show();    
    })
  });

  $('.formLines input').hover(
    function() {
    $(this).next('em').stop(true, true).animate({opacity: "show"}, 700);
  }, 
   function() {
    $(this).next('em').hide();
  });

  // $('.forms-place button').on('click', function() {
  //   $('.formLines em').show();
  //   return false;
  // }), 

});
