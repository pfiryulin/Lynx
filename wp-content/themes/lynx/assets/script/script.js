$(document).ready(function(){
    $('.slider').slick({
        dots:true,
        // arrows: false;
        responsive: [{
            breakpoint: 500,
            settings: {
                arrows : false,
                dots:true,
            }
        }, ]
    });

    $('.burger,.menu-link').click(function (event)
    {
        $('.burger,menu,body').toggleClass('active');
    });
})

