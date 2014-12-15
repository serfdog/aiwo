<?php 
//echo $_SERVER['PHP_AUTH_USER'] . " AUTH<BR>";
//echo $_SERVER['PHP_REMOTE_USER'] . " REMOTE<BR>";
define('INCLUDE_CHECK',true);
//CONNECT  
include('connectPDO.php');
include('AI_wo_val.php');
?>
<!DOCTYPE html>

<head>
<title>AI Work Order online</title>
<meta charset=utf-8">
<link rel="icon" 
      type="image/ico" 
      href="http://www.aiatss2.com/andrews/WorkOrder/favicon.ico">
<LINK REL="SHORTCUT ICON" HREF="http://www.aiatss2.com/andrews/WorkOrder/favicon.ico">
<LINK REL=StyleSheet HREF="css/AI_wo.css" TYPE="text/css">
<LINK REL=StyleSheet HREF="css/dpck.css" TYPE="text/css">

<script language='JavaScript' type='text/javascript' src='js/dpck.js'></script>
<script language='JavaScript' type='text/javascript' src='js/l3060.js'></script>
<script language='JavaScript' type='text/javascript' src='js/chr.js'></script>
<script language='JavaScript' type='text/javascript' src='js/sa.js'></script>
<style>
*:focus {outline:none;}
textarea#aiCliDir {	
	border: 3px solid #cccccc;
	padding: 5px;
	font-family: Verdana, sans-serif;
	font-size: 12px;
	background: url(images/ailogo200.gif) top right no-repeat;
	background-attachment:fixed
	position:relative;top:-4px;
    -webkit-appearance: none;
   -webkit-box-shadow: 1px 1px 1px #fff;
   -webkit-border-radius: 0.5em;
       border-radius: 5px;
	}
textarea#aiCliDir:focus {background: #f5f5f5;border:3px solid blue;background: url(images/ailogo200.gif) top right no-repeat;
	background-attachment:fixed
	position:relative;top:-4px;
	-webkit-appearance: none;
	border-radius: 5px;
}

input {	font-family: Verdana, sans-serif;
	font-size: 12px;}
