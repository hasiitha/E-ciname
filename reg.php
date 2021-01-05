



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
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $tphone = $_POST['phone'];
    $gender = $_POST['gender'];
    $DOB = $_POST['dob'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    $sql = "INSERT INTO users(first_Name,last_Name,gender,dOB,email,telephone,password )
    VALUES(' $fname','$lname','$gender', '$DOB','$email','$tphone','$password' )";

    $result = mysqli_query($connection,$sql);
    if($result){
        echo "information upload success";
        header("Location: Home.php");
    }
    else{
        echo "information upload not success";
    }
}


$connection->close();
?>   