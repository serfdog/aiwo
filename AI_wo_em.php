<?php
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
//include('connect_scrn.php');
$scrndate=date('l m-d-Y', time());
$em = $_SESSION['email'];
echo $em;

include('connectPDO.php');
$STH = $DBH->query("select aiRcvBy,svcAddr,svcCity,svcSt, aiClient,sdate1,sdate2,sdate3,sdate4,sdate5,sdate6,sdate7,sdate8,sdate9,sdate10,sdate11,sdate12,sdate13,sdate14,
		  stime1,stime2,stime3,stime4,stime5,stime6,stime7,stime8,stime9,stime10,stime11,stime12,stime13,stime14,etime1,etime2,etime3,etime4,etime5,etime6,etime7,
		  etime8,etime9,etime10,etime11,etime12,etime13,etime14,h1,h2,h3 from aiword3 where id = 3 order by id desc limit 1");
 
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);
ob_start();

echo "Thank you " . $CurrUser . " for the following service request: ";
 
while($row = $STH->fetch()) {
        echo $row['aiRcvBy'] . "<br>";
	echo $row['aiClient']. "<p>";
	echo $row['svcAddr'] . "  " .$row['svcCity'].", ". $row['svcSt']."<br>";
	echo "<u>Shifts</u><br>";
	if ($row['sdate1'] <> '1/0/1900') echo $row['sdate1'] . "  " . $row['stime1']." - ". $row['etime1'] .  " Hours: " . $row['h1']."<br>" ; 
	if ($row['sdate2'] <> '1/0/1900') echo $row['sdate2'] . "  " . $row['stime2']." - ". $row['etime2'] .  " Hours: " . $row['h2']."<br>" ; 
	if ($row['sdate3'] <> '1/0/1900') echo $row['sdate3'] . "  " . $row['stime3']." - ". $row['etime3'] .  " Hours: " . $row['h3']."<br>" ; 
	
	if ($row['sdate4'] <> '1/0/1900') echo $row['sdate4'] . "  " . $row['stime4']." - ". $row['etime4'] .  " Hours: " . $row['h4']."<br>" ; 
	if ($row['sdate5'] <> '1/0/1900') echo $row['sdate5'] . "  " . $row['stime5']." - ". $row['etime5'] .  " Hours: " . $row['h5']."<br>" ; 
if ($row['sdate6'] <> '1/0/1900') echo $row['sdate6'] . "  " . $row['stime6']." - ". $row['etime6'] .  " Hours: " . $row['h6']."<br>" ; 
if ($row['sdate7'] <> '1/0/1900') echo $row['sdate7'] . "  " . $row['stime7']." - ". $row['etime7'] .  " Hours: " . $row['h7']."<br>" ; 
if ($row['sdate8'] <> '1/0/1900') echo $row['sdate8'] . "  " . $row['stime8']." - ". $row['etime8'] .  " Hours: " . $row['h8']."<br>" ; 
if ($row['sdate9'] <> '1/0/1900') echo $row['sdate9'] . "  " . $row['stime9']." - ". $row['etime9'] .  " Hours: " . $row['h9']."<br>" ; 
if ($row['sdate10'] <> '1/0/1900') echo $row['sdate10'] . "  " . $row['stime10']." - ". $row['etime10'] .  " Hours: " . $row['h10']."<br>" ; 
if ($row['sdate11'] <> '1/0/1900') echo $row['sdate11'] . "  " . $row['stime11']." - ". $row['etime11'] .  " Hours: " . $row['h11']."<br>" ; 
if ($row['sdate12'] <> '1/0/1900') echo $row['sdate12'] . "  " . $row['stime12']." - ". $row['etime12'] .  " Hours: " . $row['h12']."<br>" ; 
if ($row['sdate13'] <> '1/0/1900') echo $row['sdate13'] . "  " . $row['stime13']." - ". $row['etime13'] .  " Hours: " . $row['h13']."<br>" ; 
if ($row['sdate14'] <> '1/0/1900') echo $row['sdate14'] . "  " . $row['stime14']." - ". $row['etime14'] .  " Hours: " . $row['h14']."<br>" ; 
}
$string=ob_get_clean();
echo $string;
//$cnt=mysql_num_rows($result);
$sbj="CSC Coverage Request";
//call function
em($string,$sbj,$em);

function em($bdy,$sbj,$em) {

//MAIL
require_once ('../files/phpmailer/class.phpmailer.php');
require_once ('../files/phpmailer/language/phpmailer.lang-en.php');
//require_once ('/var/www/ssl/dev1.2/app/webroot/files/phpmailer/class.phpmailer.php');
//require ('/var/www/ssl/dev1.2/app/webroot/files/phpmailer/language/phpmailer.lang-en.php');


$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.aiatss2.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "clientsupport@aiatss2.com";  // SMTP username
$mail->Password = "!1Password"; // SMTP !1Password (!1Password)

$mail->From     = "clientsupport@aiatss2.com";
$mail->FromName = "Andrews Intl Client Support";
//$mail->AddAddress("cscsupervision@andrewsinternational.com","CSC Mgrs"); 
//$mail->AddAddress("$em");
$mail->AddAddress("jwils01@gmail.com");
//$mail->AddAddress("jwilson@andrewsinternational.com");
$mail->AddBCC("jwilson@andrewsinternational.com","John Wilson");


$mail->WordWrap = 50;                              // set word wrap
//$mail->AddAttachment("/var/tmp/file.tar.gz");      // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");
$mail->AddEmbeddedImage("images/ailogo200.gif", "ai_sm"); //inline attachment
$mail->IsHTML(true);                               // send as HTML

$mail->Subject  =  "$sbj";
$mail->Body 	=  "<div style=\"font-family:Verdana san-serif;font-size:11px;background-color:#f0f0f0;padding:5px;border:blue 3px solid;border-radius:5px\">
<img style=\"margin-right:50px\" src=\"cid:ai_sm\" align=\"left\"/>$bdy</div>";
$mail->AltBody  =  "This is the text-only body";

if(!$mail->Send())
{
   echo "Message was not sent <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
} //end function


?>
