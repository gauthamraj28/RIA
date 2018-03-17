<?php
session_start();
require('fpdf.php');
require("config.php");
 

$crd=$_SESSION['crd'];
// your queries goes here.....
// query for investAdv......................................
$getinfo="select * from investAdv as i where i.firm_crd=$crd ";
$query1 = mysqli_query($conn,$getinfo);
$rs1= mysqli_fetch_assoc($query1);
	$Firm_CRD=$rs1['Firm_CRD'];
   $Sec_CD=$rs1['Sec_CD'];
	$Sec_Nb= $rs1['Sec_Nb'];
	$Bus_Nm= $rs1['Bus_Nm'];
	$Lgl_Nm = $rs1['Lgl_Nm'];
	

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
$hello="hello";
$pdf->SetX(40);
$pdf->Cell(50,10,"Firm_CRD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,$Firm_CRD,0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Sec_CD",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10, $Sec_CD ,0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Sec_Nb",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10, $Sec_Nb ,0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Bus_Nm",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10,$Bus_Nm,0,1);

$pdf->SetX(40);
$pdf->Cell(50,10,"Lgl_Nm",0,0);
$pdf->SetX(110);
$pdf->Cell(50,10,":",0,0);
$pdf->SetX(120);
$pdf->Cell(0,10, $Lgl_Nm ,0,1);

// investAdv ends....................................
 //****************************************************
$pdf->Output();
?>