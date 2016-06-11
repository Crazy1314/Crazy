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
        <div class="center" style="height:20px;padding-top: 10px;">当前位置：<a href='__APP__'>首页</a>>><a href='__APP__/Album/lists/'>相册分类</a> >><?php echo ($tname); ?></div>
        <div  class="center" style="width:940px;border:1px solid #ccc;margin-top:10px;padding:10px;0px;10px;200px">
             <h2>用户登录</h2>
            <table width="500" height="200">
            <form method="post" action="">
                <tr><td>账号：</td><td><input type="text" name="username" /></td></tr>
                <tr><td>密码：</td><td><input type="password" name="password" /></td></tr>
				<tr><td colspan="2">
				<span style="font-size:12px; color:blue;">下次自动登录</span>
    <input id="rememberMe" name="rememberMe" type="checkbox" value="" />
				</td></tr>
                <tr><td colspan="2"><input type="submit" value="登 录" /><input type="reset" value="取 消" /></td></tr>
            </form>
            </table>
        </div>
        <div style="clear:both"></div>
<div  class="center" style="TEXT-ALIGN:center;width:960px;height:80px;border:1px solid #ccc;margin-top:10px;padding-top:15px;">
            <div>我的相册图片联盟|把我的相册设为首页|帮助|高级|搜索风云榜|关于我的相册</div>
<div id="ft">&copy;2015&nbsp;wodexiangce&nbsp;使用我的相册前必读</div> 
</div>  
    </body>
</html>