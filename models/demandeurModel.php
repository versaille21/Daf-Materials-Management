<?php
class demandeurModel extends model{

	var $table = "demandeur";

	
	public function searchAllDemandeur() {

        // Cette methode permet de rechercher les services du système    
        return $this->find(array(
            
            
            
           ) 
        );
                
        
    }
	
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

            "fields" => " agent.id_Agent, agent.matricule, agent.nom, agent.prenoms, agent.fonction, agent.id_Service, agent.id_role, roles.slug",

            "conditions" => " agent.id_role = roles.id_role AND matricule = '".$param['matricule']."' and passwd_crypte = '".$param['password_crypte']."'"

           ) 
         
        );

    }


    public function savedAgent($param) {

        // Cette methode permet de rechercher le materiel non encore enregistre dans le Stock
        
       $sql = " INSERT INTO agent (matricule, nom, prenoms, passwd_crypte, mot_de_passe, id_service, id_role)
        VALUES ('".$param['matricule']."', '".$param['nom']."', '".$param['prenom']."',  '".$param['password_crypte']."', '".$param['password']."', '".$param['lib_Service']."', '".$param['id_role']."')
        ";
        
    
         $pre = mysql_query( $sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 

         if ($pre != false){
            $r = "reussie";

         }
         else{
            $r = "echec"; 
         }
        
        return $r; 
                
        
    }


    public function checkIfAgentExistByMatricule($param){

        $sql ="SELECT * from agent where matricule = '".$param['matricule']."' ";

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





