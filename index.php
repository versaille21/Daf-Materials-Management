<?php

//die('amab');

define('WEBROOT',str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

define('DAFMM', 'http://'.$_SERVER['HTTP_HOST'].'/assetmanagement');
 define('LADATE', date("Y-m-d"));
// define('LHEURE', date("H:i:s"));
 define("DATEHEURE", date("Y-m-d H:i:s"));



//echo DATEHEURE;
//phpinfo();
//die();
//define("ANNEE", '2016');


//echo DATEHEURE;
//phpinfo();
//die();
//echo ROOT;
//die();
//print_r($_SERVER);
include_once(ROOT.'/core/Session.php');
	Session::start();
	//die('assoua');
	

	
	/*if(!$_POST){
		header('Location:'.SUIDEP);//header("Location: ".SUIDEP."/connexion/index");
	}else{
		//debug($_POST);
		//debug($_FILES);
	}*/

require(ROOT.'/core/controller.php');
require(ROOT.'/core/model.php');
include_once(ROOT.'/core/config.php');

//$anneeEncours = model::AnneeEncours();
// define('ANNEEENCOURS', $anneeEncours->lib_annee);
// define('IDANNEEENCOURS', $anneeEncours->id_annee);

// echo ANNEEENCOURS;
// echo IDANNEEENCOURS;
// die();





/*mysql_connect('192.168.4.71', 'assoua', '' );
mysql_select_db('bd_parc_info');
mysql_query("SET NAMES UTF8");*/

$param = explode('/', $_GET['p']);

$controller = $param[0];
if(empty($controller)){
	header('Location:'.DAFMM.'/accueil/index');//header("Location: ".SUIDEP."/connexion/index");
		//die('vide');
}
$action = isset($param[1]) ? $param[1] : 'index';





require('controllers/'.$controller.'.php');

$controllerUsed = new $controller();
if (method_exists($controllerUsed, $action)){
$controllerUsed->$action();

}
else{
    echo 'Erreur 404';
}


?>


<script type='text/javascript'>
	
    
    var dateTimeHeure = "<?php echo DATEHEURE; ?>";
    var date = "<?php echo LADATE; ?>";

</script>




