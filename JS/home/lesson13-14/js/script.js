'use strict';

$(function() {

  var test = [
    {
      question: ' Какой формат передачи данных наиболее распостранен?',
      answers: [
        ' SQL',
        ' TXT',
        ' XML',
        ' JSON'
      ],
      correct: [4]
    },
    {
      question: ' Какой объект для работы с XML файлами втроен во все современные браузеры?',
      answers: [
        ' XMLHttpRequers',
        ' XML',
        ' XMLParser',
        ' Такого объекта нет. Необходимо пользоваться внешними библиотеками.'
      ],
      correct: [4]
    },
    {
      question: ' Какой объект для работы с JSON файлами втроен во все современные браузеры?',
      answers: [
        ' Json',
        ' JSON',
        ' Такого объекта нет. Необходимо пользоваться внешними библиотеками.',
        ' JSONParser'
      ],
      correct: [2]
    },
    {
      question: ' С помощью какого объекта осуществляется доступ к локальному хранилищу в современных браузерах?',
      answers: [
        ' LocalStorage',
        ' localStorage',
        ' Storage',
        ' cookies'
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
