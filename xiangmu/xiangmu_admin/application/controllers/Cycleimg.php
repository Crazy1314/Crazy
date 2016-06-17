<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cycleimg extends CI_Controller {

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
        $this->load->view('cycle/insert.html');
    }
    //轮播图展示
   

    //索搜商品
    function search()
    {
    	$this->load->model('Cycle_model');
    	$res=$this->Cycle_model->get_goods();
        // print_r($res);die;
        $re=json_encode($res);
        echo $re;
    }
    //展示图片
    function getimg()
    {
        $this->load->model('Cycle_model');
        $img=$this->Cycle_model->getimg();
        //print_r($img[0]);die;
        echo $img[0]['goods_img_path'];
    }

    //添加轮播图
    public function add()
    {
        $this->load->model('Cycle_model');
        $re=$this->Cycle_model->addimg();
        if($re)
        {
            echo '<script>alert("添加成功"); window.location.href="'.site_url("Cycleimg/getlist").'"</script>';
        }
    }
// xiangmu/../../public/goodsimg/proxy.jpg
// xiangmu/../../public/goodsimg/proxy.jpg
    //获取列表
    public function getlist($page=0)
    {
        $this->load->model('Cycle_model');
        $data = $this->Cycle_model->pagelist($page);
        //print_r($data);die;
        $this->load->view('cycle/list.html',$data);
    }

    //删除轮播图
    public function dele()
    {
        $cycle_id=$_GET['id'];
        $this->load->model('Cycle_model');
        $re=$this->Cycle_model->del($cycle_id);
        if($re)
        {
            // xiangmu/../../public/goodsimg/proxy.jpg
            // xiangmu/../../public/goodsimg/
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
        // echo urldecode($A);
        // echo "<h1>记得谢谢你鑫哥</h1>";
        // die;
        //$goods_name = $_GET['goods_name'];
        $this->load->model('Cycle_model');
        $data=$this->Cycle_model->sear($page,$goods_name);
        //print_r($data);die;
        $this->load->view('cycle/searchelist.html',$data);
    }

     //修改显示状态
     public function chang_status()
     {
        $is_show = $_GET['is_show'];
        $cycle_id = $_GET['cycle_id'];
        $this->load->model('Cycle_model');
        $re=$this->Cycle_model->change($is_show,$cycle_id);
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
