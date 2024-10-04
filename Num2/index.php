
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php session_start(); ?>
   <form action="handleForm.php" method="POST">
         <p>Username <input type= "text" name= "username"></p>
         <p>Password <input type= "password" name= "password"></p>
         <input type="submit" value="Login" name="login"><br><br>
         <input type="submit" value="Log out" name="logout">
   </form>
   <?php
   if (isset($_SESSION['message'])) {
    echo "<p   >" . $_SESSION['message'] . "</p>";
}
?>
   <h2>
    <?php
    if (isset($_SESSION['username'])) {
        echo "User logged in: " . $_SESSION['username'];
    }
    ?>
</h2>

<h2>
    <?php
    if (isset($_SESSION['password'])) {
        echo "Password: " . $_SESSION['password'];
    }
    ?>
</h2>

</body>
</html>