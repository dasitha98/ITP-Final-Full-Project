<?php
	require_once 'FPDF/fpdf.php';
	require_once 'connectionpdf.php';
	$sql = "select * from events";
	$data = mysqli_query($con,$sql);
	
	

	
	if(isset($_POST['btn_pdf']))
	{
		$pdf = new FPDF('P','mm','A3');
		$pdf->SetFont('Arial','',14);
		$pdf->AddPage();
		$pdf->Cell(40,10,'Event ID',1,0,'C');
		$pdf->Cell(40,10,'Event Type',1,0,'C');
		$pdf->Cell(60,10,'Event Name',1,0,'C');
		$pdf->Cell(40,10,'Event Date',1,0,'C');
		
		$pdf->Cell(40,10,'To',1,1,'C');
		
		
	}
	while($row = mysqli_fetch_assoc($data))
	{
		$pdf->Cell(40,10,$row['eventid'],1,0,'C');
		$pdf->Cell(40,10,$row['type'],1,0,'C');
		$pdf->Cell(60,10,$row['ename'],1,0,'C');
		$pdf->Cell(40,10,$row['date'],1,0,'C');
		
		$pdf->Cell(40,10,$row['towh'],1,1,'C');
		
	}
	$pdf->Output();
