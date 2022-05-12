<?php
   include_once '../model/tablean.php ';
   include_once '../controller/tableanC.php';

    $error = "";

    // create commande
    $Ann = null;

    // create an instance of the controller
    $tableanC = new tableanC();
    if (
      
            isset($_POST["CodeAn"]) &&     
            isset($_POST["TypeAn"]) &&
            isset($_POST["TitreAn"]) && 
            isset($_POST["DateAn"]) &&
            isset($_POST["ContenueAn"])
    ) {
        if (
          
            !empty($_POST["CodeAn"]) &&
            !empty($_POST["TypeAn"]) && 
            !empty($_POST["TitreAn"]) &&
            !empty($_POST["DateAn"]) &&
            !empty($_POST["ContenueAn"])
        ) {
            $Ann= new tablean(
             
                $_POST['CodeAn'], 
                $_POST['TypeAn'],
                $_POST['TitreAn'],
                $_POST['DateAn'] ,
                $_POST['ContenueAn']
            );
            $tableanC->modifierAn($Ann );
             header('Location:template.php');
        }
        else
            $error = "Missing information";
    }    
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Marlène Agency</title>
      <link rel="stylesheet" href="../../../css/components.css">
      <link rel="stylesheet" href="../../../css/icons.css">
      <link rel="stylesheet" href="../../../css/responsee.css">
      <link rel="stylesheet" href="../../../owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="../../../owl-carousel/owl.theme.css"> 
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../back/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now UI Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../../back/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../back/assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../../back/assets/demo/demo.css" rel="stylesheet" />
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../back/assets/css/bootstrap1.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../../back/assets/css/style.css" rel="stylesheet">
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    CREATEAM
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="examples/dashboard.html">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="examples/icons.html">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="examples/map.html">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a href="../user/back/views/afficher.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../annonce/back/views/template.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Commandes</p>
                        </a>
                    </li>
                    <li >
                        <a href="backend.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Formations</p>
                        </a>
                    </li>
                  
                    <li class="active-pro">
                        <a href="upgrade.html">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Table List</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            

            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                        <br>
                        <div class="line" align="right">
                              <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2"  href="template.php#"><i class="bi bi-arrow-right text-primary me-2"></i>  <FONT size="4pt" color="blue"> Retour à la liste des annonces &nbsp; &nbsp;</FONT></a>
                                </div>
                                </div>
                              
                             
                       
                      
                    
                       
            <hr>
            
            <div id="error">
                <?php echo $error; ?>
            </div>
    <?php
                if (isset($_POST['CodeAn'])){
                    $Ann= $tableanC->recupererAn($_POST['CodeAn']);
                   /* $nom=$formationC->recuperernom($_POST['nom']);*/
                  
                    
            ?>
            
            <form class="customform" action="" method="post" >
                <table border="1" align="center">

            
                    
                    <tr>
                            <td>
                                <label for="CodeAn">CodeAn:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="CodeAn" id="CodeAn" value="<?php echo $Ann['CodeAn']; ?>">
                            </td>
                    </tr>
                
                    <tr>
                            <td>
                                <label for="TypeAn">Type de l'annonce :
                                </label>
                            </td>
                            <td>
                                <input type="text" name="TypeAn" id="TypeAn" value="<?php echo $Ann['TypeAn']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                                <label for="TitreAn">Titre:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="TitreAn" id="TitreAn" value="<?php echo $Ann['TitreAn']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                            <label for="DateAn">Date:
                                </label>
                            </td>
                            <td>
                                <input type="date" name="DateAn" id="DateAn" value="<?php echo $Ann['DateAn']; ?>">
                            </td>
                    </tr>

                    <tr>
                            <td>
                            <label for="ContenueAn">Contenue:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="ContenueAn" id="ContenueAn" value="<?php echo $Ann['ContenueAn']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                                <input  type="submit" value="Modifier" >
                            </td>
                            <td>
                                <input type="reset" value="Annuler" >
                            </td>
                    </tr>
                </table>
            </form>
                    <?php
                    }
                    ?>

            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Createam
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

</html>







 