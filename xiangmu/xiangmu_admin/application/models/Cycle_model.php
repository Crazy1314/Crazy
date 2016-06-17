<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cycle_model extends CI_Model {

    public $goods_id;
    public $is_show;
   
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    //查询商品
    public function get_goods()
    {
    	$goods_name=$_GET['goods_name'];
    	$this->db->like('goods_name', "$goods_name");
    	$arr=$this->db->get('goods')->result_array();
    	return $arr;
    }

    //查询商品图片
    public function getimg()
    {
    	$goods_id=$_GET['goods_id'];
    	$this->db->where('goods_id', "$goods_id");
    	$arr=$this->db->get('goods')->result_array();
    	return $arr;
    }
    //添加轮播图
    public function addimg()
    {
    	$this->goods_id    = $_POST['goods_id']; // please read the below note
        $this->is_show  = isset($_POST['is_show'])?$_POST['is_show']:0;

        $res=$this->db->insert('cycle_img', $this);
        return $res;
    }

    //分页列表
    public function pagelist($page)
    {
        $data=array();
        $per_page=6;
        $count=$this->db->count_all('cycle_img');
        $this->load->library('pagination');
        $config['base_url'] = site_url("Cycleimg/getlist");
        $config['total_rows'] = $count;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);
        $pages= $this->pagination->create_links();
        $data['pages']=$pages;
        //获取数据
        $this->db->select('*');
        $this->db->from('cycle_img');
        $this->db->join('goods', 'goods.goods_id = cycle_img.goods_id');
        $this->db->limit($per_page, $page);
        $query = $this->db->get()->result_array();
        $data['list']=$query;
        return $data;
    }
    //删除轮播图
    public function del($cycle_id)
    {
        $res=$this->db->where("cycle_id",$cycle_id)->delete('cycle_img');
        return $res;
    }

    //列表搜索
    public function sear($page,$goods_name)
    {
        $data=array();
        $per_page=6;
        $this->db->join('goods', 'goods.goods_id = cycle_img.goods_id');
        $this->db->like('goods_name',$goods_name);
        //$this->db->from('cycle_img');
        $count=$this->db->count_all_results('cycle_img');
        //$count=$this->db->count_all('',false);
        //echo $count;
        $this->load->library('pagination');
        $config['base_url'] = site_url("Cycleimg/searchlist").'/'.$goods_name;
        $config['total_rows'] = $count;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);
        $pages= $this->pagination->create_links();
        $data['pages']=$pages;
        //获取数据
        $this->db->select('*');
        $this->db->from('cycle_img');
        $this->db->join('goods', 'goods.goods_id = cycle_img.goods_id');
        $this->db->like('goods_name',$goods_name);
        $this->db->limit($per_page, $page);
        $query = $this->db->get()->result_array();
        $data['list']=$query;
        return $data;
    }

    //修改状态
    public function change($is_show,$cycle_id)
    {
        if($is_show==1)
        {
            $show=0;
        }
        else
        {
            $show=1;
        }
        $this->db->set('is_show', $show);
        $this->db->where('cycle_id', $cycle_id);
        $res=$this->db->update('cycle_img');
        return $res;
    }

}