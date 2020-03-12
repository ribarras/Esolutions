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
        $sql="select * from noticias where id='$_GET[id]'";

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
                    <a href="blog-home-2.html">Noticias</a>
                </li>
                <li class="breadcrumb-item active">Inf. Noticias</li>
            </ol>

            <div class="row">

                <!-- Post Content Column -->
                <div class="col-lg-8">

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="img/'.$row["img_cuerpo"].'" alt="">

                    <hr>

                    <!-- Date/Time -->
                    
                        <h6>'.$row["entrada"].'</h6>
                        <p>'.$row["cuerpo"].'</p>

                    <hr>
                    <p>Publicado el '.$row["fecha"].', Fuente: <a href="'.$row["fuente"].'">'.$row["fuente"].'</a></p>

                    <hr>
           

                    <!-- Comment with nested comments -->
                    

                </div>

                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header"><a href="https://www.instagram.com/esolutions_ve/?hl=es">@esolutions_ve</a></h5>
                        <div class="card-block">
                            <!-- LightWidget WIDGET --><script src="http://lightwidget.com/widgets/lightwidget.js"></script><iframe src="http://lightwidget.com/widgets/c19562081d7e56acb2c2fc24c71a453f.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
                        </div>
                    </div>

                </div>

            </div>
            ';
            $i++; 
            }     
        }
        
        ?>
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
