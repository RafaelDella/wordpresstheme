//Clientes slider
$('section.clientes-slider .slider-container').slick({
    dots: true,
    arrows: false,
    infinite: false,
    speed: 1000,
    slidesToShow: 4,
    autoplay: true,
    centerMode: false,
    autoplaySpeed: 3000,
    pauseOnHover: false,

    responsive: 
    [
    {
        breakpoint: 786,
        settings: {
            slidesToShow: 2
        }
    }
    ]
});

//menu mobile
$('.menu-mobile i').click(function(){
    $('.menu-mobile').find('ul').slideToggle();
})
