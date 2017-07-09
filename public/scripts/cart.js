/**
 * 购物车
 */
$(function(){
	//购买前的登录
	$(".orderBtn").click(function(){
		if($("#userValue").text()==""){
			$("#msgModal .msg").html("请先登录");
			$("#msgModal").modal("show");
			setTimeout(function(){
				$("#msgModal").modal("hide");
			},2000);
			return false;
		}
	});
	//商品详情tab
	$(".tab li").each(function(index){
		$(this).click(function(){
			$(".tab li").removeClass("active").eq(index).addClass("active");
			$(".tab div").removeClass("spotlight").eq(index).addClass("spotlight");
		});
	});
});