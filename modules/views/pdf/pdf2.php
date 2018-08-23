<?php
require('pdfphp/fpdf/fpdf.php');
include_once('../../model/db/db.php');
include_once('../../model/query/model.php');

if(isset($_GET['data'])){
	
	$id = $_GET['data'];
	
	$query = new model();
	$exe = $query->buscarpdf($id);
	foreach($exe as $pdf1){
		
		$folio = $pdf1['5'];
		$fecha = $pdf1['9'];
		$clave = $pdf1['12'];
		$des = $pdf1['13'];
		$marca = $pdf1['4'];
		$modelo = $pdf1['2'];
		$serie = $pdf1['6'];
		$obv = $pdf1['7'];
		$res = $pdf1['0']." ".$pdf1['1'];
		
		if(isset($pdf1['10'])){
			$exe2 = $query->user1($pdf1['10']);
			foreach($exe2 as $elab){
				$elaboro = $elab['0']." ".$elab['1']." ".$elab['2'];
			}
		}else{
			$elaboro = "";
		}
		if(isset($pdf1['11'])){
			$auto = $query->load_autor($pdf1['11']);
			foreach($auto as $resul){
				
				$autoriza = $resul['0']." ".$resul['1']." ".$resul['2'];
				
			}					 
		}
		
	}
	
}

class PDF extends FPDF

{
// Cabecera de página
function Header()
{
	// Logo
	$this->Image('img/logo_q.jpg',10,8,33,0);
	// Arial bold 15
	$this->SetFont('Arial','B',14);
	// Movernos a la derecha
	$this->Cell(90);
	// Título
	$this->Cell(30,10,'Ingenieria y Carreteras Especializadas Quattuor S.A. de C.V.',0,0,'C');
	// Salto de línea
	$this->Ln(4);
	// Movernos a la derecha
	$this->Cell(90);
	// Título
	$this->SetFont('Arial','B',8);
	$this->Cell(30,10,'Calle Jose Marti 101 des. 110, Fracc. Lidia Esther Monica de Portilla, C.P. 86040 ',0,0,'C');
	$this->Ln(4);
	// Movernos a la derecha
	$this->Cell(90);
	// Título
	$this->SetFont('Arial','B',8);
	$this->Cell(10,8,'Villahermosa, Tabasco. C.P. 86040',0,0,'C');
	$this->SetFont('Arial','B',8);
	$this->Ln(4);
	$this->Cell(90);
	$this->Cell(10,8,'RFC. ICE131011H76',0,2,'C');
	$this->Ln(4);
	$this->Cell(90);
	$this->SetFont('Arial','B',18);
	$this->Cell(10,8,'RESGUARDO DE ACTIVO.',0,0,'C');
	$this->Ln(10);
}

// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
	
	function cabeceraHorizontal($cabecera)
    {
        $this->SetXY(145, 70);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(24,7, utf8_decode($fila),1, 0 , 'L' );
        }
    }
 
    function datosHorizontal($datos)
    {
        $this->SetXY(145, 77); // 77 = 70 posiciónY_anterior + 7 altura de las de cabecera
        $this->SetFont('Arial','',10); //Fuente, normal, tamaño
        foreach($datos as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(24,7, utf8_decode($fila),1, 0 , 'L' );
        }
    }
	function cabeceraHorizontal2($cabecera)
    {
        $this->SetXY(25, 84);
		$this->SetFillColor(0,0,0,0);//Fondo verde de celda
		$this->SetTextColor(3, 3, 3); //Color del texto: Negro
        $bandera = false;
        $this->SetFont('Arial','B',8);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(24,7, utf8_decode($fila),1, 0 , 'L' );
        }
    }
 
    function datosHorizontal2($datos)
    {
        $this->SetXY(25,91); // 77 = 70 posiciónY_anterior + 7 altura de las de cabecera
        $this->SetFont('Arial','',8); //Fuente, normal, tamaño
        foreach($datos as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(24,7, utf8_decode($fila),1, 0 , 'L' );
        }
    }
	function cabeceraHorizontal3($cabecera)
    {
        $this->SetXY(25, 98);
		$this->SetFillColor(0,0,0,0);//Fondo verde de celda
		$this->SetTextColor(3, 3, 3); //Color del texto: Negro
        $bandera = false;
        $this->SetFont('Arial','B',8);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(84,7, utf8_decode($fila),1, 0 , 'L' );
        }
    }
 
    function datosHorizontal3($datos)
    {
        $this->SetXY(25,105); // 77 = 70 posiciónY_anterior + 7 altura de las de cabecera
        $this->SetFont('Arial','',8); //Fuente, normal, tamaño
        foreach($datos as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(84,7, utf8_decode($fila),1, 0 , 'L' );
        }
    }
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//TABLAS
$MC1= array('Folio', $folio);
$MD1= array('Fecha', $fecha);

$pdf->cabeceraHorizontal($MC1);
$pdf->datosHorizontal($MD1);

$MC2= array('CLAVE','CANTIDAD', 'UNIDAD', 'DESCRIPCION', 'MARCA', 'MODELO', 'No.SERIE');
$MD2= array($clave, '1', 'PZA', $des, $marca, $modelo, $serie);

$pdf->cabeceraHorizontal2($MC2);
$pdf->datosHorizontal2($MD2);

$MC3= array('CODIGO QR','OBSERVACIONES');
$MD3= array('', $obv);
$pdf->cabeceraHorizontal3($MC3);
$pdf->datosHorizontal3($MD3);

//CONDIDERACIONES
$pdf->ln(8);
$pdf->SetFont('Times','',9);
$pdf->ln(4);
$pdf->Cell(0,10,'CONSIDERACIONES:',0,0,'L');
$pdf->ln(4);
$pdf->Cell(0,10,'*En caso de mal uso del equipo sera acreditado a una penalizacion, sancion administrativa.',0,0,'L');
$pdf->ln(4);
$pdf->Cell(0,10,'*El usuario se compromete a cuidar el equipo de lo contrario se le hara cargo el costo del mismo.',0,0,'L');
$pdf->ln(4);
$pdf->Cell(0,10,'*Se hace constar la validez de este documento para control interno dentro de la empresa. ',0,0,'L');
$pdf->ln(4);
$pdf->Cell(0,10,'CODIGO DE VERIFICACION INTERNO: ',0,0,'L');

//FIRMAS

$pdf->ln(10);
$pdf->SetXY(40, 147);
$pdf->Cell(10, 8, $res , 0, 'C');
$pdf->SetXY(45, 155);
$pdf->Line(35, 154, 80, 154);
$pdf->Cell(10, 8, 'RESPONSABLE:', 0, 'C');

//*****
$pdf->SetXY(88, 147);
$pdf->Cell(10, 8, $elaboro, 0, 'C');
$pdf->SetXY(100, 155);
$pdf->Line(85, 154, 130, 154);
$pdf->Cell(10, 8, 'ELABORO', 0, 'C');

//*****
$pdf->SetXY(140, 147);
$pdf->Cell(10, 8, $autoriza , 0, 'C');
$pdf->SetXY(155, 155);
$pdf->Line(135, 154, 195, 154);
$pdf->Cell(10, 8, utf8_decode('AUTORIZÓ'), 0, 'C');


$pdf->Output();
?>