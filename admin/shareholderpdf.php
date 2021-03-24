

<?php
	require_once 'FPDF/fpdf.php';
	require_once 'connectionpdf.php';
	$sql = "select * from shareholder";
	$data = mysqli_query($con,$sql);
	
	

	
	if(isset($_POST['btn_pdf']))
	{
		$pdf = new FPDF('P','mm','A3');
		$pdf->SetFont('Arial','',14);
		$pdf->AddPage();
		$pdf->Cell(40,10,'ID',1,0,'C');
		$pdf->Cell(60,10,'Shareholder Name',1,0,'C');
		$pdf->Cell(60,10,'Username',1,0,'C');
		$pdf->Cell(40,10,'Share Percentage',1,0,'C');
		$pdf->Cell(40,10,'Date of Birth',1,0,'C');
		$pdf->Cell(40,10,'Shareholder NIC',1,1,'C');
		
	
		
		
	}
	while($row = mysqli_fetch_assoc($data))
	{
		$pdf->Cell(40,10,$row['shareholderid'],1,0,'C');
		$pdf->Cell(60,10,$row['shfull_name'],1,0,'C');
		$pdf->Cell(60,10,$row['username'],1,0,'C');
		$pdf->Cell(40,10,$row['share_percentage'],1,0,'C');
		$pdf->Cell(40,10,$row['dateofbirth'],1,0,'C');
		$pdf->Cell(40,10,$row['nic'],1,1,'C');
		
	}
	$pdf->Output();