
  
<!DOCTYPE html>
<html lang="fr">


<head>
  <meta charset="utf-8">
  <title>DAF - asset Management</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="Assoua">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo DAFMM?>/pattern/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo DAFMM?>/pattern/css/select2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo DAFMM ?>/pattern/css/select2-bootstrap4.min.css">

  <!-- Libraries CSS Files -->
  <link href="<?php echo DAFMM ?>/pattern/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo DAFMM ?>/pattern/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo DAFMM ?>/pattern/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="<?php echo DAFMM ?>/pattern/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo DAFMM ?>/pattern/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="<?php echo DAFMM ?>/pattern/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo DAFMM?>/pattern/css/style.css" rel="stylesheet"> 
  <style>

    .BDTLL_status {
      cursor: pointer;
      display: inline;
      margin-right: 3px;
      width: 16px;
      height: 16px;
    }
  </style>

<style>

  .BDTLL_icon_ok {
      background-image: url(data:image/png;base64,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);
  }

  .BDTLL_icon_critical {
      background-image: url(data:image/png;base64,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);
  }

  .BDTLL_icon_alert {
      background-image: url(data:image/png;base64,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);
  }

  .BDTLL_icon_disabled {
      background-image: url(data:image/png;base64,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);
  }

  .BDTLL_icon_whitelisted {
      background-image: url(data:image/png;base64,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);
  }

  .BDTLL_Search_Popup {
    position: absolute !important;
    min-height: 70px !important;

    border-style: solid !important;
    border-width: 1px !important;
    border-radius: 5px !important;

    overflow: hidden !important;
    z-index: 999999999999999 !important;

      background-color: rgb(255, 255, 255) !important;
      border-color: rgba(100, 100, 100, 0.9) !important;
  }

  .BDTLL_Search_Popup > .BDTLL_left_box {
    position: absolute !important;
    top: 0px !important;
    height: auto !important;
    bottom: 0px !important;

    left: 0px !important;
    width: 92px !important;

    background-size: 50px 50px !important;
    background-repeat: no-repeat !important;
    background-position: center !important;

      background-color: rgb(240, 242, 246) !important;
  }

  .BDTLL_Search_Popup > .BDTLL_right_box {
    display: inline-block !important;
    margin-left: 92px !important;
    width: 210pt !important;

    box-sizing: border-box !important;
    padding-left: 10px !important;
      padding-right: 5px !important;
  }

  .BDTLL_Search_Popup p {
      font-family: 'SFProText-Regular' !important;
      white-space: pre-wrap !important;
      word-wrap: normal !important;
      margin: 0px !important;
      padding: 0px !important;
      text-align: left;
  }

  .BDTLL_Search_Popup .BDTLL_title {
    font-size: 16px !important;
    margin-top: 12px !important;
  }

  .BDTLL_Search_Popup .BDTLL_description {
    font-size: 12px !important;
    margin-top: 5px !important;
  }

  .BDTLL_Search_Popup .BDTLL_web_protection {
    font-size: 11px !important;
    margin-top: 15px !important;
    margin-bottom: 10px !important;
  }

  .BDTLL_Search_Popup .BDTLL_strong {
      color: rgb(7, 20, 45) !important;
  }

  .BDTLL_Search_Popup .BDTLL_mild {
      color: rgb(81, 91, 109) !important;
  }

  @media (prefers-color-scheme: dark) {
      .BDTLL_Search_Popup {
          background-color: rgb(56, 67, 87) !important;
          border-color: rgba(169, 169, 169, 0.9) !important;
      }

      .BDTLL_Search_Popup > .BDTLL_left_box {
          background-color: rgb(7, 20, 45) !important;
      }

      .BDTLL_Search_Popup .BDTLL_strong {
          color: rgb(239, 241, 249) !important;
      }
      
      .BDTLL_Search_Popup .BDTLL_mild {
          color: rgb(217, 217, 217) !important;
      }
  }

  /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL3BhZ2VzL2FuYWx5emVyUG9wdXAvYW5hbHl6ZXJQYWdlU3RhdHVzLmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtJQUNJLHlEQUFnRDtBQUNwRDs7QUFFQTtJQUNJLHlEQUFzRDtBQUMxRDs7QUFFQTtJQUNJLHlEQUFtRDtBQUN2RDs7QUFFQTtJQUNJLHlEQUFzRDtBQUMxRDs7QUFFQTtJQUNJLHlEQUF5RDtBQUM3RDs7QUFFQTtDQUNDLDZCQUE2QjtDQUM3QiwyQkFBMkI7O0NBRTNCLDhCQUE4QjtDQUM5Qiw0QkFBNEI7Q0FDNUIsNkJBQTZCOztDQUU3QiwyQkFBMkI7Q0FDM0IsbUNBQW1DOztJQUVoQywrQ0FBK0M7SUFDL0MsaURBQWlEO0FBQ3JEOztBQUVBO0NBQ0MsNkJBQTZCO0NBQzdCLG1CQUFtQjtDQUNuQix1QkFBdUI7Q0FDdkIsc0JBQXNCOztDQUV0QixvQkFBb0I7Q0FDcEIsc0JBQXNCOztDQUV0QixxQ0FBcUM7Q0FDckMsdUNBQXVDO0NBQ3ZDLHNDQUFzQzs7SUFFbkMsK0NBQStDO0FBQ25EOztBQUVBO0NBQ0MsZ0NBQWdDO0NBQ2hDLDRCQUE0QjtDQUM1Qix1QkFBdUI7O0NBRXZCLGlDQUFpQztDQUNqQyw2QkFBNkI7SUFDMUIsNkJBQTZCO0FBQ2pDOztBQUVBO0lBQ0ksMkNBQTJDO0lBQzNDLGdDQUFnQztJQUNoQyw0QkFBNEI7SUFDNUIsc0JBQXNCO0lBQ3RCLHVCQUF1QjtJQUN2QixnQkFBZ0I7QUFDcEI7O0FBRUE7Q0FDQywwQkFBMEI7Q0FDMUIsMkJBQTJCO0FBQzVCOztBQUVBO0NBQ0MsMEJBQTBCO0NBQzFCLDBCQUEwQjtBQUMzQjs7QUFFQTtDQUNDLDBCQUEwQjtDQUMxQiwyQkFBMkI7Q0FDM0IsOEJBQThCO0FBQy9COztBQUVBO0lBQ0ksZ0NBQWdDO0FBQ3BDOztBQUVBO0lBQ0ksa0NBQWtDO0FBQ3RDOztBQUVBO0lBQ0k7UUFDSSw0Q0FBNEM7UUFDNUMsaURBQWlEO0lBQ3JEOztJQUVBO1FBQ0ksMkNBQTJDO0lBQy9DOztJQUVBO1FBQ0ksb0NBQW9DO0lBQ3hDOztJQUVBO1FBQ0ksb0NBQW9DO0lBQ3hDO0FBQ0oiLCJzb3VyY2VzQ29udGVudCI6WyIuQkRUTExfaWNvbl9vayB7XG4gICAgYmFja2dyb3VuZC1pbWFnZTogdXJsKC4uLy4uL2ltZy9hbmFseXplcl9vay5wbmcpO1xufVxuXG4uQkRUTExfaWNvbl9jcml0aWNhbCB7XG4gICAgYmFja2dyb3VuZC1pbWFnZTogdXJsKC4uLy4uL2ltZy9hbmFseXplcl9jcml0aWNhbC5wbmcpO1xufVxuXG4uQkRUTExfaWNvbl9hbGVydCB7XG4gICAgYmFja2dyb3VuZC1pbWFnZTogdXJsKC4uLy4uL2ltZy9hbmFseXplcl9hbGVydC5wbmcpO1xufVxuXG4uQkRUTExfaWNvbl9kaXNhYmxlZCB7XG4gICAgYmFja2dyb3VuZC1pbWFnZTogdXJsKC4uLy4uL2ltZy9hbmFseXplcl9kaXNhYmxlZC5wbmcpO1xufVxuXG4uQkRUTExfaWNvbl93aGl0ZWxpc3RlZCB7XG4gICAgYmFja2dyb3VuZC1pbWFnZTogdXJsKC4uLy4uL2ltZy9hbmFseXplcl93aGl0ZWxpc3RlZC5wbmcpO1xufVxuXG4uQkRUTExfU2VhcmNoX1BvcHVwIHtcblx0cG9zaXRpb246IGFic29sdXRlICFpbXBvcnRhbnQ7XG5cdG1pbi1oZWlnaHQ6IDcwcHggIWltcG9ydGFudDtcblxuXHRib3JkZXItc3R5bGU6IHNvbGlkICFpbXBvcnRhbnQ7XG5cdGJvcmRlci13aWR0aDogMXB4ICFpbXBvcnRhbnQ7XG5cdGJvcmRlci1yYWRpdXM6IDVweCAhaW1wb3J0YW50O1xuXG5cdG92ZXJmbG93OiBoaWRkZW4gIWltcG9ydGFudDtcblx0ei1pbmRleDogOTk5OTk5OTk5OTk5OTk5ICFpbXBvcnRhbnQ7XG5cbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoMjU1LCAyNTUsIDI1NSkgIWltcG9ydGFudDtcbiAgICBib3JkZXItY29sb3I6IHJnYmEoMTAwLCAxMDAsIDEwMCwgMC45KSAhaW1wb3J0YW50O1xufVxuXG4uQkRUTExfU2VhcmNoX1BvcHVwID4gLkJEVExMX2xlZnRfYm94IHtcblx0cG9zaXRpb246IGFic29sdXRlICFpbXBvcnRhbnQ7XG5cdHRvcDogMHB4ICFpbXBvcnRhbnQ7XG5cdGhlaWdodDogYXV0byAhaW1wb3J0YW50O1xuXHRib3R0b206IDBweCAhaW1wb3J0YW50O1xuXG5cdGxlZnQ6IDBweCAhaW1wb3J0YW50O1xuXHR3aWR0aDogOTJweCAhaW1wb3J0YW50O1xuXG5cdGJhY2tncm91bmQtc2l6ZTogNTBweCA1MHB4ICFpbXBvcnRhbnQ7XG5cdGJhY2tncm91bmQtcmVwZWF0OiBuby1yZXBlYXQgIWltcG9ydGFudDtcblx0YmFja2dyb3VuZC1wb3NpdGlvbjogY2VudGVyICFpbXBvcnRhbnQ7XG5cbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoMjQwLCAyNDIsIDI0NikgIWltcG9ydGFudDtcbn1cblxuLkJEVExMX1NlYXJjaF9Qb3B1cCA+IC5CRFRMTF9yaWdodF9ib3gge1xuXHRkaXNwbGF5OiBpbmxpbmUtYmxvY2sgIWltcG9ydGFudDtcblx0bWFyZ2luLWxlZnQ6IDkycHggIWltcG9ydGFudDtcblx0d2lkdGg6IDIxMHB0ICFpbXBvcnRhbnQ7XG5cblx0Ym94LXNpemluZzogYm9yZGVyLWJveCAhaW1wb3J0YW50O1xuXHRwYWRkaW5nLWxlZnQ6IDEwcHggIWltcG9ydGFudDtcbiAgICBwYWRkaW5nLXJpZ2h0OiA1cHggIWltcG9ydGFudDtcbn1cblxuLkJEVExMX1NlYXJjaF9Qb3B1cCBwIHtcbiAgICBmb250LWZhbWlseTogJ1NGUHJvVGV4dC1SZWd1bGFyJyAhaW1wb3J0YW50O1xuICAgIHdoaXRlLXNwYWNlOiBwcmUtd3JhcCAhaW1wb3J0YW50O1xuICAgIHdvcmQtd3JhcDogbm9ybWFsICFpbXBvcnRhbnQ7XG4gICAgbWFyZ2luOiAwcHggIWltcG9ydGFudDtcbiAgICBwYWRkaW5nOiAwcHggIWltcG9ydGFudDtcbiAgICB0ZXh0LWFsaWduOiBsZWZ0O1xufVxuXG4uQkRUTExfU2VhcmNoX1BvcHVwIC5CRFRMTF90aXRsZSB7XG5cdGZvbnQtc2l6ZTogMTZweCAhaW1wb3J0YW50O1xuXHRtYXJnaW4tdG9wOiAxMnB4ICFpbXBvcnRhbnQ7XG59XG5cbi5CRFRMTF9TZWFyY2hfUG9wdXAgLkJEVExMX2Rlc2NyaXB0aW9uIHtcblx0Zm9udC1zaXplOiAxMnB4ICFpbXBvcnRhbnQ7XG5cdG1hcmdpbi10b3A6IDVweCAhaW1wb3J0YW50O1xufVxuXG4uQkRUTExfU2VhcmNoX1BvcHVwIC5CRFRMTF93ZWJfcHJvdGVjdGlvbiB7XG5cdGZvbnQtc2l6ZTogMTFweCAhaW1wb3J0YW50O1xuXHRtYXJnaW4tdG9wOiAxNXB4ICFpbXBvcnRhbnQ7XG5cdG1hcmdpbi1ib3R0b206IDEwcHggIWltcG9ydGFudDtcbn1cblxuLkJEVExMX1NlYXJjaF9Qb3B1cCAuQkRUTExfc3Ryb25nIHtcbiAgICBjb2xvcjogcmdiKDcsIDIwLCA0NSkgIWltcG9ydGFudDtcbn1cblxuLkJEVExMX1NlYXJjaF9Qb3B1cCAuQkRUTExfbWlsZCB7XG4gICAgY29sb3I6IHJnYig4MSwgOTEsIDEwOSkgIWltcG9ydGFudDtcbn1cblxuQG1lZGlhIChwcmVmZXJzLWNvbG9yLXNjaGVtZTogZGFyaykge1xuICAgIC5CRFRMTF9TZWFyY2hfUG9wdXAge1xuICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoNTYsIDY3LCA4NykgIWltcG9ydGFudDtcbiAgICAgICAgYm9yZGVyLWNvbG9yOiByZ2JhKDE2OSwgMTY5LCAxNjksIDAuOSkgIWltcG9ydGFudDtcbiAgICB9XG5cbiAgICAuQkRUTExfU2VhcmNoX1BvcHVwID4gLkJEVExMX2xlZnRfYm94IHtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogcmdiKDcsIDIwLCA0NSkgIWltcG9ydGFudDtcbiAgICB9XG5cbiAgICAuQkRUTExfU2VhcmNoX1BvcHVwIC5CRFRMTF9zdHJvbmcge1xuICAgICAgICBjb2xvcjogcmdiKDIzOSwgMjQxLCAyNDkpICFpbXBvcnRhbnQ7XG4gICAgfVxuICAgIFxuICAgIC5CRFRMTF9TZWFyY2hfUG9wdXAgLkJEVExMX21pbGQge1xuICAgICAgICBjb2xvcjogcmdiKDIxNywgMjE3LCAyMTcpICFpbXBvcnRhbnQ7XG4gICAgfVxufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */

