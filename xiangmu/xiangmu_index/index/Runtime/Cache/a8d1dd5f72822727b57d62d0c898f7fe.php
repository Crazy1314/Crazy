<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<!--载入前台公共头部-->
<div class="container_12">
    <div id="top">
      <div class="grid_3">
        <div class="phone_top">
          打电话给我们+ 777（100）1234 
        </div><!-- .phone_top -->
      </div><!-- .grid_3 -->

      <div class="grid_6">
        <div class="welcome">
          欢迎光临，您可以 <a href="__APP__/Login/login">登录</a> 或 <a href="__APP__/Login/login">注册一个帐户。</a>
        </div><!-- .welcome -->
      </div><!-- .grid_6 -->

      <div class="grid_3">
        <div class="valuta">
          <ul>
            <li class="curent"><a href="#">$</a></li>
            <li><a href="#">&#8364;</a></li>
            <li><a href="#">&#163;</a></li>
          </ul>
        </div><!-- .valuta -->

        <div class="lang">
          <ul>
            <li class="curent"><a href="#">EN</a></li>
            <li><a href="#">FR</a></li>
            <li><a href="#">GM</a></li>
          </ul>
        </div><!-- .lang -->
      </div><!-- .grid_3 -->
    </div><!-- #top -->

    <div class="clear"></div>

    <header id="branding">
      <div class="grid_3">
        <hgroup>
          <h1 id="site_logo" ><a href="__APP__/Index/index" title=""><img src="__PUBLIC__/images/logo.png" alt="Online Store Theme Logo"/></a></h1>
          <h2 id="site_description">Online Store Theme</h2>
        </hgroup>
      </div><!-- .grid_3 -->

      <div class="grid_3">
        <form class="search">
          <input type="text" name="search" class="entry_form" value="" placeholder="Search entire store here..."/>
	</form>
      </div><!-- .grid_3 -->

      <div class="grid_6">
        <ul id="cart_nav">
          <li>
            <a class="cart_li" href="#">Cart <span>$0.00</span></a>
            <ul class="cart_cont">
              <li class="no_border"><p>Recently added item(s)</p></li>
              <li>
                <a href="__APP__/Index/product_page" class="prev_cart"><div class="cart_vert"><img src="__PUBLIC__/images/cart_img.png" alt="" title="" /></div></a>
                <div class="cont_cart">
                  <h4>Caldrea Linen and Room Spray</h4>
                  <div class="price">1 x $399.00</div>
                </div>
                <a title="close" class="close" href="#"></a>
                <div class="clear"></div>
              </li>
              
              <li>
                <a href="__APP__/Index/product_page" class="prev_cart"><div class="cart_vert"><img src="__PUBLIC__/images/produkt_slid1.png" alt="" title="" /></div></a>
                <div class="cont_cart">
                  <h4>Caldrea Linen and Room Spray</h4>
                  <div class="price">1 x $399.00</div>
                </div>
                <a title="close" class="close" href="#"></a>
                <div class="clear"></div>
              </li>
	      <li class="no_border">
		<a href="__APP__/Index/shopping_cart" class="view_cart">View shopping cart</a>
		<a href="__APP__/Index/checkout" class="checkout">Procced to Checkout</a>
	      </li>
            </ul>
          </li>
        </ul>

        <nav class="private">
          <ul>
            <li><a href="#">我的账户</a></li>
		<li class="separator">|</li>
            <li><a href="#">我的收藏</a></li>
		<li class="separator">|</li>
            <li><a href="__APP__/Login/login">登录</a></li>
		<li class="separator">|</li>
            <li><a href="__APP__/Login/zhuce">注册</a></li>
          </ul>
        </nav><!-- .private -->


      </div><!-- .grid_6 -->
    </header><!-- #branding -->
  </div><!-- .container_12 -->

