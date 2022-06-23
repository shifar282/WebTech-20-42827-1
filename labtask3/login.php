<!DOCTYPE html>
<html>
    <head>
   <title>login</title>
   <link rel = "stylesheet" href = "styles.css">
    </head>
    <body>

  <!-- <div class = "container">
  <h2>Login Form </h2>
-->
</div>
    
    <?php
    $usernameErr = ""; $passwordErr = "";
    $username = ""; $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"]))
        {
            $usernameErr = "user name required";
        }

        else 
        {
            $username = $_POST["username"];

            if(!preg_match("/^[a-zA-Z-' ]*$ _/",$username)){
                $usernameErr = "Can contain a-z,A-Z,period,dash only";
            }

            else
            {
                $usernameErr = "";
            }
        }

        if(empty($_POST["password"]))
        {
            $passwordErr = "password required";
        }
        else
        {
            $password = $_POST ["password"];

            if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST["password"]))
            {
            $passwordErr = "Password must contain  special character and  must 8 characters password";
            }
            else
            {
                $passwordErr = "";
            }
        }
    }
    ?>
    
     <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class = "my form">
     <div class = "form" style = "padding-left: 200px; padding-top:200px;">
     <h2>Login Form </h2> <br>
       <div class = "username">
         <label for="">User Name</label>
         <input type="text" name = "username">
         <span class = "error">
         <?php echo $usernameErr;?>
        </span>
         <br> <br>
        </div>

    <div class = "password" >
           <label for="">Password</label>
           <input type="password" name = "password" style = "padding-left:10px">
           <span class = "error">
         <?php echo $passwordErr;?>
           </span>
        <br> <br>
         </div>
    <hr class = "line">

    <div class = "remember">
        <input type="checkbox"> Remember Me
        <br> <br>
    </div>

    <input type="submit" class = "submit" value = "submit">
    <span> <a href="#">Forgot password?</a> </span>


    


     </div>
</form>

<?php
    echo $username,$password;
?>


        
    </body>
</html>