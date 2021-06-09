
<!DOCTYPE html>
<html lang="en"> 
<?php 
 error_reporting(0);
     include('config.php');
 $micro = round(microtime(true));
  
 $id=$_GET['rtid'];
   # echo $id;
 
    $sqlcodecheck = mysqli_query($con,"SELECT * FROM tb_rtpcrnewcifonline WHERE rt_primaryai='$id'");
  while($row=mysqli_fetch_array($sqlcodecheck)){
  include('querynewcif.php');
	  $id=$row['rt_primaryai'];
	 
  } 
     $bday = new DateTime($bdate);  
		$today = new Datetime(date('Y-m-d'));
		$diff = $today->diff($bday);
		$y =  $diff->y;
		
		$egg = $y."Y";
?>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php 
	echo $filename;
	?>
	</title>
	 
	<!-- Fonts and icons -->
	 
</head>
 
 

<body >
 
 

	 
 
						 
	 					  <div id="printableArea" > 
	 					  <div id='hidden_div' > 
<?php
 
echo "<div style='position: absolute;  top: 164px;  left: 34px;  font-family: Verdana;  '>   <b>MIHMCI</div>";
echo "<div style='position: absolute;  top: 164px;  left: 318px; font-family: Verdana;  '>   <b>REGION 6 - ILOILO </div>";
echo "<div style='position: absolute;  top: 164px;  left: 588px; font-family: Verdana;  '>   <b>$phicnumber </div>";
                              
echo "<div style='position: absolute;  top: 361px;  left: 100px; font-family: Verdana;'>   <b>$lname</b>    </div>  ";
echo "<div style='position: absolute;  top: 361px;  left: 423px; font-family: Verdana;'>   <b>$fname $suffix</b>    </div>  ";
echo "<div style='position: absolute;  top: 361px;  left: 685px; font-family: Verdana;'>   <b>$mname</b>    </div>  "; 

echo "<div style='position: absolute;  top: 383px;  left: 165px; font-family: Verdana;'>   <b>".date('m/d/Y', strtotime($bdate))."</b>    </div>  ";
echo "<div style='position: absolute;  top: 383px;  left: 383px; font-family: Verdana;'>   <b>$egg</b>    </div>  ";

if($gender=='FEMALE'){
echo "<div style='position: absolute;  top: 383px;  left: 765px; font-family: Verdana;'>   <b>▀</b>    </div>  "; 
}else{
echo "<div style='position: absolute;  top: 383px;  left: 675px; font-family: Verdana;'>   <b>▀</b>    </div>  "; 
}

echo "<div style='position: absolute;  top: 398px;  left: 110px; font-family: Verdana;'>   <b>$cstatus</b>    </div>  ";
                              
if(strlen($occupation)>=16){                              
echo "<div style='position: absolute;  top: 417px;  left: 110px; font-family: Verdana;   font-size:7.5px;'>   <b>$occupation</b>    </div>  ";
}else{
echo "<div style='position: absolute;  top: 412px;  left: 110px; font-family: Verdana;'>   <b>$occupation</b>    </div>  "; 
}
echo "<div style='position: absolute;  top: 398px;  left: 435px; font-family: Verdana;'>   <b>$nationality</b>    </div>  ";


if($closedset=='YES'){
echo "<div style='position: absolute;  top: 494px;  left: 569px; font-family: Verdana;'>   <b>&nbsp;</b>    </div>  ";
}elseif($closedset=='NO'){
echo "<div style='position: absolute;  top: 494px;  left: 721px; font-family: Verdana;'>   <b>&nbsp;</b>    </div>  "; 
}else{
echo "<div style='position: absolute;  top: 494px;  left: 875px; font-family: Verdana;'>   <b>&nbsp;</b>    </div>  "; 
}


if(strlen($curaddhousenum)>=23){
    echo "<div style='position: absolute;  top: 461px;  left: 30px; font-family: Verdana; font-size:7px; width:20%;'>   <b> $curaddhousenum </div>";
}else{
    echo "<div style='position: absolute;  top: 459px;  left: 30px; font-family: Verdana;  '>   <b> $curaddhousenum </div>";
}
if(strlen($curstreet)>=15){
    echo "<div style='position: absolute;  top: 459px;  left: 240px; font-family: Verdana; font-size:10px;'>   <b> $curstreet </div>";
}else{
    echo "<div style='position: absolute;  top: 459px;  left: 240px; font-family: Verdana;  '>   <b> $curstreet </div>";
}
if(strlen($curbarangay)>=15){
    echo "<div style='position: absolute;  top: 459px;  left: 445px; font-family: Verdana; font-size:10px;'>   <b> $curbarangay </div>";
}else{
    echo "<div style='position: absolute;  top: 459px;  left: 445px; font-family: Verdana;  '>   <b> $curbarangay </div>";
}
echo "<div style='position: absolute;  top: 459px;  left: 652px; font-family: Verdana;  '>   <b> $curcity </div>";
echo "<div style='position: absolute;  top: 490px;  left: 30px; font-family: Verdana;  '>   <b> $curprovince </div>";
echo "<div style='position: absolute;  top: 490px;  left: 240px; font-family: Verdana;  '>   <b> $curhomephone </div>";
echo "<div style='position: absolute;  top: 490px;  left: 445px; font-family: Verdana;  '>   <b> $curcontactnumber </div>";
if(strlen($curemail)>=11){
    echo "<div style='position: absolute;  top: 490px;  left: 652px; font-family: Verdana;  font-size:7.5px; '>   <b> $curemail </div>";
}else{
    echo "<div style='position: absolute;  top: 490px;  left: 652px; font-family: Verdana;  '>   <b> $curemail </div>";
}
                              
