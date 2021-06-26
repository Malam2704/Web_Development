<?php
	/*
	Modular review
	1) Slice up this page for review.
	2) Set $page
	3) set up $path (and put into includes)
	*/
	$path = "./";
	$page = "Email Processing";
	include $path."assets/inc/header.php";
?>
	<body class="emailform contactWrapper">
		<div id="container">
			<h2 style="margin-bottom: 2em;">Mohammed's Contact Form</h2>
		
			<form name="OrderForm" action="emailprocess.php"  onsubmit="return validateForm();" method="post">
				<!-- if there is a name appended to the url, the using(PHP), put that name in the blank slot -->
				<h3>Name: <input type="text" name="personName" <?php if(isset($_GET['name'])){ echo 'value="'.$_GET['name'].'"';}?> /> </h3>
				<br>
				<p><h3>Reason for contacting: </h3>
					<!-- Note the <label> tags below that allow the user to click on the text! -->
					<input type="radio" name ="emailSubject" value = "P" id="personal"/>Questions about me<br/>
					<input type="radio" name ="emailSubject" value = "S" id="small"/>Questions about my projects<br/>
					<input type="radio" name ="emailSubject" value = "M"  id="medium"/>Interview with me<br/>
				</p>
				<h3>Other: <input type="text" id="otherEmailSubject" name="emailSubject" checked="true"></h3>
				<br>
				<h3>Your Email: <input type="email" name="theirEmail"></h3>
				<br>
				<!-- <input type="text" name="Message" style="width: 50%; height: 100px"> -->
				<h3 style="text-decoration: underline;">Contact Message:</h3> 
				<textarea name="Message" id="MessagePortion" style="width: 100%;" rows="10"></textarea>
				<br>
				<br>
				<p><input type="submit"  name="Submit"  value=" Send Form "  /></p>
				<br/>
				<p><input type="button" name="goBack" value=" Go back " onclick="backHome()"></p>
			</form>
		</div> 
	</body>
</html>