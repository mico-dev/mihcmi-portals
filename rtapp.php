<?php 
header('Location: https://mihmci-portals.com/');
die();
?>
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
			.mg-page-title h1 {
			    font-family: "Playfair Display", serif;
			    color: #fff;
			    text-transform: uppercase;
			    position: relative;
			    margin-bottom: 1%;
			    margin-top: 0;
			    font-size: 45px;
			}
			.mg-page-title h2 {
			    font-family: "Verdana", serif;
			    color: #fff;
			    position: relative;
			    margin-bottom: 35px;
			    margin-top: 0;
			    font-size: 36px;
			    text-transform: inherit;
			}
		</style>
	</head>
	<body style="font-family: Verdana;">
     <div  style='background-image: url("images/banners/rtpcr.jpg");background-repeat: no-repeat; background-size: contain; padding-top:5%;padding-bottom:5%;'  class="mg-page-title parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 style='color: #ffffff;'><b>MIHMCI RT-PCR Appointment</b></h1>
                        <h2 style='color: #fff;'><b> Online Registration Form</b></h2>

					</div>
				</div>
			</div>
		</div>
		<section class="mg-best-rooms"  style="background-color: #ffffff;">
			<div class="container" >
				<div class="row" >
					<div class="col-lg-12" title="RT-PCR Online Registration Form" >
						 

						 
                        <form method='POST'>
                              <?php
                            include('config.php');
                           	date_default_timezone_set('Asia/Manila');
                            if(isset($_POST['submit'])){
                                $fnameR = $_POST['fname'];
                                $mnameR = $_POST['mname'];
                                $lnameR = $_POST['lname'];
                                $genderR = $_POST['gender'];
                                $cstatusR = $_POST['cstatus'];
                                $contactR = $_POST['contact'];
                                $emailR = $_POST['email'];
                                $bdate = $_POST['bdate'];
                                $addressR = $_POST['address'];
                                $date = $_POST['date'];
                                $suffix = $_POST['suffix'];
                                
                                $thistoryR = $_POST['thistory'];
                                $lsiR = $_POST['lsi'];
                                $ofwR = $_POST['ofw'];
                                $mgatherR = $_POST['mgather'];
                                $closecontactR = $_POST['closecontact'];
                                $epersonR = $_POST['eperson'];
                                $econtactR = $_POST['econtact']; 
                                
                                $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
                                #$code = rand(0,99999);
                                
                                $micro = round(microtime(true));
                                $code = $s."".$micro;
                                                                
$fnameRC = ucfirst("$fnameR");   
$mnameRC = ucfirst("$mnameR");   
$lnameRC = ucfirst("$lnameR");   
$genderRC = ucfirst("$genderR");   
$cstatusRC = ucfirst("$cstatusR");   
$contactRC = ucfirst("$contactR");   
 
$addressRC = ucfirst("$addressR"); 
                                
$thistoryRC = ucfirst("$thistoryR");    
$lsiRC = ucfirst("$lsiR");    
$ofwRC = ucfirst("$ofwR");    
$mgatherRC = ucfirst("$mgatherR");    
$closecontactRC = ucfirst("$closecontactR");    
$epersonRC = ucfirst("$epersonR");    
$econtactRC = ucfirst("$econtactR");    
                                
$remove[] = "'";
$remove[] = '"';

$fname = str_replace( $remove, "", $fnameRC);
$mname = str_replace( $remove, "", $mnameRC);
$lname = str_replace( $remove, "", $lnameRC);
$gender = str_replace( $remove, "", $genderRC);
$cstatus = str_replace( $remove, "", $cstatusRC);
$contact = str_replace( $remove, "", $contactRC);
$email = str_replace( $remove, "", $emailR); 
$address = str_replace( $remove, "", $addressRC); 
                                
$thistory = str_replace( $remove, "", $thistoryRC); 
$lsi = str_replace( $remove, "", $lsiRC); 
$ofw = str_replace( $remove, "", $ofwRC); 
$mgather = str_replace( $remove, "", $mgatherRC); 
$closecontact = str_replace( $remove, "", $closecontactRC); 
$eperson = str_replace( $remove, "", $epersonRC); 
$econtact = str_replace( $remove, "", $econtactRC); 

$ndchange =  date('F d, Y', strtotime($date)); 
$bdatenew =  date('F d, Y', strtotime($bdate)); 
                                
$sqlcodecheck = mysqli_query($con,"SELECT * FROM tb_rtpcr WHERE rt_ccode='$code' ");
$countsqlcodecheck = mysqli_num_rows($sqlcodecheck);
$sqlschedcheck = mysqli_query($con,"SELECT * FROM tb_rtpcr WHERE rt_datesched='$date' ");
$sqlschedcheck = mysqli_num_rows($sqlschedcheck);

$addhousenum=str_replace($remove, "", strtoupper($_POST['addhousenum']));
$addbrgy=str_replace($remove, "", strtoupper($_POST['addbrgy']));
$city=str_replace($remove, "", strtoupper($_POST['city']));
$province=str_replace($remove, "", strtoupper($_POST['province']));
$region=str_replace($remove, "", strtoupper($_POST['region']));
$homephone=str_replace($remove, "", strtoupper($_POST['homephone']));
                                
 
$nationality=str_replace($remove, "", strtoupper($_POST['nationality']));
$repatriate=str_replace($remove, "", strtoupper($_POST['repatriate']));
$lsi=str_replace($remove, "", strtoupper($_POST['lsi']));
$apor=str_replace($remove, "", strtoupper($_POST['apor']));
$hf=str_replace($remove, "", strtoupper($_POST['hf']));
$qf=str_replace($remove, "", strtoupper($_POST['qf']));
$hq=str_replace($remove, "", strtoupper($_POST['hq']));
$qfname=str_replace($remove, "", strtoupper($_POST['qfname']));
$qfaddress=str_replace($remove, "", strtoupper($_POST['qfaddress']));
$occupation=str_replace($remove, "", strtoupper($_POST['occupation']));
                                
$purpose=str_replace($remove, "", strtoupper($_POST['purpose']));
$purposeothers=str_replace($remove, "", strtoupper($_POST['purposeothers']));

if($purpose==''){
	$purposedata = $purposeothers;
}else{
	$purposedata = $purpose;
}                          
                                
                                
                              #  echo $sqlschedcheck;
 if($sqlschedcheck>21250){
      echo "<div class='alert alert-danger' align='center'><strong>Error! </strong> Please change Date of RT-PCR Test. Maximum daily schedule reached.</div>";
 }else{
     if($countsqlcodecheck>=1){
          $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
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

      $duplicate  = mysqli_query($con, "SELECT * FROM tb_rtpcr WHERE rt_fname='$fname' AND rt_lname='$lname' AND rt_mname='$mname' AND rt_bday='$bdate'") or die(mysqli_error($con));
$usernamecode = strtoupper(substr(str_shuffle(str_repeat($lname, 5)), 0, 5));
$xdate = strtotime($date);
$now = strtotime(date('Y-m-d'));
$sunday = date('l', $xdate);
        if($xdate<=$now){
            echo "<div class='alert alert-danger' align='center'><strong>Error! </strong> Please change Date of RT-PCR Test.</div>";
        }elseif(mysqli_num_rows($duplicate)>=1){
            echo "<div class='alert alert-danger' align='center'><strong>Error! </strong>Applicant <u>".$fname.' '.$mname.' '.$lname."</u></div>";
        }elseif($sunday=='Sunday'){
            echo "<div class='alert alert-danger' align='center'><strong>Error! </strong>Laboratory is closed during Sunday. Please change Date of RT-PCR Test.</u></div>";    
        }else{



          $regrtpax = mysqli_query($con,"INSERT INTO `tb_rtpcr` (`rt_id`, `rt_fname`, `rt_lname`, `rt_mname`, `rt_suffix`, `rt_addhousenum`, `rt_addbrgy`, `rt_city`, `rt_province`, `rt_region`, `rt_homephone`, `rt_gender`, `rt_cstatus`, `rt_bday`, `rt_email`, `rt_contact`, `rt_ccode`, `rt_status`, `rt_lsi`, `rt_datereg`, `rt_datesched`, `rt_repatriate`, `rt_apor`, `rt_purpose`, `rt_hf`, `rt_qf`, `rt_hq`, `rt_qfname`, `rt_qfaddress`, `rt_nationality`, `rt_occup`) VALUES (NULL, '$fname', '$lname', '$mname', '$suffix', '$addhousenum', '$addbrgy', '$city', '$province', '$region', '$homephone', '$gender', '$cstatus', '$bdate', '$email', '$contact', '$code', 'PENDING', '$lsi', CURRENT_TIMESTAMP, '$date', '$repatriate', '$apor', '$purposedata', '$hf', '$qf', '$hq', '$qfname', '$qfaddress', '$nationality', '$occupation')" ) or die(mysqli_error($con));


###
$locimg="<img src='https://www.metroiloilohospital.com/loc.png' width='150'>";
$img="<img src='https://www.metroiloilohospital.com/maillong.png' width='750'>";
$msg=$img."<br>Dear ".$greet." ".$lname.", 
    <br>
    <br>
    <h3>Thank you for using our online registration for RT-PCR Test.</h3>
    <br>Please follow the link to confirm your schedule: 
    <a href='https://mihmci-portals.com/rtapp-profile-login.php?code=".$code."'>Confirm Schedule</a><br><br>
    Login to your Applicant profile using credentials below:<br>
    Username: <b>".$code."</b>
    Password: <b>".$usernamecode."</b>
   	<br><br><a href='https://mihmci-portals.com/rtapp-profile-login.php?code=".$code."'>Confirm Schedule and Login to your Applicant Profile</a><br><br><br>
	Please download and fill-up these forms to be submitted upon arrival:<br>
	Claim Investigation Form : <a href='https://www.metroiloilohospital.com/CIF2PGES.pdf'>Download CIF Form</a><br>
    Consent Waiver Form : <a href='https://www.metroiloilohospital.com/Consent3Pages.pdf'>Download Waiver Form</a><br>
	Claim Form 2: <a href='https://www.metroiloilohospital.com/cf2.pdf'>Download CF2</a><br>
	Contact Tracing Form: <a href='https://www.metroiloilohospital.com/ctf.pdf'>Download Contact Tracing Form</a><br>
	<br>
	Please visit our website for more info: <a href='https://www.metroiloilohospital.com'>Metro Website<a><br>
	Please visit our facebook page for more info: <a href='facebook.com/MIHMCIPH'>FB Page<a>

	<br>
	<br>
	Metro Iloilo Hospital & Medical Center, Inc. Location:<br>Please scan the QR Code<br>".$locimg."

	<br>
CONFIDENTIALITY AND DISCLAIMER NOTICE: This email and any files transmitted with it are confidential and intended solely for the use of the individual(s) or entity(ies) to whom they are addressed. If you have received this email in error please notify the sender immediately and delete this e-mail from your system or computer. If you are not the named addressee you are notified that disclosing, copying, distributing or taking any action in reliance on the contents of this information is strictly prohibited and may be subject to legal action for unauthorized or unlawful use. E-mail transmission cannot be guaranteed to be secure or error-free as information could be intercepted, corrupted, lost, destroyed, arrive late or incomplete, or contain viruses. Metro Iloilo Hospital & Medical Center, Inc, does not accept liability for any errors or omissions in the contents of this message, which arise as a result of e-mail transmission. Any views or opinions presented in this email are solely those of the author and do not necessarily represent that of the institution.
    ";
    
    $to      = $email;
    $subject = "RT-PCR Online Registration";
    $message = $msg;

    $headers = "From: MIHMCI-RTPCR\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
if (mail($to, $subject, $message, $headers))
{
   echo "<div class='alert alert-primary' align='center'><strong>Success! </strong> An email has been sent to <b>$email</b> for verification.<br>E-mail may be delayed up to 1 minute.<br>See you at Metro Iloilo Hospital & Medical Center, Inc.</div>";
}
else
{
     echo "<div class='alert alert-danger' align='center'><strong>Error! </strong>Failed sending verification email. Please try again.</div>";
}     

    }
    
         }
 }
                

                                
                            }
                            
                                ?> 
                          <div class="row">
                          	<div class="col-md-6 col-lg-12 mb-3 font-weight-bold">
								<div>
                                    <h3>Personal Information</h3>
								</div>
							</div>
									<div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            First Name:
											<input class="form-control" type="text" required name="fname" placeholder="First Name" autocomplete="off" value='<?php echo $fname; ?>'>
										</div>
									</div>
									<div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            Middle Name:
											<input class="form-control" type="text" required name="mname" placeholder="Middle Name" autocomplete="off" value='<?php echo $mname; ?>'>
										</div>
									</div>
                              
                              <div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            Last Name:
											<input class="form-control" type="text" required name="lname" placeholder="Last Name" autocomplete="off" value='<?php echo $lname; ?>'>
										</div>
									</div>
                              
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Suffix:
											<input class="form-control" type="text"   name="suffix" placeholder="Last Name" autocomplete="off" value='<?php echo $suffix; ?>'>
										</div>
									</div>
                              
                              
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Birthdate:
											<input class="form-control" type="date" required name="bdate" placeholder="Last Name" autocomplete="off" value='<?php echo $bdate; ?>'>
										</div>
									</div>
                              
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Gender:
                                            <select name='gender' class="form-control">
                                                
                                                <!-- here -->
                                                <option value='MALE'>MALE</option>
                                                <option value='FEMALE'>FEMALE</option>
                                            </select>
											 
										</div>
									</div>
                              
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Civil Status:
                                            <select name='cstatus' class="form-control">
                                                <option value='Single'>Single</option>
                                                <option value='Married'>Married</option>
                                                <option value='Widowed'>Widowed</option>
                                            </select>
											
										</div>
									</div>	<div class="col-lg-4 font-weight-bold">								 
                                            Occupation:
											<input class="form-control" type="text"   name="occupation" placeholder="Med-Tech" autocomplete="off" value='<?php echo $occupation; ?>'>
									</div>
                              
                              <div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            Date of RT-PCR Test:
											<input class="form-control" type="date" required name="date" placeholder="Last Name" autocomplete="off" value='<?php echo $date; ?>'>
										</div>
									</div>
                              
                              <div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            E-Mail:
											<input class="form-control" type="email" required name="email" placeholder="metro@tagbak.com" autocomplete="off" value='<?php echo $email; ?>'>
										</div>
									</div>
                              <div class="col-lg-3 font-weight-bold"> 
                                            House No./Lot/Bldg.:
											<input class="form-control" type="text"   name="addhousenum"   placeholder="1234" value='<?php echo $addhousenum; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Street/Brgy:
											<input class="form-control" type="text"   name="addbrgy" id ="daddbrgy"  placeholder="Brgy Tagbak" value='<?php echo $addbrgy; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Municipality/City:
											<input class="form-control" type="text"   name="city"  id ="dcity"   placeholder="Iloilo City" value='<?php echo $city; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Province:
											<input class="form-control" type="text"   name="province"   id ="dprovince" placeholder="Iloilo" value='<?php echo $province; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                             
                                        <div>
                                            Region:
                                            <select name='region' class="form-control">
                                              <?php echo "<option value='$region'>$region</option>"; ?>
                                                <option value='REGION VI'>REGION VI (WESTERN VISAYAS)</option>
                                                <option value='REGION I'>REGION I (ILOCOS REGION)</option>
                                                <option value='REGION II'>REGION II (CAGAYAN VALLEY)</option>
                                                <option value='REGION III'>REGION III (CENTRAL LUZON)</option>
                                                <option value='REGION IV-A'>REGION IV-A (CALABARZON)</option>
                                                <option value='REGION IV-B'>REGION IV-B (MIMAROPA)</option>
                                                <option value='REGION V'>REGION V (BICOL REGION)</option>
                                                <option value='REGION VI'>REGION VI (WESTERN VISAYAS)</option>
                                                <option value='REGION VIII'>REGION VIII (EASTERN VISAYAS)</option>
                                                <option value='REGION IX'>REGION IX (ZAMBOANGA PENINSULA)</option>
                                                <option value='REGION X'>REGION X (NORTHERN MINDANAO)</option>
                                                <option value='REGION XI'>REGION XI (DAVAO REGION)</option>
                                                <option value='REGION XII'>REGION XII (SOCCSKSARGEN)</option>
                                                <option value='NCR'>NATIONAL CAPITAL REGION (NCR)</option>
                                                <option value='CAR'>Cordillera Administrative (CAR)</option>
                                                <option value='ARMM'>ARMM</option>
                                                <option value='REGION XIII'>REGION XIII (Caraga)</option>
                                            </select>
											
										</div>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Home Phone:
											<input class="form-control" type="text"   name="homephone"  placeholder="3271527" value='<?php echo $homephone; ?>'>
									</div>
                              <div class="col-md-3 col-lg-3">
										<div>
                                            Contact #:
											<input class="form-control" type="text" required name="contact" placeholder="09171234567" autocomplete="off" value='<?php echo $contact; ?>'>
										</div>
									</div>
  <div class="col-lg-3 font-weight-bold">
                                            Nationality:
											<input class="form-control" type="text"   name="nationality" id="nationality" placeholder="Filipino" autocomplete="off" value='<?php echo $nationality; ?>'>
									</div>
                              <div class="col-lg-6 font-weight-bold">
								  <br>
								  			<input type="checkbox"  name="repatriate" value="Repatriate" <?php if($repatriate!=''){ echo "checked"; } ?>>
  											<label for="Repatriate" class='font-weight-bold'>Repatriate</label> <br> 
											<input type="checkbox"  name="lsi" value="lsi" <?php if($lsi!=''){ echo "checked"; } ?> >
  											<label for="lsi" class='font-weight-bold'>Locally Stranded Individual</label> <br> 
											<input type="checkbox"  name="apor" value="apor" <?php if($apor!=''){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Authorized Person Outside Residence (APOR)</label><br> 
											  </div>
                                 <div class="col-lg-6 font-weight-bold">
                                     <?php #echo $purposedata; ?>
								  			<input type="checkbox"  name="purpose" value="Travel Purpose" <?php if($purposedata=='TRAVEL PURPOSE'){ echo "checked"; } ?>>
  											<label for="Repatriate" class='font-weight-bold'>Travel Purpose</label> <br>
											<input type="checkbox"  name="purpose" value="Pre OR/Pre Procedure"<?php if($purposedata=='PRE OR/PRE PROCEDURE'){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Pre OR/Pre Procedure</label> <br>
											<input type="checkbox"  name="purpose" value="Personal"<?php if($purposedata=='PERSONAL'){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Personal</label><br>
											  <input class="form-control" type="text"   name="purposeothers"  placeholder="Reason" autocomplete="off" value='<?php echo $purposeothers; ?>'>
											  </div>
                              <div class="col-lg-12 font-weight-bold ">
											<input type="checkbox"  name="hf" value="Health Facility" <?php if($hq!=''){ echo "checked"; } ?>>
  											<label for="Repatriate" class='font-weight-bold'>Health Facility</label>
											<input type="checkbox"  name="qf" value="Quarantine Facility" <?php if($qf!=''){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Quarantine Facility</label> 
											<input type="checkbox"  name="hq" value="Home Quarantine" <?php if($hq!=''){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Home Quarantine</label><br>
											 Name of Facility: <input class="form-control" type="text"   name="qfname"  placeholder="Building" autocomplete="off" value='<?php echo $qfname; ?>'>
											 Address of Facility: <input class="form-control" type="text"   name="qfaddress"  placeholder="Iloilo" autocomplete="off" value='<?php echo $qfaddress; ?>'>
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
			<div class="container">
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
                                
                                if($_POST['submit2']){
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

		  
		  
		 
    
         <!-- Load Facebook SDK for JavaScript -->
       
		<?php include 'includes/template/footer.php'; ?>
       
         
		<!--
		All JavaScripts Codes Loaded
		Ex: jquery, bootstrap, etc.
		-->
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
  
        
	</body>
</html>
