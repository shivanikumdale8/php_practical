<?php
require_once('tcpdf/tcpdf.php'); // Include TCPDF Library

// Create new PDF document
$pdf = new TCPDF();

// Set document properties
$pdf->SetCreator('TCPDF');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Sample PDF');
$pdf->SetSubject('Creating a PDF using TCPDF');
$pdf->SetKeywords('TCPDF, PDF, PHP');

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', 'B', 16);

// Add text to the PDF
$pdf->Cell(0, 10, 'Hello, This is a Sample PDF!', 0, 1, 'C');

// Add an image (optional)
// $pdf
