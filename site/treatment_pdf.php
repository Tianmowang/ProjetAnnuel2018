<?php

require('../fpdf17/fpdf.php');
include_once('config.php');

$restaurant = $_POST['name'];
$nbr_table = $_POST['table'];

class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    $this->Image('../picture/logo.png',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->Cell(50,10,'Ticket de caisse',1,0,'C');
    // Saut de ligne
    $this->Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$answer = $bdd->query("SELECT * FROM `vegnbio`.restaurant WhERE name = '".$restaurant."' ");
$data = $answer->fetch();
$adresse=$data['adresse'];

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(40,10,$restaurant,2,0);
$pdf->Cell(40,10,$adresse,2,0);
$pdf->Ln(20);



$pdf->Cell(40,10,'Nom',1,0);
$pdf->Cell(40,10,'Prix',1,0);
$pdf->Cell(40,10,'Quantite',1,0);
$pdf->Cell(40,10,'Total',1,0);
$total_order=0;
$answer = $bdd -> query(" SELECT * FROM `vegnbio`.Order ");
while($data = $answer->fetch()){
$name=$data['name'];
$price=$data['price'];
$amount=$data['amount'];
$total=$price*$amount;
$total_order=$total+$total_order;
$pdf->Ln(10);
$pdf->Cell(40,10,$name,1,0);
$pdf->Cell(40,10,$price,1,0);
$pdf->Cell(40,10,$amount,1,0);
$pdf->Cell(40,10,$total,1,0);

}
$pdf->Ln(40);

$pdf->Cell(40,10,'Montant a regler :',2,0);
$pdf->Cell(40,10,$total_order,2,0);



$pdf->Output();

?>