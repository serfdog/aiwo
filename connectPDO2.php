<?php //Sample Database Connection Syntax for PHP and MySQL. 
//Connect To Database 
$hostname="localhost"; 
$username="aiatss2_root"; $password="Ai44WebSql"; 
$dbname="aiatss2_screenings"; 
$usertable="aiword3"; 
//$yourfield = "order_id"; 
//mysql_connect($hostname,$username, $password) or die ("Cannot Connect"); 
//mysql_select_db($dbname) or die ("Cannot select database"); # Check If Record Exists 
$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
#define
$sql = "INSERT IGNORE INTO aiword3 (aiRcvBy,aiClient,aiCliDir,aiOpMgr,svcName,svcAddr,svcCity,svcSt,svcZip,svcRpt,
				    svcPh,sepInv,bAddr,bName,bCity,bSt,bZip,bCtName,bCtPh,bCtEm,
				    unarm,unarmRt,armed,armRt,rStd,rCas,rSTi,rPlo,rOth,sStd,
				    sCas,sSTi,sPlo,sOth,sdate1,stime1,etime1,nOfc1,h1,sdate2,
				    stime2,etime2,nOfc2,h2,sdate3,stime3,etime3,nOfc3,h3,sdate4,
				    stime4,etime4,nOfc4,h4,sdate5,stime5,etime5,nOfc5,h5,sdate6,
				    stime6,etime6,nOfc6,h6,sdate7,stime7,etime7,nOfc7,h7,sdate8,
				    stime8,etime8,nOfc8,h8,sdate9,stime9,etime9,nOfc9,h9,sdate10,
				    stime10,etime10,nOfc10,h10,sdate11,stime11,etime11,nOfc11,h11,sdate12,
				    stime12,etime12,nOfc12,h12,sdate13,stime13,etime13,nOfc13,h13,sdate14,
				    stime14,etime14,nOfc14,h14,cRad,qRad,tRad,cMob,qMob,tMob,
				    cVeh,qVeh,tVeh,cGrd,qGrd,tGrd,cNV,qNV,tNV,cHW,
				    qHW,tHW,cWT,qWT,tWT,cOth,qOth,tOth,driveY,Lunch3060,
				    LPaidUnpaid,htotal,print_name)
	 values(?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?,?,?,?,?,?,?,?,
		?,?,?)";

#prepare :: at 49

