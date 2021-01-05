
<?php
    
    //connection =mysqli_connect(dbserver,dbuser,dbpass,dbname);
$con = mysqli_connect('localhost','root','','userdb');
//mysqli_connect_errorno(); mysqli_connect_error();

//checking the connection
if(mysqli_connect_errno()){
    die('Database connection failed' . mysqli_connect_errno());
}else{

    echo "connection succesful.";
}


if(isset($_POST['productSubmit'])){
    $mname = $_POST['movieName'];
    $mdate = $_POST['movieDate'];
    $mdes = $_POST['movieDescription'];
    $mcat= $_POST['movieCT'];
    $tprice = $_POST['moviePrice'];

    $sql = "INSERT INTO movie(Movie,ShowDate,Moviedes,movieCat,ticketprice)
    VALUES('$mname','$mdate','$mdes','$mcat','$tprice')";

    $result = mysqli_query($con,$sql);
    if($result){
        echo "information upload success";
    }
    else{
        echo "information upload not success";
    }
}


$con->close();
?>   
   