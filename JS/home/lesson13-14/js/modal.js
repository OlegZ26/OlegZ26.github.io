'use strict';

$(function() {
  $('input#go').on('click', function() {
    $('#overlay').fadeIn(400,
      function() {
        $('#modal').css('display', 'block').animate({opacity: 1, top: '50%'}, 200);
    });
  });

  $('#modal_close, #overlay').on('click', function() {
    $('#modal').animate({opacity: 0, top: '45%'}, 200,
        function() {
          $(this).css('display', 'none');
          $('#overlay').fadeOut(400);
        }
      );
  });
});