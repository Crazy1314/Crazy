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