<?php
//相册类
class AlbumAction extends Action {
    //相册列表
    //显示所有或者指定分类
    public function lists() {
        $atype = $_GET['atype'];
        $where = 1;
        $tname = "所有"; //分类名称
        if (!empty($atype)) {
            $where = "album_type.id=$atype";
            $db_atype = M("album_type");
            $typeinfo = $db_atype->where($where)->find();
            $tname = $typeinfo['t_name'];
        }
        $this->assign("tname", $tname);

        $album = M('album'); // 实例化User对象
        import('ORG.Util.Page'); // 导入分页类
        $count = $album->where($where)->count(); // 查询满足要求的总记录数
        $Page = new Page($count, 8); // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show(); // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $album->field(" album.*,album_type.t_name,userinfo.nickname ")->where($where)->join("album_type on album.t_id=album_type.id")->join("userinfo on album.uid=userinfo.id")->order('album.id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        //echo $album->getLastSql();exit;
        $this->assign('arr', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        $this->display(); // 输出模板
    }
	/*
	演示页
	所有相册
	普通方式搜索、关键字保留、关键字标红
	*/
    public function lists1() {
		$where = 'id>0';
		$keyword = $_POST['keyword'];
		if(!empty($keyword)) $where = " p_name like '%$keyword%'";
		$User = D('Album'); // 实例化User对象
		import('ORG.Util.Page');// 导入分页类
		$count      = $User->where($where)->count();// 查询满足要求的总记录数
		$Page       = new Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->where($where)->order('id desc ')->limit($Page->firstRow.','.$Page->listRows)->select();
        if(!empty($keyword)){
			foreach($list as $k=>$v){
			   $list[$k]['p_name'] =  str_replace($keyword,"<font color='red'>".$keyword."</font>",$v['p_name']);
			}
		}
		$this->assign('keyword',$keyword);
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
    }
    
    //显示指定用户的相册列表
    public function useralbum() {
        //取用户昵称
        $uid = $_GET['uid'];
        $db_userinfo = M("userinfo");
        $userinfo = $db_userinfo->where("id=$uid")->find();
        $uname = $userinfo['nickname'];
        $this->assign("uname", $uname);

        $album = M('album'); // 实例化User对象
        $where = "album.uid=$uid";
        import('ORG.Util.Page'); // 导入分页类
        $count = $album->where($where)->count(); // 查询满足要求的总记录数
        $Page = new Page($count, 4); // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show(); // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $album->field(" album.*,album_type.t_name ")->where($where)->join("album_type on album.t_id=album_type.id")->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('arr', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        $this->display(); // 输出模板
    }

    //展示指定相册中的图片
    function album_photo() {
        $id = $_GET['id'];
        //查询该相册基本信息
        $album_db = M("album");
        $album_info = $album_db->field("album.*,userinfo.nickname")->join( 'userinfo on album.uid=userinfo.id')->where("album.id=$id")->find();     
       //查询该相册下所有图片
        $db = M("photo");
        $arr = $db->where("photo.t_id=$id")->select();
        if ($arr) {
            $this->assign("album_info", $album_info );
            $this->assign("arr", $arr);
            $this->display();
        } else {
            $this->error("对不起，该相册下暂无图片！", "__APP__/Album/lists");
        }
    }
    
    //展示某张图片的详细信息
    function photo_detail() {
        $id = $_GET['id'];
        $db = M("photo");
        $info = $db->where("id=$id")->find();
        $this->assign("info", $info );
        $this->display(); 
    }

}
