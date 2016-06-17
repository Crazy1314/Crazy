<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cate extends CI_Controller {

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
    //添加轮播图
    public function insert()
    {
        $this->load->view('cate/insert.html');
    }

    //添加分类
    public function add()
    {
        $this->load->model('Cate_model');
        $re=$this->Cate_model->addcate();
        if($re)
        {
            echo '<script>alert("添加成功"); window.location.href="'.site_url("Cate/getlist").'"</script>';
        }
    }
    //获取列表
    public function getlist($page=0)
    {
        $this->load->model('Cate_model');
        $data = $this->Cate_model->pagelist($page);
        //print_r($data);die;
        $this->load->view('cate/list.html',$data);
    }

    //删除分类
    public function dele()
    {
        $goods_type_id=$_GET['id'];
        $this->load->model('Cate_model');
        $re=$this->Cate_model->del($goods_type_id);
        if($re)
        {
            
            echo 1;
        }
        else
        {
            echo 0;
        }
    }

    //列表搜索
    public function searchlist($page=0)
    {
        //$a=$_GET(3);
        //iconv('GBK','utf-8',$goods_name);
        //mb_convert_encoding("$goods_name", 'utf-8','GBK');
        $goods_name=urldecode($this->uri->segment(3));
        //echo $goods_name;die;
        // echo urldecode($A);
        // echo "<h1>记得谢谢你鑫哥</h1>";
        // die;
        //$goods_name = $_GET['goods_name'];
        $this->load->model('Cate_model');
        $data=$this->Cate_model->sear($page,$goods_name);
        //print_r($data);die;
        $this->load->view('cate/list.html',$data);
    }

    //修改
    public function edit()
    {
        $goods_type_id=$_GET['goods_type_id'];
        $goods_type_name=$_GET['goods_type_name'];
        $this->load->model('Cate_model');
        $re=$this->Cate_model->updates($goods_type_id,$goods_type_name);
        if($re)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }

     
}
