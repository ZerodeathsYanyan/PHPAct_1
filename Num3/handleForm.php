<?php
session_start();

// Check if form is submitted
if (isset($_POST['submit'])) {
    $menu_prices = [
        'burger' => 50,
        'fries' => 75,
        'steak' => 150
    ];

    $food = $_POST['foods'];
    $quantity = intval($_POST['quantity']);
    $cash = floatval($_POST['cash']);

    // Check if the selected food is in the menu
    if (array_key_exists($food, $menu_prices)) {
        // Calculate total price
        $total_price = $menu_prices[$food] * $quantity;

        // Check if cash provided is sufficient
        if ($cash < $total_price) {
            // Store warning message in session and redirect to receipt
            $_SESSION['insufficient_cash'] = true;
            $_SESSION['total_price'] = $total_price;
            $_SESSION['cash'] = $cash;
            $_SESSION['date_time'] = date("m/d/y h:i:s A");
        } else {
            // Calculate change and store data in session for a successful transaction
            $_SESSION['insufficient_cash'] = false;
            $_SESSION['total_price'] = $total_price;
            $_SESSION['cash'] = $cash;
            $_SESSION['change'] = $cash - $total_price;
            $_SESSION['date_time'] = date("m/d/y h:i:s A");
        }

        // Redirect to receipt page
        header('Location: receipt.php');
        exit();
    } else {
        echo "";
    }
} else {
    echo "";
}
?>
