<?php
require('fpdf182/fpdf.php');
$i = 'SAMPLE TEXT';
$lorem = "Lorem ipsum dolor";
// , sit amet consectetur adipisicing elit. Itaque nostrum iure iusto ipsam soluta error!,ipsam soluta error t amet consectetur adipisicing elit. Itaque nostrum iure iusto ipsam soluta error!,ipsam soluta error ";



// A4 size: 219mm
// default margi: 10mm each side
// writable horizontal: 189mm


$pdf = new FPDF('P', 'mm', 'Legal');
$pdf->AddFont('Century Gothic', '', 'GOTHIC.php');
$pdf->AddFont('Century Gothic Bold', '', 'GOTHICB.php');
$pdf->AddPage();


// Set (font, B, size), ('Arial', 'B', '12')

$pdf->SetFont('Century Gothic Bold', '', 12);

// Cell (width, height, text, border, end line, [align])


// TITLE
$pdf->Cell(189, 4, 'APPLICATION FOR LOCATIONAL CLEARANCE/ CERIFICATE OF ZONING COMPLIANCE', 0, 1, 'C');
$pdf->Cell(189, 0, '_______________________________________________________________________________', 0, 1,  'C');

$pdf->Cell(189, 10, '', 0, 1, 'C'); // SPACER



// FORM 1ST LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '1. NAME OF APPLICANT', 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '2. NAME OF CORPORATION', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189 / 2), 4, '   ' . $i, 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '   ' . $i, 0, 1, 'L');
$pdf->Cell(189, 0, '', 1, 1,  'C'); // Line Border
$pdf->Cell(189, 5, '', 0, 1, 'C'); // SPACER



// 2dn LIne
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '3. ADDRESS OF APPLICANT', 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '4. ADDRESS OF CORPORATION', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189 / 2), 4, '   ' . $i, 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '   ' . $i, 0, 1, 'L');
$pdf->Cell(189, 0, '', 1, 1,  'C'); // Line Border
$pdf->Cell(189, 5, '', 0, 1, 'C'); // SPACER

// 3rd LIne
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '5. NAME OF AUTHROIZED REPRESENTATIVE', 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '6. ADDRESS OF AUTHROIZED REPRESENTATIVE', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189 / 2), 4, '   ' . $i, 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '   ' . $i, 0, 1, 'L');
$pdf->Cell(189, 0, '', 1, 1,  'C'); // Line Border
$pdf->Cell(189, 5, '', 0, 1, 'C'); // SPACER


// 4th LIne
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '7. PROJECT TYPE', 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '8. PROJECT NATURE', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189 / 2), 4, '   ' . $i, 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '   ' . $i, 0, 1, 'L');
$pdf->Cell(189, 0, '', 1, 1,  'C'); // Line Border
$pdf->Cell(189, 5, '', 0, 1, 'C'); // SPACER

// 5th LIne
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '9. PROJECT LOCATION', 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '10. PROJECT AREA', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);

// $pdf->Cell((189/2), 4, '   ' . $i, 0, 0, 'L');
// $pdf->Cell((189/2), 4, '   ' . $i, 0, 1, 'L');
// $pdf->Cell(189, -2, '______________________________________________________________________________________________________________', 0, 1,  'C');
// $pdf->Cell(189, 5, '', 0, 1, 'C'); 

// MULTI CELL


$cellWidth = (189 / 2);
$cellheight = 4;


//Check if text is overflowing
if ($pdf->GetStringWidth($lorem) < $cellWidth) {
    $line = 1;
} else {
    $textLength = strlen($lorem);
    $errmargin = 10;
    $startChar = 0;
    $maxChar = 0;
    $textArray = array();
    $tmpString = '';

    while ($startChar < $textLength) {
        while (
            $pdf->GetStringWidth($tmpString) < ($cellWidth - $errmargin) &&
            ($startChar + $maxChar) < $textLength
        ) {
            $maxChar++;
            $tmpString = substr($lorem, $startChar, $maxChar);
        }

        $startChar = $startChar + $maxChar;
        array_push($textArray, $tmpString);
        $maxChar = 0;
        $tmpString = '';
    }
    $line = count($textArray);
}

$xPos = $pdf->GetX();
$yPos = $pdf->GetY();

$pdf-> MultiCell($cellWidth, $cellheight, $lorem, 1);
$pdf -> SetXY($xPos + $cellWidth, $yPos); // Reset LIne
$pdf->Cell((189 / 2), 4, '  Next Cell', 'B', 1, 'L');




// $pdf->Cell((189 / 2), $line * $cellheight, '  Next Cell', 1, 0, 'L');
// $pdf->Cell((189 / 2), $line * $cellheight, '  Next Cell', 1, 0, 'L');

$pdf->Output();
