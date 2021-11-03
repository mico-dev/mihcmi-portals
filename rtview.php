<?php 
session_start();
error_reporting(0);
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
               $datenoworig = date('Y-m-d');
               $ndchange =  date('F d, Y', strtotime($datenow)); 
               echo $datenow;
               
               ?></h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php 
                 include('config.php');
                 $sql = $con->query("SELECT rt_primaryai FROM tb_rtpcrnewcifonline") or die(mysqli_error($con));
                 $count = $sql->num_rows;
              ?>
              <div class="card shadow-lg">
                <div class="card-header">
                  <div class="card-head-row">
                    <div class="card-title">Total Count: <?php echo $count;?></div>
                  </div>
                </div>
                <div class="card-body">
                  <form action="" method="POST" class="mb-3">
                    <div class="row align-items-end">
                      <div class="col-lg-6"> 
                          <p class="mb-0">Search by Name (eg Lastname, Firstname or Middlename):</p>
                          <input class="form-control" type="text" name="search" required autofocus> 
                      </div> 
                      <div class="col-lg-3">
                        <div>
                            <input type="submit" name="submit" class="btn btn-success btn-block" value="SEARCH">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div>
                            <a href="" class="btn btn-secondary btn-block">RESET</a> 
                        </div>
                      </div>
                    </div>
                  </form>
                 <?php
                  if(isset($_POST['submit'])) {
                    $search = trim($_POST['search']);
                    $sql = $con->query("SELECT * FROM tb_rtpcrnewcifonline WHERE rt_lname LIKE '%$search%' OR rt_fname LIKE '%$search%' OR rt_mname LIKE '%$search%'");

                    if($sql->num_rows>0) {
                      echo "<div class='col-12'><p class='mb-0'>$sql->num_rows Result for $search</p></div>";
                    } else{
                      echo "<div class='col-12'><p class='mb-0'>$sql->num_rows Result for $search</p></div>";
                    }
                  }else{
                    $sql = $con->query("SELECT * FROM tb_rtpcrnewcifonline ORDER BY rt_primaryai DESC LIMIT 30");
                    ;
                  }
                  
                                
                            echo "<table class='table table-bordered'>";
                            echo "<thead>";
                            echo "<tr>
                                    <td class='w-100'>Name</td> 
                                    <td class='w-100'>Address</td> 
                                    <td>Appointment Date</td>
                                    <td>Edit</td>
                                    <td>Action</td>
                                    <td>Print</td>
                                  </tr>";
                            echo "</thead>";   
                           
                                
                                while($row = mysqli_fetch_array($sql)){
                                  $id = $row['rt_primaryai'];
                                  $fname = $row['rt_fname'];
                                  $mname = $row['rt_mname'];
                                  $lname = $row['rt_lname'];
                                  $rt_suffix = $row['rt_suffix'];
                                  $bdate = $row['rt_bdate'];
                                  $astatus = $row['rt_status'];

                                  $rt_ccode = $row['rt_ccode'];
                                  $gender = $row['rt_gender'];
                                  $contact=$row['rt_contact'];
                                  $email=$row['rt_email'];
                                  $cstatus=$row['rt_cstatus'];
                                  $occup=$row['rt_occupation'];
                                  $lsi=$row['rt_lsi'];
                                  $repatriate=$row['rt_repatriate'];
                                  $apor=$row['rt_apor'];
                                  $purpose=$row['rt_purpose'];
                                  $hf=$row['rt_hf'];
                                  $qf=$row['rt_qf'];
                                  $hq=$row['rt_hq'];
                                  $qfname=$row['rt_qfname'];
                                  $qfaddress=$row['rt_qfaddress'];
                                  $nationality=$row['rt_nationality'];
                                  $datesched=$row['rt_datesched'];

                                  $addhousenum=$row['rt_addhousenum'];
                                  $addbrgy=$row['rt_addbrgy'];
                                  $city=$row['rt_city'];
                                  $province=$row['rt_province'];
                                  $region=$row['rt_region'];
                                  $homephone=$row['rt_homephone'];
                                  #echo "VVVVVV $addhousenum";
                                  $newdates =  date('F d, Y', strtotime($datesched)); 
$curaddhousenum=$row['rt_curaddhousenum'];
$curstreet=$row['rt_curstreet'];
$curbarangay=$row['rt_curbarangay'];
$curcity=$row['rt_curcity'];
$curprovince=$row['rt_curprovince']; 
$curhomephone=$row['rt_curhomephone'];
$curcontactnumber=$row['rt_curcontactnumber'];
$curemail=$row['rt_curemail'];

$peraddhousenum=$row['rt_peraddhousenum'];
$perstreet=$row['rt_perstreet'];
$perbarangay=$row['rt_perbarangay'];
$percity=$row['rt_percity'];
$perprovince=$row['rt_perprovince'];
$perregion=$row['rt_perregion'];
$perhomephone=$row['rt_perhomephone'];
$percontactnumber=$row['rt_percontactnumber'];
$peremail=$row['rt_peremail'];
                                    
$wpaddhousenum=$row['rt_wpaddhousenum'];
$wpstreet=$row['rt_wpstreet'];
$wpbarangay=$row['rt_wpbarangay'];
$wpcity=$row['rt_wpcity'];
$wpprovince=$row['rt_wpprovince'];
$wpregion=$row['rt_wpregion'];
$wphomephone=$row['rt_wphomephone'];
$wpcontactnumber=$row['rt_wpcontactnumber'];
$wpemail=$row['rt_wpemail'];
                                  $bdaynew = date('Y-m-d',strtotime($bdate));
                              
                                 echo "</tr>";
                                echo "<td>";
                                echo str_replace('ñ', 'Ñ', $lname).", ". $fname." ".str_replace('ñ', 'Ñ', $mname);
                                echo "</td> ";
                                  
                                echo "<td>";
                                echo " $curcity $curprovince";
                                echo "</td> ";
                              
                                    echo "<td>";
                                echo "$newdates";
                                echo "</td> ";
                                   
                                     echo "<td>";
 echo "<a href='rtapp-profile.php?rtid=$id' target='_blank' class='btn btn-warning'><p class='text-center mb-0' style='font-size:12px;color:#fff;'> <i class='fa fa-edit'></i> Edit</p></a>";
                               echo "</td> ";
                                    echo "<td>";
 echo "<a href='http://10.100.22.50/mihmci/system/v9rtpcr.regnew.php? f=$fname&m=$mname&l=$lname&bd=$bdaynew&s=$rt_suffix&gen=$gender&cstatus=$cstatus&natio=$nationality&occu=$occup&curh=$curaddhousenum&curs=$curstreet&curb=$curbarangay&curc=$curcity&curp=$curprovince&curhp=$curhomephone&curcp=$curcontactnumber&curem=$curemail&purh=$peraddhousenum&purs=$perstreet&purb=$perbarangay&purc=$percity&purp=$perprovince&purhp=$perhomephone&purcp=$percontactnumber&purem=$peremail&wpurh=$wpaddhousenum&wpurs=$wpstreet&wpurb=$wpbarangay&wpurc=$wpcity&wpurp=$wpprovince&wpurhp=$wphomephone&wpurcp=$wpcontactnumber&wpurem=$wpemail' target='_blank' class='btn btn-success'><p class='text-center mb-0' style='font-size:12px;color:#fff;'><i class='fa fa-link'></i> Send to Local</p></a>";
                               echo "</td> ";
                                     echo "<td>";
 echo "<a href='cifprint.php?rtid=$id' target='_blank' class='btn btn-primary'><p class='text-center mb-0' style='font-size:12px;color:#fff;'><i class='fa fa-print'></i> Print CIF</p></a>";
                               echo "</td> ";
                                echo "</tr>";
                                  }
                                echo "</table>";
                          
                    ?>
                </div>
                </div>
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
  <!-- <script src="assetsnew/js/plugin/moment/moment.min.js"></script> -->

  <!-- Chart JS -->
  <!-- <script src="assetsnew/js/plugin/chart.js/chart.min.js"></script> -->

  <!-- jQuery Sparkline -->
  <!-- <script src="assetsnew/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script> -->

  <!-- Chart Circle -->
  <!-- <script src="assetsnew/js/plugin/chart-circle/circles.min.js"></script> -->

  <!-- Datatables -->
  <!-- <script src="assetsnew/js/plugin/datatables/datatables.min.js"></script> -->

  <!-- Bootstrap Notify -->
  <!-- <script src="assetsnew/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

  <!-- Bootstrap Toggle -->
  <!-- <script src="assetsnew/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script> -->

  <!-- jQuery Vector Maps -->
  <!-- <script src="assetsnew/js/plugin/jqvmap/jquery.vmap.min.js"></script>
  <script src="assetsnew/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script> -->

  <!-- Google Maps Plugin -->
  <!--<script src="assetsnew/js/plugin/gmaps/gmaps.js"></script> -->

  <!-- Dropzone -->
  <!--<script src="assetsnew/js/plugin/dropzone/dropzone.min.js"></script> -->

  <!-- Fullcalendar -->
  <!--<script src="assetsnew/js/plugin/fullcalendar/fullcalendar.min.js"></script> -->

  <!-- DateTimePicker -->
  <!--<script src="assetsnew/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script> -->

  <!-- Bootstrap Tagsinput -->
  <!--<script src="assetsnew/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script> -->

  <!-- Bootstrap Wizard -->
  <!--<script src="assetsnew/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script> -->

  <!-- jQuery Validation -->
  <!--<script src="assetsnew/js/plugin/jquery.validate/jquery.validate.min.js"></script> -->

  <!-- Summernote -->
  <!--<script src="assetsnew/js/plugin/summernote/summernote-bs4.min.js"></script> -->

  <!-- Select2 -->
  <!--<script src="assetsnew/js/plugin/select2/select2.full.min.js"></script> -->

  <!-- Sweet Alert -->
  <!--<script src="assetsnew/js/plugin/sweetalert/sweetalert.min.js"></script> -->

  <!-- Atlantis JS -->
  <!--<script src="assetsnew/js/atlantis2.min.js"></script> -->
<script>
$(document).ready(function() {
  console.log("rtview page is fully loaded");
  /*$('#basic-datatables').DataTable({
    "lengthMenu": [[30, 60, 90, -1], [30, 60, 90, "All"]]
  }); */
});
</script>
</body>
</html>