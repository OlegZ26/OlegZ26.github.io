$(function() {

  $('#textForm').submit(function() {
    var query = $('#questionForm').val();        
    var url = 'http://ajax.googleapis.com/ajax/services/search/web?v=1.0&key=ABQIAAAACKQaiZJrS0bhr9YARgDqUxQBCBLUIYB7IF2WaNrkYqF0tBovNBQFDtM_KNtb3xQxWff2mI5hipc3lg&rsz=8&q='+ query + '&callback=GoogleCallback&context=?';
           
    $.ajax({
      url: url,
      dataType : "jsonp"
    });
    return false;
  });
});
 
 function GoogleCallback (func, data) {
  var htmlResult = $('#resultsGoogle').html();
    var content = tmpl(htmlResult, data);
  $('.results').html('').append(content);
    
};

//Homework lesson 16

function Human() {
  this.name = 'name';
  this.age = 0;
  this.gender = 'gender';
  this.height = 0;
  this.weight = 0;
}

function Worker() {
  this.job = 'big company';
  this.salary = 5000;
  this.work = function(){
    return 'go to work every morning.';
  };
}

function Student() {
  this.study = 'university';
  this.grants = 250;
  this.watchTv = function() {
    return 'watch TV all day.';
  };
}

Worker.prototype = Object.create(Human.prototype);
Student.prototype = Object.create(Human.prototype);

var worker1 = new Worker();
  worker1.name = 'Nelly';
  worker1.age = 28;
  worker1.gender  = "man";
  worker1.height  = 180;
  worker1.weight  = 80;

var worker2 = new Worker();
  worker2.name = 'Sean';
  worker2.age = 29;
  worker2.gender  = "man";
  worker2.height  = 181;
  worker2.weight  = 81;

var student1 = new Student();
  student1.name = "Pharrell";
  student1.age = 21;
  student1.gender = "man";
  student1.height = 175;
  student1.weight = 70;

var student2 = new Student();
  student2.name = "Alicia";
  student2.age = 19;
  student2.gender = "women";
  student2.height = 170;
  student2.weight = 55;

console.log('Worker name is',worker1.name,
  "\n age:", worker1.age,
  "\n gender:", worker1.gender,
  "\n height:", worker1.height,
  "\n weight:", worker1.weight,
  "\n had job in:", worker1.job,
  "\n had salary in USD:", worker1.salary
);
console.log(worker1.name, worker1.work()); 

console.log ("---------------------------------")

console.log('Worker name is',worker2.name,
  "\n age:", worker2.age,
  "\n gender:", worker2.gender,
  "\n height:", worker2.height,
  "\n weight:", worker2.weight,
  "\n had job in:", worker2.job,
  "\n had salary in USD:", worker2.salary
);
console.log(worker2.name, worker2.work()); 

console.log ("---------------------------------")

console.log('Student name is',student1.name,
  "\n age:", student1.age,
  "\n gender:", student1.gender,
  "\n height:", student1.height,
  "\n weight:", student1.weight,
  "\n he is study in:", student1.study,
  "\n had grants in USD:", student1.grants
);
console.log(student1.name,student1.watchTv()); 

console.log ("---------------------------------")

console.log('Student name is',student2.name,
  "\n age:", student2.age,
  "\n gender:", student2.gender,
  "\n height:", student2.height,
  "\n weight:", student2.weight,
  "\n he is study in:", student2.study,
  "\n had grants in USD:", student2.grants
);
console.log(student2.name,student2.watchTv()); 





