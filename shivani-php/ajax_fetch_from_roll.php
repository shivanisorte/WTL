<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"dbExpert12");

$n=$_REQUEST['rollno'];

$query="select * from stud12 where rollno=$n";
//$query="select * from stud12";

$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
	//echo $row;
     $jsonArr[]=$row;
	//echo json_encode($row);
}
echo json_encode($jsonArr);

mysqli_close($con);

?>