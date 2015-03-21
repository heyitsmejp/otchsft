<?php 
require("includes/functions.php");

?> 
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
        
        if (isset($_POST['submit'])){
                
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                if (strlen($username) < 5){
                    $usernameError = "Username must be at least 5 characters long." . "<br>";
                }
                else {
                        $usernameError = "";
                    }
                
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                if (!filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)){
                    $emailError = "Please enter a valid email address." . "<br>";
                }
                else {
                        $emailError = "";
                    }        
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                if (strlen($password) < 8){
                    $passwordError = "Password must be at least 8 characters." . "<br>";
                }
                else {
                        $passwordError = "";
                    }
                
                $confirmPassword = filter_input(INPUT_POST,'confirmPassword',FILTER_SANITIZE_STRING);
                if ($password <> $confirmPassword){
                    $confirmPasswordError = "Passwords do not match." . "<br>";
                }
                else {
                        $confirmPasswordError = "";
                    }
              if ($nameError == "" && $emailError == "" && $passwordError == "" && $confirmPasswordError == "" ){
                 
                 if (createUser($username, $password, $email)){
                     $createUserResult = "User has been created.";
                 }
                 else {
                     $createUserResult = "User creation failed.";
             }
           }  
        }
             
            ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OTCHS File Tracker - Create Users</title>
    </head>
    <body>
        <form name='newUser' method='post' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" maxlength="30" value="<?php echo $_POST['username']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        E-mail Address: 
                    </td>
                    <td>
                       <input type="text" name="email" maxlength="50" value="<?php echo $_POST['email']; ?>"> 
                    </td>
                </tr>
                <tr>
                    <td>
                        Password: 
                    </td>
                    <td>
                        <input type="password" name="password" maxlength="128" value="<?php echo $_POST['password']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm Password: 
                    </td>
                    <td>
                        <input type="password" name="confirmPassword" maxlength="128" value="<?php echo $_POST['confirmPassword']; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                <center><input type ="submit" name="submit"></center>
                    </td>
                </tr>
                <span id="error">
                    <tr><td colspan="2"><?php echo $usernameError; ?></td></tr>
                    <tr><td colspan="2"><?php echo $emailError; ?></td><tr>
                    <tr><td colspan="2"><?php echo $passwordError; ?></td></tr>
                    <tr><td colspan="2"><?php echo $confirmPasswordError; ?></td></tr>
                </span>
            </table>
             
            
        </form>
            

    </body>
</html>
