<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Electricity bill</title>
</head>
<body>

<?php
	$unit = 60;
	$bill = 0;
		if($unit <= 50){
			$bill = $bill + ($unit * 3.50);
			echo $bill; 
		}elseif ($unit >50 and $unit <=150) {
			$bill = $bill + ($unit *4.00);
			echo $bill;
		}else{
			echo "add more code";
		}

?>

</body>
</html>