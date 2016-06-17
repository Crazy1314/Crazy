<?php
	class Goods_model extends CI_Model{
		//添加商品
		function goods_add($arr){
			//入库
			$re=$this->db->insert('goods',$arr);
			if($re){
				//获取刚刚添加的商品id
				$query=$this->db->select_max('goods_id')->get('goods');
				return $query->result_array();
			}
		}

		//查询所有商品
		function goods_list(){
			$query=$this->db->query("SELECT * FROM `goods` inner join goods_type on goods.goods_type_id=goods_type.goods_type_id inner join brand on goods.brand_id=brand.brand_id");
			return $query->result_array();
		}
	}
?>