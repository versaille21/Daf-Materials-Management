<?php
class agentDafModel extends model{

	var $table = "agent_daf";

	
	
	
    public function searchAgentDafByMatricule($param) {
        global $conneX;
    	$sql=" select * from agent_daf where matricule= '".$param."' ";
    	//echo $sql;
    	///die();
    	$req=mysqli_query($conneX, $sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($conneX));
        
        

    	$r=mysqli_num_rows($req);
    	//echo $r;
    	//die();
    	if ($r>=1)
    	{
    		$r=1;
    		
    		return $r;

    	}
    	else
    	{
    		$r=0;
    		

    		return $r;
    	}
    }
}
