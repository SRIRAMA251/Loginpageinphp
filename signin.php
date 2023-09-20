<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];


$serverName="localhost";
$userName="root";
$password1="";
$dbName="form";

$con=mysqli_connect($serverName,$userName,$password1,$dbName);

if($con)
{
    $sql="insert into logindetail(email,password) values('$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserserted successfully";
    }else{
        echo "data inserted successfullly";
    }
}
}
?>