<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body>

<?php 
$car = array('sedan','xuv','sport');
echo "Numeric array";
foreach ($car as $key => $value) {
	echo $value ."<br>";
}

$carPrice = array("bmw" => "10", "audi"=> "20");
echo "associative array <br>";
foreach($carPrice as $carName => $price){
	echo $carName . " " .$price ."<br>";
}


echo "multidimensional array <br>";

$carr = array(
	array("abc", 10,20),
	array("pqr",20,30 )
);

foreach($carr as $index => $data){
	foreach($data as $key => $val){
		echo $val ."<br>";
	}
}

?>

</body>
</html>