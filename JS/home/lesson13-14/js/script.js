'use strict';

$(function() {

  var test = [
    {
      question: ' Какой формат передачи данных наиболее распостранен?',
      answer: [
        ' a. SQL',
        ' b. TXT',
        ' c. XML',
        ' d. JSON'
      ],
      correct: [4]
    },
    {
      question: ' Какой объект для работы с XML файлами втроен во все современные браузеры?',
      answer: [
        ' a. XMLHttpRequers',
        ' b. XML',
        ' c. XMLParser',
        ' d. Такого объекта нет. Необходимо пользоваться внешними библиотеками.'
      ],
      correct: [4]
    },
    {
      question: ' Какой объект для работы с JSON файлами втроен во все современные браузеры?',
      answer: [
        ' a. Json',
        ' b. JSON',
        ' c. Такого объекта нет. Необходимо пользоваться внешними библиотеками.',
        ' d. JSONParser'
      ],
      correct: [2]
    },
    {
      question: ' С помощью какого объекта осуществляется доступ к локальному хранилищу в современных браузерах?',
      answer: [
        ' a. LocalStorage',
        ' b. localStorage',
        ' c. Storage',
        ' d. cookies'
      ],
      correct: [2]
    }
  ];

  localStorage.setItem('data', JSON.stringify(test));
  var testItems = JSON.parse(localStorage.getItem('data'));

  var html = $('#testTmpl').html();

  var content = tmpl(html, {
    data: testItems
  });

  $('body').append(content);





});
