<?php
class IndexModel extends Model{
	//查看热销产品
	public function select_goods(){
		$obj=M('goods');
		$res=$obj->query("select * from goods INNER JOIN goods_sku on goods.goods_id=goods_sku.goods_id where hot=1");
		return $res;
	}
	//查看特色产品
	public function select_tese(){
		$obj=M('goods');
		$res=$obj->query("select * from goods INNER JOIN goods_sku on goods.goods_id=goods_sku.goods_id where new=1");
		return $res;
	}
}