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

		//所有商品数据
		function goods_data($search)
		{
			$page_size=3;   //设置每页显示条数

			if(is_string($search)){    //判断是否是字符串  如果是就模糊查询
				$this->db->like('goods_name',$search);
				$num=$this->db->count_all_results('goods');  
			}else{
				$num=$this->db->count_all_results('goods');  //无搜索的总条数
			}
			
			$page_num=ceil($num/$page_size);  //计算总页数
			//echo $num;die;
			isset($_GET['page'])?$page=$_GET['page']:$page=1; //当前页

			$limits=($page-1)*$page_size;  //偏移量

			if(is_string($search)){
				$this->db->like('goods_name',$search);
			}
			$query=$this->db
				->join('goods_type','goods_type.goods_type_id=goods.goods_type_id')
				->join('brand','brand.brand_id=goods.brand_id')
				->limit($page_size,$limits)
				->get('goods');
			//$query=$this->db->query("SELECT * FROM `goods` inner join goods_type on goods.goods_type_id=goods_type.goods_type_id inner join brand on goods.brand_id=brand.brand_id limit $limits,$page_size");
			//$query=$this->db->limit($page_size,$limits)->join('goods_type')->where('goods.goods_type_id=goods_type.goods_type_id')->get("goods");
			$data=$query->result_array();
			//print_r($data);die;
			$data['0']['page_num']=$page_num;
			$data['0']['page']=$page;
			return $data;
		}

		//删除
		//function 
	}
?>