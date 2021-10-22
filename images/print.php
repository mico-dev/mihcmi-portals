<?php include('config.php');
session_start();

$username = (isset($_SESSION['username']))? $_SESSION['username'] : NULL; 
$password = (isset($_SESSION['password']))? $_SESSION['password'] : NULL;
$position = (isset($_SESSION['position']))? $_SESSION['position'] : NULL;

if(($username==NULL) OR ($password==NULL) OR ($position==NULL)) {
		echo "<script>window.location='logout.php';</script>";
	}

$page_title = 'print';
$id = $con->real_escape_string(trim($_GET['id']));
$sql = $con->query("SELECT * FROM `tb_employee` WHERE `id`='$id'") or die($con->error);
if($sql->num_rows>0) {

    while($row = $sql->fetch_assoc()) {
        $id = $row['id'];
        $regdate = $row['regdate'];
        $regdate = $row['regdate'];
        $fullname = $row['fullname'];
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
        $remarks = $row['remarks'];
    }

} else {
    echo "<script>window.location='logout.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Print | MIHMCI CE 2021 </title>
</head>
<body >


<?php echo "<h3>Certificate of Release</h3>"; ?>
<?php echo "<p>Fullname".ucwords($fullname)."</p>"; ?>
<?php echo "<p>Release Date: ".$now."</p>"; ?>
					 
<img src='assets/images/mihmci-header.png' class="w-100 p-absolute">						  
								 
<script>
window.onload = function() { 
    window.print();
}
window.setTimeout(function(){
    this.close();
     },1000)  
</script>
 </body>
 </html>
 