$q = $conn->prepare($sql);
#bind
$q->bindParam(1, $aiRcvBy);
$q->bindParam(2, $aiClient);
$q->bindParam(3, $aiCliDir);
$q->bindParam(4, $aiOpMgr);
$q->bindParam(5, $svcName); #5
$q->bindParam(6, $svcAddr);
$q->bindParam(7, $svcCity);
$q->bindParam(8, $svcSt);
$q->bindParam(9, $svcZip);
$q->bindParam(10, $svcRpt);
$q->bindParam(11, $svcPh);//first 11 ok
$q->bindParam(12, $sepInv);		
$q->bindParam(13, $bAddr);
$q->bindParam(14, $bName);
$q->bindParam(15, $bCity);
$q->bindParam(16, $bSt);	
$q->bindParam(17, $bZip);
$q->bindParam(18, $bCtName);	
$q->bindParam(19, $bCtPh);
$q->bindParam(20, $bCtEm);
$q->bindParam(21, $unarm); 
$q->bindParam(22, $unarmRt);//first 22 ok
$q->bindParam(23, $armed);
$q->bindParam(24, $armRt);
$q->bindParam(25, $rStd);#25
$q->bindParam(26, $rCas);#26	
$q->bindParam(27, $rSTi);#27	
$q->bindParam(28, $rPlo);#28	
$q->bindParam(29, $rOth);#29
$q->bindParam(30, $sStd);#30
$q->bindParam(31, $sCas);#31	
$q->bindParam(32, $sSTi);#32	
$q->bindParam(33, $sPlo);#33	
$q->bindParam(34, $sOth);#34//line 2 ok 34
	$q->bindParam(35,$d1);
	$q->bindParam(36,$s1);
	$q->bindParam(37,$e1);
	$q->bindParam(38,$n1);
	$q->bindParam(39,$h1);

	$q->bindParam(40,$d2);
	$q->bindParam(41,$s2);
	$q->bindParam(42,$e2);
	$q->bindParam(43,$n2);
	$q->bindParam(44,$h2);

	$q->bindParam(45,$d3);
	$q->bindParam(46,$s3);
	$q->bindParam(47,$e3);
	$q->bindParam(48,$n3);
	$q->bindParam(49,$h3);
	
	$q->bindParam(50,$d4);
	$q->bindParam(51,$s4);
	$q->bindParam(52,$e4);
	$q->bindParam(53,$n4);
	$q->bindParam(54,$h4);
	
	$q->bindParam(55,$d5);
	$q->bindParam(56,$s5);
	$q->bindParam(57,$e5);
	$q->bindParam(58,$n5);
	$q->bindParam(59,$h5);
	
	$q->bindParam(60,$d6);
	$q->bindParam(61,$s6);
	$q->bindParam(62,$e6);
	$q->bindParam(63,$n6);
	$q->bindParam(64,$h6);
	
	$q->bindParam(65,$d7);
	$q->bindParam(66,$s7);
	$q->bindParam(67,$e7);
	$q->bindParam(68,$n7);
	$q->bindParam(69,$h7);
	
	$q->bindParam(70,$d8);
	$q->bindParam(71,$s8);
	$q->bindParam(72,$e8);
	$q->bindParam(73,$n8);
	$q->bindParam(74,$h8);
	
	$q->bindParam(75,$d9);
	$q->bindParam(76,$s9);
	$q->bindParam(77,$e9);
	$q->bindParam(78,$n9);
	$q->bindParam(79,$h9);
	
	$q->bindParam(80,$d10);
	$q->bindParam(81,$s10);
	$q->bindParam(82,$e10);
	$q->bindParam(83,$n10);
	$q->bindParam(84,$h10);
	
	$q->bindParam(85,$d11);
	$q->bindParam(86,$s11);
	$q->bindParam(87,$e11);
	$q->bindParam(88,$n11);
	$q->bindParam(89,$h11);
	
	$q->bindParam(90,$d12);
	$q->bindParam(91,$s12);
	$q->bindParam(92,$e12);
	$q->bindParam(93,$n12);
	$q->bindParam(94,$h12);
	
	$q->bindParam(95,$d13);
	$q->bindParam(96,$s13);
	$q->bindParam(97,$e13);
	$q->bindParam(98,$n13);
	$q->bindParam(99,$h13);
	
	$q->bindParam(100,$d14);
	$q->bindParam(101,$s14);
	$q->bindParam(102,$e14);
	$q->bindParam(103,$n14);
	$q->bindParam(104,$h14);
//--------equipment	
	
$q->bindParam(105,$cRad);
$q->bindParam(106,$qRad);
$q->bindParam(107,$tRad);
	
$q->bindParam(108,$cMob);
$q->bindParam(109,$qMob);
$q->bindParam(110,$tMob);

$q->bindParam(111,$cVeh);
$q->bindParam(112,$qVeh);
$q->bindParam(113,$tVeh);
	
	
$q->bindParam(114,$cGrd);
$q->bindParam(115,$qGrd);
$q->bindParam(116,$tGrd);
	
$q->bindParam(117,$cNV);
$q->bindParam(118,$qNV);
$q->bindParam(119,$tNV);
	
$q->bindParam(120,$cHW); //<== here
$q->bindParam(121,$qHW);
$q->bindParam(122,$tHW);
	
$q->bindParam(123,$cWT);
$q->bindParam(124,$qWT);
$q->bindParam(125,$tWT);	

	
$q->bindParam(126,$cOth);
$q->bindParam(127,$qOth);
$q->bindParam(128,$tOth);	
	
	 $q->bindParam(129,$driveY);
	 $q->bindParam(130,$Lunch3060);
	 $q->bindParam(131,$LPaidUnpaid);
         $q->bindParam(132,$htotal);
	 $q->bindParam(133,$print_name);
/*	

*/


