$(document).ready(function(){
    $(".bulbbtn").click(function(){
        $("#images").find('img').toggle();
    });

    $(".tvbtn").click(function(){
        $("#tv").find('img').toggle();
    });

    $(".fanbtn").click(function(){
        $("#firstfan").toggleClass("rotate");
    });

});





