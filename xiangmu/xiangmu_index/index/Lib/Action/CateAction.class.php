<?php
class CateAction extends Action {
	
    public function index()
    {
        $goods=D('goods');
        //分类
        $cate=D('goods_type');
        $cates=$cate->limit(10)->select();
        foreach($cates as $key=>$v)
        {
            $id = $v['goods_type_id'];
            $res=$goods->where("goods_type_id = $id")->select();
            $cates[$key]['num']=count($res);
            $nums+=count($res);
        }
        //echo $nums;die;
        $total=$goods->select();
        $total=count($total);
        $other=$total-$nums;
        // print_r($cates);
        // die;
        //品牌
        $brand=D('brand');
        $brands=$brand->limit(10)->select();
        //搜索
        


        import("ORG.Util.Page");// 导入分页类
        $goods_type_id=$_GET['d'];
        $p=isset($_GET['p'])?$_GET['p']:0;
        if(isset($goods_type_id))
        {
            $res=$goods->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")->where("goods.goods_type_id=$goods_type_id")->select();
            $resCate=$goods->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")->join("goods_sku on goods.goods_id=goods_sku.goods_id")->where("goods.goods_type_id=$goods_type_id")->limit($p,2)->select();
            $map=array('d'=>$goods_type_id);
            $count = count($res);
            $Page       = new Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
            foreach($map as $key=>$val) 
            {
                $Page->parameter   .=   "$key=".urlencode($val)."&";

            }
        }
        else
        {
            $res=$goods->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")->select();
            $resCate=$goods->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")->join("goods_sku on goods.goods_id=goods_sku.goods_id")->limit($p,2)->select();
            $count = count($res);
            $Page       = new Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        }

        
        

        $show       = $Page->show();// 分页显示输出
        //echo $show;die;
        //echo $goods->getlastsql();
        //print_r($resCate);die;
        $this->assign('res', $resCate);
        $this->assign('cates', $cates);
        $this->assign('other', $other);
        $this->assign('brands',$brands);
        $this->assign('show',$show);
        $this->display('catalog_list');
    }
    //改变样式
    public function changeList()
    {
        $goods=D('goods');
        //分类
        $cate=D('goods_type');
        $cates=$cate->limit(10)->select();
        foreach($cates as $key=>$v)
        {
            $id = $v['goods_type_id'];
            $res=$goods->where("goods_type_id = $id")->select();
            $cates[$key]['num']=count($res);
            $nums+=count($res);
        }
        //echo $nums;die;
        $total=$goods->select();
        $total=count($total);
        $other=$total-$nums;
        // print_r($cates);
        // die;
        //品牌
        $brand=D('brand');
        $brands=$brand->limit(10)->select();
        //搜索
        


        import("ORG.Util.Page");// 导入分页类
        $goods_type_id=$_GET['d'];
        $p=isset($_GET['p'])?$_GET['p']:0;
        if(isset($goods_type_id))
        {
            $res=$goods->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")->where("goods.goods_type_id=$goods_type_id")->select();
            $resCate=$goods->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")->join("goods_sku on goods.goods_id=goods_sku.goods_id")->where("goods.goods_type_id=$goods_type_id")->limit($p,6)->select();
            $map=array('d'=>$goods_type_id);
            $count = count($res);
            $Page       = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
            foreach($map as $key=>$val) 
            {
                $Page->parameter   .=   "$key=".urlencode($val)."&";

            }
        }
        else
        {
            $res=$goods->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")->select();
            $resCate=$goods->join("goods_type on goods.goods_type_id=goods_type.goods_type_id")->join("goods_sku on goods.goods_id=goods_sku.goods_id")->limit($p,6)->select();
            $count = count($res);
            $Page       = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
        }

        
        

        $show       = $Page->show();// 分页显示输出
        //echo $show;die;
        //echo $goods->getlastsql();
        //print_r($resCate);die;
        $this->assign('res', $resCate);
        $this->assign('cates', $cates);
        $this->assign('other', $other);
        $this->assign('brands',$brands);
        $this->assign('show',$show);
        $this->display('catalog_grid');
    }


    /**
     * TODO 基础分页的相同代码封装，使前台的代码更少
     * @param $m 模型，引用传递
     * @param $where 查询条件
     * @param int $pagesize 每页查询条数
     * @return \Think\Page
     */
    function getpage(&$m,$where,$pagesize=10){
        $m1=clone $m;//浅复制一个模型
        $count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
        $m=$m1;//为保持在为定的连惯操作，浅复制一个模型
        $p=new Think\Page($count,$pagesize);
        $p->lastSuffix=false;
        $p->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>%LIST_ROW%</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $p->setConfig('prev','上一页');
        $p->setConfig('next','下一页');
        $p->setConfig('last','末页');
        $p->setConfig('first','首页');
        $p->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $p->parameter=I('get.');

        $m->limit($p->firstRow,$p->listRows);

        return $p;
    }
    
   
   
}