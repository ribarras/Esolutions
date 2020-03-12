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
        <h1 class="mt-4 mb-3">Noticias</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Noticias</li>
        </ol>

        <!-- Blog Post -->
        <?php
        $sql="select * from noticias";

        $rs=mysqli_query($enlace, $sql);
        $i=0;
        if(mysqli_num_rows($rs)<1){
        echo ""; 
        }else{  
            while ($row = mysqli_fetch_array($rs)){
            echo '
            <div class="card mb-4">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="blog-post.php?id='.$row["id"].'">
                                <img class="img-fluid rounded" src="img/'.$row["img_home"].'" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="card-title">'.$row["titulo"].'</h2>
                            <p class="card-text">'.$row["entrada"].'</p>
                            <a href="blog-post.php?id='.$row["id"].'" class="btn btn-primary">Saber Mas &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Publicado el '.$row["fecha"].' 
                </div>
            </div>
            ';
            $i++; 
            }     
        }
        ?>

        

        <!-- Pagination -->

    </div>

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
