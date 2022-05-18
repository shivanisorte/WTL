<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP script</title>
</head>
<body>
    <?php
    $conn = new mysqli('localhost', 'root', '');
    if ($conn) {
        echo "Connected successfully";
        echo"<br>";
        
      }
    else{
        echo "Error in connecting".mysqli_error($conn);
        echo"<br>";
        die();
    }

    $str = "CREATE DATABASE student";

    if (mysqli_query($conn,$str)) 
    {
    echo "Database created successfully";
    echo"<br>";
    } 
    else 
    {
    echo "Error creating database: ".mysqli_error($conn);
    echo"<br>";
    }

    mysqli_select_db($conn, "student");


    $sql = "CREATE TABLE is3 (
    rollnum INT(7) PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    )";


    if (mysqli_query($conn,$str)) 
    {
    echo "Table created successfully";
    echo"<br>";
    } 
    else 
    {
    echo "Error creating table: ".mysqli_error($conn);
    echo"<br>";
    }

    $conn->close();
    
    
    
    
    ?>
    
  
</body>
</html>