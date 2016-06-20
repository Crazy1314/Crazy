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
		$data['res']=$this->Brand_model->brand_list();
		$this->load->view('brand/brand_list',$data);
	}

}
