<?php
    class dashboard extends Controller{

        public function index(){
            
            if(Session::get('nom')){

                $d['test'] = 'test';

                /* $this->loadModel('sortieModel');
                    $this->loadModel('demandemodel');

                    $d['affichage']= $this->demandemodel->affichagedemandeByNomAgent(Session::get('nomprenom'));
                    $d['countDemande']= $this->demandemodel->countdemandeByNomAgent(Session::get('nomprenom'));
                    $d['stat_all_mat_attribue']= $this->sortieModel->searchAllMaterielTypeAttribuateNotEndByAgent(Session::get('idAgent'));
                    $d['stat_all_mat_emprunte']= $this->sortieModel->searchAllMaterielEmprunteNotEndByAgent(Session::get('idAgent')) ;
                    $d['count_all_mat_emprunte']= $this->sortieModel->CountAllMaterielEmprunteNotEndByAgent(Session::get('idAgent'));
                    $d['count_all_mat_attribue']= $this->sortieModel->CountAllMaterielAttribuateNotEndByAgent(Session::get('idAgent'));*/
                    //////// lien qvec Session..get
            

                $this->set($d);
                $this->render('index');
            }
            else{
                header('Location:'.DAFMM.'/connexion/index');
            }

        }
        
    }

?>