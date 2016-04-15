define(                                                                    // определение модуля, все модули или "куски" программы оборачиваем в метод define
  'model',                                                                // название модуля
  [],                                                                     // список зависимостей (что ему нужно подгрузить, прежде чем загрузится этот модуль)
  function() {
    function Model(data) {
      var self = this;                                                    // поскольку это конструктор класса

      self.data = data;                                                   // список задач, храняться в поле data

      self.addItem = function (item) {                                    // метод добавления нового элемента в массив (data)
        if (item.length === 0){                                           // проверка на корректность входящих данных, в этом случае, если заходит пустая строка
          return;                                                         // то мы ничего не делаем
        };

        self.data.push(item);                                             // вставляем в массив при помощи стандартного метода push

        return self.data;                                                 // возвращаем обновленные данные в точну вызова
      };

      self.removeItem = function (item) {                                 // метод удаления выбраного элемента из массива (data)
        var index = self.data.indexOf(item);                              // находим элемент в списке, который будем удалять. ищем совпадение строк и возвращаем и сохранчем их индекс

        if (index === -1){                                                // проверка на корректность входящих данных, если не найден никакой элемент (-1)
          return;                                                         // то мы делать ничего не будем
        };

        self.data.splice(index, 1);                                       // при помощи метода splice удаляем элемент ()

        return self.data;                                                 // возвращаем обновленные данные в точну вызова
      };

      self.editItem = function (item, newItem) {                          //
        var index = self.data.indexOf(item);                              //

        if (index === -1) {                                               //
          return;
        };

        self.data.splice(index, 1, newItem );                             //

        return self.data;
      };

    };
    return Model;
  }
);