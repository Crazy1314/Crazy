<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="__PUBLIC__/index/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="center" style="width:960px;height:80px;border:1px solid #ccc;">
            <div> 
                <span><img src="__PUBLIC__/index/images/wdxc_l.png"/></span>
                <span style="float:right;padding-top:10px;padding-right:30px;">
                    <a href='__APP__'>首页</a> |
                    <?php if($_COOKIE['uname']== ''): ?><a href='__APP__/Public/register/'>注册</a> | 
                    <a href='__APP__/Public/login/'>登录</a> | 
                    
                    <?php else: ?>
                    &nbsp;&nbsp;欢迎您，<?php echo (session('uname')); ?>。<a href='__APP__/Public/logout/'>退出</a>|
                     <a href='__APP__/User/index/'>个人中心</a> |<?php endif; ?>
                    <a href='__APP__/User/add_album/'>新建相册</a> |
					<a href='__APP__/Album/lists/'>查看所有相册</a>
                </span>
            </div>
        </div>
        <div  class="center" style="width:960px;border:1px solid #ccc;margin-top:10px;">
            <?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><div style="width:960px;height:280px;border:0px solid #ccc;">
                <div style="background-color:#FC8F07;height:30px;padding-top:10px;padding-left:20px;">
                    <span style="width:600px;" class="cate_title" ><?php echo ($vo["t_name"]); ?>&nbsp;&nbsp;</span><span style="float:right;"><a href='__APP__/Album/lists/atype/<?php echo ($vo["id"]); ?>'>更多...</a></span>
                </div>
                <div style="width:958px;height:240px;border:0px solid #ccc;padding-top:10px;">
                     <table>
                         <tr>
                            <?php if(is_array($vo["albumlist"])): foreach($vo["albumlist"] as $key=>$v): ?><td width="234" style="text-align:center;">
                                 <a href='__APP__/Album/album_photo/id/<?php echo ($v["id"]); ?>'><img src="<?php echo ($v["logo"]); ?>" width="180" height="180"/></a><br>
                                 <?php echo ($v["p_name"]); ?>(共<?php echo ($v["p_count"]); ?>图)<br/>
                                 创建人：<a href='__APP__/Album/useralbum/uid/<?php echo ($v["uid"]); ?>'><?php echo ($v["nickname"]); ?></a><br/>
                                </td><?php endforeach; endif; ?>
                         </tr>  
                    </table>
                </div>
            </div><?php endforeach; endif; ?>
        </div>
        
        <div style="clear:both"></div>
<div  class="center" style="TEXT-ALIGN:center;width:960px;height:80px;border:1px solid #ccc;margin-top:10px;padding-top:15px;">
            <div>我的相册图片联盟|把我的相册设为首页|帮助|高级|搜索风云榜|关于我的相册</div>
<div id="ft">&copy;2015&nbsp;wodexiangce&nbsp;使用我的相册前必读</div> 
</div>  
    </body>
</html>