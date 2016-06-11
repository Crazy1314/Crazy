<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		//dump($_SESSION);
		//dump($_COOKIE);
        //$mod = D("album_type");
        $mod_a_t = D("AlbumType");
        $re = $mod_a_t->order('sort desc')->limit(4)->select();
        $mod_a = D("Album");
        foreach($re as $k=>$v){
            $tmp = $mod_a->field("album.*,userinfo.nickname")->join("userinfo on album.uid=userinfo.id")->where('album.t_id='.$v['id'])->order('album.id desc')->limit(4)->select();
            $re[$k]['albumlist'] = $tmp;
        }
        //print_r($re);
        $this->assign('arr',$re);
        $this->display();
    }
}