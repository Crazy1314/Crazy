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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo site_url('Goods/sku');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <input type="hidden" name="goods_id" value="<?php echo $goods_id?>">
                            <tr>
                                <th width="120"><i class="require-red">*</i>商品容量</th>
                                <td>
                                    <input class="common-text required" name="goods_sku_nature" size="50" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th width="120"><i class="require-red">*</i>商品库存</th>
                                <td>
                                    <input class="common-text required" name="goods_sku_stock" size="50" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th width="120"><i class="require-red">*</i>商品价格</th>
                                <td>
                                    <input class="common-text required" name="goods_sku_price" size="50" type="text">
                                </td>
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