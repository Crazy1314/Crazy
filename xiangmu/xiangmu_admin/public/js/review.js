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
$("#all").click(function(){
	var quanxuan=$("#all");
	var checkall=$(".checkall");
	for(i=0;i<checkall.length;i++){
		if(quanxuan.attr("checked")=='checked'){
			checkall[i].checked=true;
		}else{
			checkall[i].checked=false;
		}
	}
})

//批量删除
$(".del").click(function(){
	//check=$("input:checked");
	var check=$(".checkall");
	str="";
	//each为循环
	check.each(function(i,item){
		if(check[i].checked==true){
			str=str+","+$(this).val();
		}
	})
	review_id=str.substr(1);
	$.get("del",{review_id:review_id},
		function(data){
			if(data==1){
				$(this).parent().parent().remove();
			}else{
				location.reload();
			}
	});
})
//单个删除
function del_one(review_id){
	$.get("del",{review_id:review_id},
		function(data){
			if(data==1){
				$(this).parent().parent().remove();
			}else{
				location.reload();
			}
	});
}