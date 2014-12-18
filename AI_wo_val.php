<?php 
function validate() {
	$aiRcvEm = $_SESSION['email']; //login htaccess?
	//echo $_SESSION['email'];
	$check_today = date("Y-n-j");
	$check_today_t = strtotime($check_today); //time datatype for comparison
		//Set error flag here
		global $error;
		$error = 0;
	$aiRcvDt = $_POST['today_date']; #readonly
	$aiCCPO = htmlspecialchars($_POST['aiCCPO']); ##readonly Branch 776
//------form name, tab order, PDO placement
	$aiRcvBy = htmlspecialchars($_POST['aiRcvBy']); #1 Submitted By
	//echo "val aiRcvBy: " . $aiRcvBy . " | ";
	$aiClient = htmlspecialchars($_POST['aiClient']); #2 AMDA Editable Client Name
	//echo "val aiClient: " . $aiClient . " | ";
	$aiCliDir= htmlspecialchars($_POST['aiCliDir']); #3 text area
	//echo "val aiCliDir: " . $aiCliDir  . " | ";

	$aiCCBr = htmlspecialchars($_POST['aiCCBr']); #N/A AMDA  
	$aiBill = htmlspecialchars($_POST['aiBill']);
	$aiCSC = htmlspecialchars($_POST['aiCSC']);
/*--debug if */
	$svcName = htmlspecialchars($_POST['svcName']);
	//echo strlen($svcName);
	$aiOpMgr = htmlspecialchars($_POST['aiOpMgr']); #4 Javier Acuna 
	$svcAddr = htmlspecialchars($_POST['svcAddr']); #6
	$svcCity = htmlspecialchars($_POST['svcCity']); #7
	$svcSt = htmlspecialchars($_POST['svcSt']); #8
	$svcZip = htmlspecialchars($_POST['svcZip']); #9		
	$svcRpt = htmlspecialchars($_POST['svcRpt']); #10	
	$svcPh = htmlspecialchars($_POST['svcPh']); #11
	//echo $svcPh;
	$sepInv = htmlspecialchars($_POST['sepInv']); #12		
	$bAddr = htmlspecialchars($_POST['bAddr']); #13
	$bName = htmlspecialchars($_POST['bName']); #14
	$bCity = htmlspecialchars($_POST['bCity']); #15
	$bSt = htmlspecialchars($_POST['bSt']); #16	
	$bZip = htmlspecialchars($_POST['bZip']); #17
	$bCtName = htmlspecialchars($_POST['bCtName']); #18	
	$bCtPh = htmlspecialchars($_POST['bCtPh']); #19
	$bCtEm = htmlspecialchars($_POST['bCtEm']); #20
	$sepInv = htmlspecialchars($_POST['sepInv']); #20
	$unarm = $_POST['unarm']; #21
	$unarmRt = htmlspecialchars($_POST['unarmRt']);	#22
	$armed = $_POST['armed'];#23
	$armRt = htmlspecialchars($_POST['armRt']);#24
	
	$rStd = htmlspecialchars($_POST['rStd']);#25
	$rCas = htmlspecialchars($_POST['rCas']);#26	
	$rSTi = htmlspecialchars($_POST['rSTi']);#27	
	$rPlo = htmlspecialchars($_POST['rPlo']);#28	
	$rOth = htmlspecialchars($_POST['rOth']);#29

	$sStd = htmlspecialchars($_POST['sStd']);#30
	if (empty($sStd)) unset($rStd); else $rStd;
	$sCas = htmlspecialchars($_POST['sCas']);#31
	$sSTi = htmlspecialchars($_POST['sSTi']);#32	
	$sPlo = htmlspecialchars($_POST['sPlo']);#33
	if (empty($sPlo)) unset($rPlo); else $rPlo;
	$sOth = htmlspecialchars($_POST['sOth']);#34
	if (empty($sOth)) unset($rOth); else $rOth;
	$d1 = htmlspecialchars(trim($_POST['d1']));
	if (empty($d1)){$d1='1/0/1900';} 
	$s1 = htmlspecialchars($_POST['s1']);
	$e1 = htmlspecialchars($_POST['e1']);
	$n1 = htmlspecialchars($_POST['n1']);
	$h1 = htmlspecialchars($_POST['h1']);
	
	$d2 = htmlspecialchars(trim($_POST['d2']));
	if (empty($d2))$d2='1/0/1900';else $d2;
	$s2 = htmlspecialchars($_POST['s2']);
	$e2 = htmlspecialchars($_POST['e2']);
	$n2 = htmlspecialchars($_POST['n2']);
	$h2 = htmlspecialchars($_POST['h2']);
	
	$d3 = htmlspecialchars(trim($_POST['d3']));
	if (empty($d3))$d3='1/0/1900';else $d3;
	$s3 = htmlspecialchars($_POST['s3']);
	$e3 = htmlspecialchars($_POST['e3']);
	$n3 = htmlspecialchars($_POST['n3']);
	$h3 = htmlspecialchars($_POST['h3']);
	
	$d4 = htmlspecialchars(trim($_POST['d4']));
	if (empty($d4))$d4='1/0/1900';else $d4;
	$s4 = htmlspecialchars($_POST['s4']);
	$e4 = htmlspecialchars($_POST['e4']);
	$n4 = htmlspecialchars($_POST['n4']);
	$h4 = htmlspecialchars($_POST['h4']);
	
	$d5 = htmlspecialchars($_POST['d5']);
	if (empty($d5))$d5='1/0/1900';else $d5;
	$s5 = htmlspecialchars($_POST['s5']);
	$e5 = htmlspecialchars($_POST['e5']);
	$n5 = htmlspecialchars($_POST['n5']);
	$h5 = htmlspecialchars($_POST['h5']);
	
	$d6 = htmlspecialchars($_POST['d6']);
	if (empty($d6))$d6='1/0/1900';else $d6;
	$s6 = htmlspecialchars($_POST['s6']);
	$e6 = htmlspecialchars($_POST['e6']);
	$n6 = htmlspecialchars($_POST['n6']);
	$h6 = htmlspecialchars($_POST['h6']);
	
	$d7 = htmlspecialchars($_POST['d7']);
	if (empty($d7))$d7='1/0/1900';else $d7;
	$s7 = htmlspecialchars($_POST['s7']);
	$e7 = htmlspecialchars($_POST['e7']);
	$n7 = htmlspecialchars($_POST['n7']);
	$h7 = htmlspecialchars($_POST['h7']);
	
	$d8 = htmlspecialchars($_POST['d8']);
	if (empty($d1))$d1='1/0/1900';else $d8;
	$s8 = htmlspecialchars($_POST['s8']);
	$e8 = htmlspecialchars($_POST['e8']);
	$n8 = htmlspecialchars($_POST['n8']);
	$h8 = htmlspecialchars($_POST['h8']);
	
	$d9 = htmlspecialchars($_POST['d9']);
	if (empty($d9))$d9='1/0/1900';else $d9;
	$s9 = htmlspecialchars($_POST['s9']);
	$e9 = htmlspecialchars($_POST['e9']);
	$n9 = htmlspecialchars($_POST['n9']);
	$h9 = htmlspecialchars($_POST['h9']);
	
	$d10 = htmlspecialchars($_POST['d10']);
	if (empty($d10))$d10='1/0/1900';else $d10;
	$s10 = htmlspecialchars($_POST['s10']);
	$e10 = htmlspecialchars($_POST['e10']);
	$n10 = htmlspecialchars($_POST['n10']);
	$h10 = htmlspecialchars($_POST['h10']);
	
	$d11 = htmlspecialchars($_POST['d11']);
	if (empty($d11))$d11='1/0/1900';else $d11;
	$s11 = htmlspecialchars($_POST['s11']);
	$e11 = htmlspecialchars($_POST['e11']);
	$n11 = htmlspecialchars($_POST['n11']);
	$h11 = htmlspecialchars($_POST['h11']);
	
	$d12 = htmlspecialchars($_POST['d12']);
	if (empty($d12))$d12='1/0/1900';else $d12;
	$s12 = htmlspecialchars($_POST['s12']);
	$e12 = htmlspecialchars($_POST['e12']);
	$n12 = htmlspecialchars($_POST['n12']);
	$h12 = htmlspecialchars($_POST['h12']);
	
	$d13 = htmlspecialchars($_POST['d13']);
	if (empty($d13))$d13='1/0/1900';else $d13;
	$s13 = htmlspecialchars($_POST['s13']);
	$e13 = htmlspecialchars($_POST['e13']);
	$n13 = htmlspecialchars($_POST['n13']);
	$h13 = htmlspecialchars($_POST['h13']);
	
	$d14 = htmlspecialchars($_POST['d14']);
	if (empty($d14))$d14='1/0/1900';else $d14;
	$s14 = htmlspecialchars($_POST['s14']);
	$e14 = htmlspecialchars($_POST['e14']);
	$n14 = htmlspecialchars($_POST['n14']);
	$h14 = htmlspecialchars($_POST['h14']);
	
	$htotal = htmlspecialchars($_POST['htotal']);
	
	$driveY = htmlspecialchars($_POST['driveY']);
	//$driveN = htmlspecialchars($_POST['driveN']);
	$Lunch3060 = htmlspecialchars($_POST['Lunch3060']);
	$LPaidUnpaid = htmlspecialchars($_POST['LPaidUnpaid']);
		
	$cRad = htmlspecialchars($_POST['cRad']);
	$qRad = htmlspecialchars($_POST['qRad']);
	$tRad = htmlspecialchars($_POST['tRad']);
	
	$cMob = htmlspecialchars($_POST['cMob']);
	$qMob = htmlspecialchars($_POST['qMob']);
	$tMob = htmlspecialchars($_POST['tMob']);

	$cVeh = htmlspecialchars($_POST['cVeh']);
	$qVeh = htmlspecialchars($_POST['qVeh']);
	$tVeh = htmlspecialchars($_POST['tVeh']);
	
	
	$cGrd = htmlspecialchars($_POST['cGrd']);
	$qGrd = htmlspecialchars($_POST['qGrd']);
	$tGrd = htmlspecialchars($_POST['tGrd']);
	
	$cNV= htmlspecialchars($_POST['cNV']);
	$qNV= htmlspecialchars($_POST['qNV']);
	$tNV= htmlspecialchars($_POST['tNV']);
	
	$cHW= htmlspecialchars($_POST['cHW']);
	$qHW= htmlspecialchars($_POST['qHW']);
	$tHW= htmlspecialchars($_POST['tHW']);
	
	$cWT= htmlspecialchars($_POST['cWT']);
	$qWT= htmlspecialchars($_POST['qWT']);
	$tWT= htmlspecialchars($_POST['tWT']);	
	
	$cOth= htmlspecialchars($_POST['cOth']);
	$qOth= htmlspecialchars($_POST['qOth']);
	$tOth= htmlspecialchars($_POST['tOth']);
//strlen(concatCheckboxes Attire)
	
	$sAttire = $sStd.$sSTi.$sPlo.$sOth.$sCas;
	#echo "Concat Str: " . $sAttire . "<BR>";
	$len = strlen($sAttire);
	#echo "Length :" . $len;
  
	
	$print_name = htmlspecialchars($_POST['print_name']);
	//Highlight unfilled mandatory fields- removed AMDA || (!$aiBill)
	 if ((!$aiRcvBy) || (!$aiCliDir) || (!$svcName) || (!$svcAddr) || (!$svcCity) 
	    || (!$svcRpt) || (!$svcPh)  || (!$svcSt) || ($d1=='1/0/1900') || (!$s1) || (!$e1) || (!$n1) || (!$h1) 
	    || (!$print_name))  
	{
	$error_msg = "<li> The highlighted field is required, please fill in and re-submit."; 
	$error = 0;
	} else $error = 1;
	//must run the guantlet
	if (empty($svcName)) {
	//echo $svcName . "Length " . strlen($svcName);
	  echo '<style type="text/css">INPUT.svcName{background-color:gold;border: 1px solid red;height: 18px;}</style>';
	 }
	if(!$print_name){
	echo '<style type="text/css">INPUT.print_name {background-color:gold;border: 1px solid red;height: 18px;position:relative;top:-4px;left:0px}</style>';
	  }
	 if(!$aiClient){
	 echo '<style type="text/css">INPUT.aiClient {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }  
	  $cliDirlen=0;
	  $cliDirlen = strlen($aiCliDir);
	      #echo $cliDirlen;
	  if(strlen($aiCliDir) < 1){
	 echo '<style type="text/css">span.aiCliLabel {background-color:gold;border-radius:3px;border: 1px solid red;position:relative;left:25px;top:3px;font-family: Verdana, sans-serif;font-size:17px;color:grey}</span>';
	  }
	  if(!$aiRcvBy){
	 echo '<style type="text/css">INPUT.aiRcvBy {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }	 
	if(!$svcCity){
	 echo '<style type="text/css">INPUT.svcCity {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }	 
	  if(!$svcAddr){
	 echo '<style type="text/css">INPUT.svcAddr {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }	 
	  if(!$svcRpt){
	 echo '<style type="text/css">INPUT.svcRpt {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }	 
	  if(!$svcPh){
	echo strlen($svcPh);
	 echo '<style type="text/css">INPUT.svcPh {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }
	  if(!$svcSt){
	 echo '<style type="text/css">input.svcSt {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }
  	 if($d1=='1/0/1900'){
	 echo '<style type="text/css">INPUT.d1 {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }
	  	 if(!$s1){
	 echo '<style type="text/css">INPUT.s1 {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }
	  	 if(!$e1){
	 echo '<style type="text/css">INPUT.e1 {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }
	  	 if(!$n1){
	 echo '<style type="text/css">INPUT.n1 {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	  }
	  	 if(!$h1){
	 echo '<style type="text/css">INPUT.h1 {background-color:gold;border: 1px solid red;height: 18px;}</style>';
	 }
		if($len < 3){ #line 213 gets length $sAttire 
	 echo '<style type="text/css">span.Attire {background-color:gold;height: 18px;}</style>';
	  }
	
	 //SEND TO PROCESSING 1 DO NOT PROCESS 0
	 if($error == 1)
		{
	//	echo "<div  style=\"position: absolute; float: left; left: 10px;  top: 70px; z-index: 16; color: blue; font-weight: 400;font-size: 11px\">";
	//	echo "Process form: $error</div>";
	//	include('AI_wo_proc.php');
		include('connectPDO2.php');
		}
	else
		{ //error_msg placement
		echo "<div  style=\"padding: 10px; position: absolute; float: right; right: 75px; top: 3px; z-index: 16; color: blue; background-color:white;border: 3px solid #597ccf ;font-weight:normal;font-size: 12px;border-radius:5px\"> Please address the following:<ul>$error_msg</ul></div>";
		}

	 }
?>	
