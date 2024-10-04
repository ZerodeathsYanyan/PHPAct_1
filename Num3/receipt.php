<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Receipt</title>
</head>
<body>
   <style>
      .box {
         border: 1px dotted black;
         width: 100%;
         padding: 10px;
         margin-top: 20px;
      }
      .box.warning-border {
         border-color: red;
      }
      .warning {
         font-weight: bold;
      }
   </style>

   <div class="box <?php echo ($_SESSION['insufficient_cash'] ?? false) ? 'warning-border' : ''; ?>">
      <?php
      // Check if there was insufficient cash
      if ($_SESSION['insufficient_cash'] ?? false) {
          echo "<h1 class='warning'>Sorry, balance not enough.</h1>";
      } else {
      ?>
          <center><h1>RECEIPT</h1></center>
          <h1>Total price: $<?php echo number_format($_SESSION['total_price'] ?? 0, 2); ?></h1>
          <h1>You paid: $<?php echo number_format($_SESSION['cash'] ?? 0, 2); ?></h1>
          <h1>Change: $<?php echo number_format($_SESSION['change'] ?? 0, 2); ?></h1>
          <h1><?php echo $_SESSION['date_time'] ?? ''; ?></h1>
      <?php
      }
      ?>
   </div>
</body>
</html>
