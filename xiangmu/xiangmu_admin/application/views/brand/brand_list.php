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
    <div class="main-wrap" id="div2">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">品牌管理</a><span class="crumb-step">&gt;</span><span>品牌列表</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo site_url('Brand/insert_brand')?>" method="post" id="myform" name="myform" onsubmit="return check_all()">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                            <td>品牌ID</td>
                            <td>品牌名称</td>
                            </tr>
                            <?php foreach($res as $k=>$v){ ?>
                            <tr>
                                <td><?php echo $v['brand_id']?></td>
                                <td><?php echo $v['brand_name']?></td>
                            </tr>
                            <?php }?>
                        </tbody></table>
                </form>
            </div>
        </div>
<div class="list-page"><?php echo $page;?></div>
    </div>
    <!--/main-->
</div>
</body>
</html>
<script src="<?php echo base_url('public/js/jquery-1.8.3.min.js')?>"></script>
<script src="<?php echo base_url('public/js/brand.js')?>"></script>
