$(function() {
  // Инициализация слайдера

  $('.jcarousel').jcarousel({
    // Базовые настройки скрипта пишутся здесь
      animation: 'slow',
      wrap: 'circular'
  });

    // Инициализация прокрутки слайдера

  $('.jcarousel-prev').jcarouselControl({
      target: '-=1'
  });

  $('.jcarousel-next').jcarouselControl({
      target: '+=1'
  });

    // Автопрокрутка слайдера

  $('.jcarousel').jcarouselAutoscroll({
      interval: 5000,
      target: '+=1',
      autostart: true
  });

  var search = '';

  function renderIdeas(search) {

        $.ajax({
            type: 'GET',
            dataType: 'json',
            cache: false,
            url: 'http://api.pixplorer.co.uk/image?word=' + search + '&amount=7&size=s',
            success: function (data) {
                if (data.status === 'failed') {
                    data = mockData;
                }

                var html = $('#ideas-template').html();
                var content = tmpl(html, {
                    data: data.images
                });

                $('.grid').remove();
                $('.discover .discover-wrapper').append(content);

                $('.grid').isotope({
                    itemSelector: '.tile--ideas',
                    layoutMode: 'masonry',
                    masonry: {
                        gutter: 20
                    }
                });

            },
            error: function () {
                console.log('Sorry, images API isn\'t working!');
            }
        });
    }

    $('.activities-search__button').on('click', function (e) {
        e.preventDefault();
        var query = $('.activities-search__input');
        renderIdeas( encodeURIComponent(query.val() ));
        query.val('');
    } );

    renderIdeas();
});