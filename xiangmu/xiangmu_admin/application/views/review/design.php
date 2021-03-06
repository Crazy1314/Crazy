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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">评价管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <!-- <form action="/jscss/admin/design/index" method="post"> -->
                    <table class="search-tab">
                        <tr>
                            <th width="100">评论人搜索:</th>
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
                        
                        <a id="batchDel" class="del" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input id="all" class="allChoose" type="checkbox"></th>
                            <th>ID</th>
                            <th>评论人</th>
                            <th>评论商品</th>
                            <th>质量等级</th>
                            <th>价格等级</th>
                            <th>评论内容</th>
                            <th>评论时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(isset($review[0]['review_id'])){

                            foreach($review as $k=>$v):?>
                                <tr>
                                    <td class="tc"><input class="checkall" type="checkbox"  value="<?php echo $v['review_id']?>"></td>
                                    <td><?php echo $v['review_id']?></td>
                                    <td><?php echo $v['user_name']?></td>
                                    <td><?php echo $goods_name[$k][0]['goods_name']?>

                                    </td>
                                    <td>
                                        <?php
                                        if($v['quality']==1){
                                            echo "一星级";
                                        }elseif($v['quality']==2){
                                            echo "二星级";
                                        }elseif($v['quality']==3){
                                            echo "三星级";
                                        }elseif($v['quality']==4){
                                            echo "四星级";
                                        }elseif($v['quality']==5){
                                            echo "五星级";
                                        }elseif($v['quality']==1){
                                            echo "未评价";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($v['price']==1){
                                            echo "一星级";
                                        }elseif($v['price']==2){
                                            echo "二星级";
                                        }elseif($v['price']==3){
                                            echo "三星级";
                                        }elseif($v['price']==4){
                                            echo "四星级";
                                        }elseif($v['price']==5){
                                            echo "五星级";
                                        }elseif($v['price']==1){
                                            echo "未评价";
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $v['text']?></td>
                                    <td><?php echo $v['time']?></td>
                                    <td>
                                        <a class="link-update" href="#" onclick="del_one(<?php echo $v['review_id']?>)" >删除</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        <?php }else{
                            echo "无数据";die;
                        }?>
                    </table>
                    <div class="list-page">
                        <a href="javascript:void(0)" value="1" class="last">首页</a>
                        <?php for($i=1;$i<=$review['0']['page_num'];$i++){
                            echo "<a href='javascript:void(0)' value=".$i." class='last'>".$i."</a>";
                        }?>
                        <a href="javascript:void(0)" value="<?php echo $review['0']['page_num']?>" class="last">尾页</a>
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
<script src="<?php echo base_url('public/js/review.js')?>"></script>