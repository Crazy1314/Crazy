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
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">商品管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>商品管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo site_url('Welcome/insert')?>"><i class="icon-font">&#xe008;</i>商品添加</a></li>
                        <li><a href="<?php echo site_url('Welcome/design')?>"><i class="icon-font">&#xe005;</i>商品列表</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo site_url('Goods/add');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th width="120"><i class="require-red">*</i>商品名称</th>
                                <td>
                                    <input class="common-text required" name="goods_name" size="50" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>品牌：</th>
                                <td>
                                    <select name="brand_id" class="required">
                                        <option value="0">请选择</option>
                                        <?php foreach($brand as $k=>$v):?>
                                            <option value="<?php echo $v['brand_id']?>">
                                                <?php echo $v['brand_name']?></option>
                                        <?php endforeach?>
                                    </select>
                                </td> 
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>商品类别：</th>
                                <td>
                                    <select name="goods_type_id" class="required">
                                        <option value="0">请选择</option>
                                        <?php foreach($type as $k=>$v):?>
                                            <option value="<?php echo $v['goods_type_id']?>">
                                                <?php echo $v['goods_type_name']?></option>
                                        <?php endforeach?>
                                    </select>
                                </td> 
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>商品图片</th>
                                <td><input name="goods_img_path" type="file"><!--2<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>商品是否上架</th>
                                <td>
                                    <input type="radio" name="stores" value="1">上架
                                    <input type="radio" name="stores" value="0">下架
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>商品是否为热卖品</th>
                                <td>
                                    <input type="radio" name="hot" value="1">热卖
                                    <input type="radio" name="hot" value="0">非热卖
                                </td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>商品是否为新品</th>
                                <td>
                                    <input type="radio" name="new" value="1">新品
                                    <input type="radio" name="new" value="0">非新品
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>商品内容：</th>
                                <td><textarea name="goods_content" class="common-textarea" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>