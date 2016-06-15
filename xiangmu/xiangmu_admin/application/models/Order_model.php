<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_model extends CI_Model {
    //查询订单总数
     public function sel_cot(){
        return $this->db->count_all('border');
    }
    //订单列表分页
    public function sel_pro($per_page,$page){
         return $this->db->query("select * from border inner join user on border.user_id=user.user_id inner join address where address.address_id=border.address_id limit $page,$per_page")->result_array();
    }    
    //搜索后查询订单总数
    public function sel_co($u_name,$border_num,$total){
        if($border_num==''&&$u_name==''&&$total==''){
            $where=" ";
        }else if($total==''&&$u_name==''){
            $where="and border.border_number='$border_num'";
        }else if($total==''&&$border_num==''){
            $where="and user.user_name='$u_name' ";
        }else if($border_num==''&&$u_name==''){
            $where="and border.border_state='$total'";
        }else if($u_name==''){
            $where="and border.border_number='$border_num' and border.border_state='$total' ";
        }else if($border_num==''){
            $where="and user.user_name='$u_name' and border.border_state='$total' ";
        }else if($total==''){
            $where="and user.user_name='$u_name' and border.border_number='$border_num'";
        }else  if($border_num!=''&&$u_name!=''&&$total!=''){
            $where="and border.border_state='$total' and user.user_name='$u_name' and border.border_number='$border_num'";
        }
        return $this->db->query("select count(*) as c from border inner join user on border.user_id=user.user_id inner join address where address.address_id=border.address_id $where")->result_array();
    }
    //订单搜索
    public function sel_sou($u_name,$border_num,$total,$per_page,$page){
        if($border_num==''&&$u_name==''&&$total==''){
            $where=" ";
        }else if($total==''&&$u_name==''){
            $where="and border.border_number='$border_num'";
        }else if($total==''&&$border_num==''){
            $where="and user.user_name='$u_name' ";
        }else if($border_num==''&&$u_name==''){
            $where="and border.border_state='$total'";
        }else if($u_name==''){
            $where="and border.border_number='$border_num' and border.border_state='$total' ";
        }else if($border_num==''){
            $where="and user.user_name='$u_name' and border.border_state='$total' ";
        }else if($total==''){
            $where="and user.user_name='$u_name' and border.border_number='$border_num'";
        }else  if($border_num!=''&&$u_name!=''&&$total!=''){
            $where="and border.border_state='$total' and user.user_name='$u_name' and border.border_number='$border_num'";
        }
         return $this->db->query("select * from border inner join user on border.user_id=user.user_id inner join address where address.address_id=border.address_id $where limit $page,$per_page")->result_array();
    }   
}
