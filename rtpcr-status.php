<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['sessionid'])) {
	echo "<script>window.location='index.php';</script>";	
}
?>
<!DOCTYPE html>
<html lang="en"> 
<?php
date_default_timezone_set('Asia/Manila');
$rt_id = $_SESSION['sessionid'];
include('config.php');
$micro = round(microtime(true));

$id = $_SESSION['sessionid'];  
$sql = mysqli_query($con, "SELECT rt_id, rt_timestamp, rt_linestatus, rt_validation, rt_dateofinterview, rt_validationts, rt_sentdate FROM tb_rtpcrnewcif WHERE rt_id='$id'") or die(mysqli_error($con));
  while($row=mysqli_fetch_assoc($sql)) {

$id=$row['rt_id'];
$sgstatus=$row['rt_sgstatus'];
$covidid=$row['rt_covidid'];
$closecontactstat=$row['rt_closecontactstat'];
$closecontactperson=$row['rt_closecontactperson'];
$dateofinterview=$row['rt_dateofinterview'];
$lname=$row['rt_lname'];
$fname=$row['rt_fname'];
$mname=$row['rt_mname'];
$suffix=$row['rt_suffix'];
$bdate=$row['rt_bdate'];
$gender=$row['rt_gender'];
$healthworker=$row['rt_healthworker'];
$occupation=$row['rt_occupation'];
$cstatus=$row['rt_cstatus'];
$nationality=$row['rt_nationality'];
$phicnumber=$row['rt_phicnumber'];
$ppnumber=$row['rt_ppnumber'];
$repatriate=$row['rt_repatriate'];
$lsi=$row['rt_lsi'];
$apor=$row['rt_apor'];
$hf=$row['rt_hf'];
$qf=$row['rt_qf'];
$hq=$row['rt_hq'];
$qfname=$row['rt_qfname'];
$qfaddress=$row['rt_qfaddress'];
$addhousenum=$row['rt_addhousenum'];
$addbrgy=$row['rt_addbrgy'];
$city=$row['rt_city'];
$province=$row['rt_province'];
$region=$row['rt_region'];
$homephone=$row['rt_homephone'];
$contactnumber=$row['rt_contactnumber'];
$email=$row['rt_email'];
$daddhousenum=$row['rt_daddhousenum'];
$daddbrgy=$row['rt_daddbrgy'];
$dcity=$row['rt_dcity'];
$dprovince=$row['rt_dprovince'];
$dregion=$row['rt_dregion'];
$dhomephone=$row['rt_dhomephone'];
$dcontactnumber=$row['rt_dcontactnumber'];
$demail=$row['rt_demail'];
$ofwempname=$row['rt_ofwempname'];
$ofwoccupation=$row['rt_ofwoccupation'];
$ofwplaceofwork=$row['rt_ofwplaceofwork'];
$ofwaddhousenum=$row['rt_ofwaddhousenum'];
$ofwaddbrgy=$row['rt_ofwaddbrgy'];
$ofwcity=$row['rt_ofwcity'];
$ofwprovince=$row['rt_ofwprovince'];
$ofwcountry=$row['rt_ofwcountry'];
$ofwofficephone=$row['rt_ofwofficephone'];
$ofwcellphone=$row['rt_ofwcellphone'];
$travelhistory=$row['rt_travelhistory'];
$thcountry=$row['rt_thcountry'];
$thairline=$row['rt_thairline'];
$thflight=$row['rt_thflight'];
$thdateofdeparture=$row['rt_thdateofdeparture'];
$thdateofarrivalph=$row['rt_thdateofarrivalph'];
$exp=$row['rt_exp'];
$expdate=$row['rt_expdate'];
$expctrans=$row['rt_expctrans'];
$expctransyes=$row['rt_expctransyes'];
$expdateinplace=$row['rt_expdateinplace'];
$expnameofplace=$row['rt_expnameofplace'];
$expnamesof=$row['rt_expnamesof'];
$cidisposition=$row['rt_cidisposition'];
$cifever=$row['rt_cifever'];
$cicough=$row['rt_cicough'];
$cisorethroat=$row['rt_cisorethroat'];
$cicolds=$row['rt_cicolds'];
$cibreath=$row['rt_cibreath'];
$cilbm=$row['rt_cilbm'];
$cidateillness=$row['rt_cidateillness'];
$cidateofadmission=$row['rt_cidateofadmission'];
$ciothsymptoms=$row['rt_ciothsymptoms'];
$cihistoillness=$row['rt_cihistoillness'];
$cixraydone=$row['rt_cixraydone'];
$cixraydate=$row['rt_cixraydate'];
$cipregnancy=$row['rt_cipregnancy'];
$cilmp=$row['rt_cilmp'];
$cipreghrisk=$row['rt_cipreghrisk'];
$cixcresult=$row['rt_cixcresult'];
$cixrayfindings=$row['rt_cixrayfindings'];
$si5collected=$row['rt_si5collected'];
$si5received=$row['rt_si5received'];
$si5sent=$row['rt_si5sent'];
$si5type=$row['rt_si5type'];
$si5released=$row['rt_si5released'];
$si5receivedresu=$row['rt_si5receivedresu'];
$si5result=$row['rt_si5result'];
$si4collected=$row['rt_si4collected'];
$si4received=$row['rt_si4received'];
$si4sent=$row['rt_si4sent'];
$si4type=$row['rt_si4type'];
$si4released=$row['rt_si4released'];
$si4receivedresu=$row['rt_si4receivedresu'];
$si4result=$row['rt_si4result'];
$si3collected=$row['rt_si3collected'];
$si3received=$row['rt_si3received'];
$si3sent=$row['rt_si3sent'];
$si3type=$row['rt_si3type'];
$si3released=$row['rt_si3released'];
$si3receivedresu=$row['rt_si3receivedresu'];
$si3result=$row['rt_si3result'];
$si2collected=$row['rt_si2collected'];
$si2received=$row['rt_si2received'];
$si2sent=$row['rt_si2sent'];
$si2type=$row['rt_si2type'];
$si2released=$row['rt_si2released'];
$si2receivedresu=$row['rt_si2receivedresu'];
$si2result=$row['rt_si2result'];
$si1collected=$row['rt_si1collected'];
$si1received=$row['rt_si1received'];
$si1sent=$row['rt_si1sent'];
$si1type=$row['rt_si1type'];
$si1released=$row['rt_si1released'];
$si1receivedresu=$row['rt_si1receivedresu'];
$si1result=$row['rt_si1result'];
$classification=$row['rt_classification'];
$oudischarge=$row['rt_oudischarge'];
$oucondition=$row['rt_oucondition'];
$oudischargedied=$row['rt_oudischargedied'];
$informantname=$row['rt_informantname'];
$informantrel=$row['rt_informantrel'];
$informantcontact=$row['rt_informantcontact'];
$purpose = $row['rt_purpose'];
$finalresult = $row['rt_finalresult'];
$linestatus = $row['rt_linestatus'];
$validation = $row['rt_validation'];
$sentdate = $row['rt_sentdate'];
$sendstatus = $row['rt_sendstatus'];
$rt_timestamp = $row['rt_timestamp'];
$rt_validationts = $row['rt_validationts'];
  }
  
  $filename="CIF$fname$mname$lname$suffix$micro";
  $bday = new DateTime($bdate);  
		$today = new Datetime(date('Y-m-d'));
		$diff = $today->diff($bday);
		$y =  $diff->y;
		
		$egg = $y."Y";
