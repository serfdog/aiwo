<?php //Sample Database Connection Syntax for PHP and MySQL. 

//echo $_SERVER['PHP_AUTH_USER'] . " login: AUTH<BR>";
//echo $_SERVER['PHP_REMOTE_USER'] . " login: REMOTE<BR>";

//Connect To Database 
$hostname="localhost"; 
$username="aiatss2_root"; $password="Ai44WebSql"; 
$dbname="aiatss2_screenings"; 
$usertable="aiword3"; 
//$yourfield = "order_id"; 
//mysql_connect($hostname,$username, $password) or die ("Cannot Connect"); 
//mysql_select_db($dbname) or die ("Cannot select database"); # Check If Record Exists 

$DBH = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
//set user variable



# using the shortcut ->query() method here since there are no variable
# values in the select statement.
/*$STH = $DBH->query("SELECT OFC_NAME,order_id from s1_nonats WHERE OFC_NAME != '--' order by id desc limit 10;");
 
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);
 
while($row = $STH->fetch()) {
    echo $row['OFC_NAME'] . "<br>";
    echo $row['order_id'] . "<p>";

}
*/
?>