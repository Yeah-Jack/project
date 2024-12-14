<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="icon" href="/assets/Favicon.png" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900
	<title>Formular</title>
</head>

<body>
	<main>
		<?php

		$textfeld = checkempty($_GET["textfeld"], "textfeld");
		$nummer = checkempty($_GET["nummer"], "nummer");
		$datumuhrzeit = checkempty($_GET["datumhrzeit"], "datumuhrzeit");
		$dropdown = checkempty($_GET["dropdown"], "dropdown");
		$checkbox = checkempty($_GET["check"], "check");
		$textarea = checkempty($_GET["textarea"], "textarea");
		$email = checkempty($_GET["email"], "email");
		$url = checkempty($_GET["url"], "url");
		$telnummer = checkempty($_GET["telnummer"], "telnummer");

		function checkempty($str, $what)
		{
			if (empty($str)) {
				echo ("Das Feld $what wurde nicht an den Server übergeben. Überprüfe, ob der name= Tag korrekt ausgefüllt ist. <br>");
			}
			return $str;
		}

		echo "<h1>Folgende Infos wurden an den Server übergeben!</h1>";
		echo "Textfeld: $textfeld<br>";
		echo "Nummer: $nummer<br>";
		echo "Datum und Uhrzeit: $datumuhrzeit<br>";
		echo "Dropdown-Auswahl: $dropdown<br>";
		echo "Checkbox: $checkbox<br>";
		echo "Textarea-Inhalt: $textarea<br>";
		echo "E-Mail-Adresse: $email<br>";
		echo "URL: $url<br>";
		echo "Telefonnummer: $telnummer<br>";

		?>
		<br>
		<form method=" get">
	<label>Text</label>
	<input type="text" name="textfeld">
	<br>
	<label>Number</label>
	<input type="number" name="nummer">
	<br>
	<label>Date Time</label>
	<input type="datetime-local" name="datumhrzeit">
	<br>
	<label>Dropdown</label>
	<select name="dropdown">
		<option value="option1">Option 1</option>
		<option value="option2">Option 2</option>
	</select>
	<br>
	<label>Checkbox</label>
	<input type="checkbox" name="check">
	<br>
	<label>Textarea</label>
	<textarea name="textarea"></textarea>
	<br>
	<label>E-Mail</label>
	<input type="email" name="email">
	<br>
	<label>URL</label>
	<input type="url" name="url">
	<br>
	<label>Telephonenumber</label>
	<input type="tel" name="telnummer">
	<br>
	<button type="submit">Anmelden!</button>
	</form>
	</main>
	</body>

</html>