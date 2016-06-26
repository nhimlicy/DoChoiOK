<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
        <base href={base_url()}>
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
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                <li><a href="order/home"><i class="fa fa-circle-o"></i> Order</a></li>
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
                
                <form method="post" action=""  enctype="multipart/form-data" >
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tên sản phẩm</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{$row->name}" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Giá</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" value="{$row->price}" name="price">
                    </div>
                    <div class="form-group">
                        
                        
                        <label for="exampleInputFile" >Ảnh</label>
                        <div id="photo-holder"><img src="../uploads/{$row->image}"></div>
                        <input type="hidden" name="image" id="hid_img"   />
                        <input type="file" id="exampleInputFile" name="userfile">
                        
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Loại sản phẩm</label><br/>
                      {foreach $cate_rows as $cate_row}
                          <input type="radio" name="cate_id" id="optionsRadios1" value="{$cate_row->cate_id}" {if $cate_row->cate_id eq $row->cate_id} checked {/if}>{$cate_row->cate_name}<br/>
                      {/foreach}
                      
                    </div>
                    
                      <div class="form-group">
                      <label>Người cung cấp</label>
                        <select class="form-control" name="seller_id">
                            {foreach $seller_rows as $seller_row}
                                <option name="seller_id" value="{$seller_row->seller_id}" {if $seller_row->seller_id eq $row->seller_id}selected{/if}>{$seller_row->seller_name}</option>
                            {/foreach}
                       </select>
                      </div>
                       <label>Độ tuổi</label>
                        <select class="form-control" name="age_id">
                            {foreach $ages_rows as $ages_row}
                                <option name="age_id" value="{$ages_row->age_id}" {if $ages_row->age_id eq $row->age_id}selected{/if}>{$ages_row->age_name}</option>
                            {/foreach}
                       </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Số lượng</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" value="{$row->number}" name="number">
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="edit">edit</button>
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

        
    <!-- jQuery 2.1.4 -->
    <script src="assets_admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="assets_admin/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets_admin/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets_admin/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="assets_admin/dist/js/demo.js"></script>
  </body>
</html>
<script>
    {literal}
            $(function() {
                $('input:radio[name="cate_id"]').filter('[value="{$row->cate_id}"]').attr('checked', true);
                
            });
            {/literal}
        </script>