<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>MIHMCI - RTPCR Applicant Profile Login</title>
    <meta name="description" content="Metro Iloilo Hospital & Medical Center, Inc. Portal">
    <meta name="author" content="Jed Arellado">
    <link href="assetsold/image/metro-iloilo-hospital-and--medical-center-inc-portal.png" rel="icon" type="image/png" sizes="16x16">
    <meta property="og:image" itemprop="image primaryImageOfPage" content="metro-iloilo-hospital-and--medical-center-inc-portal.png"/>
    <link rel="shortcut icon" href="LogoIcon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assetsold/css/custom.css">
    <link rel="stylesheet" href="assetsold/css/preload.min.css">
    <link rel="stylesheet" href="assetsold/css/plugins.min.css">
    <link rel="stylesheet" href="assetsold/css/style.light-blue-500.min.css">
    <!--[if lt IE 9]>
        <script src="assetsold/js/html5shiv.min.js"></script>
        <script ssrc="assetsold/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid home portal-bg">
        <div class="row">
     <div class="mw-500 absolute-center">          
        <div class="card color-dark shadow-6dp animated fadeIn animation-delay-7">
          <div class="ms-hero-bg-primary">
            <h2 class="text-center no-m pt-4 pb-4 color-white index-1">RTPCR Applicant Profile Login</h2>
          </div>
                    <div class="card-body">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
<?php
include('config.php');
    $ccode = $_GET['code'];
    $sqlcodecheck = mysqli_query($con,"SELECT * FROM tb_rtpcr WHERE rt_ccode='$ccode' ") or die(mysqli_error($con));
        while($row = mysqli_fetch_array($sqlcodecheck)){
             $fname = $row['rt_fname'];
             $lname = $row['rt_lname'];
             $mname = $row['rt_mname'];
             $sdate = $row['rt_datesched'];
        }
    $countsqlcodecheck = mysqli_num_rows($sqlcodecheck);
    $ndchange =  date('F d, Y', strtotime($sdate));                   
    if($countsqlcodecheck>=1){
        $sqlcodecheck = mysqli_query($con,"UPDATE `tb_rtpcr` SET `rt_status` = 'APPROVED' WHERE `tb_rtpcr`.`rt_ccode` = '$ccode'");
        echo "<div class='alert alert-primary'><b><h3><font color=#ffffff>RT-PCR Online Registration Approved.</h3></b><br><b>Name:</b> $lname, $fname $mname. <br><b>Schedule:</b> $ndchange</p>
        <br><b>username: </b>".$lname." <b>Password: $ccode </b> </p></div>";
    }
    if(isset($_POST['submit'])) {
        $uname = mysqli_real_escape_string($con, $_POST['username']);
        $check = mysqli_query($con, "SELECT * FROM tb_rtpcr WHERE rt_ccode='$uname' AND rt_status='APPROVED'") or die(mysqli_error($con));
        if(mysqli_num_rows($check)<>0){
            while($row = mysqli_fetch_array($check)) {
                $rt_ccode = $row['rt_ccode'];
            }
            //set session
            $_SESSION['sid'] = $rt_ccode;
            //redirect if success
            echo "<script>window.location='rtapp-profile.php';</script>";
        } else {

            echo "<div class='alert alert-danger'><strong>Error! </strong> Invalid login credentials</div>";
        }
    }                 
?>
                <form method="POST">
                   
                  <fieldset>
                    <div class="form-group label-floating">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                            <label class="control-label" for="ms-form-user">Username</label>
                            <input type="text" id="ms-form-user" name="username" value="<?php $uname = (isset($_POST['username'])) ? $_POST['username'] : '';echo $uname; ?>" class="form-control" autofocus> 
                        </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-12">
                        <input type="submit" name="submit" class="btn btn-raised btn-primary pull-right" value="Login">
                      </div>
                    </div>
                  </fieldset>
                </form>
                
              </div>
              
            </div>
          </div>
        </div>
            <div class="text-center animated fadeInUp animation-delay-7">
            <a href="https://www.metroiloilohospital.com" >
                <p class="text-primary">www.metroiloilohospital.com</p></a>
            </div>
            </div>
        </div>
      </div>
    </div>
    
     
  </body>
</html>