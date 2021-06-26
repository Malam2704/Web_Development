<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8" />
	<title>Clean input</title>
 	<style type="text/css">
 		form div{margin: 1em;}
 		form div label{float: left;width: 10%;}
 		form div.radio {float: left;}
 		.clearfix {clear: both;}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			<label>First Name:</label>
			<input type="text" name="fname" size="30" />
		</div>
		<div>
			<label>Date:</label>
			<input type="text" name="date" size="30" />
		</div>
		<div>
			<label>Email:</label>
			<input type="text" name="email" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" name="submit" value="Submit Form" />
		</div>	
	</form>
	<?php
		// write our own html sanitize function
		// String we want to sanitize along with a lenght defualt at 50
		function sanitize($str,$length=50){
			//trim the stirng gettin rid of leading and trailing blank spaces.
			$str = trim($str);
			// gets rid of all the html elements, and changes them
			$str = htmlentities($str, ENT_QUOTES);
			return substr($str,0,$length);
		}

		// include the validations
		include "validations.php";

		// if they sent us something...
		if(!empty($_POST['submit'])){
			echo "<hr/>";
			echo sanitize($_POST['fname']);// echo $_POST['fname'];
			echo "<hr/>";
			if (!empty($_POST['date'])){
				$date = sanitize($_POST['date'],30);
				$d = date1($_POST['date']);
				if($d){
					echo "<p><em>Today is $date </em></p>";
				}else{
					echo "<p>Sorry, you couldn't enter a good date</p>";
				}
			}
			if (!empty($_POST['email'])){
				// Filters
				$email = $_POST['email'];

				// if we wanted to remove all illegal characters from an email
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);

				// Validate email address
				if(!filter_var($email, FILTER_SANITIZE_EMAIL) === false){
					echo "$email is a valid email address</p>";
				}else{
					echo "$email is not a valid email address</p>";
				}
			}
		}

		// if(isset($_POST['submit'])){
		// 	//echo "Form submitted by " . $_POST['fname'];
		// 	echo sanitize(($_POST['fname']), 20);
		// }
	?>
</body>
</html>