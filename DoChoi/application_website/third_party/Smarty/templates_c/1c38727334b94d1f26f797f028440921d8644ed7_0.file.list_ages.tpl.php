<?php
/* Smarty version 3.1.29, created on 2016-06-15 05:45:47
  from "C:\xampp\htdocs\DoChoi\application_website\views\home\list_ages.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5760cf6b8aa450_13278728',
  'file_dependency' => 
  array (
    '1c38727334b94d1f26f797f028440921d8644ed7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DoChoi\\application_website\\views\\home\\list_ages.tpl',
      1 => 1465962038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5760cf6b8aa450_13278728 ($_smarty_tpl) {
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
					<div class="col-sm-6 ">
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
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
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
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="account"><i class="fa fa-user"></i> Account</a></li>
								
								<li><a href="checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="checkout/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="account"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header>
	
	<section id="advertisement">
		<div class="container">
			<img src="assets/images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
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
						
                                                <h2>Độ tuổi</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php
$_from = $_smarty_tpl->tpl_vars['ages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ag_1_saved_item = isset($_smarty_tpl->tpl_vars['ag']) ? $_smarty_tpl->tpl_vars['ag'] : false;
$_smarty_tpl->tpl_vars['ag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ag']->value) {
$_smarty_tpl->tpl_vars['ag']->_loop = true;
$__foreach_ag_1_saved_local_item = $_smarty_tpl->tpl_vars['ag'];
?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="home/list_age/<?php echo $_smarty_tpl->tpl_vars['ag']->value->age_id;?>
"><?php echo $_smarty_tpl->tpl_vars['ag']->value->age_name;?>
</a></h4>
								</div>
							</div>
							<?php
$_smarty_tpl->tpl_vars['ag'] = $__foreach_ag_1_saved_local_item;
}
if ($__foreach_ag_1_saved_item) {
$_smarty_tpl->tpl_vars['ag'] = $__foreach_ag_1_saved_item;
}
?>
						</div><!--/ages-products-->
						<h2>Lọc</h2>
                                                <form action="home/loc" method="post">
                                                        <select class="form-control" name="cate">
                                                            <option name="cate" value="0">Loại đồ chơi</option>
                                                            <?php
$_from = $_smarty_tpl->tpl_vars['cates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_c_2_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_c_2_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
                                                                <option name="cate" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->cate_id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->cate_name;?>
</option>
                                                            <?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_2_saved_local_item;
}
if ($__foreach_c_2_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_c_2_saved_item;
}
?>
                                                        </select>
                                                        <select class="form-control" name="age">
                                                            <option name="age" value="0">Độ tuổi</option>
                                                            <?php
$_from = $_smarty_tpl->tpl_vars['ages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ag_3_saved_item = isset($_smarty_tpl->tpl_vars['ag']) ? $_smarty_tpl->tpl_vars['ag'] : false;
$_smarty_tpl->tpl_vars['ag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ag']->value) {
$_smarty_tpl->tpl_vars['ag']->_loop = true;
$__foreach_ag_3_saved_local_item = $_smarty_tpl->tpl_vars['ag'];
?>
                                                                <option name="age" value="<?php echo $_smarty_tpl->tpl_vars['ag']->value->age_id;?>
"><?php echo $_smarty_tpl->tpl_vars['ag']->value->age_name;?>
</option>
                                                            <?php
$_smarty_tpl->tpl_vars['ag'] = $__foreach_ag_3_saved_local_item;
}
if ($__foreach_ag_3_saved_item) {
$_smarty_tpl->tpl_vars['ag'] = $__foreach_ag_3_saved_item;
}
?>
                                                        </select>
                                                         <select class="form-control" name="age">
                                                            <option name="age" value="0">Giá</option>
                                                            <?php
$_from = $_smarty_tpl->tpl_vars['price']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_p_4_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_p_4_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
                                                                <option name="price" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value->price;?>
</option>
                                                            <?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_4_saved_local_item;
}
if ($__foreach_p_4_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_p_4_saved_item;
}
?>
                                                        </select>            
                                                        <button type="submit" class="btn btn-primary">Tìm </button>
						</form>
						<div class="shipping text-center"><!--shipping-->
							<img src="assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php
$_from = $_smarty_tpl->tpl_vars['rows_cate']->value;
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
										<a href="#" class="btn btn-default add-to-cart" href="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo $_smarty_tpl->tpl_vars['r']->value->price;?>
</h2>
										<p><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
</p>
										<a  class="btn btn-default add-to-cart" href="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
                                                                                
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
" class="view"><i class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
										\
									</ul>
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
                                                
					</div><!--features_items-->
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
					<p class="pull-left">Copyright © 2013 E-Shopper. All rights reserved.</p>
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
                data: 'id=' + $(that).attr('href'),
                success: function(resp){
                    alert("Thêm thành công");
                }
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
