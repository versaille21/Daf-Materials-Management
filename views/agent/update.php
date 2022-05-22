
    <div class="cbody">
        <h2 class="titlecontent-center"> Modification des informations personnelles </h2>
    <div class="row contentmenu">
      <!--  <div class="titlecontent-right"> <h2> Inscrire un Elève  </h2></div> -->
        
        <?php if(isset($stat_success)){ ?>
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               Mot de passe modifié avec <strong>Succès !</strong> 
            </div>
        </div>
        <?php } ?>



        <?php if(isset($stat_fail)){ ?>
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               Attention: <strong>Erreur </strong> lors de l'Enrégistrement !
            </div>
        </div>
        <?php } ?>
        

        
                <?php if(isset($champs_vide)){ ?>
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <strong>Attention: </strong> les champs ne doivent pas etre vide pour soumission !
            </div>
        </div>
        <?php } ?>


        <?php if(isset($champs_remplis)){ ?>
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <strong>Attention: </strong> Ancien mot de passe incorrecte </div>
        </div>
        <?php } ?>

        <?php if(isset($champs_different)){ ?>
        <div class="col-md-10 col-lg-12 col-sm-12">
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <strong>Attention: </strong> les deux mot de passe sont differents </div>
        </div>
        <?php } ?>



        <div class="col-md-10 col-lg-12 col-sm-12">
        <div class="alert alert-info" role="alert">Veuillez s'il vous plait remplir ce formulaire avec les informations correctes </div>
        </div>
        
        </div>
        
        <div>

         <form class="form-horizontal formCenter" method="POST" action="update">


            <div class="form-group">
              <label for="inputPassword" class="col-sm-3 control-label" style="white-space:nowrap;">Ancien mot de passe:</label>
              <div class="col-md-7 col-sm-9">
                 <input type="text" class="form-control" name="ancienPasse" id="date_fin_usage">
              </div>
            </div>
            

            <div class="form-group">
              <label for="inputPassword" class="col-sm-3 control-label" style="white-space:nowrap;">Nouveau mot de passe:</label>
              <div class="col-md-7 col-sm-9">
                 <input type="password" class="form-control" name="motPasse" id="date_fin_usage">
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputConfirmPassword" class="col-sm-3 control-label" style="white-space:nowrap;">Confirmer mot de passe:</label>
              <div class="col-md-7 col-sm-9">
                 <input type="password" class="form-control" name="passConfirm" id="date_fin_usage">
              </div>
            </div>
            
            
          <div class="form-group">
            <div class="posiButton  col-md-offset-8 " >
              <button id="saveUpdate" name="saveUpdate"  type="submit" class="btn btn-primary">Enrégistrer</button>
            </div>
          </div>
      </form>

    </div>



<!-- <h2> Bonjour <?php// echo $Etud->nom ?>  </h2> -->
        

    </div>
    
    
    

    
