<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/21
 * Time: 20:00
 */

class UserModel extends Model {
    public function login($user_name){
        return  $this->Table('user')->where("user_name='$user_name'")->find();
    }
    public function insert_pro($user_name,$user_pwd,$user_phone,$email,$time){
        return $this->query("insert into user VALUES (null,'$user_name','$user_pwd','$user_phone','$email','$time')");
    }
    public function select_p($name){
        return  $this->Table('user')->where("user_name='$name'")->find();
    }
}