<?php
class ProductAction extends Action {
	// 首页
    public function index(){
    	
    	//实例化
    	$redis = new Redis();
    	//连接
    	$redis->connect('127.0.0.1', 6379);
    	//选择第一个数据库
    	$redis->select(0);
    	//购物车信息需要存购物车id,,用户名id,商品id，属性id,购买的数量，小计价格
    	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;
    	/*$goods_sku_id = 2;
    	$goods_id = 1;
    	$goods_num = 3;
    	$total = 1400;
    	$num = $redis->llen('data')-1; 
	    $value = $redis->lrange('data',0,$num);
    	foreach ($value as $k => $v) {
	    	$re1[$k] = json_decode($v);
	    	if($goods_sku_id == ($re1[$k]->goods_sku_id) && $user_id == ($re1[$k]->user_id)){
	    		$goods_num = ($re1[$k]->goods_num) + $goods_num;
	    		$total = ($re1[$k]->total) + $total;
	    		unset($value[$k]);
	    	}	      
	    }
		$data = array('user_id'=>$user_id,'goods_id'=>$goods_id, 'goods_sku_id'=>$goods_sku_id, 'goods_num'=>$goods_num, 'total'=>$total);   	
    	$data = json_encode($data);
    	$value[] = $data;
    	$redis->flushdb();
    	foreach ($value as $k => $v) {
    		$redis->lpush('data',$v);
    	}*/

    	$num = $redis->llen('data')-1; 
	    $data = $redis->lrange('data',0,$num);
  		$goods = array();
	    if($user_id != null){
		    foreach ($data as $k => $v) {
		    	$re[$k] = json_decode($v);
		    	$db = D('Product');
		    	if($user_id == $re[$k]->user_id){
			    	$goods[$k] = $db->selectGoods($re[$k]->goods_sku_id);
			    	$goods[$k]['goods_num'] = $re[$k]->goods_num;
			    	$goods[$k]['total'] = $re[$k]->total;
			    	$total += $goods[$k]['total'];		
		    	}   
		    }
	    	//查询地址
	    	$address = $db->selectAddress($user_id);
	    }else{

	    	$address = '';
			$total = 0;
	    }
	    
	    //查询默认地址
	    //$adddefault = $db->selectAddDefault();
	
	    $this->assign('address',$address);
	    //$this->assign('adddefault',$adddefault);
	    $this->assign('goods',$goods);
	    $this->assign('total',$total);
	    $this->display('shopping_cart');
    }


    /** 
     * 查询市县
     */
    public function selectCity(){
    	$province_id = $_POST['province_id'];
    	$db = D('Product');
    	$city = $db->selectCity($province_id);
    	$city = json_encode($city);
    	echo $city;
    }

	/**
	 * 删除购物车商品
	 */
	public function del(){
		$goods_id = $_POST['goods_id'];
		$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;
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
	    	if(($goods_id == ($re[$k]->goods_sku_id)) && ($user_id ==($re[$k]->user_id))){
	    		unset($data[$k]);
	    	}    
	    }
	    $redis->flushdb();
	    if($data){    	
	    	foreach ($data as $k => $v) {
	    		$redis->lpush('data',$v);
	    	}	    		    	
	    }

	}


	/**
	 * 修改数量
	 */
	public function upnum(){
		$goods_sku_id = $_POST['goods_sku_id'];
		$goods_num = $_POST['goods_num'];
		$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;
		$total = $_POST['total'];
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
	    	if(($goods_sku_id == ($re[$k]->goods_sku_id)) && ($user_id ==($re[$k]->user_id))){
	    		$goods = array('user_id'=>$user_id,'goods_id'=>$re[$k]->goods_id, 'goods_sku_id'=>$re[$k]->goods_sku_id, 'goods_num'=>$goods_num, 'total'=>$total);

	    		unset($data[$k]);
	    	}      
	    }
	    $goods = json_encode($goods);
	    $redis->flushdb();
	    if($data){    	
	    	foreach ($data as $k => $v) {
	    		$redis->lpush('data',$v);
	    		$redis->lpush('data',$goods);
	    	}	    		    	
	    }
	}
}