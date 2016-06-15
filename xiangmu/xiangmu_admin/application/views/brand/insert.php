<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『有主机上线』后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public')?>/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public')?>/css/main.css"/>
    <script type="text/javascript" src="<?php echo base_url('public')?>/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
.            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">商品管理</a></h1>
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
                    <a href="#"><i class="icon-font">&#xe003;</i>品牌管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo site_url('Brand/insert')?>"><i class="icon-font">&#xe008;</i>添加品牌</a></li>
                        <li><a href="<?php echo site_url('Brand/list')?>"><i class="icon-font">&#xe005;</i>品牌列表</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>订单管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo site_url('Order/lists')?>"><i class="icon-font">&#xe005;</i>订单列表</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增品牌</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo site_url('Brand/insert_brand')?>" method="post" id="myform" name="myform" onsubmit="return check_all()">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="160"><i class="require-red">*</i>请输入您添加的品牌：</th>
                            <td>
                                <input type="text" id="brand_name" name="brand_name"><span id="s1"></span>
                            </td>
                        </tr>
                         <tr>
                                <th></th>
                                <td>
                                    <input id="btn" class="btn btn-primary btn6 mr10" value="提交" type="submit">
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
<script src="<?php echo base_url('public/js/jquery-1.8.3.min.js')?>"></script>
<script>
    $("#brand_name").blur(function(){
        brand_name=$("#brand_name").val();
        if(brand_name==''){
            $("#s1").html("<font color='red'>*不能为空</font>");
            return false;
        }else{
             $("#s1").html("");
            return true;
        }
    })
    function check_all(){
        brand_name=$("#brand_name").val();
        if(brand_name==''){
            $("#s1").html("<font color='red'>*不能为空</font>");
            return false;
        }else{
            return true;
        }
    }
    
</script>