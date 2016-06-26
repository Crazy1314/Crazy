<?php
class GoodsAction extends Action {
	/**
	*	展示详情页
	*/
	public function product_page(){
		$goods_id=$_GET['goods_id'];
		//根据id查出对应商品
		$goods=D('Goods');
		$data=$goods->sel($goods_id);

		//相关产品
		$goods=M("Goods");
		 $related=$goods->join("goods_sku on goods.goods_id=goods_sku.goods_id")
              ->join("brand on goods.brand_id=brand.brand_id")
              ->select();
        $this->assign("related",$related);
		// print_r($data);die;
		$this->assign("data",$data);


        // 评论展示
        $cycle=M('review');
        $review=$cycle->where("goods_id=$goods_id")->select();
        $this->assign('review',$review);

		//左侧菜单栏
		$cate=D('goods_type');
		$cates=$cate->limit(10)->select();
		foreach($cates as $key=>$v)
		{
			$id = $v['goods_type_id'];
			$res=$goods->where("goods_type_id = $id")->select();
			$cates[$key]['num']=count($res);
			$nums+=count($res);
		}
		//echo $nums;die;
		$total=$goods->select();
		$total=count($total);
		$other=$total-$nums;
		$this->assign('cates', $cates);
		$this->assign('other', $other);


		$this->display('product_page');
	}

	/**
	*	根据商品属性查询对应价格
	*/
	public function price(){
		$goods_sku_id=$_GET['goods_sku_id'];
		$goods=D("Goods_sku");
		$sku=$goods->sku_price($goods_sku_id);
		//$this->assign("sku",$sku);
		echo "$".$sku['goods_sku_price'];
	}



	/**
	*	跳登录
	*/
	public function login(){
		$this->redirect("Login/login");
	}

	/**
	*	购物车
	*/
	public function shopcart(){
		//用户id
		$user_id=$_GET['user_id'];
		//根据属性id查询商品各种属性
		$goods_sku_id=$_GET['goods_sku_id'];
		$goodsku=D("Goods_sku");
		$sku=$goodsku->sku_price($goods_sku_id);
		//商品id
		$goods_id=$sku['goods_id'];
		//商品单价
		$total=$sku['goods_sku_price'];

		//实例化
		$goods_num=1;
	    	$redis = new Redis();
	    	//连接
	    	$redis->connect('127.0.0.1', 6379);
	    	//选择第一个数据库
	    	$redis->select(0);
	    	//$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : "";
	    	$num = $redis->llen('data')-1; 
		    $value = $redis->lrange('data',0,$num);
	    	foreach ($value as $k => $v) {
		    	$re1[$k] = json_decode($v);
		    	if($goods_sku_id == ($re1[$k]->goods_sku_id) && $user_id == ($re1[$k]->user_id)){
		    		$goods_num = ($re1[$k]->goods_num) + $goods_num;
		    		$total = ($re1[$k]->total) + $total;
		    		unset($value[$k]);
		    		$redis->flushdb();
		    	}	      
		    }
			$data = array('user_id'=>$user_id,'goods_id'=>$goods_id, 'goods_sku_id'=>$goods_sku_id, 'goods_num'=>$goods_num,'total'=>$total);

	    	$data = json_encode($data);
	    	$redis->lpush('data',$data);
	    	$this->redirect('Product/index');
	}
}
?>