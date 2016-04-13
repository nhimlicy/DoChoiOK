<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:47:08
  from "C:\xampp\htdocs\freshfood\application\views\home_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf3e1c6768a8_30327158',
  'file_dependency' => 
  array (
    '3428954ed371acf22cb514edbc5fafc47fc35895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\freshfood\\application\\views\\home_index.tpl',
      1 => 1456422419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf3e1c6768a8_30327158 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
    <head>
        
        <base href=<?php echo base_url();?>
>
        <title>Fashion Mania A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
        <link href="assets_web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?php echo '<script'; ?>
 src="assets_web/js/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="assets_web/css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
        <!-- start menu -->
        <link href="assets_web/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
        <?php echo '<script'; ?>
 type="text/javascript" src="assets_web/js/memenu.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>$(document).ready(function () {
        $(".memenu").memenu();
    });<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets_web/js/simpleCart.min.js"><?php echo '</script'; ?>
>
        <!-- slide -->
        <?php echo '<script'; ?>
 src="assets_web/js/responsiveslides.min.js"><?php echo '</script'; ?>
>
        
        
            <?php echo '<script'; ?>
>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
           <?php echo '</script'; ?>
>
        
    </head>
    <body>
        <!--header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="col-sm-4 world">
                        <ul >
                            <li>
                                <select class="in-drop">
                                    <option>English</option>
                                    <option>Japanese</option>
                                    <option>French</option>
                                </select></li>
                            <li><select class="in-drop1">
                                    <option>Dollar</option>
                                    <option>Euro</option>
                                    <option>Yen</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 logo">
                        <a href="index.html"><img src="assets_web/images/logo.png" alt=""></a>	
                    </div>

                    <div class="col-sm-4 header-left">		
                        <p class="log"><a href="account.html"  >Login</a>
                            <span>or</span><a  href="account.html"  >Signup</a></p>
                        <div class="cart box_1">
                            <a href="index.php?action=check_out">
                                <h3> <div class="total">
                                        <span class="simpleCart_total"></span></div>
                                    <img src="assets_web/images/cart.png" alt=""/></h3>
                            </a>
                            <p><a href="index.php?action=check_out" class="simpleCart_empty">Empty Cart</a></p>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="container">
                <div class="head-top">
                    <div class="col-sm-2 number">
                        <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                    </div>
                    <div class="col-sm-8 h_menu4">
                        <ul class="memenu skyblue">
                            <li class=" grid"><a  href="index.html">Home</a></li>	
                            <li><a  href="#">Men</a>
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>All Clothing</h4>
                                                <ul>
                                                    <li><a href="products.html">Shirts</a></li>
                                                    <li><a href="products.html">Sports Wear</a></li>
                                                    <li><a href="products.html">Shorts</a></li>
                                                    <li><a href="products.html">Suits & Blazers</a></li>
                                                    <li><a href="products.html">Formal Shirts</a></li>
                                                    <li><a href="products.html">Sweatpants</a></li>
                                                    <li><a href="products.html">Swimwear</a></li>
                                                    <li><a href="products.html">Trousers & Chinos</a></li>
                                                    <li><a href="products.html">T-Shirts</a></li>
                                                    <li><a href="products.html">Underwear & Socks</a></li>

                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="products.html">Formal Shoes</a></li>
                                                    <li><a href="products.html">Boots</a></li>
                                                    <li><a href="products.html">Sports Shoes</a></li>
                                                    <li><a href="products.html">Casual Shoes</a></li>
                                                    <li><a href="products.html">Running Shoes</a></li>
                                                    <li><a href="products.html">Sneakers</a></li>
                                                    <li><a href="products.html">Loafers</a></li>
                                                    <li><a href="products.html">Slippers</a></li>
                                                    <li><a href="products.html">Sandals</a></li>
                                                    <li><a href="products.html">Flip-flops</a></li>

                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Popular Brands</h4>
                                                <ul>
                                                    <li><a href="products.html">Levis</a></li>
                                                    <li><a href="products.html">Persol</a></li>
                                                    <li><a href="products.html">Nike</a></li>
                                                    <li><a href="products.html">Edwin</a></li>
                                                    <li><a href="products.html">New Balance</a></li>
                                                    <li><a href="products.html">Jack & Jones</a></li>
                                                    <li><a href="products.html">Paul Smith</a></li>
                                                    <li><a href="products.html">Ray-Ban</a></li>
                                                    <li><a href="products.html">Wood Wood</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="grid"><a  href="#">	Women</a>
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>All Clothing</h4>
                                                <ul>
                                                    <li><a href="products.html">Shirts & Tops</a></li>
                                                    <li><a href="products.html">Sports Wear</a></li>
                                                    <li><a href="products.html">Kurtas & Kurties</a></li>
                                                    <li><a href="products.html">Suits & Blazers</a></li>
                                                    <li><a href="products.html">Sarees</a></li>
                                                    <li><a href="products.html">Sweatpants</a></li>
                                                    <li><a href="products.html">Swimwear</a></li>
                                                    <li><a href="products.html">Night-Suits</a></li>
                                                    <li><a href="products.html">T-Shirts</a></li>
                                                    <li><a href="products.html">Jeans</a></li>

                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Footwear</h4>
                                                <ul>
                                                    <li><a href="products.html">Heels</a></li>
                                                    <li><a href="products.html">Flats</a></li>
                                                    <li><a href="products.html">Sports Shoes</a></li>
                                                    <li><a href="products.html">Casual Shoes</a></li>
                                                    <li><a href="products.html">Running Shoes</a></li>
                                                    <li><a href="products.html">Wedges</a></li>
                                                    <li><a href="products.html">Boots</a></li>
                                                    <li><a href="products.html">Pumps</a></li>
                                                    <li><a href="products.html">Slippers</a></li>
                                                    <li><a href="products.html">Flip-flops</a></li>

                                                </ul>
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Popular Brands</h4>
                                                <ul>
                                                    <li><a href="products.html">Levis</a></li>
                                                    <li><a href="products.html">Persol</a></li>
                                                    <li><a href="products.html">Nike</a></li>
                                                    <li><a href="products.html">Edwin</a></li>
                                                    <li><a href="products.html">New Balance</a></li>
                                                    <li><a href="products.html">Jack & Jones</a></li>
                                                    <li><a href="products.html">Paul Smith</a></li>
                                                    <li><a href="products.html">Ray-Ban</a></li>
                                                    <li><a href="products.html">Wood Wood</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a  href="typo.html">Blog</a></li>				
                            <li><a class="color6" href="contact.html">Conact</a></li>
                        </ul> 
                    </div>
                    <div class="col-sm-2 search">		
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
                    </div>
                    <div class="clearfix"> </div>
                    <!---pop-up-box---->
                    <?php echo '<script'; ?>
 type="text/javascript" src="assets_web/js/modernizr.custom.min.js"><?php echo '</script'; ?>
