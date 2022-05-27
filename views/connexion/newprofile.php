
    <div class="wow fadeInUp">
      <div class="section-header">
          <h2>Créer mon compte ..</h2>

          
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                  <strong>Je crée mon compte !</strong>
                  <br> 
                     Veuillez renseigner le formulaire ci-dessous pour créer votre compte !

                  <br> 
                    
                    
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
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
                    <form name="sentMessage" class="" id="contactForm"  novalidate> 

                        
                        <fieldset class="border p-4">
                            <legend class="w-auto">S'inscrire ....</legend>

                          

                                  <label for="matricule"> <b>Matricule :</b> </label>
                                  <input type="text" class="form-control" 
                                      placeholder="Ex : 389534X" id="matricule" required
                                      />
                                    

                                    <label for="nom"> <b>Nom :</b> </label>
                                  <input type="text" class="form-control" 
                                      placeholder="NOM" id="nom" required
                                      />


                                      <label for="prenoms"> <b>Prénoms :</b> </label>
                                  <input type="text" class="form-control" 
                                      placeholder="PRENOMS" id="prenoms" required
                                      />


                                      
                                    <label for="lib_Service"> <b>Service :</b> </label>
                                   <select class="form-control select2" name="lib_Service" id="lib_Service" style="width: 100%;">
                                    <option selected="selected" >Selectionnez votre service</option>
                                    
                                      <option value="" label="SAI"> SAI </option>  
                                      <option value="" label="SEAI"> SEAI </option>  
                                      <option value="" label="SMA"> SMA </option>  
                                    
                                  </select> 
           
                

                             

                          

                                  <label for="motdepasse"> <b>Mot de passe :</b> </label>
                                  <input type="password" class="form-control" placeholder="" 
                                      id="motdepasse" required
                                       />


                                   <label for="confmotdepasse"> <b>Confirmation du mot de passe :</b> </label>
                                  <input type="password" class="form-control" placeholder="" 
                                      id="confmotdepasse" required
                                       />
                            
        
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

                            <button type="submit" class="btn btn-primary pull-right appButton">S' inscrire</button><br />
                        </fieldset>
                  </form>
                </div>

              </div>
          </div>
        </div>

    </div>


