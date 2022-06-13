
    <div class="wow fadeInUp">
      <div class="section-header">
          <h2>Créer mon compte ..</h2>


          <?php if(isset($stat_success)){ ?>
                    &nbsp;&nbsp;&nbsp;
        			<div class="col-md-10 col-lg-12 col-sm-12">
            		<div class="alert alert-success alert-dismissable">
              			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               				Inscription terminée <strong><a href="login.php">Connectez </a> </strong> vous .
            			</div>
        			</div>
        		<?php } ?>

        		<?php if(isset($stat_fail)){ ?>
                    &nbsp;&nbsp;&nbsp;
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Erreur </strong> lors de l'Enrégistrement !
            </div>
        </div>
        <?php } ?> 


        <?php if(isset($stat_exist_deja)){ ?>
            &nbsp;&nbsp;&nbsp;
        

            <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i> Attention !</h5>
                                    <strong>Attention: </strong> Identifiant ou mot de passe incorrect ! 
                                    
            </div>

        <?php } ?>


        <?php if(isset($unauthorized)){ ?>
            &nbsp;&nbsp;&nbsp;
        
            <div class="col-md-10 col-lg-12 col-sm-12">
              <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i> Attention !</h5>
                                    
                                    <strong>Attention: </strong> Vous ( <strong><?php echo $unauthorized ?> ) </strong> n'êtes pas authorisé à créer votre compte ! 
                                    
              </div>
            </div>

        <?php } ?>



        <?php if(isset($champs_vide)){ ?>
            &nbsp;&nbsp;&nbsp;
       
        <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-ban"></i> Attention !</h5>
                                        <strong>Attention: </strong> Un ou plusieurs champ(s) de saisie est/sont vide !                                    
            </div>

        
        <?php } ?> 

        <?php if(isset($NoIdentique)){ ?>
            &nbsp;&nbsp;&nbsp;
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <strong>Attention: </strong> les mots de passe saisis ne sont pas identiques  !
            </div>
        </div>
        <?php } ?>


        <?php if(isset($champs_non_selectionne)){ ?>
            &nbsp;&nbsp;&nbsp;
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <strong>Attention: </strong> Un champ n'a pas été sélectionné !
            </div>
        </div>
        <?php } ?>

          
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                  <strong>Je crée mon compte !</strong>
                  <br> 
                     Veuillez renseigner le formulaire ci-dessous pour créer votre compte !

                  <br> 
                    
                    
                  
              </div>
                    
        </div>
        <div class="row">
          <div class="col-lg-6 about-img">

            <div class="container">
            
              <img src="<?php echo DAFMM ?>/images/intro-carousel/sinscrire.svg" alt=""> 
            </div>

          </div>

          <div class="col-lg-6 content" >
            <div class="container">

                <div class="loginContent"> 
      
                    <!-- Form itself -->
                    <form name="sentMessage" action="newprofile" method="POST" class="" id="contactForm"  > 

                        
                        <fieldset class="border p-4">
                            <legend class="w-auto">S'inscrire .....</legend>

                          
                            <div class="form-group">
                                  <label for="matricule"> <b> <span class="fieldRequired">*</span> Matricule :</b> </label>
                                  <input type="text" class="form-control" 
                                      placeholder="Ex : 389534X" name="matricule" id="matricule" required
                                      />
                            </div>
                                    
                            <div class="form-group">
                                    <label for="nom"> <b><span class="fieldRequired">*</span> Nom :</b> </label>
                                  <input type="text" class="form-control" 
                                      placeholder="NOM" id="nom" required name="nom" 
                                      />
                            </div>

                            <div class="form-group">
                                      <label for="prenoms"> <b><span class="fieldRequired">*</span> Prénoms :</b> </label>
                                  <input type="text" class="form-control" 
                                      placeholder="PRENOMS" id="prenoms" required name="prenoms"
                                      />
                            </div>

                            <div class="form-group">          
                                    <label for="lib_Service"> <b> <span class="fieldRequired">*</span>Service :</b> </label>
                                   <select class="form-control select2" name="id_Demandeur" id="id_Demandeur" style="width: 100%;">
                                    <option selected="selected" value="vide">Selectionnez votre service</option>

                                    <?php  foreach ($all_Demandeur as $libdir)  {?>
                                      <option value="<?php echo $libdir->Id_Demandeur ?>" label="<?php echo $libdir->lib_demandeur ?>"> <?php echo $libdir->lib_demandeur ?> </option>  
                                     <?php } ?>
                                    
                                     
                                    
                                  </select> 
                            </div>
           
                

                             

                          
                            <div class="form-group"> 
                                  <label for="motdepasse"> <b><span class="fieldRequired">*</span> Mot de passe :</b> </label>
                                  <input type="password" class="form-control" placeholder="" 
                                      id="motdepasse" required name="password"
                                       />
                            </div>
                            <div class="form-group"> 
                                   <label for="confmotdepasse"> <b><span class="fieldRequired">*</span> Confirmation du mot de passe :</b> </label>
                                  <input type="password" class="form-control" placeholder="" 
                                      id="confmotdepasse" required name="confirmpassword"
                                       />
                            </div>
        
                        <!-- <div class="form-group">
                              <div class="controls">
                                  <textarea rows="10" cols="100" class="form-control" 
                                      placeholder="Message" id="message" required
                                      data-validation-required-message="Please enter your message" minlength="5" 
                                      data-validation-minlength-message="Min 5 characters" 
                                      maxlength="999" style="resize:none">
                                      
                                  </textarea>
                              </div>
                        </div>   -->
                          <br>
                          <div id="success"> </div> <!-- For success/fail messages -->
                            <span> <i> J'ai déjà un compte ! </i> </span> <br>
                            
                            <span style="color:#ff5722;"> <a href="<?php echo DAFMM ?>/connexion/index" >Je me connecte ! </a> </span>

                            <button type="submit" name="register" class="btn btn-primary pull-right appButton">S' inscrire</button><br />
                        </fieldset>
                  </form>
                </div>

              </div>
          </div>
        </div>

    </div>


