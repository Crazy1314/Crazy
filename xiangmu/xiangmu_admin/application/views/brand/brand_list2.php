<!doctype html>
<html>
    <div id="div2">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增品牌</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo site_url('Brand/insert_brand')?>" method="post" id="myform" name="myform" onsubmit="return check_all()">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                            <td>品牌ID</td>
                            <td>品牌名称</td>
                            </tr>
                            <?php foreach($res as $k=>$v){ ?>
                            <tr>
                                <td><?php echo $v['brand_id']?></td>
                                <td><?php echo $v['brand_name']?></td>
                            </tr>
                            <?php }?>
                        </tbody></table>
                </form>
            </div>
        </div>
<div class="list-page"><?php echo $page;?></div>
    </div>
    <!--/main-->
</div>