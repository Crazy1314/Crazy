<?php
class Goods_skuModel extends Model{
	/**
	*	根据商品属性查询对应价格
	*/
	public function sku_price($goods_sku_id){
		$goods_sku=D("goods_sku");
		return $goods_sku->where("goods_sku_id=$goods_sku_id")->find();
	}
}
?>