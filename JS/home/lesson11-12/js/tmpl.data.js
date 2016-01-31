(function($) {

    var html = $('#my_tmpl').html();

    var profile = {
  	    name: "Олег Жебровский",
  	    img: "img/2.jpg",
  	    job: "Junior Front-end Developer",
  	    skills: [
	        {skill:"HTML"},
		    {skill:"CSS"},
		    {skill:"JavaScript"},
	    ],
	    phoneNumber: "+380501339565",
	    facebook: "https://www.facebook.com/olegzigu",
	    feedback: "Some feedback"
    };

    var content = tmpl(html, profile);

    $('body').append(content);

})(jQuery);