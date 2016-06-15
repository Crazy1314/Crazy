<?php
class IndexAction extends Action {
	// 首页
    public function index(){
      $obj=D('Index');
      //查看热销商品
      $res=$obj->select_goods();
      $this->assign('res',$res);
      //查看特色商品
      $res2=$obj->select_tese();
      $this->assign('data',$res2);
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