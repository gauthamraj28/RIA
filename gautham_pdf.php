<?php
error_reporting(0);
require('fpdf.php');
$connect=mysqli_connect('localhost','prasad','prasad','rta');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
ini_set("display_errors", 1);

// your queries goes here.....
// query for investAdv......................................
/*

$query1 = mysqli_query($connect, $getinfo);
while($rs= mysqli_fetch_assoc($query1)){
	
   $Firm_CRD=$rs['Firm_CRD'];
   $Sec_CD=$rs['Sec_CD'];
	$Sec_Nb= $rs['Sec_Nb'];
	$Bus_Nm= $rs['Bus_Nm'];
	$Lgl_Nm = $rs['Lgl_Nm'];
	
	 
}

// query for investAdv ends....................................

  //***************************************************************************
  
 //query for Address starts here......................................
 
 $query1 = mysqli_query($connect, $getinfo);
while($rs= mysqli_fetch_assoc($query1)){
	
   $Firm_CRD=$rs['Firm_CRD'];
   $Mail_Strt1=$rs['Mail_Strt1'];
	$Mail_Strt2= $rs['Mail_Strt2'];
	$Mail_City= $rs['Mail_City'];
	$Mail_State = $rs['Mail_State'];
	
	   $Mail_Cntry=$rs['Mail_Cntry'];
   $Mail_Postlid=$rs['Mail_Postlid'];
	$Mail_Phnb= $rs['Mail_Phnb'];
	$Mail_Faxnb= $rs['Mail_Faxnb'];
	$Main_Strt1 = $rs['Main_Strt1'];
	
     $Main_Strt2=$rs['Main_Strt2'];
   $Main_City=$rs['Main_City'];
	$Main_State= $rs['Main_State'];
	$Main_Cntry= $rs['Main_Cntry'];
	$Main_Post = $rs['Main_Post'];
    $Main_Phn= $rs['Main_Phn'];
	$Main_Fax = $rs['Main_Fax'];
}
  //query for Address ends here......................................
  
  //***************************************************************************
  
  //query for Registarion starts here......................................
 
 $query1 = mysqli_query($connect, $getinfo);
while($rs= mysqli_fetch_assoc($query1)){
	
   $Firm_CRD=$rs['Firm_CRD'];
   $Firm_Type=$rs['Firm_Type'];
	$St= $rs['St'];
	$Dt $rs['Dt'];
	
}
  //query for Registarion ends here......................................
  
  //***************************************************************************
  
 //query for states_filled_in starts here......................................
 
 $query1 = mysqli_query($connect, $getinfo);
while($rs= mysqli_fetch_assoc($query1)){
	
   $Firm_CRD=$rs['Firm_CRD'];
   $RgltrCd=$rs['RgltrCd'];
	$St= $rs['St'];
	$Dt $rs['Dt'];
	
}
  //query for states_filled_in ends here......................................
  
  //***************************************************************************
  
  //query for web_Address  starts here......................................
 
 $query1 = mysqli_query($connect, $getinfo);
while($rs= mysqli_fetch_assoc($query1)){
	
   $Firm_CRD=$rs['Firm_CRD'];
   $websites=$rs['websites'];
	
	
}
  //query for web_Address ends here......................................
  
  //***************************************************************************
  
  
 //query for Where_business starts here......................................
 
 $query1 = mysqli_query($connect, $getinfo);
while($rs= mysqli_fetch_assoc($query1)){
	
   $Firm_CRD=$rs['Firm_CRD'];
   $More_Websites=$rs['More_Websites'];
	$Foreign_Fin_Regu= $rs['Foreign_Fin_Regu'];
	$Public_Reporting= $rs['Public_Reporting'];
	$More_Assets = $rs['More_Assets'];
	
	   $Assets_Ammount=$rs['Assets_Ammount'];
   $Legal_Entity=$rs['Legal_Entity'];
	$Offices_Number= $rs['Offices_Number'];
	
}
  //query for Where_business  ends here......................................
  
  
*/


class PDF extends FPDF
{
	
   
       
    
	
// Page header
function Header()
{
   
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    
    $this->Ln(10);
}



// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'',0,0,'C');
	
}
}
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AddPage();
$pdf->setFillColor(242, 242, 242);
$pdf->Rect(0,0,250,297,'F');

$pdf->SetTextColor(26, 140, 255);
$pdf->SetFont('Arial', 'B', 20 );
$pdf->SetX(78);
$heading="FIRM PROFILE";
$pdf->Cell(60,0,$heading,0,0);
$pdf->Ln(16);
$pdf->SetTextColor(26, 140, 255);
$pdf->SetFont('Arial', 'B', 20 );
$pdf->SetX(40);
$heading="InvestAdv";
$pdf->Cell(20,0,$heading,0,0);
$pdf->SetFont('Arial', 'B', 13 );
$pdf->Ln(10);
$pdf->SetTextColor(26, 26, 0);//Blue
//$pdf->Cell(0,0,"Summary",0,1);//width,height ,text,border,line

