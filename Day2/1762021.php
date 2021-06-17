<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php
	//array
$sub = array("html","css");
echo $sub[0]."<br>".$sub[1]."<br>";
//length function count()
echo count($sub);
echo "<br>";
for($i = 0;$i<count($sub);$i++)
{
	echo $sub[$i]."<br>";
}
//associative array just like as key and value

$asarray = array("tanim"=>"01921223700",
"helal"=>"01722669394");
echo $asarray["tanim"]."<br>";
foreach ($asarray as $name => $phone) {
	// code...

echo "Name=".$name.",Phone=".$phone."<br>";
}

	$ar=array("a","b","d","c");
	//ascending order sorting
	sort($ar);
	for($i=0;$i<count($ar);$i++)
	{
		echo $ar[$i]."<br>";
	}

	//descending order sorting
	rsort($ar);
	for($i = 0;$i<count($ar);$i++)
	{
		echo $ar[$i]."<br>";
	}


	//associative array sorting with res to value
	$assarr = array("a"=>"1","b"=>"2","d"=>4,"e"=>"2");
	asort($assarr);
	foreach($assarr as $key=>$value)
	{
		echo $key. $value."<br>";
	}

//with res to key

	ksort($assarr);
	foreach($assarr as $key=>$value)
	{
		echo $key. $value."<br>";
	}
//descending with respect to value;
	arsort($assarr);
	foreach($assarr as $key=>$value)
	{
		echo $key. $value."<br>";
	}


//descending with respect to key

	krsort($assarr);
	foreach($assarr as $key=>$value)
	{
		echo $key. $value."<br>";
	}
//multidimensional array

	$marr = array(
		array("Samsung",2,23),
		array("nokia",3,35),
		array("realme",4,45)


	);



 echo $marr[0][0];
 echo "<br>";
 echo $marr[2][1];



	?>

</body>
</html>
