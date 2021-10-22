<?php
session_start();
if(!isset($_SESSION['sessionid'])) {
	echo "<script>window.location='index.php';</script>";	
}
?>
<!DOCTYPE html>
<html lang="en"> 
<?php
include('includes/config.php');
$rt_id = $_SESSION['sessionid'];
/*$micro = round(microtime(true));
  

  $filename="CIF$fname$mname$lname$suffix$micro";
  $bday = new DateTime($bdate);  
		$today = new Datetime(date('Y-m-d'));
		$diff = $today->diff($bday);
		$y =  $diff->y;
		
		$egg = $y."Y";*/
?>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>MIHMCI  RT-PCR Online Status Monitoring List</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/images/logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<style>
		.dataTables_wrapper .row:nth-child(1) {
			background: linear-gradient(-45deg, #06418E, #1572E8) !important;
			padding:1%;
			
		}
		.dataTables_filter label, .dataTables_length label {
			color:#FFFFFF !important;
		}
	</style>
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body style="background-color:#458af7">
	<div class="wrapper fullheight-side sidebar_minimize">
<div class='main-header'>
   <!-- Logo Header -->
   <div class='logo-header' data-background-color='blue'>
    
    <button class='topbar-toggler more'><i class='icon-options-vertical'></i></button>
    <div class='nav-toggle'>
     <button class='btn btn-toggle toggle-sidebar'>
      <img src='assets/images/logo.png' class='img-fluid'>
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
								<h1 class="text-white pb-2 fw-bold">RT-PCR Specimen Status Monitoring List</h1> 
							</div> 
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt-2">
						<div class="col-md-12">
							<div class="card p-5">
								<div class="table-responsive">
								<table class="table table-bordered table-dark" id="basic-datatables">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">RECEIVED</th>
                                            <th scope="col">VALIDATED</th>
                                            <th scope="col">RESULT RELEASED</th>
                                            <th scope="col">VIEW</th>
                                        </tr>
                                    </thead>
                                <?php
                                #mysqli_query($con, "SET NAMES utf8; SET CHARACTER SET utf8;")or die(mysqli_error($con));
$result = mysqli_query($con, "SET NAMES utf8")or die(mysqli_error($con));
$query = "SELECT * FROM tb_rtpcrfull";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
                               #$query = mysqli_query($con, "SELECT * FROM tb_rtpcrfull") or die(mysqli_error($con));
while($row=mysqli_fetch_assoc($result)){ 
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
#
if($si1type!=''){
  $si1received =  date('F d, Y  H:i:s A', strtotime($si1received)); 
  } 
  if($si2type!=''){
  #2
  $si2received =  date('F d, Y H:i:s A', strtotime($si2received)); 
  }
  if($si3type!=''){
  #3
  $si3received =  date('F d, Y H:i:s A', strtotime($si3received)); 
  }
  if($si4type!=''){
  #4
  $si4received =  date('F d, Y H:i:s A', strtotime($si4received)); 
  }
  if($si5type!=''){
  #5
  $si5received =  date('F d, Y H:i:s A', strtotime($si5received)); 
  }

#echo "<td class='table-light'>$validation</td>";
#echo "</tr>
#<tr>
#<th scope='col' width='50%'>Released</th> ";
#date('Y-m-d H:i:s', strtotime($stop_date . ' +1 day'));
# | '.date('F d, Y', strtotime($si1received. ' +1 day')).' 8:00:00 AM
#if(rt_timestamp<=12Noon same day) received is 12nn that day
#else if 12NooN<=rt_timestamp received last timestamp of the day
#receive =
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
					$validation = 'Validated <br> '. $vts;
	    			$sendstatus = 'Pending';
	    		}
	    	
		}
#
$a = date('m-d-y H:i:s A', strtotime($rt_timestamp));
$b = date('m-d-y H:i:s A', strtotime($noon));
if($a<=$b) {
	$received = $noon;
} else {
	$receivedquery = mysqli_query($con, "SELECT rt_id, rt_dateofinterview, rt_timestamp FROM `tb_rtpcrfull` WHERE rt_dateofinterview='$dateofinterview' ORDER BY rt_id DESC LIMIT 1")or die(mysqli_error($con));
	while($row=mysqli_fetch_assoc($receivedquery)) {
		$timestamp = $row['rt_timestamp'];
		$received = date('F d, Y H:i:s A', strtotime($timestamp));
	}
	
}
$fullname = ucwords(strtolower($lname)).''.ucwords(strtolower($suffix)).', '.ucwords(strtolower($fname)).' '.ucwords(strtolower($mname));
echo '<tr>';
echo '<td>'.$id.'</td>';
echo '<td>'.$fullname.'</td>';
echo '<td>'.$received.'</td>';
echo '<td>'.$validation.'</td>';
echo '<td>'.$sendstatus.'</td>';
echo '<td><a href="rtpcr-status.php?id='.$id.'" class="btn btn-success viewresult" target="_blank" data-target="#viewResult" data-toggle="modal" data-id="'.$id.'" data-collected="'.$rt_timestamp.'" data-received="'.$received.'" data-validation="'.$validation.'" data-released="'.$sendstatus.'" data-name="'.$fullname.'">View</td>';
echo '</tr>';
	  
  }
                                ?>
                                </table> 
                                </div>  
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
					&copy; 2020 | HIS Department
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
  <script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
<script>
$(document).ready(function() {
	$('#basic-datatables').DataTable();
	$(document).on('click', '.viewresult', function(e) {
		var id = e.currentTarget.dataset.id;
		var collected = e.currentTarget.dataset.collected;
		var received = e.currentTarget.dataset.received;
		var validation = e.currentTarget.dataset.validation;
		var released = e.currentTarget.dataset.released;
		var name = e.currentTarget.dataset.name;
			$('#viewResult').modal('show');
			$('#viewResult').on('shown.bs.modal', function () {
				console.log(id);
				var modal  = $(this);
				var title = 'RT-PCR Result ID: ' + id+'<br> Name: '+name;
				var message = '<div class="alert alert-primary"><div class="row"><div class="col-md-4"><div class="card card-dark bg-primary-gradient bubble-shadow"><div class="card-body"><h1><i class="fas fa-vial"></i> Collected</h1><h2>Specimen Collected<br>'+collected+'</h2></div></div></div><div class="col-md-4"><div class="card card-dark bg-secondary-gradient bubble-shadow"><div class="card-body"><h1><i class="fas fa-file-medical"></i> Recieved</h1><h2>Lab Received Specimen<br>'+received+'</h2></div></div></div><div class="col-md-4"><div class="card card-dark bg-warning-gradient bubble-shadow"><div class="card-body"><h1><i class="fas fa-check"></i> Validation</h1><h2>'+validation+'</h2></div></div></div><div class="col-md-12"><div class="card card-dark bg-success-gradient bubble-shadow"><div class="card-body"><h1><i class="fas fa-paper-plane"></i> Released</h1><h2>'+released+'</h2></div></div></div></div></div>';
				modal.find('#viewTitle').html(title);
				modal.find('.modal-body').html(message);
			});

	});
});
</script>
<div class="modal fade" id="viewResult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" style='max-width: 90%;' role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary-gradient">
				<h3 class="modal-title text-light" id="viewTitle"></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>