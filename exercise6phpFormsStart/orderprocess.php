<?php
	/*
	Modular review
	1) Slice up this page for review.
	2) Set $page
	3) set up $path (and put into includes)
	*/
	$path = './';
	$page = 'Order Receipt';
	include $path.'assets/inc/header.php';
?>
<h2>Your Pizza Order</h2>
<?php
//-------------------------------------------------- 
// get the user's information, by the input name.
$cName = $_POST['customerName'];
$cID = $_POST['customerID'];
$pSize = $_POST['pizzaSize'];
$tSize = $_POST['pizzaTopping'];
//--------------------------------------------------
	// Validate the curstomer ID so it's only numbers
	if(empty($cID)){
		// if ID is empty, force the browser to go back to
		// the orderform page, but with the name the user entered
		// appended to the url.
		header('Location: orderform.php?name='.$cName);
	}else{
		// as long as ID is only numbers
		if(!is_numeric($cID)){
			// below can be one line.
			echo '<p>Customer ID ' . $cID .
				' is not a valid ID because it contains a non numeric character.</p>';
			// in this case, we are using a hidden input to send
			// the name back
			echo '<p><form action="orderform.php"><input type = "hidden" name="name" value="' . 
				$cName . '"/><input type="submit" value="ok" /></form></p>';
		}else{
			// echo "we should be good for now";
			switch($pSize){
				case 'P':
					$pizzaCost = 7.99;
					$pizzaType = "Personal";
					break;
				case 'S':
					$pizzaCost = 10.99;
					$pizzaType = "Small";
					break;
				case 'M':
					$pizzaCost = 13.99;
					$pizzaType = "Medium";
					break;
				case 'L':
					$pizzaCost = 16.99;
					$pizzaType = "Large";
					break;
				default: //if no choice, customer gets medium
					$pizzaCost = 13.99;
					$pizzaType = "Medium";
					break;
			}

			// I tried switch casing before, but made it more
			// efficient.
			// echo $tSize;
			// switch($tSize){
			// 	case 'zero':
			// 		$toppingCost = 0.0;
			// 		break;
			// 	case 'one':
			// 		$toppingCost = 2.00;
			// 		break;
			// 	case 'two':
			// 		$toppingCost = 3.00;
			// 		break;
			// 	case 'three':
			// 		$toppingCost = 3.75;
			// 		break;
			// 	default:
			// 		$toppingCost = 0.0;
			// 		break;
			// }

			// Create tax and total amount vars.
			// New price with the toppigns cost.
			$price = $pizzaCost + $tSize;
			$taxAmount = $price * .08;
			$totalCost = $price + $taxAmount;

			// Print the receipt
			// numfat_create() is an excellent fucntiosn that lets us switch from
			// one currency to another.
			$fmt = numfmt_create('en_US', NumberFormatter::CURRENCY); //try 'de_DE' for german euros
			// Dropping out of PHP just to show you we can - but when we
			//  go back, we are still in the if.

			?>
				<div id="receipt">
				<br/>Your Delicious Pizza Order!!
				<br/>
				<br/>Pizza Price:
			<?php
				echo numfmt_format_currency($fmt,$pizzaCost,"USD");
				// New echo to show the toppings price
				echo "<br> Toppings Price: " . numfmt_format_currency($fmt,$tSize,"USD");
				echo "<br> Tax Amount: " . numfmt_format_currency($fmt,$taxAmount,"USD");
				echo "<br> Total Cost of your order is: " . numfmt_format_currency($fmt,$totalCost,"USD");
				echo "<br><br> Thank you for your order";
				echo ($cName == '')? '.': ". $cName.";
				echo "</div>";
		}
	}
?>
</div>

<?php
	include $path."assets/inc/footer.php";
?>