$(document).ready(function(){
    $('.slider').slick({
        // dots:true,
        // arrows: false;
        responsive: [{
            breakpoint: 500,
            settings: {
                arrows : false,
                dots:true,
            }
        }, ]
    });

    $('.kitchen').click(function (event)
    {
        $('.kitchen,menu').toggleClass('active');
    });
})

