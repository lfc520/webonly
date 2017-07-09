$(function(){
	$(".navtab ul li:eq(0)").addClass("active");
	$(".navtab dl:eq(0)").addClass("spotlight");
	$(".navtab li").each(function(index){
		$(this).click(function(){
			$(".navtab li").removeClass("active").eq(index).addClass("active");
			$(".navtab dl").removeClass("spotlight").eq(index).addClass("spotlight");
		});
	});
});