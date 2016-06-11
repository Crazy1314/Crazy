<?php
//公共类
class PublicAction extends Action {
   //注册及注册处理 
   function register(){
       if($_POST){
		   //print_r($_POST);exit;
           if(empty($_POST['username']))$this->error('用户名不能为空');
           if(empty($_POST['nickname']))$this->error('昵称不能为空');
           if(empty($_POST['password']))$this->error('密码不能为空');
            if($_POST['password']!=$_POST['repassword'])$this->error('密码和重复密码不一致');
           //print_r($_POST);
           $userinfo_obj = M("userinfo");
            if($userinfo_obj->add($_POST)){
                $this->success('添加成功！','__APP__/Public/login');
            }else{
                $this->error('添加失败');
            }   
            exit;
       }
       $this->display('register');  
   }	
   //登录及登录处理 
   function login(){
	   //echo session_id();
	   //echo session_name();
	   //var_dump($_SESSION);
       if($_POST){
           //echo '登录处理';
           $username = $_POST['username'];
           $userinfo_obj = M("userinfo");
           $re = $userinfo_obj->where("username='$username'")->find();
           if(!$re) $this->error('用户名不存在');
           if($re['username']!=$username) $this->error('用户名密码不一致');
		   //setcookie('uname','xingfeng',time()+3600*7);//cookie方式实现免登录
           cookie('uname',$re['username'],3600);  //设置cookie
           cookie('nickname',$re['nickname'],3600);  //设置cookie
           cookie('uid',$re['id'],3600);  //设置cookie

		   session(array('name'=>session_id(),'expire'=>3600));
		   //setcookie(session_name(),session_id(),time()+3600,"/");
           session('uname',$re['username']);  //设置cookie
		  
		   //var_dump($_SESSION);exit;
           $this->success('登录成功！','__APP__');
           exit;
       }
       $this->display('login');  
   }	
   //登录及登录处理 
   function logout(){
//         cookie(null);  //清空当前设定前缀的所有cookie值
           cookie('uname',null);  //清空cookie
           cookie('nickname',null);  //清空cookie
           cookie('uid',null);  //清空cookie
           $this->success('退出成功！','__APP__');
   }	
   //验证用户唯一性
   function checkuname()
   {
	$db = D("userinfo");
	$uname = trim($_GET['uname']);
	$re = $db->getUinfoByUname($uname);
	if($re){
	  echo 1;
	}else{
	  echo 0;
	}
	}
   
   
}