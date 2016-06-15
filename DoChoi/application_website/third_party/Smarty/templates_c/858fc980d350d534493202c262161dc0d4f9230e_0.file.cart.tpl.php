<?php
/* Smarty version 3.1.29, created on 2016-06-09 19:37:18
  from "C:\xampp\htdocs\freshfood\application_website\views\checkout\cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5759a94eeda591_38966834',
  'file_dependency' => 
  array (
    '858fc980d350d534493202c262161dc0d4f9230e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\freshfood\\application_website\\views\\checkout\\cart.tpl',
      1 => 1465493835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5759a94eeda591_38966834 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <base href=<?php echo base_url();?>
>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<?php if (count($_smarty_tpl->tpl_vars['infor']->value) != 0) {?>
								<li><a href="#"><i class="fa fa-phone"></i><?php echo $_smarty_tpl->tpl_vars['infor']->value->buyer_telephone;?>
</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i><?php echo $_smarty_tpl->tpl_vars['infor']->value->buyer_email;?>
</a></li>
                                                                <li ><a href="" id="logout"><i class="fa fa-lock" ></i>Đăng xuất</a></li>
                                                            <?php } else { ?>
                                                                <li><a href="#"><i class="fa fa-phone"></i> Phone</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Email</a></li>
                                                            <?php }?>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="home"><img src="assets/images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="checkout/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="account"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="checkout/cart" class="active">Cart</a></li> 
										<li><a href="account">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div><?php if (count($_smarty_tpl->tpl_vars['rows']->value) != 0) {?>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
                                     
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
                                                        <td class="price">Quantity_max</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                                         
                                            <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_0_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$__foreach_r_0_saved_key = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_0_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
                                                
                                                <tr class="item_<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
" > 
							<td class="cart_product">
								<a href=""><img src="../uploads/<?php echo $_smarty_tpl->tpl_vars['r']->value->image;?>
" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</a></h4>
								<p>Web ID:<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
</p>
							</td>
							<td class="cart_price cart_price_<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
">
								<p><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</p>
							</td >
                                                        <td class="cart_price " > 
                                                            <p class="cart_quantity_max_<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value->quality;?>
</p>
                                                        </td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"> + </a>
                                                                        
									<input class="cart_quantity_input cart_quantity_input_<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
" type="text" name="quantity" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['r']->value->id];?>
" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price cart_total_price_<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
 "><?php echo $_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['r']->value->id]*$_smarty_tpl->tpl_vars['r']->value->price;?>
</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                                                <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
if ($__foreach_r_0_saved_key) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_r_0_saved_key;
}
?>
                                           <?php } else { ?>
                                           <h2>Không có sản phẩm</h2>
                                           <?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span></li>
							<li>Eco Tax <span>0</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="assets/images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

     <?php echo '<script'; ?>
 src="assets/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/jquery.scrollUp.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/price-range.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/jquery.prettyPhoto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>

<?php echo '<script'; ?>
>
    
    
    $(function(){
        
        $(".cart_quantity_up").click(function(e){
            e.preventDefault();
            var that = this;
            var id = $(that).attr('href');
            var pr = $(".cart_price_"+id).text();
            var qua = $(".cart_quantity_input_"+id).val();
            var qua_max = $(".cart_quantity_max_"+id).text();
            qua++;
            $(".cart_quantity_input_"+id).val(qua);
            $(".cart_total_price_"+id).text(qua*pr);
           
            if(qua == qua_max){
                $(that).hide();
            }
           $(".cart_quantity_down").show();
            $.ajax({
                url: "checkout/to_up",
                data: 'id=' + $(that).attr('href'),
                
            })
            
        })
        
        $(".cart_quantity_down").click(function(e){
            e.preventDefault();
            var that = this;
            var id = $(that).attr('href');
            var pr = $(".cart_price_"+id).text();
            var qua = $(".cart_quantity_input_"+id).val();
            qua--;
            $(".cart_quantity_input_"+id).val(qua);
            $(".cart_total_price_"+id).text(qua*pr);
            
            if(qua == 0){
                $(that).hide();
            }
            $(".cart_quantity_up").show();
            $.ajax({
                url: "checkout/to_down",
                data: 'id=' + $(that).attr('href'),  
            })
            
        })
        
        
        $(".cart_quantity_delete").click(function(e){
            e.preventDefault();
            var that = this;
            var id = $(that).attr('href');
            
            $(".item_"+id).hide();
            $.ajax({
                url: "checkout/to_delete",
                data: 'id=' + $(that).attr('href'),  
            })
            
        })
        
        $("#logout").click(function(e){
            e.preventDefault();
            $.ajax({
                url: "account/log_out"
            })
            location.reload(true);
        })
    })
    
<?php echo '</script'; ?>
><?php }
}
