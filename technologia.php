<?php
	
	$site = true;

	include("top.php");

?>

    <div id="main">
       <h1>Technologia</h1>
       <p>Technologie użyte w trakcie tworzenia gry</p>
       <dl>
       		<dt><b>C++</b><dt><img src="grafika/c-logo.png" align="right" width="150"/>
       			<dd>Silnik gry został napisany w sposób obiektowy z wykorzystaniem jezyka C++. Do wyświetlania obrazu oraz odtwarzania dźwięków została 
            wykorzystana biblioteka multimedialna SFML, natomiast za swiat fizyczny przedstawiony w grze odpowiada 
            Box2D. Poza tymi dwoma elementami, cała logika, menu, interfejs i tym podobne zostały napisane w języku C++. Z wykorzystaniem
            tego samego języka programowania powstał również edytor etapów. 
              <br/><br/></dd>
       		<dt><b>SFML</b><dt><img src="grafika/sfml-logo.png" align="right" width="200"/>
       			<dd>Wyświetlanie jest realizowane przez multimedialną bibliotekę SFML (Simple and Fast Multimedia Library). 
              Jest ona oparta o OpenGL, który został przez nią w bardzo zgrabny sposób spakowany w klasy, dzięki czemu
              jest prosty i intuicyjny dla programisty, dzięki czemu podczas tworzenia nie musi on wchodzić głęboko w temat
              obsługi GPU. SFML również wspomaga obsługę audio.<br/><br/></dd>
       		<dt><b>Box2D</b><dt><img src="grafika/Box2d.png" align="right" width="200"/>
       			<dd>Świat fizyczny w grze jest w oparty o silnik fizyczny Box2D. Odpowiada więc on tutaj za fizykę świata, tak za obiekty statyczne
              (jak na przykład ściany) jak i dynamiczne (na przykład skrzynie, które można przesuwać). Niefizycznymi obiektami świata są natomiast
              pociski (ze względu na logikę oraz chęć odciążenia obliczeń fizycznych).</dd>
       		<dt><b> </b><dt>
       			<dd> </dd>

       </dl>
    </div>

<?php
	include("bottom.php");
?>