<?php 
session_start();
$rt_ccode = $_SESSION['ssid'];
//session checker
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

		<!--title>Metro Iloilo Hospital & Medical Center, Inc. | Home</title-->
		<title>Metro Iloilo Hospital & Medical Center, Inc. | RT-PCR Applicant Profile</title>
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
            .form-control:disabled, .form-control[readonly] {
                background:#fff !important;
            }
        </style>
   <!-- <script data-ad-client="pub-3040695959996788" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>  -->
	</head>
	<body style="font-family: Verdana;">
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="f75IyDp9"></script> 
     <?php include 'includes/template/header.php'; ?>
      <div  style='background-image: url("images/banners/rtpcr.jpg");padding-top:3%;padding-bottom:3%;'  class="mg-page-title parallax">
        <div class="container" style='margin-top:6%;'>
				<div class="row">
					<div class="col-md-12">
            <h1 style='color: #ffffff;'><b>MIHMCI RT-PCR Applicant Profile</b></h1>

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
#echo $_SESSION['sid'];
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
 if($sqlschedcheck>50){
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
$xdate = strtotime($date);
$now = strtotime(date('Y-m-d'));
$sunday = date('l', $xdate);

         if($date<='2020-09-16'){
            echo "<div class='alert alert-danger' align='center'><strong>Error! </strong> Please change date.</div>";
          #}elseif(mysqli_num_rows($duplicate)<>0){
          #echo "<div class='alert alert-danger' align='center'><strong>Error! </strong>Applicant <u>".$fname.' '.$mname.' '.$lname."</u></div>";
        }elseif($sunday=='Sunday'){
            echo "<div class='alert alert-danger' align='center'><strong>Error! </strong>Laboratory is closed during Sunday. Please change Date of RT-PCR Test.</u></div>";
         }else{
         	//update
          $regrtpax = mysqli_query($con,"UPDATE `tb_rtpcr` SET `rt_fname`='$fname',`rt_lname`='$lname',`rt_mname`='$mname',`rt_suffix`='$suffix',`rt_addhousenum`='$addhousenum',`rt_addbrgy`='$addbrgy',`rt_city`='$city',`rt_province`='$province',`rt_region`='$region',`rt_homephone`='$homephone',`rt_gender`='$gender',`rt_cstatus`='$cstatus',`rt_bday`='$bdate',`rt_email`='$email',`rt_contact`='$contact', `rt_lsi`='$lsi',`rt_datesched`='$date',`rt_repatriate`='$repatriate',`rt_apor`='$apor',`rt_purpose`='$purposedata',`rt_hf`='$hf',`rt_qf`='$qf',`rt_hq`='$hq',`rt_qfname`='$qfname',`rt_qfaddress`='$qfaddress',`rt_nationality`='$nationality',`rt_occup`='$occupation' WHERE rt_ccode='$rt_ccode' " ) or die(mysqli_error($con));
         echo "<div class='alert alert-primary' align='center'><strong>Success! </strong> Applicant profile has been updated.</div>";
    }
         }
 }
    
                   

                                
                            }
                         ?> 
                          <div class="row">
                          	<?php 
                          		
                          		$default_value = mysqli_query($con, "SELECT * FROM tb_rtpcr WHERE rt_ccode='$rt_ccode'") or die(mysqli_error($con));
                          		if(mysqli_num_rows($default_value)<>0){
                          			while($row=mysqli_fetch_assoc($default_value)) {
                          				$dv_fname = $row['rt_fname'];
                          				$dv_lname = $row['rt_lname'];
                          				$dv_mname = $row['rt_mname'];
                          				$dv_suffix = $row['rt_suffix'];
                          				$dv_addhousenum = $row['rt_addhousenum'];
                          				$dv_addbrgy = $row['rt_addbrgy'];
                          				$dv_city = $row['rt_city'];
                          				$dv_province = $row['rt_province'];
                          				$dv_region = $row['rt_region'];
                          				$dv_homephone = $row['rt_homephone'];
                          				$dv_gender = $row['rt_gender'];
                          				$dv_cstatus = $row['rt_cstatus'];
                          				$dv_bday = $row['rt_bday'];
                          				$dv_email = $row['rt_email'];
                          				$dv_contact = $row['rt_contact'];
                          				$dv_ccode = $row['rt_ccode'];
                          				$dv_status = $row['rt_status'];
                          				$dv_lsi = $row['rt_lsi'];
                          				$dv_datereg = $row['rt_datereg'];
                          				$dv_datesched = $row['rt_datesched'];
                          				$dv_repatriate = $row['rt_repatriate'];
                          				$dv_apor = $row['rt_apor'];
                          				$dv_purpose = $row['rt_purpose'];
                          				$dv_hf = $row['rt_hf'];
                          				$dv_qf = $row['rt_qf'];
                          				$dv_hq = $row['rt_hq'];
                          				$dv_qfname = $row['rt_qfname'];
                          				$dv_qfaddress = $row['rt_qfaddress'];
                          				$dv_nationality = $row['rt_nationality'];
                          				$dv_occup = $row['rt_occup'];
                          			}
                          		}//end num_rows
                          	?>
                             <div class="col-md-6 col-lg-12 mb-3 font-weight-bold">
                                <div>
                                    <h3>Personal Information</h3>
                                </div>
                            </div>
                              
									<div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            First Name:
											<input class="form-control" type="text" required name="fname" placeholder="First Name" autocomplete="off" value="<?php echo $dv_fname;?>">
										</div>
									</div>
									<div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            Middle Name:
											<input class="form-control" type="text" required name="mname" placeholder="Middle Name" autocomplete="off" value='<?php echo $dv_mname; ?>'>
										</div>
									</div>
                              
                              <div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            Last Name:
											<input class="form-control" type="text" required name="lname" placeholder="Last Name" autocomplete="off" value='<?php echo $dv_lname; ?>'>
										</div>
									</div>
                              
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Suffix:
											<input class="form-control" type="text"   name="suffix" placeholder="Last Name" autocomplete="off" value='<?php echo $dv_suffix; ?>'>
										</div>
									</div>
                              
                              
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Birthdate:
                      <input type="text" class="form-control" id="bdate" name="bdate" value='<?php echo $dv_bday; ?>' placeholder="yyyy-mm-dd"' required>                      
											<!-- <input class="form-control" type="date" required name="bdate" placeholder="Last Name" autocomplete="off" value='<?php echo $dv_bday;?>'> -->
										</div>
									</div>
                              
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Gender:
                                            <select name='gender' class="form-control">
                                                
                                                <!-- here -->
                                                <option value='<?php echo $dv_gender;?>'><?php echo $dv_gender;?></option>
                                                <option value='MALE'>MALE</option>
                                                <option value='FEMALE'>FEMALE</option>
                                            </select>
											 
										</div>
									</div>
                              
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Civil Status:
                                            <select name='cstatus' class="form-control">
                                                <option value='<?php echo $dv_cstatus; ?>'><?php echo $dv_cstatus;?></option>
                                                <option value='Single'>Single</option>
                                                <option value='Married'>Married</option>
                                                <option value='Widowed'>Widowed</option>
                                            </select>
											
										</div>
									</div>	<div class="col-lg-4 font-weight-bold">								 
                                            Occupation:
											<input class="form-control" type="text"   name="occupation" placeholder="Med-Tech" autocomplete="off" value='<?php echo $dv_occup; ?>'>
									</div>
                              
                              <div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            Date of RT-PCR Test:
                                            <input type="text" class="form-control" id="testdate" name="date" value='<?php echo $dv_datesched; ?>' placeholder="yyyy-mm-dd"' required>
											<!--- <input class="form-control" type="date" required name="date" placeholder="Last Name" autocomplete="off" value='<?php echo $dv_datesched; ?>'> --->
										</div>
									</div>
                              
                              <div class="col-md-6 col-lg-4 font-weight-bold">
										<div>
                                            E-Mail:
											<input class="form-control" type="email" required name="email" placeholder="metro@tagbak.com" autocomplete="off" value='<?php echo $dv_email; ?>'>
										</div>
									</div>
                              <div class="col-lg-3 font-weight-bold"> 
                                            House No./Lot/Bldg.:
											<input class="form-control" type="text"   name="addhousenum"   placeholder="1234" value='<?php echo $dv_addhousenum; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Street/Brgy:
											<input class="form-control" type="text"   name="addbrgy" id ="daddbrgy"  placeholder="Brgy Tagbak" value='<?php echo $dv_addbrgy; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Municipality/City:
											<input class="form-control" type="text"   name="city"  id ="dcity"   placeholder="Iloilo City" value='<?php echo $dv_city; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                            Province:
											<input class="form-control" type="text"   name="province"   id ="dprovince" placeholder="Iloilo" value='<?php echo $dv_province; ?>'>
									</div>
									<div class="col-lg-3 font-weight-bold">
                                             
                                        <div>
                                            Region:
                                            <select name='region' class="form-control">
                                              <?php echo "<option value='$dv_region'>$dv_region</option>"; ?>
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
											<input class="form-control" type="text"   name="homephone"  placeholder="3271527" value='<?php echo ($dv_homephone<>'')? $dv_homephone : $dv_homephone='n/a'; ?>'>
									</div>
                              <div class="col-md-3 col-lg-3 font-weight-bold">
										<div>
                                            Contact #:
											<input class="form-control" type="text" required name="contact" placeholder="09171234567" autocomplete="off" value='<?php echo $dv_contact; ?>'>
										</div>
									</div>
  <div class="col-lg-3 font-weight-bold">
                                            Nationality:
											<input class="form-control" type="text"   name="nationality" id="nationality" placeholder="Filipino" autocomplete="off" value='<?php echo $dv_nationality; ?>'>
									</div>
                              <div class="col-lg-6 font-weight-bold">
								  <br>
								  			<input type="checkbox"  name="repatriate" value="Repatriate" <?php if($dv_repatriate!=''){ echo "checked"; } ?>>
  											<label for="Repatriate" class='font-weight-bold'>Repatriate</label> <br> 
											<input type="checkbox"  name="lsi" value="lsi" <?php if($dv_lsi!=''){ echo "checked"; } ?> >
  											<label for="lsi" class='font-weight-bold'>Locally Stranded Individual</label> <br> 
											<input type="checkbox"  name="apor" value="apor" <?php if($dv_apor!=''){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Authorized Person Outside Residence (APOR)</label><br> 
											  </div>
                                 <div class="col-lg-6 font-weight-bold">
                                     <?php #echo $purposedata; ?>
								  			<input type="checkbox"  name="purpose" value="Travel Purpose" <?php if($dv_purpose=='TRAVEL PURPOSE'){ echo "checked"; } ?>>
  											<label for="Repatriate" class='font-weight-bold'>Travel Purpose</label> <br>
											<input type="checkbox"  name="purpose" value="Pre OR/Pre Procedure"<?php if($dv_purpose=='PRE OR/PRE PROCEDURE'){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Pre OR/Pre Procedure</label> <br>
											<input type="checkbox"  name="purpose" value="Personal"<?php if($dv_purpose=='PERSONAL'){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Personal</label><br>
											  <input class="form-control" type="text"   name="purposeothers"  placeholder="Reason" autocomplete="off" value='<?php echo $purposeothers; ?>'>
											  </div>
                              <div class="col-lg-12 font-weight-bold ">
											<input type="checkbox"  name="hf" value="Health Facility" <?php if($dv_hf!=''){ echo "checked"; } ?>>
  											<label for="Repatriate" class='font-weight-bold'>Health Facility</label>
											<input type="checkbox"  name="qf" value="Quarantine Facility" <?php if($dv_qf!=''){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Quarantine Facility</label> 
											<input type="checkbox"  name="hq" value="Home Quarantine" <?php if($dv_hq!=''){ echo "checked"; } ?>>
  											<label for="lsi" class='font-weight-bold'>Home Quarantine</label><br>
											 Name of Facility: <input class="form-control" type="text"   name="qfname"  placeholder="Building" autocomplete="off" value='<?php echo $dv_qfname; ?>'>
											 Address of Facility: <input class="form-control" type="text"   name="qfaddress"  placeholder="Iloilo" autocomplete="off" value='<?php echo $dv_qfaddress; ?>'>
									</div>
                                <div class="col-md-12 col-lg-12">
										<div>
                                             &nbsp;  
                                             <input type='submit' name="submit" class="btn btn-main btn-block" value="UPDATE APPLICANT PROFILE">
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
        $('#testdate').dateTimePicker();
        $('#bdate').dateTimePicker();
    });
    </script>
	</body>
</html>
