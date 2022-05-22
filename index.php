<?php

define('WEBROOT',str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

define('SCHOOL', 'http://'.$_SERVER['HTTP_HOST'].'/assetmanagement');
define('LADATE', date("Y-m-d"));
define('LHEURE', date("H:i:s"));
define("DATEHEURE", date("Y-m-d H:i:s"));


//echo DATEHEURE;
//phpinfo();
//die();
//echo SCHOOL;
//print_r($_SERVER);
include_once(ROOT.'/core/Session.php');
	Session::start();
	//die('assoua');
	
	/*if(!$_POST){
		header('Location:'.SCHOOL);//header("Location: ".SCHOOL."/connexion/index");
	}else{
		//debug($_POST);
		//debug($_FILES);
	}*/

require(ROOT.'/core/controller.php');
require(ROOT.'/core/model.php');
include_once(ROOT.'/core/config.php');

/*mysql_connect('192.168.4.71', 'assoua', '' );
mysql_select_db('bd_parc_info');
mysql_query("SET NAMES UTF8");*/

$param = explode('/', $_GET['p']);

$controller = $param[0];
if(empty($controller)){
	//die('vide');
	header('Location:'.SCHOOL.'/connexion/index');//header("Location: ".SCHOOL."/connexion/index");
		
}
//die('Amab');
$action = isset($param[1]) ? $param[1] : 'index';





require('controllers/'.$controller.'.php');

$controllerUsed = new $controller();
if (method_exists($controllerUsed, $action)){
$controllerUsed->$action();

}
else{
    echo 'Erreur 404';
}