<div id="block_nav_primary">
  <div class="container_12">
    <div class="grid_12">
      <nav class="primary">
        <ul>
          <li class="curent"><a href="__APP__/Index/index">家</a></li>
          <li><a href="__APP__/Index/catalog_grid">固体</a></li>
          <li><a href="__APP__/Index/catalog_grid">液体</a></li>
          <li>
            <a href="__APP__/Index/catalog_grid">Spray</a>
            <ul class="sub">
              <li><a href="__APP__/Index/catalog_grid">For home</a></li>
              <li><a href="__APP__/Index/catalog_grid">For Garden</a></li>
              <li><a href="__APP__/Index/catalog_grid">For Car</a></li>
              <li><a href="__APP__/Index/catalog_grid">Other spray</a></li>
            </ul>
          </li>
          <li><a href="__APP__/Index/catalog_grid">Electric</a></li>
          <li><a href="__APP__/Index/catalog_grid">For cars</a></li>
          <li>
            <a href="#">All pages</a>
            <ul class="sub">
              <li><a href="__APP__/Index/index">Home</a></li>
              <li><a href="text_page.html">Typography and basic styles</a></li>
              <li><a href="__APP__/Index/catalog_grid">Catalog (grid view)</a></li>
              <li><a href="__APP__/Index/catalog_list">Catalog (list type view)</a></li>
              <li><a href="__APP__/Index/product_page">Product view</a></li>
              <li><a href="__APP__/Index/shopping_cart">Shoping cart</a></li>
              <li><a href="__APP__/Index/checkout">Proceed to checkout</a></li>
              <li><a href="__APP__/Index/compare">Products comparison</a></li>
              <li><a href="__APP__/Login/login">Login</a></li>
              <li><a href="__APP__/Index/contact_us">Contact us</a></li>
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
<head>
    <script src="__PUBLIC__/jquery-2.1.4.min.js"></script>
    <meta charset="UTF-8">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Login</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link href="__PUBLIC__/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/css/grid.css" media="screen" rel="stylesheet" type="text/css">

    <script src="__PUBLIC__/js/jquery-1.7.2.min.js" ></script>
    <script src="__PUBLIC__/js/html5.js" ></script>
    <script src="__PUBLIC__/js/jflow.plus.js"></script>
    <script src="__PUBLIC__/js/jquery.carouFredSel-5.2.2-packed.js"></script>
    <script src="__PUBLIC__/js/checkbox.js"></script>
    <script src="__PUBLIC__/js/radio.js"></script>
    <script src="__PUBLIC__/js/selectBox.js"></script>

    <script>
        $(document).ready(function() {
            $("select").selectBox();
        });
    </script>

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
            $('#list_banners').carouFredSel({
                prev: '#ban_prev',
                next: '#ban_next',
                scroll: 1,
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

</head>
<body>




<div class="clear"></div>

<section id="main" class="entire_width">
    <div class="container_12">
        <div id="content">
            <div class="grid_12">
                <h1 class="page_title">Login or Create an Account</h1>
            </div><!-- .grid_12 -->

            <div class="grid_6 new_customers">
                <h2>新客户</h2>
                <p>通过创建一个帐户与我们的商店,你将能够完成结帐过程更快,移动存储多个航运地址,查看和跟踪你的订单在你的帐户和更多。 .</p>
                <div class="clear"></div>
                <a href="zhuce">
                    <button class="account">创建一个客户</button>
                </a>
            </div><!-- .grid_6 -->

            <div class="grid_6">
                <form class="registed"  method="post" action="__APP__/Login/login_pro" id="grid_6">
                    <h2>我要登陆</h2>
                    <p>如果你有我们这里的账户,请登录。</p>
                    <div class="email">
                        <strong>用户名</strong><sup class="surely">*</sup><br/>
                        <input type="text" class="admin_input_style" size="30"  name="user_name" id="name" required="required" placeholder="" form="grid_6" autofocus="autofocus" pattern='^[\u4e00-\u9fa5]{2,4}' onblur="name1()"/>
                        <div id="name3" style="color: red"></div>
                    </div><!-- .email -->
                    <div class="password">
                        <strong>密码:</strong><sup class="surely">*</sup><br/>
                        <input type="password"  class="admin_input_style" size="30"  name="user_pwd" id="pwd" required="required" placeholder="" form="grid_6" autofocus="autofocus" pattern='\d{3,6}'style="border: 1px solid #ccc;
    border-radius: 2px;
    color: #777;
    height: 33px;
    padding: 0 10px;margin: 5px 0 13px;
    width: 255px;"/>
                        <a class="forgot" href="#">忘记密码?</a>
                    </div><!-- .password -->
                    <div class="remember">
                        <input class="niceCheck" type="checkbox" name="Remember_password" />
                        <span class="rem">Remember password</span>
                    </div><!-- .remember -->
                    <div class="submit">
                        <input type="submit" value="登陆" />
                        <sup class="surely">*</sup><span>Required Field</span>
                    </div><!-- .submit -->
                </form><!-- .registed -->
            </div><!-- .grid_6 -->
        </div><!-- #content -->

        <div class="clear"></div>
    </div><!-- .container_12 -->
</section><!-- #main -->

<div class="clear"></div>

<footer>
    <div class="f_navigation">
        <div class="container_12">
            <div class="grid_3">
                <h3>Contact Us</h3>
                <ul class="f_contact">
                    <li>49 Archdale, 2B Charlestone</li>
                    <li>+777 (100) 1234</li>
                    <li>mail@example.com</li>
                </ul><!-- .f_contact -->
            </div><!-- .grid_3 -->

            <div class="grid_3">
                <h3>Information</h3>
                <nav class="f_menu">
                    <ul>
                        <li><a href="#">About As</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Secure payment</a></li>
                    </ul>
                </nav><!-- .private -->
            </div><!-- .grid_3 -->

            <div class="grid_3">
                <h3>Costumer Servise</h3>
                <nav class="f_menu">
                    <ul>
                        <li><a href="contact_us.html">Contact As</a></li>
                        <li><a href="#">Return</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </nav><!-- .private -->
            </div><!-- .grid_3 -->

            <div class="grid_3">
                <h3>My Account</h3>
                <nav class="f_menu">
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </nav><!-- .private -->
            </div><!-- .grid_3 -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </div><!-- .f_navigation -->

    <div class="f_info">
        <div class="container_12">
            <div class="grid_6">
                <p class="copyright">Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            </div><!-- .grid_6 -->

            <div class="grid_6">
                <div class="soc">
                    <a class="google" href="#"></a>
                    <a class="twitter" href="#"></a>
                    <a class="facebook" href="#"></a>
                </div><!-- .soc -->
            </div><!-- .grid_6 -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
    </div><!-- .f_info -->
</footer>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>

<script>
    function name1(){
        var name=$('#name').val();
        if(name==''){
            $('#name3').html('不能为空');
        }else{
            $.ajax({
                type:'post',
                url:'__APP__/Login/name1',
                data:'name='+name,
                success:function(data){
                    $('#name3').html(data);
//                    alert(data);
                }
            })
        }

    }
</script>