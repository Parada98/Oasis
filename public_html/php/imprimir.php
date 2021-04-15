<?php

    require 'php/fpdf/fpdf.php';


    class PDF extends FPDF
    {
        
        function Header()
        {
            $this->Image('images/logo.jpg', 10, 6, 30);
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
    
    foreach ($book as $item) {
    
        $imagen = $item['imagen'];
        $nombre = $item['nombre'];
        $autor = $item['autor'];
        $descripcion = $item['descripcion'];
        $precio = $item['precio'];
        $estado = $item['estado'];
        $autor = $item['autor'];
        $editorial = $item['editorial'];
    }

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->Header();
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(200,220,255);
    $pdf->Cell(0,6,iconv('UTF-8', 'windows-1252', html_entity_decode("Félicidades!!! acabas de aquirir el libro: $nombre")) ,0,1,'L',true);
    $pdf->Ln(4);
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("Autor".$autor."\n")));
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("Editorial: ".$editorial."\n")));
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("Descripcion: ".$description."\n")));
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("Estado: ".$estado."\n")));
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("RFC: ".$data['rfc']."\n")));
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("Precio: ".$precio."\n")));
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("Cantidad: ".$data['cantidad']."\n")));
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("Total: ".$data['total']."\n")));
    $pdf->Write(10,iconv('UTF-8', 'windows-1252', html_entity_decode("Direccion: ".$data['direccion']."\n")));
    $pdf->Output();
?>