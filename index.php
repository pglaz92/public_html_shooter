<?php
	
	$site = true;

	include("top.php");

?>

    <div id="main">
       <h1>Shooter: The Game</h1>
       <img src="grafika/main.png" alt="Screen z gry" align="right"/>
       <p>Shooter: The Game jest to prosta strzelanka z widokiem z lotu ptaka (top-down). 
       	Zadaniem gracza jest przejść przez kilka kolejnych etapów nie dając się przy tym zabić.
       </p>
       <p>Silnik gry jest oparty o SFML (do wyświetlania) oraz Box2D (do fizyki). Więcej na ten temat w dziale "Technologia". 
       	Wszelkie obecne w grze grafiki są zaczerpnięte z serwisów typu Open Game Arts, podobnie jak również dźwięki występujące w grze.</p>
       <h3>Shooter: The game do pobrania</h3>
       <p>Najnowszą wersję gry do pobrania można znaleźć w dziale "Download".</p>
       <h3>Sterowanie</h3>
       <p>
       	WSAD - poruszanie się<br/>
       	LCtrl - dalsze widzenie<br/>
       	LShift - bieg<br/>
       	LPM - strzał<br/>
       	1,2,3,4 - wybór broni<br/>
       	R - przeładowywanie broni
       </p>

      </div>

<?php
	include("bottom.php");
?>