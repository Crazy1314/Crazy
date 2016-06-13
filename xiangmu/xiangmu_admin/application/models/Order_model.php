<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_model extends CI_Model {
     public function sel_cot(){
        return $this->db->count_all('border');
    }
    public function sel_pro($per_page,$page){
        return $this->db->limit($per_page,$page)->get('border')->result_array();
    }    
}
