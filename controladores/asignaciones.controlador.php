<?php
require "fpdf/fpdf.php";

class ControladorAsignaciones{
    

     //ASIGNAR DISPOSITIVO
     static public function ctrAsignarDispositivo(){
        $tabla = "dispositivos";

        if(isset($_POST["idDispositivoAsignar"]) && isset($_POST["responsableDispositivo"])){
            $id = $_POST["idDispositivoAsignar"];
            $res = $_POST["responsableDispositivo"];

            $datos = array(
                "Cubo"=>isset($_POST["checkCubo"]) == "on" ? "1" : "0",
                "Cable"=>isset($_POST["checkCable"]) == "on" ? "1" : "0",
                "Funda"=>isset($_POST["checkFunda"]) == "on" ? "1" : "0",
                "Lapiz"=>isset($_POST["checkLapiz"]) == "on" ? "1" : "0",
                "Powerbank"=>isset($_POST["checkPowerbank"]) == "on" ? "1" : "0",
                "Maletin"=>isset($_POST["checkMaletin"]) == "on" ? "1" : "0",
                "Cargador"=>isset($_POST["checkCargador"]) == "on" ? "1" : "0",
                "Mouse"=>isset($_POST["checkMouse"]) == "on" ? "1" : "0",
                "Mousepad"=>isset($_POST["checkMousepad"]) == "on" ? "1" : "0"
            );

            $accesorios = json_encode($datos);
            $respuesta = ModeloAsignaciones::mdlAsignarDispositivo($tabla, $id, $res, $accesorios);        
            
            $item = "iddispositivo";
            $infodispositivo = ModeloDispositivos::mdlMostrarDispositivos($tabla, $item, $id);
            $infoconsultor = ModeloConsultores::mdlMostrarConsultores("consultores", "idconsultor", $_POST["responsableDispositivo"]);

            
            if($respuesta == "ok"){
                $pdf=new FPDF('P','mm',array(216,279));
                $pdf->SetMargins(28, 25, 28);
                $pdf->AliasNbPages();
                //Primera página
                $pdf->AddPage();
                //$pdf->AddFontMuseoSans();
                $pdf->SetFont('Arial','B',13);
                $pdf->Image('fpdf/img/MARCA DE WATER.png',0, 0, 216);
                $pdf->Image('fpdf/img/logo_BCR.png',85,15,38);
                $pdf->Ln(15);
                $pdf->SetFont('Arial','B',13);
                $pdf->Cell(0,10,mb_convert_encoding('ASIGNACIÓN DE DISPOSITIVO MÓVIL','ISO-8859-1', 'UTF-8'),0,0,'C');
                $pdf->Ln(15);
                $pdf->SetFont('Arial','',11);
                $pdf->MultiCell(0, 5, mb_convert_encoding('En este acto se hace entrega a: NATALY MARIA VAQUERANO GRANILLO, con el cargo de: CARTOGRAFO destacado en la sede: EXBANDESAL SAN MIGUEL del dispositivo que a continuación se describe:', 'ISO-8859-1', 'UTF-8'), 0, 1);
                $pdf->Ln(8);
                //TABLA CABEX
                $pdf->SetFont('Arial','B',11);
                //Cabecera
                $pdf->setTextColor(255, 255, 255);
                $pdf->SetFillColor(29,80,153);
                $pdf->SetLineWidth(.3);
                $pdf->SetFont('','B');
                $pdf->Cell(30,6,'DESCRIPCION',1,0,'C',1);
                $pdf->Cell(30,6,'MARCA',1,0,'C',1);
                $pdf->Cell(36,6,'MODELO',1,0,'C',1);
                $pdf->Cell(36,6,'IMEI',1,0,'C',1);
                $pdf->Cell(25,6,'TELEFONO',1,0,'C',1);
                $pdf->Ln();
                //Datos
                $pdf->SetFillColor(224,235,255);
                $pdf->SetTextColor(0);
                $pdf->SetFont('');
                $pdf->Cell(30,6,"MOVIL",'LR',0,'C');
                $pdf->Cell(30,6,"SAMSUNG",'LR',0,'C');
                $pdf->Cell(36,6,"GALAXY A34",'LR',0,'C');
                $pdf->Cell(36,6,"351326801779574",'LR',0,'C');
                $pdf->Cell(25,6,"72877196",'LR',0,'C');
                $pdf->Ln();
                $pdf->Cell(157,0,'','T');


                $pdf->Ln(10);
                $pdf->SetFont('Arial','',11);
                $pdf->Cell(0,5,'Con los siguientes accesorios:',0,0,'C');
                $pdf->Ln(10);
                $pdf->Cell(0,5,mb_convert_encoding(' *  Cubo de carga               '.'X', 'ISO-8859-1', 'UTF-8'),0,1);
                $pdf->Rect(73, 110, 8, 4, 'D');
                $pdf->Cell(0,5,mb_convert_encoding(' *  Cable USB tipo C          '.'X', 'ISO-8859-1', 'UTF-8'),0,1);
                $pdf->Rect(73, 115, 8, 4, 'D');
                $pdf->Cell(0,5,mb_convert_encoding(' *  Funda del Dispositivo    '.'X', 'ISO-8859-1', 'UTF-8'),0,1);
                $pdf->Rect(73, 120, 8, 4, 'D');
                $pdf->Cell(0,5,mb_convert_encoding(' *  Lapiz                              '.'X', 'ISO-8859-1', 'UTF-8'),0,1);
                $pdf->Rect(73, 125, 8, 4, 'D');

                $pdf->Ln(10);
                $pdf->SetFont('Arial','',10);
                $pdf->MultiCell(0, 5, mb_convert_encoding('Haciendo constar que la presente asignación es para uso exclusivo de las funciones encomendadas como consultor en el Programa de Modernización del Sistema Estadístico de El Salvador, no pudiendo dar un uso diferente ni permitir su uso a persona distinta, además tiene la obligación de conservarlo en buenas condiciones y devolverlo al finalizar la consultoría o al momento que le sea requerido.', 'ISO-8859-1', 'UTF-8'), 0, 1);
                $pdf->Ln(5);
                $pdf->SetFont('Arial','',11);
                $pdf->Cell(0,20,'Entrega:',0,0,'L',0);
                $pdf->Cell(0,20,'Recibe:                                       ',0,0,'R',0);
                $pdf->Ln();
                $pdf->Cell(0,10,'F:________________________',0,0,'L',0);
                $pdf->Cell(0,10,'F:________________________',0,0,'R',0);
                $pdf->Ln();
                $pdf->SetFont('Arial','',11);
                $pdf->Cell(0,5,mb_convert_encoding('Nombre: Miguel Portillo Lozano', 'ISO-8859-1', 'UTF-8'),0,0,'L',0);
                $pdf->Cell(0,5,mb_convert_encoding('Nombre: Diego Dubán', 'ISO-8859-1', 'UTF-8'),0,0,'R',0);
                $pdf->Ln();
                $pdf->Cell(0,5,mb_convert_encoding('Cargo: Técnico de Soporte Informático', 'ISO-8859-1', 'UTF-8'),0,0,'L',0);
                $pdf->Cell(0,5,mb_convert_encoding('Cargo: Técnico de Soporte Informático', 'ISO-8859-1', 'UTF-8'),0,0,'R',0);
                $pdf->Ln();
                $pdf->SetFont('Arial','B',11);
                $pdf->Cell(0,5,mb_convert_encoding(' Banco Central de Reserva de El Salvador', 'ISO-8859-1', 'UTF-8'),0,0,'L',0);
                $pdf->Cell(0,5,mb_convert_encoding('Consultor                   ', 'ISO-8859-1', 'UTF-8'),0,0,'R',0);
                $pdf->Ln(20);
                $pdf->SetFont('Arial','U',11);
                $pdf->Cell(0,5,mb_convert_encoding('San Miguel, 27 de noviembre 2023', 'ISO-8859-1', 'UTF-8'),0,1,'R');
                $pdf->SetFont('Arial','',8);
                $pdf->Cell(0,5,mb_convert_encoding('Lugar                             Fecha                   ', 'ISO-8859-1', 'UTF-8'),0,1,'R');

                $pdf->Ln(5);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(0,5,mb_convert_encoding('Nota: - Cualquier perdida/robo/extravío notificarlo a su jefe inmediato.', 'ISO-8859-1', 'UTF-8'),0,1); 
                $pdf->Cell(0,5,mb_convert_encoding('          - Será responsable de llevar cargado al 100% el equipo al inicio de la jornada.', 'ISO-8859-1', 'UTF-8'),0,1); 
                $pdf->Output('', 'Hoja de Asignacion de Dispositivo.pdf');
            } else{
                echo '<script>alert("No funciona");</script>';
            }
            

        } else{
            
        }
        
    }

}

?>