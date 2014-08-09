$(function(){
	//console.log($("a.btn").length);
	//console.log($("a.btn:first").selector)
	var num=6;
	var timer=setInterval(function(){
		num--;
		if(num==0){
			clearInterval(timer);
			$("a.btn:first").html("下一步");
			$("a.btn:first").removeClass("disabled");
			$("a.btn:first").removeClass("btn-info");
			$("a.btn:first").addClass("btn-success");
		}else{
			//console.log(num);
			$("a.btn:first").html(num)
		}		
	},1000);
	//$("a.btn:first").html(18);
});