
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
 
echo "<div style='position: absolute;  top: 135px;  left: 32px;  font-family: Verdana;  '>   <b>MIHMCI</div>";
echo "<div style='position: absolute;  top: 135px;  left: 250px; font-family: Verdana;  '>   <b>REGION 6 - ILOILO </div>";
echo "<div style='position: absolute;  top: 135px;  left: 477px; font-family: Verdana;  '>   <b>$phicnumber </div>";
   
 if(strlen($lname)>=13){  
    echo "<div style='position: absolute;  top: 314px;  left: 80px; font-family: Verdana; font-size:7.5px;'>   <b>$lname</b>    </div>  ";
 }else{
    echo "<div style='position: absolute;  top: 312px;  left: 75px; font-family: Verdana;'>   <b>$lname</b>    </div>  ";   
 }
 if(strlen($fname)>=10){                              
echo "<div style='position: absolute;  top: 314px;  left: 345px; font-family: Verdana;  font-size:7.5px;'>   <b>$fname $suffix</b>    </div>  ";
 }else{
     echo "<div style='position: absolute;  top: 312px;  left: 340px; font-family: Verdana; '>   <b>$fname $suffix</b>    </div>  ";
 }
if(strlen($mname)>=10){
echo "<div style='position: absolute;  top: 312px;  left: 538px; font-family: Verdana; font-size:7.5px;'>   <b>$mname</b>    </div>  "; 
}else{
echo "<div style='position: absolute;  top: 312px;  left: 538px; font-family: Verdana;'>   <b>$mname</b>    </div>  "; 
}
  
echo "<div style='position: absolute;  top: 327px;  left: 132px; font-family: Verdana;'>   <b>".date('m/d/Y', strtotime($bdate))."</b>    </div>  ";
echo "<div style='position: absolute;  top: 327px;  left: 280px; font-family: Verdana;'>   <b>$egg</b>    </div>  ";

if($gender=='FEMALE'){
echo "<div style='position: absolute;  top: 328px;  left: 620px; font-family: Verdana;'>   <b>▀</b>    </div>  "; 
}else{
echo "<div style='position: absolute;  top: 328px;  left: 548px; font-family: Verdana;'>   <b>▀</b>    </div>  "; 
}

echo "<div style='position: absolute;  top: 341px;  left: 110px; font-family: Verdana;'>   <b>$cstatus</b>    </div>  ";
                              
if(strlen($occupation)>=16){                              
echo "<div style='position: absolute;  top: 348px;  left: 110px; font-family: Verdana;   font-size:7.5px;'>   <b>$occupation</b>    </div>  ";
}else{
echo "<div style='position: absolute;  top: 360px;  left: 110px; font-family: Verdana;'>   <b>$occupation</b>    </div>  "; 
}
echo "<div style='position: absolute;  top: 341px;  left: 300px; font-family: Verdana;'>   <b>$nationality</b>    </div>  ";
 


if(strlen($curaddhousenum)>=23){
    echo "<div style='position: absolute;  top: 403px;  left: 30px; font-family: Verdana; font-size:7px; width:20%;'>   <b> $curaddhousenum </div>";
}else{
    echo "<div style='position: absolute;  top: 400px;  left: 30px; font-family: Verdana;  '>   <b> $curaddhousenum </div>";
}
                           
if(strlen($curstreet)>=15){
    echo "<div style='position: absolute;  top: 403px;  left: 197px; font-family: Verdana; font-size:7px; width:20%;'>   <b> $curstreet </div>";
}else{
    echo "<div style='position: absolute;  top: 400px;  left: 198px; font-family: Verdana;  '>   <b> $curstreet </div>";
}
                               
if(strlen($curbarangay)>=15){
    echo "<div style='position: absolute;  top: 403px;  left: 363px; font-family: Verdana; font-size:7px;'>   <b> $curbarangay </div>";
}else{
    echo "<div style='position: absolute;  top: 400px;  left: 365px; font-family: Verdana;  '>   <b> $curbarangay </div>";
}
                             
echo "<div style='position: absolute;  top: 400px;  left: 530px; font-family: Verdana;  '>   <b> $curcity </div>";
echo "<div style='position: absolute;  top: 430px;  left: 30px; font-family: Verdana;  '>   <b> $curprovince </div>";
echo "<div style='position: absolute;  top: 430px;  left: 195px; font-family: Verdana;  '>   <b> $curhomephone </div>";
echo "<div style='position: absolute;  top: 430px;  left: 363px; font-family: Verdana;  '>   <b> $curcontactnumber </div>";
                              
if(strlen($curemail)>=11){
    echo "<div style='position: absolute;  top: 430px;  left: 530px; font-family: Verdana;  font-size:7.5px; '>   <b> $curemail </div>";
}else{
    echo "<div style='position: absolute;  top: 430px;  left: 512px; font-family: Verdana;  '>   <b> $curemail </div>";
}
                      
