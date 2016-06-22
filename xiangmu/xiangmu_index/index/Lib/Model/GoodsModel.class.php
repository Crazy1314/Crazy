<?php
class GoodsModel extends Model{
	/**
	* 查询对应商品
	*/
	public function sel($goods_id){
		$model=M("Goods");
		return $model->join("goods_sku on goods.goods_id=goods_sku.goods_id")
              ->join("brand on goods.brand_id=brand.brand_id")
              ->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")
			  ->where("goods.goods_id=$goods_id")->select();
	}
}
?>