?>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>MIHMCI  RT-PCR Online Status Monitoring</title>
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
	<link rel="stylesheet" href="assetsnew/css/atlantis.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assetsnew/css/demo.css">
	<!--<script data-ad-client="pub-3040695959996788" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
</head>
<link rel="stylesheet" href="jquery-ui.css">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
 

<body style="background-color:#458af7">
	<div class="wrapper fullheight-side sidebar_minimize">
<div class='main-header'>
   <!-- Logo Header -->
   <div class='logo-header' data-background-color='blue'>
    
    <button class='topbar-toggler more'><i class='icon-options-vertical'></i></button>
    <div class='nav-toggle'>
     <button class='btn btn-toggle toggle-sidebar'>
      <img src='assetsnew/images/logo.png' class='img-fluid'>
     </button>
 </div>
   </div>
   <!-- End Logo Header -->
    
    
    
    <!-- Navbar Header -->
   <nav class='navbar navbar-header navbar-expand-lg' data-background-color='blue2'>
    
    <div class='container-fluid'>
     <div class='collapse' id='search-nav'>
        <font color='#fff'>Metro Iloilo Hospital & Medical Center, Inc.</font>
     </div>
     <ul class='navbar-nav topbar-nav ml-md-auto align-items-center'>
      <li class='nav-item'><a class='btn btn-warning' href='logout.php'> <i class='fas fa-sign-out-alt'></i> Logout</a></li>
      </ul>

    </div>
   </nav>
   <!-- End Navbar -->
  </div> 

