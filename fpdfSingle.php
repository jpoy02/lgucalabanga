<?php
require('fpdf182/fpdf.php');
$lorem = "Lorem ipsum dolor";
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

$pdf->SetFont('Century Gothic Bold', '', 12);

// Cell (width, height, text, border, end line, [align])


//Header
$pdf->Cell(30, 25, '', 0, 0);
$pdf->Image($_SERVER['DOCUMENT_ROOT'] . "/img/serbisyo.png", 10, 10, 25);
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((30), 4, 'Application No.:', 0, 0, 'L');
$pdf->Cell((34.5), 4, '_________________', 0, 0, 'L');
$pdf->Cell((64.5), 4, 'LGU - Calabanga, Camarines Sur', 0, 0, 'L');
$pdf->Cell(30, 25, '', 0, 0);
$pdf->Image($_SERVER['DOCUMENT_ROOT'] . "/img/logo-seal.png", 178, 10, 20);
$pdf->Cell(0, 4, '', 0, 1);

$pdf->Cell(30, 4, '', 0, 0);
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((30), 4, 'Date of Receipt:', 0, 0, 'L');
$pdf->Cell((34.5), 4, '_________________', 0, 0, 'L');
$pdf->Cell((64.5), 4, 'San Pablo, Calabanga, Camarines Sur', 0, 0, 'L');
$pdf->Cell(30, 4, '', 0, 0);
$pdf->Cell(0, 4, '', 0, 1);


$pdf->Cell(30, 4, '', 0, 0);
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((30), 4, 'O.R. No.:', 0, 0, 'L');
$pdf->Cell((34.5), 4, '_________________', 0, 0, 'L');
$pdf->Cell((64.5), 4, '(OMM) Tel. No. (054)-881-3521', 0, 0, 'L');
$pdf->Cell(30, 4, '', 0, 0);
$pdf->Cell(0, 4, '', 0, 1);


$pdf->Cell(30, 4, '', 0, 0);
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((30), 4, 'Date Issued:', 0, 0, 'L');
$pdf->Cell((34.5), 4, '_________________', 0, 0, 'L');
$pdf->Cell((64.5), 4, '(MPDC) Tel. No. (054)-881-2350', 0, 0, 'L');
$pdf->Cell(30, 4, '', 0, 0);
$pdf->Cell(0, 4, '', 0, 1);


$pdf->Cell(30, 4, '', 0, 0);
$pdf->SetFont('Century Gothic', '', 9);
$pdf->Cell((30), 4, 'Amount Paid:', 0, 0, 'L');
$pdf->Cell((34.5), 4, '_________________', 0, 0, 'L');
$pdf->Cell((64.5), 4, '', 0, 0, 'L');
$pdf->Cell(30, 4, '', 0, 0);
$pdf->Cell(0, 4, '', 0, 1);



$pdf->Cell(189, 5, '', 0, 1, 'C'); // SPACER


$pdf->Cell(189, 0, '', 'B', 1, 'C'); 
$pdf->Cell(189, 1, '', 'B', 1, 'C'); 
$pdf->Cell(189, 2, '', 'B', 1, 'C', true); 

$pdf->Cell(189, 5, '', 0, 1, 'C'); // SPACER


// TITLE
$pdf->SetFont('Century Gothic Bold', '', 12);

$pdf->Cell(189, 4, 'APPLICATION FOR LOCATIONAL CLEARANCE/ CERIFICATE OF ZONING COMPLIANCE', 0, 1, 'C');
$pdf->Cell(189, 0, '_______________________________________________________________________________', 0, 1,  'C');

$pdf->Cell(189, 12, '', 0, 1, 'C'); // SPACER



// FORM 1ST LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '1. NAME OF APPLICANT', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['lastName']) . ', '. strtoupper($_POST['firstName']) . ', ' . strtoupper($_POST['middleName']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER


// FORM 2nd LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '2. ADDRESS OF APPLICANT', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['applicantAddress']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 3rd LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '3. NAME OF CORPORATION', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['corporationName']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 4th LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '4. ADDRESS OF CORPORATION', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['corporationAddress']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 5th LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '5. NAME OF AUTHORIZED REPRESENTATIVE', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['authRepName']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 6th LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '6. ADDRESS OF AUTHORIZED REPRESENTATIVE', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['authRepAddress']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 7th LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '7. PROJECT TYPE', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['projectType']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 8th LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '8. PROJECT NATURE', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['projectNature']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER


