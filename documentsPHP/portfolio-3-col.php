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
        <h1 class="mt-4 mb-3">Portafolio</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Portafolio</li>
        </ol>

        <div class="row">
            <?php
            $sql="select * from portafolio";

            $rs=mysqli_query($enlace, $sql);
            $i=0;
            if(mysqli_num_rows($rs)<1){
            echo ""; 
            }else{  
                while ($row = mysqli_fetch_array($rs)){
                echo '
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="portfolio-item.php?id='.$row["id"].'"><img class="card-img-top img-fluid" src="img/'.$row["img_list"].'" alt=""></a>
                        <div class="card-block">
                            <h4 class="card-title"><a href="portfolio-item.php?id='.$row["id"].'">'.$row["titulo"].'</a></h4>
                            <p class="card-text">'.substr($row["cuerpo"], 0, 100).'...</p>
                        </div>
                    </div>
                </div>
                ';
                $i++; 
                }     
            }
            ?>
            
        </div>

        <!-- Pagination -->
        

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
