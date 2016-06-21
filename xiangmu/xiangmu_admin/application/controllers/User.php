<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index(){
        $res['re']=$this->db->query("select * from user")->result_array();
        $this->load->view('user/design',$res);
    }
    public function del(){
        $user_id=$this->input->get('user_id');
        //$user_id=$_POST['user_id'];
        $res=$this->db->query("delete from user where user_id='$user_id'");
        if($res){
            echo "<script>alert('删除成功');location.href='index';</script>";
        }else{
            echo "<script>alert('删除失败');location.href='index';</script>";
        }
    }
    //几点技改
    public function update(){
        $user_id=$_POST['user_id'];
        $name=$_POST['name'];
        $res=$this->db->query("update user set user_phone='$name' where user_id='$user_id'");
        if($res){
            echo 1;
        }else{
            echo 0;
        }

    }
    public function update1(){
        $user_id=$_POST['user_id'];
        $name1=$_POST['name1'];
        $res=$this->db->query("update user set email='$name1' where user_id='$user_id'");
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function sou(){
        $name=$_POST['name'];
        //echo $name;die;
        $res['re']=$this->db->query("select * from user where user_name='$name'")->result_array();
        $this->load->view('user/design',$res);
    }
}