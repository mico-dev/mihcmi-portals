<?php 
#search
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
        <title>Metro Iloilo Hospital & Medical Center, Inc. | RT-PCR Verification</title>
        <link href="images/Metro Iloilo Hospital and Medical Center Inc Logo.png" rel="icon" type="image/png" sizes="16x16">
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Playfair+Display:400,400italic,700,700italic,900,900italic">-->
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
        	.container-fluid {
        		width: 90% ;
        	}
            .mg-page-title h1 {
                color: #fff;
                text-transform: uppercase;
			    position: relative;
			    margin-bottom: 1%;
			    margin-top: 0;
			    font-size: 65px;
			    text-shadow: 2px 2px 3px rgba(24, 64, 164, 1);
			    font-weight: 900;
            }
            .mg-page-title h2 {
                color: #fff;
                text-transform: uppercase;
                position: relative;
                margin-bottom: 35px;
                margin-top: 1%;
                font-size: 36px;
                font-weight: 600;
                
            }
            .form-control:disabled, .form-control[readonly] {
                background:#fff !important;
            }
            @media (max-width: 1366px) {
                .mg-page-title h1 {
                    margin-top:5% 
                }
            }    
            @media (max-width: 900px) {
                .mg-page-title h1 {
                    font-size:36px;
                    margin-top:10% 
                }
                .mg-page-title h2 {
                    font-size:28px;
                }
            }
            @media (max-width: 680px) {
                .mg-page-title h1 {
                    font-size:32px;
                }
                .mg-page-title h2 {
                    font-size:22px;
                }
            }
            @media (max-width: 414px) {
                
            }
        </style>
        <script data-ad-client="pub-3040695959996788" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107291627-16"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-107291627-16');
    </script>
    </head>
    <body>
        <?php include 'includes/template/header.php'; ?>
        <div  style='background-image: url("images/banners/rtpcr.jpg");padding-top:2%;padding-bottom:2%;background-size: initial;background-repeat: no-repeat;background-position: 50% 15%;'  class="mg-page-title parallax">
            <div class="container-fluid" style='margin-top:6%;'>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-0">MIHMCI RT-PCR Verification</h1>
                    </div>
                </div>
            </div>
        </div>           
        <section class="mg-best-rooms"  style="background-color: #ffffff;">
            <div class="container-fluid" >
                <div class="row" >
                <div class="col-lg-12 alert alert-warning">
                        <p class="text-dark mb-1"><b>Advisory!</b><br>Please enter ID Number on the text bar to verify if patient went through Metro Iloilo Hospital & Medical Center, Inc. Covid-19 Testing Laboratory.</p>
                        <p class="text-dark mb-1">RTPCR Results will not be shown due to the Data Privacy Act.</p>
                    </div>
                    <div class="col-lg-12">
                        <form method='POST'>
                            <div class="row no-gutters align-items-end">
                                <div class="col-lg-10 mb-2">
                                    <p class="mb-0">Enter MLAB ID from CTR Result</p>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="rounded-0 input-group-text bg-warning text-dark border border-warning">MLAB</label>
                                        </div>
                                        <input class="form-control rounded-0 border border-warning" type="text" required name="rt_id" placeholder="(eg 119000)" autofocus>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-2 mb-2">
                                    <input type='submit' name="submit" class="btn btn-block bg-warning rounded-0 border border-warning" value="Search by ID">
                                </div>
                                <?php
                                   #error_reporting(0);
                                    include('config.php');
                                    date_default_timezone_set('Asia/Manila');
                                        if(isset($_POST['submit'])) {
                                            $rt_id = $_POST['rt_id'];
                                            $result = mysqli_query($con, "SET NAMES utf8") or die(mysqli_error($con));

                                                $search = $con->query("SELECT rt_id, rt_lname, rt_fname, rt_mname, rt_suffix, rt_timestamp, rt_si1collected, rt_ctrtimestamp, rt_finalresult, rt_validation, rt_validation2, rt_si1collectedtime FROM `tb_rtpcrnewv9` WHERE rt_id='$rt_id'") or die($con->error);
                                            if($search->num_rows<>0) {
                                                while($row=mysqli_fetch_assoc($search)) {

                                                    $lname = $row['rt_lname'];
                                                    $fname = $row['rt_fname'];
                                                    $mname = $row['rt_mname'];
                                                    $suffix = $row['rt_suffix'];
                                                    $rt_timestamp = $row['rt_timestamp'];
                                                    $rt_si1collected = $row['rt_si1collected'];
                                                    $rt_ctrtimestamp = ($row['rt_ctrtimestamp']!='')? $row['rt_ctrtimestamp'] : 'PENDING';
                                                    $id = $row['rt_id'];
                                                    $finalresult = $row['rt_finalresult'];
                                                    $validation = $row['rt_validation'];
                                                    $validation2 = $row['rt_validation2'];
                                                    
                                                    
                                                     
                                                    $si1collected =  date('F d, Y', strtotime($rt_si1collected)); 
                                                    #$si1received =  date('m / d / Y', strtotime($si1received)); 
                                                    $colsf=$si1collected;
                                                    #$recef=$si1received;
                                                    
                                                }
                                                echo '<div class="col-lg-12 alert alert-success text-dark p-2">';
                                                echo "<p><b>Result for ID: </b>MLAB". $id. "</p>";
                                                echo "<p><b>Patient Name: </b><br>".ucwords($lname).", ".ucwords($fname)." ".ucwords($mname)." ".ucwords($suffix)."</p>";
                                                echo '<p><b>Specimen Collected</b><br>'.date('m / d / Y | H:i:s A', strtotime($rt_timestamp)).'</p>';
                                                echo '<p><b>Date & Time Released</b><br>'. $rt_ctrtimestamp.'</p>';
                                                
                                                #validation
                                                if(($validation=='YES') AND ($validation2=='YES')) {
                                                    #result
                                                    if($finalresult=='POSITIVE'){
                                                        $finalresultshow='SARS-CoV-2 (Causative Agent of Covid-19) viral <font color=red>RNA DETECTED.</font>';
                                                        $interp = '<font color=red>POSITIVE FOR SARS-CoV-2.</font>';
                                                    }elseif($finalresult=='NEGATIVE'){
                                                        $finalresultshow='SARS-CoV-2 (Causative Agent of Covid-19) viral RNA NOT DETECTED';
                                                        $interp = 'NEGATIVE FOR SARS-CoV-2';
                                                    }
                                                }else{
                                                    
                                                    $finalresultshow='PENDING';
                                                    $interp = 'PENDING';
                                                }

                                                echo '<p><b>TEST RESULT</b><br>'.$finalresultshow.'</p>';
                                                echo '<p><b>NTERPRETATION</b><br>'.$interp.'</p>';
                                                #echo '<p>Date & Time Released<br>'.date('F d, Y  H:i:s A', strtotime($rt_ctrtimestamp)).'</p>';
                                                 
                                                
                                                echo '</div>';

                                            } else {

                                                echo '<div class="col-lg-12 alert alert-danger mb-2">';
                                                echo "<p class='mb-0'>No result found for ID: <b>". $rt_id. "</b></p>";
                                                echo '</div>';
                                            }
                                               
                                        } 
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="mg-footer" style="position:fixed;bottom:0px;width:100%">
            <div class="mg-copyright">
                <div class="container-fluid">
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
            
            $('#modal-announcement').modal('show');
            $('#modal-announcement').on('hidden.bs.modal', function () {});

            setInterval(reloadModal, 120000);
            function reloadModal() {
                $('#modal-announcement').modal('show');
            }
        });
        </script>
        
    </body>
</html>
