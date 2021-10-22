<?php
error_reporting( E_ALL );
$type='test-email';
if($type=='test-email') {
###
/*$img="<img src='https://www.metroiloilohospital.com/maillong.png' width='100%'>";
    $msg="<!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Notification - End of quarantine period | MIHMCI CE 2021</title>
        <style>
        @media screen and (max-width: 480px) {
            #etable {
                width:280px !important;
            }
            #etable caption {
                font-size:16px;
            }
        }
        </style>  
    </head>  
    <body>
      ".$img."
    <table style='border: 1px solid #06418e;width:100%;border-collapse: collapse;' id='etable'>
    <caption style='border: 1px solid #06418e;background:#06418e;color:#fff;font-size:36px;'>MIHMCI PF - <span style='color:#fff;font-size:36px;'>Dr. </span></caption>
    <tr><th colspan='5' style='border: px solid #06418e;color:#000;font-size:24px;text-align:center;'>Notification - End of quarantine period | MIHMCI CE 2021</th></tr>
    <tr>
    <th style='border: 1px solid #06418e;color:#000;font-size:24px;text-align:left;'>Patient Name</th>
    <th style='border: 1px solid #06418e;color:#000;font-size:24px;text-align:left;'>Amount</th>
    <th style='border: 1px solid #06418e;color:#000;font-size:24px;text-align:left;'>Net of VAT</th>
    <th style='border: 1px solid #06418e;color:#000;font-size:24px;text-align:left;'>W/Tax</th>
    <th style='border: 1px solid #06418e;color:#000;font-size:24px;text-align:left;'>Net Pay</th>
    </tr>
    <tr>
    <td style='border: 1px solid #06418e;color:#000;font-size:24px;'><b>Total</b></td>
    </tr>
    </table>
    </body>
    </html>";*/
    $to_email      = "mjpalencia27@gmail.com";
    $subject = "Notification - End of quarantine period | MIHMCI CE 2021";
    $message = "Test";
    $headers = "From: admin\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
###
	

		if(mail($to_email, $subject, $message, $headers)) {
			echo 'email success';
			die();
		} else {
			echo 'email failed';
			die();
		}
}
?>