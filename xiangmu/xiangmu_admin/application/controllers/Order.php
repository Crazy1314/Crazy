<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {
	//订单列表显示
	public function lists($page=0){
		$this->load->model('Order_model');
 		$total_rows=$this->Order_model->sel_cot();
		$per_page=6;     
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/Order/lists';
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
		$config['first_link'] = '首页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['last_link'] = '尾页';        
		// 不显示“数字”链接
		//$config['display_pages'] = FALSE;
		$this->pagination->initialize($config);
		$str=$this->pagination->create_links();
		$data['page']=$str;
        		$data['arr']=$this->Order_model->sel_pro($per_page,$page);
        		$this->load->view('order/order_list.html',$data);
	}
	//搜索
	public function sou($page=0){
		$u_name=$_GET['u_name'];
		$border_num=$_GET['border_num'];
		$total=$_GET['total'];
		$this->load->model('Order_model');
 		$count=$this->Order_model->sel_co($u_name,$border_num,$total);
 		$total_rows=$count[0]['c'];
		$per_page=6;     
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/Order/sou';
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
		$config['first_link'] = '首页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['last_link'] = '尾页';        
		// 不显示“数字”链接
		//$config['display_pages'] = FALSE;
		$this->pagination->initialize($config);
		$str=$this->pagination->create_links();
		$data['page']=$str;
        		$data['arr']=$this->Order_model->sel_sou($u_name,$border_num,$total,$per_page,$page);
        		$this->load->view('order/order_list1.html',$data);
	}
}
?>