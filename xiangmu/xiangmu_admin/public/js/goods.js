//分页
$(".last").click(function(){
	page=$(this).attr("value");
	$.get("page",{page:page},
		function(data){
			//alert(data);
			$(".result-content").html(data);
	})
})

//获取搜索值
$("#search").click(function(){
	search=$("#keywords").val();
	$.get("search",{search:search},
		function(data){
			//alert(data);
			$(".result-content").html(data);
	})
})

//实现全选  全不选
$(".allChoose").click(function(){
	if($(".allChoose").checked==true){
		
	}
})

//删除
$(".del").click(function(){
	alert(1);
	goods_id=$(this).attr('value');
	$.get("del",{goods_id:goods_id},
		function(data){
			alert(data)
	});
})