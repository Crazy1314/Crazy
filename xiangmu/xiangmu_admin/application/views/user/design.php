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

<div class="container clearfix">
    <!-- 载入公共文件 -->
    <?php $this->load->view('pub.html') ?>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="<?php echo site_url('User/sou')?>" method="post">
                    <table class="search-tab">
                        <tr>

                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字"  name="name" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit" ></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert.html"><i class="icon-font"></i>新增作品</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>用户姓名</th>
                            <th>手机号</th>
                            <th>邮箱</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach($re as $v):?>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td><?php echo $v['user_id']?></td>
                            <td><?php echo $v['user_name']?></td>
                            <td onclick="dian(<?php echo $v['user_id']?>)">
                                <span id="s<?php echo $v['user_id']?>" name="<?php echo $v['user_phone']?>"><?php echo $v['user_phone']?></span>
                                <input type="text" onblur="up(<?php echo $v['user_id']?>)" id="i<?php echo $v['user_id']?>" value="<?php echo $v['user_phone']?>" style="display: none">
                            </td>
                            <td onclick="dian1(<?php echo $v['user_id']?>)">
                                <span id="s1<?php echo $v['user_id']?>" name1="<?php echo $v['email']?>"><?php echo $v['email']?></span>
                                <input type="text" onblur="up1(<?php echo $v['user_id']?>)" id="i1<?php echo $v['user_id']?>" value="<?php echo $v['email']?>" style="display: none">
                                </td>
                            <td><?php echo $v['time']?></td>
                            <td>
                                <a class="link-del" href="<?php echo site_url('User/del?user_id='.$v['user_id'])?>"/>
                                     删除
                                </a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </table>
                    <div class="list-page"> </div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
<script src="<?php echo base_url('Public/jquery.js')?>"></script>
<script>
    function dian(user_id){
        $('#i'+user_id).show();
        $('#s'+user_id).hide();
        $('#i'+user_id).focus();
    }
    function  up(user_id){
        $('#i'+user_id).hide();
        $('#s'+user_id).show();
        var name=$('#i'+user_id).val();
        if(name==''){
            alert('不能为空');
        }else{
            var name=$('#i'+user_id).val();
            $.ajax({
                type:'post',
                url:"<?php echo site_url('User/update')?>",
                data:'name='+name+'&user_id='+user_id,
                success:function(data){
                    if(data==1){
                        $('#s'+user_id).html(name);
                    }
                }
            })


        }
    }
    function dian1(user_id){
        $('#i1'+user_id).show();
        $('#s1'+user_id).hide();
        $('#i1'+user_id).focus();
    }
    function  up1(user_id){
        $('#i1'+user_id).hide();
        $('#s1'+user_id).show();
        var name1=$('#i1'+user_id).val();
        if(name1==''){
            alert('不能为空');
        }else{
            var name1=$('#i1'+user_id).val();
            $.ajax({
                type:'post',
                url:"<?php echo site_url('User/update1')?>",
                data:'name1='+name1+'&user_id='+user_id,
                success:function(data){
                    if(data==1){
                        $('#s1'+user_id).html(name1);
                    }
                }
            })


        }
    }
//    function sou(){
//        var name=$('#name').val();
//        $.ajax({
//            type:'post',
//            url:'<?php //echo site_url('User/sou')?>//',
//            data:'name='+name,
//            success:function(data){
//                alert(data);
//            }
//        })
//    }


</script>
