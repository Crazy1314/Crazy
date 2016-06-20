<?php
	class Sku_model extends CI_Model{
		//添加商品属性
		function sku_add($sku){
			return $this->db->insert('goods_sku',$sku);	
		}
	}	
?>