if(strlen($peraddhousenum)>=23){
    echo "<div style='position: absolute;  top: 473px;  left: 30px; font-family: Verdana;  font-size:7px; width:20%;'>   <b> $peraddhousenum </div>";
}else{
    echo "<div style='position: absolute;  top: 470px;  left: 30px; font-family: Verdana;  '>   <b> $peraddhousenum </div>";
}
                                
if(strlen($perstreet)>=15){
    echo "<div style='position: absolute;  top: 473px;  left: 197px; font-family: Verdana;  font-size:7px; width:20%;'>   <b> $perstreet </div>";
}else{
    echo "<div style='position: absolute;  top: 470px;  left: 198px; font-family: Verdana;  '>   <b> $perbarangay </div>";
}
if(strlen($perbarangay)>=15){
    echo "<div style='position: absolute;  top: 473px;  left: 363px; font-family: Verdana;  font-size:7px; width:20%;'>  $perstreet <b>  </div>";
}else{
    echo "<div style='position: absolute;  top: 470px;  left: 365px; font-family: Verdana;  '>   <b> $perbarangay </div>";
}
echo "<div style='position: absolute;  top: 470px;  left: 530px; font-family: Verdana;  '>   <b> $percity </div>";
                               
                              
echo "<div style='position: absolute;  top: 496px;  left: 30px; font-family: Verdana;  '>   <b> $perprovince </div>";
echo "<div style='position: absolute;  top: 496px;  left: 197px; font-family: Verdana;  '>   <b> $perhomephone </div>";
echo "<div style='position: absolute;  top: 496px;  left: 363px; font-family: Verdana;  '>   <b> $percontactnumber </div>";
if(strlen($peremail)>=11){
    echo "<div style='position: absolute;  top: 497px;  left: 530px; font-family: Verdana;  font-size:7.5px; '>   <b> $peremail </div>";
}else{
    echo "<div style='position: absolute;  top: 496px;  left: 530px; font-family: Verdana;  '>   <b> $peremail </div>";
}
                                   
#peraddress
if(strlen($wpaddhousenum)>=20){
    echo "<div style='position: absolute;  top: 537px;  left: 30px; font-family: Verdana; font-size:7px; width:20%;'>   <b> $wpaddhousenum </div>";
}else{
    echo "<div style='position: absolute;  top: 536px;  left: 30px; font-family: Verdana;  '>   <b> $wpaddhousenum </div>";
}
if(strlen($wpstreet)>=15){
    echo "<div style='position: absolute;  top: 537px;  left: 197px; font-family: Verdana;  font-size:7px; width:20%;'>   <b> $wpstreet </div>";
}else{
    echo "<div style='position: absolute;  top: 536px;  left: 197px; font-family: Verdana;  '>   <b> $wpstreet </div>";
}
if(strlen($wpbarangay)>=15){
    echo "<div style='position: absolute;  top: 537px;  left: 363px; font-family: Verdana;  font-size:7px; width:20%;'>   <b> $wpbarangay </div>";
}else{
    echo "<div style='position: absolute;  top: 536px;  left: 363px; font-family: Verdana;  '>   <b> $wpbarangay </div>";
}
echo "<div style='position: absolute;  top: 536px;  left: 530px; font-family: Verdana;  '>   <b> $wpcity </div>";
                            
echo "<div style='position: absolute;  top: 562px;  left: 30px; font-family: Verdana;  '>   <b> $wpprovince </div>";
                              
if(strlen($wphomephone)>=18){                              
echo "<div style='position: absolute;  top: 562px;  left: 197px; font-family: Verdana;  font-size:7px; width:20%; '>   <b> $wphomephone </div>";
}else{
    echo "<div style='position: absolute;  top: 562px;  left: 197px; font-family: Verdana;  '>   <b> $wphomephone </div>";
}
                              
echo "<div style='position: absolute;  top: 562px;  left: 363px; font-family: Verdana;  '>   <b> $wpcontactnumber </div>";

if(strlen($wpemail)>=21){
    echo "<div style='position: absolute;  top: 562px;  left: 530px; font-family: Verdana;  font-size:7.5px; '>   <b> $wpemail </div>";
}else{
    echo "<div style='position: absolute;  top: 562px;  left: 530px; font-family: Verdana;  '>   <b> $wpemail</div>";
}
 
 

#signature
 #echo " <img src='esig/doc_signs/$id.png'  style='position: absolute;  top: 1430px;  left: 630px;' width='100px' >";
?> </div> 
<img src='c1.jpg' width='100%' >
                              <br>
<br>
<br> 
<img src='c2.jpg' width='100%' >                             <br>
<br>
<br> 
<img src='waive1.jpg' width='100%' >                             <br>
<br>
<br> 
<img src='waive2.jpg' width='100%' >

 
							  </div> 
							 
							  
								 
	<script type="text/javascript">window.onload = function() { 
		
		window.print();  
		 
	}
	
	</script>
  <script>window.setTimeout(function(){
     
     this.close();
     
     },1000)  </script>
 
 