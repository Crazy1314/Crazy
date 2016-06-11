<?php if (!defined('THINK_PATH')) exit();?><meta charset=utf8>
<link href="__PUBLIC__/admin/commen.css" rel="stylesheet" type="text/css">
<div class="maindiv">
<form action="__URL__" method="post" enctype="multipart/form-data">
<h1 style="font-family:楷体">相册修改</h1>
<table class="noborder">
<tr>
<td>相册标题：</td>
<td><input type="text" name="p_name" value="<?php echo ($arr["p_name"]); ?>"></td>
</tr>

<tr>
<td>所属分类：</td>
<td>
<select name="t_id">
<?php foreach($arr2 as $key=>$val) { if($val['id']==$arr['t_id']) { echo "<option value='".$val['id']."' selected>".$val['t_name']."</option>"; } else { echo "<option value='".$val['id']."'>".$val['t_name']."</option>"; } } ?>

</select>
</td>
</tr>

<tr>
<td>封面：</td>
<td><input type="file" name="myfile"></td>
</tr>

<tr>
<td>相册描述：</td>
<td><textarea name="p_desc" rows="5" cols="18"> <?php echo ($arr["p_desc"]); ?></textarea></td>
</tr>
<tr>
<td><input type="hidden" name="h_id" value="<?php echo ($arr["id"]); ?>"></td>
</tr>
<tr>
<td colspan=2 align='center'><input type="submit" value="修改"></td>
</tr>
</table>

</form>
</div>