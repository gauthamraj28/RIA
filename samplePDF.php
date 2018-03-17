<?php
require('fpdf.php');
require('config.php');
$crd=9999;
/*$sec="CHRO";
$crd=16986;
$secph=787-898989;
$firmtype="registered";
$busnm="The Huntung Investmest COmpany";
$legalnm="The Huntung Investmest COmpany";
$strt1="41 south west high street";
$strt2="";
$maincity="columbus";
$mainstate="OH";
$maincntry="US";
$mainpostal=43254565;
$maintele=969698569;
$mainfax=78789856;
$date="05/12/1996";//from Registration table Dt
*/
$sql="select i.Firm_Crd,i.Sec_Nb,i.Bus_Nm,i.Lgl_Nm,a.Main_Strt1,a.Main_Strt2,a.Main_City,a.Main_State,a.Main_Cntry,a.Main_Post,a.Main_Phn,a.Main_Fax,r.Firm_type,r.Dt from InvestAdv i,Address a,Registration r where i.Firm_Crd=1234";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

//$row=mysqli_fetch_assoc($result);

class PDF extends FPDF
{
	
	public function setName($crd,$sec,$bus,$lgl,$strt1,$strt2,$city,$state,$country,$post,$phn,$fax,$type,$dt)
	{
    $this->crd = $crd;
	$this->sec=$sec;
	$this->bus=$bus;
	$this->lgl=$lgl;
	$this->strt1=$strt1;
	$this->strt2=$strt2;
	$this->city=$city;
	$this->state=$state;
	$this->country=$country;
	$this->post=$post;
	$this->phn=$phn;
	$this->fax=$fax;
	$this->type=$type;
	$this->dt=$dt;
}
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
	
   // $this->Cell(30,10,$this->crd,0,2);
	//$this->Cell(200, 15, $, 0, 2); 
	 
	//$this->Cell(30,10,$this->sec,0,0);
    // Line break
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
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	
}
}
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AddPage();
$pdf->setFillColor(242, 242, 242);
$pdf->Rect(0,0,250,297,'F');

//$pdf->setName($row['Firm_Crd'],$row['Sec_Num'],$row['Bus_Num'],$row['Lgl_Num'],$row['Main_Strt1'],$row['Main_Strt2'],$row['Main_City'],$row['Main_State'],$row['Main_Cntry'],$row['Main_Post'],$row['Main_Post'],$row['Main_Phn'],$row['Main_Fax'],$row['Firm_type'],$row['Dt']);


/*
$pdf->newFlowingBlock( 50, 6, 'TBLR', 'J' );
$pdf->WriteFlowingBlock( $row['Lgl_Num'] );
$pdf->SetFont( 'Arial', 'I', 8 );
$pdf->WriteFlowingBlock( $row['Main_Strt1'].$row['Main_Strt2'].$row['Main_City'].$row['Main_State'].$row['Main_Cntry']);
$pdf->SetFont( 'Times', '', 10 );
$pdf->WriteFlowingBlock( 'This is a test of the flowing block script.' );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->WriteFlowingBlock( ' All' );
$pdf->SetFont( 'Times', '', 10 );
$pdf->WriteFlowingBlock( ' of this should be justified correctly.' . str_repeat( ' This is a test of the flowing block script.', 3 ) );
$pdf->finishFlowingBlock();


$pdf->setX(100);


$pdf->SetFont( 'Arial', 'B', 12 );

$pdf->newFlowingBlock( 50, 6, 'TBLR', 'J' );
$pdf->WriteFlowingBlock( $row['Lgl_Num'] );
$pdf->SetFont( 'Arial', 'I', 8 );
$pdf->WriteFlowingBlock( $row['Main_Strt1'].$row['Main_Strt2'].$row['Main_City'].$row['Main_State'].$row['Main_Cntry']);
$pdf->SetFont( 'Times', '', 10 );

$pdf->finishFlowingBlock();


$pdf->subWrite(10,'H','',33);
$pdf->Write(10,'ello World!');
$pdf->SetX(100);
$pdf->Write(10,"This is text with a capital first letter.\n");
$pdf->Ln(12);
*/
//First block 

$pdf->SetFont( 'Arial', 'B', 15 );
$pdf->setFillColor(230, 230, 230);//blue


