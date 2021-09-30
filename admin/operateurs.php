<?php
include("../includes/database.php");
session_start();
$data=load_something($connect,'operateurs','');

    if(!isset($_SESSION['admin'])){
        header('location:login.php');
    }
    if(isset($_POST['submit'])){
        $piece='';
        for ($i=0;$i<199;$i++){
             $valeur=get_gouvernorat(rand(0,20));
            $valeur2=get_passport();
            $surname=strtoupper(get_surname(rand(0,199)));
            $names=strtoupper(get_names(rand(0,199)));
            $gouvernorat2=get_gouv($valeur);
            $ville=get_ville($valeur);
            $pays=get_gouv($valeur2);
            $numero=get_data($valeur2);
            $phone=get_numero();
            if($pays=='Tunisie'){
                $piece='CIN';
            }else{
                $piece='Passeport';
            }
    
            $date=get_date();
            $password=get_user_password();
            echo "<br>";
            $query=$connect->prepare("INSERT INTO utilisateurs (nom,prenom,piece,numero,date_emission,gouvernorat,ville,contact,espace_client,password,pays) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
          
            $query->execute(array($names,$surname,$piece,$numero,$date,$gouvernorat2,$ville,$phone,$phone,password_hash($password, PASSWORD_DEFAULT),$pays));
    
        }
    
    
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/director/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.28.3/apexcharts.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <title>Document</title>
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
  <span class="align-middle">Vishweb Design</span>
</a>

         <ul class="navbar-nav align-self-stretch">
    <?php include('../includes/navigation_admin.php');?>
   
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
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Vishweb Design</span>
        <img class="img-profile rounded-circle" src="img/logo3.png">
      </a>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->



            <div class="container dash_con">
                <?php include('../includes/director/number.php'); ?>
            </div>
            <center>
            <div class="card">
                    <div class="card-body">
                        <div>
                            <h1 class="mb-1 mt-1"><span data-plugin="counterup"><?=get_total_records($connect,'operateurs',);?></span></h1>
                            <p class="text-muted mb-0">Operateurs</p>
                           <button  class="btn btn-info"><a href="add.php" style="color:white;text-decoration:none;">Ajouter</a></button> 
                        </div>

                        <div class="float-end mt-2">
                            <div id="total-revenue-chart"></div>
                        </div>
                    </div>
                </div>
                </center>
                <center>
                    <div class="card">
                        <div class="card-body">
                        <div class="table-responsive">
                    <div class="col-md-9">
                            <table class="table">

                                <thead>
                                    <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Date d'arrivé</th>
                                    <th scope="col">Action</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($data as $row){
                                       ?> 
                                        <tr>
                                        <td><?=$row["nom"]?></th>
                                        <td><?=$row["prenom"]?></td>
                                        <td><?=$row["date_arrivve"]?></td>
                                        <td> <a class="btn btn-danger" href="supprimer.php?id=<?=$row['id']?>">Supprimer</a> </td>
                                        </tr>
                                      <?php  }?>
                                </tbody>
                            </table>
                    </div>
                </div>
                        </div>
                    </div>
           
                </center>
               
        </div>

</div>
<!-- /.container-fluid -->

</div>
    
    
    
    

    
    
    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-left">
                    <p class="mb-0">
                        <a href="index.html" class="text-muted"><strong>INP </strong></a> &copy
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
    <script>
 
$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
</script>
</body>
</html>