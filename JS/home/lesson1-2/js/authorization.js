var arr = [];

for (var i = 0; i < 5; i++) {
  arr[i] = prompt('введите имя пользователя');
}

var userName = prompt('Введите свое имя');
var flag = false;

for (var i = 0; i < arr.length; i++) {
  if (arr[i] === userName) {
    flag = true;
    break;
  }
}

if (flag) {
  alert(userName + ' вы успешно вошли');
} else {
  alert('такого пользователя не существует'); 
}