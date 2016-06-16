<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {
	//订单列表显示 
	public function lists(){
		$this->load->model('Order_model');
 		$count=$this->Order_model->sel_cot();
		$length=6;     
		$pages=ceil($count/$length);
        		$page=isset($_GET['page']) ? $_GET['page'] : 1;
        		$last=$page<=1 ? 1 :$page-1 ;
        		$next=$page>=$pages ? $pages :$page+1 ;
        		$offset=($page-1)*$length;
	        	$str='';
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='ajax_page(1)'>首页</a>";
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='ajax_page($last)'>上一页</a>";
	        	for($i=1;$i<=$pages;$i++){
	            	$str .="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='ajax_page($i)'>$i</a>";
	        	}
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='ajax_page($next)'>下一页</a>";
	        	$str.="&nbsp;<a href='javascript:void(0)' onclick='ajax_page($pages)'>尾页</a>";
		$data['page']=$str;
        		$data['arr']=$this->Order_model->sel_pro($offset,$length);
        		$this->load->view('order/order_list.html',$data);
	}
	//搜索后分页
	public function sou(){
		$u_name=$_GET['u_name'];
		$border_num=$_GET['border_num'];
		$total=$_GET['total'];
		$this->load->model('Order_model');
 		$count=$this->Order_model->sel_co($u_name,$border_num,$total);
 		$count=$count[0]['c'];
		$length=6;     
		$pages=ceil($count/$length);
        		$page=isset($_GET['page']) ? $_GET['page'] : 1;
        		$last=$page<=1 ? 1 :$page-1 ;
        		$next=$page>=$pages ? $pages :$page+1 ;
        		$offset=($page-1)*$length;
	        	$str='';
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='sou2(1)'>首页</a>";
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='sou2($last)'>上一页</a>";
	        	for($i=1;$i<=$pages;$i++){
	            	$str .="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='sou2($i)'>$i</a>";
	        	}
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='sou2($next)'>下一页</a>";
	        	$str.="&nbsp;<a href='javascript:void(0)' onclick='sou2($pages)'>尾页</a>";
		$data['page']=$str;
        		$data['arr']=$this->Order_model->sel_sou($u_name,$border_num,$total,$offset,$length);
        		echo json_encode($data);
	}
	//分页方法
	public function ajax_page2(){
		$this->load->model('Order_model');
 		$count=$this->Order_model->sel_cot();
		$length=6;     
		$pages=ceil($count/$length);
        		$page=isset($_GET['page']) ? $_GET['page'] : 1;
        		$last=$page<=1 ? 1 :$page-1 ;
        		$next=$page>=$pages ? $pages :$page+1 ;
        		$offset=($page-1)*$length;
	        	$str='';
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='ajax_page(1)'>首页</a>";
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='ajax_page($last)'>上一页</a>";
	        	for($i=1;$i<=$pages;$i++){
	            	$str .="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='ajax_page($i)'>$i</a>";
	        	}
	        	$str.="&nbsp;&nbsp;<a href='javascript:void(0)' onclick='ajax_page($next)'>下一页</a>";
	        	$str.="&nbsp;<a href='javascript:void(0)' onclick='ajax_page($pages)'>尾页</a>";
		$data['page']=$str;
        		$data['arr']=$this->Order_model->sel_pro($offset,$length);
        		echo json_encode($data);
	}
	//查看订单详情
	public function lookat(){
		$border_id=$_GET['border_id'];
		$this->load->model('Order_model');
		$data['arr']=$this->Order_model->sel_one($border_id);
		$this->load->view('order/order_one.html',$data);
	}
}
?>