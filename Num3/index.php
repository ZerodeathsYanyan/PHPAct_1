<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <style>
      table, th, td {
         border: 1px solid black;
      }
   </style>
   <h1>Menu</h1>
   <table style="width:15%">
      <tr>
         <th>Order</th>
         <th>Amount</th>
      </tr>
      <tr>
         <td>Burger</td>
         <td>50</td>
      </tr>
      <tr>
         <td>Fries</td>
         <td>75</td>
      </tr>
      <tr>
         <td>Steak</td>
         <td>150</td>
      </tr>
   </table>
   <br>
   <form action="handleForm.php" method="POST">
      <label for="foods">Select an order</label>
      <select name="foods" id="foods">
         <option value="burger">Burger</option>
         <option value="fries">Fries</option>
         <option value="steak">Steak</option>
      </select><br>
      <p>Quantity <input type="number" name="quantity" required></p>
      <p>Cash <input type="number" name="cash" required></p><br>
      <input type="submit" name="submit" value="Submit">
   </form>
</body>
</html>
