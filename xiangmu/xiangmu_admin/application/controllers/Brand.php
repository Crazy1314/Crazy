<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Brand extends CI_Controller {
	public function insert(){
		$this->load->view("brand/insert");
	}	
	//添加商品品牌
	public function insert_brand(){
		$data['brand_name']=$_POST['brand_name'];
		$this->load->model("Brand_model");
		$res=$this->Brand_model->insert_brand($data);
		if($res){
			echo "<script>alert('添加成功');location.href='insert';</script>";
		}
	}

	//品牌列表显示
	public function brand_list(){
		$this->load->model("Brand_model");
		$arr=$this->Brand_model->fen_page();
		$page_size=$arr['page_size'];
		$page_limit=$arr['page_limit'];
		$data['res']=$this->Brand_model->brand_list($page_size,$page_limit);
		$data['page']=$arr['page'];
		//print_r($data);die;
		$this->load->view('brand/brand_list',$data);
	}
	//分页
	public function brand_list2(){
		$this->load->model("Brand_model");
		$arr=$this->Brand_model->fen_page();
		$page_size=$arr['page_size'];
		$page_limit=$arr['page_limit'];
		$data['res']=$this->Brand_model->brand_list($page_size,$page_limit);
		$data['page']=$arr['page'];
		$this->load->view('brand/brand_list2',$data);
	}

}
