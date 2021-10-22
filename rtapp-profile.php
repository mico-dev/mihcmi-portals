<?php 
session_start();

//session checker
if(!isset($_SESSION['ssid'])) {
  echo "<script>window.location='logout.php';</script>";
}else{
    if($_SESSION['ssid']=='covidwarrior'){
        //do nothing
    }else{
        $rt_ccode = $_SESSION['ssid'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
  <meta property="fb:app_id" content="1433445030165524" />
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Metro Iloilo Hospital & Medical Center, Inc. | RT-PCR Applicant Profile">
    <meta property="description" content="">
    <meta property="og:image" contnt="http://metroiloilohospital.com/images/main/1.png">
    <meta name="p:domain_verify" content="f3f8df3650be2c3e5d8a9484fa33316f"/>

    <title>MIHMCI ILOILO | RT-PCR Applicant Profile</title>
    <link href="images/Metro Iloilo Hospital and Medical Center Inc Logo.png" rel="icon" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/libs/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/cs-select.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/css/freepik.hotels.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox.min.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/modernizr.custom.min.js"></script>
    
  
    <style type="text/css">
      .container-fluid {
        width: 90% ;
      }
        .mg-page-title h1 {
            color: #fff;
            text-transform: uppercase;
      position: relative;
      margin-bottom: 1%;
      margin-top: 0;
      font-size: 65px;
      text-shadow: 2px 2px 3px rgba(24, 64, 164, 1);
      font-weight: 900;
        }
        .mg-page-title h2 {
            color: #fff;
            text-transform: uppercase;
            position: relative;
            margin-bottom: 35px;
            margin-top: 1%;
            font-size: 36px;
            font-weight: 600;
            
        }
        .form-control:disabled, .form-control[readonly] {
            background:#fff !important;
        }
        @media (max-width: 1366px) {
            .mg-page-title h1 {
                margin-top:5% 
            }
        }    
        @media (max-width: 900px) {
            .mg-page-title h1 {
                font-size:36px;
                margin-top:10% 
            }
            .mg-page-title h2 {
                font-size:28px;
            }
        }
        @media (max-width: 680px) {
            .mg-page-title h1 {
                font-size:32px;
            }
            .mg-page-title h2 {
                font-size:22px;
            }
        }
        @media (max-width: 414px) {
            
        }
        .form-control:disabled, .form-control[readonly] {
            background:#fff !important;
        }
      </style>
  </head>
  <body>
    <?php include 'includes/template/header.php'; ?>
    <div>
      <div class="container-fluid" style='margin-top:6%;'>
          <div class="row">
              <div class="col-md-12">
              </div>
          </div>
      </div>
    </div> 
    <section class="mg-best-rooms"  style="background-color: #ffffff;">
      <div class="container-fluid" >
        <div class="row" >
          <div class="col-lg-12" title="RT-PCR Online Registration Form" >
            <h2 class="text-dark mb-3"><b>MIHMCI RT-PCR Applicant Profile</b></h2>
            <form method='POST'>
            <?php
            
            include('config.php');
              if(isset($_POST['submit'])) {
                #
                $remove[] = "'";
                $remove[] = '"'; 
                $remove[] = '.'; 
                   
                $lname=str_replace($remove, "", strtoupper($_POST['lname']));
                $fname=str_replace($remove, "", strtoupper($_POST['fname']));
                $mname=str_replace($remove, "", strtoupper($_POST['mname']));
                $suffix=str_replace($remove, "", strtoupper($_POST['suffix']));
                #$bdate=str_replace($remove, "", strtoupper($_POST['bdate']));
                $gender=str_replace($remove, "", strtoupper($_POST['gender']));  
                $cstatus=str_replace($remove, "", strtoupper($_POST['cstatus']));
                $nationality=str_replace($remove, "", strtoupper($_POST['nationality']));
                $occupation=str_replace($remove, "", strtoupper($_POST['occupation']));
                $phicnumber=str_replace($remove, "", strtoupper($_POST['phicnumber']));
                                   
                                                
                $s = substr(str_shuffle(str_repeat("123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOP", 5)), 0, 5); 

                $micro = round(microtime(true));
                $code = $s."".$micro;

                $curaddhousenum=str_replace($remove, "", strtoupper($_POST['curaddhousenum']));
                $curstreet=str_replace($remove, "", strtoupper($_POST['curstreet']));
                $curbarangay=str_replace($remove, "", strtoupper($_POST['curbarangay'])); 
                $curcity=str_replace($remove, "", strtoupper($_POST['curcity']));
                $curprovince=str_replace($remove, "", strtoupper($_POST['curprovince']));
                #$curregion=str_replace($remove, "", strtoupper($_POST['curregion']));
                $curhomephone=str_replace($remove, "", strtoupper($_POST['curhomephone']));
                $curcontactnumber=str_replace($remove, "", strtoupper($_POST['curcontactnumber']));
                $curemail= $_POST['curemail'] ;
                $addduplicate=(isset($_POST['addduplicate']))?$_POST['addduplicate'] : '';

                if($addduplicate=='1'){
                  
                  $peraddhousenum= $curaddhousenum;
                  $perstreet= $curstreet;
                  $perbarangay= $curbarangay;
                  $percity= $curcity;
                  $perprovince= $curprovince;
                  #$perregion= $curregion;
                  $perhomephone= $curhomephone;
                  $percontactnumber= $curcontactnumber;
                  $peremail= $curemail;

                }else{
                  #echo "$perstreet";
                  $peraddhousenum=str_replace($remove, "", strtoupper($_POST['peraddhousenum']));
                  $perstreet=str_replace($remove, "", strtoupper($_POST['perstreet']));
                  $perbarangay=str_replace($remove, "", strtoupper($_POST['perbarangay'])); 
                  $percity=str_replace($remove, "", strtoupper($_POST['percity']));
                  $perprovince=str_replace($remove, "", strtoupper($_POST['perprovince']));
                  #$perregion=str_replace($remove, "", strtoupper($_POST['perregion']));
                  $perhomephone=str_replace($remove, "", strtoupper($_POST['perhomephone']));
                  $percontactnumber=str_replace($remove, "", strtoupper($_POST['percontactnumber']));
                  $peremail= $_POST['peremail'] ;
                }
                 
                $wpaddhousenum=str_replace($remove, "", strtoupper($_POST['wpaddhousenum']));
                $wpstreet=str_replace($remove, "", strtoupper($_POST['wpstreet']));
                $wpbarangay=str_replace($remove, "", strtoupper($_POST['wpbarangay'])); 
                $wpcity=str_replace($remove, "", strtoupper($_POST['wpcity']));
                $wpprovince=str_replace($remove, "", strtoupper($_POST['wpprovince']));
                #$wpregion=str_replace($remove, "", strtoupper($_POST['wpregion']));
                $wphomephone=str_replace($remove, "", strtoupper($_POST['wphomephone']));
                $wpcontactnumber=str_replace($remove, "", strtoupper($_POST['wpcontactnumber']));
                $wpemail= $_POST['wpemail'] ;
                $bdate= $_POST['byear'].'-'.$_POST['bmonth'].'-'. $_POST['bday'];
                #$date = $_POST['date'];
                $date =  $_POST['ayear'].'-'.$_POST['amonth'].'-'. $_POST['aday'];   
                #
                   if(isset($_GET['rtid'])) { 

                      $rtid = mysqli_real_escape_string($con, $_GET['rtid']);
                      $regrtpax = mysqli_query($con,"UPDATE `tb_rtpcrnewcifonline` SET `rt_lname`='$lname',`rt_fname`='$fname',`rt_mname`='$mname',`rt_suffix`='$suffix',`rt_bdate`='$bdate',`rt_gender`='$gender',`rt_cstatus`='$cstatus',`rt_occupation`='$occupation',`rt_nationality`='$nationality',`rt_phicnumber`='$phicnumber',`rt_curaddhousenum`='$curaddhousenum',`rt_curstreet`='$curstreet',`rt_curbarangay`='$curbarangay',`rt_curcity`='$curcity',`rt_curprovince`='$curprovince',`rt_curhomephone`='$curhomephone',`rt_curcontactnumber`='$curcontactnumber',`rt_curemail`='$curemail',`rt_peraddhousenum`='$peraddhousenum',`rt_perstreet`='$perstreet',`rt_perbarangay`='$perbarangay',`rt_percity`='$percity',`rt_perprovince`='$perprovince',`rt_perhomephone`='$perhomephone',`rt_percontactnumber`='$percontactnumber',`rt_peremail`='$peremail',`rt_wpaddhousenum`='$wpaddhousenum',`rt_wpstreet`='$wpstreet',`rt_wpbarangay`='$wpbarangay',`rt_wpcity`='$wpcity',`rt_wpprovince`='$wpprovince',`rt_wphomephone`='$wphomephone',`rt_wpcontactnumber`='$wpcontactnumber',`rt_wpemail`='$wpemail', `rt_datesched`='$date' WHERE `rt_primaryai`='$rtid'" ) or die(mysqli_error($con));
                           echo "<div class='alert alert-primary' align='center'><strong>Success! </strong> Applicant profile has been updated.</div>";

                   }else{

                    $regrtpax = mysqli_query($con,"UPDATE `tb_rtpcrnewcifonline` SET `rt_lname`='$lname',`rt_fname`='$fname',`rt_mname`='$mname',`rt_suffix`='$suffix',`rt_bdate`='$bdate',`rt_gender`='$gender',`rt_cstatus`='$cstatus',`rt_occupation`='$occupation',`rt_nationality`='$nationality',`rt_phicnumber`='$phicnumber',`rt_curaddhousenum`='$curaddhousenum',`rt_curstreet`='$curstreet',`rt_curbarangay`='$curbarangay',`rt_curcity`='$curcity',`rt_curprovince`='$curprovince',`rt_curhomephone`='$curhomephone',`rt_curcontactnumber`='$curcontactnumber',`rt_curemail`='$curemail',`rt_peraddhousenum`='$peraddhousenum',`rt_perstreet`='$perstreet',`rt_perbarangay`='$perbarangay',`rt_percity`='$percity',`rt_perprovince`='$perprovince',`rt_perhomephone`='$perhomephone',`rt_percontactnumber`='$percontactnumber',`rt_peremail`='$peremail',`rt_wpaddhousenum`='$wpaddhousenum',`rt_wpstreet`='$wpstreet',`rt_wpbarangay`='$wpbarangay',`rt_wpcity`='$wpcity',`rt_wpprovince`='$wpprovince',`rt_wphomephone`='$wphomephone',`rt_wpcontactnumber`='$wpcontactnumber',`rt_wpemail`='$wpemail', `rt_datesched`='$date' WHERE `rt_code`='$rt_ccode'" ) or die(mysqli_error($con));
                           echo "<div class='alert alert-primary' align='center'><strong>Success! </strong> Applicant profile has been updated.</div>";
                   }
                    
              }//end update
              if(isset($_GET['rtid'])) { 

                  $rtid = mysqli_real_escape_string($con, $_GET['rtid']);
                  $default_value = mysqli_query($con, "SELECT * FROM tb_rtpcrnewcifonline WHERE rt_primaryai='$rtid'") or die(mysqli_error($con));

              } else {

                  $default_value = mysqli_query($con, "SELECT * FROM tb_rtpcrnewcifonline WHERE rt_code='$rt_ccode'") or die(mysqli_error($con));
                  
              }
                            
                              if(mysqli_num_rows($default_value)<>0){
                                while($row=mysqli_fetch_assoc($default_value)) {
                                  $dv_id = $row['rt_primaryai'];
                                  $dv_fname = $row['rt_fname'];
                                  $dv_lname = $row['rt_lname'];
                                  $dv_mname = $row['rt_mname'];
                                  $dv_suffix = $row['rt_suffix'];
                                  

                                  $dv_gender = $row['rt_gender'];
                                  $dv_cstatus = $row['rt_cstatus'];
                                  $dv_occupation = $row['rt_occupation'];
                                  $dv_nationality = $row['rt_nationality'];
                                  $dv_phicnumber = $row['rt_phicnumber'];
                                  $dv_curaddhousenum = $row['rt_curaddhousenum'];
                                  $dv_curstreet = $row['rt_curstreet'];
                                  $dv_curbarangay = $row['rt_curbarangay'];
                                  $dv_curcity = $row['rt_curcity'];
                                  $dv_curprovince = $row['rt_curprovince'];
                                  $dv_curhomephone = $row['rt_curhomephone'];
                                  $dv_curcontactnumber = $row['rt_curcontactnumber'];
                                  $dv_curemail = $row['rt_curemail'];
                                  $dv_peraddhousenum = $row['rt_peraddhousenum'];
                                  $dv_perstreet = $row['rt_perstreet'];
                                  $dv_perbarangay = $row['rt_perbarangay'];
                                  $dv_percity = $row['rt_percity'];
                                  $dv_perprovince = $row['rt_perprovince'];
                                  $dv_perhomephone = $row['rt_perhomephone'];
                                  $dv_percontactnumber = $row['rt_percontactnumber'];
                                  $dv_peremail = $row['rt_peremail'];
                                  $dv_wpaddhousenum = $row['rt_wpaddhousenum'];
                                  $dv_wpstreet = $row['rt_wpstreet'];
                                  $dv_wpbarangay = $row['rt_wpbarangay'];
                                  $dv_wpcity = $row['rt_wpcity'];
                                  $dv_wpprovince = $row['rt_wpprovince'];
                                  $dv_wphomephone = $row['rt_wphomephone'];
                                  $dv_wpcontactnumber = $row['rt_wpcontactnumber'];
                                  $dv_wpemail = $row['rt_wpemail'];
                                  $dv_code = $row['rt_code'];
                                  #bday
                                  $dv_bday = date('m/d/Y', strtotime($row['rt_bdate']));
                                  if(strpos($dv_bday, '/')){ 
                                    $explodededdatesched = explode("/", $dv_bday);
                                    $bmonth = $explodededdatesched[0];
                                    $bday = $explodededdatesched[1];
                                    $byear = $explodededdatesched[2];
                                  } else {
                                    $explodededdatesched = explode("-", $dv_bday);
                                    $byear = $explodededdatesched[0];
                                    $bmonth = $explodededdatesched[1];
                                    $bday = $explodededdatesched[2];
                                  }
                                  
                                  #datesched
                                  $dv_datesched =date('m/d/Y', strtotime($row['rt_datesched']));
                                    if(strpos($dv_datesched, '/')){
                                        $explodededdatesched = explode("/", $dv_datesched);
                                        $amonth = $explodededdatesched[0];
                                        $aday = $explodededdatesched[1];
                                        $ayear = $explodededdatesched[2];
                                    } else {
                                        $explodededdatesched = explode("-", $dv_datesched);
                                        $ayear = $explodededdatesched[0];
                                        $amonth = $explodededdatesched[1];
                                        $aday = $explodededdatesched[2];
                                    }
                                  $dv_datereg = $row['rt_datereg'];
                                }
                              }//end num_rows
                            ?>
                <div class="row bg-light pb-2 shadow-lg">
		          	<div class="col-12 p-0 mb-2">
                    	<a href="cifprint.php<?php echo '?rtid='.$dv_id;?>" target="_blank" class="btn btn-warning btn-block">PRINT CIF</a>
		            </div>
                    <div class="col-lg-12 text-center font-weight-bold pt-1 pb-1 bg-secondary text-white mb-3">1. Personal Information:</div>
                    <div class="col-md-6 col-lg-3 font-weight-bold">
                        First Name:
                        <input class="form-control" type="text" name="fname" placeholder="First Name" autocomplete="off" value="<?php echo $dv_fname;?>">
                    </div>
                    <div class="col-md-3 col-lg-3 font-weight-bold">
                        Middle Name:
                        <input class="form-control" type="text" name="mname" placeholder="Middle Name" autocomplete="off" value="<?php echo str_replace("ñ", "Ñ", $dv_mname); ?>">
                    </div>
                    <div class="col-md-6 col-lg-3 font-weight-bold">
                        Last Name:
                        <input class="form-control" type="text" name="lname" placeholder="Last Name" autocomplete="off" value="<?php echo $dv_lname; ?>">
                    </div>
                    <div class="col-md-2 col-lg-3 font-weight-bold">
                        Suffix:
                        <input class="form-control" type="text" name="suffix" placeholder="Suffix" autocomplete="off" value="<?php echo $dv_suffix; ?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        PHIC Number:
                        <input class="form-control" type="text" name="phicnumber" placeholder=" " autocomplete="off" value="<?php echo $dv_phicnumber;?>">
                    </div>
                    <div class="col-md-3 col-lg-2 font-weight-bold">
                        Gender:
                        <select name="gender" class="form-control">
                            <option value='<?php echo $dv_gender;?>'><?php echo $dv_gender;?></option>
                            <option value='MALE'>MALE</option>
                            <option value='FEMALE'>FEMALE</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-lg-2 font-weight-bold">
                        Civil Status:
                        <select name="cstatus" class="form-control">
                            <option value='<?php echo $dv_cstatus; ?>'><?php echo $dv_cstatus;?></option>
                            <option value='Single'>Single</option>
                            <option value='Married'>Married</option>
                            <option value='Widowed'>Widowed</option>
                        </select>
                    </div>     
                    <div class="col-lg-2 font-weight-bold  ">
                        Nationality:
                        <input class="form-control" type="text" name="nationality" placeholder="Filipino" autocomplete="off" value="<?php echo $dv_nationality; ?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">                              
                        Occupation:
                        <input class="form-control" type="text" name="occupation" placeholder="Med-Tech" autocomplete="off" value="<?php echo $dv_occupation; ?>">
                    </div>
                    <!-- <div class="col-md-6 col-lg-2 font-weight-bold">
                        Date of RT-PCR Test:
                        <input type="text" class="form-control" id="testdate" name="date" value='<?php echo $dv_datesched; ?>' placeholder="yyyy-mm-dd"' required>
                            
                    </div>
                    <div class="col-md-3 col-lg-2 font-weight-bold">
                        Birthdate:
                        <input type="text" class="form-control" id="bdate" name="bdate" value='<?php echo $dv_bday; ?>' placeholder="yyyy-mm-dd" required>
                    </div> -->
                    <div class="col-md-6 col-lg-6 font-weight-bold">
                        Birthdate:
                        <div class="row">
                            <div class="col-lg-2 font-weight-bold">
                                Month
                                <?php
                                $month = 12;//
                                echo '<select class="form-control" name="bmonth">';
                                echo '<option value="'.$bmonth.'">'.$bmonth.'</option>';
                                    for($x=1;$x<=$month;$x++) {
                                        echo '<option value="'.$x.'">'.$x.'</option>';
                                    }
                                echo '</select>';
                                ?>
                            </div>
                            <div class="col-lg-2 font-weight-bold">
                                Day
                                <?php
                                $day = 31;//
                                echo '<select class="form-control" name="bday">';
                                echo '<option value="'.$bday.'">'.$bday.'</option>';
                                    for($x=1;$x<=$day;$x++) {
                                        echo '<option value="'.$x.'">'.$x.'</option>';
                                    }
                                echo '</select>';
                                ?>
                            </div>
                            <div class="col-lg-2 font-weight-bold">
                                Year
                                <?php
                                $year = date('Y');//
                                echo '<select class="form-control" name="byear">';
                                    echo '<option value="'.$byear.'">'.$byear.'</option>';
                                    for($x=1920;$x<=$year;$x++) {
                                        echo '<option value="'.$x.'">'.$x.'</option>';
                                    }
                                echo '</select>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 font-weight-bold">
                    Date of RT-PCR Test:
                        <div class="row">
                            <div class="col-lg-2 font-weight-bold">
                                Month
                                <?php
                                $month = 12;//
                                echo '<select class="form-control" name="amonth">';
                                echo '<option value="'.$amonth.'">'.$amonth.'</option>';
                                    for($x=1;$x<=$month;$x++) {
                                        echo '<option value="'.$x.'">'.$x.'</option>';
                                    }
                                echo '</select>';
                                ?>
                            </div>
                            <div class="col-lg-2 font-weight-bold">
                                Day
                                <?php
                                $day = 31;//
                                echo '<select class="form-control" name="aday">';
                                echo '<option value="'.$aday.'">'.$aday.'</option>';
                                    for($x=1;$x<=$day;$x++) {
                                        echo '<option value="'.$x.'">'.$x.'</option>';
                                    }
                                echo '</select>';
                                ?>
                            </div>
                            <div class="col-lg-2 font-weight-bold">
                                Year
                                <?php
                                $year = date('Y');//
                                echo '<select class="form-control" name="ayear">';
                                echo '<option value="'.$ayear.'">'.$ayear.'</option>';
                                    for($x=1920;$x<=$year;$x++) {
                                        echo '<option value="'.$x.'">'.$x.'</option>';
                                    }
                                echo '</select>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center font-weight-bold  bg-secondary text-white pt-1 pb-1">2. Philippine Residence:</div> 
                    <div class="col-lg-12 text-center font-weight-bold  bg-success text-white pt-1 pb-1">Current Address</div> 
                    <div class="col-lg-3 font-weight-bold"> 
                        House No./Lot/Bldg.:
                        <input class="form-control" type="text" name="curaddhousenum" placeholder=" " value="<?php echo $dv_curaddhousenum;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Street/Purok:
                        <input class="form-control" type="text" name="curbarangay" placeholder=" " value="<?php echo $dv_curstreet;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Brgy:
                        <input class="form-control" type="text" name="curstreet" id="daddbrgy" placeholder=" " value="<?php echo $dv_curbarangay;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Municipality/City:
                        <input class="form-control" type="text" name="curcity" id="dcity" placeholder=" " value="<?php echo $dv_curcity;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Province:
                        <input class="form-control" type="text" name="curprovince" value="<?php echo $dv_curprovince;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Home Phone:
                        <input class="form-control" type="text" name="curhomephone" placeholder=" " value="<?php echo $dv_curhomephone;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Cellphone #:
                        <input class="form-control" type="text" name="curcontactnumber" placeholder=" " value="<?php echo $dv_curcontactnumber;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        E-mail (For Result):
                        <input class="form-control" type="email" name="curemail" autocomplete="off" placeholder=" " value="<?php echo $dv_curemail;?>">
                    </div> 
                    <div class="col-lg-12 text-center font-weight-bold  bg-success text-white pt-1 pb-1"> 
                        Permanent Address: (Check if same with Current Address):<input type="checkbox" name="addduplicate" value="1">
                    </div> 
                    <div class="col-lg-3 font-weight-bold"> 
                        House No./Lot/Bldg.:
                        <input class="form-control" type="text" name="peraddhousenum" placeholder=" " value="<?php echo $dv_peraddhousenum;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Street/Purok:
                        <input class="form-control" type="text" name="perstreet" placeholder=" " value="<?php echo $dv_perstreet;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Brgy:
                        <input class="form-control" type="text" name="perbarangay" placeholder=" " value="<?php echo $dv_perbarangay;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Municipality/City:
                        <input class="form-control" type="text" name="percity" placeholder=" " value="<?php echo $dv_percity;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Province:
                        <input class="form-control" type="text" name="perprovince" value="<?php echo $dv_perprovince;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Home Phone:
                        <input class="form-control" type="text" name="perhomephone" placeholder=" " value="<?php echo $dv_perhomephone;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Cellphone #:
                        <input class="form-control" type="text" name="percontactnumber" placeholder=" " value="<?php echo $dv_percontactnumber;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        E-mail (For Result):
                        <input class="form-control" type="email" name="peremail" autocomplete="off" placeholder=" " value="<?php echo $dv_peremail;?>">
                    </div>
                    <div class="col-lg-12 text-center font-weight-bold  bg-success text-white pt-1 pb-1">Current Workplace Address:</div> 
                    <div class="col-lg-3 font-weight-bold  "> 
                        House No./Lot/Bldg.:
                        <input class="form-control" type="text" name="wpaddhousenum" placeholder=" " value="<?php echo $dv_wpaddhousenum;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Street/Purok:
                        <input class="form-control" type="text" name="wpstreet" placeholder=" " value="<?php echo $dv_wpstreet;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Brgy:
                        <input class="form-control" type="text" name="wpbarangay" placeholder=" " value="<?php echo $dv_wpbarangay;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Municipality/City:
                        <input class="form-control" type="text" name="wpcity" placeholder=" " value="<?php echo $dv_wpcity;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Province:
                        <input class="form-control" type="text" name="wpprovince" value="<?php echo $dv_wpprovince;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Name of workplace:
                        <input class="form-control" type="text" name="wphomephone" placeholder=" " value="<?php echo $dv_wphomephone;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        Cellphone #:
                        <input class="form-control" type="text" name="wpcontactnumber" placeholder=" " value="<?php echo $dv_wpcontactnumber;?>">
                    </div>
                    <div class="col-lg-3 font-weight-bold">
                        E-mail (For Result):
                        <input class="form-control" type="email" name="wpemail" autocomplete="off" placeholder=" " value="<?php echo $dv_wpemail;?>">
                    </div>
                    <div class="col-md-12 col-lg-12 mb-2">
                        <input type="submit" name="submit" class="btn btn-primary btn-block" value="UPDATE APPLICANT PROFILE">
                    </div>
                    <div class="col-md-12 col-lg-12 mb-3">
                        <a href="cifprint.php<?php echo '?rtid='.$dv_id;?>" target="_blank" class="btn btn-warning btn-block">PRINT CIF</a>
                    </div>
                </div>
            </form> 
          </div>
        </div>
      </div>
    </section>
    <footer class="mg-footer">
        <div class="mg-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>Copyright &copy; <?php echo date('Y');?> <a href="https://mihmci-portals.com/">mihmci-portals.com</a> By <a href="https://www.metroiloilohospital.com/">Metro Iloilo Hospital & Medical Center, Inc.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jssor.slider.mini.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/selectFx.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/starrr.min.js"></script>
    <script src="assets/js/nivo-lightbox.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/date-time-picker.min.js"></script>
    <script>
    $(document).ready(function() {
        //$('#testdate').dateTimePicker();
            //$('#bdate').dateTimePicker();
            $('#testdate').datepicker({
                autoclose: true
            });
            $('#bdate').datepicker({
                autoclose: true
            });
    });
    </script>
  </body>
</html>