<?php
class LoginAction extends Action {
    // 登陆首页
    public function login(){
        $this->display('login');
    }
    //登陆
    public function login_pro(){
        $user_name=$_POST['user_name'];
        $user_pwd=$_POST['user_pwd'];
        $obj=D('User');
        $res=$obj->login($user_name);
        $user_id=$res['user_id'];
        $user_name=$res['user_name'];
        if($user_pwd==$res['user_pwd']){
            session('user_id',$user_id);//这里是设置值
            session('user_name',$user_name);
            //echo session('user_id');die;
            // print_r($user_id1);die;
            $this->redirect('Index/index');
            // $this->display('index');
        }else{
            echo "<script>alert('密码错误');location.href='login'</script>";
        }
    }
    //注册
    public function zhuce(){
        $this->display('zhuce');
    }
    public function zhuce1(){
        $user_name=$_POST['user_name'];
        $user_phone=$_POST['user_phone'];
        $email=$_POST['email'];
        $user_pwd=$_POST['user_pwd'];
        $time=date('Y-m-d H:i:s',time());
        $obj=D('User');
        $res=$obj->insert_pro($user_name,$user_pwd,$user_phone,$email,$time);
        if(!$res){
            echo "<script>alert('注册成功，请登录');location.href='login'</script>";
        }else{
            echo "<script>alert('注册失败，请重新注册');location.href='zhuce'</script>";
        }

    }
    public function name1(){
        $name=$_POST['name'];
        //echo $name;die;
        $obj=D('User');
        $res=$obj->select_p($name);
        //print_r($res);die;
        if(!$res){
            echo "用户名不存在";
        }
    }
    public function name_p(){
        $name=$_POST['name_p'];
        $obj=D('User');
        $res=$obj->select_p($name);
        if($res){
            echo '用户名已存在';
        }
    }

}