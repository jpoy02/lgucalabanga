<?php
require('fpdf182/fpdf.php');
$lorem = "Lorem ipsum dolor";
$post = 'SAMPLE TEXT';
// , sit amet consectetur adipisicing elit. Itaque nostrum iure iusto ipsam soluta error!,ipsam soluta error t amet consectetur adipisicing elit. Itaque nostrum iure iusto ipsam soluta error!,ipsam soluta error ";


// A4 size: 219mm
// default margi: 10mm each side
// writable horizontal: 189mm


$pdf = new FPDF('P', 'mm', array(216,330));
$pdf->AddFont('Century Gothic', '', 'GOTHIC.php');
$pdf->AddFont('Century Gothic Bold', '', 'GOTHICB.php');
$pdf->AddPage();
$pdf -> SetAutoPageBreak(true , (0));


// Set (font, B, size), ('Arial', 'B', '12')

$pdf->SetFont('Century Gothic Bold', '', 9);

// Cell (width, height, text, border, end line, [align])

$pdf->Cell((196 * .5), 4, 'CITY / MUNICIPALITY : ', 0, 0, 'R');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 * .10), 4, 'CALABANGA', 'B', 0, 'L');
$pdf->Cell((196 * .40), 4, ' ', 0, 1, 'L');


$pdf->Cell((196), 1, '   ', 'T, L, R', 1, 'L');
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196), 4, '   INSTRUCTIONS:', 'L, R', 1, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196), 4, '     1. Provide accurate information to avoid delays. Incomplete application form will be returned to the applicant', 'L, R', 1, 'L');
$pdf->Cell((196), 4, '     2. Ensure that all documents attached to this form (if any) are complete and properly filled out.', 'L, R', 1, 'L');
$pdf->Cell((196), 1, ' ', 'L, R, B', 1, 'L');
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196), 5, 'I. APPLICATION SECTION', 1, 1, 'L');
$pdf->Cell((196), 5, '   1. Basic Information', 1, 1, 'L');

// APPLICATION TYPE
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196*.5) /2 , 5, 'Application type: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196*.5) /2 , 5, $post, 'T,B,R', 0, 'L');

// MODE OF PAYMENT
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 *.5) /2, 5, 'Mode of Payment', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196*.5) /2 , 5, $post, 'T,B,R', 1, 'L');

// LINE
// DATE OF APPLICATION
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .5 , 5, 'Date of Application: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) * .5 , 5, 'Nov, 30, 2021', 'T,B,R', 0, 'L');

// DTI/SEC/CDA Reg. No:
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .6 , 5, 'DTI/SEC/CDA Reg. No: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) * .4 , 5, $post, 'T,B,R', 0, 'L');

// CTC:
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .4 , 5, 'CTC Date & No: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) * .6 , 5, 'Jan 31, 2020 :: 88888888', 'T,B,R', 1, 'L');
//END LINE

// LINE
// TIN No.
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .3 , 5, 'TIN No: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) * .6 , 5, 'XXX-XXX-XXX-XXX', 'T,B,R', 0, 'L');

// DTI/SEC/CDA Reg. No:
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .6 , 5, 'DTI/SEC/CDA Reg. Date: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) /2 , 5, $post, 'T,B,R', 0, 'L');

// CTC:
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .4 , 5, 'CTC Amount: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) * .6 , 5, $post, 'T,B,R', 1, 'L');
//END LINE


// LINE
// TYPE OF BUSINESS
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .5 , 5, 'Type of Business: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) * .4 , 5, 'PARTNERSHIP', 'T,B,R', 0, 'L');

// AMENDMENT FROM:
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .6 , 5, 'Amendment From: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) /2 , 5, $post, 'T,B,R', 0, 'L');

// AMENDMENT TO:
$pdf->SetFont('Century Gothic Bold', '', 9);
$pdf->Cell((196 / 3) * .4 , 5, 'Amendment To: ', 'T,B,L', 0, 'L');
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((196 / 3 ) * .6 , 5, $post, 'T,B,R', 1, 'L');
//END LINE


$pdf->Output();
