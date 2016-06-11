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
        <div  class="center" style="width:760px;border:1px solid #ccc;margin-top:10px;padding-left:200px;">
             <form action="" method="post" enctype="multipart/form-data">
            <h1 style="font-family:楷体">图片添加</h1>
            <table>
            <tr>
            <td>所属相册：</td>
            <td>
            <select name="t_id">
                    <?php if(is_array($arr)): foreach($arr as $key=>$val): ?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["p_name"]); ?></option><?php endforeach; endif; ?>
            </select>
            </td>
            </tr>
            <tr>
            <td>添加数量：</td>
            <td><select name="t_count" id="t_count" onchange="fun()">
                    <?php
 for($i=1;$i<=20;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
            </select></td>
            </tr>
            </table>
            <div id="div4">
            <p>图片名称：<input type="text" name="a_name[]"></p>
            <p>图片LOGO：<input type="file" name="myfile[]"></p>
            <p>图片描述：<textarea name="a_desc[]" rows="5" cols="18"></textarea></p>
            </div>
            <p><input type="submit" value="添加"></p>
            </form>
        </div>
        <div style="clear:both"></div>
<div  class="center" style="TEXT-ALIGN:center;width:960px;height:80px;border:1px solid #ccc;margin-top:10px;padding-top:15px;">
            <div>我的相册图片联盟|把我的相册设为首页|帮助|高级|搜索风云榜|关于我的相册</div>
<div id="ft">&copy;2015&nbsp;wodexiangce&nbsp;使用我的相册前必读</div> 
</div>  
    </body>
    <script type="text/javascript">
function fun()
{
var count=document.getElementById('t_count').value;
var i;
var str='';
var str2='';
for(i=1;i<=count;i++)
	{
     str+="<p>图片名称：<input type='text' name='a_name[]'></p>"+"<p>图片LOGO：<input type='file' name='myfile[]'></p>"+"<p>图片描述：<textarea name='a_desc[]' rows='5' cols='18'></textarea></p>";
	}
//alert(str);
document.getElementById('div4').innerHTML=str;

}

</script>
</html>