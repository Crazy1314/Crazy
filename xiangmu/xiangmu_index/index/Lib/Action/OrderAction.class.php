<?php
class OrderAction extends Action {

	/**
	 * 生成订单
	 */
	public function CreatOrder(){
		$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
		$db = D('Order');
		if($_POST['total']){
			$address_id = $_POST['address_id'];
			$total = $_POST['total'];
			$order_number = $user_id.rand(1000000,9999999);
			$data=array(
				'border_number'=>$order_number,
				'border_total'=>$total,
				'border_state'=>1,
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

	    //查询推荐商品
		$com_goods = $db->selectComGoods();
		$this->assign('com_goods',$com_goods);
	    $this->assign('order',$order);
	    $this->display('order');
		
	}

	//取消订单和订单中的商品
	public function del(){
		$border_id = $_GET['border_id'];
		$db = M('border_goods');
		$db->where('border_id ='.$border_id)->delete();
		$model = M('border');
		$model->where('border_id ='.$border_id)->delete();
		$this->redirect('CreatOrder');
	}
	//查看订单下商品
	public function lookat(){
		$border_id = $_GET['border_id'];
		$dd =D('Order');
		$goods=$dd->selectzne($border_id);
		$this->assign('order_one',$goods);
		$this->display('order_one');
	}
}