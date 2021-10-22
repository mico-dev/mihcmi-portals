<?php
#error_reporting(0);
session_start();
if(!isset($_SESSION['sessionid'])) {
	echo "<script>window.location='index.php';</script>";	
}
?>
<!DOCTYPE html>
<html lang="en"> 
<?php
include('config.php');
date_default_timezone_set('Asia/Manila');
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
	<link rel="stylesheet" href="assetsnew/css/bootstrap.min.css">
	<link rel="stylesheet" href="assetsnew/css/atlantis.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assetsnew/css/demo.css">
</head>
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
								###new update 10-22-2021
								#change tb_rtpcrnewv9 to tb_rtpcrnewv9
								$query = $con->query("SELECT rt_id, rt_lname, rt_fname, rt_mname, rt_sendstatus, rt_suffix, rt_timestamp, rt_linestatus, rt_validation, rt_dateofinterview, rt_sentdate, rt_validationts, rt_si1collected, rt_si1collectedtime, rt_ctrtimestamp, rt_vipstatustime FROM tb_rtpcrnewv9") or die($con->error);
								while($row=$query->fetch_assoc()){
									$rt_id = $row['rt_id'];
									$rt_lname = $row['rt_lname'];
									$rt_fname = $row['rt_fname'];
									$rt_mname = $row['rt_mname'];
									$rt_sendstatus = $row['rt_sendstatus'];
									$rt_suffix = $row['rt_suffix'];
									$rt_timestamp = $row['rt_timestamp'];
									$rt_linestatus = $row['rt_linestatus'];
									$rt_validation = $row['rt_validation'];
									$rt_dateofinterview = $row['rt_dateofinterview'];
									$rt_sentdate = $row['rt_sentdate'];
									$rt_validationts = $row['rt_validationts'];
									$rt_si1collected = $row['rt_si1collected'];
									$rt_si1collectedtime = $row['rt_si1collectedtime'];
									$rt_ctrtimestamp = $row['rt_ctrtimestamp'];
									$rt_vipstatustime = $row['rt_vipstatustime'];

									$getNoon = date('F d, Y', strtotime($rt_timestamp));
									$getNoon .= ' 12:00:00 PM';
									$noon = $getNoon;
								
									if($rt_linestatus!='YES'){
								
										$rt_linestatus = 'Pending';
									}else{
										$rt_linestatus = 'Verified';
									}

									if($rt_validation=='YES'){
										$rt_validation = 'Validated : For Sending';
									}else{
										#$validation = 'For Validation';
										$rt_validation = 'Pending';
									}
										if($rt_id<='100339') {
											$vts = (strlen($rt_validationts)<>0) ? date('F d, Y  H:i:s A', strtotime($rt_validationts)) : $rt_validationts;
											$verified= 'Verified';
											$rt_validation = 'Validated <br> '. $vts;
											$sendstatus = 'Sent <br>Please check you email or claim at Metro Iloilo Hospital & Medical Center, Inc.';

										} else {
											
											$verified= 'Pending';
											$rt_validation = 'Pending';
												if($rt_sentdate!='') {
													$vts = (strlen($rt_validationts)<>0) ? date('F d, Y  H:i:s A', strtotime($rt_validationts)) : $rt_validationts;
													$verified= 'Verified';
													$rt_validation = 'Validated <br> '. $vts;
													$sendstatus = 'Sent | '.date('F d, Y  H:i:s A', strtotime($rt_sentdate)). '<br>Please check you email or claim at Metro Iloilo Hospital & Medical Center, Inc.';
												}else {
													$vts = (strlen($rt_validationts)<>0) ? date('F d, Y  H:i:s A', strtotime($rt_validationts)) : $rt_validationts;
													$verified= 'Verified';
													$rt_validation = 'Pending <br> '. $vts;
													$sendstatus = 'Pending';
												}
											
										}

											$getNoon = date('F d, Y', strtotime($rt_timestamp));
											$getNoon .= ' 12:00:00 PM';
											$noon = $getNoon;
											
											if($rt_id>='152848') {
												if($rt_vipstatustime == "00:00:00") {
													$received = "Pending";
												}else{
													$received = date('H:i:s A', strtotime($rt_vipstatustime));
												}
											} else {
												$a = date('m-d-y H:i:s A', strtotime($rt_timestamp));
												$b = date('m-d-y H:i:s A', strtotime($noon));
												
												if($a<=$b) {
													#$received = $noon;
													$received =  " 10:00 AM";	
												} else {
													$receivedquery = mysqli_query($con, "SELECT rt_id, rt_dateofinterview, rt_timestamp FROM `tb_rtpcrnewv9` WHERE rt_dateofinterview='$rt_dateofinterview' ORDER BY rt_id DESC LIMIT 1")or die(mysqli_error($con));
													while($row=mysqli_fetch_assoc($receivedquery)) {
														$timestamp = $row['rt_timestamp'];
														$received = date('F d, Y H:i:s A', strtotime($timestamp));
													}
													
												}
											}		
								
									$fullname = ucwords(strtolower($rt_lname)).' '.ucwords(strtolower($rt_suffix)).', '.ucwords(strtolower($rt_fname)).' '.ucwords(strtolower($rt_mname));
									echo '<tr>';
									echo '<td>'.$rt_id.'</td>';
									echo '<td>'.$fullname.'</td>';
									echo '<td>'.$received.'</td>';
									echo '<td>'.$rt_validation.'</td>';
									echo '<td>'.$sendstatus.'</td>';
									echo '<td><a href="rtpcr-status.php?id='.$rt_id.'" class="btn btn-success viewresult" target="_blank" data-target="#viewResult" data-toggle="modal" data-id="'.$rt_id.'" data-collected="'.$rt_timestamp.'" data-received="'.$received.'" data-validation="'.$rt_validation.'" data-released="'.$sendstatus.'" data-name="'.$fullname.'">View</td>';
									echo '</tr>';
									
								}
								###new update 10-22-2021
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
  <script src="assetsnew/js/core/jquery.3.2.1.min.js"></script>
	<script src="assetsnew/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assetsnew/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<script src="assetsnew/js/core/popper.min.js"></script>
	<script src="assetsnew/js/core/bootstrap.min.js"></script>
	<script src="assetsnew/js/plugin/datatables/datatables.min.js"></script>

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
				var message = '<div class="alert alert-primary"><div class="row"><div class="col-md-4"><div class="card card-dark bg-primary-gradient bubble-shadow"><div class="card-body"><h1><i class="fas fa-vial"></i> Collected</h1><h2>Specimen Collected<br>'+collected+'</h2></div></div></div><div class="col-md-4"><div class="card card-dark bg-secondary-gradient bubble-shadow"><div class="card-body"><h1><i class="fas fa-file-medical"></i> Received</h1><h2>Lab Received Specimen<br>'+received+'</h2></div></div></div><div class="col-md-4"><div class="card card-dark bg-warning-gradient bubble-shadow"><div class="card-body"><h1><i class="fas fa-check"></i> Validation</h1><h2>'+validation+'</h2></div></div></div><div class="col-md-12"><div class="card card-dark bg-success-gradient bubble-shadow"><div class="card-body"><h1><i class="fas fa-paper-plane"></i> Released</h1><h2>'+released+'</h2></div></div></div></div></div>';
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