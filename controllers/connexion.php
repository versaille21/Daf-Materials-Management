<?php

	class connexion extends Controller{

		//public $layout = 'start';

		public function index(){

            $d['test'] = 'test';
            $this->set($d);
			$this->render('index');
		// 	//$this->loadModel('directionModel');
        //     if(!Session::get('nom')) {
        
            

		// 	     $d['test'] = 'test';

		// 	     if(isset($_POST['connexion'])){

		// 		if(isset($_POST['matricule'])) 
        //            { $matricule=htmlentities((trim($_POST['matricule'])));
        //               // echo $stocklibmat;
        //            }
        //            else{$matricule = "";}  
                   
        //            if(isset($_POST['mot_passe'])) { $mot_passe=addslashes(trim($_POST['mot_passe']));}
        //            else{$mot_passe = "";}


        //                // Aucun champ n'est vide, on peut enregistrer dans la table 


        //            if(empty($matricule)  OR empty($mot_passe)) 
        //            { 
        //                //echo $famille_mat; echo $refmat; echo $libmat; echo $marquemat; echo $couleur; echo $caracteristik;
        //                $d['champs_vide']='le champs date entrée ne doit pas etre vide pour soumission'; 
        //            }

        //            else{

                  
        //                		$mot_passe = md5($mot_passe);

        //                    	$this->loadModel('agentModel');
        //                   	 // $makemodel_stockModel = $this->stockModel;
        //                    	$tab;
        //                    	$tab['matricule'] = $_POST['matricule'];
                           	
        //                    	$tab['password_crypte'] = $mot_passe;

        //                     //print_r($tab);
        //                     //die();
        //                    	//$tab['password'] = $_POST['mot_passe'];

        //                        //$dataAgent = array();
                               
        //                  		$d['stat_check_agent_by_mat_pwd']= $this->agentModel->searchAgentByMatriculeAndPwd($tab);

        //                         $dataAgent = $d['stat_check_agent_by_mat_pwd'];

        //                         //print_r($dataAgent);


        //                  		if(!empty($dataAgent)){

        //                            foreach ($dataAgent as $valueAgent){
        //                                    $idAgent = $valueAgent->id_Agent; 
        //                                    $matricule = $valueAgent->matricule;
        //                                    $nom = $valueAgent->nom; 
        //                                    $prenom = $valueAgent->prenoms;
        //                                    $nom_prenoms = $nom.' '.$prenom;
        //                                    $id_Service = $valueAgent->id_Service;
        //                                    $slug = $valueAgent->slug;
        //                            } 
                           	       
        //                                Session::set('nom', $nom);
        //                                Session::set('idAgent', $idAgent);
        //                                Session::set('matricule', $matricule);
        //                                Session::set('prenom', $prenom);
        //                                Session::set('nomprenom', $nom_prenoms);
        //                                Session::set('id_Service', $id_Service);
        //                                Session::set('slug', $slug);


                                       
        //                                header('Location:'.SCHOOL.'/dashboard/index');
                                  
                                   

                          			
        //                    	}
        //                    	else{

        //                            //die('viede');

        //                    		$d['stat_exist_deja'] = 'existe deja';

        //                    	}

                       	
                       
        //            }

		// 	}

		// 	$this->set($d);
		// 	$this->render('index');

        //     }
        //     else{
        //        header('Location:'.SCHOOL.'/connexion/index');
        //    }
		}

	}


?>