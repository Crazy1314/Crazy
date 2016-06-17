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
<!-- 载入公共文件 -->
<?php $this->load->view('pub.html') ?>
<!-- 载入公共文件 -->

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
<script src="<?php echo base_url('public/js/brand.js')?>"></script>