input.svcName {box-sizing:content-box;height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.svcName:focus {background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;}

/*input.aiRcvBy {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;
	    border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.aiRcvBy:focus{background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;} */
input.svcAddr {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;
	    border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.svcAddr:focus {background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;}
input.svcCity {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;
	    border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.svcCity:focus {background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;}
input.svcSt{height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;
	    border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.svcSt:focus {background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;}
input.svcRpt {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;
	    border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.svcRpt:focus {background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;}
input.svcPh {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;
	    border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.svcPh:focus {background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;}

input.aiClient{height: 18px;font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;
	    border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.aiClient:focus {background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;}

input.print_name{height: 18px;font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;text-align:left;
	    border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
input.print_name:focus {background: #f5f5f5;border:1px solid blue;border-radius: 3px;text-align:center;}
input.reqd {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;border-collapse:collapse;border: 1pt solid  #CC1100;border-radius: 3px; }
input.nreqd {height: 18px; font-family: Verdana, sans-serif;font-size:12px;border-collapse:collapse;border: 1pt solid #F0C2B2;border-radius: 3px;}
input.nreqdate {height: 18px; font-family: Verdana, sans-serif;font-size:12px;border-collapse:collapse;border: 1pt solid #F0C2B2;border-radius: 3px;text-align:center}
input.nreqd:focus {
    background: #f5f5f5; 
    border:1px solid blue;  
    border-radius: 3px; 
   text-align:center;
}
input.rdonly {height: 18px; font-family: Verdana, sans-serif;font-size:12px;border-collapse:collapse;border: 1pt solid #F0C2B2;border-radius: 3px;text-align:left;}
input.d1 {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;border-collapse:collapse;border: 1pt solid  #CC1100; border-radius: 3px;}
input.s1 {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;border-collapse:collapse;border: 1pt solid  #CC1100; border-radius: 3px;text-align:center;}
input.s1:focus {
    background: #f5f5f5; 
    border:1px solid blue;  
    border-radius: 3px; 
   text-align:center;
}
input.e1 {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;border-collapse:collapse;border: 1pt solid  #CC1100;border-radius: 3px;text-align:center;}
input.e1:focus {
    background: #f5f5f5; 
    border:1px solid blue;  
    border-radius: 3px; 
   text-align:center;
}
input.n1 {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;border-collapse:collapse;border: 1pt solid  #CC1100;border-radius: 3px;text-align:center;}
input.n1:focus {
    background: #f5f5f5; 
    border:1px solid blue;  
    border-radius: 3px; 
    text-align:center;
}
input.h1 {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;border-collapse:collapse;border: 1pt solid  #CC1100;border-radius: 3px;text-align:center;}
input.htotal {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#EBEBE0;border-collapse:collapse;border: 1pt solid  #CC1100;border-radius: 3px;text-align:center}
span.Officer {position:relative;top:-1px;background-color:#D8D8BF;height: 15px;border-collapse:collapse;border: 1pt solid #CC1100;border-radius: 3px;}
span.Attire {position:relative;top:-2px;background-color:#D8D8BF;height: 15px;border-collapse:collapse;border: 1pt solid  #CC1100;border-radius: 3px;}
span.DriveY {position:relative;top:-2px;background-color:#D8D8BF;height: 15px;border-collapse:collapse;border: 1pt solid  #CC1100; border-radius: 3px;}
input.wolowbill {height: 18px; font-family: Verdana, sans-serif;font-size:12px;border-collapse:collapse;border: 1pt solid #F0C2B2;
}
input.wolowbill1 {height: 18px; font-family: Verdana, sans-serif;font-size:12px;background-color:#FFFFAA	;border-collapse:collapse;border: .5pt dotted brown;
}


/* Hover tooltips */
7
.field-tip {
    position:relative;
    cursor:help;
}
    .field-tip .tip-content {
        position:absolute;
        top:390px; /* - top padding */
        left:47px;
        width:150px;
        margin-right:0px; /* width + left/right padding */
        padding:10px;
        color:#fff;
        background:#333;
        -webkit-box-shadow:2px 2px 5px #aaa;
           -moz-box-shadow:2px 2px 5px #aaa;
                box-shadow:2px 2px 5px #aaa;
        opacity:0;
        -webkit-transition:opacity 250ms ease-out;
           -moz-transition:opacity 250ms ease-out;
            -ms-transition:opacity 250ms ease-out;
             -o-transition:opacity 250ms ease-out;
                transition:opacity 250ms ease-out;
    }
 /* <http://css-tricks.com/snippets/css/css-triangle/> */
        .field-tip .tip-content:before {
            content:' '; /* Must have content to display */
            position:absolute;
            top:50%;
            right:-16px;  /*2 x border width */
            width:0;
            height:0;
            margin-top:-8px; /* - border width */
            border:8px solid transparent;
            border-left-color:#333;
        }
        .field-tip:hover .tip-content {
	    top:390px;
            left:47px;
            opacity:1;
        }
</style>
<? //-----set aiRcvBy input
#echo $_SERVER['PHP_AUTH_USER'] . " AUTH<BR>";
#echo $_SERVER['PHP_REMOTE_USER'] . " REMOTE<BR>";
$CurrUser='';
if (($_SERVER['PHP_REMOTE_USER'] === 'crafidi@amda.edu') ||  ($_SERVER['PHP_AUTH_USER'] === 'crafidi@amda.edu')) $CurrUser = 'Christian Rafini';
if (($_SERVER['PHP_REMOTE_USER'] === 'tzimbardi@amda.edu') ||  ($_SERVER['PHP_AUTH_USER'] === 'tzimbardi@amda.edu' )) $CurrUser = 'Tony Zimbardi';
if (($_SERVER['PHP_REMOTE_USER'] === 'jgalgano@amda.edu')||  ($_SERVER['PHP_AUTH_USER'] === 'jgalgano@amda.edu')) $CurrUser = 'John Galgano';
if (($_SERVER['PHP_REMOTE_USER'] === 'John')||  ($_SERVER['PHP_AUTH_USER'] === 'John')) $CurrUser = 'John Wilson';
#echo "<br>";
#echo $CurrUser;
if (array_key_exists('_submit_check', $_POST)) {
validate();
} ?>
 
</head>

<body bgcolor="#8B8B7A" link=blue vlink=purple>

<form align="center" name="aiword" method="post" action="<?=$_SERVER['PHP_SELF'] ?>">
 <input type="hidden" name="_submit_check" value="1"/>
 <table align="center" bgcolor="white" x:str border=0 cellpadding=0 cellspacing=0 width=650 style='border-collapse:
 collapse;table-layout:fixed;width:600pt;border:5px solid #D8D8BF'>
   <col width=74 span=9 style='width:48pt'>
   <col width=43 style='mso-width-source:userset;mso-width-alt:1572;width:32pt'>
   <tr height=28 style='height:40.0pt'>
   
     <td colspan=10 height=28 class=xl24 style='height:21.0pt;
  width:650pt'><img src="images/ailogo200.gif" width="100" height="50"> </td>
   </tr>
   <tr height=28 style='height:30.0pt'>
     <td colspan=10 align="center" class=xl24 style='height:40.0pt;width:650pt;border-bottom:none'><SPAN STYLE="font-family: Verdana, sans-serif;font-size:20px">Client Support Center Work Order</span><br><input tabindex=-1 style="text-align:center"  size="31" class="reqd" value="Example of Required Field!"><br>
      &nbsp;<br></td>
   </tr>
   <tr height=20 style='height:12.75pt'>
     <td colspan=2 height=20 class=xl51 style='height:15.75pt;border-top:2px solid black'>Date Submitted</td>
     <td colspan=3 class=xl29 style='border-right:1.0pt solid black;border-left:none;border-top:2px solid black'>
    <input  class=rdonly name="aiRcvDt" type="text" size="22" value="<? echo date('l m-d-Y'); ?>" tabindex="-1" id="aiRcvDt" readonly>
       <!-- form input: svc_name --></td>
     <td colspan=2 class=xl53 style='border-top:2px solid black;text-align:left'>Requestor</td>
     <td colspan=3 class=xl29 style='border-right:.5pt solid black;border-left:none;border-top:2px solid black'><input class=rdonly name="aiRcvBy" type="text" size="22" value="<? echo $CurrUser; ?>" id="aiRcvBy" tabindex=1 readonly >
       <!-- form input: bill_name --></td>
   </tr>
   <tr height=20 style='height:15.75pt'>
     <td colspan=2 height=18 class=xl51 style='height:15.75pt;border-top:none'>Branch Number</td>
     <td colspan=3 class=xl31 style='border-right:1.0pt solid black;border-left:
  none'><input class=rdonly name="aiCCPO" type="text" size="22" value="<? echo "776"; ?>" id="aiCCPO" tabindex="-1" readonly >
         <!-- form input: svc_addr --></td>
     <td colspan=2 class=xl53 style='border-top:none;text-align:left'>Client Name</td>
     <td colspan=3 class=xl31 style='border-right:.5pt solid black;border-left:none;height:18px'><input style="height:18px" class="aiClient" name="aiClient" type="text" size="22" value="AMDA" id="aiClient" tabindex=2>
         <!-- form input: bill_addr --></td>
   </tr>
   <!--<tr height=20 style='height:18.75pt'>
     <td colspan=2 height=18 class=xl51 style='height:15.75pt;border-top:none'>Rank Code (BR# not 781)</td>
     <td height="18" colspan=3 valign="top" class=xl29 style='border-right:1.0pt solid black;border-left:none'>
         <input class=aiCCBr name="aiCCBr" type="text" size="22" value="<?=$_POST['aiCCBr']?>" id="aiCCBr" tabindex=6></td>
     <td height="18" colspan=2 valign="top" class=xl53 style='border-top:none'>AI Billing Representative</td>
     <td height="18" colspan=3 valign="top" class=xl29 style='border-right:.5pt solid black;border-left:none;	'><input class=aiBill name="aiBill" type="text" size="22" value="<?=$_POST['aiBill']?>" id="aiBill" tabindex=4>
     </td></tr> -->
<tr height=18 style='height:18px'>


     <td colspan=2 height=15 valign="top" style='height:15.75pt;border-top:none;border-right:none'><span style="float;position:relative;left:25px;font-family: Verdana, sans-serif;font-size:17px;color:grey">Enter Directives Here:</span> <!--<span style='color:grey;font-weight:bold;font-family: Verdana, sans-serif;font-size:11px'>Use  temp Rank Code 00/00</span> --></td>
     <td colspan=3 valign="top" style='border-right:1.0pt solid black;border-left:none'>
	<!-- <input type="checkbox" onClick="zeroRC(this.form)" id="tempRC" name="tempRC"> -->
     <td colspan=2 valign="top" class=xl53 style='border-top:none;text-align:left'>Account Manager</td>
     <td colspan=3 valign="top" class=xl29 style='border-right:.5pt solid black;border-left:none;'><input class=rdonly name="aiOpMgr" type="text" size="22" readonly  value="Javier Acuna" id="aiOpMgr" tabindex=-1>
         <!-- form input: bill_city  --></td>
   </tr>  <!--<tr>
       <td colspan=10 height=25 valign="top" class=xl51 style='height:24.75pt;border-top:none;font-family: Verdana, sans-serif;font-size:9px'>IF BRANCH NUMBER IS NOT 781 a Rank Code MUST be assigned to complete the work order. Rank codes are established by the responsible billing party.<br> Biller (or scheduler) can get additional information by contacting Tina Mukai.<br>&nbsp;</td>
     </tr> -->
<td colspan=2></td>
   <tr height=18 style='height:12.75pt'>
       <td height=18 colspan=10 valign="top" class=xl47 style='height:75.75pt;text-align:center'>
<textarea  name="aiCliDir" cols="92" rows="8" id="aiCliDir" tabindex=3>
<?php echo htmlspecialchars($_POST['aiCliDir']);?> </textarea>
      </td>
   </tr>
   <tr height=22 style='height:22px'>
     <td colspan=4 height=18  class=xl48 style='height:12.75pt'><span style="position:relative;top:-6px">Service Address</span></td>
     <td colspan=6 class=xl49 style='border-right:.5pt solid black'><span style="position:relative;left:30px">Billing
       Address <input type="checkbox" onClick="sameSvc(this.form);" id="sameChk" name="sameChk"><span style="font-weight:normal;font-family: Verdana, sans-serif;font-size:10px;position:relative;top:-5px;">SAME AS Service Address</span>&nbsp;&nbsp;<input type='checkbox' onClick="rosGA(this.form);" id="fillRos" name="fillRos"><span style="font-weight:normal;font-family: Verdana, sans-serif;font-size:11px;position:relative;top:-5px">USSA Roswell, GA</span>
</td>
   </tr>
   <tr height=20 style='height:12.75pt'>
     <td height=20 class=xl51 style='height:15.75pt;border-top:none;text-align:left'>Name</td>
     <td colspan=4 class=xl29 style='border-right:1.0pt solid black;border-left:
  none'><span class="field-tip"><input class=svcName name="svcName" type="text" size="34" value="<?=$_POST['svcName']?>" id="svcName" tabindex=9 placeholder="Enter the Location at AMDA"><span class="tip-content">TAB Advances cursor</span></span>
         <!-- form input: svc_name --></td>
     <td class=xl53 style='border-top:none;text-align:left'>Name</td>
     <td colspan=4 class=xl29 style='border-right:.5pt solid black;border-left:none;'><input class=nreqd  name="bName" type="text" size="34" value="<?=$_POST['bName']?>" id="bName" tabindex=17>
         <!-- form input: bill_name --></td>
   </tr>
   <tr height=20 style='height:15.75pt'>
     <td height=20 class=xl51 style='height:15.75pt;border-top:none;text-align:left'>Address</td>
     <td colspan=4 class=xl31 style='border-right:1.0pt solid black;border-left:
  none'><input class=svcAddr name="svcAddr" type="text" size="34" value="<?=$_POST['svcAddr']?>" id="svcAddr" tabindex=10 placeholder="Enter Location Address">
         <!-- form input: svc_addr --></td>
     <td class=xl53 style='border-top:none;text-align:left'>Address</td>
     <td colspan=4 class=xl31 style='border-right:.5pt solid black;border-left:none;'><input class=nreqd  name="bAddr" type="text" size="34" value="<?=$_POST['bAddr']?>" id="bAddr"  tabindex=18>
         <!-- form input: bill_addr --></td>
   </tr>
   <tr height=20 style='height:15.75pt'>
     <td height=20 class=xl51 style='height:15.75pt;border-top:none;text-align:left'>City</td>
     <td colspan=4 class=xl29 style='border-right:1.0pt solid black;border-left:none'><input class=svcCity name="svcCity" type="text" size="34" value="<?=$_POST['svcCity']?>" id="svcCity" tabindex=11 placeholder="Enter City">
         <!-- form input: svc_city --></td>
     <td class=xl53 style='border-top:none;text-align:left'>City</td>
     <td colspan=4 class=xl29 style='border-right:.5pt solid black;border-left:none;	'><input class=nreqd name="bCity" type="text" size="34" value="<?=$_POST['bCity']?>" id="bCity" tabindex=19>
         <!-- form input: bill_city --></td>
   </tr>
   <tr height=17 style='height:15.75pt'>
     <td height=17 class=xl51 style='height:12.75pt;border-top:none;text-align:left'>State</td>
     <td class=xl55 style='border-top:none;border-left:none'><input class=svcSt name="svcSt" type="text" size="3" value="<?=$_POST['svcSt']?>" id="svcSt" tabindex=12>
         <!-- form input: svc_state --></td>
     <td class=xl51 style='border-top:none;border-left:none'>Zip</td>
     <td colspan=2 class=xl29 style='border-right:1.0pt solid black;border-left:
  none'><input class=nreqd name="svcZip" type="text" pattern="^\d{5}$" placeholder="5 digit" size="6" value="<?=$_POST['svcZip']?>" id="svcZip" tabindex=13>
         <!-- form input: svc_zip --></td>
     <td class=xl56 style='text-align:left'>State</td>
     <td class=xl57 style='border-left:none;text-align:left'><input class=nreqd name="bSt" type="text" size="3" value="<?=$_POST['bSt']?>" id="bSt" tabindex=20>
         <!-- form input: bill_state --></td>
     <td class=xl58 style='border-left:none'>Zip</td>
     <td colspan=2 class=xl29 style='border-right:.5pt solid black;border-left:none;	'><input class=nreqd name="bZip" type="text" pattern="^\d{5}$" placeholder="5 digit" size="6" value="<?=$_POST['bZip']?>" id="bZip" tabindex=21>
         <!-- form input: bill_zip --></td>
   </tr>
   <tr height=17 style='height:15.75pt'>
     <td colspan=2 height=17 class=xl26 style='height:12.75pt'>Report To</td>
     <td colspan=3 class=xl31 style='border-right:1.0pt solid black;border-left:
  none'><input class=svcRpt name="svcRpt" type="text" size="20" value="<?=$_POST['svcRpt']?>" id="svcRpt" tabindex=14 placeholder="Enter Onsite Mgr">
         <!-- form input: svc_report --></td>
     <td colspan=2 class=xl59>Client Contact</td>
     <td colspan=3 class=xl31 style='border-right:.5pt solid black;border-left:none;	'><input class=nreqd name="bCtName" type="text" size="20" value="<?=$_POST['bCtName']?>" id="bCtName" tabindex=22>
         <!-- form input: bill_c1tact --></td>
   </tr>
   <tr height=17 style='height:15.75pt'>
     <td colspan=2 height=17 class=xl26 style='height:12.75pt'>Contact Phone</td>
     <td colspan=3 class=xl31 style='border-right:1.0pt solid black;border-left:
  none'><input class=svcPh name="svcPh" type="text" pattern="^\d{3}-\d{3}-\d{4}$" size="20" value="<?=$_POST['svcPh']?>" id="svcPh" tabindex=15 placeholder="Onsite Tel (nnn-nnn-nnnn)">
         <!-- form input: svc_tel --></td>
     <td colspan=2 class=xl59>Contact Phone</td>
     <td colspan=3 class=xl31 style='border-right:.5pt solid black;border-left:none;'><input class=nreqd name="bCtPh" type="text" placeholder="Tel format: nnn-nnn-nnnn" pattern="^\d{3}-\d{3}-\d{4}$" size="20" value="<?=$_POST['bCtPh']?>" id="bCtPh" tabindex=23 >
         <!-- form input: bill_tel --></td>
   </tr>
   <tr height=17 style='height:15.75pt'>
     <td height=17 class=xl60 colspan=3 style='height:12.75pt;mso-ignore:colspan'>Mark
       X for Separate Invoice</td>
     <td colspan=2 class=xl62 style='border-right:1.0pt solid black;text-align:left'><?php  echo "<input class=\"wolower2\" type=\"checkbox\" name=\"sepInv\" id=\"sepInv\" value=\"yes\"";
  if ($_POST['sepInv']=='yes') echo "checked=\"yes\"";
  echo ' tabindex=16 />'; ?>
<!-- form input: svc_tel --></td>
     <td class=xl61 style='border-right:.5pt solid black' colspan=2>Contact Email</td>
     <td colspan=3 ><input class=nreqd name="bCtEm" type="email" size="21" value="<?=$_POST['bCtEm']?>" id="bCtEm" tabindex=24>
         <!-- form input: bill_email-fax -->
       &nbsp;</td>
   </tr>
   <tr height=17 style='height:12.75pt'>
     <td height=17 class=xl66 style='height:12.75pt'>&nbsp;</td>
     <td class=xl67>&nbsp;</td>
     <td class=xl67>&nbsp;</td>
     <td class=xl68>&nbsp;</td>
     <td class=xl68>&nbsp;</td>
     <td class=xl67>&nbsp;</td>
     <td class=xl67>&nbsp;</td>
     <td class=xl69>&nbsp;</td>
     <td class=xl68>&nbsp;</td>
     <td class=xl70>&nbsp;</td>
   </tr>
  <!-- <tr height=17 style='height:12.75pt'>
     <td colspan=10 height=17 class=xl71 style='border-right:.5pt solid black;
  height:12.75pt'>**Minimum 4 hours per Officer**</td>
   </tr>
   <tr height=17 style='height:12.75pt'>
     <td colspan=10 height=17 class=xl74 style='height:12.75pt'>&nbsp;</td>
   </tr> -->
   <tr height=17 style='height:12.75pt'>
     <td colspan=4 height=17 class=xl48 style='height:12.75pt'>Service
       Type<!--/Billing Rate--></td>
     <td colspan=6 class=xl49 style='border-right:.5pt solid black'>
<span class=lunch>ASSIGN LUNCH</span> | <span style="color:#CC0000">Time MUST include COLON in hh<u>:</u>mm format</span></td>
   </tr>
   <tr height=17 style='height:12.75pt'>
     <td height=22 class=xl51 style='height:12.75pt'>&nbsp;</td>
     <td height="22" class=xl65 style='border-left:none'>&nbsp;</td>
     <td height="22" colspan=2 class=xl62 style='border-right:1.0pt solid black;border-left:
  none'>&nbsp;</td>
     <td height="22" colspan=5 class=xl101>
       <label> 
         <input type="radio" name="Lunch3060" value="00:30" id="Lunch"
         <? if ($_POST['Lunch3060']=='00:30'){ echo "checked"; }?> >
         30min</label>
       <label>
         <input type="radio" name="Lunch3060" value="01:00" id="Lunch"
         <? if ($_POST['Lunch3060']=='01:00'){ echo "checked"; }?> >
         1hour</label>
       <input type="radio" name="Lunch3060" value="00:00" id="Lunch"
         <? if ($_POST['Lunch3060']=='00:00'){ echo "checked"; }?> >
       None
  </label>
  &nbsp;&nbsp;
       <label>
         <input type="radio" name="LPaidUnpaid" value="Unpaid" id="LPaidUnpaid2"
        <? if ($_POST['LPaidUnpaid']=='Unpaid'){ echo "checked"; }?> >
         Unpaid</label>
       &nbsp;&nbsp;
       <input type="radio" name="LPaidUnpaid" value="Paid" id="LPaidUnpaid2"
      <? if ($_POST['LPaidUnpaid']=='Paid'){ echo "checked"; }?> checked >
       Paid
      </td>
     <td height="22" class=xl26 style='text-align:center;font-size:11px;font-weight:bold;border-left:none;color:red'>DblClick</td>
   </tr>
   <tr height=17 style='height:12.75pt'>
     <td height=17 class=xl51 style='height:12.75pt;text-align:left'>Type</td>
     <td class=xl65 style='border-left:none'><span class=Officer>&nbsp;Officer&nbsp;</span></td>
     <td colspan=2 class=xl62 style='border-right:1.0pt solid black;border-left:
  none'><!--Hourly Bill Rate--></td>
     <td colspan=2 class=xl77>Start Date</td>
     <td class=xl26 style='border-left:none'>Start Time</td>
     <td class=xl26 style='border-left:none'>End Time</td>
     <td class=xl26 style='border-left:none'># of Guards</td>
     <td class=xl26 style='text-align:center;border-left:none;color:red'>Hours</td>
   </tr>
   <tr height=45 style='height:21.75pt'>
     <td height=19 class=xl78  style='height:17.75pt;border-top:none'>Unarmed</td>
     <td class=xl65 style='border-top:none;border-left:none'><?php  echo "<input type=\"checkbox\" name=\"unarm\"  id=\"unarm\" value=\"yes\" checked";
 // if ($_POST['unarm']=='yes') echo "checked=\"yes\""; --AMDA always unarmed
  echo ' tabindex=25 />'; ?></td>
     <td colspan=2 class=xl82 style='border-right:1.0pt solid black;border-left:
  none'><!--<input class=unarmRt name="unarmRt" type="text" id="unarmRt" size="14" value="<?=$_POST['unarmRt']?>" maxlength="255" tabindex=26> --></td>
     <td colspan=2 class=xl81 align=left><input class=d1 name="d1" type="text" id="d1" value="<?=$_POST['d1']?>" size="10" maxlength="12" tabindex=33>
         <input name="button" type=button onClick="displayDatePicker('d1');" value="select" tabindex=32></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=s1 name="s1" type="text" pattern="^\d{2}:\d{2}$" id="s1" size="4" maxlength="5" value="<?=$_POST['s1']?>" tabindex=34 placeholder="hh:mm"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=e1 name="e1" type="text" pattern="^\d{2}:\d{2}$" id="e1" size="4" maxlength="5" value="<?=$_POST['e1']?>" tabindex=35 placeholder="hh:mm">     </td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=n1 name="n1" type="text" pattern="\d+" id="n1" size="2" maxlength="2" value="<?=$_POST['n1']?>" tabindex=36></td>
     <td class=xl84 style='border-top:none;border-left:none;'><input class=h1 name="h1" type="text" id="h1" size="4" value="<?=$_POST['h1']?>" maxlength="5" onDblClick="calc(document.getElementsByName('s1')[0].value,document.getElementsByName('e1')[0].value,'h1',document.getElementsByName('n1')[0].value,document.getElementsByName('Lunch3060')[0].value,document.getElementsByName('Lunch3060')[1].value);hrTotal(this.form)" tabindex=37 placeholder="&nbsp;Here!"></td>
   </tr>
   <tr height=45 style='height:20.75pt'>
     <td height=51 class=xl51 style='height:18.75pt;border-top:none;text-align:left'>Armed</td>
     <td class=xl65 style='border-top:none;border-left:none'><?php  echo "<input type=\"checkbox\" name=\"armed\" id=\"armed\" value=\"yes\"";
  if ($_POST['armed']=='yes') echo "checked=\"yes\"";
  echo ' tabindex=27 />'; ?></td>
     <td colspan=2 class=xl82 style='border-right:1.0pt solid black;border-left:
  none'><!-- <input name="armRt" type="text" id="armRt" value="<?=$_POST['armRt']?>" size="14" maxlength="21" tabindex=28> --></td>
     <td colspan=2 class=xl81><input class=nreqdate name="d2" type="text" id="d2" value="<?=$_POST['d2']?>" size="10" maxlength="12" tabindex=39>
         <input name="button2" type=button onClick="displayDatePicker('d2');" value="select" tabindex=38></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="s2" type="text" pattern="^\d{2}:\d{2}$" id="s2" size="4" value="<?=$_POST['s2']?>" maxlength="5" tabindex=39></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="e2" type="text" pattern="^\d{2}:\d{2}$" id="e2" value="<?=$_POST['e2']?>"size="4" maxlength="5" tabindex=40></td>
<td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="n2" type="text" pattern="\d+" id="n2" size="2" maxlength="2" value="<?=$_POST['n2']?>" tabindex=41></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate name="h2" type="text" id="h2" size="4" maxlength="5" value="<?=$_POST['h2']?>" onDblClick="calc(document.getElementsByName('s2')[0].value,document.getElementsByName('e2')[0].value,'h2',document.getElementsByName('n2')[0].value);hrTotal(this.form)" tabindex=42>     </td>
   </tr>
   <tr height=40 style='height:18.75pt'>
     <td colspan=4 height=16 class=xl48 style='border-right:1.0pt solid black;height:18.75pt'><span class=Attire>&nbsp;Attire&nbsp;</span></td>
     <td colspan=2 class=xl81><input name="d3" value="<?=$_POST['d3']?>" class=nreqdate type="text" id="d3" size="10" tabindex=44 maxlength="12">
         <input name="button3" type=button onClick="displayDatePicker('d3');" value="select" tabindex=43></td>
     <td class=xl83 style='border-top:none;border-left:none'><input name="s3" class=nreqdate  value="<?=$_POST['s3']?>" type="text" pattern="^\d{2}:\d{2}$"  id="s3" size="4" maxlength="5" tabindex=44></td>
     <td class=xl83 style='border-top:none;border-left:none'><input name="e3" class=nreqdate  value="<?=$_POST['e3']?>" type="text" pattern="^\d{2}:\d{2}$"  id="e3" size="4" maxlength="5" tabindex=45>     </td>

<td class=xl83 style='border-top:none;border-left:none'><input  name="n3" class=nreqdate  type="text" pattern="\d+" id="n3" size="2" maxlength="2" value="<?=$_POST['n3']?>" onChange="calc(document.getElementsByName('s3')[0].value,document.getElementsByName('e3')[0].value,'h3',document.getElementsByName('n3')[0].value);hrTotal(this.form)" tabindex=46></td>

<td class=xl82 style='border-top:none;border-left:none'><input name="h3" class=nreqdate  type="text" value="<?=$_POST['h3']?>"  id="h3" size="4" maxlength="5" onChange="hrTotal(this.form)" tabindex=47>     </td>
   </tr>
   <tr height=40 style='height:18.75pt'>
     <td height=17 class=xl51 style='height:18.75pt;border-top:none;text-align:left'>Standard</td>
     <td class=xl65 style='border-top:none;border-left:none'>
<?php  echo "<input type=\"checkbox\" name=\"sStd\" value=\"Std\" id=\"sStd\"";
  if ($_POST['sStd']=='Std') echo "checked=\"yes\"";
  echo '/>'; ?></td>
     <td colspan=2 class=xl83 style='border-right:1.0pt solid black;border-left:
  none'><input  class=nreqd name="rStd" value="Hard: Lt Blue Shrt" type="text" id="rStd" size="14" maxlength="255" tabindex=29 ></td>
     <td colspan=2 class=xl81><input class=nreqd  name="d4" type="text" id="d4" size="10"  value="<?=$_POST['d4']?>" tabindex=49 maxlength="12">
         <input name="button4" type=button value="select" onClick="displayDatePicker('d4');" tabindex=48></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="s4" value="<?=$_POST['s4']?>" type="text" pattern="^\d{2}:\d{2}$" id="s4" size="4" tabindex=49></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="e4" value="<?=$_POST['e4']?>" type="text" pattern="^\d{2}:\d{2}$" id="e4" size="4" tabindex=50>     </td>
	<td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="n4" type="text" pattern="\d+" id="n4" size="2" maxlength="2" tabindex=51 value="<?=$_POST['n4']?>" onChange="calc(document.getElementsByName('s4')[0].value,document.getElementsByName('e4')[0].value,'h4',document.getElementsByName('n4')[0].value);hrTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate  name="h4" type="text" id="h4" size="4" maxlength="5" value="<?=$_POST['n4']?>" tabindex=52  onChange="hrTotal(this.form)">     </td>
   </tr>
   <tr height=40 style='height:18.75pt'>
     <td height=17 class=xl51 style='height:18.75pt;border-top:none;text-align:left'>Casual</td>
     <td class=xl65 style='border-top:none;border-left:none'><?php  echo "<input type=\"checkbox\" name=\"sCas\" id=\"sCas\" value=\"Cas\"";
  if ($_POST['sCas']=='Cas') echo "checked=\"yes\"";
  echo '/>'; ?></td>
     <td colspan=2 class=xl83 style='border-right:1.0pt solid black;border-left:
  none'><input class=nreqd name="rCas"  value="<?=$_POST['rCas']?>"  type="text" id="rCas" size="14" maxlength="30" ></td>
     <td colspan=2 class=xl81><input name="d5" class=nreqdate  value="<?=$_POST['d5']?>"  type="text" id="d5" size="10" tabindex=54 maxlength="12">
         <input type=button name="button5" value="select" onClick="displayDatePicker('d5');" tabindex=53></td>
     <td class=xl83 style='border-top:none;border-left:none'><input name="s5" class=nreqdate  value="<?=$_POST['s5']?>"  type="text" pattern="^\d{2}:\d{2}$" id="s5" size="4" tabindex=54></td>
     <td class=xl83 style='border-top:none;border-left:none'><input name="e5" class=nreqdate  value="<?=$_POST['e5']?>"  type="text" pattern="^\d{2}:\d{2}$" id="e5" size="4" tabindex=55>     </td>
    <td class=xl83 style='border-top:none;border-left:none'><input  name="n5" class=nreqdate  type="text" pattern="\d+" id="n5" size="2" tabindex=56 maxlength="2" value="<?=$_POST['n5']?>" onChange="calc(document.getElementsByName('s5')[0].value,document.getElementsByName('e5')[0].value,'h5',document.getElementsByName('n5')[0].value);hrTotal(this.form)"></td>

     <td class=xl82 style='border-top:none;border-left:none'><input name="h5" class=nreqdate  type="text" id="h5" size="4"  value="<?=$_POST['h5']?>" tabindex=57 maxlength="5" onChange="hrTotal(this.form)">     </td>
   </tr>
   <tr height=40 style='height:18.75pt'>
     <td height=17 class=xl51 style='height:18.75pt;border-top:none;text-align:left'>Suit &amp; Tie</td>
     <td class=xl65 style='border-top:none;border-left:none'><?php  echo "<input type=\"checkbox\" name=\"sSTi\" id=\"sSTi\" value=\"STi\"";
  if ($_POST['sSTi']=='STi') echo "checked=\"yes\"";
  echo '/>';  ?></td>
     <td colspan=2 class=xl83 style='border-right:1.0pt solid black;border-left:
  none'><input class=nreqd name="rSTi" type="text" id="rSTi" value="<?=$_POST['rSTi']?>"  size="14" maxlength="30" tabindex=></td>
     <td colspan=2 class=xl81><input class=nreqdate name="d6" type="text" id="d6" value="<?=$_POST['d6']?>"  size="10" tabindex=59 maxlength="12">
         <input name="button6" type=button value="select" onClick="displayDatePicker('d6');" tabindex=58>     </td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="s6" value="<?=$_POST['s6']?>" type="text" pattern="^\d{2}:\d{2}$" id="s6" size="4" tabindex=59></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="e6" value="<?=$_POST['e6']?>" type="text" pattern="^\d{2}:\d{2}$" id="e6" size="4" tabindex=60></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="n6" type="text" pattern="\d+" id="n6" size="2" maxlength="2" tabindex=61 value="<?=$_POST['n6']?>" onChange="calc(document.getElementsByName('s6')[0].value,document.getElementsByName('e6')[0].value,'h6',document.getElementsByName('n6')[0].value);hrTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate  name="h6" type="text" id="h6" size="4" value="<?=$_POST['h6']?>" tabindex=62 maxlength="5" onChange="hrTotal(this.form)">     </td>
   </tr>
   <tr height=40 style='height:18.75pt'>
     <td height=17 class=xl51 style='height:18.75pt;border-top:none;text-align:left'>Polo Shirt</td>
     <td class=xl82 style='border-top:none;border-left:none'><?php  echo "<input type=\"checkbox\" name=\"sPlo\" id=\"sPlo\" value=\"Plo\"";
  if ($_POST['sPlo']=='Plo') echo "checked=\"yes\"";
  echo '/>'; ?></td>
     <td colspan=2 class=xl82 style='border-right:1.0pt solid black;border-left:none'><input class=nreqd name="rPlo" type="text" value="Wht on Blk" id="rPlo" size="14" maxlength="30"></td>
     <td colspan=2 class=xl81><input class=nreqdate  name="d7" type="text" value="<?=$_POST['d7']?>" id="d7" size="10" tabindex=64 maxlength="12">
     <input type=button name="button7" value="select" onClick="displayDatePicker('d7');" tabindex=63></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="s7" value="<?=$_POST['s7']?>" type="text" pattern="^\d{2}:\d{2}$"  id="s7" size="4" tabindex=64></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="e7" value="<?=$_POST['e7']?>" type="text" pattern="^\d{2}:\d{2}$"  id="e7" size="4" tabindex=65>     </td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="n7" type="text" pattern="\d+" id="n7" size="2" maxlength="2" tabindex=66 value="<?=$_POST['n7']?>" onChange="calc(document.getElementsByName('s7')[0].value,document.getElementsByName('e7')[0].value,'h7',document.getElementsByName('n7')[0].value);hrTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'>
       <input class=nreqdate  name="h7" type="text" id="h7" size="4" maxlength="5" onChange="hrTotal(this.form)" value="<?=$_POST['h7']?>" tabindex=67>     </td>
   </tr>
   <tr height=40 style='height:18.75pt'>
     <td height=17 class=xl51 style='height:18.75pt;border-top:none;text-align:left'>Other</td>
     <td class=xl89 style='border-top:none;border-left:none'><?php  echo "<input type=\"checkbox\" name=\"sOth\" value=\"Oth\"";
  if ($_POST['sOth']=='Oth') echo "checked=\"yes\"";
  echo '/>'; ?>     </td>
     <td colspan=2 class=xl82 style='border-right:1.0pt solid black'><input class=nreqd name="rOth" type="text" id="rOth" value="Yellow Bike Uni" placeholder="Bike Uniform" size="14" maxlength="30">     </td>
     <td colspan=2 class=xl81><input class=nreqdate name="d8" type="text" value="<?=$_POST['d8']?>" id="d8" size="10" tabindex=69 maxlength="12">
       <input type=button name="button8" value="select" onClick="displayDatePicker('d8');" tabindex=68></td>
     <td class=xl83 style='border-top:none;border-left:none'>
       <input class=nreqdate  name="s8" value="<?=$_POST['s8']?>" type="text" pattern="^\d{2}:\d{2}$"  id="s8" size="4" tabindex=69>     </td>
     <td class=xl83 style='border-top:none;border-left:none'>
       <input class=nreqdate  name="e8" value="<?=$_POST['e8']?>" type="text" pattern="^\d{2}:\d{2}$"  id="e8" size="4" tabindex=70>     </td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="n8" pattern="\d+" type="text" id="n8" tabindex=71 size="2" maxlength="2" value="<?=$_POST['n8']?>" onChange="calc(document.getElementsByName('s8')[0].value,document.getElementsByName('e8')[0].value,'h8',document.getElementsByName('n8')[0].value);hrTotal(this.form)"></td>

     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate name="h8" type="text" id="h8" tabindex=72 size="4" maxlength="5" onChange="hrTotal(this.form)" value="<?=$_POST['h8']?>">     </td>
   </tr>
   <tr height=40 style='height:15.75pt'>
     <td colspan=4 height=17 class=xl48 style='border-right:1.0pt solid black;
  height:15.75pt'><span class=driveY>&nbsp;Driving Position&nbsp;</span></td>
     <td colspan=2 class=xl47 style='border-right:.5pt solid black;border-bottom:.5pt solid black;height:18.75pt'><input class=nreqdate name="d9" type="text" tabindex=74 value="<?=$_POST['d9']?>" id="d9" size="10" maxlength="12">
       <input type=button name="button9" value="select" onClick="displayDatePicker('d9');" tabindex=73></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="s9" pattern="^\d{2}:\d{2}$" value="<?=$_POST['s9']?>" type="text" id="s9" size="4" tabindex=74></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="e9" pattern="^\d{2}:\d{2}$" value="<?=$_POST['e9']?>" type="text" id="e9" size="4" tabindex=75> </td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="n9" pattern="\d+" type="text" id="n9" size="2" maxlength="2" tabindex=76 value="<?=$_POST['n9']?>" onChange="calc(document.getElementsByName('s9')[0].value,document.getElementsByName('e9')[0].value,'h9',document.getElementsByName('n9')[0].value);hrTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate  name="h9" type="text" id="h9" tabindex=77 size="4" maxlength="5" onChange="hrTotal(this.form)" value="<?=$_POST['h9']?>"></td>
   </tr>
   <tr height=40 style='height:15.75pt'>
     <td height=17 class=xl93 style='height:15.75pt;border-top:none'>YES&nbsp;</td>
     <td align="left" class=xl89 style='border-top:none;border-left:none;text-align:left'>
<?php  echo "<input type=\"radio\" name=\"driveY\" value=\"yes\" id=\"driveY\""; 
  if ($_POST['driveY']=='yes') {echo "checked=\"yes\"";} ?></td>
     <td class=xl94 style='border-top:none'>NO&nbsp;</td>
     <td class=xl90 style='border-top:none;text-align:left'>
       <?php  echo "<input type=\"radio\" name=\"driveY\" value=\"no\" id=\"driveY\"";
  if ($_POST['driveY']=='no') {echo "checked=\"yes\"";} ?>
     </td>
     <td  colspan=2 class=xl82 style='border-top:none;text-align:center;height:18.75pt'><input class=nreqdate name="d10" type="text" value="<?=$_POST['d10']?>" id="d10" tabindex=79 size="10" maxlength="12">
       <input type=button name="button10" value="select" onClick="displayDatePicker('d10');" tabindex=78></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="s10" value="<?=$_POST['s10']?>" type="text" tabindex=79 pattern="^\d{2}:\d{2}$" id="s10" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="e10" value="<?=$_POST['e10']?>" type="text" tabindex=80 pattern="^\d{2}:\d{2}$" id="e10" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="n10" type="text" tabindex=81 pattern="\d+" id="n10" size="2" maxlength="2" value="<?=$_POST['n10']?>" onChange="calc(document.getElementsByName('s10')[0].value,document.getElementsByName('e10')[0].value,'h10',document.getElementsByName('n10')[0].value);hrTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'>
       <input class=nreqdate name="h10" type="text" id="h10" tabindex=82 size="4" maxlength="5" onChange="hrTotal(this.form)" value="<?=$_POST['h10']?>">     </td>
   </tr>
   <tr height=40 style='height:15.75pt'>
     <td colspan=4 height=15 class=xl95 style='border-right:1.0pt solid black;
  height:10px'><span style="position:relative;top:4px">Equipment Charged per Day</span><br><span style="position:relative;top:-1px;font-family:Verdana,sans-serif;font-size:9px;font-style:italic">Prices Subject to Change</span></td>
     <td align="left" style='text-align:center;height:18.75pt' colspan=2 class=xl81><input class=nreqdate name="d11" type="text" value="<?=$_POST['d11']?>" id="d11" size="10" tabindex=84  maxlength="12">
       <input type=button name="button11" value="select" onClick="displayDatePicker('d11');" tabindex=83></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="s11" tabindex=84 value="<?=$_POST['s11']?>" type="text" pattern="^\d{2}:\d{2}$"  id="s11" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="e11" tabindex=85 value="<?=$_POST['e11']?>" type="text" pattern="^\d{2}:\d{2}$"  id="e11" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input  class=nreqdate name="n11" tabindex=86 type="text" pattern="\d+" id="n11" size="2" maxlength="2" value="<?=$_POST['n11']?>" onChange="calc(document.getElementsByName('s11')[0].value,document.getElementsByName('e11')[0].value,'h11',document.getElementsByName('n11')[0].value);hrTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate name="h11" tabindex=87 type="text" id="h11" size="4" maxlength="5" onChange="hrTotal(this.form)" value="<?=$_POST['h11']?>"></td>
   </tr>
   <tr height=17 style='height:15.75pt'>
     <td height=17 class=xl51 style='height:15.75pt;border-top:none;text-align:left'>Equipment</td>
     <td class=xl65 style='border-top:none;border-left:none' x:str="Cost ">Cost&nbsp;</td>
     <td class=xl65 style='border-top:none;border-left:none'>Qty.</td>
     <td class=xl97 style='border-top:none;border-left:none'>Total</td>
     <td class=xl98 colspan=2 style='height:18.75pt;border-right:.5pt solid black;text-align:center'><input class=nreqdate name="d12" type="text" tabindex=89 value="<?=$_POST['d12']?>" id="d12" size="10" maxlength="12">
       <input type=button name="button12" value="select" onClick="displayDatePicker('d12');" tabindex=88></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="s12" tabindex=89 value="<?=$_POST['s12']?>" type="text" pattern="^\d{2}:\d{2}$"  id="s12" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="e12" tabindex=90 value="<?=$_POST['e12']?>" type="text" pattern="^\d{2}:\d{2}$"  id="e12" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input  class=nreqdate name="n12" tabindex=91 pattern="\d+" type="text" id="n12" size="2" maxlength="2" value="<?=$_POST['n12']?>" onChange="calc(document.getElementsByName('s12')[0].value,document.getElementsByName('e12')[0].value,'h12',document.getElementsByName('n12')[0].value);hrTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate name="h12" tabindex=92 type="text" id="h12" size="4" maxlength="5" onChange="hrTotal(this.form)" value="<?=$_POST['h12']?>"></td>
   </tr>
   <tr height=17 style='height:18.5pt'>
     <td height=17 class=xl51 style='height:18.5pt;border-top:none;text-align:left'>Radio</td>
     <td class=xl99 style='border-top:none;border-left:none'>$
       <input class=nreqd name="cRad" type="text" id="cRad" size="5" maxlength="5" value="10.00" readonly onChange="radTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqd name="qRad" type="text" id="qRad" size="1" maxlength="1" value="<?=$_POST['qRad']?>" onChange="radTotal(this.form)"  ></td>
     <td class=xl88 style='border-top:none;border-left:none'>$
       <input class=nreqd name="tRad" type="text" id="tRad" size="5" maxlength="5" value="<?=$_POST['tRad']?>" ></td>
     <td colspan=2 class=xl98 style='text-align:center;border-top:none;border-left:none;border-right:.5pt solid black;'><input class=nreqdate name="d13" type="text" tabindex=94 value="<?=$_POST['d13']?>" id="d13" size="10" maxlength="12">&nbsp;<input type=button name="button13" value="select" onClick="displayDatePicker('d13');" tabindex=93></td>
     <td class=xl100 style='border-top:none;border-left:none'>
       <input class=nreqdate name="s13" tabindex=94 value="<?=$_POST['s13']?>" type="text" pattern="^\d{2}:\d{2}$" id="s13" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate tabindex=95 name="e13" value="<?=$_POST['e13']?>" type="text" pattern="^\d{2}:\d{2}$" id="e13" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input  class=nreqdate tabindex=96 name="n13" type="text" pattern="\d+" id="n13" size="2" maxlength="2" value="<?=$_POST['n13']?>" onChange="calc(document.getElementsByName('s13')[0].value,document.getElementsByName('e13')[0].value,'h13',document.getElementsByName('n13')[0].value);hrTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate tabindex=97 name="h13" type="text" id="h13" size="4" maxlength="5" onChange="hrTotal(this.form)" value="<?=$_POST['h13']?>"></td>
   </tr>
   <tr height=17 style='height:18.5pt'>
     <td height=17 class=xl51 style='height:18.5pt;border-top:none;text-align:left'>Mobile</td>
     <td class=xl99 style='border-top:none;border-left:none'>$
       <input class=nreqd name="cMob" type="text" id="cMob" size="5" maxlength="5" value="14.95" readonly onChange="mobTotal(this.form)"></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqd name="qMob" type="text" id="qMob" size="1" maxlength="1" value="<?=$_POST['qMob']?>" onChange="mobTotal(this.form)">     </td>
     <td class=xl88 style='border-top:none;border-left:none'> $
       <input class=nreqd name="tMob" type="text" id="tMob" size="5" maxlength="5" value="<?=$_POST['tMob']?>"></td>
     <td colspan=2 class=xl77><input class=nreqdate name="d14" type="text" value="<?=$_POST['d14']?>" id="d14" size="10" tabindex=99 maxlength="12">&nbsp;<input type=button name="button14" value="select" onClick="displayDatePicker('d14');" tabindex=98></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="s14" value="<?=$_POST['s14']?>" type="text" pattern="^\d{2}:\d{2}$" tabindex=99 id="s14" size="4"></td>
     <td class=xl83 style='border-top:none;border-left:none'><input class=nreqdate name="e14" value="<?=$_POST['e14']?>" type="text" pattern="^\d{2}:\d{2}$" tabindex=100  id="e14" size="4"></td>
     <td align="left" class=xl83 style='border-top:none;border-left:none'><input class=nreqdate  name="n14" pattern="\d+"  tabindex=101 type="text" id="n14" size="2" maxlength="2" value="<?=$_POST['n14']?>" ></td>
     <td class=xl82 style='border-top:none;border-left:none'><input class=nreqdate name="h14" type="text" id="h14" size="4" tabindex=102 maxlength="5" onChange="hrTotal(this.form)" onDblClick="calc(document.getElementsByName('s14')[0].value,document.getElementsByName('e14')[0].value,'h14',document.getElementsByName('n14')[0].value);hrTotal(this.form)"value="<?=$_POST['h14']?>"></td>
   </tr>
   <tr height=17 style='height:18.5pt'>
     <td height=17 class=xl51 style='height:18.5pt;border-top:none;text-align:left'>Vehicle</td>
     <td class=xl99 style='border-top:none;border-left:none'>$
       <input class=nreqd name="cVeh" type="text" id="cVeh" size="5" maxlength="5" value="54.95" readonly onChange="vehTotal(this.form)"></td>
     <td class=xl65 style='border-top:none;border-left:none'><input class=nreqd name="qVeh" type="text" id="qVeh" size="1" maxlength="1" value="<?=$_POST['qVeh']?>" onChange="vehTotal(this.form)">     </td>
     <td class=xl88 style='border-top:none;border-left:none'> $
       <input class=nreqd name="tVeh" type="text" id="tVeh" size="5" maxlength="5" value="<?=$_POST['tVeh']?>">     </td>
     <td colspan=2 class=xl77><span>&nbsp;&nbsp;</span></td>
     <td class=xl83 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl83 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl87 style='border-top:none;border-left:none'>HRS TOTAL</td>
     <td class=xl87 style='border-top:none:border-left:none' x:num
  x:fmla="=SUM(J22:J32)"><input class=htotal name="htotal" type="text" id="htotal" size="4" value="<?=$_POST['htotal']?>" maxlength="8"></td>
   </tr>
   <tr height=17 style='height:18.5pt'>
     <td height=17 class=xl51 style='height:18.5pt;border-top:none;text-align:left;'>Guard Tour</td>
     <td class=xl99 style='border-top:none;border-left:none'>$
       <input class=nreqd name="cGrd" type="text" id="cGrd" size="5" maxlength="5" value="24.95" readonly onChange="grdTotal(this.form)"></td>
     <td class=xl65 style='border-top:none;border-left:none'><input class=nreqd name="qGrd" type="text" id="qGrd" size="1" maxlength="1" value="<?=$_POST['qGrd']?>" onChange="grdTotal(this.form)">     </td>
     <td class=xl88 style='border-top:none;border-left:none'> $
       <input class=nreqd name="tGrd" type="text" id="tGrd" size="5" maxlength="5" value="<?=$_POST['tGrd']?>">     </td>
     <td colspan=3 class=xl48 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl48 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl48 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl48 style='border-top:none;border-left:none'>&nbsp;</td>
   </tr>
   <tr height=17 style='height:18.5pt'>
     <td height=17 class=xl51 style='height:18.5pt;border-top:none;text-align:left;'>NightVision</td>
     <td class=xl99 style='border-top:none;border-left:none'>$
       <input class=nreqd name="cNV" type="text" id="cNV" size="5" maxlength="5"  value="21.95" readonly onChange="nvTotal(this.form)"></td>
     <td class=xl65 style='border-top:none;border-left:none'><input class=nreqd name="qNV" type="text" id="qNV" size="1" maxlength="1"  value="<?=$_POST['qNV']?>" onChange="nvTotal(this.form)">     </td>
     <td class=xl88 style='border-top:none;border-left:none'> $
       <input class=nreqd name="tNV" type="text" id="tNV" size="5" maxlength="5"  value="<?=$_POST['tNV']?>">     </td>
     <td colspan=3 class=xl77><span style="color:grey"><i><= Enter any quantity to calculate</i></span></td>
     <td class=xl83 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl83 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl82 style='border-top:none;border-left:none'>&nbsp;</td>
   </tr>
   <tr height=17 style='height:18.5pt'>
     <td height=17 class=xl51 style='height:18.5pt;border-top:none;text-align:left;'>Hand Wand</td>
     <td class=xl99 style='border-top:none;border-left:none'>$
       <input class=nreqd name="cHW" type="text" id="cHW" size="5" maxlength="5" value="25.00" readonly onChange="hwTotal(this.form)"></td>
     <td class=xl65 style='border-top:none;border-left:none'><input class=nreqd name="qHW" type="text" id="qHW" size="1" maxlength="1" value="<?=$_POST['qHW']?>" onChange="hwTotal(this.form)">     </td>
     <td class=xl88 style='border-top:none;border-left:none'> $
       <input class=nreqd name="tHW" type="text" id="tHW" size="5" maxlength="5" value="<?=$_POST['tHW']?>">     </td>
     <td colspan=3 class=xl101>&nbsp;</td>
     <td class=xl83 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl83 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl82 style='border-top:none;border-left:none'>&nbsp;</td>
   </tr>
   <tr height=17 style='height:18.5pt'>
     <td height=17 class=xl51 style='height:18.5pt;border-top:none;text-align:left'>Walk MAG</td>
     <td class=xl99 style='border-top:none;border-left:none'>$
       <input class=nreqd name="cWT" type="text" id="cWT" size="5" maxlength="5" value="316.00" readonly onChange="wtTotal(this.form)" ></td>
     <td class=xl65 style='border-top:none;border-left:none'><input class=nreqd name="qWT" type="text" id="qWT" size="1" maxlength="1" value="<?=$_POST['qWT']?>" onChange="wtTotal(this.form)">     </td>
     <td class=xl99 style='border-top:none;border-left:none;border-right:1pt solid black'> $
       <input class=nreqd name="tWT" type="text" id="tWT" size="5" maxlength="5" value="<?=$_POST['tWT']?>">     </td>
     <td colspan=2 class=xl103 style='border-right:.5pt solid black;border-left:
  none'></td>
     <td class=xl104 style='border-top:.5pt solid black;'>&nbsp;</td>
     <td class=xl83 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl83 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl82 style='border-top:none;border-left:none'>&nbsp;</td>
   </tr>
   <tr height=18 style='height:18.5pt'>
     <td height=18 class=xl105 style='height:13.5pt;border-top:none;text-align:left'>Other</td>
     <td class=xl106 style='border-top:none;border-left:none'>$
       <input class=nreqdate name="cOth" type="text" id="cOth" size="5" maxlength="5"  value="<?=$_POST['cOth']?>" onChange="othTotal(this.form)"></td>
     <td class=xl107 style='border-top:none;border-left:none'><input class=nreqd name="qOth" type="text" id="qOth" size="1" maxlength="1" value="<?=$_POST['qOth']?>" onChange="othTotal(this.form)" >     </td>
     <td class=xl108 style='border-top:none;border-left:none'> $
       <input class=nreqd name="tOth" type="text" id="tOth" size="5" maxlength="5" value="<?=$_POST['tOth']?>">     </td>
     <td colspan=2 class=xl109 style='border-right:.5pt solid black;border-left:
  none'>&nbsp;</td>
     <td class=xl111 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl111 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl111 style='border-top:none;border-left:none'>&nbsp;</td>
     <td class=xl107 style='border-top:none;border-left:none'>&nbsp;</td>
   </tr>
   <tr height=18 style='height:13.5pt'>
     <td colspan=10 height=18 class=xl112 style='height:13.5pt'>&nbsp;</td>
   </tr>
   <tr height=18 style='height:13.5pt'>
     <td colspan=10 height=18 class=xl113 style='border-right:.5pt solid black;
  height:15.75pt'>Description of Services and Special Requirements:</td>
   </tr>
   <tr height=17 style='height:15.75pt'>
     <td colspan=10 height=17 class=xl116 style='border-right:.5pt solid black;
  height:15.75pt;width:464pt'>&nbsp;</td>
   </tr>
   <tr height=17 style='height:15.75pt'>
     <td colspan=10 height=85 class=xl119 style='border-right:
  .5pt solid black;border-bottom:.5pt solid black;height:63.75pt;width:464pt;text-align:center'>Officer/s
       will observe and report all activity as instructed. This is an extension to
       our existing contract &amp; conditions to above service address. Despite
       faithful efforts, Andrews International cannot ensure against negligent acts
       of third parties.<br><span style='mso-spacerun:yes'>Overtime will be
         billed at time and a half.</span></td>
   </tr>
   <tr height=18 style='height:12.75pt'>
     <td height=18 colspan=10 class=xl123 style='height:12.75pt;mso-ignore:colspan'></td>
   </tr>
   <tr height=20 style='height:15.0pt'>
     <td colspan=4 height=20 class=xl28 style='height:15.0pt;border-top:none;border-right:none'><input class=print_name style="position:relative;top:-4px;left:0px" name="print_name" type="text" id="print_name" value="<?=$_POST['print_name']?>" size="21" tabindex=103 maxlength="21" placeholder="Sign Here">
       

	   <span style='position:relative;top:-4px'>
           <input style='height:18px;text-align:center;font-weight:bold'name="today_date" readonly type="text" id="today_date" size="12" maxlength="12" value="<?php echo date('m-d-Y'); ?>">
         </span></td>
     <td colspan=2 class=xl129 style='mso-ignore:colspan'>&nbsp;</td>
     <td colspan=4 class=xl128>&nbsp;</td>
   </tr>
   <tr height=18 style='height:12.75pt'>
     <td colspan=4 height=18 class=xl40 style='height:12.75pt;font-weight:bold;border-right:none' >Please Enter Your Name
       </td>
     <td colspan=2 class=x140 style='border-top:.5pt solid black;border-left:none'>&nbsp;</td>
     <td colspan=4 class=x140>&nbsp;</td>
   </tr>
   <tr>
     <td colspan="10" style="text-align:center"><input style="position: relative; bottom: -25pxpx; right: 0px" tabindex=104 type="submit" name="submit" value="submit">
         <br>
       &nbsp;</td>
   </tr>
 <![if supportMisalignedColumns]>
   <tr height=0 style='display:none'>
     <td width=650 style='width:48pt'></td>
     <td width=64 style='width:48pt'></td>
     <td width=64 style='width:48pt'></td>
     <td width=64 style='width:48pt'></td>
     <td width=64 style='width:48pt'></td>
     <td width=64 style='width:48pt'></td>
     <td width=64 style='width:48pt'></td>
     <td width=64 style='width:48pt'></td>
     <td width=64 style='width:48pt'></td>
     <td width=43 style='width:32pt'></td>
   </tr>
   <![endif]>
 </table>
 </form>

</body>

</html>
