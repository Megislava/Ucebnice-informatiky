<?php
//------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------
//                       © Anna Jungmannová
//                         srpen 2015
//   Jednoduché webové stránky pro populárnì nauènou prezentaci odborné práce
//------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------
// PHP skript který zpracovává adresu a získá z ní stránku, je je tøeba zobrazit
$URL = explode("=", $_SERVER["REQUEST_URI"]) or die("Nelze získat URL stránky");
if(!ISSET($URL[1])) {$URL = "uvod";}
else {$URL = $URL[1];}

?>
<!DOCTYPE html>
<HTML>
  <head>
	 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Učebnice informatiky</title>
    <link rel="stylesheet" type="text/css" href="mujstyl.css">
    <link rel="icon" href="ikona.ico">
    <link href='http://fonts.googleapis.com/css?family=Monda|Titillium+Web&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="head">
      <a class='title' href="http://ucebnice-informatiky.eu/">Učebnice informatiky</a>
    </div>
    <div class="body">
      <?php include "./obsah/$URL.html" ?>
    </div>
</body>
</HTML>
