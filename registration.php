<?php
include ("config.php");
?>
<?php
if(isset($_POST["submit"])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    if($username!=""&&$email!=""&&$mobile!=""&&$password1!=""&&$password2!=""){
        if($password1==$password2){
 $sql="insert into registration(username,email,mobile,password) values ('$username','$email','$mobile','$password1')";
 if($con->query($sql)){
    echo "you are joined";
    header("location:index.php");
 }else{
    echo "your are not joined";
    header("location:singup.php");
 }
}else{
    echo "pass doesn't match";
}
    }
}
?> 