</style>

</head>

<body id="body">

  <button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>
  <!--==========================
    Header
  ============================-->

  <div id="header-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 71px;">
    <header id="header" style="width: 1600px; position: fixed; top: 0px; z-index: 50;">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span><i class="fa fa-star-half-o" aria-hidden="true"> </i> </span> DAF -MM</a></h1> 
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
          <li class="menu-active"><a href="<?php echo DAFMM ?>/accueil/index">Accueil</a></li>
          <?php if(!Session::get('nom')){?>
          <li><a href="#about">A propos</a></li>
          <li><a href="<?php echo DAFMM ?>/connexion/index">Se connecter</a></li>
          <?php } ?>
          

          
          <?php if(Session::get('nom')){?>
          <li class="menu-has-children"><a href="" class="sf-with-ul">Bonjour <?php echo Session::get('nom');?></a>
            <ul style="display: none;">
              <li><a href="#">Changer Mot de passe</a></li>
              <li><a href="<?php echo DAFMM ?>/deconnexion/index">Se déconnecter</a></li>
              <!-- <li><a href="#">Link Item 4</a></li>
              <li><a href="#">Link Item 5</a></li> -->
            </ul>
          </li>
          <?php } ?>
          <!-- <li><a href="#contact">Contact</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header></div>

  <!-- <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span><i class="fa fa-star-half-o" aria-hidden="true"> </i> </span> DAF -MM </a></h1> 
        
      </div>
 -->
      <!-- <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Accueil</a></li>
          <li><a href="#about">A propos</a></li> -->
          
          <!-- <li class="menu-has-children"><a href="#">Dropdown</a>
            <ul>
              <li><a href="#">Link Item 1</a></li>
              <li><a href="#">Link Item 3</a></li>
              <li><a href="#">Link Item 4</a></li>
              <li><a href="#">Link Item 5</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="#contact">Liens utiles</a></li>
        </ul>
      </nav> --><!-- #nav-menu-container -->
   <!--  </div> -->
  <!-- </header> --><!-- #header -->
  

  <!--==========================
    Hero Section
  ============================-->

  <main id="main">

    <section id="hero" class="clearfix">
      <div class="container">

        <?php echo $content_for_layout ?>

      </div> 
    </section><!-- #Hero -->

  </main>

  <!-- <main id="main">

   

   

  </main> -->

  <!--------------------------------- FIN DU CONTENU  -------------------------------------------------------------------------->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong> Direction des Affaires Financières  <br> MINISTERE DE L'ECONOMIE ET DES FINANCES</br>
        <br> </br> </strong>. Tous droits réservés
      </div>
      <div class="credits"> 
        Développé par  <i>  SAI (Service des Applications Informatiques) </i>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript  -->
  <script src="<?php echo DAFMM?>/pattern/jquery/jquery.min.js"></script>
  <script src="<?php echo DAFMM?>/pattern/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo DAFMM?>/pattern/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo DAFMM ?>/pattern/js/select2.full.min.js"></script>
  <script src="<?php echo DAFMM?>/pattern/easing/easing.min.js"></script>
  <script src="<?php echo DAFMM?>/pattern/superfish/hoverIntent.js"></script>
  <script src="<?php echo DAFMM?>/pattern/superfish/superfish.min.js"></script>
  <script src="<?php echo DAFMM?>/pattern/wow/wow.min.js"></script>
  <script src="<?php echo DAFMM?>/pattern/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo DAFMM?>/pattern/magnific-popup/magnific-popup.min.js"></script>
  <script src="<?php echo DAFMM?>/pattern/sticky/sticky.js"></script> 
  <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
 <!-- <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script> -->
  <script src="<?php echo DAFMM?>/pattern/js/main.js"></script>
  <script src="<?php echo DAFMM?>/pattern/jsperso/app.js?<?php echo date("Y-m-d H:i:s");?>"></script>

  <script src="<?php echo DAFMM?>/pattern/jsperso/functions.js?<?php echo date("Y-m-d H:i:s");?>"></script> 

  <nav id="mobile-nav">
        <ul class="" style="touch-action: pan-y;" id="">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Our Team</a></li>
          <li class="menu-has-children"><i class="fa fa-chevron-down"></i><a href="" class="sf-with-ul">Dropdown</a>
            <ul style="display: none;">
              <li><a href="#">Link Item 1</a></li>
              <li><a href="#">Link Item 3</a></li>
              <li><a href="#">Link Item 4</a></li>
              <li><a href="#">Link Item 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
  </nav>

  <div id="mobile-body-overly"></div>

</body>


</html>
