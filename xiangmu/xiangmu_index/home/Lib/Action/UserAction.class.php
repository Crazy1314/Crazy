<?php
//相册类
class UserAction extends Action {
    //必须登录
    function _initialize()
    {
		if(!cookie('uname'))
		{
		  $this->error("请先登录","__APP__/Public/login");
		}
    }
    public function index(){
        $atype = $_GET['atype'];
        $where = "album.uid=".cookie('uid');
        //echo $where;
        $album = M('album'); // 实例化User对象
        import('ORG.Util.Page');// 导入分页类
        $count      = $album->where($where)->count();// 查询满足要求的总记录数
        $Page       = new Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $album->field(" album.*,album_type.t_name ")->where($where)->join("album_type on album.t_id=album_type.id")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('arr',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    
    //添加相册
    public function add_album(){
          if($_POST){
              $db=M("album");
		  $arr=$_POST;
		  $arr['addtime']=date("Y-m-d H-i-s");

        import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 314572800 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
		}else{// 上传成功 获取上传文件信息
		$info =  $upload->getUploadFileInfo();
                }
		$arr['logo']="__PUBLIC__/Uploads/".$info[0]['savename'];
                $arr['uid']= cookie('uid');

	   //print_r($arr);die;
	   $db->add($arr)?$this->success("添加成功","__APP__/User/index"):$this->error("添加失败");
             exit;
              
          }  
            
	  $db=M("album_type");
	  $arr=$db->select();
	  $this->assign("arr",$arr);
	  $this->display();
    }

    public function edit_album() {
		if($_POST){
        $db = M("album");
        $arr = $_POST;
        $id = $_POST['h_id'];
        $arr['addtime'] = date("Y-m-d H-i-s");
        $db->where("id=$id")->save($arr) ? $this->success("修改成功", "__APP__/Album/lists") : $this->error("修改失败");
        exit;
		}

        //修改表单页
        $db = M("album");
        $id = $_GET['id'];
        $arr = $db->field(" album.*,album_type.t_name ")->join("album_type on album.t_id=album_type.id")->where("album.id=$id")->find();
        //print_r($arr);die;
        $this->assign("arr", $arr);
        $db2 = M("album_type");
        $arr2 = $db2->select();
        $this->assign("arr2", $arr2);
        $this->display();
    }

	public function del_album(){
		$db = M("album");
        $id = $_GET['id'];
        //echo $id;die;
        $arr = $db->join("photo on photo.t_id=album.id")->where("photo.t_id=$id")->select();
        //print_r($arr);die;
        if ($arr) {
            $this->error("该相册下有图片，无法删除！");
        } else {
            $db->where("id=$id")->delete() ? $this->success("删除成功") : $this->error("删除失败");
        }
    }

    
    //添加图片
    function add_photo(){
		//添加处理
        if($_POST){
			$db=D("Photo");
			$arr=$_POST;
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 314572800 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}
			else
			{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
				$p_count = count($info);
				for($i=0;$i<$p_count;$i++)
				{    
				 $ar[$i]['a_addtime']=date("Y-m-d H-i-s");
				 $ar[$i]['a_add_name']=$arr['a_add_name'];
				 $ar[$i]['t_id']=$arr['t_id'];
				 $ar[$i]['img']="__PUBLIC__/Uploads/".$info[$i]['savename'];
				 $ar[$i]['a_name']=$arr['a_name'][$i];
				 $ar[$i]['a_desc']=$arr['a_desc'][$i];
				}			
			}
			if($db->addAll($ar)){
				//更新相册表图片数量
                $db2=D("Album");
                $db2->where("id=".$arr['t_id'])->setInc('p_count',$p_count);
				$this->success("添加成功","__APP__/User/index");
			}else{
				$this->error("添加失败");
			}
			exit;
      }
	  //添加表单
	  $db=M("album");
	  $arr=$db->order('id desc')->select();
	  $this->assign("arr",$arr);    
	  $this->display();  
    }		
}