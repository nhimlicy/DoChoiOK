<?php
/* Smarty version 3.1.29, created on 2016-04-25 18:35:35
  from "C:\xampp\htdocs\freshfood\application_website\views\home\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571e475793f690_04386020',
  'file_dependency' => 
  array (
    '431dc5bc260bbd37f9354440ba21fa84aad4e3d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\freshfood\\application_website\\views\\home\\index.tpl',
      1 => 1461602133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571e475793f690_04386020 ($_smarty_tpl) {
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
                                                            <?php } else { ?>
                                                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
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
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
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
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout">Checkout</a></li> 
										<li><a href="checkout/cart">Cart</a></li> 
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
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="assets/images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="assets/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="assets/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="assets/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="assets/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="assets/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php
$_from = $_smarty_tpl->tpl_vars['cates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_c_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="home/list_cate/<?php echo $_smarty_tpl->tpl_vars['c']->value->cate_id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->cate_name;?>
</a></h4>
								</div>
							</div>
							<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_local_item;
}
if ($__foreach_c_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_0_saved_item;
}
?>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
                                                <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_1_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_1_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img style="weith: 150px; height: 218px;" src="../uploads/<?php echo $_smarty_tpl->tpl_vars['r']->value->image;?>
" alt="" />
										<h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
										<p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
											<p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
                                                                                        <a href="#" class="btn btn-default add-to-cart" rel="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
" class="view"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_1_saved_local_item;
}
if ($__foreach_r_1_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_1_saved_item;
}
?>
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#rau" data-toggle="tab">Rau</a></li>
								<li><a href="#cu" data-toggle="tab">Cu</a></li>
								<li><a href="#qua" data-toggle="tab">qua</a></li>
								<li><a href="#khac" data-toggle="tab">Khac</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="rau" >
								<?php
$_from = $_smarty_tpl->tpl_vars['rows_cate_rau']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_2_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_2_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img style="weith: 150px; height: 218px;" src="../uploads/<?php echo $_smarty_tpl->tpl_vars['r']->value->image;?>
" alt="" />
												<h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
												<p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
                                                                                                <a href="#" class="btn btn-default add-to-cart" rel="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
                                                                <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_2_saved_local_item;
}
if ($__foreach_r_2_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_2_saved_item;
}
?>
							</div>
							
							<div class="tab-pane fade" id="cu" >
								<?php
$_from = $_smarty_tpl->tpl_vars['rows_cate_cu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_3_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_3_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img style="weith: 150px; height: 218px;"  src="../uploads/<?php echo $_smarty_tpl->tpl_vars['r']->value->image;?>
" alt="" />
												<h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
												<p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
												<a href="#" class="btn btn-default add-to-cart" rel="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
                                                                <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_3_saved_local_item;
}
if ($__foreach_r_3_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_3_saved_item;
}
?>
							</div>
							
							<div class="tab-pane fade" id="qua" >
								<?php
$_from = $_smarty_tpl->tpl_vars['rows_cate_qua']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_4_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_4_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img style="weith: 150px; height: 218px;" src="../uploads/<?php echo $_smarty_tpl->tpl_vars['r']->value->image;?>
" alt="" />
												<h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
												<p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
												<a href="#" class="btn btn-default add-to-cart" rel="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
                                                                <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_4_saved_local_item;
}
if ($__foreach_r_4_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_4_saved_item;
}
?>
							</div>
							
							<div class="tab-pane fade" id="khac" >
								
								<?php
$_from = $_smarty_tpl->tpl_vars['rows_cate_khac']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_5_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_5_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img  style="weith: 150px; height: 218px;"src="../uploads/<?php echo $_smarty_tpl->tpl_vars['r']->value->image;?>
" alt="" />
												<h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
												<p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
												<a href="#" class="btn btn-default add-to-cart" rel="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
                                                                <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_5_saved_local_item;
}
if ($__foreach_r_5_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_5_saved_item;
}
?>
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php
$_from = $_smarty_tpl->tpl_vars['rows_time_max']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_6_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_6_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img  style="weith: 150px; height: 218px;" src="../uploads/<?php echo $_smarty_tpl->tpl_vars['r']->value->image;?>
" alt="" />
                                                                                                        <h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
                                                                                                        <p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
                                                                                                        <a href="#" class="btn btn-default add-to-cart" rel="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
                                                                        <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_6_saved_local_item;
}
if ($__foreach_r_6_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_6_saved_item;
}
?>
								</div>
								<div class="item">	
									<?php
$_from = $_smarty_tpl->tpl_vars['rows_time']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_7_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_7_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img  style="weith: 150px; height: 218px;" src="../uploads/<?php echo $_smarty_tpl->tpl_vars['r']->value->image;?>
" alt="" />
                                                                                                        <h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
                                                                                                        <p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
                                                                                                        <a href="#" class="btn btn-default add-to-cart" rel="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
                                                                        <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_7_saved_local_item;
}
if ($__foreach_r_7_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_7_saved_item;
}
?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
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
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
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
        $(".view").click(function(e){
            e.preventDefault();
            var that = this;
            $.ajax({
                url: "home/view",
                data: 'id=' + $(that).attr('href'),
                
            })
            $(location).attr('href', "home/detail/" + $(that).attr('href') )
        })
        
        $(".add-to-cart").click(function(e){
            e.preventDefault();
            var that = this;
            $.ajax({
                url: "checkout/add_to_cart",
                data: 'id=' + $(that).attr('rel'),
                success: function(resp){
                    alert(resp);
                }
            })
            
        })
    })
    
<?php echo '</script'; ?>
><?php }
}
