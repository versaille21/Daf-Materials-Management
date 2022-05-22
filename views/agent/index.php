
    <div class="cbody">
        <h2 class="titlecontent-center"> Informations personnelles  </h2>
    <div class="row contentmenu">
      <!--  <div class="titlecontent-right"> <h2> Inscrire un Elève  </h2></div> -->
        
        <div class="col-md-10 col-lg-12 col-sm-12">
        <div class="alert alert-success" role="alert">Depuis cette rubrique, Vous pourrez voir vos informations personnelles</div>
        </div>
        
        </div>
 
 
 
       
        <div>

         <form class="form-horizontal formCenter" method="POST" action="suivi">

            <div class="panel panel-info">
               <div class="panel-heading"> Informations personnelles </div>
                  
      <!---->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
  <tr>
    <td rowspan="2"><img src="<?php echo SCHOOL;?>/images/aucun.jpg" width="130" align="left" /></td>
    <td align="left">
    <?php foreach ($matricule as $value){ ?>
<ul class="list-group">
  <li class="list-group-item"><strong>Nom et prenom(s)</strong> : <?php echo $value->nom_Agent; ?></li>
  <li class="list-group-item"><strong>Matricule</strong> : <?php echo $value->matricule; ?></li>
  <li class="list-group-item"><strong>Fonction</strong> : <?php echo $value->fonction; ?></li>
  <li class="list-group-item"><strong>Direction</strong> : <?php echo $value->lib_Direction; ?></li>
  <li class="list-group-item"><strong>Service</strong> : <?php echo $value->lib_service; ?></li>
</ul>    
<?php } ?>
</td>
  </tr>
  <tr>
    <td><div class="list-group"><button type="button" class="list-group-item"><a href="<?php echo SCHOOL?>/agent/update/<?php //echo $value->id_Agent; ?>"><strong>MODIFIER LE MOT DE PASSE</strong></a></button></div></td>
  </tr>
</table>

<!---->            
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
               
            </div>



      </form>


    </div>



<!-- <h2> Bonjour <?php// echo $Etud->nom ?>  </h2> -->
      <!--   <br>
        <P> <h3>
            tu vas bien j'espere ! </h3></p>

            
            <p> <?php  //foreach ($EtudAll as $et)  {?>
            <h3> <?php //echo $et->matricule ?> </h3>
            <?php //} ?>
 -->
    </div>
    
    
    

    
