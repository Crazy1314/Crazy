<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Brand_model extends CI_Model {
      //添加品牌
      public function insert_brand($data){
      	$res=$this->db->insert('brand',$data);
      	return $res;
      }
      
      //查询品牌信息
	function sel(){
		$query=$this->db->get('brand');
		return $query->result_array();
	}


      //查询品牌列表
      public function brand_list($page_size,$page_limit){
            $res=$this->db->limit($page_size,$page_limit)->get('brand')->result_array();
            return $res;
      }

      //分页
      public function fen_page(){
            //分页
            //查询总页数
            $count=$this->db->count_all('brand');
            //设置每页显示的条数
            $page_size=5;
            //计算总页数
            $pages=ceil($count/$page_size);
            //获取当前页数
            $page=isset($_GET['page'])?$_GET['page']:1;
            //计算偏移量
            $page_limit=($page-1)*$page_size;
            //显示页码
            $str='';
            $str.="<a href='javascript:void(0)' onclick='ajax_page(1)'>首页</a>";
            for($i=1;$i<=$pages;$i++){
                  $str.="<a href='javascript:void(0)' onclick='ajax_page($i)'>$i</a>";
            }
            $str.="<a href='javascript:void(0)' onclick='ajax_page($pages)'>尾页</a>";
            $data['page']=$str;
            $data['page_size']=$page_size;
            $data['page_limit']=$page_limit;
            return $data;
      }
}
