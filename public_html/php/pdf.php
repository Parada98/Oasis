<?php

require 'php/fpdf/fpdf.php';

class PDF extends FPDF
{

    function Header()
    {
        $this->Image('logo.jpg', 10, 6, 30);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(80);
        $this->Cell(30, 10, 'Reporte de ventas OASIS', 0, 1, 'C');
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
?>