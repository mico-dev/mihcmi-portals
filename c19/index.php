<?php
session_start();
include('includes/config.php');
include('includes/templates/head.php');
?> 
<div class="wrapper wrapper-login bg-metro">
	
	<form method="POST" action=''>
		<div class="container container-login pt-2">
			<img src="assets/images/covid-lab-logo.png" class="img-fluid">
			<h1 class="text-center mt-5 mb-5">RT-PCR Specimen Status Monitoring</h1>
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
				<div class="form-action mb-3">
                    <input  name="submit" type="submit" value="Login" class="btn btn-primary btn-rounded btn-login">
				</div>
				 
			</div>
<?php

if(isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$sql = mysqli_query($con, "SELECT * FROM `tb_rtpcrfull` WHERE BINARY rt_user='$username' AND rt_pass='$password'") or die(mysqli_error($con));
	$doc = mysqli_query($con, "SELECT * FROM `tb_meduser` WHERE m_pass='$password' AND m_license='$username' AND m_userid='6'") or die(mysqli_error($con));
	if(mysqli_num_rows($sql)==1) {
		while($row=mysqli_fetch_assoc($sql)) {
			$rt_id = $row['rt_id'];
			$_SESSION['sessionid'] = $rt_id;
			echo "<script>window.location='rtpcr-status.php';</script>";	
		}

	}elseif(mysqli_num_rows($doc)==1) {
		$_SESSION['sessionid'] = $password;
		$_SESSION['sessionname'] = $username;
		echo "<script>window.location='rtpcr-view.php';</script>";	

	}else {
		echo "<div class='alert alert-danger animated bounceIn' align='center'><strong>Error! </strong> Invalid login credentials</div>"; 
	}
}
	
?>
 		</div>
	</form>
</div>
<?php include('includes/templates/footer.php')?>