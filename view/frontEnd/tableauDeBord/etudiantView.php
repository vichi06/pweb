<?php
// PAGE D'ACCUEIL DE L'ETUDIANT
ob_start(); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue Etudiant</title>
    <meta charset="utf-8">
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <!--CCS Stylsheet-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/dashboard.css">
   
    <link rel="stylesheet" href="./public/css/mdb.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="./public/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </head>

  



<div class="container-fluid px-md-5">

  <!-- For demo purpose -->
  <div class="row py-5 text-white">
    <div class="col-lg-9 mx-auto text-center">
      <h1 class="display-4">QCM LIVE Etudiant</h1>
      
     
    </div>
  </div>
  <!-- End -->

  <div class="rounded">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">

        <!-- Vertical Menu-->
        <nav class="nav flex-column bg-white shadow-sm font-italic rounded p-3">
        <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="./public/images/img0.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0"></h4>
          <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['profil']['nom'] . ' '. $_SESSION['profil']['num_grpe']?></p>
        </div>
      </div>  
        
        <a href="#" class="nav-link px-4 active rounded-pill">
                            <i class="fas fa-bar-chart mr-2"></i>
                            Accueil
                            <span class="badge badge-primary px-2 rounded-pill ml-2">45</span>
                        </a>
          <a href="#" class="nav-link px-4 rounded-pill">
                            <i class="fas fa-pie-chart mr-2"></i>
                           Statistiques
                            <span class="badge badge-primary px-2 rounded-pill ml-2">12</span>
                        </a>
          <a href="./model/finSession.php" class="nav-link px-4  bg-primary text-white shadow-sm rounded-pill">
                            <i class="fas fa-line-chart mr-2"></i>
                            Deconnexion
                            <span class="badge badge-light text-primary px-2 rounded-pill ml-2">17</span>
                        </a>
          <a href="#" class="nav-link px-4 rounded-pill">
                            <i class="fas fa-area-chart mr-2"></i>
                            Action here
                            <span class="badge badge-primary px-2 rounded-pill ml-2">32</span>
                        </a>
          <a href="#" class="nav-link px-4 rounded-pill">
                            <i class="fas fa-th-large mr-2"></i>
                            Another action here
                        </a>
          <a href="#" class="nav-link px-4 rounded-pill">
                            <i class="fas fa-line-chart mr-2"></i>
                            Action here
                        </a>
          <a href="#" class="nav-link px-4 disabled">
                            <i class="fas fa-pie-chart mr-2"></i>
                            Disabled link
                        </a>
        </nav>
        <!-- End -->

      </div>

      <div class="col-lg-8 mb-5">
        <!-- Demo Content-->
        <div class="p-5 bg-white d-flex align-items-center shadow-sm rounded h-100  ">
          <div class="demo-content justify-content-center">
           
            <div class="alert alert-success text-center" role="alert">
              <h4 class ="alert-heading">Vous êtes maintenant connecté <?php echo '<strong><u>' . $_SESSION['profil']['nom'] .' du groupe '. $_SESSION['profil']['num_grpe'] .' !' .'</strong></u>';?></h4>
        
      </div>
  <h4> Rejoignez une session en cours (insérez nom du test) : 
  <div class="md-form"> 
  <form action="./index.php" method="get"> <br>
      <input type="text" placeholder="Nom du test" name="test" id="inputMDEx" class="form-control">
      <input type="submit" class="fadeIn fourth btn btn-primary" value="Se connecter">
    </form>   
</h4>           
</div>
        </div>
      </div>

    </div>
  </div>
</div>
<br>
<br>
</section>
</html>

<?php 
$contenu = ob_get_clean();
require './view/frontEnd/template.php';

