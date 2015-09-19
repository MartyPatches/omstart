var $ = require('jquery');

(function(){
    var parallax = {
        init: function(){
            $(document).ready(function(){
                $('[data-type="background"]').each(function(){
                    var $bgobj = $(this); // assigning the object

                    $(window).scroll(function() {
                        console.log("bgObject", $bgobj.offsetTop, $bgobj.offset().top, $bgobj.height());
                        var yPos = -($(window).scrollTop() / $bgobj.data('speed'));

                        // Put together our final background position
                        var coords = yPos + 'px';

                        console.log("scrtollTop()", $(window).scrollTop());
                        console.log("innerHeight", window.innerHeight);
                        var heightFromTop = $bgobj.offset().top - window.innerHeight;
                        if($(window).scrollTop() > heightFromTop){
                            if( heightFromTop > 0){
                                console.log("NU SYNS DET", $(window).scrollTop(), heightFromTop, $bgobj.data('speed'));
                                $bgobj.css({ backgroundPositionY: -(($(window).scrollTop() - heightFromTop) / $bgobj.data('speed')) + 'px' });
                            } else {
                                $bgobj.css({ backgroundPositionY: coords });
                            }
                        }


                    });
                });
            });
        }
    }

    parallax.init();
})();