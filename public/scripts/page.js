define(['jquery'],function(jquery){
	return{
		page:function(){
			 ////////////////
		    /*page分页:下拉选择页*/
		    $("#mySelect").change(function(){
		    	$("#jumpBar").html($(this).val());
		    	$("#jumpBar").attr("href",setPage("/demo/page/client.php?&page="+$(this).val()));
		    });
		    $("#urInput").keyup(function(evt){
		    	$("#jumpBar").html($(this).val());
		    	$("#jumpBar").attr("href",setPage("/demo/page/client.php?&page="+$(this).val()));
		    });
		}
	}
});