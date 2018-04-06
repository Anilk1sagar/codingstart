var audio = new Audio('audio_file.mp3');

    function post()
    {
      var tval=document.getElementById("mess").value; 
      var inhtml=document.getElementById("chat_div");
      inhtml.innerHTML=inhtml.innerHTML+"<p class='me'>Me:-"+tval+"</p>";
      inhtml.innerHTML=inhtml.innerHTML+"<p class='demo'>CodeShop:-Hi! how are you</p>";
      audio.play();
    }