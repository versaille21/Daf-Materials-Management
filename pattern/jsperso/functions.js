var PRODUCTION_ZONE = 'default';
var ROOT='';

switch(PRODUCTION_ZONE){
	case 'production' 	: ROOT = 'http://'+document.location.host;
						  SWITCH_URL = '/core/Switch.php';
						  break;

	case 'training'		: ROOT = 'http://'+document.location.host+'/trycodipost';
						  SWITCH_URL = '/trycodipost/core/Switch.php';
						  break;

	case 'development'		: ROOT = 'http://'+document.location.host+'/codipost';
						  SWITCH_URL = '/codipost/core/Switch.php';
						  break;

	default 			: ROOT = 'http://localhost/parc/';
	 					  SWITCH_URL = '../core/Switch.php';
						  break;

}



function callModel( model, func, params, callback ){

	var aj = $.ajax({
				beforeSend : function(req){
					//action before launch ajax
				},
				type : "POST",
				url	 : '../core/Switch.php' ,
				data : {
							model 	: model,
							func 	: func,
							params 	: params
						},
				dataType : 'json'

			})
	        .always(function(data){
	        	//alert( "first complete model" );
			})
			.done (function(data, textStatus, jqXHR) {
				//alert("Success: " + response);
			})
			.fail (function(data, textStatus, jqXHR) {
				//alert("Success: " + response);
			})
			

	return aj;

}


function callModelText( model, func, params, callback ){

	var aj = $.ajax({
				beforeSend : function(req){
					//action before launch ajax
				},
				type : "POST",
				url	 : '../core/Switch.php' ,
				data : {
							model 	: model,
							func 	: func,
							params 	: params
						},
				dataType : 'json'

			})
	        .always(function(data){
	        	//alert( "first complete model" );
			}).responseText;

	return aj;

}


function callControl(controller, func, params, callback){
	var aj = $.ajax({
				beforeSend : function(req){
					//action before launch ajax
				},
				type : "POST",
				url: SWITCH_URL,
				data : {
							controller 	: controller,
							func 	: func,
							params 	: params
						},

				dataType: "json"

			})
	        .always(function(data){
				//alert( "first complete controller" );
				
			});
	return aj;

	
}


function dateToForm(date){
	var formated_date = "";
	var _d = new Date(date.toString());
	var jj = _d.getDate() < 10 ? '0'+_d.getDate() : _d.getDate() ;
	var mm = _d.getMonth() < 10 ? '0'+_d.getMonth() : _d.getMonth() ;
	var yyyy = _d.getFullYear() ;
	formated_date = jj+'/'+mm+'/'+yyyy;
	return formated_date ;
}

//Check if an val is in array
function in_array(val, array){
 	if( array.indexOf(val) > -1  ){ 
 		return true; 
 	}else{
 		return false;
 	}
}