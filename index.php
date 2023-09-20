<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link rel="stylesheet" href="style1.css">
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
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
                    <tr>
                        <td class="input">Email</td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" placeholder="Enter your email" class="inputtag"> </td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr>
                        <td class="input">Password
                            
                        </td>
                        
                    </tr>

                    
                    <tr>
                        <!-- <td class="password-container">

                            <input type="password"  placeholder="By.YOu02" class="inputtag" name="password" id="password"><i class="fa-solid fa-eye" id="show-password"></i> </td> -->
                            <td><input type="password" name="password" placeholder="Enter your Password" class="inputtag"> </td>
                    </tr>
                   
                   
                    <tr>
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
                    <tr><td class="simplelast">New to SportsCo? <a href="signup.html"><span>Sign Up.</span></a></td></tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>