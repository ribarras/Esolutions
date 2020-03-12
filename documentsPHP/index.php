<?php
$enlace = mysqli_connect("localhost", "root1", "root1", "eweb");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/jbk.ico">
<link rel="shortcut icon" href="img/jbk.ico">
    <title>Esolutions</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    .co-servicios{
        margin-left: 0%;width: 100%;
    }
    .sub-servicios{
        width: 125px;
        height: 125px;
        border-radius: 70px;
        background-color: #fe7e36;
        background-image: url(img/servicios.png);
        background-position: 0px 0px;
        margin-left: 34%;
    }

    .estra{
        background-position: -104px 6px;
    }
    .tec{
        background-position: -210px 6px;
    }
    .web{
        background-position: -102px -98px;
    }
    .conser{
        background-position: 8px 6px;
    }
    .anali{
        background-position: -1px -98px;
    }
    .mark{
        background-position: -209px -100px;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
                                           
    <?php
    include $_SERVER['DOCUMENT_ROOT'].'/eweb2017/menu.php';
    ?>
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('img/003.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Mundo Innovador</h3>
                        <p>Desarrollo e implementacion de soluciones informáticas.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/002.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Desarrollamos tus ideas</h3>
                        <p>Optimizar mediante la tecnología los procesos naturales de su empresa.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/001.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Soluciones Empresariales</h3>
                        <p>La evolución tecnológica en nuestros productos.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Esolutions</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div style="border: 0px;" class="card h-100">
                    <div class="co-servicios">
                        <div class="sub-servicios estra"></div>
                    </div>
                    <h4 style="text-align: center;border: 0px; background: #fff;" class="card-header">Estrategia</h4>
                    <div style="text-align: center;" class="card-block">
                        <p class="card-text">Análisis de las necesidades específicas para que Esolutions pueda crear estrategias inteligentes que respondan a las necesidades del mercado.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div style="border: 0px;" class="card h-100">
                    <div class="co-servicios">
                        <div class="sub-servicios tec"></div>
                    </div>
                    <h4 style="text-align: center;border: 0px; background: #fff;" class="card-header">Tecnologia</h4>
                    <div style="text-align: center;" class="card-block">
                        <p class="card-text">Desarrollos tecnológicos de última generación en las que Esolutions crean sencilla experiencias digitales, web, móvil, etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div style="border: 0px;" class="card h-100">
                    <div class="co-servicios">
                        <div class="sub-servicios anali"></div>
                    </div>
                    <h4 style="text-align: center;border: 0px; background: #fff;" class="card-header">Analisis</h4>
                    <div style="text-align: center;" class="card-block">
                        <p class="card-text">El análisis de los resultados en los canales de contacto que se desenvuelve Esolutions como el Web, Redes Sociales, Email Marketing, SEO, con el objetivo para el más alto rendimiento de la inversión.</p>
                    </div>
                </div>
            </div>
            

            <div style="width: 100%;text-align: center;margin-bottom: 40px;"><a href="services.html" class="btn btn-primary">Saber Mas...</a></div>

        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Ultimas Novedades</h2>

        <div class="row">
            <?php 
            $sql="select * from noticias";

                                        $rs=mysqli_query($enlace, $sql);
                                          $i=0;
                                          if(mysqli_num_rows($rs)<1){
                                            echo ""; 
                                          }else{  
                                           while ($row = mysqli_fetch_array($rs)){
                                            echo '
                                            <div class="col-lg-4 col-sm-6 portfolio-item">
                                                <div class="card h-100">
                                                    <a href="#"><img class="card-img-top img-fluid" src="img/'.$row["img_home"].'" alt=""></a>
                                                    <div class="card-block">
                                                        <h4 class="card-title"><a href="#">'.$row["titulo"].'</a></h4>
                                                        <p class="card-text">'.$row["entrada"].'</p>
                                                    </div>
                                                </div>
                                            </div>
                                            ';
                                          $i++; 
                                          }     
                                          }
                                          ?>

            <div style="width: 100%;text-align: center;margin-bottom: 40px;"><a href="blog-home-2.html" class="btn btn-primary">Ver Mas...</a></div>
            
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Sistema de Gestion de Tickets</h2>
                <p>Razones para elegir Sistema de Tickets:</p>
                <ul>
                    <li><strong>Centralización de la información de forma ordenada</strong>
                    </li>
                    <li>Almacenamiento de todas sus solicitudes en un mismo lugar</li>
                    <li>Reducción del volumen de trabajo del personal</li>
                    <li>Enriquecimiento de la base de conocimiento con cada nueva incidencia</li>
                    <li>Seguimiento de su equipo de trabajo</li>
                </ul>
                <p>Permite gestionar eficazmente el soporte interno y externo de su organización. Dado que todos los datos relativos a cada cliente, preguntas, comentarios y acciones realizadas se guardan de forma centralizada en el mismo programa, la información y la experiencia adquiridas en la organización pueden ser reutilizadas de un modo más eficaz.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="img/sigi.jpg" alt="Sistema de Gestion de Tickets">
            </div>
        </div>

        

        <!-- /.row -->
        
        
        <hr>

        <!-- Call to Action Section 
        <div class="row mb-4">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
            </div>
        </div>
        -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Esolutions 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
