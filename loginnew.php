<?php
session_start();
date_default_timezone_set('Asia/Manila');
$now = new DateTime();
$year = $now->format('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MIHMCI PORTALS LOGIN</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
     

    <!-- Fonts and icons -->
    <link href="assetsnew/images/logo.png" rel="icon" type="image/png" sizes="16x16">
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
    <link rel="stylesheet" href="assetsnew/css/atlantis.css">
    <style>
        .bg-metro {
            background: url(assetsnew/images/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>
<body class="login"> 
<div class="wrapper wrapper-login bg-metro">
    
    <form method="POST" action=''>
        <div class="container container-login">
            <img src="images/covid-lab-logo.png" class="img-fluid">
            <h1 class="text-center mt-5 mb-5">MIHMCI PORTALS LOGIN</h1>
            <div class="login-form">
                <div class="form-group form-floating-label">
                    <input id="username" name="username" type="text" class="form-control input-border-bottom border-primary" required>
                    <label for="username" class="placeholder">Username</label>
                </div>
                <div class="form-group form-floating-label">
                    <input id="password" name="password" type="password" class="form-control input-border-bottom border-primary" required>
                    <label for="password" class="placeholder">Password</label>
                    <div class="show-password">
                        <i class="icon-eye"></i>
                    </div>
                </div>
                <div class="form-action mb-5">
                    <input  name="submit" type="submit" value="Login" class="btn btn-primary btn-rounded btn-login">
                </div>
                 
            </div>
<?php
include('config.php');
//presubmit
    
    if(isset($_GET['code'])) {
        $ccode = $_GET['code'];
        #$sqlcodecheck = mysqli_query($con,"SELECT * FROM tb_rtpcr WHERE rt_ccode='$ccode' ") or die(mysqli_error($con));
        $sqlcodecheck = mysqli_query($con,"SELECT * FROM tb_rtpcrnewcifonline WHERE rt_code='$ccode' ") or die(mysqli_error($con));
            while($row = mysqli_fetch_array($sqlcodecheck)) {
                $fname = $row['rt_fname'];
                $lname = $row['rt_lname'];
                $mname = $row['rt_mname'];
                #$sdate = $row['rt_datesched'];
            }
        $countsqlcodecheck = mysqli_num_rows($sqlcodecheck);
        $ndchange =  date('F d, Y', strtotime($sdate));  

        if($countsqlcodecheck>=1) {
            echo "<div class='alert alert-primary'><h5><b>RT-PCR Online Registration Approved</b></h5><p><b>Name:</b> $lname, $fname $mname<br><b>Schedule:</b> $ndchange
            <br><b>Username: </b>".$lname." <br><b>Password: $ccode </b> </p></div>";

        }
    }   

    if(isset($_POST['submit'])) {
        $uname = mysqli_real_escape_string($con, $_POST['username']);
        $pword = mysqli_real_escape_string($con, $_POST['password']);
        ###
        $check = mysqli_query($con,"SELECT * FROM tb_rtuser WHERE ru_uname='$uname' AND ru_password='$pword'");
        $countcheck = mysqli_num_rows($check);
        $checkapp = mysqli_query($con,"SELECT * FROM tb_rtpcrnewcifonline WHERE rt_code='$pword' AND rt_lname='$uname'") or die(mysqli_error($con));
        $countcheckapp = mysqli_num_rows($checkapp);
        
            //new
        $sql = mysqli_query($con, "SELECT rt_id, rt_user, rt_pass FROM `tb_rtpcrfull` WHERE BINARY rt_user='$uname' AND rt_pass='$pword' UNION ALL SELECT rt_id, rt_user, rt_pass FROM `tb_rtpcrnew` WHERE BINARY rt_user='$uname' AND rt_pass='$pword' UNION ALL SELECT rt_id, rt_user, rt_pass FROM `tb_rtpcrnewcif` WHERE BINARY rt_user='$uname' AND rt_pass='$pword'") or die(mysqli_error($con));
        
        
        $doc = mysqli_query($con, "SELECT * FROM `tb_meduser` WHERE m_pass='$pword' AND m_license='$uname' AND m_userid='6'") or die(mysqli_error($con));
        ###
        if($countcheck <> 0 ) {
            while($row = mysqli_fetch_array($check)) {
                $ru_uname = $row['ru_uname'];
                $ru_password = $row['ru_password'];
            }
                $_SESSION['ssid'] = $ru_uname;
                    //redirect if success
                header("Location: rtviewnew.php");
                end();
                    #echo "<script>window.location='rtview.php';</script>";
        }elseif($countcheckapp <> 0) { 
            while($row = mysqli_fetch_array($checkapp)) {
                $ru_uname = $row['rt_lname'];
                $ru_password = $row['rt_code'];
            }
               $_SESSION['ssid'] = $ru_password;
               
                //redirect if success
                header("Location: rtapp-profilenew.php");
                end();
        }elseif(mysqli_num_rows($sql)==1) {
            while($row=mysqli_fetch_assoc($sql)) {

                $rt_id = $row['rt_id'];
                $_SESSION['sessionid'] = $rt_id;
                header("Location: rtpcr-status.php");
                #echo "<script>window.location='rtpcr-status.php';</script>";
                end();
            }

        }elseif(mysqli_num_rows($doc)==1) {

            $_SESSION['sessionid'] = $pword;
            $_SESSION['sessionname'] = $uname;
            header("Location: rtpcr-view.php");
            #echo "<script>window.location='rtpcr-view.php';</script>";
            end();
            
        } else { 
            echo "<div class='alert alert-danger animated bounceIn' align='center'><strong>Warning! </strong> Invalid User Account.</div>";
        }
    }//end submit                
?>
        </div>
    </form>
</div>
    <script src="assetsnew/js/core/jquery.3.2.1.min.js"></script>
    <script src="assetsnew/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assetsnew/js/core/popper.min.js"></script>
    <script src="assetsnew/js/core/bootstrap.min.js"></script>
    <script src="assetsnew/js/atlantis.min.js"></script>
</body>
</html>