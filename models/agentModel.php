<?php
class agentModel extends model{

    
	var $table = "agent";

	
	
	
    public function searchAgentById($param) {

        // Cette methode permet de rechercher le materiel non encore enregistre dans le Stock
        
       
        return $this->find(array(

            
            "fields" => "id_Agent, concat(nom, ' ', prenoms) as nom_Agent",
            
            "conditions" => " id_Service = '".$param."' "

            
           ) 
        );
                
        
    }


    public function searchAgentByMatriculeAndPwd($param){

         

          return $this->find(array(

            "tables" => "agent, roles",

            "fields" => " agent.id_agent, agent.matricule, agent.nom_Agent, agent.prenoms_Agent, agent.Id_Fonction, agent.Id_Demandeur, agent.id_role, roles.slug",

            "conditions" => " agent.id_role = roles.id_role AND matricule = '".$param['matricule']."' and password_Agent = '".$param['mypassword']."'"

           ) 
         
        );

    }


    public function savedAgent($param) {

        global $conneX;
        // Cette methode permet d'enregistrer un agent'
        
       $sql = " INSERT INTO agent (matricule, id_Demandeur, nom_Agent, prenoms_Agent, id_Fonction, id_role,password_Agent)
        VALUES ('".$param['matricule']."', '".$param['id_Demandeur']."' , '".$param['nom']."', '".$param['prenoms']."', '1', '".$param['id_role']."',   '".$param['password']."')
        ";
        
        
        $pre = mysqli_query($conneX, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($conneX));
        // $pre = mysql_query( $sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 

         if ($pre != false){
            $r = "reussie";

         }
         else{
            $r = "echec"; 
         }
        
        return $r; 
                
        
    }


    public function checkIfAgentExistByMatricule($param){
        global $conneX;
        $sql ="SELECT * from agent where matricule = '".$param['matricule']."' ";

        $pre = mysqli_query($conneX, $sql);
        $rows = mysqli_num_rows($pre);

        if ($rows == 0) {
            $r = 0;
            return $r;
        }
        else{
            $r = 1;
            return $r;
        }



    }


    public function checkIfAgentExistByMatriculeAndPasswd($param){

        $sql ="SELECT * from agent where matricule = '".$param['matricule']."' and passwd_crypte = '".$param['password_crypte']."' ";

        $pre = mysql_query($sql);
        $rows = mysql_num_rows($pre);

        if ($rows == 0) {
            $r = 0;
            return $r;
        }
        else{
            $r = 1;
            return $r;
        }



    }


    
    public function searchAgentBySession() {

        // Cette methode permet de rechercher le materiel non encore enregistre dans le Stock
        $agent=Session::get('matricule');
        return $this->find(array(

            "tables" => "agent, service, direction",
            "fields" => "id_Agent, matricule, lib_Direction, lib_service, fonction, concat(nom, ' ', prenoms) as nom_Agent",
            "conditions" => " agent.id_Service = service.id_Service AND direction.id_Direction = service.id_Direction AND matricule = '".$agent."' "

            
           ) 
        );
                
        
    }

    function verifAncienPwd($ancienPasse){
    $sql="SELECT * FROM agent WHERE `passwd_crypte`='".md5($ancienPasse)."' and `matricule`='".Session::get('matricule')."'" ;
    //print($sql);
    
    //die();
    

    $pre=mysql_query($sql);
    $rows = mysql_num_rows($pre);
    
        if ($rows == 0) {
            $r = 0;
            return $r;
        }
        else{
            $r = 1;
            return $r;
        }
    }

    function updatePasswd($param){
        $sql = "UPDATE `bd_parc_info`.`agent` SET  `passwd_crypte` =  '".md5($_POST['motPasse'])."', `mot_de_passe` = '".$_POST['motPasse']."' WHERE  `agent`.`matricule` ='".Session::get('matricule')."' ";
         $pre = mysql_query($sql) ;

         if ($pre != false){
            $r = "reussie";

         }
         else{
            $r = "echec"; 
         }
        
        return $r; 

        
    }




}





