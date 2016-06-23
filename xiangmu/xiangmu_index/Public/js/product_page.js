function goods(goods_sku_id){
	$(".sku a").removeAttr("id");
	$(".sku a span").attr('style','color:#66CDAA');
	$(".goods_sku"+goods_sku_id).attr("id","test");
	$(".goods_sku"+goods_sku_id).children().attr('style','color:red');
	
    $.get("price",{goods_sku_id:goods_sku_id},
   		function(data){
   			$("#sku_price").html(data);
    })
	
}

function cart(goods_id){
	var user_id=$("#user_id").attr("value");
	//alert(user_id);
	var goods_sku_id=$("#test").attr("sku");
	if(user_id!=""){
		if(goods_sku_id){
			//alert(goods_sku_id);
			/*$.get("shopcart",{goods_sku_id:goods_sku_id},
				function(data){
					alert(data);
			})*/
		location.href="shopcart?goods_sku_id="+goods_sku_id+"&&user_id="+user_id;
		}else{
			alert('请选择商品类型');
		}
	}else{
		alert('请先登录');
		location.href="login";
		
	}
		
}