<?php 
session_start();
if($_GET['ssid']!='') {
  $_SESSION['ssid'] = $_GET['ssid'];
}
if(!isset($_SESSION['ssid'])) {
  echo "<script>window.location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>RT-PCR VIEW</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link href="assetsnew/images/logo.png" rel="icon" type="image/png" sizes="16x16">

  <!-- Fonts and icons -->
  <script src="assetsnew/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assetsnew/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assetsnew/css/bootstrap.min.css">
  <link rel="stylesheet" href="assetsnew/css/atlantis2.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assetsnew/css/demo.css">
  <style>
      .dataTables_wrapper .row:nth-child(1) {
        background: linear-gradient(-45deg, #06418E, #1572E8) !important;
        padding:1%;
        
      }
      .dataTables_filter label, .dataTables_length label {
        color:#FFFFFF !important;
      }
    .table td, .table th {
        border-top-width: 1px;
      }
    @media (max-width: 1024px) {
      .table .thead tr td, .table tr td {
        font-size:12px;
      }
    }
  </style>
</head>
<body>
  <div class="wrapper horizontal-layout-3 fullwidth-style bg-primary-gradient bubble-shadow">
    
    <div class="main-header bg-secondary-gradient">
      <div class="nav-top">
        <div class="container d-flex flex-row">
          <button class="navbar-toggler sidenav-toggler2 ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <i class="icon-menu"></i>
            </span>
          </button>
          <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
          <!-- Logo Header -->
          <a href="" class="logo logo-fixed d-flex align-items-center"><h3 class="text-light"><i class='fa fa-home'></i> MIHMCI PORTALS</h3></a>
          <!-- End Logo Header -->

          <!-- Navbar Header -->
          <nav class="navbar navbar-header navbar-expand-lg p-0">
            <div class="container-fluid p-0">
              <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret">
                  <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                      <img src="assetsnew/images/logo.png" alt="..." class="avatar-img rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg"><img src="assetsnew/images/logo.png" alt="image profile" class="avatar-img rounded"></div>
                          <div class="u-text">
                            <h4>Admin</h4>
                            <p class="text-muted">admin@mihmci-portals.com</p><a href="" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">My Profile</a>
                        <a class="dropdown-item disabled" href="#">Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item disabled" href="#">Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <div class="pt-lg-2">
      <div class="container text-white pt-lg-2">
        
      </div>
    </div>

    <div class="main-panel">
      <div class="container">
        <div class="d-flex align-items-center">
            <div class="mr-3">
              <h1 class="mb-3 text-white">RT-PCR Online Schedule</h1>
            </div>
            <div class="ml-auto">
              <a href="logout.php" class="btn btn-secondary"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
          </div>
        <div class="page-inner page-inner-tab-style">
          <div class="page-header">
              <h2 class="text-dark"> 
               <?php 
               $datenow = date('F d, Y');
               $ndchange =  date('F d, Y', strtotime($datenow)); 
               echo $datenow;
               
               ?></h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php 
                 include('config.php');
                 $sql = mysqli_query($con,"SELECT * FROM tb_rtpcr WHERE rt_datesched") or die(mysqli_error($con));
                 $count = mysqli_num_rows($sql);
              ?>
              <div class="card">
                <div class="card-header">
                  <div class="card-head-row">
                    <div class="card-title">Total Count: <?php echo $count;?></div>
                  </div>
                </div>
                <div class="card-body">
                 <?php
                           $dnow = date('Y-m-d');
                  $sqlcodecheck = mysqli_query($con,"SELECT * FROM tb_rtpcr  WHERE rt_datesched>='$dnow'   ");
                  $counter = mysqli_num_rows($sqlcodecheck);
                  #$namecode=$_POST['namecode'];
                 #$from = $_POST['dfrom'];
                  #$to = $_POST['dto'];
                  $datenow = date('Y-m-d');
                                
                            echo "<table class='table table-bordered'  id='basic-datatables'>";
                            echo "<thead>";
                            echo "<tr>
                               <td>Name</td>
                               <td>Age</td>
                               <td>Address</td>
                               <td>Status</td> 
                               <td>Appointment Date</td>
                               <td>Action</td>
                               </tr>";
                            echo "</thead>";   
                       
                                
                                while($row = mysqli_fetch_array($sqlcodecheck)){
                                  $fname = strtoupper($row['rt_fname']);
                                  $mname = strtoupper($row['rt_mname']);
                                  $lname = strtoupper($row['rt_lname']);
                                  $rt_suffix = strtoupper($row['rt_suffix']);
                                  $bdate = strtoupper($row['rt_bday']);
                                  $astatus = strtoupper($row['rt_status']);

                                  $rt_ccode = $row['rt_ccode'];
                                  $gender = strtoupper($row['rt_gender']);
                                  $contact=strtoupper($row['rt_contact']);
                                  $email=strtoupper($row['rt_email']);
                                  $cstatus=strtoupper($row['rt_cstatus']);
                                  $occup=strtoupper($row['rt_occup']);
                                   
                                  $nationality=strtoupper($row['rt_nationality']);
                                  $datesched=strtoupper($row['rt_datesched']);

                                  $addhousenum=strtoupper($row['rt_addhousenum']);
                                  $addbrgy=strtoupper($row['rt_addbrgy']);
                                  $city=strtoupper($row['rt_city']);
                                  $province=strtoupper($row['rt_province']);
                                  $region=strtoupper($row['rt_region']);
                                  $homephone=strtoupper($row['rt_homephone']);
                                    
                                  #echo "VVVVVV $addhousenum";
                                    
                                  $newdates =  date('F d, Y', strtotime($datesched)); 

                                
                             
                                  
                           #    $regrtpax = mysqli_query($con, "INSERT INTO `tb_rtpcrnewcifonline` (`rt_primaryai`, `rt_lname`, `rt_fname`, `rt_mname`, `rt_suffix`, `rt_bdate`, `rt_gender`, `rt_cstatus`, `rt_occupation`, `rt_nationality`, `rt_phicnumber`, `rt_curaddhousenum`, `rt_curstreet`, `rt_curbarangay`, `rt_curcity`, `rt_curprovince`, `rt_curhomephone`, `rt_curcontactnumber`, `rt_curemail`, `rt_peraddhousenum`, `rt_perstreet`, `rt_perbarangay`, `rt_percity`, `rt_perprovince`, `rt_perhomephone`, `rt_percontactnumber`, `rt_peremail`, `rt_wpaddhousenum`, `rt_wpstreet`, `rt_wpbarangay`, `rt_wpcity`, `rt_wpprovince`, `rt_wphomephone`, `rt_wpcontactnumber`, `rt_wpemail`, `rt_code`, `rt_datesched`) VALUES (NULL, '$lname', '$fname', '$mname', '$suffix', '$bdate', '$gender', '$cstatus', '$occup', '$nationality', '$phicnumber', '$addhousenum', '$curstreet', '$addbrgy', '$city', '$province', '$homephone', '$contact', '$email', '$peraddhousenum', '$perstreet','$perbarangay', '$percity', '$perprovince', '$perhomephone', '$percontactnumber', '$peremail', '$wpaddhousenum' , '$wpstreet' , '$wpbarangay' , '$wpcity' , '$wpprovince' , '$wphomephone' , '$wpcontactnumber' , '$wpemail', '$rt_ccode', '$datesched');" );
                                }
                                echo "</table>";
                          
                    ?>
                  </div></div>
              </div>
            </div>
          </div><!-- end row -->
      </div>
      <footer class="footer border-0 bg-transparent">
      <div class="container-fluid">
        <div class="copyright text-white ml-auto">Copyright © 2020 | HIS Department</div>        
      </div>
    </footer>
    </div><!-- end main panel -->
    
  </div> <!-- end wrapper -->
  <!--   Core JS Files   -->
  <script src="assetsnew/js/core/jquery.3.2.1.min.js"></script>
  <script src="assetsnew/js/core/popper.min.js"></script>
  <script src="assetsnew/js/core/bootstrap.min.js"></script>

  <!-- jQuery UI -->
  <script src="assetsnew/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="assetsnew/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assetsnew/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Moment JS -->
  <script src="assetsnew/js/plugin/moment/moment.min.js"></script>

  <!-- Chart JS -->
  <script src="assetsnew/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="assetsnew/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="assetsnew/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="assetsnew/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="assetsnew/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- Bootstrap Toggle -->
  <script src="assetsnew/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="assetsnew/js/plugin/jqvmap/jquery.vmap.min.js"></script>
  <script src="assetsnew/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

  <!-- Google Maps Plugin -->
  <script src="assetsnew/js/plugin/gmaps/gmaps.js"></script>

  <!-- Dropzone -->
  <script src="assetsnew/js/plugin/dropzone/dropzone.min.js"></script>

  <!-- Fullcalendar -->
  <script src="assetsnew/js/plugin/fullcalendar/fullcalendar.min.js"></script>

  <!-- DateTimePicker -->
  <script src="assetsnew/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

  <!-- Bootstrap Tagsinput -->
  <script src="assetsnew/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

  <!-- Bootstrap Wizard -->
  <script src="assetsnew/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

  <!-- jQuery Validation -->
  <script src="assetsnew/js/plugin/jquery.validate/jquery.validate.min.js"></script>

  <!-- Summernote -->
  <script src="assetsnew/js/plugin/summernote/summernote-bs4.min.js"></script>

  <!-- Select2 -->
  <script src="assetsnew/js/plugin/select2/select2.full.min.js"></script>

  <!-- Sweet Alert -->
  <script src="assetsnew/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Atlantis JS -->
  <script src="assetsnew/js/atlantis2.min.js"></script>
<script>
$(document).ready(function() {
  $('#basic-datatables').DataTable(); 
});
</script>
</body>
</html>