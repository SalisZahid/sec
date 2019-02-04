<!DOCTYPE HTML>
<html>
<head>
    <title>Get And Post Method</title>
</head>
<body>
<form action="getpost.php" method="post">
    Name:<input type="text" name="val1" placeholder="Username">
    email:<input type="email" name="val2" placeholder="email">
    <input type="submit" name="submit" value="submit now!">
</form>
<?php
    $name = $_POST['val1'];
    $email = $_POST['val2'];

?>
</body>
</html>
