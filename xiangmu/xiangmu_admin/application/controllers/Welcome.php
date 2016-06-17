<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('index/login.html');
    }

    public function index1(){
        $user_name=$_POST['user_name'];
        $user_pwd=$_POST['user_pwd'];
        $res=$this->db->query("select * from user where user_name='$user_name'")->result_array();
        //print_r($res);die;
        if($res){
            if($user_pwd==$res[0]['user_pwd']){
                $this->load->library('session');
                $this->session->set_userdata('user_id',$res[0]['user_id']);
                //$this->load->view('index/index.html');
                redirect('Welcome/lists');
            }else{
                echo "<script>alert('密码错误,请重新登陆');location.href='index';</script>";
            }
        }
    }

    //权限
    public function  lists(){
        $this->load->library('session');
        $user_id=$_SESSION['user_id'];
        $data=$this->db->query("select role_name,power.power_id,power_name,path,parent_id from user_role
                                    INNER join role on role.role_id=user_role.role_id
                                    INNER JOIN role_power on user_role.role_id=role_power.role_id
                                    INNER join power on power.power_id=role_power.power_id
                                    where user_role.user_id='$user_id'")->result_array();
        // print_r($data);die;
//        for($i=0;$i<count($data);$i++){
//            $method[]=$data[$i]['parent_id'];
//        }
        // $this->session->set_userdata('method',$method);
        $res=$this->digui($data,0,0);
        //print_r($res);die;
         $this->session->set_userdata('res',$res);
         //$res1=$_SESSION['res'];
       // print_r($res1);die;
        $this->load->view('index/index.html',$res);
    }
    public function u_name(){
        $name=$_POST['name'];
        $res=$this->db->query("select * from user where user_name='$name'")->result_array();
        if(!$res){
            echo "用户名不存在";
        }
    }
    public function digui($data,$path=0,$leval=0){
        static $arr=array();
        foreach($data as $key=>$val){
            if($val['parent_id']==$path){
                $val['leval']=$leval;
                $arr[]=$val;
                $this->digui($data,$val['power_id'],$leval+1);
            }
        }
        return $arr;
    }
    public function insert(){
        $this->load->view('index/insert.html');
    }
    public function design(){
        $this->load->view('index/design.html');
    }
}
