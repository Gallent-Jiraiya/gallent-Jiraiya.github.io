$( document ).ready(function() {
    $(".top").trigger('click');  
    $("#vehicles").trigger('click');  
    var slider =  $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        auto:true,
        speed: 400,
        pause: 4000,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });
    $(slider).mouseenter(function(){
        slider.pause();
    });
    $(slider).mouseleave(function(){
        slider.play();
    }); 
}); 