//Title legal name
$pdf->Rect(10,30,80,60,'F');//block left margin,right margin,width,height 
$pdf->SetX(10);
$pdf->SetY(25);
$pdf->SetTextColor(0, 102, 255);//Blue
$pdf->SetFont('Arial', 'B', 18 );
$pdf->Cell(0,0,$row['Lgl_Nm'],0,1);//width,height ,text,border,line
$pdf->Ln(5);

//Investment Sub-Title
$pdf->SetFont('Arial', 'B', 14 );
$pdf->SetX(10);
$pdf->SetY(35);
$pdf->Cell(0,0,'Investment Adviser',0,1);//width,height ,text,border,line Fixed title..
$pdf->Ln(5);

//Address
$pdf->SetY(40);
$pdf->SetFont('Arial', 'B', 12 );
$pdf->Cell(0,5,$row['Main_Strt1'].$row['Main_Strt2'].$row['Main_City'].$row['Main_State'],0,0);
$pdf->Ln(5);
$pdf->Cell(0,5,$row['Main_Cntry'].$row['Main_Post'],0,0);

//Phone and Fax Number
$pdf->SetY(55);
$pdf->SetX(10);
$pdf->Cell(0,5,'Phone:'.$row['Main_Phn'],0,1);
$pdf->Cell(0,5,'Fax:'.$row['Main_Fax'],0,0);

//registration  date and crd
$pdf->SetX(10);
$pdf->SetY(70);
$pdf->Cell(0,5,'Registration:'.$row['Dt'],0,1);
$pdf->Cell(0,5,'Firm CRD:'.$crd,0,1);
$pdf->Ln(10);
$i=10;
$x = $pdf->GetX();
$y = $pdf->GetY();

$col1="PILOT REMARKS\n\n";
$pdf->MultiCell(150, 20, $col1, 0, 1);//row first celll width

$pdf->SetXY($x, $y+15);
$name='gautham';
$col2="Pilot's Name and Signature\n".$name;
$pdf->MultiCell(150, 10, $col2, 0);
$pdf->Ln(0);
$col3="Date Prepared\n";
$pdf->MultiCell(63, 10, $col3, 1);

$text='this is a word wrap test sadasdsadsdasdsadasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd ';
$nb=$pdf->WordWrap($text,10);
$pdf->Write(5,"This paragraph has $nb lines:\n\n");
//$pdf->Write(5,$text);
$pdf->Cell(0,$nb,$pdf->Write(5,$text),1,0);
$pdf->Ln(100);


$start_x=$pdf->GetX(); //initial x (start of column position)
$current_y = $pdf->GetY();
$current_x = $pdf->GetX();

$cell_width = 20;  //define cell width
$cell_height=7;    //define cell height

$pdf->SetFont('Arial','',16);

$pdf->MultiCell($cell_width,$cell_height,'Hi1',1); //print one cell value
$current_x+=$cell_width;                           //calculate position for next cell
$pdf->SetXY($current_x, $current_y);               //set position for next cell to print

$pdf->MultiCell($cell_width,$cell_height,'Hi2',1); //printing next cell
$current_x+=$cell_width;                           //re-calculate position for next cell
$pdf->SetXY($current_x, $current_y);               //set position for next cell

$pdf->MultiCell($cell_width,$cell_height,'Hi3',1);
$current_x+=$cell_width;

$pdf->Ln();
$current_x=$start_x;                       //set x to start_x (beginning of line)
$current_y+=$cell_height;                  //increase y by cell_height to print on next line

$pdf->SetXY($current_x, $current_y);

$pdf->MultiCell($cell_width,$cell_height,'Hi4',1);
$current_x+=$cell_width;
$pdf->SetXY($current_x, $current_y);

$pdf->MultiCell($cell_width,$cell_height,'Hi5(xtra)',1);
$current_x+=$cell_width;
$pdf->SetXY($current_x, $current_y);

$pdf->MultiCell($cell_width,$cell_height,'Hi5',1);
$current_x+=$cell_width;
$pdf->SetXY($current_x, $current_y);





/*
$text=str_repeat('hghgdsgdgsjdjsjdhsjhdjshjdhsjhdjshdjhsjhdsjdjshdhsjhdhsh',1);
$nb=$pdf->WordWrap($text,50);
//while($row1)
{
	
	
}
/*
$sql1="select *from investadv ";


$i=1;
while($row=$result->fetch_assoc())
{
$pdf->Cell(0,10,$row['Firm_Crd'].$i,1,1);
$i++;
}*/
$pdf->Output();
?>