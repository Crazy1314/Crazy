<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		//实例化model
		$this->load->model('Goods_model');
		$this->load->model('Brand_model');
		$this->load->model('Type_model');
	}

	 public function insert(){
    	//查询品牌信息
    	$data['brand']=$this->Brand_model->sel();
    	//查询商品类别
    	$data['type']=$this->Type_model->sel();
        $this->load->view('goods/insert',$data);
    }

	//商品添加
	function add(){
		//上传商品图片
		$config['upload_path'] = 'xiangmu/../../public/goodsimg';
		//echo $config['upload_path'];die;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '';
		$config['max_width']  = '';
		$config['max_height']  = '';

		$this->load->library('upload', $config);
		 
		if ( ! $this->upload->do_upload('goods_img_path'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('goods/upload_error', $error);
		} 
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//图片路径
			$goods_img_path=$config['upload_path']."/".$data['upload_data']['file_name'];
			//print_r($_POST);
			$_POST['goods_img_path']=$goods_img_path;
			$arr=$_POST;
			//进行商品添加 获取刚添加的商品id
			$goods_id=$this->Goods_model->goods_add($arr);
			if($goods_id){
				redirect("Goods/goods_list");
			}
		}
	}

	//商品列表
	function goods_list(){
		//查询商品的所有数据
    	$data['goods']=$this->Goods_model->goods_list();
        $this->load->view('goods/design',$data);
	}
}
?>