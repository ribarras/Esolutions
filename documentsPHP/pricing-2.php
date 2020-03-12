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
        <h1 class="mt-4 mb-3">Presupuesto</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="faq.html">Planes</a>
            </li>
            <li class="breadcrumb-item active">Presupuesto</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre o razón social:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Correo Electronico:</label>
                            <input type="email" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Teléfono de contacto:</label>
                            <input type="text" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>¿Donde nos ubico?</label>
                            <input type="text" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>¿Que plan desea cotizar?</label>
                            <select name="cotizar" class="form-control">
                              <option value=""></option>
                              <option value="Plan Estandar (Proyecto WEB)">Plan Estandar (Proyecto WEB)</option>
                              <option value="Plan Emprendedor (Proyecto WEB)">Plan Emprendedor (Proyecto WEB)</option>
                              <option value="Plan Premium (Proyecto WEB)">Plan Premium (Proyecto WEB)</option>                      
                              <option value="Plan Economy (E-Commerce)">Plan Economy (E-Commerce)</option>
                              <option value="Plan Deluxe (E-Commerce)">Plan Deluxe (E-Commerce)</option>
                              <option value="Plan Premium (E-Commerce)">Plan Premium (E-Commerce)</option>
                              <option value="Soporte Sap (SAP)">Soporte Sap (SAP)</option>
                              <option value="Servicio Técnico y Redes">Servicio Técnico y Redes</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Ciudad y Estado:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensaje:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Detalle de Contacto</h3>
                <p>Gracias por confiar en nosotros lo invitamos a estar pendiente de su buzón de entrada o carpeta spam en su email, en el transcurso máximo de 24 horas estaremos comunicándonos con usted.</p>
                <p>
                    San Antonio de los Altos
                    <br>Miranda, Venezuela
                    <br>
                </p>
                <p>
                    <abbr title="Phone">Celular </abbr>: (0412) 021-9332
                </p>
                <p>
                    <abbr title="Email">Email </abbr>: <a href="mailto:clienes@esolutions.com.ve">clientes@esolutions.com.ve
                    </a>
                </p>
                <p>
                    <abbr title="Hours">Horario </abbr>: Lunes - Viernes: 9:00 AM to 5:00 PM
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        
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

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>