<?php
class IndexAction extends Action {
	// 首页
    public function index(){
        //echo __URL__;die;
        $cycle=M('Cycle_img');
        $arr=$cycle->join("goods on cycle_img.goods_id=goods.goods_id")->where('is_show=1')->select();
        //echo $cycle->getlastsql();

        //print_r($arr);die;
	    $this->assign('arr',$arr);
        $this->display('index');
    }
    // 首页
    public function blog(){
	  $this->display();
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