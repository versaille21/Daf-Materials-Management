
    <div class="wow fadeInUp">
      <div class="section-header">
          <h2>Accéder à mon espace ..</h2>

          <?php if(isset($stat_incorrect_param)){ ?>
            &nbsp;&nbsp;&nbsp;
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Attention: </strong> Matricule ou Mot de passe incorrect !    </div>
        </div>
        <?php } ?>



        <?php if(isset($champs_vide)){ ?>
            &nbsp;&nbsp;&nbsp;
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <strong>Attention: </strong> Les champs MATRICULE ou MOT DE PASSE ne doivent pas être vide !
            </div>
        </div>
        <?php } ?> 

          
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                  <strong>Avez-vous un compte ?</strong>
                  <br> 
                    <span style="color:green;"> <b> <i class="icon ion-ios-checkmark-outline" style="color:green;"></i> Si Oui !</span></b> Veuillez renseigner vos accès et cliquez sur le bouton <span class="badge badge-warning"> <i>Se connecter </i> 
                    </span>

                  <br> 
                    <span >  <b> <i class="icon ion-ios-checkmark-outline" style="color:#0c5460;"></i> Sinon ! </span></b> Veuillez le créér en cliquant sur le bouton   <span class="badge badge-info"> <i>Je crée mon compte</i> 
                    </span> 
                    </span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                    
        </div>
        <div class="row">
          <div class="col-lg-6 about-img">

            <div class="container">
            
              <img src="<?php echo DAFMM ?>/images/intro-carousel/create-profile.svg" alt=""> 
            </div>

          </div>

          <div class="col-lg-6 content" >
            <div class="container">

                <div class="loginContent"> 
      
                    <!-- Form itself -->
                    <form name="ConnexionForm" class="" id="ConnexionForm"  method="POST"> 

                        
                        <fieldset class="border p-4">
                            <legend class="w-auto">Se Connecter ....</legend>

                          

                                  <label for="matricule"> <b> <span class="fieldRequired">*</span> Mon Matricule :</b> </label>
                                  <input type="text" class="form-control" 
                                      placeholder="Ex : 389534X" id="matricule" name="matricule" required
                                      />
                                    

                             

                          

                                  <label for="motdepasse"> <b><span class="fieldRequired">*</span> Mon Mot de passe :</b> </label>
                                  <input type="password" class="form-control" placeholder="" 
                                      id="motdepasse" required name="mypassword"
                                       />
                            
        
                        
                          <br>
                          <div id="success"> </div> <!-- For success/fail messages -->
                            <span> <i> Je n'ai pas de compte ? </i> </span> <br>
                            
                            <span style="color:#ff5722;"> <a href="<?php echo DAFMM ?>/connexion/newprofile" >Je crée mon compte </a> </span>

                            <button type="submit" name="connexion" class="btn btn-primary pull-right appButton">Se connecter</button><br />
                        </fieldset>
                  </form>
                </div>

              </div>
          </div>
        </div>

    </div>


