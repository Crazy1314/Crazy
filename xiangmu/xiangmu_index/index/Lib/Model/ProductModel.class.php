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
	 * 查询收货地址
	 */
	public function selectAddress($user_id){
		$model = M('address');
		$data = $model->where('user_id = '.$user_id)->limit(2)->select();
		return $data;
	}

	/**
	 * 查询默认收货地址
	 */
	public function selectAddDefault($user_id){
		$model = M('address');
		$data = $model->where('user_id = '.$user_id .'AND address_status = 1')->select();
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