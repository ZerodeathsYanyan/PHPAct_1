<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>


    <h1>Discriminant of a Quadratic equation</h1>
    <form action="handleForm.php" method="GET">
        <p>A<input type="text" name ="num1"  placeholder="Value of a here"></p> 
        <p>B<input type="text" name ="num2" placeholder="Value of b here"></p>
        <p>C<input type="text" name ="num3" placeholder="Value of c here"></p>  
        <p><input type="submit" value="Submit" name="getSum"></p>
    </form>


</body>
</html>