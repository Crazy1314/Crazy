<?php
class ProductModel extends Model{
	//实例化表
	protected $tableName = 'goods_sku';

	/**
	 * 查询购物车商品的全部信息
	 */
	public function selectGoods($goods_sku_id){
		$model = M('goods_sku');
		$data = $model->join('goods ON goods_sku.goods_id = goods.goods_id')->where('goods_sku_id ='.$goods_sku_id)->select();
		return $data;
	}

	/**
	 * 查询省
	 */
	public function selectProvince(){
		$model = M('region');
		$data = $model->where('parent_id = 1')->select();
		return $data;
	}

	/**
	 * 查询市、县
	 */
	public function selectCity($region_id){
		$model = M('region');
		$data = $model->where('parent_id = '.$region_id)->select();
		return $data;
	}
}