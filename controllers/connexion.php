<?php

	class connexion extends Controller{

		

        public function newprofile(){

            

            if(!Session::get('nom')){

                $this->loadModel('demandeurModel');
                $d['all_Demandeur'] = $this->demandeurModel->searchAllDemandeur();
                

                if(isset($_POST['register'])){

                 	if(isset($_POST['matricule'])) 
                    { $matricule=htmlentities((trim($_POST['matricule'])));
                       
                    }
                    else{$matricule = "";}  


                    if(isset($_POST['nom'])) 
                    { $nom=addslashes(htmlentities((trim($_POST['nom']))));
                       
                    }
                    else{$nom = "";} 


                    if(isset($_POST['prenoms'])) 
                    { $prenoms=addslashes(htmlentities((trim($_POST['prenoms']))));}
                    else{$prenoms = "";} 

                    
                    if(isset($_POST['id_Demandeur'])) 
                    { $id_Demandeur=addslashes(htmlentities((trim($_POST['id_Demandeur']))));}
                    else{$id_Demandeur = "";} 


                    if(isset($_POST['password'])) 
                    { $password=addslashes(trim($_POST['password']));
                       
                    }
                    else{$password = "";} 


                    
                    if(isset($_POST['confirmpassword'])) 
                    { $confirmpassword=addslashes(trim($_POST['confirmpassword']));
                       
                    }
                    else{$confirmpassword = "";} 


                    if(empty($matricule)  OR empty($nom) OR empty($prenoms) OR empty($password) OR empty($confirmpassword)) 
                    { 
                        echo $matricule; echo $nom; echo $prenoms; echo $password; echo $confirmpassword;
                        $d['champs_vide']='Un ou plusieurs champs vides '; 
                    }
                    else{
                        if(($id_Demandeur)=='vide'){
                            $d['champs_non_selectionne']='champs de saisi non selectionne';
                        }
                        else{

                            $this->loadModel('agentDafModel');
                            $rowNbreAgent = $this->agentDafModel->searchAgentDafByMatricule($matricule);
                            if($rowNbreAgent == 1){
                                if($password == $confirmpassword){
                                    $password_crypte = md5($password);

                                    $this->loadModel('agentModel');
                                    $tab;
                                    $tab['matricule'] = $_POST['matricule'];
                                    $tab['nom'] = $_POST['nom'];
                                    $tab['prenoms'] = $_POST['prenoms'];
                                    $tab['password'] = $password_crypte;
                                    $tab['id_Demandeur'] = $_POST['id_Demandeur'];

                                    $tab['id_role'] = 1 ;

                                    $stat_check_agent_by_mat= $this->agentModel->checkIfAgentExistByMatricule($tab);

                                    if($stat_check_agent_by_mat == 0){
                                        $stat_save_agentModel= $this->agentModel->savedAgent($tab);
        
                                           if(($stat_save_agentModel)=='reussie') {
        
                                            $d['stat_success'] = $stat_save_agentModel;
        
                                        }
                                        else{
                                            $d['stat_fail'] = $stat_save_agentModel;
                                        }
                                    }
                                    else{
        
                                        $d['stat_exist_deja'] = 'existe deja';
        
                                    }
                                }
                                else{

                                    $d['NoIdentique'] ='password et repeat non identique';

                                }



                                }
                                else{
                                    $d['unauthorized'] =' '.$matricule;
                                }
                            }

                        }
                }
                    $d['test'] = 'test';
                    $this->set($d);
                    $this->render('newprofile');

            }
            else{

                header('Location:'.DAFMM.'/dashboard/index');

            }
        }

            
        

		public function index(){

            if(!Session::get('nom')) {

                if(isset($_POST['connexion'])){

                    if(isset($_POST['matricule'])) 
                    { $matricule=htmlentities((trim($_POST['matricule'])));
                       
                    }
                    else{$matricule = "";}


                    if(isset($_POST['mypassword'])) 
                    { $mypassword=addslashes(trim($_POST['mypassword']));
                       
                    }
                    else{$mypassword = "";} 


                    if(empty($matricule)  OR empty($mypassword)) 
                    {
                        $d['champs_vide']='les champs MATRICULE ou MOT DE PASSE ne doivent pas être vide   pour soumission';
                    }
                    else{

                        $mypassword_crypte = md5($mypassword);
                        $this->loadModel('agentModel');

                        $tab;
                        $tab['matricule'] = $matricule;
                           	
                        $tab['mypassword'] = $mypassword_crypte;

                        $d['stat_check_agent_by_mat_pwd']= $this->agentModel->searchAgentByMatriculeAndPwd($tab);

                        $dataAgent = $d['stat_check_agent_by_mat_pwd'];

                        //print_r($dataAgent);
                        //die();

                        if(!empty($dataAgent)){

                            foreach ($dataAgent as $valueAgent){

                                $idAgent = $valueAgent->id_agent; 
                                $matricule = $valueAgent->matricule;
                                $nom = $valueAgent->nom_Agent; 
                                $prenom = $valueAgent->prenoms_Agent;
                                $nom_prenoms = $nom.' '.$prenom;
                                $id_Service = $valueAgent->Id_Demandeur;
                                $slug = $valueAgent->slug;
                            }                                                          
                            Session::set('nom', $nom);
                            Session::set('idAgent', $idAgent);
                            Session::set('matricule', $matricule);
                            Session::set('prenom', $prenom);
                            Session::set('nomprenom', $nom_prenoms);
                            Session::set('id_Service', $id_Service);
                            Session::set('slug', $slug);
                                                           
                            header('Location:'.DAFMM.'/dashboard/index');
                                                      
                                                       
                    
                                                          
                        }
                        else{
                    
                            //die('viede');
                    
                            $d['stat_incorrect_param'] = 'incorrect param';
                    
                        }

                    }

                    
                }
                $d['test'] = 'test';
                $this->set($d);
                $this->render('index');
            }
            else{
                header('Location:'.DAFMM.'/dashboard/index');

            }
				}

	}




?>