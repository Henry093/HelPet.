<?php 
require('fpdf/fpdf.php');
require('fpdf/datas.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('fpdf/tutorial/logo-dark.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(100,10,'Reporte de Animales Registrados',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(30,10,'Nombre',1,0,"C",0);
      $this->Cell(30,10,'Fecha',1,0,"C",0);
      $this->Cell(40,10,'Descripcion',1,0,"C",0);
      $this->Cell(30,10,'Estado',1,0,"C",0);
      $this->Cell(30,10,'Ciudad',1,0,"C",0);
      $this->Cell(30,10,'Telefono',1,1,"C",0);
    
}
}
$consult = "SELECT * FROM report";
$resultado = $mysqli->query($consult);
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina  '.$this->PageNo().'/{nb}',0,0,'C');
}


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',9);
for($i=1;$i<=40;$i++)
    while($row=$resultado->fetch_assoc()){
      $pdf->Cell(30,10,$row['title'],1,0,"C",0);
      $pdf->Cell(30,10,$row['date'],1,0,"C",0);
      $pdf->Cell(40,10,$row['description'],1,0,"C",0);
      $pdf->Cell(30,10,$row['option'],1,0,"C",0);
      $pdf->Cell(30,10,$row['city'],1,0,"C",0);
      $pdf->Cell(30,10,$row['phone'],1,1,"C",0);
    }
$pdf->Output();
?>
   