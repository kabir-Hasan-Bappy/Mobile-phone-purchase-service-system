<?php
require('fpdf/fpdf.php');

//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'gng');

//get invoices data
$query = mysqli_query($con,"select * from c_order
	inner join cart using(o_id)
	where
	o_id = '".$_GET['invoiceID']."'");
$invoice = mysqli_fetch_array($query);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'Gadget N Gadget',0,0);
$pdf->Cell(59	,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'Sector#10',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'[Dhaka, Bangladesh]',0,0);
$pdf->Cell(25	,5,'Date:',0,0);
$pdf->Cell(34	,5,$invoice['order_date'],0,1);//end of line

$pdf->Cell(130	,5,'Phone [+12345678]',0,0);
$pdf->Cell(25	,5,'Invoice No#',0,0);
$pdf->Cell(34	,5,$invoice['o_id'],0,1);//end of line

$pdf->Cell(130	,5,'Email gng@gmail.com',0,0);
/*$pdf->Cell(25	,5,'Customer Name',0,0);
$pdf->Cell(34	,5,$invoice['fname'],0,1);//end of line*/

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Bill to,',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(20	,5,'Name:',0,0);
$pdf->Cell(90	,5,$invoice['fname'],0,1);



$pdf->Cell(20	,5,'Address:',0,0);
$pdf->Cell(90	,5,$invoice['address'],0,1);

$pdf->Cell(20	,5,'Mobile:',0,0);
$pdf->Cell(90	,5,$invoice['contact'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(100	,5,'Mobile Model',1,0);
$pdf->Cell(30	,5,'Quantity',1,0);
$pdf->Cell(25	,5,'Price',1,0);
$pdf->Cell(34	,5,' Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query = mysqli_query($con,"select * from cart where o_id = '".$invoice['o_id']."'");
$tax = 0; //total tax
$amount = 0; //total amount

//display the items
while($item = mysqli_fetch_array($query)){
	$pdf->Cell(100	,5,$item['model'],1,0);
	$pdf->Cell(30	,5,$item['quantity'],1,0);
	//add thousand separator using number_format function
	$pdf->Cell(25	,5,number_format($item['price']),1,0);
	$pdf->Cell(34	,5,number_format($item['total_price']),1,1,'R');//end of line
	//accumulate tax and amount
	$tax += $item['price'];
	$amount += $item['total_price'];
}

//summary
$pdf->SetFont('Arial','B',12);
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Total',0,0);
$pdf->Cell(5	,5,'tk',1,0);
$pdf->Cell(29	,5,number_format($amount),1,1,'R');//end of line

$pdf->Output();
?>