$pdf->SetX(40);
$pdf->Cell(50,10,"Firm_CRD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Firm_CRD",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Sec_CD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Sec_CD",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Sec_Nb",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Sec_Nb",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Bus_Nm",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Bus_Nm",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Lgl_Nm",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Lgl_Nm",0,1);

// investAdv ends....................................
 //****************************************************

//Address starts here......................................
$pdf->SetTextColor(26, 140, 255);
$pdf->SetFont('Arial', 'B', 20 );
$pdf->SetX(40);
$heading="Address";
$pdf->Cell(20,20,$heading,0,0);
$pdf->SetFont('Arial', 'B', 13 );
$pdf->Ln(20);
$pdf->SetTextColor(26, 26, 0);//Blue
//$pdf->Cell(0,0,"Summary",0,1);//width,height ,text,border,line

$pdf->SetX(40);
$pdf->Cell(50,10,"Firm_CRD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Firm_CRD",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Mail_Strt1",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Mail_Strt1",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Mail_Strt2",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Mail_Strt2",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Mail_City",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Mail_City",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Mail_State",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Mail_State",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Mail_Cntry",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Mail_Cntry",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Mail_Postlid",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Mail_Postlid",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Mail_Phnb",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Mail_Phnb",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Mail_Faxnb",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Mail_Faxnb",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Main_Strt1",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Main_Strt1",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Main_Strt2",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Main_Strt2",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Main_City",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Main_City",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Main_State",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Main_State",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Main_Cntry",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Main_Cntry",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Main_Post",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Main_Post",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Main_Phn",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Main_Phn",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Main_Fax",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Main_Fax",0,1);

//Address ends here......................................
  
  //***************************************************************************
  
//Registarion starts here......................................
 
$pdf->SetTextColor(26, 140, 255);
$pdf->SetFont('Arial', 'B', 20 );
$pdf->SetX(40);
$heading="Registration";
$pdf->Cell(20,20,$heading,0,0);
$pdf->SetFont('Arial', 'B', 13 );
$pdf->Ln(20);
$pdf->SetTextColor(26, 26, 0);//Blue
//$pdf->Cell(0,0,"Summary",0,1);//width,height ,text,border,line

$pdf->SetX(40);
$pdf->Cell(50,10,"Firm_CRD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Firm_CRD",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Firm_Type",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Firm_Type",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"St",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$St",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Dt",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Dt",0,1);

 //Registarion ends here......................................
  
  //***************************************************************************
  
 // states_filled_in starts here......................................

$pdf->SetTextColor(26, 140, 255);
$pdf->SetFont('Arial', 'B', 20 );
$pdf->SetX(40);
$heading="States_filled_in";
$pdf->Cell(20,20,$heading,0,0);
$pdf->SetFont('Arial', 'B', 13 );
$pdf->Ln(20);
$pdf->SetTextColor(26, 26, 0);//Blue
//$pdf->Cell(0,0,"Summary",0,1);//width,height ,text,border,line

$pdf->SetX(40);
$pdf->Cell(50,10,"Firm_CRD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Firm_CRD",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"RgltrCd",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$RgltrCd",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"St",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$St",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Dt",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Dt",0,1);

 //states_filled_in ends here......................................
  
  //***************************************************************************
  
//web_Address  starts here......................................
$pdf->SetTextColor(26, 140, 255);
$pdf->SetFont('Arial', 'B', 20 );
$pdf->SetX(40);
$heading="States_filled_in";
$pdf->Cell(20,20,$heading,0,0);
$pdf->SetFont('Arial', 'B', 13 );
$pdf->Ln(20);
$pdf->SetTextColor(26, 26, 0);//Blue
//$pdf->Cell(0,0,"Summary",0,1);//width,height ,text,border,line

$pdf->SetX(40);
$pdf->Cell(50,10,"Firm_CRD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Firm_CRD",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"websites",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$websites",0,1);

//web_Address ends here......................................
  
  //***************************************************************************
 // Where_business starts here......................................
 
$pdf->SetTextColor(26, 140, 255);
$pdf->SetFont('Arial', 'B', 20 );
$pdf->SetX(40);
$heading="Where_Business";
$pdf->Cell(20,20,$heading,0,0);
$pdf->SetFont('Arial', 'B', 13 );
$pdf->Ln(20);
$pdf->SetTextColor(26, 26, 0);//Blue
//$pdf->Cell(0,0,"Summary",0,1);//width,height ,text,border,line

$pdf->SetX(40);
$pdf->Cell(50,10,"Firm_CRD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Firm_CRD",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"More_Websites",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$More_Websites",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Foreign_Fin_Regu",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Foreign_Fin_Regu",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Public_Reporting",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Public_Reporting",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"More_Assets",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$More_Assets",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Assets_Ammount",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Assets_Ammount",0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Legal_Entity",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Legal_Entity",0,1);
$pdf->SetX(40);
$pdf->Cell(50,10,"Offices_Number",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,"$Offices_Number",0,1);


//Where_business  ends here......................................
  

$pdf->Output();
?>