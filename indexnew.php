<!DOCTYPE html>
<html lang="en">
    <head>
        <meta property="fb:app_id" content="1433445030165524" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Metro Iloilo Hospital & Medical Center, Inc. | RT-PCR Appointment">
        <meta property="description" content="">
        <meta property="og:image" contnt="http://metroiloilohospital.com/images/main/1.png">
        <meta name="p:domain_verify" content="f3f8df3650be2c3e5d8a9484fa33316f"/>
        <title>Metro Iloilo Hospital & Medical Center, Inc. | RT-PCR Appointment</title>
        <link href="images/Metro Iloilo Hospital and Medical Center Inc Logo.png" rel="icon" type="image/png" sizes="16x16">
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic">-->
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
        </style>
        <script data-ad-client="pub-3040695959996788" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107291627-16"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-107291627-16');
    </script>
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
                    <div class="col-lg-12 alert alert-success">
                        <h1 class="text-dark"><b>MIHMCI RT-PCR Appointment</b></h1>
                        <h3 class="text-dark">Online Registration Form</h3>
                        <p class="text-dark mb-1"><b>Advisory!</b> Please download the <b><a target="_blank" href="https://www.metroiloilohospital.com/CIF2PGES.pdf">CIF Form & Waiver Form</a></b> after registration, please fill up forms and show it to our personel at MIHMCI for faster transaction.</p>
                        <p class="text-dark mb-1">Please write legibly and make sure the data provided is true and correct. These data are sent to DOH as part of mandatory reporting of covid laboratories.</p>
                    </div>
                    <div class="col-lg-12">
                        <form method='POST'>
                              <?php
                            #error_reporting(0);
                            include('config.php');
                            date_default_timezone_set('Asia/Manila');
                            if(isset($_POST['submit'])){
$remove[] = "'";
$remove[] = '"'; 
$remove[] = '.'; 
   
	 

$lname=str_replace($remove, "", strtoupper($_POST['lname']));
$fname=str_replace($remove, "", strtoupper($_POST['fname']));
$mname=str_replace($remove, "", strtoupper($_POST['mname']));
$suffix=str_replace($remove, "", strtoupper($_POST['suffix']));
$bdate=str_replace($remove, "", strtoupper($_POST['bdate']));
$gender=str_replace($remove, "", strtoupper($_POST['gender']));  
$cstatus=str_replace($remove, "", strtoupper($_POST['cstatus']));
$nationality=str_replace($remove, "", strtoupper($_POST['nationality']));
$occupation=str_replace($remove, "", strtoupper($_POST['occupation']));
$phicnumber=str_replace($remove, "", strtoupper($_POST['phicnumber']));
                   
                                
$s = substr(str_shuffle(str_repeat("123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOP", 5)), 0, 5); 

$micro = round(microtime(true));
$code = $s."".$micro;
$sqlcodecheck = mysqli_query($con,"SELECT * FROM tb_rtpcrnewcif WHERE rt_ccode='$code' ");
$countsqlcodecheck = mysqli_num_rows($sqlcodecheck);
 

$curaddhousenum=str_replace($remove, "", strtoupper($_POST['curaddhousenum']));
$curstreet=str_replace($remove, "", strtoupper($_POST['curstreet']));
$curbarangay=str_replace($remove, "", strtoupper($_POST['curbarangay'])); 
$curcity=str_replace($remove, "", strtoupper($_POST['curcity']));
$curprovince=str_replace($remove, "", strtoupper($_POST['curprovince']));
$curregion=str_replace($remove, "", strtoupper($_POST['curregion']));
$curhomephone=str_replace($remove, "", strtoupper($_POST['curhomephone']));
$curcontactnumber=str_replace($remove, "", strtoupper($_POST['curcontactnumber']));
$curemail= $_POST['curemail'] ;

$addduplicate=str_replace($remove, "", ($_POST['addduplicate']));
if($addduplicate=='1'){
	
	$peraddhousenum= $curaddhousenum;
	$perstreet= $curstreet;
	$perbarangay= $curbarangay;
	$percity= $curcity;
	$perprovince= $curprovince;
	$perregion= $curregion;
	$perhomephone= $curhomephone;
	$percontactnumber= $curcontactnumber;
	$peremail= $curemail;

}else{
	echo "$perstreet";
	$peraddhousenum=str_replace($remove, "", strtoupper($_POST['peraddhousenum']));
	$perstreet=str_replace($remove, "", strtoupper($_POST['perstreet']));
	$perbarangay=str_replace($remove, "", strtoupper($_POST['perbarangay'])); 
	$percity=str_replace($remove, "", strtoupper($_POST['percity']));
	$perprovince=str_replace($remove, "", strtoupper($_POST['perprovince']));
	$perregion=str_replace($remove, "", strtoupper($_POST['perregion']));
	$perhomephone=str_replace($remove, "", strtoupper($_POST['perhomephone']));
	$percontactnumber=str_replace($remove, "", strtoupper($_POST['percontactnumber']));
	$peremail= $_POST['peremail'] ;
}
 
$wpaddhousenum=str_replace($remove, "", strtoupper($_POST['wpaddhousenum']));
$wpstreet=str_replace($remove, "", strtoupper($_POST['wpstreet']));
$wpbarangay=str_replace($remove, "", strtoupper($_POST['wpbarangay'])); 
$wpcity=str_replace($remove, "", strtoupper($_POST['wpcity']));
$wpprovince=str_replace($remove, "", strtoupper($_POST['wpprovince']));
$wpregion=str_replace($remove, "", strtoupper($_POST['wpregion']));
$wphomephone=str_replace($remove, "", strtoupper($_POST['wphomephone']));
$wpcontactnumber=str_replace($remove, "", strtoupper($_POST['wpcontactnumber']));
$wpemail= $_POST['wpemail'] ;                   
                              #  echo $sqlschedcheck;
 
$date = $_POST['date'];
     if($countsqlcodecheck>=1){
          $s = substr(str_shuffle(str_repeat("123456789abcdefghijklmnpqrstuvwxyz", 5)), 0, 5);
                                #$code = rand(0,99999);
                                $code = $s;
    }else{
      
        //register
        if($gender=='MALE'){
            $greet = 'Mr.';
        }else{
            if($cstatus=='Single'){
                $greet = 'Ms.';
            }else{
                $greet = 'Mrs.';
            }
            
        }
 
                                
    #$duplicate  = mysqli_query($con, "SELECT * FROM tb_rtpcrnewcifonline WHERE rt_fname='$fname' AND rt_lname='$lname' AND rt_mname='$mname' AND rt_bdate='$bdate'  AND rt_datesched='$date' ") or die(mysqli_error($con));
    $xdate = strtotime($date);
    $now = strtotime(date('Y-m-d'));
    $sunday = date('l', $xdate);
        /*if($xdate<=$now){
            echo "<div class='alert alert-dangesr' align='center'><strong>Error! </strong> Please change Date of RT-PCR Test.</div>";
        }else*/  
        /*if(mysqli_num_rows($duplicate)>=1){
            echo "<div class='alert alert-danger' align='center'><strong>Error! </strong>Applicant <u>".$fname.' '.$mname.' '.$lname."</u> already exist.</div>";*/
       /* }elseif($sunday=='Sunday'){
            echo "<div class='alert alert-danger' align='center'><strong>Error! </strong>Laboratory is closed during Sunday. Please change Date of RT-PCR Test.</u></div>";    */
        /*}else{ */
           echo "$date";
      
            $regrtpax = mysqli_query($con, "INSERT INTO `tb_rtpcrnewcifonline` (`rt_primaryai`, `rt_lname`, `rt_fname`, `rt_mname`, `rt_suffix`, `rt_bdate`, `rt_gender`, `rt_cstatus`, `rt_occupation`, `rt_nationality`, `rt_phicnumber`, `rt_curaddhousenum`, `rt_curstreet`, `rt_curbarangay`, `rt_curcity`, `rt_curprovince`, `rt_curhomephone`, `rt_curcontactnumber`, `rt_curemail`, `rt_peraddhousenum`, `rt_perstreet`, `rt_perbarangay`, `rt_percity`, `rt_perprovince`, `rt_perhomephone`, `rt_percontactnumber`, `rt_peremail`, `rt_wpaddhousenum`, `rt_wpstreet`, `rt_wpbarangay`, `rt_wpcity`, `rt_wpprovince`, `rt_wphomephone`, `rt_wpcontactnumber`, `rt_wpemail`, `rt_code`, `rt_datesched`) VALUES (NULL, '$lname', '$fname', '$mname', '$suffix', '$bdate', '$gender', '$cstatus', '$occupation', '$nationality', '$phicnumber', '$curaddhousenum', '$curstreet', '$curbarangay', '$curcity', '$curprovince', '$curhomephone', '$curcontactnumber', '$curemail', '$peraddhousenum', '$perstreet','$perbarangay', '$percity', '$perprovince', '$perhomephone', '$percontactnumber', '$peremail', '$wpaddhousenum' , '$wpstreet' , '$wpbarangay' , '$wpcity' , '$wpprovince' , '$wphomephone' , '$wpcontactnumber' , '$wpemail', '$code', '$date');" ); 


###
              
 
$msg=$img."<br>Dear ".$greet." ".$lname.", 
    <br>
    <br>
    <h3>Thank you for using our online registration for RT-PCR Test.</h3>
    <br>Please follow the link to confirm your schedule: 
    <a href='https://mihmci-portals.com/login.php?code=".$code."'>Confirm Schedule</a><br><br>
    Login to your Applicant profile using credentials below:<br>
    Username: <b>".$lname."</b>
    <br>Password: <b>".$code."</b>
    <br><br><a href='https://mihmci-portals.com/login.php?code=".$code."'>Confirm Schedule and Login to your Applicant Profile</a><br><br><br>
    Please download and fill-up these forms to be submitted upon arrival:<br>
    Claim Investigation Form : <a href='https://www.metroiloilohospital.com/CIF2PGES.pdf'>Download CIF Form</a><br>
    Consent Waiver Form : <a href='https://www.metroiloilohospital.com/Consent3Pages.pdf'>Download Waiver Form</a><br>
    <br>
    Please visit our website for more info: <a href='https://www.metroiloilohospital.com'>Metro Website<a><br>
    Please visit our facebook page for more info: <a href='facebook.com/MIHMCIPH'>FB Page<a>

    <br>
    <br>
    Metro Iloilo Hospital & Medical Center, Inc. Location:<br>Please scan the QR Code<br> 

    <br>
CONFIDENTIALITY AND DISCLAIMER NOTICE: This email and any files transmitted with it are confidential and intended solely for the use of the individual(s) or entity(ies) to whom they are addressed. If you have received this email in error please notify the sender immediately and delete this e-mail from your system or computer. If you are not the named addressee you are notified that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited and may be subject to legal action for unauthorized or unlawful use. E-mail transmission cannot be guaranteed to be secure or error-free as information could be intercepted, corrupted, lost, destroyed, arrive late or incomplete, or contain viruses. Metro Iloilo Hospital & Medical Center, Inc, does not accept liability for any errors or omissions in the contents of this message, which arise as a result of e-mail transmission. Any views or opinions presented in this email are solely those of the author and do not necessarily represent that of the institution.
    ";
   
           
    $to      = $curemail;
    $subject = "RT-PCR Online Registration";
    $message = $msg;

    $headers = "From: MIHMCI-RTPCR\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
if (mail($to, $subject, $message, $headers)){
   echo "<div class='alert alert-primary' align='center'><strong>Success! </strong> An email has been sent to <b>$curemail</b> for verification.<br>E-mail may be delayed up to 1 minute.<br>See you at Metro Iloilo Hospital & Medical Center, Inc.<br><br>Login to your Applicant profile using credentials below:<br>
    Username: <b>".$lname."</b>
    <br>Password: <b>".$code."</b></div>";
}
else{
     echo "<div class='alert alert-danger' align='center'><strong>Error! </strong>Failed sending verification email. Please try again.</div>";
}
           

  /*}*/
    
         }

}
                            
                                ?> 
                        <div class="row">
                            <div class="col-md-6 col-lg-12 mb-3 font-weight-bold">
                                <div>
                                    <h3>Personal Information</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 font-weight-bold">
                                <div>
                                    First Name:
                                    <input class="form-control" type="text"   name="fname" placeholder="First Name" autocomplete="off" value='<?php echo $fname; ?>' required>
                                </div>
                            </div>
                                    <div class="col-md-3 col-lg-3 font-weight-bold">
                                        <div>
                                            Middle Name:
                                            <input class="form-control" type="text" name="mname" placeholder="Middle Name" autocomplete="off" value='<?php echo $mname; ?>' required>
                                        </div>
                                    </div>
                              
                              <div class="col-md-6 col-lg-3 font-weight-bold">
                                        <div>
                                            Last Name:
                                            <input class="form-control" type="text"   name="lname" placeholder="Last Name" autocomplete="off" value='<?php echo $lname; ?>' required>
                                        </div>
                                    </div>
                              
                              <div class="col-md-2 col-lg-1 font-weight-bold">
                                        <div>
                                            Suffix:
                                            <input class="form-control" type="text"   name="suffix" placeholder="Suffix" autocomplete="off" value='<?php echo $suffix; ?>'>
                                        </div>
                                    </div>
                              <div class="col-lg-2 font-weight-bold">
								 
                                            PHIC Number:
											<input class="form-control" type="text"   name="phicnumber"  placeholder=" " autocomplete="off" value='<?php echo $phicnumber; ?>'>
								  
									</div>
                              
                              <div class="col-md-3 col-lg-2 font-weight-bold">
                                        <div>
                                            Birthdate:
                                            <input type="text" class="form-control" id="bdate" name="bdate" value='<?php echo $bdate;?>' placeholder="yyyy-mm-dd" required>
                                            <!-- <input class="form-control" type="date" required name="bdate" placeholder="yyyy-mm-dd" autocomplete="off" value='<?php echo $bdate; ?>'> -->
                                        </div>
                                    </div>
                              
                              <div class="col-md-3 col-lg-2 font-weight-bold">
                                        <div>
                                            Gender:
                                            <select name='gender' class="form-control">
                                                
                                                <!-- here -->
                                                <option value='MALE'>MALE</option>
                                                <option value='FEMALE'>FEMALE</option>
                                            </select>
                                             
                                        </div>
                                    </div>
                              
                              <div class="col-md-3 col-lg-2 font-weight-bold">
                                        <div>
                                            Civil Status:
                                            <select name='cstatus' class="form-control">
                                                <option value='Single'>Single</option>
                                                <option value='Married'>Married</option>
                                                <option value='Widowed'>Widowed</option>
                                            </select>
                                            
                                        </div>
                                    </div> 
                            <div class="col-lg-2 font-weight-bold  ">
                                            Nationality:
											<input class="form-control" type="text"   name="nationality"   placeholder="Filipino" autocomplete="off" value='FILIPINO'>
									</div>
                            	
                              <div class="col-lg-2 font-weight-bold">                              
                                            Occupation:
                                            <input class="form-control" type="text"   name="occupation" placeholder="Med-Tech" autocomplete="off" value='<?php echo $occupation; ?>'>
                                    </div>
                          
                                    <div class="col-md-6 col-lg-2 font-weight-bold">
                                        <div>
                                            Date of RT-PCR Test:
                                             <input type="text" class="form-control" id="testdate" name="date" value='<?php echo $date;?>' placeholder="yyyy-mm-dd"  required> 
                                        </div>
                                    </div>
 <div class="col-lg-12 text-center font-weight-bold  bg-secondary text-white border border-dark rounded"> 
									2. Philippine Residence:
											 </div> 
									
									<div class="col-lg-12 text-center font-weight-bold  bg-success text-white border border-dark rounded"> 
									Current Address 
											 </div> 
									<div class="col-lg-3 font-weight-bold"> 
                                            House No./Lot/Bldg.:
											<input class="form-control" type="text"   name="curaddhousenum"   placeholder=" " value='<?php echo $curaddhousenum; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
									Street/Purok:
											<input class="form-control" type="text"   name="curstreet"   placeholder=" " value='<?php echo $curstreet  ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Brgy:
											<input class="form-control" type="text"   name="curbarangay" id ="daddbrgy"  placeholder=" " value='<?php echo $curbarangay;; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Municipality/City:
											<input class="form-control" type="text"   name="curcity"  id ="dcity"   placeholder=" " value='<?php echo $curcity; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Province:
											<input class="form-control" type="text"   name="curprovince"    value='<?php echo $curprovince; ?>' >
									</div>
									<!--div class="col-lg-3 font-weight-bold text-white">
                                            Region:
											<input class="form-control" type="text"   name="curregion" id ="dregion"  placeholder="Region VI (Western Visayas)"  value='Region VI'>
									</div-->
									<div class="col-lg-3 font-weight-bold">
                                            Home Phone:
											<input class="form-control" type="text"   name="curhomephone"  placeholder=" " value='<?php echo $curhomephone; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Cellphone #:
											<input class="form-control" type="text"   name="curcontactnumber" placeholder=" " value='<?php echo $curcontactnumber; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            E-mail (For Result):
											<input class="form-control" type="email"   name="curemail" autocomplete='off'  placeholder=" " value='<?php echo $curemail; ?>' required>
									</div>  <br>
									 <br>
									 <br>
									 <br>
									<div class="col-lg-12 text-center font-weight-bold  bg-success text-white border border-dark rounded"> 
									Permanent Address: (Check if same with Current Address):<input type="checkbox"   name="addduplicate" value="1">
											 </div> 
									<div class="col-lg-3 font-weight-bold"> 
                                            House No./Lot/Bldg.:
											<input class="form-control" type="text"   name="peraddhousenum"   placeholder=" " value='<?php echo $peraddhousenum; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Street/Purok:
											<input class="form-control" type="text"   name="perstreet"  placeholder=" " value='<?php echo $perstreet; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Brgy:
											<input class="form-control" type="text"   name="perbarangay"   placeholder=" " value='<?php echo $perbarangay; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Municipality/City:
											<input class="form-control" type="text"   name="percity"   placeholder=" " value='<?php echo $percity; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Province:
											<input class="form-control" type="text"   name="perprovince"  value='<?php echo $perprovince; ?>'>
									</div>
									<!--div class="col-lg-3 font-weight-bold text-white">
                                            Region:
											<input class="form-control" type="text"   name="perregion"   placeholder="Region VI (Western Visayas)" >
											
									</div-->
									<div class="col-lg-3 font-weight-bold">
                                            Home Phone:
											<input class="form-control" type="text"   name="perhomephone"   placeholder=" " value='<?php echo $perhomephone; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Cellphone #:
											<input class="form-control" type="text"   name="percontactnumber" placeholder=" " value='<?php echo $percontactnumber; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            E-mail (For Result):
											<input class="form-control" type="email"   name="peremail" autocomplete='off'   placeholder=" " value='<?php echo $peremail; ?>'>
									</div>
									<br>
									 <br>
									 <br>
									 <br>
									<div class="col-lg-12 text-center font-weight-bold  bg-success text-white border border-dark rounded"> 
									Current Workplace Address: 
											 </div> 
									<div class="col-lg-3 font-weight-bold  "> 
                                            House No./Lot/Bldg.:
											<input class="form-control" type="text"   name="wpaddhousenum"   placeholder=" " value='<?php echo $wpaddhousenum; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Street/Purok:
											<input class="form-control" type="text"   name="wpstreet"  placeholder=" " value='<?php echo $wpstreet; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Brgy:
											<input class="form-control" type="text"   name="wpbarangay"   placeholder=" " value='<?php echo $wpbarangay; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Municipality/City:
											<input class="form-control" type="text"   name="wpcity"   placeholder=" " value='<?php echo $wpcity; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Province:
											<input class="form-control" type="text"   name="wpprovince" value='<?php echo $wpprovince; ?>' >
									</div>
									<!--div class="col-lg-3 font-weight-bold text-white">
                                            Region:
											<input class="form-control" type="text"   name="wpregion"   placeholder="Region VI (Western Visayas)" >
											
									</div-->
									<div class="col-lg-3 font-weight-bold">
                                            Name of workplace:
											<input class="form-control" type="text"   name="wphomephone"   placeholder=" " value='<?php echo $wphomephone; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Cellphone #:
											<input class="form-control" type="text"   name="wpcontactnumber" placeholder=" " value='<?php echo $wpcontactnumber; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            E-mail (For Result):
											<input class="form-control" type="email"   name="wpemail" autocomplete='off'   placeholder=" " value='<?php echo $wpemail; ?>'>
									</div>
									
                               
                                <div class="col-md-12 col-lg-12">
                                        <div>
                                             &nbsp;  
                                             <input type='submit' name="submit" class="btn btn-main btn-block" value="SUBMIT">
                                        </div>
                                    </div>
                              
                            </div>
                        </form>
                    </div>
                     
                </div>
            </div>
        </section>
        <section class="mg-book-now">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="mg-bn-title">Search Doctors<span class="mg-bn-big">For schedules & availability</span></h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="mg-bn-forms">
                            <form method='POST'>
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div>

                                            <input class="form-control" type="text" name='name' placeholder="First/Last Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div>
                                            <input class="form-control" type="text"  name='spec' placeholder="Specialty" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-4">
                                        <input class="btn btn-main btn-block" type="submit" name="submit2" value="Check Now">
                                    </div>
                                </div>
                                <?php
                                
                                if(isset($_POST['submit2'])){
                                    $name=$_POST['name'];
                                    $spec=$_POST['spec'];
                                     echo "<script>window.location='https://metroiloilohospital.com/mddir.php?name=$name&&spec=$spec';</script>";
                                    
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="mg-footer">
            <div class="mg-copyright">
                <div class="container-fluid">
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
            $('#testdate').datepicker();
            $('#bdate').datepicker();
            $('#modal-announcement').modal('show');
            $('#modal-announcement').on('hidden.bs.modal', function () {});

            setInterval(reloadModal, 120000);
            function reloadModal() {
                $('#modal-announcement').modal('show');
            }
        });
        </script>
       <!--div class="modal fade show" id="modal-announcement" tabindex="-1" role="dialog" style="overflow-y: hidden; padding-right: 17px; display: block;"> 
          <div class="modal-dialog" role="document" style="width:auto;">    
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">MIHMCI PORTALS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> 
              <div class="modal-body"> 
                <img src="images/covidlab-sunday-sched.jpg" class="img-fluid shadow">
              </div>    
              <div class="modal-footer">    
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>  
              </div>    
            </div>  
          </div>    
        </div-->
    </body>
</html>
