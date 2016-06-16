<?php
	class Type_model extends CI_Model{
		//查询类别信息
		function sel(){
			$query=$this->db->get('goods_type');
			return $query->result_array();
		}
	}
?>