#execute
$q->execute();
#close
$conn=null;
# using the shortcut ->query() method here since there are no variable
# values in the select statement.
$DBH = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
$STH = $DBH->query("SELECT ts,aiRcvBy,aiClient,aiCliDir,aiOpMgr,svcName,svcAddr,svcCity,svcSt,svcZip,svcRpt,svcPh,
		    sepInv,bAddr,bName,bCity,bSt,bZip,bCtName,bCtPh,bCtEm,sepInv,unarm,unarmRt,armed,armRt,rStd,rCas,rSTi,rPlo,rOth,
		    sdate1,stime1,etime1,nOfc1,h1,sdate2,stime2,etime2,nOfc2,h2,sdate3,stime3,etime3,nOfc3,h3,sdate4,stime4,etime4,nOfc4,h4,
		    sdate5,stime5,etime5,nOfc5,h5,sdate6,stime6,etime6,nOfc6,h6,sdate7,stime7,etime7,nOfc7,h7,sdate8,stime8,etime8,nOfc8,h8,
		    sdate9,stime9,etime9,nOfc9,h9,sdate10,stime10,etime10,nOfc10,h10,sdate11,stime11,etime11,nOfc11,h11,
		    sdate12,stime12,etime12,nOfc12,h12,sdate13,stime13,etime13,nOfc13,h13,sdate14,stime14,etime14,nOfc14,h14,
		    cRad,qRad,tRad,cMob,qMob,tMob,cVeh,qVeh,tVeh,cGrd,qGrd,tGrd,cNV,qNV,tNV,cHW,qHW,tHW,cWT,qWT,tWT,cOth,qOth,tOth,
		    driveY,Lunch3060,LPaidUnpaid,htotal,print_name from aiword3  order by ts desc limit 1");
 
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);
 
