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
    $mname = $_POST['movie'];
    $thea = $_POST['theatre'];
    $tick = $_POST['ntickets'];
    $pay = $_POST['payMethod'];
   

    $sql = "INSERT INTO tickettable( MovieName,ThetreName,Numberoftickets,paymentMethod)
    VALUES('$mname','$thea','$tick ','$pay')";

    $result = mysqli_query($connection,$sql);
    if($result){
        echo "information upload success";
        header("Location: Home.php");
    }
    else{
        echo "information upload not success";
         header("Location: tickets.php");
    }
    }



$connection->close();
?>   