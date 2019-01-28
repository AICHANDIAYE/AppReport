<?php
if(!empty($_POST['envoyer'])){
	$nom=$_POST['nom'];
	$deum=$_POST['deum'];	
    $com=$_POST['com'];
	$arr=$_POST['arr'];
	$dept=$_POST['dep'];
	$region=$_POST['reg'];
	$tel=$_POST['tel'];
	$email=$_POST['ema'];
	$espece=$_POST['lis'];
	

	


require('fpdf.php');

$pdf= new  FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",8);
$pdf->SetXY(0,8);

$pdf->Cell(0,5,"REPUBLIQUE DU SENEGAL",0,0,'L');
$pdf->SetXY(0,13);
$pdf->Cell(0,5,"Un peuple-Un but-Une foi",0,0,'L');

$pdf->SetXY(0,18);
$pdf->Cell(0,5,"------------------------------------------",0,0,'L');

$pdf->SetXY(0,23);
$pdf->Cell(0,5,"MINISTERE DE L�AGRICULTURE",0,0,'L');

$pdf->SetXY(0,26);
$pdf->Cell(0,5,"ET DE L�HYDRAULIQUE",0,0,'L');

$pdf->SetXY(0,29);
$pdf->Cell(0,5,"--------------------------------------",0,0,'L');

$pdf->SetXY(0,32);
$pdf->Cell(0,5,"DIRECTION DE L�AGRICULTURE",0,0,'L');

$pdf->SetXY(0,35);
$pdf->Cell(0,5,"------------------------------------------",0,0,'L');

$pdf->SetXY(0,38);
$pdf->Cell(0,5,"DIVISION DES SEMENCES",0,0,'L');

$pdf->SetFont("Arial","B",10);
$pdf->SetXY(0,45);
$pdf->Cell(0,5,"FORMULAIRE DE DECLARATION DES CULTURES",0,0,'C');

$pdf->SetFont("Arial","",12);

$pdf->SetXY(0,55);
$pdf->Cell(0,5,"Campagne agricole : ".(date('Y')-1)." / ".date('Y')."    ",0,0,'R');

$pdf->SetXY(0,60);
$pdf->Cell(0,5,"    Je soussign� Mr, Mme " .$nom. " Demeurant � "  .$deum. "  ",0,0,'L');
$pdf->SetXY(0,65);
$pdf->Cell(0,5,"Communaut� Rural de " .$com. "  Arrondissement    " .$arr. "  D�partement ",0,0,'L');
$pdf->SetXY(0,70);
$pdf->Cell(0,5,"de "  .$dept.  " R�gion de   " .$region. "  Telephone    ",0,0,'L');

$pdf->SetXY(0,75);
$pdf->Cell(0,5,""  .$tel. "   Email : "  .$email. " ",0,0,'L');

$pdf->SetXY(0,80);
$pdf->Cell(0,5,"D�clare avoir pris connaissance du r�glement technique particulier de la production du contr�le ",0,0,'L');
$pdf->SetXY(0,85);
$pdf->Cell(0,5,"et de la certification des semences de   :"  .$espece.   "   1",0,0,'L');
$pdf->SetXY(0,90);
$pdf->Cell(0,5,"Et demande � soumettre mes cultures ci-apr�s d�sign�es, au contr�le, et en acceptant d�avance ",0,0,'L');
$pdf->SetXY(0,95);
$pdf->Cell(0,5,"les r�sultats : suivant voir annexe",0,0,'L');


   $pdf->SetFont('Arial','',10);
   



$pdf->SetXY(5,120);
$pdf->Cell(0,5,"NB : Cette d�claration est � remplir par tout agriculteur multiplicateur, accompagn�e du sch�ma ",0,0,'L');

$pdf->SetXY(5,125);
$pdf->Cell(0,5,"de l�exploitation et des indications g�ographiques de la ou des parcelle(s) � contr�ler. Pour les  ",0,0,'L');

$pdf->SetXY(5,130);
$pdf->Cell(0,5,"Op�rateurs multiplicateurs, la liste des contractuels doit �tre annex�e � la pr�sente d�claration.  ",0,0,'L');



$pdf->output(); 

}
?>