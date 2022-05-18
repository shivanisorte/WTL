<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <form method="POST">
        Enter a number:
        <input type="number" value="Enter Number">
        
        <input type="Submit" value="Show Multiplication Table">
    </form>

    <?php
        if($_POST) {
            $num = $_POST["number"];

            echo "Multiplication Table of".$num. " ";
                
            for ($i = 1; $i <= 10; $i++) {
                echo $num." x ".$i." = ". $num * $i ;
                echo"<br>";
            }
        }
        ?>
</body>
</html>




