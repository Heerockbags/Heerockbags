// JavaScript Document
$(document).ready(function() {
    $("#autoWidth").lightSlider({
        
        autoWidth: true,
        item: 4,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,

 
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
 
        speed: 900, //ms'
        auto: false,
        loop: true,
        slideEndAnimation: true,
        pause: 2000,
 
        keyPress: true,
        controls: true,
        prevHtml: '',
        nextHtml: '',

        responsive : [],
        onSliderLoad: function () 
        {
            $('#autoWidth').removeClass('cS-hidden');
        }
        
    });  
  });