<?php
	include_once '../Model/Publication.php';
    include_once '../Controller/PublicationC.php';
	$PublicationC=new PublicationC();
	$listePublication=$PublicationC->afficherlistePublication(); 



    $error = "";

    // create Publication
    $Publication = null;

    // create an instance of the controller
    $PublicationC = new PublicationC();
    if (
        isset($_POST["numan"]) &&
        isset($_POST["typepublication"])
    ) {
        if (
            !empty($_POST["numan"]) && 
            !empty($_POST["typepublication"])
        ) {
            $Publication = new Publication(
                $_POST['numan'],
                $_POST['typepublication']
            );
            $PublicationC->ajouterPublication($Publication);
            header('Location:afficherlistePublication.php');
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
      <title>Marlène Agnecy</title>
      <link rel="stylesheet" href="assets/css/components.css">
      <link rel="stylesheet" href="assets/css/icons.css">
      <link rel="stylesheet" href="assets/css/responsee.css">
      <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css"> 
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now UI Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />

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
                    Creative Tim
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
                    <li class="active">
                        <a href="../../../ismael/back/views/afficherlistePublication.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Publication</p>
                        </a>
                    </li>
                    <li >
                        <a href="../../../mannequin/back/views/afficherListeMannequins.php">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Mannequin</p>
                        </a>
                    </li>
                    <li >
                        <a href="../../../user/back/views/afficher.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li >
                        <a href="../../../annonce/back/views/template.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Annonce</p>
                        </a>
                    </li>
                    <li >
                        <a href="../../../back/backend.php">
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
            <a href="stat.php" class="btn">stats</a>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Simple Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        
                                        <tbody>
										<button><a href="ajouterPublication.php">Ajouter une publication </a></button>
		<center><h1>Liste des Publication</h1></center>
		<table border="1" align="center">
			<tr>
				<th>N ° Annonce</th>				
				<th>Type de publication</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listePublication as $Publication){
			?>
			<tr>
				<td><?php echo $Publication['numan']; ?></td>
				<td><?php echo $Publication['typepublication']; ?></td>
				
				<td>
				<a href="modifierPublication.php?id=<?php echo $Publication['numan'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
				</td>
				<td>
					<a href="supprimerPublication.php?id=<?php echo $Publication['numan']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<button class="btn btn-primary" onclick="print('afficherlistePublication.php')">Export to PDF</button>
		<script>
   function print(pdf)
       {
                    // Créer un IFrame.
        var iframe = document.createElement('iframe');  
        // Cacher le IFrame.    
        iframe.style.visibility = "hidden"; 
        // Définir la source.    
        iframe.src = pdf;        
        // Ajouter le IFrame sur la pprix Web.    
        document.body.appendChild(iframe);  
        iframe.contentWindow.focus();       
        iframe.contentWindow.print(); // Imprimer.
             }
</script>

		
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-plain">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                <br> <br> 

<div id="head" align="center">

<div class="line" align="center">
  
   <br> <br> <br> <br> 
   <div class="margin" align="center">
   <div class="s-12 l-6" align="center">

   
     
      </form>
   </div>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div numan="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="numan">N ° Annonce:
                        </label>
                    </td>
                    <td><input type="text" name="numan" numan="numan" maxlength="20"></td>
                </tr>
				<tr>

                <td>
                        <label for="typepublication">Type de publication:
                        </label>
                    </td>
                    <td>
                        <input type="typepublication" name="typepublication" numan="typepublication" >
                    </td>
                </tr>              
                              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
        <script>
        function validateForm() {
            var letters = /^[A-Za-z]+$/;
            var dateNow = new Date();
            var p = document.getElementById("numan").value;
            var dp = document.getElementById("typepublication").value;

            if (p == "") {
                alert("le code est vide !!");
                return false;
            }
            
            else if (dp == "") {
                alert("type de publication est vide !!");
                return false;
            }
          
            
        }
       
        
    
    </script> 

            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
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