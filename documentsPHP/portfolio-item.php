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
        <?php
        if (isset($_GET["id"])){
        $sql="select * from portafolio where id='$_GET[id]'";

        $rs=mysqli_query($enlace, $sql);
        $i=0;
        if(mysqli_num_rows($rs)<1){
        echo ""; 
        }else{  
            while ($row = mysqli_fetch_array($rs)){
            echo '
            <h1 class="mt-4 mb-3">'.$row["titulo"].'</h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="portfolio-3-col.html">Portafolio</a>
                </li>
                <li class="breadcrumb-item active">Inf. Portafolio</li>
            </ol>

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                    <img class="img-fluid" style="margin-top: 10px;" src="img/'.$row["img_1"].'" alt="">
                    <img class="img-fluid" style="margin-top: 10px;" src="img/'.$row["img_2"].'" alt="">
                    <img class="img-fluid" style="margin-top: 10px;" src="img/'.$row["img_3"].'" alt="">
                    <img class="img-fluid" style="margin-top: 10px;" src="img/'.$row["img_4"].'" alt="">
                    <img class="img-fluid" style="margin-top: 10px;" src="img/'.$row["img_5"].'" alt="">
                </div>

                <div class="col-md-4">
                    <h3 class="my-3">'.$row["titulo"].'</h3>
                    <p>'.$row["cuerpo"].'</p>
                    <h3 class="my-3">Detalles</h3>
                    <ul>
                        <li>Fecha: '.$row["fecha"].'</li>
                        <li>Cliente: '.$row["cliente"].'</li>
                        <li>Url: '.$row["url"].'</li>
                    </ul>
                </div>

            </div>
            ';
            $i++; 
            }     
        }
        }
        ?>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <hr>
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
