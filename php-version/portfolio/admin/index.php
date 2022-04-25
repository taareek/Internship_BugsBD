<?php
  require("../config/constants.php");
  //
  if(!isset( $_SESSION['isUserLoggedIn'])){
    echo "<script>window.location.href='login.php';</script>";
  }

  $query = "SELECT * FROM home";
  $result = mysqli_query($db, $query);
  $home_data = mysqli_fetch_array($result);
  //echo $home_data['name'];
  //print_r($user_data);
  $query_2 = "SELECT * FROM about";
  $result_2 = mysqli_query($db, $query_2);
  $about_data = mysqli_fetch_array($result_2);

  $query_4 = "SELECT * FROM work_experience";
  $result_4 = mysqli_query($db, $query_4);
  $experience_dt = mysqli_fetch_array($result_4);

  $query_5 = "SELECT *FROM contact_info";
  $result_5 = mysqli_query($db, $query_5);
  $contact_info = mysqli_fetch_array($result_5);

  $query_6 = "SELECT * FROM section_contro";
  $result_6 = mysqli_query($db, $query_6);
  $section_control_info = mysqli_fetch_array($result_6);

  $query_7 = "SELECT * FROM service";
  $result_7 = mysqli_query($db, $query_7);
  $service_info = mysqli_fetch_array($result_7);
  //print_r($service_info[1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       
    </ul>

    <!-- SEARCH FORM -->
     

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
       
      <!-- Notifications Dropdown Menu -->
       
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li>
        <a class="nav-link"  href= "../config/logout.php" role= "button">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Tarek Aziz</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Section Control
              </p>
            </a>
            
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?homesetting=true" class="nav-link ">
              <i class="fa fa-cog" area-hidden="true"></i>
              <p>
                Home Setting
              </p>
            </a>
            
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?aboutsetting=true" class="nav-link ">
              <i class="fa fa-cog" area-hidden="true"></i>
              <p>
                About Us Setting
              </p>
            </a>
            
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?servicesetting=true" class="nav-link ">
              <i class="fa fa-cog" area-hidden="true"></i>
              <p>
                Service Setting
              </p>
            </a>
            
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?portfoliosetting=true" class="nav-link ">
              <i class="fa fa-cog" area-hidden="true"></i>
              <p>
                Portfolio Setting
              </p>
            </a>
            
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?contactsetting=true" class="nav-link ">
              <i class="fa fa-cog" area-hidden="true"></i>
              <p>
                Contact Setting
              </p>
            </a>
            
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?accountsetting=true" class="nav-link ">
              <i class="fa fa-cog" area-hidden="true"></i>
              <p>
                Account Setting
              </p>
            </a>
            
          </li>
          <li class="nav-item menu-open">
            <a href="index.php?backgroundsetting=true" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Change Background
              </p>
            </a>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Site</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
         
        <!-- /.row -->
        <!-- Main row --> <!--../config/admin.php-->
        <div class="row">
          <?php
          if(isset($_GET['homesetting'])){ ?>
            <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update Home</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php ?>
              <img src="../images/<?php echo $home_data['profile_pic'] ?> " alt="" style="height:150px; width:150px;">
              <form action="../config/admin.php" method= "post" enctype= "multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your Name</label>
                    <input type="text" class="form-control" name="name" value= "<?php  echo $home_data['profile_name'] ?>" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Your title</label>
                    <input type="text" class="form-control" name="title" value= "<?php  echo $home_data['profile_title'] ?>" id="exampleInputPassword1" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Profile Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name= "pro_pic" class="custom-file-input"  id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-home" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>

        <?php
          }else if(isset($_GET['aboutsetting'])){ ?>
          <div class="card card-primary col-lg-12">
              <div class="card-header">
                <h3 class="card-title">Update About</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="../config/admin.php" method= "post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" class="form-control" name="about_title" value= "<?php  echo $about_data['title'] ?>" id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Your First Description</label> <br>
                    <textarea name="desc_1" id="" cols="80" rows="7" placeholder="Your first description..."><?php  echo $about_data['description_1'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Your Second Description</label> <br>
                    <textarea name="desc_2"  id="" cols="80" rows="7" placeholder="Your second description..."><?php  echo $about_data['description_2'] ?></textarea>
                  </div> 
                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update-about" class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
            <!-- Upading Sections  -->
          <?php
          }else if(isset($_GET['servicesetting'])){ ?>
          <!-- Getting Service Data -->
          <?php 
                //print_r($service_info);
                // first row
                $qs_1 = "SELECT * FROM service WHERE id=1";
                $rslt_1 = mysqli_query($db, $qs_1);
                $service_data_1 = mysqli_fetch_array($rslt_1); 
                print_r($service_data_1);
                
                // second row
                $qs_2 = "SELECT * FROM service WHERE id=2";
                $rslt_2 = mysqli_query($db, $qs_2);
                $service_data_2 = mysqli_fetch_array($rslt_2); 
                print_r($service_data_2);

                // third row
                $qs_3 = "SELECT * FROM service WHERE id=3";
                $rslt_3 = mysqli_query($db, $qs_3);
                $service_data_3 = mysqli_fetch_array($rslt_3); 
                print_r($service_data_2);

                // fourth row
                $qs_4 = "SELECT * FROM service WHERE id=4";
                $rslt_4 = mysqli_query($db, $qs_4);
                $service_data_4 = mysqli_fetch_array($rslt_4); 
                print_r($service_data_4);
                ?>
                <!-- First service section -->

          <?php
          }else {

          
          ?>
          <form method= "post" action="../config/admin.php"> 
          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" name= "home" class="custom-control-input" id="customSwitch1"
            <?php
              if($section_control_info['home_section']){
                echo "checked";
              }
            ?>
            >
            
            <label class="custom-control-label"  for="customSwitch1">Home</label>
          </div>
          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" name= "about" class="custom-control-input"  id="customSwitch2"
            <?php
              if($section_control_info['about_section']){
                echo "checked";
              }
            ?>
            >
            <label class="custom-control-label"  for="customSwitch2">About Us</label>
          </div>
          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" name= "service" class="custom-control-input"  id="customSwitch3"
            <?php
              if($section_control_info['service_section']){
                echo "checked";
              }
            ?>
            >
            <label class="custom-control-label"  for="customSwitch3">Service</label>
          </div>
          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" name= "portfolio" class="custom-control-input"  id="customSwitch4"
            <?php
              if($section_control_info['portfolio_section']){
                echo "checked";
              }
            ?>
            >
            <label class="custom-control-label"  for="customSwitch4">Portfolio</label>
          </div>
          <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" name= "contact" class="custom-control-input"  id="customSwitch5"
            <?php
              if($section_control_info['contact_section']){
                echo "checked";
              }
            ?>
            >
            <label class="custom-control-label"  for="customSwitch5">Contact</label>
          </div>
          <input type="submit" class="btn-primary" name= "update-section" value="Save changes">
          </form>
          <?php
          }
          ?>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Tarek Aziz</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
