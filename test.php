<?php
require('fpdf.php');
$connect=mysqli_connect('localhost','root','','ria');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
ini_set("display_errors", 1);
$crd=1234;
// your queries goes here.....
// query for investAdv......................................

$getinfo="select * from investAdv as i,address as a,registration as r,states_filled_in as s,where_business as w where a.firm_crd='$crd' and i.firm_crd='$crd' and r.firm_crd='$crd' and s.firm_crd='$crd' and w.firm_crd='$crd' ";
$query1 = mysqli_query($connect, $getinfo);
$rs= mysqli_fetch_assoc($query1);
	$Firm_CRD=$rs['Firm_CRD'];
   $Sec_CD=$rs['Sec_CD'];
	$Sec_Nb= $rs['Sec_Nb'];
	$Bus_Nm= $rs['Bus_Nm'];
	$Lgl_Nm = $rs['Lgl_Nm'];
	$Mail_Strt1=$rs['Mail_Strt1'];
	$Mail_Strt2= $rs['Mail_Strt2'];
	$Mail_City= $rs['Mail_City'];
	$Mail_State = $rs['Mail_State'];
	 $Mail_Cntry=$rs['Mail_Cntry'];
   $Mail_Postlid=$rs['Mail_Postlid'];
	$Mail_Phnb= $rs['Mail_Phnb'];
	$Mail_Faxnb= $rs['Mail_Faxnb'];
	$Main_Strt1 = $rs['Main_Strt1'];
	echo $Firm_CRD;
	?>