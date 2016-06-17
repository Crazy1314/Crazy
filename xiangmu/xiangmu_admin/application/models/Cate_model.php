<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cate_model extends CI_Model {

    public $goods_type_name;
 
   
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }
    
    //添加分类
    public function addcate()
    {
    	$this->goods_type_name    = $_POST['goods_type_name']; // please read the below note
        $res=$this->db->insert('goods_type', $this);
        return $res;
    }

    //分页列表
    public function pagelist($page)
    {
        $data=array();
        $per_page=6;
        $count=$this->db->count_all('goods_type');
        $this->load->library('pagination');
        $config['base_url'] = site_url("Cate/getlist");
        $config['total_rows'] = $count;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);
        $pages= $this->pagination->create_links();
        $data['pages']=$pages;
        //获取数据
        $this->db->select('*');
        $this->db->from('goods_type');
        $this->db->limit($per_page, $page);
        $query = $this->db->get()->result_array();
        $data['list']=$query;
        return $data;
    }
    //删除分类名
    public function del($id)
    {
        $res=$this->db->where("goods_type_id",$id)->delete('goods_type');
        return $res;
    }

    //列表搜索分页
    public function sear($page,$goods_name)
    {
        $data=array();
        $per_page=6;
        $this->db->like('goods_type_name',$goods_name);
        //$this->db->from('cycle_img');
        $count=$this->db->count_all_results('goods_type');
        //$count=$this->db->count_all('',false);
        //echo $count;
        $this->load->library('pagination');
        $config['base_url'] = site_url("Cate/searchlist").'/'.$goods_name;
        $config['total_rows'] = $count;
        $config['per_page'] = $per_page;
        $this->pagination->initialize($config);
        $pages= $this->pagination->create_links();
        $data['pages']=$pages;
        //获取数据
        $this->db->select('*');
        $this->db->from('goods_type');
        
        $this->db->like('goods_type_name',$goods_name);
        $this->db->limit($per_page, $page);
        $query = $this->db->get()->result_array();
        $data['list']=$query;
        return $data;
    }

    //修改分类名
    public function updates($id,$name)
    {
        $this->goods_type_name=$name;
        $this->db->set('goods_type_name', $name);
        $this->db->where('goods_type_id', $id);
        $res=$this->db->update('goods_type');
        return $res;
    }

}