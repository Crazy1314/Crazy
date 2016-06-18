<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_model extends CI_Model {
    //查询订单总数
     public function sel_cot(){
        return $this->db->count_all('border');
    }
    //订单列表分页
    public function sel_pro($offset,$length){
         return $this->db->query("select * from border inner join user on border.user_id=user.user_id inner join address where address.address_id=border.address_id limit $offset,$length")->result_array();
    }    
    //搜索后查询订单总数
    public function sel_co($u_name,$border_num,$total){
        if($border_num==''&&$u_name==''&&$total==''){
            $where=" ";
        }else if($total==''&&$u_name==''){
            $where="and border.border_number like '%$border_num%'";
        }else if($total==''&&$border_num==''){
            $where="and address.address_name like '%$u_name%' ";
        }else if($border_num==''&&$u_name==''){
            $where="and border.border_state='$total'";
        }else if($u_name==''){
            $where="and border.border_number like '%$border_num%' and border.border_state='$total' ";
        }else if($border_num==''){
            $where="and address.address_name like '%$u_name%' and border.border_state='$total' ";
        }else if($total==''){
            $where="and address.address_name like '%$u_name%' and border.border_number like '%$border_num%'";
        }else  if($border_num!=''&&$u_name!=''&&$total!=''){
            $where="and border.border_state='$total' and address.address_name like '%$u_name%' and border.border_number like '%$border_num%'";
        }
        return $this->db->query("select count(*) as c from border inner join user on border.user_id=user.user_id inner join address where address.address_id=border.address_id $where")->result_array();
    }
    //订单搜索
    public function sel_sou($u_name,$border_num,$total,$offset,$length){
       if($border_num==''&&$u_name==''&&$total==''){
            $where=" ";
        }else if($total==''&&$u_name==''){
            $where="and border.border_number like '%$border_num%'";
        }else if($total==''&&$border_num==''){
            $where="and address.address_name like '%$u_name%' ";
        }else if($border_num==''&&$u_name==''){
            $where="and border.border_state='$total'";
        }else if($u_name==''){
            $where="and border.border_number like '%$border_num%' and border.border_state='$total' ";
        }else if($border_num==''){
            $where="and address.address_name like '%$u_name%' and border.border_state='$total' ";
        }else if($total==''){
            $where="and address.address_name like '%$u_name%' and border.border_number like '%$border_num%'";
        }else  if($border_num!=''&&$u_name!=''&&$total!=''){
            $where="and border.border_state='$total' and address.address_name like '%$u_name%' and border.border_number like '%$border_num%'";
        }
         return $this->db->query("select * from border inner join user on border.user_id=user.user_id inner join address where address.address_id=border.address_id $where limit $offset,$length")->result_array();
    }   
    //查看订单信息
    public function sel_one($border_id){
        return $this->db->query("select * from border_goods inner join goods on border_goods.goods_id=goods.goods_id inner join goods_sku on goods_sku.goods_id=border_goods.goods_id inner join brand on goods.brand_id=brand.brand_id inner join goods_type on goods.goods_type_id=goods_type.goods_type_id where border_goods.border_id=$border_id")->result_array();
    }
}
