<?php
class PayModel extends Model{
	//实例化表
	protected $tableName = 'border';

	public function trans($order_number){
		// 在User模型中启动事务
		$db = M('border');
	    $db->startTrans();
	    // 进行相关的业务逻辑操作
	    //两个修改语句
		//修改状态
		$data = array('border_state'=>1);
		$re = $db->where('border_number = '.$order_number)->save($data);
		
		if($re){
			$db->commit();
			//查询订单中所有商品的数量
			$model = M('border_goods');
			$re1 = $model->join('border ON border.border_id = border_goods.border_id')->where('border.border_number ='.$order_number)->select();
			foreach ($re1 as $k => $v) {
				$ds = M('goods_sku');
				$goods_num = $ds->where('goods_sku_id = '.$v['goods_sku_id'])->select();
				$num = $goods_num[0]['goods_sku_stock']-$v['border_goods_count'];
				$arr = array('goods_sku_stock'=>$num);
				$re2 = $ds->where('goods_sku_id = '.$v['goods_sku_id'])->save($arr);
				
			}
			if($re2){
				$ds->commit();
				return true;
			}else{
				// 事务回滚
	       		$ds->rollback();
	       		return false; 
			}
		}else{
			$db->rollback();
			return false;
		}
		//http://bbs.csdn.net/topics/390581960?page=1
		
	}
}                                                                       