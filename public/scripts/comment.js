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
		fd.append("aid",location.href.split("/")[location.href.split("/").length-1]);
		xhr.send(fd);
		//alert(location.href.split("/")[location.href.split("/").length-1]);
		xhr.addEventListener("readystatechange",function(){
			if(xhr.readyState==4){
				if(xhr.status==200){
					if(xhr.responseText=="ok"){
						//
						//获取元素函数
					    var showComment=document.querySelector("#showComment");
					    var xhr3=new XMLHttpRequest();
					    setPage("/comment/getAll?page=1&aid="+location.href.split("/")[location.href.split("/").length-1]);
					    //setPage("http://www.webonly.org/application/controllers/getUser.php?page=1");
					    function setPage(_url){
					        xhr3.open("get",_url);
					        xhr3.send(null);
					        xhr3.addEventListener("readystatechange",function(){
					            //alert("状态:"+xhr.readyState);
					            if(xhr3.readyState==4){
					                if(xhr3.status==200){
					                    var str=eval(xhr3.responseText);
					                    var content="";
					                    for(i in str[0]){
					                    		content+='<table class="table table-bordered table-striped table-hover">';
					                        content+="<tr>";
					                        content+="<td rowspan='2' width=48 height=48><img style='width:48px;height:48px;' src='http://www.webonly.org/public/uploads/user/"+str[0][i].icon+"'></td><td>"+str[0][i].date+"&nbsp;<span class='text-danger'>"+str[0][i].username+"</span></td>";
					                        content+="</tr>";
					                    		content+="<tr>";
					                        content+="<td>"+str[0][i].content+"</td>";
					                        content+="</tr>";
					                        content+="</table>";
					                    }
					                    
					                    showComment.innerHTML=content;
					                    page.innerHTML=str[1];
					                }
					            }
					        });
					    }

						//
					}else if(xhr.responseText=="failed"){
						
					}
				}
			}
		});
		/////////
	});
//获取元素函数
    var showComment=document.querySelector("#showComment");
    var xhr=new XMLHttpRequest();
    var fd2=new FormData();
    setPage("/comment/getAll?page=1&aid="+location.href.split("/")[location.href.split("/").length-1]);
    //setPage("http://www.webonly.org/application/controllers/getUser.php?page=1");
    function setPage(_url){
        xhr.open("get",_url);
        //fd2.append("aid",location.href.split("/")[location.href.split("/").length-1]);
        xhr.send(null);
        xhr.addEventListener("readystatechange",function(){
            //alert("状态:"+xhr.readyState);
            if(xhr.readyState==4){
                if(xhr.status==200){
                    var str=eval(xhr.responseText);
                    var content="";
                    for(i in str[0]){
                    		content+='<table class="table table-bordered table-striped table-hover">';
                        content+="<tr>";
                        content+="<td rowspan='2' width=48 height=48><img style='width:48px;height:48px;' src='http://www.webonly.org/public/uploads/user/"+str[0][i].icon+"'></td><td>"+str[0][i].date+"&nbsp;<span class='text-danger'>"+str[0][i].username+"</span></td>";
                        content+="</tr>";
                    		content+="<tr>";
                        content+="<td>"+str[0][i].content+"</td>";
                        content+="</tr>";
                        content+="</table>";
                    }
                    
                    showComment.innerHTML=content;
                    page.innerHTML=str[1];
                }
            }
        });
    }


