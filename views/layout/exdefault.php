<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gest Parc Info</title>

    <!-- Bootstrap -->
    <link href="<?php echo SCHOOL?>/pattern/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SCHOOL?>/pattern/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo SCHOOL?>/pattern/css/starter-template.css" rel="stylesheet">
    <link href="<?php echo SCHOOL?>/pattern/css/default.css" rel="stylesheet">
    <script src="<?php echo SCHOOL?>/pattern/js/jquery.min.js"></script>
    <script src="<?php echo SCHOOL?>/jsperso/functions.js"></script>
    <script src="<?php echo SCHOOL?>/jsperso/app.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            
          </button>
          <a class="navbar-brand" href="<?php echo SCHOOL?>/dashboard/index">DPSE - Parc Informatique</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo SCHOOL?>/dashboard/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Accueil</a></li>
            <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
                   Matériel & Famille
                    <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <?php if(Session::get('slug')=='admin'){?>
                      <li><a href="<?php echo SCHOOL?>/famille/index">Enrégistrer une Famille de matériel</a></li>
                     <?php }?>  
                      <?php if(Session::get('slug')=='admin'){?>
                      <li><a href="<?php echo SCHOOL?>/materiel/index">Enrégistrer du matériel</a></li>
                    <?php }?> 
                      <li><a href="<?php echo SCHOOL?>/famille/liste">Voir la liste Famille de matériel</a></li>
                    <li><a href="<?php echo SCHOOL?>/materiel/liste">Voir la liste du matériel</a></li>
                   </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Stock <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php if(Session::get('slug')=='admin'){?>
                <li><a href="<?php echo SCHOOL?>/stock/index">Enrégistrer du matériel en Stock</a></li>
                <?php }?>
                <li><a href="<?php echo SCHOOL?>/stock/disponible">Voir le matériel disponible en Stock</a></li>
                <?php if(Session::get('slug')=='admin'){?>
                  <li><a href="<?php echo SCHOOL?>/demande/liste">Voir la liste du matériel demandé</a></li>
                <li><a href="<?php echo SCHOOL?>/sortie/index">Attribution / Emprunt du Matériel</a></li>
                <li><a href="<?php echo SCHOOL?>/sortie/suivi">Suivre un Matériel attribué / Emprunté</a></li>
                <li><a href="<?php echo SCHOOL?>/sortie/suspendre">Suspendre une Attribution / Emprunt</a></li>
                <li><a href="<?php echo SCHOOL?>/sortie/incident">Enregistrer un Incident</a></li>
                <li><a href="<?php echo SCHOOL?>/sortie/reparer">Enregistrer un matériel réparé</a></li>
                <li><a href="<?php echo SCHOOL?>/sortie/etat">Imprimer une Fiche d'Attribution / d'Emprunt</a></li>
                <li><a href="<?php echo SCHOOL?>/sortie/theend">Imprimer une Fiche de Fin d'Utilisation</a></li>
                <?php }?>
              </ul>
          </li>
            <?php if(Session::get('slug')=='admin'){?>
            <li><a href="<?php echo SCHOOL?>/fournisseur/index"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Fournisseur</a></li>
            <li><a href="<?php echo SCHOOL?>/service/index"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>Service</a></li>
            <?php }?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="#">Link</a></li>-->
            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Bonjour <?php echo Session::get('nom');?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


   <div class="container-fluid">

      <div class="starter-template">
       <div class="col-sm-3 col-md-2">
         <div class="list-group">
  
  <a href="<?php echo SCHOOL?>/stock/disponible" class="list-group-item"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>Vérifier la disponibilité</a>
  <a href="<?php echo SCHOOL?>/demande/index"  class="list-group-item"><span class="glyphicon glyphicon-open" aria-hidden="true"></span>Faire une demande</a>
 <a href="<?php echo SCHOOL?>/agent/index"  class="list-group-item"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
  Mes Infos</a>
  <a href="<?php echo SCHOOL?>/deconnexion"  class="list-group-item"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>Déconnexion</a>
        </div>
        
        </div>      
      <div class="col-sm-8 col-md-10 main">
        <!--<p class="lead"></p>-->
        
        <div class="panel panel-default">
  <div class="panel-body">
    <?php echo $content_for_layout ?>
  </div>
</div
        
        ></div>
      
       
      </div>
	    </div>
    
      <div id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              © Copyright 2016 DPSE-MFPMA 
            </div>
          </div>
      </div>

  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo SCHOOL?>/pattern/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo SCHOOL?>/pattern/js/bootstrap.min.js"></script>
  </body>
</html>