<?php 
	

class deconnexion extends Controller
{

		function index(){
		
		
			Session::destroy();
			header('Location:'.DAFMM.'/connexion/index');

	}
	
	
}



?>