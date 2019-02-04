<?php
session_start();
if(isset($_POST['submit'])){
    require 'connection.php';
    $usermial = $_POST['mail'];
    $userpass = $_POST['pass'];
    $result = mysqli_query($con, 'select * from account where user_email ="'.$usermial.'" and user_pass = "'.$userpass.'"');
    if(mysqli_num_rows($result)==1){
        $_SESSION['usermail']=$usermial;
        header('Location: welcome.php');
    }
    else{
        echo "Invalid User";
    }
}

?>

<form method="post" action="index.php">
    <h2>Email :</h2><input type="email" name="mail" ><br>
    <h2>Password :</h2><input type="password" name="pass" ><br><br>
    <input type="submit" name="submit" value="Login">

</form>