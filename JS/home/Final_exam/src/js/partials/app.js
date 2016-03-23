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
});