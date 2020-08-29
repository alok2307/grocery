$(document).ready(function(){

    $("#banner-area .owl-carousel").owlCarousel({
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem:true,
        dots:true,
        items:1
    });

    $("#latest-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:5
            },
            1000:{
                items:5
            }
        }
    });

    // isotope filters
    var $grid = $(".grid").isotope({
        itemSelector :'.grid-items',
        layoutMode : 'fitRows'
    })

    // filters button on click
    $(".button-group").on('click','button',function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    })


    // latest-blog
    $("#latest-blog .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });
    
    // product qty section 
    var $qty_up = $(".quantity .qty-up");
    var $qty_down = $(".quantity .qty-down");
    // var $qty_input = $(".quantity .qty-input");

    $qty_up.click(function(e){
        let $qty_input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($qty_input.val()>=1 && $qty_input.val()<=9){
            $qty_input.val(function(i,oldval){
                return ++oldval;
            })   
        }
    })
    $qty_down.click(function(e){
        let $qty_input = $(`.qty-input[data-id='${$(this).data("id")}']`);
        if($qty_input.val()>1 && $qty_input.val()<= 10){
            $qty_input.val(function(i,oldval){
                return --oldval;
            });
        }
    });
});