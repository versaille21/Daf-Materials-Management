$(document).ready(function () {
  var idProfildet = jQuery("#Profildetenteur").val();

  //$("#Etatducontrolepompe").hide(0);

  $("#Etatducontrolepompe").change(function () {
    var etatcltr = $("#Etatducontrolepompe").val();
    if (etatcltr == "1") {
      $("#numscellepompe").prop("readonly", true);
      $(".groupresultApresInt").hide(0);
      //$('#Interventionreparateur').val('NON');
      //$('#Interventionreparateur option[value="NON"]').prop('selected', true);
    } else {
      if (etatcltr == "2") {
        var etatintervention = $("#Interventionreparateur").val();

        if (etatintervention == "NON") {
          $("#numscellepompe").prop("readonly", false);
          $(".groupresultApresInt").hide(0);
          $("#numscellemoteur").prop("readonly", true);
          $("#numvignettepompe").prop("readonly", true);
        }

        if (etatintervention == "OUI") {
          $("#numscellepompe").prop("readonly", false);
          $(".groupresultApresInt").show(0);
          $("#numscellemoteur").prop("readonly", false);
          $("#numvignettepompe").prop("readonly", false);
        }

        // $('#numscellepompe').prop('readonly', false);
        // $('.groupresultApresInt').show(0);
      }
    }
  });

  $("#Interventionreparateur").change(function () {
    var etatintervention = $("#Interventionreparateur").val();
    if (etatintervention == "OUI") {
      var etatcltr = $("#Etatducontrolepompe").val();

      if (etatcltr == "1") {
        alert(
          "Veuillez changer la Valeur du champ Intervention du technicien en 'NON' svp !"
        );
        $("#numscellepompe").prop("readonly", true);
        $(".groupresultApresInt").hide(0);
        $("#numscellemoteur").prop("readonly", false);
        $("#numvignettepompe").prop("readonly", false);
      }

      if (etatcltr == "2") {
        $("#numscellepompe").prop("readonly", false);
        $(".groupresultApresInt").show(0);
        $("#numscellemoteur").prop("readonly", false);
        $("#numvignettepompe").prop("readonly", false);
      }

      //$('#numscellepompe').prop('readonly', true);
      //$('.groupresultApresInt').show(0);
    } else {
      if (etatintervention == "NON") {
        var etatcltr = $("#Etatducontrolepompe").val();

        //alert(etatcltr);

        if (etatcltr == "1") {
          $("#numscellepompe").prop("readonly", true);
          $(".groupresultApresInt").hide(0);
          $("#numscellemoteur").prop("readonly", false);
          $("#numvignettepompe").prop("readonly", false);
        }

        if (etatcltr == "2") {
          $("#numscellepompe").prop("readonly", false);
          $(".groupresultApresInt").hide(0);
          $("#numscellemoteur").prop("readonly", true);
          $("#numvignettepompe").prop("readonly", true);
        }
      }
    }
  });

  //alert(idProfildet);
  if (idProfildet == 1) {
    jQuery("#blocRaisonSociale").hide(0);
    jQuery("#blocCompteContribuable").hide(0);
    jQuery("#blocCelRespoMetro").hide(0);
    jQuery("#blocCelDetenteur").show(0);
    jQuery("#libNomGerantByType").text("du propriétaire ou du gérant");
    jQuery("#fieldImportantcel2").attr("style", "display:inline;color:red");
    jQuery("#fieldImportantnumcomptec").attr("style", "display:none");
    jQuery("#fieldImportantraisonsoc").attr("style", "display:none");
    jQuery("#warn_field_profil").attr("style", "display:none;color:red;");
  }

  if (idProfildet == 2) {
    jQuery("#blocRaisonSociale").show(0);
    jQuery("#blocCompteContribuable").show(0);
    jQuery("#blocCelRespoMetro").show(0);
    jQuery("#blocCelDetenteur").hide(0);
    jQuery("#libNomGerantByType").text("du responsable métrologique");
    jQuery("#fieldImportantcel1").attr("style", "display:inline; color:red");
    jQuery("#fieldImportantnumcomptec").attr(
      "style",
      "display:inline; color:red"
    );
    jQuery("#warn_field_profil").attr("style", "display:none;color:red;");
    jQuery("#fieldImportantraisonsoc").attr(
      "style",
      "display:inline; color:red"
    );
  }

  // $("#allactortable").DataTable({
  //   scrollX: true,
  //   scrollY: true,
  //   language: {
  //     lengthMenu: "Afficher _MENU_ enregistrements par page",
  //     zeroRecords: "Aucun enregistrement - désolé",
  //     info: "Affichage de la page _PAGE_ of _PAGES_",
  //     infoEmpty: "Aucun enregistrement disponible",
  //     infoFiltered: "(filtré à partir de _MAX_ enregistrements au total)",
  //     paginate: {
  //       previous: "Précédent",
  //       next: "Suivant",
  //     },
  //     search: "Filtrer les enregistrements:",
  //   },
  // });

  //$(".dataTables_length").addClass("bs-select");

  // $("#allmeasureinsttable").DataTable({
  //   scrollX: true,
  //   scrollY: true,
  //   language: {
  //     lengthMenu: "Afficher _MENU_ enregistrements par page",
  //     zeroRecords: "Aucun enregistrement - désolé",
  //     info: "Affichage de la page _PAGE_ of _PAGES_",
  //     infoEmpty: "Aucun enregistrement disponible",
  //     infoFiltered: "(filtré à partir de _MAX_ enregistrements au total)",
  //     paginate: {
  //       previous: "Précédent",
  //       next: "Suivant",
  //     },
  //     search: "Filtrer les enregistrements:",
  //   },
  // });
  jQuery(".select2").select2();

  $(".capacityStockage").select2({
    tags: true,
    placeholder: "Sélectionnez la capacité",
  });
  $(".nav-link-perso").click(function () {
    $(".nav-link-perso.active").removeClass("active");
    $(this).addClass("active");
  });

  //$("[data-mask]").inputmask();

  $("#Typeelmntacontroler").change(function () {
    var valtypeelmntcontrl = $("#Typeelmntacontroler").val();
    //alert(valconcat);

    $(".resltOption").remove();
    $("#Montantttccheck").val("");

    if (valtypeelmntcontrl == "vide") {
      alert("Vous devez choisir une valeur autorisée svp ! ");
    } else {
      //alert(id_Agent);
      selectElmntRowsbyIDTypeElmnt(valtypeelmntcontrl);
      //$//('#id_doss_acte').val(idActe);
      //selectAllRowsTodaybyTypeElmnt(valtypeelmntcontrl);
    }
  });

  jQuery("#Profildetenteur").change(function () {
    var profil = jQuery("#Profildetenteur").val();

    if (profil == "0") {
      //jQuery('#profil_notOk').attr('style', 'display:block;color:red');
      alert("Veuillez sélectionnez un choix valide svp !");
      jQuery("#warn_field_profil").attr("style", "display:block;color:red;");
    } else {
      if (profil == 1) {
        //jQuery('#profil_notOk').attr('style', 'display:none;color:red');
        jQuery("#blocRaisonSociale").hide(0);
        jQuery("#blocCompteContribuable").hide(0);
        jQuery("#blocCelRespoMetro").hide(0);
        jQuery("#blocCelDetenteur").show(0);
        jQuery("#libNomGerantByType").text("du propriétaire ou du gérant");
        jQuery("#fieldImportantcel2").attr("style", "display:inline;color:red");
        jQuery("#fieldImportantnumcomptec").attr("style", "display:none");
        jQuery("#fieldImportantraisonsoc").attr("style", "display:none");
        jQuery("#warn_field_profil").attr("style", "display:none;color:red;");
      } else {
        //jQuery('#profil_notOk').attr('style', 'display:none;color:red');
        jQuery("#blocRaisonSociale").show(0);
        jQuery("#blocCompteContribuable").show(0);
        jQuery("#blocCelRespoMetro").show(0);
        jQuery("#blocCelDetenteur").hide(0);
        jQuery("#libNomGerantByType").text("du responsable métrologique");
        jQuery("#fieldImportantcel2").attr("style", "display:none");
        jQuery("#fieldImportantnumcomptec").attr("style", "display:none");
        jQuery("#warn_field_profil").attr("style", "display:none;color:red;");
        jQuery("#fieldImportantraisonsoc").attr("style", "display:none");

        if (profil == 2) {
          jQuery("#fieldImportantcel1").attr(
            "style",
            "display:inline; color:red"
          );
          jQuery("#fieldImportantnumcomptec").attr(
            "style",
            "display:inline; color:red"
          );
          jQuery("#warn_field_profil").attr("style", "display:none;color:red;");
          jQuery("#fieldImportantraisonsoc").attr(
            "style",
            "display:inline; color:red"
          );
        }
      }
    }
  });

  $("#libperiodicityPompe").change(function () {
    var myperiodicity = $("#libperiodicityPompe").val();
    var intperiodicity = parseInt(myperiodicity);
    //console.log(intperiodicity);

    const valdatectrlpompe = new Date($("#datecontrolepompe").val());
    valdatectrlpompe.setMonth(valdatectrlpompe.getMonth() + intperiodicity);
    //console.log(valdatectrlpompe);
    //alert(valdatectrlpompe);
    var datetostring = valdatectrlpompe.toISOString().substring(0, 10);
    //console.log(datetostring);
    //alert(datetostring);
    $("#datenextcontrolepompe").val(datetostring);
    //alert(valdatectrlpompe);
  });

  // $('#Etatducontrolepompe').change(function(){
  //   var rsltcontrle = $("#Etatducontrolepompe").val();

  //   if(rsltcontrle == 1){
  //     $('.groupscelle').attr('style', 'display:none;');
  //     $('.groupvignette').attr('style', 'display:block;');
  //     $('#numvignettepompe').attr('required', 'true');
  //   }

  //   if(rsltcontrle == 2){
  //     $('.groupvignette').attr('style', 'display:none;');
  //     $('.groupscelle').attr('style', 'display:block;');
  //     $('#numscellepompe').attr('required', 'true');
  //   }

  // });

  jQuery("#nomprenomsrespo").blur(function () {
    if (jQuery.trim(jQuery("#nomprenomsrespo").val())) {
      jQuery("#warn_field_nomprenoms").attr("style", "display:none;color:red");
    } else {
      jQuery("#warn_field_nomprenoms").attr("style", "display:block;color:red");
    }
  });

  jQuery("#cellulaire2").blur(function () {
    if (jQuery.trim(jQuery("#cellulaire2").val())) {
      jQuery("#warn_field_celldetenteur").attr(
        "style",
        "display:none;color:red"
      );
    } else {
      jQuery("#warn_field_celldetenteur").attr(
        "style",
        "display:block;color:red"
      );
    }
  });

  jQuery("#Raisoncontractor").blur(function () {
    if (jQuery.trim(jQuery("#Raisoncontractor").val())) {
      jQuery("#warn_field_raisonsoc").attr("style", "display:none;color:red");
    } else {
      jQuery("#warn_field_raisonsoc").attr("style", "display:block;color:red");
    }
  });

  jQuery("#localisation").blur(function () {
    if (jQuery.trim(jQuery("#localisation").val())) {
      jQuery("#warn_field_localisation").attr(
        "style",
        "display:none;color:red"
      );
    } else {
      jQuery("#warn_field_localisation").attr(
        "style",
        "display:block;color:red"
      );
    }
  });

  jQuery("#situageo").change(function () {
    var situageo = jQuery("#situageo").val();

    if (situageo != "0") {
      jQuery("#warn_field_situageo").attr("style", "display:none;color:red");
    } else {
      jQuery("#warn_field_situageo").attr("style", "display:block;color:red;");
    }
  });

  jQuery("#saveDetenteur").click(function () {
    // faire un controle préalable avant d'exécuter les lignes ci-dessous
    var checkedform = 1;

    var Profildetenteur = jQuery("#Profildetenteur").val();
    if (Profildetenteur == "0") {
      jQuery("#warn_field_profil").attr("style", "display:block;color:red;");
      //alert("Veuillez sélectionner une structure SVP !!! ");
      checkedform = 0;
    }

    var nomprenomsrespo = jQuery("#nomprenomsrespo").val();
    if (nomprenomsrespo == "") {
      jQuery("#warn_field_nomprenoms").attr(
        "style",
        "display:block;color:red;"
      );
      //alert("Veuillez renseigner le champ lieu concerné SVP !!! ");
      checkedform = 0;
    }

    var situageo = jQuery("#situageo").val();
    if (situageo == "0") {
      jQuery("#warn_field_situageo").attr("style", "display:block;color:red;");
      //alert("Veuillez sélectionner une structure SVP !!! ");
      checkedform = 0;
    }

    var localisation = jQuery("#localisation").val();
    if (localisation == "") {
      jQuery("#warn_field_localisation").attr(
        "style",
        "display:block;color:red;"
      );
      //alert("Veuillez sélectionner une structure SVP !!! ");
      checkedform = 0;
    }

    if (Profildetenteur == 1) {
      var cellulaire2 = jQuery("#cellulaire2").val();
      if (cellulaire2 == "") {
        jQuery("#warn_field_celldetenteur").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez renseigner le champ lieu concerné SVP !!! ");
        checkedform = 0;
      }

      var nomprenomsrespo = jQuery("#nomprenomsrespo").val();
      if (nomprenomsrespo == "") {
        jQuery("#warn_field_nomprenoms").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez renseigner le champ lieu concerné SVP !!! ");
        checkedform = 0;
      }

      var situageo = jQuery("#situageo").val();
      if (situageo == "0") {
        jQuery("#warn_field_situageo").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez sélectionner une structure SVP !!! ");
        checkedform = 0;
      }

      var localisation = jQuery("#localisation").val();
      if (localisation == "") {
        jQuery("#warn_field_localisation").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez sélectionner une structure SVP !!! ");
        checkedform = 0;
      }
    }

    if (Profildetenteur == 2) {
      var nomprenomsrespo = jQuery("#nomprenomsrespo").val();
      if (nomprenomsrespo == "") {
        jQuery("#warn_field_nomprenoms").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez renseigner le champ lieu concerné SVP !!! ");
        checkedform = 0;
      }

      var situageo = jQuery("#situageo").val();
      if (situageo == "0") {
        jQuery("#warn_field_situageo").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez sélectionner une structure SVP !!! ");
        checkedform = 0;
      }

      var localisation = jQuery("#localisation").val();
      if (localisation == "") {
        jQuery("#warn_field_localisation").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez sélectionner une structure SVP !!! ");
        checkedform = 0;
      }

      var numcomptec = jQuery("#numcomptec").val();
      if (numcomptec == "") {
        jQuery("#warn_field_numcc").attr("style", "display:block;color:red;");
        //alert("Veuillez sélectionner une structure SVP !!! ");
        checkedform = 0;
      }

      var cellulaire1 = jQuery("#cellulaire1").val();
      if (cellulaire1 == "") {
        jQuery("#warn_field_cellrespo").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez sélectionner une structure SVP !!! ");
        checkedform = 0;
      }

      var Raisoncontractor = jQuery("#Raisoncontractor").val();
      if (Raisoncontractor == "") {
        jQuery("#warn_field_raisonsoc").attr(
          "style",
          "display:block;color:red;"
        );
        //alert("Veuillez sélectionner une structure SVP !!! ");
        checkedform = 0;
      }
    }

    if (checkedform == 0) {
      alert(
        "Attention ! un ou plusieurs champs obligatoires ne sont pas renseignés !!!"
      );
      // jQuery('#warn_field_profil').show(0);

      // jQuery('#step1').attr('class', 'validate');
      // jQuery('#step2').attr('class', 'active panel-2');

      // jQuery('#tabsubmitcontent3').hide(0);
      // jQuery('#tabsubmitcontent4').hide(0);
    } else {
      if (Profildetenteur == 1) {
        jQuery("#Raisoncontractor").val("");
        jQuery("#numcomptec").val("");
        jQuery("#cellulaire1").val("");
      }

      if (Profildetenteur == 2) {
        jQuery("#cellulaire2").val("");
      }

      jQuery("#saveDetenteur").attr("type", "submit");
    }
  });

  $("#modifyDetenteur").click(function () {
    //alert("test");
    var profil = jQuery("#Profildetenteur").val();

    if (profil == 1) {
      var valbuttonactif = 0;

      var profil = jQuery("#Profildetenteur").val();
      var traceprofil = jQuery("#traceProfildetenteur").val();
      if (traceprofil != profil) {
        //alert("dedans");
        valbuttonactif = 1;
      }

      var situageo = jQuery("#situageo").val();
      var tracesituageo = jQuery("#tracesituageo").val();

      if (situageo != tracesituageo) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var nomprenomsrespo = jQuery("#nomprenomsrespo").val();
      var tracenomprenomsrespo = jQuery("#tracenomprenomsrespo").val();
      if (nomprenomsrespo != tracenomprenomsrespo) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var adresspostale = jQuery("#adresspostale").val();
      var traceadresspostale = jQuery("#traceadresspostale").val();
      if (adresspostale != traceadresspostale) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var telphonefixe = jQuery("#telphonefixe").val();
      var tracetelphonefixe = jQuery("#tracetelphonefixe").val();
      if (telphonefixe != tracetelphonefixe) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var telphonefax = jQuery("#telphonefax").val();
      var tracetelphonefax = jQuery("#tracetelphonefax").val();
      if (telphonefax != tracetelphonefax) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var cellulaire2 = jQuery("#cellulaire2").val();
      var tracecellulaire2 = jQuery("#tracecellulaire2").val();
      if (cellulaire2 != tracecellulaire2) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var adressemail = jQuery("#adressemail").val();
      var traceadressemail = jQuery("#traceadressemail").val();
      if (adressemail != traceadressemail) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var localisation = jQuery("#localisation").val();
      var tracelocalisation = jQuery("#tracelocalisation").val();
      if (localisation != tracelocalisation) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      if (valbuttonactif == 1) {
        bootbox.confirm({
          message: "Voulez-vous vraiment effectuer cette modification ?",
          buttons: {
            confirm: {
              label: "OUI, Modifier",
              className: "btn-success",
            },
            cancel: {
              label: "NON, Annuler",
              className: "btn-danger",
            },
          },
          callback: function (result) {
            if (result == true) {
              jQuery("#modifyDetenteur").attr("type", "submit");
              //jQuery("#editformDetenteur").submit();
              $("#modifyDetenteur").trigger("click");

              // setTimeout(() => {

              //   //$(this).val('Submit');
              // }, 2000);
            } else {
              alert("non");
            }
          },
        });
      } else {
        alert("Aucun modification n'a été faite");
        //  jQuery('#modifyDetenteur').prop("disabled", true);
        //   jQuery('#modifyDetenteur').attr('type', 'button');
      }
    }

    if (profil == 2) {
      var valbuttonactif = 0;
      var profil = jQuery("#Profildetenteur").val();
      var traceprofil = jQuery("#traceProfildetenteur").val();
      if (traceprofil != profil) {
        //alert("dedans");
        valbuttonactif = 1;
      }

      var situageo = jQuery("#situageo").val();
      var tracesituageo = jQuery("#tracesituageo").val();

      if (situageo != tracesituageo) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var nomprenomsrespo = jQuery("#nomprenomsrespo").val();
      var tracenomprenomsrespo = jQuery("#tracenomprenomsrespo").val();
      if (nomprenomsrespo != tracenomprenomsrespo) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var adresspostale = jQuery("#adresspostale").val();
      var traceadresspostale = jQuery("#traceadresspostale").val();
      if (adresspostale != traceadresspostale) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var telphonefixe = jQuery("#telphonefixe").val();
      var tracetelphonefixe = jQuery("#tracetelphonefixe").val();
      if (telphonefixe != tracetelphonefixe) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var telphonefax = jQuery("#telphonefax").val();
      var tracetelphonefax = jQuery("#tracetelphonefax").val();
      if (telphonefax != tracetelphonefax) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var Raisoncontractor = jQuery("#Raisoncontractor").val();
      var traceRaisoncontractor = jQuery("#traceRaisoncontractor").val();
      if (Raisoncontractor != traceRaisoncontractor) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var numcomptec = jQuery("#numcomptec").val();
      var tracenumcomptec = jQuery("#tracenumcomptec").val();
      if (numcomptec != tracenumcomptec) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var cellulaire1 = jQuery("#cellulaire1").val();
      var tracecellulaire1 = jQuery("#tracecellulaire1").val();
      if (cellulaire1 != tracecellulaire1) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var adressemail = jQuery("#adressemail").val();
      var traceadressemail = jQuery("#traceadressemail").val();
      if (adressemail != traceadressemail) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      var localisation = jQuery("#localisation").val();
      var tracelocalisation = jQuery("#tracelocalisation").val();
      if (localisation != tracelocalisation) {
        valbuttonactif = 1;
        // jQuery('#modifyDetenteur').attr('disabled', 'false');
        // jQuery('#modifyDetenteur').attr('type', 'submit');
      }

      if (valbuttonactif == 1) {
        bootbox.confirm({
          message: "Voulez-vous vraiment effectuer cette modification ?",
          buttons: {
            confirm: {
              label: "OUI, Modifier",
              className: "btn-success",
            },
            cancel: {
              label: "NON, Annuler",
              className: "btn-danger",
            },
          },
          callback: function (result) {
            if (result == true) {
              jQuery("#modifyDetenteur").attr("type", "submit");
              //jQuery("#editformDetenteur").submit();
              $("#modifyDetenteur").trigger("click");

              // setTimeout(() => {

              //   //$(this).val('Submit');
              // }, 2000);
            } else {
              //alert("non");
            }
          },
        });
      } else {
        alert("Aucun modification n'a été faite");
        //  jQuery('#modifyDetenteur').prop("disabled", true);
        //   jQuery('#modifyDetenteur').attr('type', 'button');
      }
    }
  });

  function selectElmntRowsbyIDTypeElmnt(valtypeelmntcontrl) {
    var aj = callModel(
      "elementModel",
      "getElmntByidTypeElmnt",
      valtypeelmntcontrl,
      null
    );

    aj.always(function (data) {
      //alert(JSON.stringify(data));

      var result = [];

      var result = data;
      //alert(result);
      console.log(result);

      $.each(result, function (i) {
        var iilib_element = result[i].lib_element;

        var iid_element = result[i].id_element;

        $("#Elmntacontroler").append(
          '<option class="resltOption" value="' +
            iid_element +
            '" label="' +
            iilib_element +
            '">' +
            iilib_element +
            " </option>"
        );
      });
    });
  }

  $("#Typeverifcontrole").change(function () {
    var valtypecontrl = $("#Typeverifcontrole").val();

    var valelemntselected = $("#Elmntacontroler").val();
    //alert(valelemntselected);

    if (valelemntselected != "vide") {
      selectMontantByTypeVerif(valtypecontrl, valelemntselected);
    } else {
      alert(
        "veuillez svp sélectionnez le champ ELEMENT A CONTROLER avant celui-ci !"
      );
    }
  });

  function selectMontantByTypeVerif(valtypecontrl, valelemntselected) {
    var aj = callModel(
      "elementModel",
      "getMontantofElmntByidTypeVerif",
      {
        id_element: valelemntselected,
        id_type_verification: valtypecontrl,
      },
      null
    );

    aj.always(function (data) {
      //alert(JSON.stringify(data));

      var result = [];

      var result = data;
      //alert(result);
      console.log(result);

      $.each(result, function (i) {
        var iirdvanceEtatPrimitif = result[i].rdvanceEtatPrimitif;
        var iicoutPrimitif = result[i].coutPrimitif;
        var iiidTypeverifPrimitif = result[i].idTypeverifPrimitif;

        var iirdvanceEtatPeriodiq = result[i].rdvanceEtatPrimitif;
        var iicoutPeriodiq = result[i].coutPeriodiq;
        var iiidTypeverifPeriodiq = result[i].idTypeverifPeriodiq;

        $("#Montantttccheck").val("");
        $("#redevanceetat").val("");

        if (valtypecontrl == 1) {
          $("#Montantttccheck").val(iicoutPrimitif + " F CFA");
          $("#redevanceetat").val(iirdvanceEtatPrimitif + " F CFA");
        }

        if (valtypecontrl == 2) {
          $("#Montantttccheck").val(iicoutPeriodiq + " F CFA");
          $("#redevanceetat").val(iirdvanceEtatPeriodiq + " F CFA");
        }
      });
    });
  }
});
