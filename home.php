<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:singnmain.php?message=Please login hear to access");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link rel="stylesheet" href="style1.css">
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="left-column"></div>
        <div class="right-column">
            <form class="form" action="loginvalidation.php"  method="POST">
                <table>
                    <tr>
                        <td class="header">Welcome Back!</td>
                    </tr>
                    <tr>
                        <td class=".sub-head">Track Your health with SportsCo.</td>
                    </tr>
                    
                    <tr>
                        <td><br></td>
                    </tr>
                  <p>Hi <?php echo $_SESSION["email"]; ?></p>
                    <tr><td><br></td></tr>
                   
                  
                        <td><br></td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr>
             <td><input type="submit" value="Sign In" class="accbutton accletter" name="submit"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                 
                    <tr>
                        <td><br></td>
                    </tr>
                
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr><td class="simplelast">New to SportsCo? <a href="singup.php"><span>Sign Up.</span></a></td></tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>