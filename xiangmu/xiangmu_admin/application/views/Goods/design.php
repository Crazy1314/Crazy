<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public')?>/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public')?>/css/main.css"/>
    <script type="text/javascript" src="<?php echo base_url('public')?>/js/libs/modernizr.min.js"></script>
</head>
<body>

<!-- 载入公共文件 -->
<?php $this->load->view('pub.html') ?>
<!-- 载入公共文件 -->

    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <!-- <form action="/jscss/admin/design/index" method="post"> -->
                    <table class="search-tab">
                        <tr>
                            <th width="100">商品名称搜索:</th>
                            <td><input class="common-text" placeholder="关键字" id="keywords" value="" id="" type="text"></td>
                            <!-- <td><input class="btn btn-primary btn2" id="search" value="查询" type="submit"></td> -->
                            <td><input class="btn btn-primary btn2" id="search" value="查询" type="button"></td>
                        </tr>
                    </table>
                <!-- </form>  -->
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo site_url('Welcome/insert')?>"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" class="del" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input id="all" class="allChoose" type="checkbox"></th>
                            <th>ID</th>
                            <th>商品名称</th>
                            <th>商品详情</th>
                            <th>商品图片</th>
                            <th>商品品牌</th>
                            <th>商品类型</th>
                            <th>是否上架</th>
                            <th>是否为热品</th>
                            <th>是否为新品</th>
                            <th>操作</th>
                        </tr>
                        <?php if(isset($goods[0]['goods_id'])){

                         foreach($goods as $k=>$v):?>
                            <tr>
                                <td class="tc"><input class="checkall" type="checkbox"  value="<?php echo $v['goods_id']?>"></td>
                                <td><?php echo $v['goods_id']?></td>
                                <td><?php echo $v['goods_name']?></td>
                                <td><?php echo $v['goods_content']?></td>
                                <td><img src="<?php echo "./Crazy/xiangmu/../../../../".$v['goods_img_path']?>" width="50px" height="50px"></td>
                                <td><?php echo $v['brand_name']?></td>
                                <td><?php echo $v['goods_type_name']?></td>
                                <td><?php
                                    if($v['stores']==1){
                                        echo "√";
                                    }else{
                                        echo "×";
                                    }
                                 ?></td>
                                 <td><?php
                                    if($v['hot']==1){
                                        echo "√";
                                    }else{
                                        echo "×";
                                    }
                                 ?></td>
                                 <td><?php
                                    if($v['new']==1){
                                        echo "√";
                                    }else{
                                        echo "×";
                                    }
                                 ?></td>
                                <td>
                                    <a class="link-update" href="<?php echo site_url("goods/up?goods_id=").$v['goods_id']?>">修改</a>
                                    <a class="link-del" href="<?php echo site_url("goods/add_sku?goods_id=").$v['goods_id']?>">添加属性</a>
                                </td>
                            </tr>
                     <?php endforeach;?>
                     <?php }else{
                        echo "无数据";die;
                    }?>
                    </table>
                    <div class="list-page">
                        <a href="javascript:void(0)" value="1" class="last">首页</a>
                        <?php for($i=1;$i<=$goods['0']['page_num'];$i++){
                            echo "<a href='javascript:void(0)' value=".$i." class='last'>".$i."</a>";
                        }?>
                        <a href="javascript:void(0)" value="<?php echo $goods['0']['page_num']?>" class="last">尾页</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>

<script src="<?php echo base_url('public/js/jquery-1.8.3.min.js')?>"></script>
<script src="<?php echo base_url('public/js/goods.js')?>"></script>