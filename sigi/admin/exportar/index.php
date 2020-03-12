<!DOCTYPE html>
<html lang="en">

<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Seguimiento Televenta</title>
</head>

<body>

<?php
$dia = date('dmY');
//Exportar datos de php a Excel
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=ReporteTickets".$dia.".xls");


$enlace = mysqli_connect("localhost", "root1", "root1", "sigi");

                                      if (!$enlace) {
                                          echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                                          echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                                          echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                                          exit;
                                      }

                                      $sql="select * from ticke ";

                                      echo '

                                    <table style="background: transparent;" border=1 class="table table-striped table-bordered bootstrap-datatable datatable">
                                      <thead>
                                          <tr>
                                              <th>Fecha de Creacion</th>
                                              <th>Asunto</th>
                                              <th>Motivo del Ticket</th>
                                              <th>Solucion</th>
                                              <th>Prioridad</th>
                                              <th>Departamento</th>
                                              <th>Estatus</th>
                                              <th>Usuario Creador</th>
                                              <th>Fecha Ticket en Proceso</th>
                                              <th>Usuario Creador Ticket en Proceso</th>
                                              <th>Fecha en Proceso</th>
                                              <th>Usuario Creador Ticket Cierre</th>
                                          </tr>
                                      </thead>
                                      <tbody>

                                      ';

                                      $rs=mysqli_query($enlace, $sql);
                                      $i=0;
                                      if(mysqli_num_rows($rs)<1){
                                        echo ""; 
                                      }else{
                                       

                                       while ($row = mysqli_fetch_array($rs)){
                                          echo '
                                          <tr>
                                              <td class="center">'.$row["fcreacion"].'</td>
                                              <td class="center">'.$row["asun"].'</td>
                                              <td class="center">'.$row["mot"].'</td>
                                              <td class="center">'.$row["respuesta"].'</td>
                                              <td class="center">'.$row["prio"].'</td>
                                              <td class="center">'.$row["dep"].'</td>
                                              <td class="center">'.$row["est"].'</td>
                                              <td class="center">'.$row["ucreacion"].'</td>
                                              <td class="center">'.$row["fproceso"].'</td>
                                              <td class="center">'.$row["uproceso"].'</td>
                                              <td class="center">'.$row["fcierre"].'</td>
                                              <td class="center">'.$row["ucierre"].'</td>
                                              
                                          </tr>
                                        ';
                                        $i++; 
                        }     
                        }

                        echo "</tbody>
                                  </table>";
?>

</body>

</html>