>    
                    <link href="assets_web/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <?php echo '<script'; ?>
 src="assets_web/js/jquery.magnific-popup.js" type="text/javascript"><?php echo '</script'; ?>
>
                    <!---//pop-up-box---->
                    <div id="small-dialog" class="mfp-hide">
                        <div class="search-top">
                            <div class="login">
                                <input type="submit" value="">
                                <input type="text" value="Type something..." 
                                                               >		
                            </div>
                            <p>	Shopping</p>
                        </div>				
                    </div>
                    
                    <?php echo '<script'; ?>
>
                        $(document).ready(function () {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });

                        });
                    <?php echo '</script'; ?>
>	
                    
                    <!---->		
                </div>
            </div>
        </div>
        <!--banner-->
        <div class="banner">
            <div class="col-sm-3 banner-mat">
                <img class="img-responsive"	src="assets_web/images/ba1.jpg" alt="">
            </div>
            <div class="col-sm-6 matter-banner">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <img src="assets_web/images/1.jpg" alt="">
                            </li>
                            <li>
                                <img src="assets_web/images/2.jpg" alt="">   
                            </li>
                            <li>
                                <img src="assets_web/images/1.jpg" alt="">
                            </li>	
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 banner-mat">
                <img class="img-responsive" src="assets_web/images/ba.jpg" alt="">
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--//banner-->
        <!--content-->
        <div class="content">
            <div class="container">
                <div class="content-top">
                    <h1>Recent Products</h1>
                    <div class="content-top1">
                        <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                        
                        <div class="col-md-3 col-md2">
                            <div class="col-md1 simpleCart_shelfItem">
                                <a href="single.html">
                                    <img class="img-responsive" src="assets_web/images/im.jpg" alt="" />
                                </a>
                                
                                <div class="price">
                                    <h5 class="item_price"><?php echo $_smarty_tpl->tpl_vars['row']->value->price;?>
