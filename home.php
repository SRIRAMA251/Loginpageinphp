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
            <form class="form" action="logout.php"  method="POST">
                <table>
                    <tr>
                        <td class="header">Welcome Back!</td>
                    </tr>
                    <tr><td>    <h2><?php echo $_SESSION["email"]; ?></h2></td></tr>
                    <tr>
                        <td class=".sub-head">Track Your health with SportsCo.</td>
                    </tr>
                    
                    <tr>
                        <td><br></td>
                    </tr>
           <tr><td><ul>
            <li>Track your daily workouts and fitness progress</li>
            <li>Set and achieve your fitness goals</li>
            <li>Connect with other fitness enthusiasts in our community</li>
            <li>Access personalized nutrition plans</li>
            <li>Stay motivated and inspired on your fitness journey</li>
        </ul></td></tr>
                    <tr><td><br></td></tr>
                   <tr><td>No matter your fitness level or goals, SportsCo is here to support you every step of the way. Get ready to take charge of your health and reach new heights!</td></tr>
                   
                  <tr>
                        <td><br></td>
                    </tr>
                    <tr><td>If you have any questions or need assistance, feel free to reach out to our customer support team. We're here to help you succeed!</td></tr>
                    <tr><td><br></td></tr>
                    <tr>
             <td><input type="submit" value="Logout" class="accbutton accletter" name="submit"></td>
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
                   
                </table>
            </form>
        </div>
    </div>
</body>

</html>