<?php
	/*
	Modular review
	1) Slice up this page for review.
	2) Set $page
	3) set up $path (and put into includes)
	*/
	$path = "./";
	$page = "Pizza Order";
	include $path."assets/inc/header.php";
?>

	<div id="container">
		<h2>Order a Delicious Pizza!</h2>
	
		<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">
			<!-- if there is a name appended to the url, the using(PHP), put that name in the blank slot -->
			<p>Name:  <input type="text" name="customerName" <?php if(isset($_GET['name'])){ echo 'value="'.$_GET['name'].'"';}?> /></p>
			<!-- if there is a name appended to the url, then turn the background of this input pink -->
			<p>ID:  <input type="text"  name="customerID" style="<?php if(isset($_GET['name'])){ echo 'background-color:pink'; } ?>" /></p>
			<p> Check the size of Pizza you would like to order:<br />
				<!-- Note the <label> tags below that allow the user to click on the text! -->
				<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label><br/>
				<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label><br/>
				<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label><br/>
				<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label>
			</p>
			<p> Select the number of toppings you want on your pizza:<br />
				<!-- I added the value of the topping price, so I don't need a switch case -->
				<!-- Rest fo the sutff is appropriately named. -->
				<input type="radio" name ="pizzaTopping" value = "0.0" id="none"/><label for="none">No Extra Toppings<label><br/>
				<input type="radio" name ="pizzaTopping" value = "2.0" id="one"/><label for="one topping">One Topping<label><br/>
				<input type="radio" name ="pizzaTopping" value = "3.0"  id="two" checked="two toppings"/><label for="medium">Two Toppings<label><br/>
				<input type="radio" name ="pizzaTopping" value = "3.75"  id="three"/><label for="three toppings">Three Toppings<label>
			</p>
			<p>
				<input type="submit"  name="Submit"  value=" Send Form"  />
			</p>
		</form>
	</div> 
<?php
	include $path."assets/inc/footer.php";
?>