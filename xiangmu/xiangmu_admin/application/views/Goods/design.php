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
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo site_url('Welcome/insert')?>"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
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
                        <?php foreach($goods as $k=>$v):?>
                            <tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
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
                                    <a class="link-update" href="#">修改</a>
                                    <a class="link-del" href="#">删除</a>
                                    <a class="link-del" href="">添加属性</a>
                                </td>
                            </tr>
                    <?php endforeach?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>