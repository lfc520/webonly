$(function() {
	$("#respondBtn").click(function(){
		if (CKEDITOR.instances.respond.getData()== 0) {
			$("#msgModal .msg").html("回复内容不得为空");
			$("#msgModal").modal("show");
			setTimeout(function(){
				$("#msgModal").modal("hide");
			},2000);
			return false;
		}
		return true;
	});
	$("#submitBtn").click(function() {
		//alert(ue.getContent());
		//alert($("#commentEditor")[0].getContent());
		if ($("#cid").val() == 0) {
			$("#msgModal .msg").html("请选择一个主题");
			$("#msgModal").modal("show");
			setTimeout(function(){
				$("#msgModal").modal("hide");
			},2000);
			return false;
		}
		if ($("#topic").val() == 0) {
			$("#msgModal .msg").html("问题名称不得为空");
			$("#msgModal").modal("show");
			setTimeout(function(){
				$("#msgModal").modal("hide");
			},2000);
			return false;
		}
		if (ue.getContent()== 0) {
			$("#msgModal .msg").html("问题内容不得为空");
			$("#msgModal").modal("show");
			setTimeout(function(){
				$("#msgModal").modal("hide");
			},2000);
			return false;
		}
		if(ue.getContent().length==0){
			$("#msgModal .msg").html("内容不得为空");
			$("#msgModal").modal("show");
			setTimeout(function(){
				$("#msgModal").modal("hide");
			},2000);
			return false;
		}
		return true;
	});
});