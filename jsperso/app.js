$(document).ready( function()
{ 


	$('#dateProb').hide(0);

	//alert('bonjour');

  	 $('#lib_Mouv').change(function()
  	 {
  	 	$('#dateProb').hide(0);
  	 	//alert('bonjour');

  	 	var lib_Mouv = $('#lib_Mouv').val();
  	 	//alert(lib_Mouv);
  	 	if (lib_Mouv=='2'){
  	 		$('#dateProb').show(0);
  	 	

  	 }
  	});


	$("#famille_name_mat").change(function() {

		var name_famille_mat =  $("#famille_name_mat").val();
		if((name_famille_mat)== 'vide'){
			alert("Veuillez sélectionner une Famille de Materiel SVP !!! ");
		}
	});


	$('#materielbyAgent').change(function(){
		var id_Agent =  $("#materielbyAgent").val();
		$('.resltMatByAgent').remove();
		if((id_Agent)=='vide'){
			selectMat();
		}else{
			//alert(id_Agent);
			selectMatByIdAgent(id_Agent);
		}
	});
	
function selectMatByIdAgent(id_Agent){
	

	var aj = callModel(
		'sortieModel', 
		'searchAllMaterielAttribuateNotEndByAgent',		
		 id_Agent,		 	
		 null
		);

	aj.always(function(data){
    //alert(JSON.stringify(data));

		var result = [];

		var result = data;
		//alert(result);
		console.log(result);
		
		$.each(result, function(i){
        var ireference = result[i].num_reference;
        var imateriel = result[i].lib_Materiel;
        var imov = result[i].lib_mouv;
        var inom = result[i].nom;
        var idatereception = result[i].date_reception;

        $("#resltMat").append('<tr class="resltMatByAgent"><td>'+ireference+'</td> <td>'+imateriel+'</td> <td>'+imov+'</td> <td>'+inom+'</td> <td>'+idatereception+'</td></tr>');        
        });
});


}


function selectMat(){
	

	var aj = callModel(
		'sortieModel', 
		'searchAllMaterielAttribuateNotEnd',		
		 null,		 	
		 null
		);

	aj.always(function(data){
    //alert(JSON.stringify(data));

		var result = [];

		var result = data;
		//alert(result);
		console.log(result);
		
		$.each(result, function(i){
        var ireference = result[i].num_reference;
        var imateriel = result[i].lib_Materiel;
        var imov = result[i].lib_mouv;
        var inom = result[i].nom;
        var idatereception = result[i].date_reception;

        $("#resltMat").append('<tr class="resltMatByAgent"><td>'+ireference+'</td> <td>'+imateriel+'</td> <td>'+imov+'</td> <td>'+inom+'</td> <td>'+idatereception+'</td></tr>');        
        });
});	

	}




	$("#lib_Direction").change(function() {
		$('#lib_Service').val("");
		$('#lib_Service > option').remove();

		$('#lib_Agent').val("");
		$('#lib_Agent > option').remove();

		var name_famille_mat =  $("#lib_Direction").val();
		//alert(name_famille_mat);
		selectservice(name_famille_mat);
		/*if((name_famille_mat)== 'vide'){
			alert("Veuillez sélectionner une Famille de Materiel SVP !!! ");
		}*/
	});



	$("#lib_Service").change(function() {
		
		$('#lib_Agent').val("");
		$('#lib_Agent > option').remove();

		var id_service =  $("#lib_Service").val();
		//alert(id_service);
		selectAgentbyService(id_service);
		/*if((name_famille_mat)== 'vide'){
			alert("Veuillez sélectionner une Famille de Materiel SVP !!! ");
		}*/
	});



	$("#famlledispostock").change(function() {
		
		var id_Famille =  $('#famlledispostock').val();
			
		$('.rowFamille').remove();

		if(id_Famille=='vide'){

				selectAllMatDispo();
		}else{
				selectMatDispoByIdFamille(id_Famille);
		}

		
	});






	$("#savematerielsss").click(function(){

		var name_famille_mat =  $("#famille_name_mat").val();
		//alert(name_famille_mat);
		if((name_famille_mat)== '0'){
			alert("Veuillez sélectionner une Famille de Materiel SVP !!! ");
		}
		else{
			var name_famille_mat =  $("#famille_name_mat").val();
			var referenceMat = $("#refmat").val();
			var libelleMat = $("#libmat").val();
			var marqueMat = $("#marquemat").val();
			var couleur = $("#couleur").val();
			var caracteristique = $("#caracteristik").val();
			savemateriel(name_famille_mat, referenceMat, libelleMat, marqueMat, couleur, caracteristique);
			alert("OK cest bon !");
		}


	});




		function selectservice(id_Direction){
	

	var aj = callModel(
		'serviceModel', 
		'searchDepartementId',		
		 id_Direction,		 	
		 null
		);

	aj.always(function(data){
    //alert(JSON.stringify(data));

		var result = [];

		var result = data;
		//console.log(result);
		$('#lib_Service').append('<option value="vide"> Sélectionnez un Service </option>');
		$.each(result, function(i){
        var iid = result[i].id_Service;
        var ilib = result[i].lib_Service;
        
        $('#lib_Service').prepend('<option id="'+iid+'" text="'+ilib+'" label="'+ilib+'"   value="'+iid+'"> '+ilib+' </option>');
        

        });
		 		/*if(result!="reussie"){
				console.log("tinus");
				}*/
		 	   


});
}

	function selectAgentbyService(id_Service){
	

	var aj = callModel(
		'agentModel', 
		'searchAgentById',		
		 id_Service,		 	
		 null
		);

	aj.always(function(data){
    //alert(JSON.stringify(data));

		var result = [];

		var result = data;
		//console.log(result);
		$('#lib_Agent').append('<option value="vide"> Sélectionnez un Agent </option>');
		$.each(result, function(i){
        var iid = result[i].id_Agent;
        var ilib = result[i].nom_Agent;
        
        $('#lib_Agent').prepend('<option id="'+iid+'" text="'+ilib+'" label="'+ilib+'"   value="'+iid+'"> '+ilib+' </option>');
        

        });
		 		/*if(result!="reussie"){
				console.log("tinus");
				}*/
		 	   


});
}
	

	function selectMatDispoByIdFamille(id_Famille){
	

	var aj = callModel(
		'stockModel', 
		'allMaterielInStockNotAllowByFamille',		
		 id_Famille,		 	
		 null
		);

	aj.always(function(data){
    //alert(JSON.stringify(data));

		var result = [];

		var result = data;
		console.log(result);
		
		$.each(result, function(i){
        var ifamille = result[i].lib_Famille;
        var imateriel = result[i].lib_Materiel;
        var imarque = result[i].marque_mat;
        var icouleur = result[i].couleur;
        var inumref = result[i].num_reference;
        var idate = result[i].date_entree;

        $("#tableDispo tbody").append('<tr class="rowFamille"><td>'+ifamille+'</td> <td>'+imateriel+'</td> <td>'+imarque+'</td> <td>'+icouleur+'</td> <td>'+inumref+'</td> <td>'+idate+'</td></tr>');        
       
       

        });
        
		 		/*if(result!="reussie"){
				console.log("tinus");
				}*/
		 	   


});
}  


	function selectAllMatDispo(){
	

	var aj = callModel(
		'stockModel', 
		'allMaterielInStockNotAllow',		
		 null,		 	
		 null
		);

	aj.always(function(data){
    //alert(JSON.stringify(data));

		var result = [];

		var result = data;
		console.log(result);
		
		$.each(result, function(i){
        var ifamille = result[i].lib_Famille;
        var imateriel = result[i].lib_Materiel;
        var imarque = result[i].marque_mat;
        var icouleur = result[i].couleur;
        var inumref = result[i].num_reference;
        var idate = result[i].date_entree;

        $("#tableDispo tbody").append('<tr class="rowFamille"><td>'+ifamille+'</td> <td>'+imateriel+'</td> <td>'+imarque+'</td> <td>'+icouleur+'</td> <td>'+inumref+'</td> <td>'+idate+'</td></tr>');        
       
       

        });
        
		 		/*if(result!="reussie"){
				console.log("tinus");
				}*/
		 	   


});
}


	function savemateriel(id_Famille, referenceMat, libMat, marque, couleur, caracteristiq){
	

	var aj = callModel(
		'materiel', 
		'savedMateriel',
		{
		 	id_Famille: id_Famille,
		 	num_reference: referenceMat,
		 	lib_Materiel: libMat,
		 	marque_mat: marque,
		 	couleur: couleur,
		 	caracteristique: caracteristiq
		}, 	
		null
		);

	aj.always(function(data){

		 var result = data;
		 		console.log(result);
		 		if(result!="reussie"){
				console.log("tinus");
				}
		 	   


});
}

});