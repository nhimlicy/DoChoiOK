<?php
/* Smarty version 3.1.29, created on 2016-06-15 01:43:52
  from "C:\xampp\htdocs\DoChoi\application_admin\views\products\home_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576096b8e92b05_15929729',
  'file_dependency' => 
  array (
    'bbddd1324629601820de8e0b2232728704226b91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DoChoi\\application_admin\\views\\products\\home_add.tpl',
      1 => 1465947700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576096b8e92b05_15929729 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
        <base href=<?php echo base_url();?>
>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets_admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="assets_admin/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets_admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="assets_admin/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="products/home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                
              </li>
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets_admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="assets_admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="assets_admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="treeview">
              <a href="">
                <i class="fa fa-edit"></i> <span>Thêm mới</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="products/home/add"><i class="fa fa-circle-o"></i> Sản phẩm mới</a></li>
                <li><a href="seller/home/add"><i class="fa fa-circle-o"></i>  Nhà cung cấp mới</a></li>
                <li><a href="buyer/home/add"><i class="fa fa-circle-o"></i>  Người mua mới</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Danh sách</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <li><a href="products/home"><i class="fa fa-circle-o"></i> Producs</a></li>
                <li><a href="seller/home"><i class="fa fa-circle-o"></i> Seller</a></li>
                <li><a href="buyer/home"><i class="fa fa-circle-o"></i> Buyer</a></li>
              </ul>
            </li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            General Form Elements
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Data</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                <form method="post"  enctype="multipart/form-data" >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tên sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Giá</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" value="" name="price">
                    </div>
                    <div class="form-group">
                        
                        
                        <label for="exampleInputFile" >Ảnh</label>
                        <div id="photo-holder"></div>
                        <input type="hidden" name="image" id="hid_img"   />
                        <input type="file" id="exampleInputFile" name="userfile">
                        
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Loại sản phẩm</label><br/>
                      <?php
$_from = $_smarty_tpl->tpl_vars['cate_rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cate_row_0_saved_item = isset($_smarty_tpl->tpl_vars['cate_row']) ? $_smarty_tpl->tpl_vars['cate_row'] : false;
$_smarty_tpl->tpl_vars['cate_row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cate_row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cate_row']->value) {
$_smarty_tpl->tpl_vars['cate_row']->_loop = true;
$__foreach_cate_row_0_saved_local_item = $_smarty_tpl->tpl_vars['cate_row'];
?>
                          <input type="radio" name="cate_id" id="optionsRadios1" value="<?php echo $_smarty_tpl->tpl_vars['cate_row']->value->cate_id;?>
" ><?php echo $_smarty_tpl->tpl_vars['cate_row']->value->cate_name;?>
<br/>
                      <?php
$_smarty_tpl->tpl_vars['cate_row'] = $__foreach_cate_row_0_saved_local_item;
}
if ($__foreach_cate_row_0_saved_item) {
$_smarty_tpl->tpl_vars['cate_row'] = $__foreach_cate_row_0_saved_item;
}
?>
                      
                    </div>
                    
                    <div class="form-group">
                        <label>Độ tuổi</label>
                        <select class="form-control" name="age_id">
                            <?php
$_from = $_smarty_tpl->tpl_vars['ages_rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ages_row_1_saved_item = isset($_smarty_tpl->tpl_vars['ages_row']) ? $_smarty_tpl->tpl_vars['ages_row'] : false;
$_smarty_tpl->tpl_vars['ages_row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ages_row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ages_row']->value) {
$_smarty_tpl->tpl_vars['ages_row']->_loop = true;
$__foreach_ages_row_1_saved_local_item = $_smarty_tpl->tpl_vars['ages_row'];
?>
                                <option name="age_id" value="<?php echo $_smarty_tpl->tpl_vars['ages_row']->value->age_id;?>
" ><?php echo $_smarty_tpl->tpl_vars['ages_row']->value->age_name;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['ages_row'] = $__foreach_ages_row_1_saved_local_item;
}
if ($__foreach_ages_row_1_saved_item) {
$_smarty_tpl->tpl_vars['ages_row'] = $__foreach_ages_row_1_saved_item;
}
?>
                         </select>
                    </div>
                    <div class="form-group">
                        <label>Người cung cấp</label>
                        <select class="form-control" name="seller_id">
                            <?php
$_from = $_smarty_tpl->tpl_vars['seller_rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_seller_row_2_saved_item = isset($_smarty_tpl->tpl_vars['seller_row']) ? $_smarty_tpl->tpl_vars['seller_row'] : false;
$_smarty_tpl->tpl_vars['seller_row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['seller_row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['seller_row']->value) {
$_smarty_tpl->tpl_vars['seller_row']->_loop = true;
$__foreach_seller_row_2_saved_local_item = $_smarty_tpl->tpl_vars['seller_row'];
?>
                                <option name="seller_id" value="<?php echo $_smarty_tpl->tpl_vars['seller_row']->value->seller_id;?>
" ><?php echo $_smarty_tpl->tpl_vars['seller_row']->value->seller_name;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['seller_row'] = $__foreach_seller_row_2_saved_local_item;
}
if ($__foreach_seller_row_2_saved_item) {
$_smarty_tpl->tpl_vars['seller_row'] = $__foreach_seller_row_2_saved_item;
}
?>
                         </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Số lượng</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="" name="number">
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="sub">Thêm</button>
                  </div>
                </form>
                    
              </div><!-- /.box -->

              
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <?php echo '<script'; ?>
 src="assets_admin/plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 3.3.5 -->
    <?php echo '<script'; ?>
 src="assets_admin/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- FastClick -->
    <?php echo '<script'; ?>
 src="assets_admin/plugins/fastclick/fastclick.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="assets_admin/dist/js/app.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE for demo purposes -->
    <?php echo '<script'; ?>
 src="assets_admin/dist/js/demo.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php echo '<script'; ?>
>
    
            $(function() {
                $('input:radio[name="cate_id"]').filter('[value="{$row->cate_id}"]').attr('checked', true);
                
            });
            
        <?php echo '</script'; ?>
><?php }
}
