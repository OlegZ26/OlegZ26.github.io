define(                                                                             // определение модуля, все модули или "куски" программы оборачиваем в метод define
  'controller',                                                                     // название модуля
  ['model', 'view'],                                                                // список зависимостей (что ему нужно подгрузить, прежде чем загрузится этот модуль)
  function() {
    function Controller(model, view) {                                              // Отвечает за взаимодействие с пользователем
      var self = this;
                                                                                    // вешаем обработчики событий и слушаем, что там происходит
      view.elements.addBtn.on('click', addItem);                                    // по клику вызываем метод (addItem), который будет добавлять по значению из input-а новые значения в модель
      view.elements.input.on('keydown', function(e){                                // добавляем новый элемент в список по клику на enter
        if( e.keyCode === 13 ){                                                     //
          addItem();                                                                //
        }
      });
      view.elements.listContainer.on('click', '.item-delete', removeItem);          //
      view.elements.listContainer.on('focus', '.item-text-edit', takeItem);         //
      view.elements.listContainer.on('click', '.item-edit', editItem);              //

      function addItem() {                                                          // сам метод который будет добавлять по значению из input-а новые значения в модель
        var newItem = view.elements.input.val();                                    //

        model.addItem(newItem);                                                     // вызываем метод модели и передаем туда строку которая была записпана в input-е
        view.renderList(model.data);                                                // заставляем вьюху все это отобразить (изменить список с новыми данными которые мы передали)
        view.elements.input.val('');                                                // почле очищаем поле после добавления нового элемента в список (очистили поле с input-ом)
      };

      function removeItem() {                                                       // метод удаления выбраного элемента из html
        var item = $(this).attr('data-value');                                      // из атрибута по которому произошел клик мы вытягиваем значение элемента который должен удалиться (вытягиваем по значению атребута data-value)

        model.removeItem(item);                                                     // нужно из модели удалить значение
        view.renderList(model.data);                                                // вюха заново рендерит наш список
      };

      function takeItem () {                                                        //
        self.itemVal = $(this).val();                                               //
      };

      function editItem () {                                                        // метод редактирования выбраного элемента списка
        self.itemNewVal = $(this).siblings('input').val();                          //
        model.editItem(self.itemVal, self.itemNewVal);                              //
        view.renderList(model.data);                                                // вюха заново рендерит наш список
      };

    };
    return Controller;
  }
);