<?php

  session_start();

  require('fpdf181/fpdf.php');

  //A4 size paper
  //width 219mm
  //default margin 10mm each side
  //Writable horizontal 189mm

  $pdf = new FPDF('p','mm','A4');

  $pdf->AddPage();

  $pdf->SetFont('Arial','B',28);

  //Cell(width, height, text-content, border, end ine, [align(optional)])

  $pdf->Cell(130, 20, 'Akash Kumar Gaur', 0,0);


  $pdf->SetFont('Arial','',14);
  $pdf->Cell(59,  6, 'Rudrapur', 0,1,'R');
  $pdf->Cell(189,  6, 'Uttarakhand', 0,1,'R');
  $pdf->Cell(189,  6, 'Mob:- 8127282427', 0,1,'R');
  $pdf->Cell(189,  6, 'Email:- aksnitald@gmail.com', 0,1,'R');
  $pdf->Line(10, 35, 210-10, 35);
  $pdf->Line(10, 35.5, 210-10, 35.5);
  $pdf->Cell(189,  8, '', 0,1,'L');

  $pdf->SetFont('Arial','BU',14);
  $pdf->Cell(59,  8, 'Objective', 0,0,'L');
  $pdf->SetFont('Arial','',12);
  //Avoid More than 130 Words
  $pdf->MultiCell(138,  6, 'To work in my field of interest and enhance my skills and knowledge thus giving my best to the organization.', 0,1);
  $pdf->Line(10, 60, 210-10, 60);

  $pdf->Cell(189,  8, '', 0,1,'L');

  $pdf->SetFont('Arial','BU',14);
  $pdf->Cell(59,  8, 'Areas of Interest', 0,0,'L');
  $pdf->SetFont('Arial','',12);
  //Avoid More than 3 fields
  $pdf->Cell(1,  7, '', 0,0,'L');$pdf->Cell(59,  7, 'Front-End Development', 0,1,'L');
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, 'Back-End Technologies', 0,1,'L');
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, 'Coding in C, C++, Python', 0,1,'L');
  $pdf->Line(10, 84, 210-10, 84);

  $pdf->Cell(189,  5, '', 0,1,'L');

  $pdf->SetFont('Arial','BU',14);
  $pdf->Cell(59,  7, 'Skills', 0,0,'L');
  $pdf->SetFont('Arial','',12);
  //Avoid More than 16 fields
  $pdf->Cell(1,  7, '', 0,0,'L');$pdf->Cell(30,  7, 'C', 0,0,'L');$pdf->Cell(30,  7, 'HTML5', 0,0,'L');$pdf->Cell(30,  7, 'Bootstrap', 0,0,'L');$pdf->Cell(30,  7, 'Photoshop', 0,1,'L');
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(30,  7, 'C++', 0,0,'L');$pdf->Cell(30,  7, 'CSS3', 0,0,'L');$pdf->Cell(30,  7, 'DOM', 0,0,'L');$pdf->Cell(30,  7, 'Django', 0,1,'L');
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(30,  7, 'Python', 0,0,'L');$pdf->Cell(30,  7, 'JavaScript', 0,0,'L');$pdf->Cell(30,  7, 'AJAX', 0,0,'L');$pdf->Cell(30,  7, 'Illustrator', 0,1,'L');
  $pdf->Line(10, 111, 210-10, 111);

  $pdf->Cell(189,  5, '', 0,1,'L');

  $pdf->SetFont('Arial','BU',14);
  $pdf->Cell(59,  7, 'Education', 0,0,'L');
  //COLLEGE
  $pdf->Cell(1,  7, '', 0,0,'L');
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(59,  7, 'Motilal Nehru National Institute of Technology', 0,1,'L');
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, 'B.Tech, Electronics and Communication Engineering', 0,1,'L');
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, '2014- 2018', 0,1,'L');
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, 'CPI : 6.55', 0,1,'L');

  //12Th
  $pdf->Cell(1,  5, '', 0,0,'L');
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(59,  8, '', 0,0,'L');$pdf->Cell(69,  8, 'Class XII', 0,0,'L');$pdf->Cell(59,  7, 'Class X', 0,1,'L');
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(69,  7, 'Jawahar Navodaya Vidyalaya', 0,0,'L');$pdf->Cell(59,  8, 'Jawahar Navodaya Vidyalaya', 0,1,'L');
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(69,  7, '2013', 0,0,'L');$pdf->Cell(69,  7, '2011', 0,1,'L');

  $pdf->SetFont('Arial','',12);
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(69,  7, 'Percentage: 86%', 0,0,'L');$pdf->Cell(69,  7, 'Percentage: 89.3%', 0,1,'L');
  $pdf->Line(10, 174, 210-10, 174);

  //INTERNSHIPS
  $pdf->Cell(189,  7, '', 0,1,'L');

  $pdf->SetFont('Arial','BU',14);
  $pdf->Cell(59,  7, 'Intern/Training', 0,0,'L');

  $pdf->Cell(1,  7, '', 0,0,'L');
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(59,  7, 'Front-End Development, Lakes Career Point', 0,1,'L');
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(60,  7, '', 0,0,'L');
  $pdf->MultiCell(138,  7, 'Designed a coaching website with HTML5, CSS3, JavaScript and jQuery.', 0,1);

  $pdf->Cell(1,  7, '', 0,0,'L');
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(59,  7, '', 0,0,'L');
  $pdf->Cell(59,  7, 'Online Tutor and Exam Content Curator, Hashlearn', 0,1,'L');
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(60,  7, '', 0,0,'L');
  $pdf->MultiCell(138,  8, 'Working as tutor and content curator for class V to XII and other  competitive exams.', 0,1);
  $pdf->Line(10, 222, 210-10, 222);

  $pdf->Cell(189,  5, '', 0,1,'L');

  $pdf->SetFont('Arial','BU',14);
  $pdf->Cell(59,  7, 'Hobbies', 0,0,'L');
  $pdf->SetFont('Arial','',12);
  //Avoid More than 8 fields
  $pdf->Cell(1,  7, '', 0,0,'L');$pdf->Cell(30,  7, 'Music', 0,0,'L');$pdf->Cell(30,  7, 'Football', 0,0,'L');$pdf->Cell(30,  7, 'Driving', 0,0,'L');$pdf->Cell(30,  7, '', 0,1,'L');
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(30,  7, 'Swimming', 0,0,'L');$pdf->Cell(30,  7, 'Games', 0,0,'L');$pdf->Cell(30,  7, '', 0,0,'L');$pdf->Cell(30,  7, '', 0,1,'L');
  $pdf->Line(10, 241, 210-10, 241);

  $pdf->Cell(189,  5, '', 0,1,'L');

  $pdf->SetFont('Arial','BU',14);
  $pdf->Cell(59,  7, 'Project Links', 0,0,'L');
  $pdf->SetFont('Arial','',12);
  //Avoid More than 4 fields
  $pdf->Cell(1,  7, '', 0,0,'L');$pdf->Cell(60,  7, 'cvaks.comlu.com', 0,0,'L');$pdf->Cell(60,  7, 'aksrm.comlu.com', 0,1,'L');
  $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(60,  7, 'aksg.comlu.com', 0,0,'L');$pdf->Cell(60,  7, 'mfhg.comlu.com', 0,1,'L');
  $pdf->Line(10, 262.5, 210-10, 262.5);
  $pdf->Line(10, 263, 210-10, 263);

  $pdf->Cell(189,  8, '', 0,1);
  $pdf->SetFont('Arial','BU',6);
  $pdf->Cell(189,  7, 'Created by:- Resuma (aksrm.comlu.com)', 0,0,'R');

$pdf->Output();
 ?>
