/**
 * 
 */
$("#logoutBar").click(function(){
		        $("#userValue").html('');
		        //移除本地sessionStorage
		        sessionStorage.removeItem("username");
		        //console.log(sessionStorage.getItem("username"));
		        sessionStorage.removeItem("icon");
		        sessionStorage.removeItem("id");
		        $(".UIA").css({"display":"inline"});
		        $(".UIB").css({"display":"none"});
		        $.ajax({
		        	"url":"?a=home&m=logout",
		        	'type':"get",
		        	success:function(data){
		        		//console.log(data);
		        	} 
		        });        
		    });