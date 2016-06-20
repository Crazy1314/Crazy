<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>订单</title>

  <link rel="shortcut icon" href="favicon.ico">
  <link href="__PUBLIC__/css/style.css" media="screen" rel="stylesheet" type="text/css">
  <link href="__PUBLIC__/css/grid.css" media="screen" rel="stylesheet" type="text/css">

  <script src="__PUBLIC__/js/jquery-1.7.2.min.js" ></script>
  <script src="__PUBLIC__/js/html5.js" ></script>
  <script src="__PUBLIC__/js/jflow.plus.js" ></script>
  <script src="__PUBLIC__/js/jquery.carouFredSel-5.2.2-packed.js"></script>
  <script src="__PUBLIC__/js/checkbox.js"></script>
  <script src="__PUBLIC__/js/radio.js"></script>
  <script src="__PUBLIC__/js/selectBox.js"></script>

  <script>
       $(document).ready(function(){
        $("#myController").jFlow({
         controller: ".control", // must be class, use . sign
         slideWrapper : "#jFlowSlider", // must be id, use # sign
         slides: "#slider",  // the div where all your sliding divs are nested in
         selectedWrapper: "jFlowSelected",  // just pure text, no sign
         width: "984px",  // this is the width for the content-slider
         height: "480px",  // this is the height for the content-slider
         duration: 400,  // time in miliseconds to transition one slide
         prev: ".slidprev", // must be class, use . sign
         next: ".slidnext", // must be class, use . sign
         auto: true
        });
       });
  </script>
  <script>
    $(function() {
      $('#list_product').carouFredSel({
      prev: '#prev_c1',
      next: '#next_c1',
      auto: false
      });
      $('#list_product2').carouFredSel({
      prev: '#prev_c2',
      next: '#next_c2',
      auto: false
      });
      $(window).resize();
    });
  </script>
  <script>
       $(document).ready(function(){
        $("button").click(function(){
         $(this).addClass('click')
        });
       })
  </script>
  <script>
       $(document).ready(function() {
        $("select").selectBox();
       });
  </script>

