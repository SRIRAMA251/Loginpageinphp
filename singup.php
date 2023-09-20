<?php
include ("config.php");
include("registration.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            var p1=$("#p1").val();
            var p2=$("#p2").val();
            $("#p2").bind("blur",password_check);
        });
        function password_check(){
           var p1=$("#p1").val();
           var p2=$("#p2").val();
           if(p1!=p2){
            $("#pass_err").html("Mismatch password");
           } else{
            $("#pass_err").html("");
            $("#pass_crr").html("Password Correct");
           }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="left-column"></div>
        <div class="right-column">
            <form class="form" action="registration.php" method="post" autocomplete="off">
                <table>
                    <tr>
                        <td class="header">Create an account</td>
                    </tr>
                    <tr>
                        <td class=".sub-head">Provide your details.</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td class="input">Username</td>
                    </tr>
                    <tr>
                        <td><input type="text" placeholder="Enter your username" class="inputtag" name="username"> </td>
                    </tr>

                    <tr>
                        <td class="input">Email</td>
                    </tr>
                    <tr>
                        <td><input type="email" placeholder="you@email.com" class="inputtag" name="email"> </td>
                    </tr>
                    <tr>
                        <td class="input">Mobile No</td>
                    </tr>
                    <tr>
                        <td><input type="Text" placeholder="Enter your Mobile No" class="inputtag" name="mobile"> </td>
                    </tr>
                   
                    <tr>
                        <td class="input">Password</td>
                  
                    </tr>
                    <tr>
                        <td><input type="password" placeholder="Type your password" class="inputtag" name="password1" id="p1"> </td>
                        <td><p class="error" id="pass_err"></p>
                        <p class="correct" id="pass_crr"></p>
                    </td>
                    </tr>
                    <tr>
                        <td class="input">Confrim Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" placeholder="Confrim password" class="inputtag" name="password2" id="p2"> </td>
                    </tr>
              
                    
                 
                    <tr>
                        <td><input type="submit" name="submit" value="Create An Account" class="accbutton accletter"></td>
                    </tr>
                
                    <tr><td class="simplelast">Already a Member?<a href="index.html"><span>Sign In.</a></span></td></tr>
                </table>

            </form>
        </div>
    </div>
</body>

</html>