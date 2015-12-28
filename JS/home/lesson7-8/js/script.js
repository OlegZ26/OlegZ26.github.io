$(function() {

  $('.selectTabs li a').each(function (i) {
    $('.selectTabs li a:eq('+ i +')').on('click', function(e) {
      $('.selectTabs li a').removeClass('active');
      $(this).addClass('active');
      $('.content div').hide();
      $('.tab' + (i + 1)).show();
      e.preventDefault();
    })
  });

  $('.formLines input').hover(
    function() {
    $(this).next('.helpTool').stop(true, true).animate({opacity: "show"}, 700);
  }, 
   function() {
    $(this).next('.helpTool').hide();
  });

  $('button').on('click', function() {
    $('.helpTool').show();
  }); 

});
