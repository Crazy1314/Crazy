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
    	/*$user_id = $_session['user_id'];
    	$goods_sku_id = 1;
    	$goods_num = 2;
    	$total = 1900;
    	$data = array('user_id'=>$user_id,'goods_id'=>$goods_id, 'goods_sku_id'=>$goods_sku_id, 'goods_num'=>$goods_num, 'total'=>$total);
    	$data = json_encode($data);
    	$redis->lpush('data',$data);*/
    	$num = $redis->llen('data')-1;
    	//$redis->set('data',$data);
    	//$redis->hmset('product1');
	    $data = $redis->lrange('data',0,$num);
	    $goods = array();
	    foreach ($data as $k => $v) {
	    	$re[$k] = json_decode($v);
	    	$db = D('Product');
	    	$goods[$k] = $db->selectGoods($re[$k]->goods_sku_id);
	    	$goods[$k]['goods_num'] = $re[$k]->goods_num;
	    	$goods[$k]['total'] = $re[$k]->total;
	    	$total += 100;	    
	    }
	    //查询省
	    $province =  $db->selectProvince();
	    //print_r($goods);
	    $this->assign('goods',$goods);
	    $this->assign('province',$province);
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
   
}