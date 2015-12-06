<?php
	if(!$site) exit;
?>

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
   	<title>Shooter: The Game</title>
   	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
   	<meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="Stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="header">
       <a href="index.php"><img src="title.png"></a>
    </div>
    <div id="menu_bar">
      <a href="index.php"><div id="menu_el"> O grze</div></a>
      <a href="galeria.php"><div id="menu_el2"> Galeria</div></a>
      <a href="download.php"><div id="menu_el2"> Download</div></a>
      <a href="technologia.php"><div id="menu_el"> Technologia</div></a>
      <a href="kontakt.php"><div id="menu_el2" href="kontakt.php"> Kontakt</div></a>
    </div>

  	<?php
      error_reporting(E_ALL); ini_set('display_errors','off');
    ?>

