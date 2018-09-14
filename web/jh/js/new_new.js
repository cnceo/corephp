$("input").focus(function(){
		if($(this).attr("id") == "bet_money1"){
		}else{
			$(this).click();
			$(this).val("");
		}
		
	})
	
	$(".amount input").click(function(event){
			
		    event.stopPropagation();
		
		});
	
	
	$(".amount").append("<div class='arrow_box'><span class='poptip-arrow poptip-arrow-top'><em>◆</em><i>◆</i><button class='dbclose'>关闭</button></div>")	
		$(".cont-col3-box2").eq(1).prepend("<span class='xkjee'>快选金额")
		
		var n ="";
		var k=[];
		$(".xkjee").click(function(){
			$(".kxje").show();
			k.splice(0,k.length);
			$(".db").remove();
		});
		$(".colse1").click(function(){
			$(".kxje").hide();
		});
		$("#settingbet_0").click(function(){
			$("#settingbet_0").prop('checked',true);
			$("#settingbet_0").val("1");
			$("#settingbet_1").prop('checked',false);
			$("#settingbet_1").val("0")
		})
		
		$("#settingbet_1").click(function(){
			$("#settingbet_1").prop('checked',true);
			$("#settingbet_1").val("1");
			$("#settingbet_0").prop('checked',false);
			$("#settingbet_0").val("0")
			
		})
		
		function submitsetting(){
			if($("#settingbet_0").val() ==1){
				
				$(".kxje").hide();
				
				
				for(var i=0;i<$(".ds").length;i++){
					n += $(".ds").eq(i).val();
					k[i] = $(".ds").eq(i).val();
	
				}
				
				for(var c=0;c<k.length;c++){
		
					if(k[c] != ""){				
						$(".arrow_box").prepend("<button id='"+k[c]+"' rel='12' onclick='xzdj(this)' class='db'>下注"+k[c]+"元</button>")
					}else{
						
					}
					
				}
			}else{
				
				$(".ds").val("");
				$(".kxje").hide();
			}
			
			if($("#settingbet_1").val() ==1){
				n = "";
			}
			console.log(n)
		}
		
		$(".amount input").focus(function(){	
			
			
			if(n == ""){
				$(this).parent().click();
				$(this).val("");
			}else{
				$(".arrow_box").hide();
				$(this).next().show();
			}
	
		});
		
		
		
		function xzdj(obj){
			var c =	$(obj).attr("id");
			$(".arrow_box").hide();
			console.log(111)
			$("#bet_money1").val(c);
		}
		
		
		$(".dbclose").click(function(){
			$(this).parent().parent().click();
			$(".arrow_box").hide();
			$("#bet_money1").val("");
		})
		
		$(document).click(function(){
			$(".arrow_box").hide();
		});
	function jgzss(num){		
		jajaxs(num);
		$("#resultList").show();
	}
	function jajaxs(num){
			$.ajax({  
    		url:'/game/numbers',  
     		data:{numbers : num},  
     		type:'GET',  
    		cache:false,       		
			dataType:'json',  
     		success:function(data) {
				if(data){
					for(i=0;i<data['time'].length;i++){
						
						var strhtml = "";
						strhtml +='<tr><td class="period" colspan="2">'+data['number'][i]+'</td><td class="drawTime" colspan="4">'+data['time'][i]+'</td><td style="width: 20px;">';
						for(j=0;j<data['data'][0].length;j++){
						strhtml +='<td class="name ballname" style="display: table-cell; text-align: center;"><b class="b'+data['data'][i][j]+'" style="margin:0 auto;display:block">'+data['data'][i][j]+'</b></td>';
						}
						strhtml += '';
						$("#hm").append(strhtml);
					}
					for(i=0;i<data['time'].length;i++){
						var strhtmldx = "";
						strhtmldx +='<tr><td class="period" colspan="2">'+data['number'][i]+'</td><td class="drawTime" colspan="4">'+data['time'][i]+'</td><td style="width: 20px;">';
						for(j=0;j<data['data'][0].length;j++){
							if(data['data'][i][j]>=6){
								strhtmldx +='<td class="name ballname" style="display: table-cell;"><p class="da">大</p></td>';
							}
							else{
								strhtmldx +='<td class="name ballname" style="display: table-cell;"><p class="xia">小</p></td>';
							}
						}
						strhtmldx += '';
						$("#dx").append(strhtmldx);
					}
					for(i=0;i<data['time'].length;i++){
						var strhtmlds = "";
						strhtmlds +='<tr><td class="period" colspan="2">'+data['number'][i]+'</td><td class="drawTime" colspan="4">'+data['time'][i]+'</td><td style="width: 20px;">';
						for(j=0;j<data['data'][0].length;j++){
							if(data['data'][i][j]%2!=0){
								strhtmlds +='<td class="name ballname" style="display: table-cell;"><p class="dan">单</p></td>';
							}
							else{
								strhtmlds +='<td class="name ballname" style="display: table-cell;"><p class="su">双</p></td>';
							}
						}
						strhtmlds += '';
						$("#ds").append(strhtmlds);
					}
					for(i=0;i<data['time'].length;i++){
						var strhtmlgy = "";
						strhtmlgy +='<tr><td class="period" colspan="2">'+data['number'][i]+'</td><td class="drawTime" colspan="4">'+data['time'][i]+'</td><td style="width: 20px;">';
						strhtmlgy +='<td class="period" colspan="2">'+(data['data'][i][0]*1+data['data'][i][1]*1)+'</td>';
						if((data['data'][i][0]*1+data['data'][i][1]*1)>11){
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="da">大</p></td>';
						}
						else{
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="xia">小</p></td>';
						}
						if((data['data'][i][0]*1+data['data'][i][1]*1)%2!=0){
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="dan">单</p></td>';
						}
						else{
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="su">双</p></td>';
						}
						for(j=0;j<data['data'][0].length;j++){
							if(j<data['data'][0].length-1-j){
								if(data['data'][i][j]>data['data'][i][data['data'][0].length-1-j]){
									strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="lo">龙</p></td>';
								}
								else{
									strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="hu">虎</p></td>';
								}
							}
						}
						strhtmlgy += '';
						$("#gy").append(strhtmlgy);
					}
				}
 			}
					 
		})		
	}
	function  breakeds(num){
		$("#hm tr").remove();
		$("#dx tr").remove();
		$("#ds tr").remove();
		$("#gy tr").remove();
		jajaxs(num);
	}	
		
	function jgzs(num){		
		jajax(num);
		$("#resultList").show();
	}
	function jajax(num){
			$.ajax({  
    		url:'/game/numbers',  
     		data:{numbers : num},  
     		type:'GET',  
    		cache:false,       		
			dataType:'json',  
     		success:function(data) {
				if(data){
					for(i=0;i<data['time'].length;i++){
						
						var strhtml = "";
						strhtml +='<tr><td class="period" colspan="2">'+data['number'][i]+'</td><td class="drawTime" colspan="4">'+data['time'][i]+'</td><td style="width: 20px;">';
						for(j=0;j<data['data'][0].length;j++){
						strhtml +='<td class="name ballname" style="display: table-cell; text-align: center;"><b class="b'+data['data'][i][j]+'" style="margin:0 auto;display:block">'+data['data'][i][j]+'</b></td>';
						}
						strhtml += '';
						$("#hm").append(strhtml);
					}
					for(i=0;i<data['time'].length;i++){
						var strhtmldx = "";
						strhtmldx +='<tr><td class="period" colspan="2">'+data['number'][i]+'</td><td class="drawTime" colspan="4">'+data['time'][i]+'</td><td style="width: 20px;">';
						for(j=0;j<data['data'][0].length;j++){
							if(data['data'][i][j]>=5){
								strhtmldx +='<td class="name ballname" style="display: table-cell;"><p class="da">大</p></td>';
							}
							else{
								strhtmldx +='<td class="name ballname" style="display: table-cell;"><p class="xia">小</p></td>';
							}
						}
						strhtmldx += '';
						$("#dx").append(strhtmldx);
					}
					for(i=0;i<data['time'].length;i++){
						var strhtmlds = "";
						strhtmlds +='<tr><td class="period" colspan="2">'+data['number'][i]+'</td><td class="drawTime" colspan="4">'+data['time'][i]+'</td><td style="width: 20px;">';
						for(j=0;j<data['data'][0].length;j++){
							if(data['data'][i][j]%2!=0){
								strhtmlds +='<td class="name ballname" style="display: table-cell;"><p class="dan">单</p></td>';
							}
							else{
								strhtmlds +='<td class="name ballname" style="display: table-cell;"><p class="su">双</p></td>';
							}
						}
						strhtmlds += '';
						$("#ds").append(strhtmlds);
					}
					for(i=0;i<data['time'].length;i++){
						var strhtmlgy = "";
						strhtmlgy +='<tr><td class="period" colspan="2">'+data['number'][i]+'</td><td class="drawTime" colspan="4">'+data['time'][i]+'</td><td style="width: 20px;">';					
						if((data['data'][i][0]*1+data['data'][i][1]*1+data['data'][i][2]*1+data['data'][i][3]*1+data['data'][i][4]*1)>=23){
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="da">大</p></td>';
						}
						else{
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="xia">小</p></td>';
						}
						if((data['data'][i][0]*1+data['data'][i][1]*1+data['data'][i][2]*1+data['data'][i][3]*1+data['data'][i][4]*1)%2!=0){
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="dan">单</p></td>';
						}
						else{
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="su">双</p></td>';
						}							
						if(data['data'][i][0]>data['data'][i][4]){
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="lo">龙</p></td>';
						}
						else if(data['data'][i][0]<data['data'][i][4]){
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="hu">虎</p></td>';
						}
						else{
							strhtmlgy +='<td class="name ballname" style="display: table-cell;"><p class="he">和</p></td>';
						}	
						strhtmlgy += '';
						$("#gy").append(strhtmlgy);
					}
				}
 			}
					 
		})		
	}
	function  breaked(num){
		$("#hm tr").remove();
		$("#dx tr").remove();
		$("#ds tr").remove();
		$("#gy tr").remove();
		jajax(num);
	}
	jQuery(function(){
		$(".tuozhuai").Tdrag({
	     scope:".clearfix"
		});
	})
	function tz(obj){
		var clas =$(obj).attr("class");
		$(".tzbox").removeClass("tzbox_on");
		$("#"+clas).addClass("tzbox_on")
	}