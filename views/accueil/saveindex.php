<div class="cAlign2">

<div class="center">
    <!--<a href=" <?php echo SCHOOL ?> "><img class="logo" src="<?php echo SCHOOL ?>img/logo.png" alt=""></a> -->
    <h1 class="logo">Gest Parc Info</h1>

    







</div>

<div id="absPanel">

    <form id="signup-form" class="form-horizontal" action="index" method="POST">
        <h3>Avez-vous un compte ?</h3>

        <div id="zone-true">   
            <span id="true-answ"> Si oui :</span> 
    
        </div>


        <?php if(isset($stat_success)){ ?>
            <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       Inscription terminée <strong><a href="login.php">Connectez </a> </strong> vous .
                </div>
            </div>
        <?php } ?>

        <?php if(isset($stat_fail)){ ?>
<div class="col-md-10 col-lg-12 col-sm-12">
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Erreur </strong> lors de l'Enrégistrement !
    </div>
</div>
<?php } ?> 


<?php if(isset($stat_exist_deja)){ ?>
<div class="col-md-10 col-lg-12 col-sm-12">
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Attention: </strong> Matricule ou Mot de passe incorrect !    </div>
</div>
<?php } ?>



<?php if(isset($champs_vide)){ ?>
<div class="col-md-10 col-lg-12 col-sm-12">
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <strong>Attention: </strong> le champs de saisi est vide !
    </div>
</div>
<?php } ?> 

<?php if(isset($NoIdentique)){ ?>
<div class="col-md-10 col-lg-12 col-sm-12">
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <strong>Attention: </strong> les mots de passe saisis ne sont pas identiques  !
    </div>
</div>
<?php } ?>


<?php if(isset($champs_non_selectionne)){ ?>
<div class="col-md-10 col-lg-12 col-sm-12">
    <div class="alert alert-warning alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <strong>Attention: </strong> Un champs n'a pas été sélectionné !
    </div>
</div>
<?php } ?>


        


          <div class="form-group">
              <label for="matricule" class="col-sm-3 control-label">Matricule</label>
              <div class="col-sm-9" id="zone_mat">
                  
                  <input required name="matricule" 
                    type="text" class="form-control inputconnexion" id="matricule" placeholder="ex: 389535P"  > </div>
          </div>

        


        <div class="form-group">
            <label for="mot_passe" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9" >
                <input required name="mot_passe" type="password" class="form-control inputconnexion" id="inputPassword" placeholder="Entrez votre mot de passe">
            </div>
        </div>



        



        <div class="form-group" id="bttnSubmit">
            <label for="email" class="col-sm-3 control-label"> </label>
            <div class=" col-sm-offset-4 col-sm-3">
                <button type="submit" class="btn btn-primary signup-btn-launch" name="connexion">Se Connecter</button>
                

            </div>
        </div>

        <div id="zone-false">   
            <span id="false-answ"> Sinon : &nbsp; &nbsp; &nbsp; <button type="button" class="btn btn-link"><a href="<?php echo SCHOOL?>/register/index">créer votre compte</a></button></span> 
    
        </div>

    
    </form>



</div>



<div class="right">
<h6>Tous droits reservés MFPMA / DPSE</h6>
</div>
</div>


