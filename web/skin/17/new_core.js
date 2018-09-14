


function btnclos(){
	$(".btnclose_box").slideToggle("show");
	$("#btnclose").toggleClass("btnclose_sx")
}



setInterval(opt,2000);
function opt(){
	$(".dsn").css("opacity","0");
	setTimeout(function(){
		$(".dsn").css("opacity","1");
	},1000)
}




setInterval(zx,3000);
var zx = 0;
function zx(){
	zx -= 40;
	$(".con_ts").css("top",zx+"px");
	var k = $(".con_ts p").length;
	if(zx == -40*(k)){
		$(".con_ts").css("top","0");
		zx = 0;
	}

}


setInterval(zx1,3000);
var zx1 = 0;
function zx1(){
	zx1 -= 40;
	$(".con_ts1").css("top",zx1+"px");
	var k = $(".con_ts1 p").length;
	if(zx1 == -40*(k)){
		$(".con_ts1").css("top","0");
		zx1 = 0;
	}

}


setInterval(btnclose_fl,3000);
var btnclose_fl = 0;
function btnclose_fl(){
	btnclose_fl++;
	$(".btnclose_fl li").eq(btnclose_fl).css("opacity","1").siblings("li").css("opacity","0");
	if(btnclose_fl == $(".btnclose_fl li").length-1){
		btnclose_fl = -1;
	}
}





function dd1(){
	$(".bxslider4").find("li").eq(0).css("display","block");
	$(".bxslider4").find("li").eq(1).css("display","none");
}
function dd2(){
	$(".bxslider4").find("li").eq(0).css("display","none");
	$(".bxslider4").find("li").eq(1).css("display","block");
}


setInterval(bxslider4,3000);
var bxslider4 = 0;

function bxslider4(){
	$(".bxslider4").find("li").eq(bxslider4).css("display","block").siblings("li").css("display","none");
	
	if(bxslider4 == $(".bxslider4 li").length-1){
		bxslider4 = -1; 
	}
	bxslider4 ++;
}



var gamelist2 = setInterval(gamelist1,5000);
var gamelist1 = 1;

function gamelist1(){	
	$(".gamelist1").find("div").eq(gamelist1).css("display","block").siblings("div").css("display","none");
	
	if(gamelist1 == $(".gamelist1 div").length-1){
		gamelist1 = -1; 
	}
	gamelist1 ++;
}



$(window).scroll(function(){
	var k = document.body.scrollTop ;
	if(k < 250){
		$(".scrolltop").css("opacity","0");
	}
	if(k >= 250){
		$(".scrolltop").css("opacity","1");
	}
})



var seconds = -200;
function getdate(){
    seconds += 20;
   	$("#bar2").css("left",seconds+"px");
   	
    }

   function sss(){
      if(seconds >= -70){
      	  
        return;
      }
     getdate();
     var set = setTimeout(sss,100); 
   }
  sss();


var seconds1 = -200;
function getdate1(){
    seconds1 ++;
   	$("#bar1").css("left",seconds1+"px");
   	
    }

   function sss1(){
      if(seconds1 >= -170){
      	  
        return;
      }
     getdate1();
     var set = setTimeout(sss1,20); 
   }
  sss1();



var seconds2 = 0;
function getdate2(){
    seconds2 ++;
   	$("#count1").text(seconds2);
   	
    }

   function sss2(){
      if(seconds2 >= 35){
      	  
        return;
      }
     getdate2();
     var set = setTimeout(sss2,20); 
   }
  sss2();


var seconds3 = 0;
function getdate3(){
    seconds3 +=20;
    if(seconds3 <=60){
    	$("#count2").text("0‘"+seconds3);
    }else{
    	$("#count2").text("1‘"+(seconds3-60));
    }
   		
   	
    }

   function sss3(){
      if(seconds3 >=120){
      	$("#count2").text("2‘00");
      	  return;    
      }
     getdate3();
     var set = setTimeout(sss3,100); 
   }
  sss3();
  



var seconds4 = 0;
function getdate4(){
    seconds4 ++;
   	$("#count3").text(seconds4);
   	
    }

   function sss4(){
      if(seconds4 >= 34){
      	  
        return;
      }
     getdate4();
     var set = setTimeout(sss4,20); 
   }
  sss4();
  
  function seover(){
	 $(".wechatqr").show()
  }
  
  function seout(){
    $(".wechatqr").hide()
  }
