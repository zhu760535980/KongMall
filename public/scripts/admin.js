$(function(){	
	$(".confirm-delete").click(function(){
		//alert(333);
		//bootstrap.js的语法
		$("#myModal").modal("show");
		//把删除按钮的href付给确定按钮
		$("#btrue").attr('href',$(this).attr("href"));		
		//alert($("#btrue").attr('href'));
		return false;
	});
	$("#selectBar").click(function(){	
		//后面的input的checked状态与第一个一样；
		$("input:not(#selectBar)").prop("checked",$("#selectBar").prop("checked"));
	});
});