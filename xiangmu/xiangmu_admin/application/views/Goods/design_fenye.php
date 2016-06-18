<table class="result-tab" width="100%">
        <tr>
            <th class="tc" width="5%"><input id="all" class="allChoose" type="checkbox"></th>
            <th>ID</th>
            <th>商品名称</th>
            <th>商品详情</th>
            <th>商品图片</th>
            <th>商品品牌</th>
            <th>商品类型</th>
            <th>是否上架</th>
            <th>是否为热品</th>
            <th>是否为新品</th>
            <th>操作</th>
        </tr>
        <?php foreach($goods as $k=>$v):?>
            <tr>
                <td class="tc"><input class="checkall" type="checkbox"  value="<?php echo $v['goods_id']?>"></td>
                <td><?php echo $v['goods_id']?></td>
                <td><?php echo $v['goods_name']?></td>
                <td><?php echo $v['goods_content']?></td>
                <td><img src="<?php echo "./Crazy/xiangmu/../../../../".$v['goods_img_path']?>" width="50px" height="50px"></td>
                <td><?php echo $v['brand_name']?></td>
                <td><?php echo $v['goods_type_name']?></td>
                <td><?php
                    if($v['stores']==1){
                        echo "√";
                    }else{
                        echo "×";
                    }
                 ?></td>
                 <td><?php
                    if($v['hot']==1){
                        echo "√";
                    }else{
                        echo "×";
                    }
                 ?></td>
                 <td><?php
                    if($v['new']==1){
                        echo "√";
                    }else{
                        echo "×";
                    }
                 ?></td>
                <td>
                    <a class="link-update" href="<?php echo site_url("goods/up?goods_id=").$v['goods_id']?>">修改</a>
                                    <a class="link-del" href="<?php echo site_url("goods/add_sku?goods_id=").$v['goods_id']?>">添加属性</a>
                </td>
            </tr>
    <?php endforeach?>
    </table>
    <div class="list-page">
        <a href="javascript:void(0)" value="1" class="last">首页</a>
        <?php for($i=1;$i<=$goods['0']['page_num'];$i++){
            echo "<a href='javascript:void(0)' value=".$i." class='last'>".$i."</a>";
        }?>
        <a href="javascript:void(0)" value="<?php echo $goods['0']['page_num']?>" class="last">尾页</a>
    </div>

<script src="<?php echo base_url('public/js/jquery-1.8.3.min.js')?>"></script>
<script src="<?php echo base_url('public/js/goods.js')?>"></script>