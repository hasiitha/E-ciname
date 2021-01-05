<?php




    
    
    //connection =mysqli_connect(dbserver,dbuser,dbpass,dbname);
$connection = mysqli_connect('localhost','root','','userdb');
//mysqli_connect_errorno(); mysqli_connect_error();

//checking the connection
if(mysqli_connect_errno()){
    die('Database connection failed' . mysqli_connect_errno());
}else{

    echo "connection succesful.";
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =$_POST['password'];

$u = "SELECT email,password,id,first_Name,telephone,dOB FROM users";
            $result1 = $connection->query($u);
            while($P = $result1->fetch_assoc()){
                $x = $P["email"];
                $y = $P["password"];
			
            if($email == $x || $password == $y){
				if($email == $x && $password == $y){
					header("Location:userAcc.php");
		echo "User ID:-".$P["id"];
		echo "<br><br>Name :-".$P["first_Name"];
		echo "<br><br>Registration Date:-".$P["dOB"];
		
	


echo"<br><br>";
echo"Email:-".$P["email"];
echo"<br><br>";
echo"Mobile:-".$P["telephone"];
echo"<br><br><br>";}
				else{
					echo"<b>Please enter a valid password</b>";
				}
                }
                }
}





$connection->close();
        
?>