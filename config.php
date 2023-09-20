<?php
$con=new mysqli("localhost","root","","form");
if($con->connect_error){
    echo $con->connect_error;
    die("Database not connected");
}
?>