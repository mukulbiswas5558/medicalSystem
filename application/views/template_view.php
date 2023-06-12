<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/dist/img/web_logo.png">
  <title>MedicalSystem</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/introjs/introjs.min.css">

 

  
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/jQuery/jquery.cookie.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/jQueryUI/jquery-ui.min.js"></script>
  <!--script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script-->
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url(); ?>/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>/assets/plugins/fastclick/fastclick.js"></script>
 
  
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>/assets/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>
  <!-- page script -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/lightbox2/js/lightbox.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
  <script src="<?php echo base_url(); ?>assets/introjs/intro.min.js"></script>

  <script type="text/javascript">
  
  (function ($) {
      $.fn.serializeFormJSON = function () {

          var o = {};
          var a = this.serializeArray();
          $.each(a, function () {
              if (o[this.name]) {
                  if (!o[this.name].push) {
                      o[this.name] = [o[this.name]];
                  }
                  o[this.name].push(this.value || '');
              } else {
                  o[this.name] = this.value || '';
              }
          });
          return o;
      };
  })(jQuery);
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>details" class="logo myclass-logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo base_url();?>assets/dist/img/web_logo.png" style="width: 100px; height: 50px;"></span>
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><b>Admin</b>LTE</span> -->
      <span class="logo-lg"><img src="<?php echo base_url();?>assets/dist/img/web_logo.png" style="width: 100px; height:50px;"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>/assets/dist/img/no_photo.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('logged_in')['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>/assets/dist/img/no_photo.jpg" class="img-circle" alt="User Image">


             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>verifylogin/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar side-menu-bar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>/assets/dist/img/no_photo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info" style="padding-top: 15px;">
          <p><?php echo $this->session->userdata('logged_in')['username']; ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php if($this->session->userdata('logged_in')['acct_type'] == "admin") { ?>
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="<?php echo base_url(); ?>details/patientList">
            <i class="fa fa-tasks"></i> <span>Patient Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>details/doctorList">
            <i class="fa fa-tasks"></i> <span>Doctor Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url(); ?>details/appointmentList">
            <i class="fa fa-tasks"></i> <span>Appointment  Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
    
        
    
      </ul>
      <?php } else if ($this->session->userdata('logged_in')['acct_type'] == "doctor") { ?>
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="<?php echo base_url(); ?>details">
            <i class="fa fa-tv"></i> <span>Appointment</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="<?php echo base_url(); ?>details/doctorHistory">
            <i class="fa fa-tasks"></i> <span>History</span>
          </a>
        </li>
       
      </ul>
      <?php } else if ($this->session->userdata('logged_in')['acct_type'] == "patient") { ?>
        <ul class="sidebar-menu">
          <li class="treeview">
            <a href="<?php echo base_url(); ?>details/doctorList">
              <i class="fa fa-tv"></i> <span>Doctor Details</span>
            </a>
          </li>
          <li class="treeview">
            <a href="<?php echo base_url(); ?>details/bookingByPatient">
              <i class="fa fa-tasks"></i> <span>Appointment</span>
            </a>
          </li>
          <li class="treeview">
            <a href="<?php echo base_url(); ?>details/patientHistory">
              <i class="fa fa-tasks"></i> <span>History</span>
            </a>
          </li>
       
        </ul>
     
      <?php } else {} ?>
    </section>
    <!-- /.sidebar -->
  </aside>



