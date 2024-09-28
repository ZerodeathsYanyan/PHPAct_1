<?php  
if(isset($_GET['getSum'])) {

	// String passed inside our GET variable comes from the name attribute of our input element 
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

	// Create a variable to store the sum.
	$sum = ($num2**2) - (4 * $num1 * $num3);

	// Print the result
	echo "$sum";
}
?>