
<?php
session_start();
include("config.php");
if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    echo "$email";
    echo "$password";
    if($email!="" && $password!=""){
        $sql="select email,password from registration where email='$email' AND password='$password'";
       
        $result=$con->query($sql);
        if($result->num_rows==1){
            $_SESSION["email"]=$email;
            header("location:home.php");
            exit;
        }else{
            header("location:index.php?message=Invalid user or password");
           exit;
        }
    }
    else{
        echo "please fill the details";
    }
}
else{
    echo "please fill the details complete";
}
?>