</h5>
                                    <a href="#" rel="" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                                    <h3><a href="single.html"><?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
</a></h3>
                        </div>	
                        
                        <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
                        <div class="clearfix"> </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!--//content-->
        <!--footer-->
        <div class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="col-md-8 top-footer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207516!2d2.3470599!3d48.85885894999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1436340519910" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-md-4 top-footer1">
                        <h2>Newsletter</h2>
                        <form>
                            <input type="text" value="" >
                            <input type="submit" value="SUBSCRIBE">
                        </form>
                    </div>
                    <div class="clearfix"> </div>	
                </div>	
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="col-sm-3 footer-bottom-cate">
                        <h6>Categories</h6>
                        <ul>
                            <li><a href="#">Curabitur sapien</a></li>
                            <li><a href="#">Dignissim purus</a></li>
                            <li><a href="#">Tempus pretium</a></li>
                            <li><a href="#">Dignissim neque</a></li>
                            <li><a href="#">Ornared id aliquet</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-3 footer-bottom-cate">
                        <h6>Feature Projects</h6>
                        <ul>
                            <li><a href="#">Curabitur sapien</a></li>
                            <li><a href="#">Dignissim purus</a></li>
                            <li><a href="#">Tempus pretium</a></li>
                            <li><a href="#">Dignissim neque</a></li>
                            <li><a href="#">Ornared id aliquet</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-3 footer-bottom-cate">
                        <h6>Top Brands</h6>
                        <ul>
                            <li><a href="#">Curabitur sapien</a></li>
                            <li><a href="#">Dignissim purus</a></li>
                            <li><a href="#">Tempus pretium</a></li>
                            <li><a href="#">Dignissim neque</a></li>
                            <li><a href="#">Ornared id aliquet</a></li>
                            <li><a href="#">Ultrices id du</a></li>
                            <li><a href="#">Commodo sit</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-3 footer-bottom-cate cate-bottom">
                        <h6>Our Address</h6>
                        <ul>
                            <li>Aliquam metus  dui. </li>
                            <li>orci, ornareidquet</li>
                            <li> ut,DUI.</li>
                            <li>nisi, dignissim</li>
                            <li>gravida at.</li>
                            <li class="phone">PH : 6985792466</li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                    <p class="footer-class"> � 2015 Fashion Mania. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
            </div>
        </div>

        <!--//footer-->
    </body>
</html>


    <?php echo '<script'; ?>
>
        $(function(){
            $(".item_add").click(function(e){
                e.preventDefault();
                var that = this;
                $.ajax({
                    url: $(that).attr('href'),
                    data: 'id=' + $(that).attr('rel'),
                    success: function(resp){
                        alert(resp);
                    }
                })
            })
        })
    <?php echo '</script'; ?>
>

<?php }
}
