
<table class="result-tab" width="100%">
    <tr>
        <th class="tc" width="5%"><input id="all" class="allChoose" type="checkbox"></th>
        <th>ID</th>
        <th>评论人</th>
        <th>评论商品id</th>
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
            <td><?php echo $v['goods_id']?></td>
            <td><?php echo $v['quality']?></td>                                
            <td><?php echo $v['price']?></td>
            <td><?php echo $v['text']?></td>                               
            <td><?php echo $v['time']?></td>                               
            <td>
                <a class="link-update" href="<?php echo site_url("goods/up?goods_id=").$v['goods_id']?>">修改</a>
                <a class="link-del" href="<?php echo site_url("goods/add_sku?goods_id=").$v['goods_id']?>">添加属性</a>
             
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

<script src="<?php echo base_url('public/js/jquery-1.8.3.min.js')?>"></script>
<script src="<?php echo base_url('public/js/goods.js')?>"></script>