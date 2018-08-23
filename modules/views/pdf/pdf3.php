<?php
require('pdfphp/fpdf/fpdf.php');
include_once('../../model/db/db.php');
include_once('../../model/query/model.php');

if(isset($_GET['data1'])&&isset($_GET['data2'])){
	
	$fecha1= $_GET['data1'];
	$fecha2= $_GET['data2'];
		
	
	
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
	$this->Cell(10,8,'RESGUARDO DE ACTIVOS',0,0,'C');
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
        $this->SetXY(25, 84);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(54,7, utf8_decode($fila),1, 0 , 'C' );
        }
    }
 
    function datosHorizontal($datos)
    {
        $this->SetXY(25,91);
        $this->SetFont('Arial','',10);
        //Siendo un array tipo: $datos => $fila
        //Significa que $datos tiene 'nombre' 'apellido' 'matricula'
        //$fila tiene cada valor de los antes mencionados
        foreach($datos as $fila)
        {
            $this->Cell(54,7, utf8_decode($fila['0']." ".$fila['1']),1, 0 , 'C' );
            $this->Cell(54,7, utf8_decode($fila['4']." ".$fila['2']),1, 0 , 'C' );
            $this->Cell(54,7, utf8_decode($fila['9']),1, 0 , 'C' );
            $this->Ln();//Salto de línea para generar otra fila
        }
    }
 
    //Integrando cabecera y datos en un solo método
    function tablaHorizontal($cabeceraHorizontal, $datosHorizontal)
    {
        $this->cabeceraHorizontal($cabeceraHorizontal);
        $this->datosHorizontal($datosHorizontal);
    }
	
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'DE '.$fecha1.' AL '.$fecha2,0,0,'C');
//TABLAS


$MC2= array('EMPLEADO', 'EQUIPO', 'FECHA');
$query = new model();
$exe = $query->buscar2($fecha1, $fecha2);



$pdf->tablaHorizontal($MC2, $exe);



//CONDIDERACIONES


//FIRMAS




$pdf->Output();
?>