<!-- Sidebar -->
<div class='sidebar sidebar-style-2 d-none'>
   <div class='sidebar-wrapper scrollbar scrollbar-inner'>
    <div class='sidebar-content'>
    <ul class='nav nav-primary'>
	<?php       
include('rtpcr.nav.php');
?>
 
 </ul>
  </div>
   </div>
  </div>
		<!-- End Sidebar -->

		<div class="main-panel w-100">
			<div class="container">
				<div class="panel-header bg-primary-gradient text-white bubble-shadow">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h1 class="text-white pb-2 fw-bold">RT-PCR Specimen Status Monitoring</h1> 
							</div> 
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt-2">
						<div class="col-md-12">
							<div class="card full-height">
								<form method="POST">
								<div class="card-body">
<?php
$getNoon = date('F d, Y', strtotime($rt_timestamp));
$getNoon .= ' 12:00:00 PM';
$noon = $getNoon;

#echo $noon .= '12:00:00'; 
if($linestatus!='YES'){
  #$linestatus = 'For Verification';
  $linestatus = 'Pending';
}else{
  $linestatus = 'Verified';
}

    if($validation=='YES'){
      $validation = 'Validated : For Sending';
    }else{
      #$validation = 'For Validation';
      $validation = 'Pending';
    }

    
		if($id<='100339') {
			$vts = (strlen($rt_validationts)<>0) ? date('F d, Y  H:i:s A', strtotime($rt_validationts)) : $rt_validationts;
			$verified= 'Verified';
			$validation = 'Validated <br> '. $vts;
			$sendstatus = 'Sent <br>Please check you email or claim at Metro Iloilo Hospital & Medical Center, Inc.';
			
		}else {

			$verified= 'Pending';
			$validation = 'Pending';
	    	#$sentdate = 'For Sending';
	    		if($sentdate!='') {
	    			$vts = (strlen($rt_validationts)<>0) ? date('F d, Y  H:i:s A', strtotime($rt_validationts)) : $rt_validationts;
	    			$verified= 'Verified';
					$validation = 'Validated <br> '. $vts;
	    			$sendstatus = 'Sent | '.date('F d, Y  H:i:s A', strtotime($sentdate)). '<br>Please check you email or claim at Metro Iloilo Hospital & Medical Center, Inc.';
	    		}else {
	    			$vts = (strlen($rt_validationts)<>0) ? date('F d, Y  H:i:s A', strtotime($rt_validationts)) : $rt_validationts;
	    			$verified= 'Verified';
					$validation = 'Pending <br> '. $vts;
	    			$sendstatus = 'Pending';
	    		}
	    	
		}
