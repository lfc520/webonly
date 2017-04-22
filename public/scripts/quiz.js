$(function(){
	/////
	//alert(sessionStorage.getItem("id"));
	$("#uid").val(sessionStorage.getItem("id"));
	//alert($(".choice .item").length);
	///在右边显示选择器的序号
	for(var i=1;i<=$(".choice .item").length;i++){
		$(".jump .content1").append("<li>"+i+"</li>");
	}
	///在右边显示判断器的序号
	for(var j=1;j<=$(".judge .item").length;j++){
		$(".jump .content2").append("<li>"+j+"</li>");
	}
	//////点击选择题序号，滑动到对象的题目///////////////////
	$(".jump .content1 li").each(function(index){
		$(this).click(function(){
			//console.log($(".choice a").eq(index).offset().top);
			$('html,body').animate({
                scrollTop: $(".choice a").eq(index).offset().top
            },1000);
		});
	});
//////点击判断题序号，滑动到对象的题目///////////////////
	$(".jump .content2 li").each(function(index){
		$(this).click(function(){
			//console.log($(".choice a").eq(index).offset().top);
			$('html,body').animate({
                scrollTop: $(".judge a").eq(index).offset().top
            },1000);
		});
	});
	////////////////////
	$(".choice dt").each(function(_index){
		$(this).click(function(){
			$(".jump .content1 li").eq(_index).addClass("highlight");
		});
	});
	//点击了单选题
	$(".choice dd input").each(function(index){
		$(this).click(function(){
			var num=$(this).attr("num");
			$(".jump .content1 li").eq(num).addClass("highlight");
		});
	});
	//点击了判断题
	$(".judge dd input").each(function(index){
		$(this).click(function(){
			var num=$(this).attr("num");
			$(".jump .content2 li").eq(num).addClass("highlight");
		});
	});
	var duration=5;
	var timer=setInterval(function(){
		duration--;
		if(duration==0){
			clearInterval(timer);
		}
		$(".countdown span").html(duration);
	},1000);
	////////////////
	var mydate=new Date();
	var starttime=mydate.getTime();
	var gotime=1;
	var tt=setInterval(function(){
		var s=new Date();
		var d=s.getTime()-starttime;
		//50分钟
		var f=$("#totalTime").val()*60*1000;
		var f1='',f2='';
		f=parseInt((f-d)/1000); // 剩余时间
		f1=Math.floor(f/60);
		f2=Math.floor(f%60);
		if (f1<10) f1='0' + f1;
		if (f2<10) f2='0' + f2;
		//alert(f1);
		$(".countdown span").html(f1+":"+f2);
		d=parseInt(d/1000);
		u1=Math.floor(d/60);
		u2=Math.floor(d%60);
		if (u1<10) u1='0' + u1;
		if (u2<10) u2='0' + u2;
		$("#usedTime").val(u1+":"+u2);
		if (f==300){
			$("#warning .modal-body").html("离考试结束还有5分钟，请抓紧时间!");
			$("#warning").modal("show");
			setTimeout(function(){
				$("#warning").modal("hide");
			},3000);
		}
		if(f==35){
			//clearInterval(tt);
			//alert("考试时间到,系统自动交卷！");
			$("#warning .modal-body").html("请在30秒内提交，否则自动交卷！");
			$("#warning").modal("show");
			setTimeout(function(){
				$("#warning").modal("hide");
			},3000);
			//alert($("#choice[324]d").val());
			//$("#exam").submit();
			//$("#submitBtn")[0].click();
		}
		if(f==0){
			clearInterval(tt);
			$(".countdown span").html("考试结束");
			//$("#submitBtn").addClass("disabled");
			//$("#submitBtn").attr("disabled",true);
			$("#submitBtn")[0].click();
		}
	},1000);
	///////////
	$("#submitBtn").click(function(){
		location.replace(location.href);
	});
});