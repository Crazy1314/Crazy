<?php
class IndexAction extends Action {
	// 首页
    public function index(){
        //轮播图展示
        $cycle=M('Cycle_img');
        $arr=$cycle->join("goods on cycle_img.goods_id=goods.goods_id")->where('is_show=1')->select();
        //echo $cycle->getlastsql();
        //分类
        $cate=D('goods_type');
        $cates=$cate->limit(10)->select();

        //品牌
        $brand=D('brand');
        $brands=$brand->limit(10)->select();
        //print_r($arr);die;
        //畅销产品
        $goods=M('Goods');
        $hot=$goods->join("goods_sku on goods.goods_id=goods_sku.goods_id")
              ->join("brand on goods.brand_id=brand.brand_id")
              ->where("stores=1 and hot=1")
              ->select();
        //print_r($hot);die;
        //特色产品
        $new=$goods->join("goods_sku on goods.goods_id=goods_sku.goods_id")
              ->join("brand on goods.brand_id=brand.brand_id")
              ->where("stores=1 and new=1")
              ->select();
	    $this->assign('arr',$arr);
        $this->assign('cates',$cates);
        $this->assign('brands',$brands);
        $this->assign('hot',$hot);
        $this->assign('new',$new);
        $this->display('index');
    }
    
   
    // 首页
    public function blog_post(){
	  $this->display();
    }
    // 首页
    public function catalog_grid(){
	  $this->display();
    }
    // 首页
    public function catalog_list(){
	  $this->display();
    }
    // 首页
    public function checkout(){
	  $this->display();
    }
    // 首页
    public function compare(){
	  $this->display();
    }
    // 首页
    public function contact_us(){
	  $this->display();
    }
    // 首页
    public function product_page(){
	  $this->display();
    }
    // 首页
    public function shopping_cart(){
	  $this->display();
    }
    // 首页
    public function text_page(){
	  $this->display();
    }
}