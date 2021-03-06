<?php
class OrderModel extends Model{
	//实例化表
	protected $tableName = 'border';

	/**
	 * 生成订单
	 */
	public function creat($data){
		$model = M('border');
		$order_id = $model->add($data);
		return $order_id;
	}

	/**
	 * 入库订单商品
	 */
	public function add($data,$order_id){
		$model = M('goods_sku');
		$goods_sku_id = $data->goods_sku_id;
		$goods_id = $data->goods_id;
		$good = $model->join('goods ON goods_sku.goods_id = goods.goods_id')->where('goods_sku.goods_sku_id ='.$goods_sku_id)->find();
		$goods=array(
				'border_goods_id'=>null,
				'border_id'=>$order_id,
				'goods_sku_id'=>$good['goods_sku_id'],
				'border_goods_count'=>$data->goods_num,
				'border_goods_price'=>$good['goods_sku_price'],
			);
		$db = M('border_goods');
		$db->add($goods);	
		
	}
	/**
	 * 查询订单
	 */
	public function selectOrder($user_id){
		$model = M('border');
		$db =M('border_goods');
		$data = $model->order('border_id desc')->where('user_id='.$user_id)->select();
		foreach ($data as $k => $v) {
			$border_id = $v['border_id'];
			$data[$k]['goods'] = $db->join('border ON border.border_id = border_goods.border_id')
					->join('goods_sku ON border_goods.goods_sku_id = goods_sku.goods_sku_id')
					->join('goods ON goods_sku.goods_id = goods.goods_id')
					->where('border.border_id = '.$border_id)
					->select();
		}
		
		return $data;
	}
	/**
	 * 查询推荐商品
	 */
	public function selectComGoods(){
		$model = M('goods_sku');
		$data = $model->join('goods ON goods_sku.goods_id = goods.goods_id')->limit(10)->select();
		return $data;
	}
	/**
	 * 查询订单下商品
	 */
	public function selectzne($border_id){
		$model = M('border_goods');
		$data = $model->join('goods_sku on goods_sku.goods_sku_id=border_goods.goods_sku_id')
		->join('goods on goods.goods_id=goods_sku.goods_id')
		->join('brand on brand.brand_id=goods.brand_id')
		->join('goods_type on goods_type.goods_type_id=goods.goods_type_id')
		->where('border_goods.border_id = '.$border_id)
		->select();
		return $data;
	}
}