</head>
<body>
  <div class="container_12">
    <div id="top">
      <div class="grid_3">
        <div class="phone_top">
          400-000-001
        </div><!-- .phone_top -->
      </div><!-- .grid_3 -->

    </div><!-- #top -->

    <div class="clear"></div>

    <header id="branding">
      <div class="grid_3">
        <hgroup>
          <h1 id="site_logo" ><a href="index/index.html" title=""><img src="__PUBLIC__/images/logo.png" alt="Online Store Theme Logo"/></a></h1>
          <h2 id="site_description">在线商城</h2>
        </hgroup>
      </div><!-- .grid_3 -->

      <div class="grid_3">
        <form class="search">
          <input type="text" name="search" class="entry_form" value="" placeholder="搜索商品"/>
  </form>
      </div><!-- .grid_3 -->

      <div class="grid_6">
        <ul id="cart_nav">
          <li>
            <a class="cart_li" href="#">购物车<span id="prices"><?php echo ($total); ?></span></a>
            <ul class="cart_cont">
              <li class="no_border"><p>最近添加的商品</p></li>
              <?php if(is_array($goods)): foreach($goods as $key=>$v): ?><li>
                <a href="product_page.html" class="prev_cart"><div class="cart_vert"><img src="__PUBLIC__/uploads/<?php echo ($v["0"]["goods_img_path"]); ?>" alt="" title="" /></div></a>
                <div class="cont_cart">
                  <h4><?php echo ($v["0"]["goods_name"]); ?></h4>
                  <div class="price"><?php echo ($v["goods_num"]); ?> x <?php echo ($v["0"]["goods_sku_price"]); ?></div>
                </div>
                <a title="close" class="close" href="#"></a>
                <div class="clear"></div>
              </li>
              <li>
                <div class="cont_cart">
                <h4>邮费:10.00元</h4>
                </div>
              </li><?php endforeach; endif; ?>
             
        <li class="no_border">
    <a href="__APP__/Product/index" class="view_cart">查看购物车</a>
    <a href="__APP__/Order/index" class="checkout">结账</a>
        </li>
            </ul>
          </li>
        </ul>

        <nav class="private">
          <ul>
            <li><a href="#">我的账号</a></li>
    <li class="separator">|</li>
            <li><a href="#">我的清单</a></li>
    <li class="separator">|</li>
            <li><a href="login.html">登陆</a></li>
    <li class="separator">|</li>
            <li><a href="login.html">注册</a></li>
          </ul>
        </nav><!-- .private -->
      </div><!-- .grid_6 -->
    </header><!-- #branding -->
  </div><!-- .container_12 -->

  <div class="clear"></div>

  <div id="block_nav_primary">
    <div class="container_12">
      <div class="grid_12">
        <nav class="primary">
          <ul>
            <li class="curent"><a href="__APP__">首页</a></li>
            <li><a href="catalog_grid.html">固体</a></li>
            <li><a href="catalog_grid.html">液体</a></li>
            <li>
              <a href="catalog_grid.html">喷雾</a>
              <ul class="sub">
                <li><a href="catalog_grid.html">For home</a></li>
                <li><a href="catalog_grid.html">For Garden</a></li>
                <li><a href="catalog_grid.html">For Car</a></li>
                <li><a href="catalog_grid.html">Other spray</a></li>
              </ul>
            </li>
            <li><a href="catalog_grid.html">电</a></li>
            <li><a href="catalog_grid.html">汽车</a></li>
      <li>
              <a href="#">所有页面</a>
              <ul class="sub">
                <li><a href="index.html">首页</a></li>
                <li><a href="text_page.html">板式和基本样式</a></li>
                <li><a href="catalog_grid.html">目录（网格视图）</a></li>
                <li><a href="catalog_list.html">Catalog (list type view)</a></li>
                <li><a href="product_page.html">Product view</a></li>
                <li><a href="shopping_cart.html">购物车</a></li>
                <li><a href="checkout.html">Proceed to checkout</a></li>
                <li><a href="compare.html">Products comparison</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="contact_us.html">Contact us</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="blog.html">Blog posts</a></li>
                <li><a href="blog_post.html">Blog post view</a></li>
              </ul>
            </li>
          </ul>
        </nav><!-- .primary -->
      </div><!-- .grid_12 -->
    </div><!-- .container_12 -->
  </div><!-- .block_nav_primary -->

  <div class="clear"></div>

  <section id="main" class="entire_width">
    <div class="container_12">
       <div class="grid_12">
       <h1 class="page_title">订单</h1>

       <table class="cart_product">
        <?php if(is_array($order)): foreach($order as $key=>$v): ?><tr style="background:#eee">
          <th colspan="2" align="left" style="padding-left:20px;" >订单号：<?php echo ($v['border_number']); ?></th>
          <th  style="padding-right:20px;" >订单总价：<strong><?php echo ($v["border_total"]); ?>元</strong></th>
          <th align="right" style="padding-right:20px;" >
            <?php if($v['border_state'] == 0): ?><a href="__APP__/Pay/pay?order_number=<?php echo ($v['border_number']); ?>">立即付款</a>
           <?php elseif($v['border_state'] == 1): ?>
            已付款等待商家发货
           <?php elseif($v['border_state'] == 2): ?>
            商家已发货，等待确认收货
           <?php else: ?> 
            确认收货<?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;
           <a title="close"  href="javascript:void(0)" id="closes" onclick="closes(<?php echo ($v['border_id']); ?>)">取消订单</a> 
          </th>
        </tr>
        <?php if(is_array($v['goods'])): foreach($v['goods'] as $key=>$v1): ?><tr>
         <td class="images"><a href="__PUBLIC__/uploads/<?php echo ($v1['goods_img_path']); ?>"><img src="__PUBLIC__/images/<?php echo ($v1['goods_img_path']); ?>" alt="<?php echo ($v1['goods_img_path']); ?>" ></a></td>
         <td class="bg price"><?php echo ($v1['goods_name']); ?>&nbsp;&nbsp;<?php echo ($v1['goods_sku_nature']); ?></td>
         <td class="bg price"><?php echo ($v1['goods_sku_price']); ?>元</td>
         <td class="bg price">*&nbsp;<?php echo ($v1['border_goods_count']); ?>
         </td>
         
         
        </tr><?php endforeach; endif; endforeach; endif; ?>
        <tr>
         <td colspan="7" class="cart_but">
          <button class="continue"><span>icon</span>继续购物</button>
          
         </td>
        </tr>
       </table>
       </div><!-- .grid_12 --> 
      <script>
        //总价的计算
        $(function(){
          var total = $("#t_total").html();
          if(total == 0){
            total = 0;
          }else{
            total = parseInt(total)+10;
          }
          $("#price").html(total);
          $("#prices").html(total+'元');
        })
        //删除购物车商品
        function closes(border_id){
            var confirm = window.confirm('确定要删除吗？');
            if(confirm == true){
              location.href="__APP__/Order/del?border_id="+border_id;
              
              }else{
              return false;
            }  
          }
      </script>
      <div class="clear"></div>

      <div class="clear"></div>

      <div class="carousel" id="following">
        <div class="c_header">
          <div class="grid_10">
            <h5>
              基于您的选择,您可能会感兴趣以下商品:
            </h5>
          </div><!-- .grid_10 -->

          <div class="grid_2">
            <a id="next_c1" class="next arows" href="#"><span>Next</span></a>
            <a id="prev_c1" class="prev arows" href="#"><span>Prev</span></a>
           </div><!-- .grid_2 -->
        </div><!-- .c_header -->

        <div class="list_carousel">

        <ul id="list_product" class="list_product">
          <?php if(is_array($com_goods)): foreach($com_goods as $key=>$v): ?><li class="">
              <div class="grid_3 product">
                
                <div class="prev">
                  <a href="__APP__/Goods/index?goods_sku_id=<?php echo ($v["goods_sku_id"]); ?>"><img src="__PUBLIC__/uploads/<?php echo ($v["goods_img_path"]); ?>" alt="" title="" /></a>
                </div><!-- .prev -->
                <h3 class="title"><?php echo ($v["goods_name"]); ?></br><?php echo ($v["goods_sku_nature"]); ?></h3>
                <div class="cart">
                  <div class="price">
                  <div class="vert">
                    <div class="price_new"><?php echo ($v["goods_sku_price"]); ?></div>
                 
                  </div>
                  </div>
                  <a href="#" class="like"></a>
                  <a href="#" class="bay"></a>
                </div><!-- .cart -->
              </div><!-- .grid_3 -->
            </li><?php endforeach; endif; ?>

         

        </ul><!-- #list_product -->
        </div><!-- .list_carousel -->
      </div><!-- .carousel -->

    </div><!-- .container_12 -->
  </section><!-- #main -->

  <div class="clear"></div>

  <footer>
    <div class="f_navigation">
      <div class="container_12">
        <div class="grid_3">
          <h3>联系我们</h3>
          <ul class="f_contact">
            <li>49 Archdale, 2B Charlestone</li>
            <li>+777 (100) 1234</li>
            <li>mail@example.com</li>
          </ul><!-- .f_contact -->
        </div><!-- .grid_3 -->

        <div class="grid_3">
          <h3>信息</h3>
          <nav class="f_menu">
            <ul>
              <li><a href="#">关于我们</a></li>
              <li><a href="#">隐私政策</a></li>
              <li><a href="#">条款和条件</a></li>
              <li><a href="#">安全支付</a></li>
            </ul>
          </nav><!-- .private -->
        </div><!-- .grid_3 -->

        <div class="grid_3">
          <h3>客户的服务</h3>
          <nav class="f_menu">
            <ul>
              <li><a href="contact_us.html">Contact As</a></li>
              <li><a href="#">返回</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">站点地图</a></li>
            </ul>
          </nav><!-- .private -->
        </div><!-- .grid_3 -->

        <div class="grid_3">
          <h3>我的账户</h3>
          <nav class="f_menu">
            <ul>
              <li><a href="#">我的账户</a></li>
              <li><a href="#">订单历史</a></li>
              <li><a href="#">清单</a></li>
              <li><a href="#">通讯</a></li>
            </ul>
          </nav><!-- .private -->
        </div><!-- .grid_3 -->

        <div class="clear"></div>
      </div><!-- .container_12 -->
    </div><!-- .f_navigation -->

    <div class="f_info">
      <div class="container_12">
        <div class="grid_6">
          <p class="copyright">Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/"></a></p>
        </div><!-- .grid_6 -->

        

        <div class="clear"></div>
      </div><!-- .container_12 -->
    </div><!-- .f_info -->
  </footer>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>