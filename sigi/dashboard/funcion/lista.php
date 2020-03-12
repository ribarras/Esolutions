<?php
class Formulario

	{

		function pizarra()
			{
				include $_SERVER['DOCUMENT_ROOT'].'/eweb2019/sigi/default/cone.php';
				$dia = date('d-m-Y');
    			$danterior = date('d-m-Y', strtotime('-1 day')); 



////////////////////////////////////////////////////////////////////////////////////////////////
?>
                <?php 
                echo '
                <div id="content" class="span10">
                
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="/eweb2019/sigi/">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                   <li>
                        <i class="icon-bar-chart"></i>
                        <a href="#">Dashboard</a>
                    </li>
                </ul>

                <div class="row-fluid">
                    

                    <div style="background: #f89406!important" class="span3 statbox purple" onTablet="span6" onDesktop="span3">
                        <div class="boxchart">                      
                        ';

                        $sql="select fecha, est, COUNT(*) as Total FROM ticke where est='Abierto' GROUP BY fecha, est HAVING COUNT(*) > 1 limit 16";

                        $rs=mysqli_query($enlace, $sql);
                        $i=0;
                            if(mysqli_num_rows($rs)<1){
                              echo ""; 
                            }else{
                            
                            while ($row = mysqli_fetch_array($rs)){
                                echo ''.$row["Total"].',' ;
                                $i++; 
                                }     
                                }

                        echo '
                        </div>
                        <div class="number">

                        ';

                        $sql1="select count(*) as total from ticke where est='Abierto' ";

                        $rs1=mysqli_query($enlace, $sql1);
                        $i=0;
                            if(mysqli_num_rows($rs1)<1){
                              echo ""; 
                            }else{
                            
                            while ($row1 = mysqli_fetch_array($rs1)){
                                echo ''.$row1["total"].'' ;
                                $i++; 
                                }     
                                }     
                        echo '

                        <i class="icon-arrow-up"></i></div>
                        <div class="title">Abiertos</div>
                        <div class="footer">
                            <a target="_blank" href="taprobado.php"> Total de Tickets </a>
                        </div>  
                    </div>
                    <div style="background: #f89406!important" class="span3 statbox green" onTablet="span6" onDesktop="span3">
                        <div class="boxchart">

                        ';

                        $sql2="select fecha, est, COUNT(*) as Total FROM ticke where est='En Proceso' GROUP BY fecha, est HAVING COUNT(*) > 1 limit 16";

                        $rs2=mysqli_query($enlace, $sql2);
                        $i=0;
                            if(mysqli_num_rows($rs2)<1){
                              echo ""; 
                            }else{
                            
                            while ($row2 = mysqli_fetch_array($rs2)){
                                echo ''.$row2["Total"].',' ;
                                $i++; 
                                }     
                                }

                        echo '

                        </div>
                        <div class="number">

                        ';

                        $sql3="select count(*) as total from ticke where est='En Proceso' ";

                        $rs3=mysqli_query($enlace, $sql3);
                        $i=0;
                            if(mysqli_num_rows($rs3)<1){
                              echo ""; 
                            }else{
                            
                            while ($row3 = mysqli_fetch_array($rs3)){
                                echo ''.$row3["total"].'' ;
                                $i++; 
                                }     
                                }     
                        echo '

                        <i class="icon-arrow-up"></i></div>
                        <div class="title">En Proceso</div>
                        <div class="footer">
                            <a target="_blank" href="tprocesado.php"> Total de Tickets </a>
                        </div>
                    </div>
                    <div style="background: #f89406!important" class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
                        <div class="boxchart">

                        ';

                        $sql4="select fecha, est, COUNT(*) as Total FROM ticke where est='Cerrado' GROUP BY fecha, est HAVING COUNT(*) > 1 limit 16";

                        $rs4=mysqli_query($enlace, $sql4);
                        $i=0;
                            if(mysqli_num_rows($rs4)<1){
                              echo ""; 
                            }else{
                            
                            while ($row4 = mysqli_fetch_array($rs4)){
                                echo ''.$row4["Total"].',' ;
                                $i++; 
                                }     
                                }

                        echo '

                        </div>
                        <div class="number">

                        ';

                        $sql5="select count(*) as total from ticke where est='Cerrado' ";

                        $rs5=mysqli_query($enlace, $sql5);
                        $i=0;
                            if(mysqli_num_rows($rs5)<1){
                              echo ""; 
                            }else{
                            
                            while ($row5 = mysqli_fetch_array($rs5)){
                                echo ''.$row5["total"].'' ;
                                $i++; 
                                }     
                                }     
                        echo '

                        <i class="icon-arrow-up"></i></div>
                        <div class="title">Cerrados</div>
                        <div class="footer">
                            <a target="_blank" href="trechazado.php"> Total de Tickets </a>
                        </div>
                    </div>
                    <div style="background: #f89406!important" class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
                        <div class="boxchart">

                        ';

                        $sql4="select fecha, prio, COUNT(*) as Total FROM ticke where prio='Alta' GROUP BY fecha, prio HAVING COUNT(*) > 1 limit 16";

                        $rs4=mysqli_query($enlace, $sql4);
                        $i=0;
                            if(mysqli_num_rows($rs4)<1){
                              echo ""; 
                            }else{
                            
                            while ($row4 = mysqli_fetch_array($rs4)){
                                echo ''.$row4["Total"].',' ;
                                $i++; 
                                }     
                                }

                        echo '

                        </div>
                        <div class="number">

                        ';

                        $sql5="select count(*) as total from ticke where prio='Alta' ";

                        $rs5=mysqli_query($enlace, $sql5);
                        $i=0;
                            if(mysqli_num_rows($rs5)<1){
                              echo ""; 
                            }else{
                            
                            while ($row5 = mysqli_fetch_array($rs5)){
                                echo ''.$row5["total"].'' ;
                                $i++; 
                                }     
                                }     
                        echo '

                        <i class="icon-arrow-up"></i></div>
                        <div class="title">Alta</div>
                        <div class="footer">
                            <a target="_blank" href="tsasignar.php"> Prioridad de Tickets </a>
                        </div>
                    </div> 

                    
                </div>';
                ?>

                    <div class="row-fluid">

                        <div style="background: #25398e!important;" class="span8 widget purple" onTablet="span7" onDesktop="span8">
                            <h2 style="padding: 10px 10px 0px 10px;font-size: 17px !important;line-height: 18px !important;margin-bottom: -5px;font-weight: 100;text-shadow: 0px 1px 0px #603cba;"><span class="glyphicons stats"><i></i></span> Cálculo Mensual</h2>
                        <hr>
                            <div id="stats-chart2" style="height:282px"></div>
                        </div>

                        <?php 
                        echo '
                                <div style="background: #25398e!important;" class="sparkLineStats span4 widget purple" onTablet="span5" onDesktop="span4">
                                    <h2 style="padding: 10px 10px 0px 10px;font-size: 17px !important;line-height: 18px !important;margin-bottom: -5px;font-weight: 100;text-shadow: 0px 1px 0px #603cba;"><span class="glyphicons charts"><i></i></span> Cálculo Diario</h2>
                        <hr>
                                    <ul class="unstyled">
                                        
                                        <li style="margin-bottom:8px;width: 100%;height: 60px;">
                                        <span style="float:left;" class="boxchart">
                                        ';

                                        $sql="select fecha, est, COUNT(*) as Total FROM ticke where est='Abierto' GROUP BY fecha, est HAVING COUNT(*) > 1 limit 16";

                                        $rs=mysqli_query($enlace, $sql);
                                        $i=0;
                                            if(mysqli_num_rows($rs)<1){
                                              echo ""; 
                                            }else{
                                            
                                            while ($row = mysqli_fetch_array($rs)){
                                                echo ''.$row["Total"].',' ;
                                                $i++; 
                                                }     
                                                }

                                        echo '
                                        </span>
                                            <div style="float: left;margin-left: 5px;margin-top: 20px;">
                                            Abiertos  por <strong>HOY</strong> 
                                            <span style="font-size: 30px;" class="number">
                                            
                                            ';

                                            $sql1="select count(*) as total from ticke where est='Abierto' and fecha like '%".$dia."%'";

                                            $rs1=mysqli_query($enlace, $sql1);
                                            $i=0;
                                                if(mysqli_num_rows($rs1)<1){
                                                  echo ""; 
                                                }else{
                                                
                                                while ($row1 = mysqli_fetch_array($rs1)){
                                                    echo ''.$row1["total"].'' ;
                                                    $i++; 
                                                    }     
                                                    }     
                                            echo '

                                            </span></div>
                                        </li>
                                        <li style="margin-bottom:8px;width: 100%;height: 60px;">
                                        <span style="float:left;" class="boxchart">
                                        ';

                                        $sql="select fecha, est, COUNT(*) as Total FROM ticke where est='En Proceso' GROUP BY fecha, est HAVING COUNT(*) > 1 limit 16";

                                        $rs=mysqli_query($enlace, $sql);
                                        $i=0;
                                            if(mysqli_num_rows($rs)<1){
                                              echo ""; 
                                            }else{
                                            
                                            while ($row = mysqli_fetch_array($rs)){
                                                echo ''.$row["Total"].',' ;
                                                $i++; 
                                                }     
                                                }

                                        echo '
                                        </span>
                                            <div style="float: left;margin-left: 5px;margin-top: 20px;">
                                            En Proceso por <strong>HOY</strong> 
                                            <span style="font-size: 30px;" class="number">
                                            
                                            ';

                                            $sql1="select count(*) as total from ticke where est='En Proceso' and fecha like '%".$dia."%' ";

                                            $rs1=mysqli_query($enlace, $sql1);
                                            $i=0;
                                                if(mysqli_num_rows($rs1)<1){
                                                  echo ""; 
                                                }else{
                                                
                                                while ($row1 = mysqli_fetch_array($rs1)){
                                                    echo ''.$row1["total"].'' ;
                                                    $i++; 
                                                    }     
                                                    }     
                                            echo '

                                            </span></div>
                                        </li>
                                        <li style="margin-bottom:8px;width: 100%;height: 60px;">
                                        <span style="float:left;" class="boxchart">
                                        ';

                                        $sql="select fecha, est, COUNT(*) as Total FROM ticke where est='Cerrado' GROUP BY fecha, est HAVING COUNT(*) > 1 limit 16";

                                        $rs=mysqli_query($enlace, $sql);
                                        $i=0;
                                            if(mysqli_num_rows($rs)<1){
                                              echo ""; 
                                            }else{
                                            
                                            while ($row = mysqli_fetch_array($rs)){
                                                echo ''.$row["Total"].',' ;
                                                $i++; 
                                                }     
                                                }

                                        echo '
                                        
                                        </span>
                                            <div style="float: left;margin-left: 5px;margin-top: 20px;">
                                            Cerrados por <strong>HOY</strong> 
                                            <span style="font-size: 30px;" class="number">
                                            
                                            ';

                                            $sql1="select count(*) as total from ticke where est='Cerrado' and fecha like '%".$dia."%'";

                                            $rs1=mysqli_query($enlace, $sql1);
                                            $i=0;
                                                if(mysqli_num_rows($rs1)<1){
                                                  echo ""; 
                                                }else{
                                                
                                                while ($row1 = mysqli_fetch_array($rs1)){
                                                    echo ''.$row1["total"].'' ;
                                                    $i++; 
                                                    }     
                                                    }     
                                            echo '

                                            </span></div>
                                        </li>
                                        <li style="margin-bottom:8px;width: 100%;height: 60px;">
                                        <span style="float:left;" class="boxchart">
                                        ';

                                        $sql="select fecha, ucreacion, COUNT(*) as Total FROM ticke where ucreacion='".$_SESSION['nombre']." ".$_SESSION['apellido']."' GROUP BY fecha, ucreacion HAVING COUNT(*) > 1 limit 16";

                                        $rs=mysqli_query($enlace, $sql);
                                        $i=0;
                                            if(mysqli_num_rows($rs)<1){
                                              echo ""; 
                                            }else{
                                            
                                            while ($row = mysqli_fetch_array($rs)){
                                                echo ''.$row["Total"].',' ;
                                                $i++; 
                                                }     
                                                }

                                        echo '
                                        </span>
                                            <div style="float: left;margin-left: 5px;margin-top: 20px;">
                                            Total por <strong>HOY</strong> 
                                            <span style="font-size: 30px;" class="number">
                                            
                                            ';

                                            $sql1="select count(*) as total from ticke where ucreacion='".$_SESSION['nombre']." ".$_SESSION['apellido']."' and fecha like '%".$dia."%'";

                                            $rs1=mysqli_query($enlace, $sql1);
                                            $i=0;
                                                if(mysqli_num_rows($rs1)<1){
                                                  echo ""; 
                                                }else{
                                                
                                                while ($row1 = mysqli_fetch_array($rs1)){
                                                    echo ''.$row1["total"].'' ;
                                                    $i++; 
                                                    }     
                                                    }     
                                            echo '

                                            </span></div>
                                        </li>


                                    </ul>
                                    
                                    <div class="clearfix"></div>

                                </div><!-- End .sparkStats -->
                        ';
                        ?>

                    </div>

                    <div class="row-fluid hideInIE8 circleStats">


                        <?php 
                        $query="select count(*) as total from ticke";            
                        $result = mysqli_query($enlace, $query) ;
                        $rows = mysqli_num_rows($result);
                        for($i=1;$i<=$rows; $i++){
                        $line = mysqli_fetch_array($result);                        
                        //echo ''.$line["total"].'';
                        } 
                        $query1="select count(*) as total from ticke where est='Abierto'";            
                        $result1 = mysqli_query($enlace, $query1) ;
                        $rows1 = mysqli_num_rows($result1);
                        for($i=1;$i<=$rows1; $i++){
                        $line1 = mysqli_fetch_array($result1);                        
                        //echo ''.$line1["total"].'';
                        } 
                        $query2="select count(*) as total from ticke where est='Cerrado'";            
                        $result2 = mysqli_query($enlace, $query2) ;
                        $rows2 = mysqli_num_rows($result2);
                        for($i=1;$i<=$rows1; $i++){
                        $line2 = mysqli_fetch_array($result2);                        
                        //echo ''.$line1["total"].'';
                        } 
                        $query3="select count(*) as total from ticke where est='En Proceso'";            
                        $result3 = mysqli_query($enlace, $query3) ;
                        $rows3 = mysqli_num_rows($result3);
                        for($i=1;$i<=$rows1; $i++){
                        $line3 = mysqli_fetch_array($result3);                        
                        //echo ''.$line1["total"].'';
                        } 
                        $query4="select count(*) as total from ticke where prio='Alta'";            
                        $result4 = mysqli_query($enlace, $query4) ;
                        $rows4 = mysqli_num_rows($result4);
                        for($i=1;$i<=$rows1; $i++){
                        $line4 = mysqli_fetch_array($result4);                        
                        //echo ''.$line1["total"].'';
                        }  
                        $query5="select count(*) as total from ticke where fecha like '%".$dia."%'";            
                        $result5 = mysqli_query($enlace, $query5) ;
                        $rows5 = mysqli_num_rows($result5);
                        for($i=1;$i<=$rows1; $i++){
                        $line5 = mysqli_fetch_array($result5);                        
                        //echo ''.$line1["total"].'';
                        }  
                        $apro = ($line["total"]);
                        $ap = ($line1["total"]);
                        $re = ($line2["total"]);
                        $pr = ($line3["total"]);
                        $sa = ($line4["total"]);
                        $dtotal = ($line5["total"]);
                        $aprobado = ($line1["total"] * 100) / ($line["total"]);
                        $rechazado = ($line2["total"] * 100) / ($line["total"]);
                        $procesando = ($line3["total"] * 100) / ($line["total"]);
                        $sinasignar = ($line4["total"] * 100) / ($line["total"]);
                        $tot = $aprobado + $rechazado + $procesando;
                        //echo round($aprobado) ;
                        ?>
                        <div class="span2" onTablet="span4" onDesktop="span2">
                            <div style="background: #566ba4!important;border: #566ba4!important;" class="circleStatsItemBox yellow">
                                <div class="header">Abiertos</div>
                                <span class="percent">%</span>
                                <div class="circleStat">
                                    <input type="text" value="
                                    <?php echo round($aprobado) ; ?>
                                    " class="whiteCircle" />
                                </div>      
                                <div class="footer">
                                    <span class="count">
                                        <span>Total de Tickets</span>
                                    </span>
                                    <span class="value">
                                        <span class="number"><?php echo $ap   ; ?></span>
                                    </span> 
                                </div>
                            </div>
                        </div>

                        <div class="span2" onTablet="span4" onDesktop="span2">
                            <div style="background: #566ba4!important;border: #566ba4!important;" class="circleStatsItemBox green">
                                <div class="header">En Proceso</div>
                                <span class="percent">%</span>
                                <div class="circleStat">
                                    <input type="text" value="
                                    <?php echo round($procesando) ; ?>
                                    " class="whiteCircle" />
                                </div>
                                <div class="footer">
                                    <span class="count">
                                        <span>Total de Tickets</span>
                                    </span>
                                    <span class="value">
                                        <span class="number"><?php echo $pr; ?></span>
                                    </span> 
                                </div>
                            </div>
                        </div>

                        <div class="span2" onTablet="span4" onDesktop="span2">
                            <div style="background: #566ba4!important;border: #566ba4!important;" class="circleStatsItemBox greenDark">
                                <div class="header">Cerrados</div>
                                <span class="percent">%</span>
                                <div class="circleStat">
                                    <input type="text" value="
                                    <?php echo round($rechazado) ; ?>
                                    " class="whiteCircle" />
                                </div>
                                <div class="footer">
                                    <span class="count">
                                        <span>Total de Tickets</span>
                                    </span>
                                    <span class="value">
                                        <span class="number"><?php echo $re; ?></span>
                                    </span> 
                                </div>
                            </div>
                        </div>

                        <div class="span2" onTablet="span4" onDesktop="span2">
                            <div style="background: #566ba4!important;border: #566ba4!important;" class="circleStatsItemBox orange">
                                <div class="header">Total</div>
                                <span class="percent">%</span>
                                <div class="circleStat">
                                    <input type="text" value="<?php echo round($tot); ?>" class="whiteCircle" />
                                </div>
                                <div class="footer">
                                    <span class="count">
                                        <span>Total de Tickets</span>
                                    </span>
                                    <span class="value">
                                        <span class="number"><?php echo $apro; ?></span>
                                    </span> 
                                </div>
                            </div>
                        </div>

                        <div class="span2 noMargin" onTablet="span4" onDesktop="span2">
                            <div style="background: #566ba4!important;border: #566ba4!important;" class="circleStatsItemBox pink">
                                <div class="header">Alta Prioridad</div>
                                <span class="percent">%</span>
                                <div class="circleStat">
                                    <input type="text" value="
                                    <?php echo round($sinasignar) ; ?>
                                    " class="whiteCircle" />
                                </div>
                                <div class="footer">
                                    <span class="count">
                                        <span>Total de Tickets</span>
                                    </span>
                                    <span class="value">
                                        <span class="number"><?php echo $sa; ?></span>
                                    </span> 
                                </div>
                            </div>
                        </div>

                        <div class="span2" onTablet="span4" onDesktop="span2">
                            <div style="background: #566ba4!important;border: #566ba4!important;" class="circleStatsItemBox greenLight">
                                <div class="header">Total de Hoy</div>
                                <span class="percent">Cantidad</span>
                                <div class="circleStat">
                                    <input type="text" value="<?php echo $dtotal; ?>" class="whiteCircle" />
                                </div>
                                <div class="footer">
                                    
                                </div>
                            </div>
                        </div>

                        
                                
                    </div>

                    <?php
                    echo '
                    <div class="row-fluid"> 

                        <a style="background: #f89406!important;border: #f89406!important;" class="quick-button metro red span2">
                            <i style="font-size: 19px;position: absolute;margin-top: -21px;margin-left: 25px;" class="icon-star"></i>
                            <i class="icon-group"></i>
                            <p>Televenta</p>
                            <span style="text-align: center !important;position: absolute;padding: 0px 0px;font-size: 15px;top: 67%;left: 0%;width: 100%;background: none;text-shadow: 0 1px 1px rgba(0, 0, 0, .25);" class="badge">';

                            $sql1="select count(*) as total from usuarios where tipo='Creador' ";

                            $rs1=mysqli_query($enlace, $sql1);
                            $i=0;
                                if(mysqli_num_rows($rs1)<1){
                                  echo ""; 
                                }else{
                                
                                while ($row1 = mysqli_fetch_array($rs1)){
                                    echo ''.$row1["total"].'' ;
                                    $i++; 
                                    }     
                                    }     
                            echo '
                            </span>
                        </a>
                        <a style="background: #f89406!important;border: #f89406!important;" class="quick-button metro yellow span2">
                            <i style="font-size: 19px;position: absolute;margin-top: -21px;margin-left: 14px;" class="icon-star"></i>
                            <i style="font-size: 19px;position: absolute;margin-top: -20px;margin-left: 40px;" class="icon-star"></i>
                            <i class="icon-group"></i>
                            <p>Backoffice</p>
                            <span style="text-align: center !important;position: absolute;padding: 0px 0px;font-size: 15px;top: 67%;left: 0%;width: 100%;background: none;text-shadow: 0 1px 1px rgba(0, 0, 0, .25);" class="badge">';

                            $sql1="select count(*) as total from usuarios where tipo='Gestionador' ";

                            $rs1=mysqli_query($enlace, $sql1);
                            $i=0;
                                if(mysqli_num_rows($rs1)<1){
                                  echo ""; 
                                }else{
                                
                                while ($row1 = mysqli_fetch_array($rs1)){
                                    echo ''.$row1["total"].'' ;
                                    $i++; 
                                    }     
                                    }     
                            echo '
                            </span>
                        </a>
                        <a style="background: #f89406!important;border: #f89406!important;" class="quick-button metro blue span2">
                            <i style="font-size: 19px;position: absolute;margin-top: -20px;margin-left: -1px;" class="icon-star"></i>
                            <i style="font-size: 19px;position: absolute;margin-top: -20px;margin-left: 27px;" class="icon-star"></i>
                            <i style="font-size: 19px;position: absolute;margin-top: -20px;margin-left: 53px;" class="icon-star"></i>
                            <i class="icon-group"></i>
                            <p>Admin</p>
                            <span style="text-align: center !important;position: absolute;padding: 0px 0px;font-size: 15px;top: 67%;left: 0%;width: 100%;background: none;text-shadow: 0 1px 1px rgba(0, 0, 0, .25);" class="badge">';

                            $sql1="select count(*) as total from usuarios where tipo='Administrador' ";

                            $rs1=mysqli_query($enlace, $sql1);
                            $i=0;
                                if(mysqli_num_rows($rs1)<1){
                                  echo ""; 
                                }else{
                                
                                while ($row1 = mysqli_fetch_array($rs1)){
                                    echo ''.$row1["total"].'' ;
                                    $i++; 
                                    }     
                                    }     
                            echo '
                            </span>
                        </a>
                        <a style="background: #f89406!important;border: #f89406!important;" class="quick-button metro blue span2">
                            <i style="font-size: 19px;position: absolute;margin-top: -20px;margin-left: -11px;" class="icon-star"></i>
                            <i style="font-size: 19px;position: absolute;margin-top: -20px;margin-left: 12px;" class="icon-star"></i>
                            <i style="font-size: 19px;position: absolute;margin-top: -20px;margin-left: 35px;" class="icon-star"></i>
                            <i style="font-size: 19px;position: absolute;margin-top: -20px;margin-left: 57px;" class="icon-star"></i>
                            <i class="icon-group"></i>
                            <p>Super Admin</p>
                            <span style="text-align: center !important;position: absolute;padding: 0px 0px;font-size: 15px;top: 67%;left: 0%;width: 100%;background: none;text-shadow: 0 1px 1px rgba(0, 0, 0, .25);" class="badge">';

                            $sql1="select count(*) as total from usuarios where tipo='Super Administrador' ";

                            $rs1=mysqli_query($enlace, $sql1);
                            $i=0;
                                if(mysqli_num_rows($rs1)<1){
                                  echo ""; 
                                }else{
                                
                                while ($row1 = mysqli_fetch_array($rs1)){
                                    echo ''.$row1["total"].'' ;
                                    $i++; 
                                    }     
                                    }     
                            echo '
                            </span>
                        </a>
                        <a style="background: #f89406!important;border: #f89406!important;" class="quick-button metro green span2">
                            <i class="icon-envelope-alt"></i>
                            <p>Departamentos</p>
                            <span  style="text-align: center !important;position: absolute;padding: 0px 0px;font-size: 15px;top: 67%;left: 0%;width: 100%;background: none;text-shadow: 0 1px 1px rgba(0, 0, 0, .25);" class="badge">';

                            $sql1="select count(*) as total from dep ";

                            $rs1=mysqli_query($enlace, $sql1);
                            $i=0;
                                if(mysqli_num_rows($rs1)<1){
                                  echo ""; 
                                }else{
                                
                                while ($row1 = mysqli_fetch_array($rs1)){
                                    echo ''.$row1["total"].'' ;
                                    $i++; 
                                    }     
                                    }     
                            echo '
                            </span>
                        </a>
                        <a style="background: #f89406!important;border: #f89406!important;" class="quick-button metro black span2">
                            <i class="icon-dashboard"></i>
                            <p>Tick. Ayer</p>
                            <span  style="text-align: center !important;position: absolute;padding: 0px 0px;font-size: 15px;top: 67%;left: 0%;width: 100%;background: none;text-shadow: 0 1px 1px rgba(0, 0, 0, .25);" class="badge">';

                            $sql1="select count(*) as Total FROM ticke where fecha like '%".$danterior."%' ";

                            $rs1=mysqli_query($enlace, $sql1);
                            $i=0;
                                if(mysqli_num_rows($rs1)<1){
                                  echo ""; 
                                }else{
                                
                                while ($row1 = mysqli_fetch_array($rs1)){
                                    echo ''.$row1["Total"].'' ;
                                    $i++; 
                                    }     
                                    }     
                            echo '</span>
                        </a>
                        <div class="clearfix"></div>
                                        
                    </div>
                    ';
                    

                    ?>



                </div>
                <!--/.fluid-container-->
                <!-- end: Content -->
            </div>
            <!--/#content.span10-->
        </div>
        <!--/fluid-row-->
        <?php

////////////////////////////////////////////////////////////////////////////////////////////////




			}

	}

?>