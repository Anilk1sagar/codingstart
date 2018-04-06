/* ....this is for audios ........*/

$(document).ready(function(){

    $(".white_btn1").click(function(){
        $("#audios1").trigger('play');
        //pause  2,3,4,5,6,7 audio     
    });

    $(".white_btn2").click(function(){
        $("#audios2").trigger('play');
        //pause 1 audio
    });

    $(".white_btn3").click(function(){
        $("#audios3").trigger('play');

    });

    $(".white_btn4").click(function(){
        $("#audios4").trigger('play');

    });

    $(".white_btn5").click(function(){
        $("#audios5").trigger('play');

    });

    $(".white_btn6").click(function(){
        $("#audios6").trigger('play');

    });

    $(".white_btn7").click(function(){
        $("#audios7").trigger('play');

    });

/* .....................this is for black buttons........................*/

    $(".black_btn_first1").click(function(){
        $("#audiosb1").trigger('play');

    });
    $(".black_btn_first2").click(function(){
        $("#audiosb2").trigger('play');

    });
    $(".black_btn_second3").click(function(){
        $("#audiosb3").trigger('play');

    });
    $(".black_btn_second4").click(function(){
        $("#audiosb4").trigger('play');

    });
    $(".black_btn_second5").click(function(){
        $("#audiosb5").trigger('play');

    });
});