// FORM 9th Line
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '9. PROJECT LOCATION', 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '10. PROJECT AREA', 0, 1, 'L');

$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189 / 2), 8, '   ' . strtoupper($_POST['projectLocation']), 0, 0, 'L');
$pdf->Cell((189 / 2) / 2, 4, '   ' . strtoupper($_POST['lotArea']), 'B', 0, 'L');
$pdf->Cell((189 / 2) / 2, 4, 'Lot Area', 0, 1, 'L');

$pdf->Cell((189 / 2), 4, '   ', 0, 0, 'L'); // Line Hack
$pdf->Cell((189 / 2) / 2, 4, '   ' . strtoupper($_POST['floorBldgArea']), 'B', 0, 'L');
$pdf->Cell((189 / 2) / 2, 4, 'Floor/Bldge Area', 0, 1, 'L');
$pdf->Cell((189), 4, '   ', 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 10 Line
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '11. RIGHT OVER LAND', 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '12. PROJECT TENURE', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);

$rightOverLand = $_POST['rightOverLand'] == 'Others' ? 'OTHERS - ' . $_POST['rightOverLandSpec'] : $_POST['rightOverLand'];
$projectTenure = $_POST['projectTenure'] == 'Temporary' ? 'TEMPORARY - ' . $_POST['projectTenureSpec'] : $_POST['projectTenure'];

$pdf->Cell((189 / 2), 4, '   ' . strtoupper($rightOverLand), 0, 0, 'L');
$pdf->Cell((189 / 2), 4, '   ' . strtoupper($projectTenure), 0, 1, 'L');
$pdf->Cell((189), 0, '   ', 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 11th LINE

$existingLandUses = '';
if($_POST['existingLandUses'] == 'Agricultural'){
    $existingLandUses = 'AGRICULTURAL - ' . $_POST['existingLandUsesSpec'];
}
else if($_POST['existingLandUses'] == 'Others') {
    $existingLandUses =  'OTHERS - ' . $_POST['existingLandUsesSpec'];
}
else {
    $existingLandUses = $_POST['existingLandUses'];
}

$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '13. EXISTING LAND USES OF PROJECT SITE', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($existingLandUses), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// FORM 12th LINE
$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '14. PROJECT COST/CAPITALIZATION (In Pesos, write in words and Figures)', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '   ' . strtoupper($_POST['projectCost']), 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

$pdf->SetFont('Century Gothic Bold', '', 8);

$string = '15. IF THE PROJECT APPLIED FOR IS THE SUBJECT OF WRITTEN NOTICES FROM THIS OFFICE/BOARD AND/OR DEPUTIZED ZONING ADMINISTRATOR TO THE EFFECT OF REQUIRING FOR PRESENTATION OF LOCATIONAL CLEARANCE/CERTIFICATE OF ZONING COMPLIANCE (LC/CZC) OR TO APPLY FOR LOCATIONAL CLEARANCE';

// MULTI CELL
$cellWidth = (189);
$cellheight = 4;

// Check if text is overflowing
if ($pdf->GetStringWidth($string) < $cellWidth) {
    $line = 1;
} else {
    $textLength = strlen($string);
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
            $tmpString = substr($string, $startChar, $maxChar);
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
$pdf->MultiCell($cellWidth, $cellheight, $string, 0);
$pdf->SetXY($xPos + $cellWidth, $yPos); // Reset LIne
$pdf->Cell((189), 4 * $line, '', 0, 1, 'L'); // NEXT LINE
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

$notice = $_POST['radio15'] == 'Yes' ? '4' : '';

// YES
$pdf->SetFont('Courier', '', 8);
$pdf->Cell(25, 4, 'YES', 0, 0, 'R');
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(5, 4, $_POST['radio15'] == 'Yes' ? '4' : '' , 1, 0, 'C');
//NO
$pdf->SetFont('Courier', '', 8);
$pdf->Cell(25, 4, 'NO', 0, 0, 'R');
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(5, 4, $_POST['radio15'] == 'No' ? '4' : '', 1, 1, 'C');
$pdf->Cell(189, 4, '', 0, 1, 'C'); // SPACER

// FILTER EMPTY STRING
$nameDeputizedZoningAdmin = isset($_POST['nameDeputizedZoningAdmin']) ? $_POST['nameDeputizedZoningAdmin'] : '-';
$dateOfNotice = isset($_POST['dateOfNotice']) ? $_POST['dateOfNotice'] : '-';
$ordersRequest = isset($_POST['ordersRequest']) ? $_POST['ordersRequest'] : '-';


$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, 'If yes, answer the following:', 0, 1, 'L');
$pdf->SetFont('Century Gothic', '', 8);
$pdf->Cell((189), 4, '  a. Name of Deputized Zoning Administrator:', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '      ' . $nameDeputizedZoningAdmin, 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER
$pdf->SetFont('Century Gothic', '', 8);
$pdf->Cell((189), 4, '  b. Date of Notice/s:', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '      ' . $dateOfNotice, 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER
$pdf->SetFont('Century Gothic', '', 8);
$pdf->Cell((189), 4, '  c. Orders/Requests indicated in the notice/s:', 0, 1, 'L');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189), 4, '      ' . $ordersRequest, 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER

// END OF FORM 12th //

// FORM 13th

$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, '16. PREFERED MODE OF RELEASE OF DECISION', 0, 1, 'L');
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20, 4, '', 0, 0, 'R');
$pdf->Cell(5, 4, $_POST['prefModeRelease'] == 'Pick-Up' ? '4' : '', 1, 0, 'C');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell(20, 4, 'PICK-UP', 0, 0, 'L');

