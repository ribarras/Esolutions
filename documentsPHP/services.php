<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Servicios</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Servicios</li>
        </ol>

        <!-- Image Header -->
        <img class="img-fluid rounded mb-4" src="img/service.jpg" alt="">

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
            
            <div class="col-lg-4 mb-4">
                <div style="border: 0px;" class="card h-100">
                    <div class="co-servicios">
                        <div class="sub-servicios conser"></div>
                    </div>
                    <h4 style="text-align: center;border: 0px; background: #fff;" class="card-header">Contenido</h4>
                    <div style="text-align: center;" class="card-block">
                        <p class="card-text">La creación y el comisariado de contenido relevante y valioso que atraer y retener a los consumidores que considera Esolutions en los diferentes canales de contacto.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div style="border: 0px;" class="card h-100">
                    <div class="co-servicios">
                        <div class="sub-servicios web"></div>
                    </div>
                    <h4 style="text-align: center;border: 0px; background: #fff;" class="card-header">Web Responsive</h4>
                    <div style="text-align: center;" class="card-block">
                        <p class="card-text">Esolutions se crean diseño y desarrollo cuyo objetivo es adaptar la apariencia de las páginas web al dispositivo que se esté utilizando para visualizarlas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div style="border: 0px;" class="card h-100">
                    <div class="co-servicios">
                        <div class="sub-servicios mark"></div>
                    </div>
                    <h4 style="text-align: center;border: 0px; background: #fff;" class="card-header">Marketing Integrado</h4>
                    <div style="text-align: center;" class="card-block">
                        <p class="card-text">Esolutions siempre pensando en la implementación de estrategias en los canales digitales que buscan la mayor afinidad y el compromiso con el grupo objetivo.</p>
                    </div>
                </div>
            </div>
            

        </div>
        <!-- /.row -->

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
