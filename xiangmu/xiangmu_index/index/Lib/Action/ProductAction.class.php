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
    	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
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
	    foreach ($data as $k => $v) {
	    	$re[$k] = json_decode($v);
	    	$db = D('Product');
	    	$goods[$k] = $db->selectGoods($re[$k]->goods_sku_id);
	    	$goods[$k]['goods_num'] = $re[$k]->goods_num;
	    	$goods[$k]['total'] = $re[$k]->total;
	    	$total += $goods[$k]['total'];	    
	    }
	    //查询地址
	    if($user_id){
	    	$address = $db->selectAddress($user_id);
	    }else{
	    	$address = $total ='';

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
		//实例化
    	$redis = new Redis();
    	//连接
    	$redis->connect('127.0.0.1', 6379);
    	//选择第一个数据库
    	$redis->select(0);
		$goods_id = $_POST['goods_id'];
		$num = $redis->llen('data')-1;
	    $data = $redis->lrange('data',0,$num);
	    $goods = array();
	    foreach ($data as $k => $v) {
	    	$re[$k] = json_decode($v);
	    	if($goods_id == ($re[$k]->goods_sku_id)){
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
}