while($row = $STH->fetch()) {
echo  "db:<br>";
    echo "1 ". $row['aiRcvBy'] . " 2 "; //DESIGNATES NEXT ROW
    echo $row['aiClient'] . " 3 ";
    echo $row['aiCliDir'] . " 4 ";
    echo $row['aiOpMgr'] . " 5 "; 
    echo $row['svcName'] . " 6 "; 
    echo $row['svcAddr'] . " 7 "; 
    echo $row['svcCity'] . " 8 "; 
    echo $row['svcSt'] . " 9 ";
    echo $row['svcZip'] . " 10 ";		
    echo $row['svcRpt'] . " 11 ";	
    echo $row['svcPh'] . " 12 ";

    echo $row['sepInv']. " 13 ";		
    echo $row['bAddr']. " 14 ";
    echo $row['bName']. " 15 ";
    echo $row['bCity']. " 16  ";
    echo $row['bSt']. " 17 ";	
    echo $row['bZip']. " 18 ";
    echo $row['bCtName']. " 19 ";	
    echo $row['bCtPh']. " 20 ";
    echo $row['bCtEm']. "  21 ";

    echo $row['unarm']. "  22 "; #21
    echo $row['unarmRt']. "  23 ";	#22
    echo $row['armed'] .  "  24 ";#23	
    echo $row['armRt']. "  25 ";#24
	
	 echo $row['rStd']. "  26 ";#25
	 echo $row['rCas']. "  27 ";#26	
	 echo $row['rSTi']. "  28 ";#27	
	 echo $row['rPlo']. "  29 ";#28	
	 echo $row['rOth']. "  30 ";#29

	 echo $row['sStd']. "  31 ";#30
	 echo $row['sCas']. "  32 ";#31	
	 echo $row['sSTi']. "  33 ";#32	
	 echo $row['sPlo']. "  34 ";#33	
	 echo $row['sOth'] . " 35  ";   #34
	 echo $row['sdate1'] . " 36 ";  #35
	 echo $row['stime1'] . " 37 ";
	  echo $row['etime1'] . " 38 ";
	  echo $row['nOfc1'] . " 39 ";
	  echo $row['h1'] . " 40 ";
	echo $row['sdate2'] . " 41 ";  #35
	 echo $row['stime2'] . " 42 ";
	  echo $row['etime2'] . " 43 ";
	  echo $row['nOfc2'] . " 44 ";
	  echo $row['h2'] . " 45 ";
	echo $row['sdate3'] . " 46 ";  #35
	 echo $row['stime3'] . " 47 ";
	  echo $row['etime3'] . " 48 ";
	  echo $row['nOfc3'] . " 49 ";
	  echo $row['h3'] . " 50 ";
	echo $row['sdate4'] . " 51 ";  #35
	 echo $row['stime4'] . " 52 ";
	  echo $row['etime4'] . " 53 ";
	  echo $row['nOfc4'] . " 54 ";
	  echo $row['h4'] . " 55 ";
	echo $row['sdate5'] . " 46 ";  #40
	 echo $row['stime5'] . " 47 ";
	  echo $row['etime5'] . " 48 ";
	  echo $row['nOfc5'] . " 49 ";
	  echo $row['h5'] . " 50 ";
	echo $row['sdate6'] . " 51 ";  #
	 echo $row['stime6'] . " 52 ";
	  echo $row['etime6'] . " 53 ";
	  echo $row['nOfc6'] . " 54 ";
	  echo $row['h6'] . " 55 ";
	echo $row['sdate7'] . " 46 ";  #40
	 echo $row['stime7'] . " 47 ";
	  echo $row['etime7'] . " 48 ";
	  echo $row['nOfc7'] . " 49 ";
	  echo $row['h7'] . " 50 ";
	echo $row['sdate8'] . " 51 ";  #
	 echo $row['stime8'] . " 52 ";
	  echo $row['etime8'] . " 53 ";
	  echo $row['nOfc8'] . " 54 ";
	  echo $row['h8'] . " 55 ";
	echo $row['sdate9'] . " 56 ";  #40
	 echo $row['stime9'] . " 57 ";
	  echo $row['etime9'] . " 58 ";
	  echo $row['nOfc9'] . " 59 ";
	  echo $row['h9'] . " 60 ";
	echo $row['sdate10'] . " 61 ";  #
	 echo $row['stime10'] . " 62 ";
	  echo $row['etime10'] . " 63 ";
	  echo $row['nOfc10'] . " 64 ";
	  echo $row['h10'] . " 65 ";
	echo $row['sdate11'] . " 66 ";  #40
	 echo $row['stime11'] . " 67 ";
	  echo $row['etime11'] . " 68 ";
	  echo $row['nOfc11'] . " 69 ";
	  echo $row['h11'] . " 70 ";
	echo $row['sdate12'] . " 71 ";  #
	 echo $row['stime12'] . " 72 ";
	  echo $row['etime12'] . " 73 ";
	  echo $row['nOfc12'] . " 74 ";
	  echo $row['h12'] . " 75 ";
      echo $row['sdate13'] . " 76 ";  #40
	 echo $row['stime13'] . " 77 ";
	  echo $row['etime13'] . " 78 ";
	  echo $row['nOfc13'] . " 79 ";
	  echo $row['h13'] . " 80 ";
	echo $row['sdate14'] . " 81 ";  #
	 echo $row['stime14'] . " 82 ";
	  echo $row['etime14'] . " 83 ";
	  echo $row['nOfc14'] . " 84 ";
	  echo $row['h14'] . " 85 ";
 echo $row['cRad'] . " 86 ";
 echo $row['qRad'] . " 87 ";
 echo $row['tRad'] . " 88 ";

 echo $row['cMob'] . " 89 ";
 echo $row['qMob'] . " 90 ";
 echo $row['tMob'] . " 91 ";

 echo $row['cVeh'] . " 92 ";
 echo $row['qVeh'] . " 93 ";
 echo $row['tVeh'] . " 94 ";

 echo $row['cGrd'] . " 95 ";
 echo $row['qGrd'] . " 96 ";
 echo $row['tGrd'] . " 97 ";

 echo $row['cNV'] . " 98 ";
 echo $row['qNV'] . " 99 ";
 echo $row['tNV'] . " 100 ";

 echo $row['cHW'] . " 101 ";
 echo $row['qHW'] . " 102 ";
 echo $row['tHW'] . " 103 ";

 echo $row['cWT'] . " 104 ";
 echo $row['qWT'] . " 105 ";
 echo $row['tWT'] . " 106 ";

 echo $row['cOth'] . " 107 ";
 echo $row['qOth'] . " 108 ";
 echo $row['tOth'] . " 109 ";

 echo $row['driveY'] . " 110 ";
 echo $row['Lunch3060'] . " 111 ";
 echo $row['LPaidUnpaid'] . " 112 ";
 echo $row['htotal'] . " 113 ";
 echo $row['print_name'] ;

  echo "  timestamp: " . $row['ts']; 

}
$DBH=null;
//send an email receipt
if(($result == 1) && (!empty($aiRcvEm)) ){
include('remote.php');
include('AI_wo_em.php');
} else {
include('remote.php');
}
?>
