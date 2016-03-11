requirejs.config({
  paths: {
    'jquery': 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min',
    'tmpl': 'tmpl'
  },
  shim: {
    'jquery': {
      exports: 'jQuery'
    },
    'tmpl': {
      exports: 'tmpl'
    }
  }
});

require(
  [
    'jquery',
    'tmpl',
    'model',
    'view',
    'controller'
  ],
  function ($, tmpl, Model, View, Controller) {
    var firstToDoList = ['learn html', 'learn css', 'learn js'];        // записываем массив с данными для дальнейшей его передачи в модель
    var model = new Model(firstToDoList);                               // создаем новый экземпляр модели (инициализируем Model) с данныи из массива firstToDoList
    var view = new View(model);                                         // инициализация нашего представления (View) исходя из того какие данные у нас есть (model)
    var controller = new Controller(model, view);                       // создаем новый экземпляр контроллера (Controller), в него передаем и модель и представление (model, view),
  }                                                                     // поскольку контроллер контролирует процесс и правильно распределяз задачи

);