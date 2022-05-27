<?php

function debug($var){

	$debug = debug_backtrace();
	echo '<p>&nbsp;</p><p><a href="#" onclick=$(this).parent().next(\'ul\').slideToggle();><strong>'.$debug[0]['file'].'</strong> L - '.$debug[0]['line'].'</a></p>';
	echo '<ol style="display=none">';
	foreach ($debug as $k=>$v) {
		if ($k>0) {
			echo'<li><strong>'.$v['file'].'</strong> L -'.$v['line'].'</li>';
		}
	}
	echo '</ol>';
	echo '<pre>';
	print_r($var);
	echo '</pre>';

}


function writeHere($txt){
	echo htmlentities($txt, ENT_QUOTES, 'iso-8859-1');
}


function get_uuid($slug, $class){


}

function check_Post($p){

	if( empty($p) ){ 
		return false; 
	}else{
		return true;
	}

}


function redirect($l){
	debug(BUSITICKA.$l);
	header("Location: ".BUSITICKA.$l);
}


//Function that compute the sale start/end dates
function getSaleDate( $d, $j, $h ){
	$d = str_replace('/', '-', $d);
	$SaleDate = new DateTime($d, new DateTimeZone('Africa/Abidjan') );
	$SaleDate->modify("-$j days"); 
	//$SaleDate->modify("-$h hours");

	return $SaleDate->format("Y-m-d h:i:s");
	
}

function DateToString($d){
	$date = new DateTime("$d");	
	// 	YY ":" MM ":" DD " " HH ":" II ":" SS 	"2008:08:07 18:11:31"
	// 18/07/2014 00:00
	return $date->format("d/m/Y H:i");
	//return $date->format("j F Y g:i");
}

function fromDBtoDateString($d){
	$date = new DateTime("$d");	
	return $date->format("d/m/Y");
}

function fromDBtoTimeString($d){
	$date = new DateTime("$d");	
	return $date->format("H:i");
}
// function today(){
	
// }

function uploadFichier($tmp, $name){

	if( !move_uploaded_file ($tmp, CDN.$name ) ){
		return false;
	}else{
		
		//$extensionsAutorisees = array(".jpeg", ".jpg", ".png", ".gif");
		$namefile = $name;

		$extension = substr($namefile, strrpos($namefile, "."));
		$date =date("YmdHisu");
		$newname = sha1("F**CKME".sha1('you')."NOWIGOTIT").$date.$extension;
		
		//rename("../uploads/".sha1($_SESSION["AUTH"]["id"])."/".sha1($_SESSION["AUTH"]["album"])."/".$_FILES["../images"]["name"][$key], 
		//"../uploads/".sha1($_SESSION["AUTH"]["id"])."/".sha1($_SESSION["AUTH"]["album"])."/".$newname))

		if(rename ( CDN.$name ,CDN.$newname ) ){
			return $newname;
		}else{
			print_r('error');
		}

		
	}

}


function deletefile($filename){
	//define('DS', DIRECTORY_SEPARATOR);
	//define('CDN','C:'.DS.'xampp'.DS.'htdocs'.DS.'CDN'.DS);
	$dir = CDN;
	$obj = new stdClass();
	if( file_exists($dir.$filename) ){
		if( unlink( $dir.$filename ) ) { //$dir.'/'.$filename  not work 

			if( file_exists($dir.'thumbs'.DS.'sh_desk'.DS.$filename) ){
				unlink( $dir.'thumbs'.DS.'sh_desk'.DS.$filename ) or die("Not Delete File");
			}
			
			
			$obj->result = true;
		}else{
			$obj->result = false;
		}
	}else{
		debug('le chemin est introuvalbe');
		$obj->result = false;
	}

	
	return $obj;

}

/**
* This function take a local time set by user and give the date UTC(GMT) according this given date
* @var : Date $date date set by user
*/
function LocalToUtc($d){

	$d = str_replace('/', '-', $d);
	//debug($d);

	$time_zone = "UTC";

	@@Session::start();

	if( Session::get('org_time_zone') != null &&  Session::get('org_time_zone') != '' ){
		//$time_zone = Session::get('org_time_zone');
	}

	//date_default_timezone_set($time_zone);

	//debug('UTC_Time Zone: '.date_default_timezone_set("UTC"));

	$date = new DateTime($d , new DateTimeZone($time_zone));
	$difftime = $date->format("P"); //get the difference with GMT and apply a negative $difftime = $date->format("P")*(-1);
	$difftime = (int)$difftime; //Most Important
	//debug('DIFF_TIME :' .$difftime);
	$date->modify("$difftime hours");

	return $date->format("Y-m-d H:i:s (P)");

}


/*DATE FORMAT*/

function getTheDay($d, $t){
	$date = new DateTime("$d", new DateTimeZone("$t"));
	return Conf::$days_FR[$date->format("N")];
}

function getTheMonthTxt($d, $t){
	$date = new DateTime("$d", new DateTimeZone("$t"));
	return Conf::$months_FR[$date->format("m")];
}

function getTheDM_Y($d, $t){
	$date = new DateTime("$d", new DateTimeZone("$t"));
	return $date->format('d').' '.getTheMonthTxt($d, $t).', '.$date->format('Y');
}

function getH_M($d, $t){
	$date = new DateTime("$d", new DateTimeZone("$t"));
	return $date->format("H:m");
}

function sameDate($d1, $d2, $t){
	$date1 = new DateTime("$d1", new DateTimeZone("$t"));
	$date2 = new DateTime("$d2", new DateTimeZone("$t"));

	return $date1->format('Y-m-d') == $date2->format('Y-m-d') ? true : false ;
}


?>
