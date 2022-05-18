<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
</head>
<body>
    
<?php

// $colors = array("Red", "Green", "Blue"); //indexed
// $colors[3] = "Yellow"; 

// krsort($colors);


// $colors = array("pink" => 2000, "red" => 1000, "orange" => 500); //associaton

// asort($colors);

$colors = array(
  "red" => array(
    "Apple"=>100,
    "Ball" =>80
  ),
  "pink" => array(
    "Rose"=>83,
    "lipstick"=>97
  )
  );


// foreach ($colors as $value) {
//   foreach ($value as $val)
//   echo "$val <br>";
// }


for ($i = 0; $i <= count($colors)-1; $i++) {
     for ($j = 0; $j <= 1; $j++) {
       echo "$colors[$i][$j] <br>";
}
}

// foreach ($colors as $value) {
//     echo "$value <br>";
//   }


// for ($i = 0; $i <= count($colors)-1; $i++) {
//     echo "$colors[$i] <br>";
// }


?>
    
</body>
</html>