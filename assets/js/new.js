/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



//function to remove bootstrap   navbar affix mode in small devices
$(document).ready(function () {

    var txt = $(window).width();
    if (txt < 600) {
        $(".navbar").removeAttr("data-spy");
    }

});

//hfghghjhgmg


$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 10) {
            $("#navigation").removeClass("container");
            $("#navigation").addClass("container-fluid");

        } 
        else if ($(document).scrollTop() < 1) {
            $("#navigation").removeClass("container-fluid");
            $("#navigation").addClass("container");
        }
    });
});




$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
   
    
});


