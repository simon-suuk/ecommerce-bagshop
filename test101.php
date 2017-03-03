<?php
require('fpdf.php');

class PDF extends FPDF
{
	protected $col =0;
	protected $y0;
	
	function Header(){
		//description for the header 
		global $title;

		$this->Image('BagShop.png',10,6,30);
		$this->SetFont('Arial','B',15);
		$w = $this->GetStringWidth($title)+6;
		$this->SetX((210-$w)/2);
		$this->SetDrawColor(0,80,180);
		$this->SetFillColor(230,230,0);
		$this->SetTextColor(220,50,50);
		$this->SetLineWidth(1);
		$this->Cell($w,9,$title,1,1,'C',true);
		$this->Ln(10);
	// Save ordinate
		$this->y0 = $this->GetY();
	}
	
	function Footer()
{	//description for the footer
	// Page footer
	$this->SetY(-15);
	$this->SetFont('Arial','I',8);
	$this->SetTextColor(128);
	$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

	function ChapterBody($file)
{	//description for how the chapter should be 
	// Read text file
	$txt = file_get_contents($file);
	// Font
	$this->SetFont('Times','',12);
	// Output text in a 6 cm width column
	$this->MultiCell(70,10,$txt);
	$this->Ln();
	// Mention
	$this->SetFont('','I');
	$this->Cell(0,5);
	// Go back to first column
	//$this->SetCol(0);
}

	function PrintChapter($file)
{
	// Add chapter
	$this->AddPage();
	//$this->ChapterTitle($title);
	$this->ChapterBody($file);
}

//table starts from here
	function LoadData($file)
{
	// Read file lines
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}

// Colored table
function FancyTable($head, $data)
{
	// Colors, line width and bold font
	$this->SetFillColor(0, 255, 191);
	$this->SetTextColor(255);
	$this->SetDrawColor(0, 255, 191);
	$this->SetLineWidth(.3);
	$this->SetFont('Arial','B');
	// Header
	$w = array(50, 40, 40);
	for($i=0;$i<count($head);$i++)
		$this->Cell($w[$i],7,$head[$i],1,0,'C',true);
	$this->Ln();
	// Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Data
	$fill = false;
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
		//$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	// Closing line
	$this->Cell(array_sum($w),0,'','T');
}
}
//this is for the text
$pdf = new PDF();
$title = 'Customer Order Report';
$pdf->SetTitle($title);
$pdf->PrintChapter('test1.txt');
$pdf->Image('duffel_bag.jpg',40,135,50);

//this is for the table
$head = array('Product', 'Quantity', 'Price');
// Data loading
$data = $pdf->LoadData('test.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->FancyTable($head,$data);
$pdf->Output();
?>
