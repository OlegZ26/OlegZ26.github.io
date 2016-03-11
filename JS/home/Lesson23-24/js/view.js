define(                                                                   // определение модуля, все модули или "куски" программы оборачиваем в метод define
  'view',                                                                 // название модуля
  ['jquery', 'model'],                                                    // список зависимостей (что ему нужно подгрузить, прежде чем загрузится этот модуль)
  function() {
    function View(model) {                                                                // Берем данные и выводим их на страницу
      var self = this;

      function init() {                                                                   // внутренний метод, вставка каркаса
        var wrapper = tmpl($('#wrapper-template').html());                                // шаблон wrapper который будем потом вставлять

        $('body').append(wrapper);                                                        // ищем body и вставляем в него шаблон wrapper
        self.elements = {                                                                 // храним ссылки на наши DOM элементы которые отвечают за кнопки "добавить", "удалить"
          input: $('.item-value'),                                                        // input с которого мы считываем информацию для в ставки в список
          addBtn: $('.item-add'),                                                         // сохраняем кнопку по клику на которую будем "что-то делать"
          listContainer: $('.item-list')                                                  // сохраняем контейнер в который мы будем вставлять список наших задач
        };
        self.renderList(model.data);                                                      // инзначально (на init-е) один раз рендерим список (принимаем массив), то что есть в моделе (model.data)
      };

      self.renderList = function (data) {                                                 // метод рендеринга списка. каждый раз рендерим список который меняется (не всю страницу) после добавления или удаления - старый удаляем новый вставляем
        var list = tmpl($('#list-template').html(), {data: data});                        // вытягиваем контент из шаблона, передаем туда информацию (данные из нашей модели) взять шаблон, сгенерировать li и вставить его в listContainer
        self.elements.listContainer.html(list);                                           // скомпелированный список (скомпилировали при помощи шаблонизатора) - вставили в listContainer (в ul)
      };

      init();                                                                             // инициализируем вставку каркаса, вызываем этот метод (происходит один раз)

      self.elements.listContainer.on('focus', '.item-text-edit', function () {            //
        $(this).siblings('.item-delete').fadeOut( 'fast', function () {                   //
          $(this).siblings('.item-edit').fadeIn('fast').css({'visibility' : 'visible'});  //
        });
      });

      self.elements.listContainer.on('focusout', '.item-text-edit', function () {         //
        $(this).siblings('.item-edit').fadeOut( 'fast', function () {                     //
          $(this).siblings('.item-delete').fadeIn('fast');                                //
        });
      });

    };
    return View;
  }
);