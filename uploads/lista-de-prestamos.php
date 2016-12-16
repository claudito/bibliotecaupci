<?php

  include('../config.php');
  include('../includes/bd/conexion.php');
  include('../session.php');
  $db = new Conexion();

	$query     = "SELECT p.hora_inicio,p.hora_fin,p.fecha_prestamo,p.comentario1,u.nombres,u.apellidos,c.descripcion,LEFT(p.fecha_prestamo,4)as anio,SUBSTR(p.fecha_prestamo,6,2) mes FROM prestamo_cabinas as p 
LEFT JOIN usuarios AS  u ON p.usuarios_id=u.id
LEFT JOIN cabinas AS c ON p.cabinas_id=c.id";
	$result    = $db->query($query);
	$numfilas  = $result->num_rows;
	if($numfilas > 0 )
	{
	 					
		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		include('../librerias/PHPEXCEL/PHPExcel.php');

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("".$_SESSION[KEY.NOMBRES].' '.$_SESSION[KEY.APELLIDOS]."") //Autor
							 ->setLastModifiedBy("".$_SESSION[KEY.NOMBRES].' '.$_SESSION[KEY.APELLIDOS]."") //Ultimo usuario que lo modificó
							 ->setTitle("LISTA DE PRESTAMOS")
							 ->setSubject("LISTA DE PRESTAMOS")
							 ->setDescription("LISTA DE PRESTAMOS")
							 ->setKeywords("LISTA DE PRESTAMOS")
							 ->setCategory("LISTA DE PRESTAMOS");

		$tituloReporte   = "REPORTE DE PRESTAMOS DE CABINAS";
		$titulosColumnas = array('HORA INICIO', 'HORA FIN', 'FECHA PRESTAMO','CABINA','USUARIO','COMENTARIO','AÑO','MES');


						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1',$tituloReporte)
        		    ->setCellValue('A3',  $titulosColumnas[0])
		            ->setCellValue('B3',  $titulosColumnas[1])
        		    ->setCellValue('C3',  $titulosColumnas[2])
        		    ->setCellValue('D3',  $titulosColumnas[3])
        		    ->setCellValue('E3',  $titulosColumnas[4])
        		    ->setCellValue('F3',  $titulosColumnas[5])
        		    ->setCellValue('G3',  $titulosColumnas[6])
        		    ->setCellValue('H3',  $titulosColumnas[7])
        		   
        		    ;
		
		
		//Se agregan los datos de los alumnos
		$i = 3;
		while ($fila = $result->fetch_array()) {
			$objPHPExcel->setActiveSheetIndex(0)
        		    ->setCellValueExplicit('A'.$i,  $fila['hora_inicio'],PHPExcel_Cell_DataType::TYPE_STRING)
		            ->setCellValueExplicit('B'.$i,  $fila['hora_fin'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('C'.$i,  $fila['fecha_prestamo'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('D'.$i,  $fila['descripcion'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('E'.$i,  $fila['nombres'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('F'.$i,  $fila['comentario1'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('G'.$i,  $fila['anio'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    ->setCellValueExplicit('H'.$i,  $fila['mes'],PHPExcel_Cell_DataType::TYPE_STRING)
        		    

        		     ;
					$i++;
		}

       
				
		for($i = 'A'; $i <= 'G'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
		
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle('LISTA DE PRESTAMOS CABINAS');

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="REPORTE DE PRESTAMOS CABINAS-'.date('d-m-Y H:i:s').'.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;

		
	}
	else
	{
	echo "No hay resultados para mostrar";
	}
?>