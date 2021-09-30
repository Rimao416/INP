<?php
include("../includes/database.php");
session_start();
if(!isset($_SESSION['operateurs'])){
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/director/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.28.3/apexcharts.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <title>Document</title>
    
</head>
<body>  
        <div id="moddle">

        <div class="table-responsive">  
            <h1>INFORMATIONS SUR <span id="nomG"></span> </h1>
            <hr>    
            <div id="data">

            </div>
            <div id="cross">Fermer</div>
        </div>  
    </div>
<div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle"><?php echo get_username($connect,$_SESSION['operateurs'],'operateurs','nom')?></span>
        </a>

				 <ul class="navbar-nav align-self-stretch">
            <?php include('../includes/navigation.php');?>
           
		    </ul>

				
			</div>
	   
	   
    </nav>
    
        <div id="page-content-wrapper">
         
			
			<div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
               <span></span>
			    <span></span>
				 <span></span>
            </div>
			

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light " placeholder="Search for..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown  d-sm-none">
         
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
					placeholder="Search for..." >
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           <li class="nav-item dropdown">
							<a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
								<div class="position-relative">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
            <!-- Nav Item - Messages -->
            <li class="nav-item">
              <a class="nav-link " href="#"
			 role="button">
                <i class="fas fa-envelope"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo get_username($connect,$_SESSION['operateurs'],'operateurs','nom')?></span>
                <img class="img-profile rounded-circle" src="img/logo3.png">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->



                    <div class="container dash_con">
                        <?php include('../includes/director/number.php'); ?>
                    </div>
                    <div class="container box">   
                    <form id="formulaire" method="post" action="add_action.php">
            <i class="text-danger small">Les informations suivies d'un astériste sont obligatoires</i>
            <div class="form-row">
            <div class="row">
                <div class="form-group col-md-3">
                <label id="erreur_nom_prof" style="font-size: small;font-weight:bold;">Nom <span class="text-danger">*</span> </label>
                <input type="text" class="form-control" id="nom" placeholder="e.g Kayumba" name="nom" required>
                </div>
                <div class="form-group col-md-3">
                <label id="erreur_post_nom" style="font-size: small;font-weight:bold;">Prenom<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="prenom" placeholder="e.g Babo" name="prenom" required> 
                </div>
                <div class="form-group col-md-3">
                <label id="erreur_sexe" style="font-size: small;font-weight:bold;">Pièce d'identité <span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Activation select" name="piece" id="piece">
                        <option value="Passeport">----------Passeport---------</option>
                        <option value="CIN">----------CIN---------</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label id="erreur_prenom" style="font-size: small;font-weight:bold;">Numero <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="CN87453321" required>
                </div>
                <div class="form-group col-md-3">
                <label id="erreur_sexe" style="font-size: small;font-weight:bold;">Gouvernorats <span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Activation select" name="Gouvernorats" id="Gouvernorats">
                        <option value="Ariana">Ariana</option>
                        <option value="Béja">Béja</option>
                        <option value="Ben Arous">Ben Arous</option>
                        <option value="Bizerte">Bizerte</option>
                        <option value="Gabes">Gabes</option>
                        <option value="Gasfa">Gasfa</option>
                        <option value="Jendouba">Jendouba</option>
                        <option value="Kaiouran">Kaiouran</option>
                        <option value="Kasserine">Kasserine</option>
                        <option value="Kébili">Kébili</option>
                        <option value="Kef">Kef</option>
                        <option value="Mahdia">Mahdia</option>
                        <option value="Manouba">Manouba</option>
                        <option value="Médenine">Médenine</option>
                        <option value="Monastir">Monastir</option>
                        <option value="Nabeul">Nabeul</option>
                        <option value="Sfax">Sfax</option>
                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                        <option value="Sousse">Sousse</option>
                        <option value="Tataouine">Tataouine</option>
                        <option value="Tozeur">Tozeur</option>
                        <option value="Tunis">Tunis</option>
                        <option value="Zaghouan">Zaghouan</option>    
                </select>
                </div>
                <div class="form-group col-md-3">
                <label id="erreur_habitation" style="font-size: small;font-weight:bold;">Ville</label>
                    <input type="text" class="form-control" id="Ville" name="Ville" placeholder="..." required>
                </div>
                <div class="form-group col-md-3">
                <label id="erreur_habitation" style="font-size: small;font-weight:bold;">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="548554231" required>
                </div>
                <div class="form-group col-md-3">
                <label id="erreur_habitation" style="font-size: small;font-weight:bold;">Pays</label>
                    <input type="text" class="form-control" id="pays" name="pays" placeholder="mali" required>
                </div>
                </div>
                </div>
            <div class="row">
          
                <div class="form-group col-md-3">
                    <label for=""></label>
                    <input type="hidden" value="send" name="action" id="action">
                    <input type="hidden" value="0" name="teacher_specific" id="teacher_specific">
                    <button type="submit" class="btn btn-primary form-control" id="Button_Envoi">Enregistrer</button>
                </div>
                
            </div>
            </div>

            </form>
                    </div>
        				
                </div>

        </div>
        <!-- /.container-fluid -->

      </div>
			
			
			
			
        
			
			
			
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong><?php echo get_username($connect,$_SESSION['operateurs'],'operateurs','nom')?> </strong></a> &copy
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="footer-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			
        </div>
		</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    


    
    <script src="../public/director/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../public/director/js/dashboard.init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="../public/director/js/user.js"></script>
    <script>
 
$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>

</body>

</html>