
<!DOCTYPE html>
<html lang="es-VE, en-US">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title -->
        <title><?php if (!empty($page_title))
           echo $page_title;
            else echo "Optimo";?></title>
    
        <!-- Required meta tags -->

        

        <!-- Metatags -->
        <meta name="title" content="Optimo">
        <meta name="subject" content="Optimo">
        <meta name="description" content="Optimo">
        <meta name="keywords" content="Optimo">
        <meta name="author" content="leonardocaripadev@gmail.com">
        <meta name="language" content="Spanish, English">
        <meta name="revisit" content="1 day">
        <meta name="distribution" content="global">
        <meta name="robots" content="index">
            
        <!-- Bootstrap Core CSS -->
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="libs/assets/favicon.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
                <!-- Template CSS -->

        <link rel="stylesheet" href="libs/css/styles.css" />
        
         <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
  </head>
  <body class="d-flex flex-column">
        <main class="flex-shrink-0">
                <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
                <div class="container-fluid px-5 collapse">
                    <a class="navbar-brand" href="index.php"><img src="libs/assets/favicon.png" alt="" width="30" height="24">Se Optimo</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ">
                            <li class="nav-item"><a class="nav-link" href="acerca.php">Acerca</a></li>
                            <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                            <li class="nav-item"><a class="nav-link" href="precios.php">Precios</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq.php">Preguntas Frecuentas</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog/index.php">Blog</a></li>
                        </ul>
                    </div>
                </div>
                 
                <form class="d-flex" method="POST" action="busqueda.php">
                    <input class="form-control me-2" type="search" id="busqueda" name="busqueda" placeholder="Buscar..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <a class="navbar mx-2" href="login.php">
                    <button class="btn btn-outline-light" type="button" >Iniciar</button>
                </a>
                            
                <a class="navbar-item" href="registro.php">
                    <button class="btn btn-outline-light" type="button" >Registrate</button>
                </a>


            </nav>


