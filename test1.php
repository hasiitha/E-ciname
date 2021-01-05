<?php
$con = new mysqli("localhost","root","","userdb");
if($con->connect_error){
	die("connection unsuccesful");
}
else{
echo "connection succesfull";}

$sql = "SELECT id,first_Name,last_Name,gender,dOB from users";

$result = $con->query($sql);
if($result->num_rows >0){
	
	while($row = $result->fetch_assoc()){
		if($row["id"] == 14){
		echo "<br><br><br>id is :".$row["id"];
		echo "<br>name is :".$row["first_Name"];
		echo "<br>lastname is :".$row["last_Name"];
		echo "<br>gender is :".$row["gender"];
		echo "<br>birthdate is :".$row["dOB"];
		}
	}	
}
   	
$con -> close();
?>