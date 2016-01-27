$(document).ready(function(){

// dropdown menu
$(function () {
    var $links = $('.menu li');
    var $cellWidth = $links.css( "width" );
    $('.submenu_right').css( 'left', $cellWidth )

    $links.hover(
        function(){
            var $submenu = $(this).children('.submenu_down');

            $($submenu).animate({
                height: 'toggle',
                backgroundColor: '#30333b'
                }, 300 );

            var $submenu = $(this).children('.submenu_right');
            $($submenu).animate({
                width: 'toggle',
                backgroundColor: '#30333b'
                }, 300 );
        },

        function(){
            var $submenu = $(this).children('.submenu_down');

            $($submenu).animate({
                height: 'toggle',
                backgroundColor: '#8ebd42'
                }, 300);

            var $submenu = $(this).children('.submenu_right');
            $($submenu).animate({
                width: 'toggle',
                backgroundColor: '#8ebd42'
                }, 200 );
        })
});

//jcarousel
    $(function() {
        $('.jcarousel').jcarousel();

        $('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination').jcarouselPagination({
            item: function(page) {
                return '<a href="#' + page + '">' + page + '</a>';
            }
        });

        $('.jcarousel').jcarouselAutoscroll({
            interval: 3000,
            target: '+=1',
            autostart: true
        });
    });

//select
    var params = {
        changedEl: "select",
        visRows: 7,
        scrollArrows: true
    }
    cuSel(params);

// checkbox
    $(".niceCheck").mousedown(
        function() {
             changeCheck(jQuery(this));
        });

    $(".niceCheck").each(
        function() { 
            changeCheckStart(jQuery(this)); 
        });

    function changeCheck(el){
         var el = el,
              input = el.find("input").eq(0);
         if(!input.attr("checked")) {
            el.css("background-position","0 -17px");    
            input.attr("checked", true)
        } else {
            el.css("background-position","0 0");    
            input.attr("checked", false)
        }
         return true;
    }

    function changeCheckStart(el){
    var el = el,
            input = el.find("input").eq(0);
          if(input.attr("checked")) {
            el.css("background-position","0 -17px");    
            }
         return true;
    }

});
