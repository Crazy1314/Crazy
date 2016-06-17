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
		$goods_id = $data->goods_id;
		$good = $model->join('goods ON goods_sku.goods_id = goods.goods_id')->where('goods.goods_id ='.$goods_id)->find();
		$goods=array(
				'border_id'=>$order_id,
				'goods_id'=>$goods_id,
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
		$data = $model->where('user_id='.$user_id)->select();
		foreach ($data as $k => $v) {
			$border_id = $v['border_id'];
			$data[$k]['goods'] = $db->where('border_id = ')
			$data = $model->join('border ON border_goods.border_id = border.border_id')->where('user_id = '.$user_id)->select();	
		}
		
		return $data;
	}
}
