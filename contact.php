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
    $name = $_POST['name'];
    $mail = $_POST['cnfrm_email'];
    $msg = $_POST['message'];
   

    $sql = "INSERT INTO contacttable( Name,Email,message)
    VALUES('$name','$mail','$msg')";

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