
<?php 
include('config.php');
session_start();

$username = (isset($_SESSION['username']))? $_SESSION['username'] : NULL; 
$password = (isset($_SESSION['password']))? $_SESSION['password'] : NULL;
$position = (isset($_SESSION['position']))? $_SESSION['position'] : NULL;

if(($username==NULL) OR ($password==NULL) OR ($position==NULL)) {
		echo "<script>window.location='logout.php';</script>";
	}

$page_title = 'report';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Report | MIHMCI CE 2021</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link data-default-icon="assets/images/iBB Icon.ico" data-badged-icon="assets/images/iBB Icon.ico" rel="shortcut icon" href="assets/images/iBB Icon.ico">

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.css">
</head>
<body data-background-color="">
	<div class="wrapper overlay-sidebar">
        <div class="main-header">
			<div class="logo-header" data-background-color="blue2">
				<a href="index.php" class="logo"><img src='assets/images/logo.png' width='32' alt='MIHMCI iBB' class='navbar-brand'><font color='#fff'><b> MIHMCI CE</b></font></a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle sidenav-overlay-toggler">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2"><!-- Navbar Header -->
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/images/iBB Icon.ico" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn shadow-lg">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="u-text">
												<h4>Welcome back, <?php echo $username;?></h4>
												<p class="text-muted"><?php echo ucwords($position);?></p>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item disabled" href="">System Time <span id="timer"></span></a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="logout.php">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav><!-- End Navbar -->
		</div>
		<?php include 'includes/templates/main-navigation.php'?>
		<div class="main-panel">
			<div class="container">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row">
						<div class="col-md-12">
							<div class="card shadow-lg bg-light">
								<div class="card-header">
									<div class="card-title">Employee List</div>
								</div>
								<div class="card-body">
									<div class="col-12">
										<form method='POST' class="mb-3" action=''>
											<div class="row align-items-end no-gutters">
												<div class="col-4">
													<div class="form-group">
														<p class="mb-0">Fullname</p>
														<input type="text" class="form-control" name="ffullname" id="ffullname">
													</div>
												</div>
												<div class="col-6">
													<div class="row no-gutters align-items-end">
														<div class="col-6">
															<div class="form-group">
															<p class="mb-0">Absent  Date</p>
																<div class="input-group">
																	<div class="input-group-prepend">
																		<span class="input-group-text" id="inputGroupPrepend2">From</span>
																	</div>
																	
																	<input type="text" class="form-control" name="ffrom" id="ffrom">
																</div>
															</div>
														</div>
														<div class="col-6">
															<div class="form-group">
																<div class="input-group">
																	<div class="input-group-prepend">
																		<span class="input-group-text" id="inputGroupPrepend2">To</span>
																	</div>
																	<input type="text" class="form-control" name="tto" id="tto">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col">
													<div class="row no-gutters">
														<div class="col-6">
															<div class="form-group">
																<input type="submit" class="btn btn-success" name="filter" value="Filter">
															</div>
														</div>
														<div class="col-6">
															<div class="form-group">
																<a href="" class="btn btn-warning">Reset </a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="col-12 table-responsive">
										<table class="table table-bordered table-hover table-head-bg-primary w-100 shadow-lg" id="">
										<thead>
											<tr>
												<th>Date</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Age</th>
												<th>Address</th>
												<th>Chief Complaints</th>
												<th>Date Absent</th>';
												<th>Action</th>
											</tr>
										</thead>	
										<tbody>
											<?php 
                                        if(isset($_POST['filter'])){
											$ffullname = $_POST['ffullname'];
											$ffdate = $_POST['ffrom'];
											$ttdate = $_POST['tto'];
											if($ffullname!='') {
												$sql = $con->query("SELECT * FROM `tb_employee` WHERE `fullname` LIKE '%$ffullname%'") or die($con->error);
											}
											if(($ffdate!='') AND ($ttdate!='')) {
												$sql = $con->query("SELECT * FROM `tb_employee` WHERE `fdate`>='$ffdate' AND `tdate`<='$ttdate'") or die($con->error);
											}
											if(($ffullname!='') AND ($ffdate!='') AND ($ttdate!='')) {
												$sql = $con->query("SELECT * FROM `tb_employee` WHERE `fullname` LIKE '%$ffullname%' AND `fdate`>='$ffdate' AND `tdate`<='$ttdate'") or die($con->error);
											}
										} else {
											$sql = $con->query("SELECT * FROM `tb_employee` ORDER BY `id` ASC LIMIT 25") or die($con->error);
										} 
										while($row = $sql->fetch_assoc()) {
											$id = $row['id'];
											$regdate = $row['regdate'];
											$fullname = $row['fullname'];
											$gender = $row['gender'];
											$age = $row['age'];
											$address = $row['address'];
											$contactno = $row['contactno'];
											$email = $row['email'];
											$chiefcomplaints = $row['chiefcomplaints'];
											$fdate = $row['fdate'];
											$tdate =$row['tdate'];
											$impression = $row['impression'];
											$labwork = $row['labwork'];
											$medicine = $row['medicine'];
											$remarks = $row['remarks'];
											$encoder = $row['encoder'];
											
											echo '<tr>
											<td>'.$regdate.'</td>
											<td>'.$fullname.'</td>
											<td>'.$gender.'</td>
											<td>'.$age.'</td>
											<td>'.$address.'</td>';
											/*echo '
											<td>'.$contactno.'</td>
											<td>'.$email.'</td>';*/
											echo'
											<td>'.$chiefcomplaints.'</td>
											<td>'.$fdate.' to '.$tdate.'</td>';
											/*echo ' <td>'.$impression.'</td>
											<td>'.$labwork.'</td>
											<td>'.$medicine.'</td>
											<td>'.$remarks.'</td>';*/
											if($position!='admin') {
												echo '<td ><button class="btn btn-sm btn-info view" data-id="'.$id.'" id="view">View</button></td>';
											}else{
												echo '<td ><a href="print.php?id='.$id.'" class="btn btn-sm btn-info print" data-id="'.$id.'" target="_blank" id="print">Print Certificate</a></td>';
											}
											
											echo '</tr>';
										}
                                    		?>	
											</tbody>		
										</table>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<footer class="footer bg-primary-gradient">
				<div class="container-fluid">
					<div class="copyright ml-auto nav-link text-light">
					© <?php echo date("Y");?> | MIHMCI HIS Department
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Owl Carousel -->
	<script src="assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

	<!-- Magnific Popup -->
	<script src="assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	<script>
	//$('#datatable').DataTable();
	$(document).ready(function() {
		
		$('#ffrom').datetimepicker({
			format: 'M/D/Y',
		});
		$('#tto').datetimepicker({
			format: 'M/D/Y',
		});

		let type = 'auto';
		var setInt = setInterval(function() {
			var now = new Date();
			var then = new Date();
			var nowHours = now.getHours();
			var nowMinutes = now.getMinutes();
			var nowSeconds = now.getSeconds();
			var thenHours = 9;
			var thenMinutes = 31;
			var thenSeconds = 0;
				
			// Output the result
			let timer = '<div class="m-0 text-dark"><span id="sw_m">'+nowHours+'h</span>:<span id="sw_s">'+nowMinutes+'m</span>:<span id="sw_s">'+nowSeconds+'s</span></div>';
			$('#timer').html(timer);
			if((nowHours <= thenHours) && (nowMinutes == thenMinutes) && (nowSeconds == thenSeconds)) {
				let timer= '<div class="alert alert-success text-dark">Running automatic database backup</div>';
				$('#timer').html(timer);
				$.ajax ({
					url: 'backup.php',
					method: 'post',
					data: {
						type:type
					},
					success:function(result) {
						console.log(result)
						if(result ==1) {
							alert('Automatic database backup success');	
						}
					}
				});
			}
		}, 1000);
		const XHR = new XMLHttpRequest();
		$(".view").on("click", function(e) {
			e.preventDefault();
			let id = e.target.dataset.id;
			$('#viewEmployee').modal('show');
			$('#viewEmployee').on('shown.bs.modal', function () {
						
				let modal  = $(this);
				XHR.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						let attrib = JSON.parse(this.responseText);
						console.log(attrib)
						let id = attrib[0];;
						let regdate = attrib[1];
						let fullname = attrib[2];
						let gender = attrib[3];
						let age = attrib[4];
						let address = attrib[5];
						let contactno = attrib[6];
						let email = attrib[7];
						let chiefcomplaints = attrib[8];
						let fdate = attrib[9];
						let tdate = attrib[10];
						let impression = attrib[11];
						let labwork =  attrib[12];
						let medicine = attrib[13];
						let remarks = attrib[14];
						let encoder = attrib[15];

						let content = `
						<div class="row no-gutters align-items-end">
						<div class="col-8">
						<div class="form-group">
						<p class="mb-0 ">Fullname</p>
							<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Jed Arellado" required value="${fullname}" data-id="${id}">
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
						<p class="mb-0 ">Gender</p>
							<select class="form-control" name="gender" id="gender">
							<option value="${gender}">${gender}</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							</select>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
						<p class="mb-0 ">Age</p>
							<input type="text" class="form-control" id="age" name="age" placeholder="30" value="${age}">
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
						<p class="mb-0 ">Current Address</p>
							<input type="text" class="form-control" id="address" name="address" placeholder="Brgy. Balabago Jaro Iloilo City" value="${address}">
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
						<p class="mb-0 ">Contact No.</p>
							<input type="text" class="form-control" id="contactno" name="contactno" placeholder="09267142243" required value="${contactno}">
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
						<p class="mb-0 ">Email Address</p>
							<input type="text" class="form-control" id="email" name="email" placeholder="email@gmail.com" required value="${email}">
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
						<p class="mb-0 ">Chief Complaints </p>
							<textarea class="form-control" id="chiefcomplaints" name="chiefcomplaints">${chiefcomplaints}</textarea>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
						<p class="mb-0 ">Date Absent</p>
							<div class="row no-gutters">
								<div class="col-6">
									<div class="form-group">
										<p class="mb-0 ">From</p>
										<input type="text" class="form-control" name="from" id="from" value=${fdate}>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<p class="mb-0 ">To</p>
										<input type="text" class="form-control" name="to" id="to" value=${tdate}>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						<p class="mb-0 ">Impression</p>
							<textarea class="form-control" id="impression" name="impression">${impression}</textarea>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						<p class="mb-0 ">Lab Work-up</p>
							<textarea class="form-control" id="labwork" name="labwork">${labwork}</textarea>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						<p class="mb-0 ">Medicine</p>
							<textarea class="form-control" id="medicine" name="medicine">${medicine}</textarea>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
						<p class="mb-0 ">Remarks</p>
							<textarea class="form-control" id="remarks" name="remarks">${remarks}</textarea>
						</div>
					</div>
						</dvi>`;
						modal.find(".modal-body").html(content);
						$('#from').datetimepicker({
							format: 'M/D/Y',
						});
						$('#to').datetimepicker({
							format: 'M/D/Y',
						});
					}
				};
				XHR.open("POST", "view.php", true);
				XHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				XHR.send("id="+id+"&type=view");

				$(document).on('click', '#update', function(e) { 

					$('#confirmUpdate').modal('show');
					$('#confirmUpdate').on('shown.bs.modal', function () {

						modal = $(this);
						let content = "<p class='mb-0'>Are you sure you want to update this entry?</p>";
						modal.find(".modal-body").html(content);

						let type = 'update';
						let id = document.querySelector('[name="fullname"]').dataset.id
						let fullname = document.querySelector('[name="fullname"]').value;
						let gender = document.querySelector('[name="gender"]').value;
						let age = document.querySelector('[name="age"]').value;
						let address = document.querySelector('[name="address"]').value;
						let contactno = document.querySelector('[name="contactno"]').value;;
						let email = document.querySelector('[name="email"]').value;
						let chiefcomplaints = document.querySelector('[name="chiefcomplaints"]').value;
						let fdate = document.querySelector('[name="from"]').value;
						let tdate = document.querySelector('[name="to"]').value;
						let impression = document.querySelector('[name="impression"]').value;
						let labwork =  document.querySelector('[name="labwork"]').value;
						let medicine = document.querySelector('[name="medicine"]').value;
						let remarks = document.querySelector('[name="remarks"]').value;
						let encoder = <?php echo $username;?>;

						
						$(document).on('click', '#yes', function(e) {
							e.preventDefault();
					
							const FD = new FormData();
							FD.append('id', id);
							FD.append('fullname', fullname);
							FD.append('gender', gender);
							FD.append('age', age);
							FD.append('address', address);
							FD.append('contactno', contactno);
							FD.append('email', email);	
							FD.append('chiefcomplaints', chiefcomplaints);	
							FD.append('fdate', fdate);	
							FD.append('tdate', tdate);	
							FD.append('impression', impression);	
							FD.append('labwork', labwork);	
							FD.append('medicine', medicine);	
							FD.append('remarks', remarks);	
							FD.append('encoder', encoder);	
							FD.append('type', type);	
							fetch("view.php", {
								method: 'POST',
								body: FD
							})
							.then(response => response.text())
							.then(data => {
								modal.find(".modal-body").html("<p class='mb-0 animated fadeOut infinite'>Updating entry...</p>");
								if(data!=0) {
									modal.find(".modal-body").html("<p class='mb-0 animated fadeIn'>Done updating entry...</p>");
									setInterval(() => {
										location.reload();
									}, 1500);
								}
							})
							.catch((error) => {
								console.error('Error:', error);
							});
						});
					});
				});
			});
		});
	});
</script>
<div class="modal fade" id="viewEmployee" tabindex="-1" role="dialog"aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary-gradient">
				<h3 class="modal-title text-light" id="title">View Employee</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" id="update">Update</button>
				<button type="button" class="btn btn-warning no" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="confirmUpdate" tabindex="-1" role="dialog"aria-hidden="true">
	<div class="modal-dialog shadow-lg" role="document">
		<div class="modal-content shadow-lg">
			<div class="modal-header bg-primary-gradient">
				<h3 class="modal-title text-light" id="title">Confirm Update</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" id="yes">Yes</button>
				<button type="button" class="btn btn-warning no" data-dismiss="modal">No</button>
			</div>
		</div>
	</div>
</div>
</body>
</html>