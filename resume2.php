<?php



  session_start();



  require('fpdf181/fpdf.php');



  //A4 size paper

  //width 219mm

  //default margin 10mm each side

  //Writable horizontal 189mm



  $pdf = new FPDF('p','mm','A4');



  $pdf->AddPage();



  $pdf->SetFont('Arial','B',18);



  //Cell(width, height, text-content, border, end line, [align(optional)])



  $pdf->Cell(189, 0, 'Akash Kumar Gaur', 0,0, 'C');
  $pdf->SetFont('Arial','',10);

  $pdf->Cell(189,  4, 'Rudrapur', 0,1,'C');

  $pdf->Cell(189,  4, 'Uttarakhand', 0,1,'C');

  $pdf->Cell(189,  4, 'Mob:- 8127282427', 0,1,'C');

  $pdf->Cell(189,  4, 'Email:- aksnitald@gmail.com', 0,1,'C');

  $pdf->Cell(189,  4, 'Web Presence:- cvaks.comlu.com', 0,1,'C');

  $pdf->Line(10, 32, 210-10, 32);
  $pdf->Line(10, 32.5, 210-10, 32.5);

  //$pdf->Cell(40,  2.5, '', 0,1,'L');
  $pdf->Cell(40,  2.5, '', 0,1,'L');

  $pdf->SetFont('Arial','B',14);

  $pdf->SetFillColor(0,0,0);
  $pdf->SetTextColor(255,255,255);
  $pdf->Cell(45,  20, '  Objective', 1,0,'L',1);

  $pdf->SetFont('Arial','',12);

  //Avoid More than 130 Words
  $pdf->SetTextColor(0);
  $pdf->Cell(50,  2, '', 0,1,'L');
  $pdf->Cell(50,  8, '', 0,0,'L');
  $pdf->MultiCell(150,  9.5, 'To work in my field of interest and enhance my knowledge and skills thus giving my best to the organization.', 0,1);

  $pdf->Line(55, 32, 55, 280);

  $pdf->Line(200, 32.5, 200, 53);

  $pdf->Line(10, 53, 210-10, 53);

  //AOI

  $pdf->Cell(45,  15, '', 0,0,'L');

  $pdf->Cell(145.2,  2, '', 0,1,'R','1');

  $pdf->SetFont('Arial','B',14);

  $pdf->Cell(44,  20, ' Areas of Interest', 0,0,'L');

  $pdf->SetFont('Arial','',12);

  //Avoid More than 3 fields
  $pdf->SetTextColor(255,255,255);
  $pdf->Cell(1,  7, '', 0,0,'L');$pdf->Cell(145,  8, '     Front-End Development', 1,1,'L','1');

  $pdf->Cell(45,  7, '', 0,0,'L');$pdf->Cell(145,  8, '     Back-End Technologies', 1,1,'L','1');

  $pdf->Cell(45,  7, '', 0,0,'L');$pdf->Cell(145,  8, '     Coding in C, C++, Python', 1,1,'L','1');

  $pdf->Line(10, 80, 210-10, 80);


  $pdf->Output();

   ?>
