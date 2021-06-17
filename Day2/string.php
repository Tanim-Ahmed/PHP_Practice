<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

	//string 
	$s = "Tanim Ahmed";
	//counting word length
	echo strlen($s);
	echo "<br>";
	//string reverse

	echo strrev($s);
echo "<br>";
	//string position
	echo strpos("Tanim Ahmed","Ah");
		echo "<br>";
	//to upper and tolower
	echo strtolower($s);
		echo "<br>";

	echo strtoupper($s);

//string word count
	echo str_word_count("Tanim Ahmed Bijoy");

	//string replacement
	echo str_replace("php", "Tanim is learning php", "php and html");


	?>

</body>
</html>
