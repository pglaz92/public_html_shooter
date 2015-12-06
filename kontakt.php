<?php
	
	$site = true;

	include("top.php");

?>

    <div id="main">
       <h1>Kontakt</h1>
       <form method="POST" action="kontakt.php">
		<p>Jeżeli masz jakieś pytanie lub uwagi, to napisz do mnie za pomocą poniższego formularza:</p>
		Temat: <input type="text" name="temat" style="width: 524; margin-bottom: 6px;"><br/>
		<textarea name="wiadomosc" cols="70" rows="12">Tutaj wpisz treść wiadomości...</textarea>
		<br>
		<input type="submit" name="send" value="Wyślij">
		</form>

		<? 
			$send = false;
			$wiadomosc = "";
			$temat = "";

			$send = $_POST['send'];

			if(send)
			{
				extract($_POST);
				$temat        =$_POST['temat'];
				$wiadomosc=$_POST['wiadomosc'];
				if(mail("bigstonegames@gmail.com", $temat, $wiadomosc))
				{
				}
			}
		?> 
		<p>Nie zapomnij w treści podać jakiegoś kontaktu do siebie!</p>

    </div>

<?php
	include("bottom.php");
?>