<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Brand_model extends CI_Model {
      //添加品牌
      public function insert_brand($data){
      	$res=$this->db->insert('brand',$data);
      	return $res;
      }
      
}