$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20, 4, '', 0, 0, 'R');
$pdf->Cell(5, 4, $_POST['prefModeRelease'] == 'By-Mail' ? '4' : '', 1, 0, 'C');
$pdf->SetFont('Courier', '', 8);
$pdf->Cell(100, 4, 'BY MAIL TO APPLICANT OR AUTHORIZED REPRESENTATIVE', 0, 1, 'L');
$pdf->Cell((189), 2, '   ', 'B', 1, 'L');
$pdf->Cell(189, 2, '', 0, 1, 'C'); // SPACER


// FORM 14th

$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((189 / 2), 4, 'SIGNATURE OF APPLICANT', 0, 0, 'L');
$pdf->Cell((189 / 2), 4, 'SIGNATURE OF AUTHORIZED REPRESENTATIVE', 0, 1, 'L');
$pdf->Cell((189), 10, '   ', 'B', 1, 'L');
$pdf->Cell(189, 5, '', 0, 1, 'C'); // SPACER


$pdf->SetFont('Century Gothic Bold', '', 8);
$pdf->Cell((100), 4, 'REPUBLIC OF THE PHILIPPINES   S.S.', 0, 1, 'L');
$pdf->Cell((50), 5, '', 'B', 1, 'L');
$pdf->Cell(189, 10, '', 0, 1, 'C'); // SPACER



// FORM 15th 
$string = '     SUBSCRIBED AND SWORND TO before me this _______ day of _________ 20____ at Calabanga, Camarines Sur. Affiant exhibited to me his/her Community Tax Certificate No. _______ issued at _________________________ on ________________________.';
// MULTI CELL
$cellWidth = (189);
$cellheight = 4;

// Check if text is overflowing
if ($pdf->GetStringWidth($string) < $cellWidth) {
    $line = 1;
} else {
    $textLength = strlen($string);
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
            $tmpString = substr($string, $startChar, $maxChar);
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
$pdf->MultiCell($cellWidth, $cellheight, $string, 0);
$pdf->SetXY($xPos + $cellWidth, $yPos); // Reset LIne
$pdf->Cell((189), 4 * $line, '', 0, 1, 'L'); // NEXT LINE
$pdf->Cell(189, 5, '', 0, 1, 'C'); // SPACER

$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189/2), 4, 'Doc. No.    __________', 0, 0, 'L');

$pdf->SetFont('Century Gothic', '', 8);
$pdf->Cell((189/2), 20, 'NOTARY PUBLIC', 0, 0, 'C');
$pdf->Cell((0), 4, '', 0, 1, 'L');

$pdf->SetFont('Courier', '', 8);
$pdf->Cell((189/2), 4, 'Page No.    __________', 0, 1, 'L');
$pdf->Cell((189/2), 4, 'Book No.    __________', 0, 1, 'L');
$pdf->Cell((189/2), 4, 'Series No.  __________', 0, 1, 'L');







$pdf->Output();