#
$a = date('m-d-y H:i:s A', strtotime($rt_timestamp));
$b = date('m-d-y H:i:s A', strtotime($noon));
if($a<=$b) {
	$received = $noon;
} else {
	$receivedquery = mysqli_query($con, "SELECT rt_id, rt_dateofinterview, rt_timestamp FROM `tb_rtpcrnewcif` WHERE rt_dateofinterview='$dateofinterview' ORDER BY rt_id DESC LIMIT 1")or die(mysqli_error($con));
	while($row=mysqli_fetch_assoc($receivedquery)) {
		$timestamp = $row['rt_timestamp'];
		$received = date('F d, Y H:i:s A', strtotime($timestamp));//last entry
		
	}
	
}
echo '<div class="alert alert-primary">
<div class="row">
<div class="col-md-4">
<div class="card card-dark bg-primary-gradient bubble-shadow">
	<div class="card-body">
		<h1><i class="fas fa-vial"></i> Collected</h1>
		<h2>Specimen Collected<br>'.date('F d, Y  H:i:s A', strtotime($rt_timestamp)).'</h2>
	</div>
</div>
</div>
<div class="col-md-4">
<div class="card card-dark bg-secondary-gradient bubble-shadow">
	<div class="card-body">
		<h1><i class="fas fa-file-medical"></i> Received</h1>
		<h2>Lab Received Specimen<br>'.$received.'</h2>
	</div>
</div>
</div>
<div class="col-md-4">
<div class="card card-dark bg-warning-gradient bubble-shadow">
	<div class="card-body">
		<h1><i class="fas fa-check"></i> Validation</h1>
		<h2>'.$validation.'</h2>
	</div>
</div>
</div>
<div class="col-md-12">
<div class="card card-dark bg-success-gradient bubble-shadow">
	<div class="card-body">
		<h1><i class="fas fa-paper-plane"></i> Released</h1>
		<h2>'.$sendstatus.'</h2>
	</div>
</div>
</div>
</div>';
echo '</div>';
?>

  </div>
  <div class="card-footer">
		<div class="alert alert-warning">
			<h5><b><u>Legend</u></b></h5>
   			<p class="mb-0"><b>Specimen Collected: Date specimen received</b></p>
   			<p class="font-italic mb-1">Specimen goes through inactivation, extraction, template adding and to PCR Machine.</p>
   			<p class="font-weight-bold mb-0">Verified: PCR Machine results verified</p>
   			<p class="font-italic mb-1">Results from PCR machine are verified by our licensed Pathologist/s.</p>
   			<p class="font-weight-bold mb-0">Validation: Validation of results</p>
   			<p class="font-italic mb-1">Verified results from pathologist are being validated by Chief Medical Technologist before releasing.</p>
   			<p class="font-weight-bold mb-0">Releasing: Releasing/Sending of results</p>
   			<p class="font-italic mb-1">After Validation results are ready to be sent through email.</p>
		</div>
	</div>
                              <!-- end div row-->
                              
                              
                           </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<br>
		<br>
		<br>
		<br>
			<footer class="footer">
				<div class="container-fluid">
					 
					<div class="copyright ml-auto">
					Copyright &copy; 2020 | HIS Department
					</div>				
				</div>
			</footer>
		</div>
	
		 
		 
		 
	</div>
	<script>
 function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
   
     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
	 
}</script>
  <!--    var y = "<?php #echo $id; ?>";
	 var x = "<?php #echo $filename; ?>";
	 window.location.href = "rtpcr.updatecif.php?rtid=" + y + "&&filename=" + x;  --> 
  <!--   Core JS Files   --> 
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

	<!-- Owl Carousel -->
	<script src="assetsnew/js/plugin/owl-carousel/owl.carousel.min.js"></script>

	<!-- Magnific Popup -->
	<script src="assetsnew/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assetsnew/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	
</body>
</html>