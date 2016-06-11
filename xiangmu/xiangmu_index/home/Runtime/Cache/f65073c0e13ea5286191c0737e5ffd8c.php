<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="__PUBLIC__/index/css/style.css" rel="stylesheet" type="text/css" />
        <style>
           .center { MARGIN-RIGHT: auto; MARGIN-LEFT: auto; }
        </style>
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
        <div class="center" style="height:20px;padding-top: 10px;">当前位置：<a href='__APP__'>首页</a>>>用户中心</div>
        <div  class="center" style="width:960px;border:1px solid #ccc;margin-top:10px;">
            <h2 style="text-align:center;">用户中心</h2>
            <div style="padding:20px;">
                <a href='__APP__/User/add_album/'>新建相册</a>|
                <a href='__APP__/User/add_photo/'>上传图片</a>
            </div>
            <table style="padding-left:24px;">
                 <tr style="margin-left:45px;width:180px;">
                <?php if(is_array($arr)): foreach($arr as $key=>$val): ?><td width="240" height="260">
                        <table>
                            <tr><td><a href='__APP__/Album/album_photo/id/<?php echo ($val["id"]); ?>'><img src="<?php echo ($val["logo"]); ?>" alt="" width="200px" height="160px"/></a></td></tr>
                            <tr><td><span style="color:#ff0000">相册名称：</span><?php echo ($val["p_name"]); ?></td></tr>
							<tr><td>图片数量:<?php echo ($val["p_count"]); ?></td></tr>
                            <tr><td>所属分类：<a href='__APP__/Album/lists/atype/<?php echo ($val["t_id"]); ?>'><?php echo ($val["t_name"]); ?></a></td></tr>
                            <tr><td>相册描述：<?php echo ($val["p_desc"]); ?></td></tr>
							<tr><td><a href='__URL__/edit_album/id/<?php echo ($val["id"]); ?>'>修改</a>|<a href='__URL__/del_album/id/<?php echo ($val["id"]); ?>'>删除</a></td></tr>
                        </table>
                    </td>
                    <?php if(($key+1)%4 == 0): ?></tr></tr><?php endif; endforeach; endif; ?>
                 </tr>
             </table>
            <div style="height:40px;text-align:center;"><?php echo ($page); ?></div>
        </div>
        <div style="clear:both"></div>
<div  class="center" style="TEXT-ALIGN:center;width:960px;height:80px;border:1px solid #ccc;margin-top:10px;padding-top:15px;">
            <div>我的相册图片联盟|把我的相册设为首页|帮助|高级|搜索风云榜|关于我的相册</div>
<div id="ft">&copy;2015&nbsp;wodexiangce&nbsp;使用我的相册前必读</div> 
</div>  
    </body>
</html>