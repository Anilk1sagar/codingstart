 function check()
    {
      var val=document.getElementById("t1").scrollHeight;
      var h=document.getElementById("t1").offsetHeight;
      var cal=parseInt(h)-2;
      if(val>cal)
      {
       h=h+50
       document.getElementById("t1").style.height=h;
      }
    }