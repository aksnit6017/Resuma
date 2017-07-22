<?php
  session_start();

  require('fpdf181/fpdf.php');

  $mysqli = new mysqli('localhost','id1790141_akash','resumapass','id1790141_resuma');

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      //POST
          $name = $mysqli->real_escape_string($_POST['name']);
          $city = $mysqli->real_escape_string($_POST['city']);
          $state = $mysqli->real_escape_string($_POST['state']);
          $email = $mysqli->real_escape_string($_POST['email']);
          $mobile = $mysqli->real_escape_string($_POST['mobile']);

          $obj = $mysqli->real_escape_string($_POST['obj']);
          $aoi1 = $mysqli->real_escape_string($_POST['aoi1']);
          $aoi2 = $mysqli->real_escape_string($_POST['aoi2']);
          $aoi3 = $mysqli->real_escape_string($_POST['aoi3']);

          $sk1 = $mysqli->real_escape_string($_POST['sk1']);
          $sk2 = $mysqli->real_escape_string($_POST['sk2']);
          $sk3 = $mysqli->real_escape_string($_POST['sk3']);
          $sk4 = $mysqli->real_escape_string($_POST['sk4']);
          $sk5 = $mysqli->real_escape_string($_POST['sk5']);
          $sk6 = $mysqli->real_escape_string($_POST['sk6']);
          $sk7 = $mysqli->real_escape_string($_POST['sk7']);
          $sk8 = $mysqli->real_escape_string($_POST['sk8']);
          $sk9 = $mysqli->real_escape_string($_POST['sk9']);
          $sk10 = $mysqli->real_escape_string($_POST['sk10']);
          $sk11 = $mysqli->real_escape_string($_POST['sk11']);
          $sk12 = $mysqli->real_escape_string($_POST['sk12']);

          $college = $mysqli->real_escape_string($_POST['college']);
          $branch = $mysqli->real_escape_string($_POST['branch']);
          $year = $mysqli->real_escape_string($_POST['year']);
          $cpi = $mysqli->real_escape_string($_POST['cpi']);

          $school12 = $mysqli->real_escape_string($_POST['school12']);
          $year12 = $mysqli->real_escape_string($_POST['year12']);
          $perc12 = $mysqli->real_escape_string($_POST['perc12']);

          $school10 = $mysqli->real_escape_string($_POST['school10']);
          $year10 = $mysqli->real_escape_string($_POST['year10']);
          $perc10 = $mysqli->real_escape_string($_POST['perc10']);

          $it1 = $mysqli->real_escape_string($_POST['it1']);
          $it1ab = $mysqli->real_escape_string($_POST['it1ab']);

          $it2= $mysqli->real_escape_string($_POST['it2']);
          $it2ab = $mysqli->real_escape_string($_POST['it2ab']);

          $hb1 = $mysqli->real_escape_string($_POST['hb1']);
          $hb2 = $mysqli->real_escape_string($_POST['hb2']);
          $hb3 = $mysqli->real_escape_string($_POST['hb3']);
          $hb4 = $mysqli->real_escape_string($_POST['hb4']);
          $hb5 = $mysqli->real_escape_string($_POST['hb5']);

          $pr1 = $mysqli->real_escape_string($_POST['pr1']);
          $pr2 = $mysqli->real_escape_string($_POST['pr2']);
          $pr3 = $mysqli->real_escape_string($_POST['pr3']);
          $pr4 = $mysqli->real_escape_string($_POST['pr4']);




          //PDF GENERATE
                $pdf = new FPDF();
                $pdf->AddPage();
                $pdf->SetFont('Arial','B',28);

                //Cell(width, height, text-content, border, end ine, [align(optional)])

                $pdf->Cell(130, 20, "{$name}", 0,0);


                $pdf->SetFont('Arial','',14);
                $pdf->Cell(59,  6, "{$city}", 0,1,'R');
                $pdf->Cell(189,  6, "{$state}", 0,1,'R');
                $pdf->Cell(189,  6, "Mob:- {$mobile}", 0,1,'R');
                $pdf->Cell(189,  6, "Email:- {$email}", 0,1,'R');
                $pdf->Line(10, 35, 210-10, 35);
                $pdf->Line(10, 35.5, 210-10, 35.5);
                $pdf->Cell(189,  8, '', 0,1,'L');

                $pdf->SetFont('Arial','BU',14);
                $pdf->Cell(59,  8, 'Objective', 0,0,'L');
                $pdf->SetFont('Arial','',12);
                //Avoid More than 130 Words
                $pdf->MultiCell(138,  6, "{$obj}.", 0,1);
                //$pdf->Line(10, 60, 210-10, 60);

                $pdf->Cell(189,  8, '', 0,1,'L');

                $pdf->SetFont('Arial','BU',14);
                $pdf->Cell(59,  8, 'Areas of Interest', 0,0,'L');
                $pdf->SetFont('Arial','',12);
                //Avoid More than 3 fields
                $pdf->Cell(1,  7, '', 0,0,'L');$pdf->Cell(59,  7, "{$aoi1}", 0,1,'L');
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, "{$aoi2}", 0,1,'L');
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, "{$aoi3}", 0,1,'L');
                //$pdf->Line(10, 84, 210-10, 84);

                $pdf->Cell(189,  5, '', 0,1,'L');

                $pdf->SetFont('Arial','BU',14);
                $pdf->Cell(59,  7, 'Skills', 0,0,'L');
                $pdf->SetFont('Arial','',12);
                //Avoid More than 16 fields
                $pdf->Cell(1,  7, '', 0,0,'L');
                $pdf->Cell(30,  7, "{$sk1}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk4}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk7}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk10}", 0,1,'L');
                $pdf->Cell(60,  7, '', 0,0,'L');
                $pdf->Cell(30,  7, "{$sk2}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk5}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk8}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk11}", 0,1,'L');
                $pdf->Cell(60,  7, '', 0,0,'L');
                $pdf->Cell(30,  7, "{$sk3}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk6}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk9}", 0,0,'L');
                $pdf->Cell(30,  7, "{$sk12}", 0,1,'L');
                //$pdf->Line(10, 111, 210-10, 111);

                $pdf->Cell(189,  5, '', 0,1,'L');

                $pdf->SetFont('Arial','BU',14);
                $pdf->Cell(59,  7, 'Education', 0,0,'L');
                //COLLEGE
                $pdf->Cell(1,  7, '', 0,0,'L');
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(59,  7, "{$college}", 0,1,'L');
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, "{$branch}", 0,1,'L');
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, "{$year}", 0,1,'L');
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(59,  7, "{$cpi}", 0,1,'L');

                //12Th
                $pdf->Cell(1,  5, '', 0,0,'L');
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(59,  8, '', 0,0,'L');$pdf->Cell(69,  8, 'Class XII', 0,0,'L');$pdf->Cell(59,  7, 'Class X', 0,1,'L');
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(69,  7, "{$school12}", 0,0,'L');$pdf->Cell(59,  8, "{$school10}", 0,1,'L');
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(69,  7, "{$year12}", 0,0,'L');$pdf->Cell(69,  7, "{$year10}", 0,1,'L');

                $pdf->SetFont('Arial','',12);
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(69,  7, "{$perc12}", 0,0,'L');$pdf->Cell(69,  7, "{$perc10}", 0,1,'L');
                //$pdf->Line(10, 174, 210-10, 174);

                //INTERNSHIPS
                $pdf->Cell(189,  7, '', 0,1,'L');

                $pdf->SetFont('Arial','BU',14);
                $pdf->Cell(59,  7, 'Interns/Trainings', 0,0,'L');

                $pdf->Cell(1,  7, '', 0,0,'L');
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(59,  7, "{$it1}", 0,1,'L');
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(60,  7, '', 0,0,'L');
                $pdf->MultiCell(138,  7, "{$it1ab}.", 0,1);

                $pdf->Cell(1,  7, '', 0,0,'L');
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(59,  7, '', 0,0,'L');
                $pdf->Cell(59,  7, "{$it2}", 0,1,'L');
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(60,  7, '', 0,0,'L');
                $pdf->MultiCell(138,  8, "{$it2ab}.", 0,1);
                //$pdf->Line(10, 222, 210-10, 222);

                $pdf->Cell(189,  5, '', 0,1,'L');

                $pdf->SetFont('Arial','BU',14);
                $pdf->Cell(59,  7, 'Hobbies', 0,0,'L');
                $pdf->SetFont('Arial','',12);
                //Avoid More than 8 fields
                $pdf->Cell(1,  7, '', 0,0,'L');
                $pdf->Cell(30,  7, "{$hb1}", 0,0,'L');
                $pdf->Cell(30,  7, "{$hb2}", 0,0,'L');
                $pdf->Cell(30,  7, "{$hb3}", 0,0,'L');
                $pdf->Cell(30,  7, '', 0,1,'L');
                $pdf->Cell(60,  7, '', 0,0,'L');
                $pdf->Cell(30,  7, "{$hb4}", 0,0,'L');
                $pdf->Cell(30,  7, "{$hb5}", 0,0,'L');
                $pdf->Cell(30,  7, '', 0,0,'L');
                $pdf->Cell(30,  7, '', 0,1,'L');
                //$pdf->Line(10, 241, 210-10, 241);

                $pdf->Cell(189,  5, '', 0,1,'L');

                $pdf->SetFont('Arial','BU',14);
                $pdf->Cell(59,  7, 'Project Links', 0,0,'L');
                $pdf->SetFont('Arial','',12);
                //Avoid More than 4 fields
                $pdf->Cell(1,  7, '', 0,0,'L');$pdf->Cell(60,  7, "{$pr1}", 0,0,'L');$pdf->Cell(60,  7, "{$pr2}", 0,1,'L');
                $pdf->Cell(60,  7, '', 0,0,'L');$pdf->Cell(60,  7, "{$pr3}", 0,0,'L');$pdf->Cell(60,  7, "{$pr4}", 0,1,'L');
                //$pdf->Line(10, 262.5, 210-10, 262.5);
                //$pdf->Line(10, 263, 210-10, 263);

                $pdf->Cell(189,  5, '', 0,1);
                $pdf->SetFont('Arial','BU',6);
                $pdf->Cell(189,  7, 'Created by:- Resuma (aksrm.comlu.com)', 0,0,'R');




                $pdf->Output();



          // DB DATA
                $_SESSION['name'] = $name;

                $sql = "INSERT INTO userrm (name,  email, mobile)"
                        . "VALUES ('$name', '$email', '$mobile')";

                //Success
                if($mysqli->query($sql) === true){
                  $_SESSION['message'] = 'Registration Success !!!';
                  //header("location: finalcv.php");
                  //$pdf->Output();
                }
                else{
                  $_SESSION['message'] = "FAILED !!";
                }

                //$pdf->Output();
  }
?>
