<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <title>我的相册-注册页面</title>
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
            <h2>用户注册</h2>
            <table width="500" height="300">
            <form method="post" action="" onsubmit="return checkform()">
                <tr><td width="100">账号：</td><td><input type="text" id="username" name="username" onblur="checkuname()" />&nbsp;&nbsp;<span id="des_username"></span></td></tr>
                <tr><td>昵称：</td><td><input type="text" id="nickname" name="nickname" onblur="checknickname()" />&nbsp;&nbsp;<span id="des_nickname"></span></td></tr>
                <tr><td>密码：</td><td><input type="password" name="password" /></td></tr>
                <tr><td>重复密码：</td><td><input type="password" name="repassword" /></td></tr>
                <tr><td colspan="2"><input type="submit" value="注 册" /><input type="reset" value="取 消" /></td></tr>
            </form>
                </table>
        </div>
        <div style="clear:both"></div>
<div  class="center" style="TEXT-ALIGN:center;width:960px;height:80px;border:1px solid #ccc;margin-top:10px;padding-top:15px;">
            <div>我的相册图片联盟|把我的相册设为首页|帮助|高级|搜索风云榜|关于我的相册</div>
<div id="ft">&copy;2015&nbsp;wodexiangce&nbsp;使用我的相册前必读</div> 
</div>  
    </body>
	<script type="text/javascript">
	<!--
		var flag = false;
		function checkuname(){
		  var uname=document.getElementById("username").value;
		  if (uname=="")
		  {
			  document.getElementById("des_username").innerHTML = "账号不能为空";
			  return false;
		  }
			var ajax=new XMLHttpRequest();

			ajax.onreadystatechange=function()
			{
			  if(ajax.readyState==4)
				{
				   //document.getElementById("id").innerHTML=ajax.responseText;
				   if(ajax.responseText==1){
					  document.getElementById("des_username").innerHTML = "用户名已存在";
					  flag = false
				   }else{
					  document.getElementById("des_username").innerHTML = "用户名可以用";
					  flag = true
				   }
				}
			}
			ajax.open('get','__APP__/Public/checkuname/uname/'+uname,true);
			ajax.send();
			return flag;
		}

		function checknickname(){
		  var nickname=document.getElementById("nickname").value;
		  if (nickname=="")
		  {
			  document.getElementById("des_nickname").innerHTML = "昵称不能为空";
			  return false;
		  }else{
		      document.getElementById("des_nickname").innerHTML = "";
			  return true;
		  }
		}

		function checkform(){
		  if(checkuname()&&checknickname()){
		     return true;
			 
		  }else{
		     return false;
			
		  }
		}
	//-->
	</script>
		
	
	
</html>