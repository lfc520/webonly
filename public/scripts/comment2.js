$(function(){
	function setPage(url){
		var xhr2=new XMLHttpRequest();
		xhr2.open("get",url);
		xhr2.send(null);
		xhr2.addEventListener("readystatechange",function(){
			if(xhr2.readyState==4){
				if(xhr2.status==200){
					///////
					var showComment=document.querySelector("#showComment");
					showComment.innerHTML="";						
					var str=eval(xhr2.responseText);	
					//console.log(str);
					for(var i=0;i<str[0].length;i++){
						showComment.innerHTML+="<table class='table table-condensed'>";
						showComment.innerHTML+="<tr>";
						showComment.innerHTML+="<td>"+str[0][i].content+"</td>";
						showComment.innerHTML+="</tr>";
						showComment.innerHTML+="</table>";
					}
					document.querySelector("#page").innerHTML=str[1];
				}
			}
		});
	}
	setPage("http://www.webonly.org/application/controllers/getUser.php?page=1");
	$("#commentBtn").click(function(){
	///验证是否登录
		if(!sessionStorage.getItem("username")){
			$("#msgModal .msg").html("请先登录");
			$("#msgModal").modal("show");
			setTimeout(function(){
				$("#msgModal").modal("hide");
			},2000);
			return false;
		}
		/////////
		//验证内容不能为空
		if($.trim($(".comment_content").val()).length==0){
			$("#msgModal .msg").html("内容不得为空");
			$("#msgModal").modal("show");
			setTimeout(function(){
				$("#msgModal").modal("hide");
			},2000);
			return false;
		}
		////添加评论/////
		var xhr=new XMLHttpRequest();
		var fd=new FormData();
		xhr.open("post","/comment/add");
		fd.append("content",document.querySelector(".comment_content").value);
		fd.append("uid",sessionStorage.getItem("id"));
		fd.append("tid","a"+location.href.split("/")[location.href.split("/").length-1]);
		xhr.send(fd);
		//alert(location.href.split("/")[location.href.split("/").length-1]);
		xhr.addEventListener("readystatechange",function(){
			if(xhr.readyState==4){
				if(xhr.status==200){
					if(xhr.responseText=="ok"){
						
					}else if(xhr.responseText=="failed"){
						
					}
				}
			}
		});
		/////////
	});
});