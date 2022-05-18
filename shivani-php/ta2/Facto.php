<?php
// $num = 3;
// $factorial = 1;

// for ($x=$num; $x>=1; $x--)
// {
//     $factorial = $factorial * $x;
// }

// echo "The factorial of $num is $factorial";
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factorial using recursion</title>
</head>
<body>

<?php  

function fact ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * fact($n - 1);  
    }  
}  
  
echo "Factorial of 6 is " .fact(6);  
?>  	


<?php 
	
	
		function fact($num){
			$facto = 1;
			for ($i = $num; $i >=1; $i--){
				$facto = $facto * $i;
			}
			echo $facto;
		}

		fact(4);
?>

</body>
</html>