if(strlen($peraddhousenum)>=23){
    echo "<div style='position: absolute;  top: 536px;  left: 30px; font-family: Verdana;  font-size:7px; width:20%;'>   <b> $peraddhousenum </div>";
}else{
    echo "<div style='position: absolute;  top: 532px;  left: 30px; font-family: Verdana;  '>   <b> $peraddhousenum </div>";
}
if(strlen($perstreet)>=15){
    echo "<div style='position: absolute;  top: 549px;  left: 240px; font-family: Verdana; font-size:10px;'>   <b> $perstreet </div>";
}else{
    echo "<div style='position: absolute;  top: 532px;  left: 240px; font-family: Verdana;  '>   <b> $perbarangay </div>";
}
if(strlen($perbarangay)>=15){
    echo "<div style='position: absolute;  top: 549px;  left: 445px; font-family: Verdana; font-size:10px;'>  $perstreet <b>  </div>";
}else{
    echo "<div style='position: absolute;  top: 532px;  left: 445px; font-family: Verdana;  '>   <b> $perbarangay </div>";
}
echo "<div style='position: absolute;  top: 532px;  left: 652px; font-family: Verdana;  '>   <b> $percity </div>";
echo "<div style='position: absolute;  top: 564px;  left: 30px; font-family: Verdana;  '>   <b> $perprovince </div>";
echo "<div style='position: absolute;  top: 564px;  left: 240px; font-family: Verdana;  '>   <b> $perhomephone </div>";
echo "<div style='position: absolute;  top: 564px;  left: 445px; font-family: Verdana;  '>   <b> $percontactnumber </div>";
if(strlen($curemail)>=11){
    echo "<div style='position: absolute;  top: 564px;  left: 652px; font-family: Verdana;  font-size:7.5px; '>   <b> $peremail </div>";
}else{
    echo "<div style='position: absolute;  top: 564px;  left: 652px; font-family: Verdana;  '>   <b> $peremail </div>";
}
#peraddress
if(strlen($wpaddhousenum)>=23){
    echo "<div style='position: absolute;  top: 609px;  left: 30px; font-family: Verdana; font-size:7px; width:20%;'>   <b> $wpaddhousenum </div>";
}else{
    echo "<div style='position: absolute;  top: 606px;  left: 30px; font-family: Verdana;  '>   <b> $wpaddhousenum </div>";
}
if(strlen($wpstreet)>=15){
    echo "<div style='position: absolute;  top: 606px;  left: 240px; font-family: Verdana; font-size:10px;'>   <b> $wpstreet </div>";
}else{
    echo "<div style='position: absolute;  top: 606px;  left: 240px; font-family: Verdana;  '>   <b> $wpstreet </div>";
}
if(strlen($wpbarangay)>=15){
    echo "<div style='position: absolute;  top: 606px;  left: 445px; font-family: Verdana; font-size:10px;'>   <b> $wpbarangay </div>";
}else{
    echo "<div style='position: absolute;  top: 606px;  left: 445px; font-family: Verdana;  '>   <b> $wpbarangay </div>";
}
echo "<div style='position: absolute;  top: 606px;  left: 652px; font-family: Verdana;  '>   <b> $wpcity </div>";
echo "<div style='position: absolute;  top: 635px;  left: 30px; font-family: Verdana;  '>   <b> $wpprovince </div>";
                              
if(strlen($wphomephone)>=18){                              
echo "<div style='position: absolute;  top: 638px;  left: 238px; font-family: Verdana;  font-size:7px; width:20%; '>   <b> $wphomephone </div>";
}else{
    echo "<div style='position: absolute;  top: 635px;  left: 240px; font-family: Verdana;  '>   <b> $wphomephone </div>";
}
                              
echo "<div style='position: absolute;  top: 635px;  left: 445px; font-family: Verdana;  '>   <b> $wpcontactnumber </div>";

if(strlen($wpemail)>=21){
    echo "<div style='position: absolute;  top: 676px;  left: 652px; font-family: Verdana;  font-size:7.5px; '>   <b> $wpemail </div>";
}else{
    echo "<div style='position: absolute;  top: 635px;  left: 652px; font-family: Verdana;  '>   <b> $wpemail</div>";
}
 
 


#signature
 #echo " <img src='esig/doc_signs/$id.png'  style='position: absolute;  top: 1430px;  left: 630px;' width='100px' >";
?> </div> 
<img src='cif21.jpg' width='100%' >
<br>
<br>
<br>
<img src='cif22.jpg' width='100%' >
 
							  </div> 
							 
							  
								 
	<script type="text/javascript">window.onload = function() { 
		
		window.print();  
		 
	}
	
	</script>
  <script>window.setTimeout(function(){
     
     this.close();
     
     },1000)  </script>
 
 