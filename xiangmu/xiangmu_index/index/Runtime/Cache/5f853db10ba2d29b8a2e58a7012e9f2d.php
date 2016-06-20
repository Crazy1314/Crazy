<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>购物车</title>

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

      <!-- <div class="grid_6">
        <div class="welcome">
          Welcome visitor you can <a href="login.html">login</a> or <a href="login.html">create an account</a>.
        </div>.welcome
      </div> --><!-- .grid_6 -->

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
       <h1 class="page_title">购物车</h1>

       <table class="cart_product">
        <tr>
         <th class="images"></th>
         <th class="bg name">产品名称</th>
         <th class="bg price">单价</th>
         <th class="qty">数量</th>
         <th class="bg subtotal">小计</th>
         <th class="close"> </th>
        </tr>
        <?php if(is_array($goods)): foreach($goods as $key=>$v): ?><tr>
         <td class="images"><a href="__PUBLIC__/uploads/<?php echo ($v["goods_img_path"]); ?>"><img src="__PUBLIC__/images/<?php echo ($v["0"]["goods_img_path"]); ?>" alt="<?php echo ($v["0"]["goods_img_path"]); ?>" ></a></td>
         <td class="bg name"><?php echo ($v[0]['goods_name']); ?>&nbsp;&nbsp;</br></br><?php echo ($v[0]['goods_sku_nature']); ?></td>
         <td class="bg price"><?php echo ($v["0"]["goods_sku_price"]); ?>元</td>
         <td class="qty"><input type="text" name="" id="num<?php echo ($v["0"]["goods_sku_id"]); ?>" value="<?php echo ($v["goods_num"]); ?>" placeholder="<?php echo ($v["goods_num"]); ?>" onblur="numbers(<?php echo ($v["0"]["goods_sku_id"]); ?>)" />
            <input type="hidden" id="price<?php echo ($v["0"]["goods_sku_id"]); ?>" value="<?php echo ($v["0"]["goods_sku_price"]); ?>">
            <input type="hidden" id="old_num<?php echo ($v["0"]["goods_sku_id"]); ?>" value="<?php echo ($v["goods_num"]); ?>">
         </td>
         <td class="bg subtotal" id="subtotal<?php echo ($v["0"]["goods_sku_id"]); ?>"><?php echo ($v["total"]); ?></td>
         <td class="close"><a title="close" class="close" href="javascript:void(0)" id="closes" onclick="closes(<?php echo ($v[0]['goods_sku_id']); ?>)"></a></td> 
        </tr><?php endforeach; endif; ?>
        
        <tr>
         <td colspan="7" class="cart_but">
          <button class="continue"><span>icon</span>继续购物</button>
          <button class="update"><span>icon</span>修改购物车</button>
         </td>
        </tr>
       </table>
       </div><!-- .grid_12 -->
       <div id="content_bottom">
        <div class="grid_4">
          <div class="bottom_block estimate">
            <h3>选择收货地址&nbsp;&nbsp;<a href="">点击新增收货地址</a></h3>
            <?php if(is_array($address)): foreach($address as $k=>$v): ?><div class="address" id="<?php echo ($v["address_id"]); ?>" onclick="cliadd(<?php echo ($v["address_id"]); ?>)" style="cursor:pointer;border:1px #ccc dotted" >
                <input type="hidden" value="<?php echo ($v["address_id"]); ?>">
                <h5><?php echo ($v["address_name"]); ?>收</h5>
                <h5><?php echo ($v["address_area"]); ?></br><?php echo ($v["address_phone"]); ?></h5>  
              </div></br><?php endforeach; endif; ?>
            <input type="hidden" id="address" value="">
              <script>
              function cliadd(address_id){
                $(".address").attr('style','cursor:pointer;border:1px #ccc dotted');
                $("#"+address_id).attr('style','cursor:pointer;border:2px #2AB4C4 solid');
                $("#address").val(address_id);
              }
              </script>
      <script>
        $("#province").change(function(){
          var province_id = $("#p1").val();
          var str = '';
          $.ajax({
             type: "POST",
             url: "__APP__/Product/selectCity",
             data: "province_id="+province_id,
             dataType: "json",
             success: function(msg){
                for(var i=0;i<msg.length;i++){ 
                  var region_name=msg[i]['region_name'];
                  var region_id=msg[i]['region_id'];
                  var op=new Option(region_name,region_id);
                  $("#p2")[0].options.add(op);
                }
             $("#city").attr('style','display:block');
             }
          });
        })      
      </script>
          </div><!-- .estimate -->
        </div><!-- .grid_4 -->


        <div class="grid_4">
          <div class="bottom_block total">
        <table class="subtotal">
         <tr>
          <td>商品小计</td><td class="price" id="t_total"><?php echo ($total); ?>
              
          </td><td>元</td>
         </tr>
         <tr>
          <td>邮费</td><td class="price">10.00</td><td>元</td>
         </tr>
         <tr class="grand_total">
          <td>总计</td><td class="price" id="price"></td><td>元</td>
         </tr>
        </table>
      <button class="checkout">结账</button>
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
        function closes(goods_id){
            var confirm = window.confirm('确定要删除吗？');
            if(confirm == true){
              $('#closes').parent().parent().remove();
              $.ajax({
                 type: "POST",
                 url: "__APP__/Product/del",
                 data: "goods_id="+goods_id,
              });
            }else{
              return false;
            }  
          }
        // 修改数量对应的价格
        function numbers(goods_sku_id){
            //新的数量
            var goods_num = $("#num"+goods_sku_id).val();
            goods_num = parseInt(goods_num);
            if(goods_num>=0){
              //商品单价
              var price = $("#price"+goods_sku_id).val();
              //新的商品小计
              var total = goods_num*price;
              total = parseInt(total);
              $("#subtotal"+goods_sku_id).html(total);
              //旧的商品小计
              var total_price = $("#t_total").html();
              //alert(total_price+'不加运费的总价');
              //旧的数量
              var old_num = $("#old_num"+goods_sku_id).val();
              //alert(old_num+'旧的数量');
              //改变了的价格
              var change_price = (parseInt(goods_num)-parseInt(old_num))*price;
              //alert(change_price+'变了的价格');
              total_price = parseInt(total_price)+(parseInt(goods_num)-parseInt(old_num))*price;
              total = total_price+10; 
              //alert(total_price+'不加运费的总价');
              
              $("#total").val(total_price);
              $("#old_num"+goods_sku_id).val(goods_num);
              $("#t_total").html(total_price+'元');
              $("#price").html(total);
              $("#prices").html(total+'元');
              $.ajax({
                 type: "POST",
                 url: "__APP__/Product/upnum",
                 data: "goods_num="+goods_num+"&goods_sku_id="+goods_sku_id+"&total="+total,
                 
              });
            }else{
              alert('您输入格式不正确');
            }
          }
          $(".checkout").click(function(){
            var total = $("#price").html();
            var address_id = $("#address").val();
            if(address_id){
              location.href="__APP__/Order/CreatOrder?address_id="+address_id+"&total="+total;
              
            }else{
              alert('请选择收货地址');
            }
            
          })
      </script>
            <!-- <a href="#">Checkout with Multiple Addresses</a> -->
          </div><!-- .total -->
        </div><!-- .grid_4 -->

        <div class="clear"></div>
      </div><!-- #content_bottom -->
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
          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="__PUBLIC__/images/sale.png" alt="Sale"/>
              <div class="prev">
                <a href="product_page.html"><img src="__PUBLIC__/images/product_1.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">Febreze Air Effects New Zealand Springs</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="__PUBLIC__/images/sale.png" alt="Sale"/>
              <div class="prev">
                <a href="product_page.html"><img src="__PUBLIC__/images/product_2.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">Febreze Air Effects New Zealand Springs</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <div class="prev">
                <a href="product_page.html"><img src="__PUBLIC__/images/product_3.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">Febreze Air Effects New Zealand Springs</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <img class="sale" src="__PUBLIC__/images/sale.png" alt="Sale"/>
              <div class="prev">
                <a href="product_page.html"><img src="__PUBLIC__/images/product_4.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">Febreze Air Effects New Zealand Springs</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

          <li class="">
            <div class="grid_3 product">
              <div class="prev">
                <a href="product_page.html"><img src="__PUBLIC__/images/product_5.png" alt="" title="" /></a>
              </div><!-- .prev -->
              <h3 class="title">Febreze Air Effects New Zealand Springs</h3>
              <div class="cart">
                <div class="price">
                <div class="vert">
                  <div class="price_new">$550.00</div>
                  <div class="price_old">$725.00</div>
                </div>
                </div>
                <a href="#" class="obn"></a>
                <a href="#" class="like"></a>
                <a href="#" class="bay"></a>
              </div><!-- .cart -->
            </div><!-- .grid_3 -->
          </li>

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