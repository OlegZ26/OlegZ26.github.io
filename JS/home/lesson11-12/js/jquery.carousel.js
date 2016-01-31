(function($) {

    $.fn.mycarousel = function(options) {

        var defaults = {
            pictureWidth: 100,
            pictureAmount: 5,
            margin: 25,
            animationSpeed: 300,
            height: 120
        };

        var settings = $.extend(defaults, options);
        var listWidth = (settings.pictureWidth + settings.margin) * settings.pictureAmount - settings.margin;
        
        $('.carousel-element img').css('maxWidth', settings.pictureWidth);
        $('.carousel-element').css('marginRight', settings.margin);
        $('.carousel-hider').css('width', listWidth);
        $('.carousel').css('height', settings.height);
        var carouselHeight = parseInt( ($('.carousel').css('height') ));
        var bottomMargin = (carouselHeight / 2) - 30;
        $('.carousel-arrow-right, .carousel-arrow-left').css('marginTop', bottomMargin);

        var leftUIEl = $('.carousel-arrow-left');
        var rightUIEl = $('.carousel-arrow-right');
        var elementsList = $('.carousel-list');

        var pixelsOffset = settings.pictureWidth + settings.margin;
        var currentLeftValue = 0;
        var elementsCount = elementsList.find('li').length;
        var minimumOffset = - ((elementsCount - settings.pictureAmount) * pixelsOffset);
        var maximumOffset = 0;

        leftUIEl.click(function() {
            if (currentLeftValue != maximumOffset) {
                currentLeftValue += pixelsOffset;
                elementsList.animate({ left : currentLeftValue + "px"}, settings.animationSpeed);
            } 
        });

        rightUIEl.click(function() {        
            if (currentLeftValue != minimumOffset) {
                currentLeftValue -= pixelsOffset;
                elementsList.animate({ left : currentLeftValue + "px"}, settings.animationSpeed);
            }        
        });

        return this;

    }

})(jQuery);