<?php
/* Smarty version 3.1.29, created on 2016-06-15 08:58:43
  from "C:\xampp\htdocs\DoChoi\application_website\views\checkout\checkout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5760fca3659072_92224567',
  'file_dependency' => 
  array (
    '17c12df4762f8770eb8cd4549769454d7f314432' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DoChoi\\application_website\\views\\checkout\\checkout.tpl',
      1 => 1465973919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5760fca3659072_92224567 ($_smarty_tpl) {
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
                                                                <li ><a href="account/log_out" id="logout"><i class="fa fa-lock" ></i>Đăng xuất</a></li>
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
								<li><a href="account" class="active"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="step-one">
				<h2 class="heading">Step1</h2>
			</div>
                        <?php if (count($_smarty_tpl->tpl_vars['infor']->value) == 0) {?>
			<div class="checkout-options">
                            <div class="login-form" style="width: 30%;"><!--login form-->
						<h2>Login to your account</h2>
                                                <form action="account/sign_in" method="post">
							
							<input type="email" placeholder="Email Address" name="email"/>
                                                        <input type="password" placeholder="PassWord" name="pass" />
                                                      
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
			</div><!--/checkout-options-->
                        <?php }?>
			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
                                                        <?php if (count($_smarty_tpl->tpl_vars['infor']->value) != 0) {?>
							<div class="form-one">
                                                            <table  style="font-size: 20px;">
                                                                <tr>
                                                                    <td>Họ tên</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['infor']->value->full_name;?>
</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['infor']->value->buyer_email;?>
</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Số điện thoại:  </td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['infor']->value->buyer_telephone;?>
</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Địa chỉ</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['infor']->value->buyer_address;?>
</td>
                                                                </tr>
                                                            </table>
								
                                                                  
                                                                       
								
							</div>
							
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
                                                    <form action="checkout/order_acc" method="post" >
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="10"></textarea>
							<label><h2 class="heading"> Tổng tiền hóa đơn: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</h2></label>
                                                        <input type="hidden" class="btn btn-primary" name="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
"/>
                                                        <button type="submit" class="btn btn-primary">Thanh toán</button>
                                                    </form>
						</div>	
					</div>	
                                        
                                        <?php } else { ?>
                                            
                                                         <div class="form-one">
                                                             <form action="checkout/order" method="post">
									
                                                                        <input type="text" placeholder="Fullname*" name="full_name"/>
                                                                        <input type="text" placeholder="Email*" name="buyer_email">
									<input type="text" placeholder="Address" name="buyer_address">
                                                                        <input type="text" placeholder="Telephone" name="buyer_telephone"/>
                                                                        <textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                                                                        <label><h2 class="heading"> Tổng tiền hóa đơn: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</h2></label>
                                                                        <input type="hidden" class="btn btn-primary" name="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
"/>
                                                                        <br/>
                                                                        <button type="submit" class="btn btn-primary">Thanh toán</button>
								</form>
							</div>
							
						</div>
					</div>
					
                                                        
                                        
                               <?php }?>   
				</div>
                                
			</div>
                                                                
			<div class="review-payment">
                            <h2>Nếu muốn thay đổi sản phẩm <a href="checkout/cart" >CART</a></h2>
			</div>
                        
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
                                    <?php if (count($_smarty_tpl->tpl_vars['rows']->value) != 0) {?>
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
                                                        
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
                                                
						<tr>
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
"><?php echo $_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['r']->value->id];?>
</p>
                                                        </td>
							
							<td class="cart_total">
								<p class="cart_total_price cart_total_price_<?php echo $_smarty_tpl->tpl_vars['r']->value->id;?>
 "><?php echo $_smarty_tpl->tpl_vars['cart']->value[$_smarty_tpl->tpl_vars['r']->value->id]*$_smarty_tpl->tpl_vars['r']->value->price;?>
</p>
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
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>0</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	

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
        
           $(".cart_quantity_down").show();
            $.ajax({
                url: "checkout/to_up",
                data: 'id=' + $(that).attr('href'),
                
            })
            
        })
        
        
        $(".btn-primary").click(function(e){
            e.preventDefault();
            
            $.ajax({
                url: "checkout/order",
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
