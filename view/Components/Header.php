<?php include ($_SERVER['DOCUMENT_ROOT']."/ugbcentral/config/config.php"); ?>
<head>
	<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo SERVERURL;?>assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <!-- Compiled and minified CSS -->
      <!-- Compiled and minified CSS -->
<!--Select works with these files:-->
<script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<!--The select didn't work for me with these files:-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">

      <!--Import Google Font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo SERVERURL;?>assets/css/GeneralStyle.css">
      <!--Import Google Font-->
      <style>
      html 
      {
            font-family: 'Open Sans Condensed', sans-serif;
      }
      </style>
	<title></title>
      <link rel="icon" href="images/favicon.ico" type="assets/img/icono.ico">
</head>
<?php 
if(!isset($_SESSION)) 
{ 
   session_start();

}
?>



