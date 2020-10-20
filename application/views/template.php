<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Administrasi Surat</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>assets/icon/favicon.png"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome-4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/ionicons-2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <script src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
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
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ad.</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Adm Surat</b></span>
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
              <img style="width:50px;height:50px" src="<?php echo $user['foto'];?>" class="img-circle" alt="User Image">
            </div>
             <div class="pull-left info">
                <p><?php echo $user['nama'];?>
                 
                </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
             <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU ADMIN</li>
            <li>
              <?php echo anchor('dashboard','<i class="fa fa-home"></i> <span>Dashboard</span>'); ?>
            </li>

            <li>
              <?php echo anchor('profil','<i class="fa fa-user"></i> <span>Profil</span>'); ?>
            </li>

            <li>
              <?php echo anchor('surat_masuk','<i class="fa fa-edit"></i> <span>Surat Masuk</span>'); ?>
            </li>
            <li>
              <?php echo anchor('surat_keluar','<i class="fa fa-edit"></i> <span>Surat Keluar</span>'); ?>
            </li>
      <!--      
            <li>
              <?php echo anchor('kategori_surat','<i class="fa fa-list"></i> <span>Kategori Surat</span>'); ?>
            </li> -->


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i><span>Kategori</span>
                    <i class="fa fa-angle-double-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo anchor('kategori_surat','<i class="fa fa-circle"></i> <span>Kategori Surat</span>'); ?>
                    </li>
                </ul>
            </li>
<!--
        
           <li>
              <?php echo anchor('laporan','<i class="fa fa-files-o"></i> <span>Laporan</span>'); ?>
            </li> -->

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i><span>Laporan</span>
                    <i class="fa fa-angle-double-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo anchor('laporan','<i class="fa fa-circle"></i> <span>Surat Masuk</span>'); ?>
                    </li>
                    <li>
                        <?php echo anchor('laporan2','<i class="fa fa-circle"></i> <span>Surat Keluar</span>'); ?>
                    </li>
                </ul>
            </li> 
            
           <li>
              <?php echo anchor('karyawan','<i class="fa fa-sitemap"></i> <span>Karyawan</span>'); ?>
            </li>
            
            <?php if($user['role'] == 's'): ?>
            <li>
              <?php echo anchor('user','<i class="fa fa-users"></i> <span>User</span>'); ?>
            </li>
            <?php endif; ?>
            <li>
              <?php echo anchor('login/logout','<i class="fa fa-power-off"></i> <span>Logout</span>'); ?>
            </li>
          </ul>

          

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      


<?php
//include 'content.php';
echo $contents;
?>



      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy 2017 - Administrasi Persuratan - All Right Reserved
      </footer>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url()?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>