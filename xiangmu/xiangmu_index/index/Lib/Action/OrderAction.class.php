<?php
class OrderAction extends Action {

	/**
	 * 生成订单
	 */
	public function CreatOrder(){
		$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:1;
		$db = D('Order');
		if($_GET['total']){
			$address_id = $_GET['address_id'];
			$total = $_GET['total'];
			
			$order_number = $user_id.time();
			$data=array(
				'border_number'=>$order_number,
				'border_total'=>$total,
				'border_state'=>0,
				'user_id'=>$user_id,
				'address_id'=>$address_id,
				);
			
			$order_id = $db->creat($data);

			//实例化
	    	$redis = new Redis();
	    	//连接
	    	$redis->connect('127.0.0.1', 6379);
	    	//选择第一个数据库
	    	$redis->select(0);
			
			$num = $redis->llen('data')-1;
		    $data = $redis->lrange('data',0,$num);
		    $goods = array();
		    foreach ($data as $k => $v) {
		    	$re[$k] = json_decode($v);
		    	if($user_id == ($re[$k]->user_id)){
		    		$db->add($re[$k],$order_id);
		    	}    
		    }	    
		}
		//查询订单
	    $order = $db->selectOrder($user_id);
	    $this->assign('order',$order);
	    $this->display('order');
		
	}
}