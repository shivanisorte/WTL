<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Company registration form</title>
</head>
<body>

	<form method="POST">
city : <input type="text" name="ccity">

</form>
<?php 
$city = $_REQUEST['ccity'];
echo $city ."<br>";

	$host = 'localhost:3306';
	$user = "root";
	$password = "root";

	$conn = mysqli_connect($host,$user,$password);
	if(!$conn){
		echo "error";
	}
		echo "connected";

	//$createDB = "CREATE DATABASE companyReg";
	//if(mysqli_query($conn,$createDB)){
	//	echo "DB created";
	//}
	mysqli_select_db($conn, 'companyReg');

	//$createTable = "CREATE TABLE company(companyId int, companyName varchar(20), location varchar(20),dept varchar(20));";
	//if(mysqli_query($conn,$createTable)){
	//	echo "table created";
	//}else{
	//	echo "table not created";
	//}

	//$insertTable = "INSERT INTO company(companyId,companyName,location,dept) VALUES(1,'xyz','pune','cse')";
	//if(mysqli_query($conn,$insertTable)){
	//	echo "data inserted";
	//}
$fetchData = "select * from company where location ='$city'";
$result = mysqli_query($conn,$fetchData);

While($row=mysqli_fetch_assoc($result)){
	echo "<br>" .$row["dept"] .$row['companyName'];
}







	mysqli_close($conn);



?>

</body>
</html>