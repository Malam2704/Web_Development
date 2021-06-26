<?php
/**
 * Connect to the database.
 */
	include "../../../dbconn.php";
		//if we have a connection 
		if($mysqli){
			// if we are adding a new user
			/*
				we are using client entered data, therefore we have to use a prepared statement
				1)prepare the query
				2)bind
				3)execute
				4)close
			*/
			$stmt = $mysqli->prepare("INSERT INTO `exercise` (`uname`, `comment`, `last_modified`) VALUES (?, ?, ?)");
			$filename = "contact.php";
			$nowTime = date("F d Y H:i:s.", filemtime($filename));
			$stmt->bind_param("sss",$_GET["name"],$_GET["com"],$nowTime);
			$stmt->execute();
			$stmt->close();

			// get the first and last from the 240Inserttable
			// get the contents of the table and send back...
			// $sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
			$sql = "SELECT * FROM `exercise` LIMIT 50";
			$result = $mysqli->query($sql);
			// var_dump($result);
			// $row = $result->fetch_assoc();
			//$res = $result->fetch_assoc();
			if($result){
				// put the first and last elements of the 240Inserttable into 
				// a php array.
				while($rowHolder = mysqli_fetch_array($result,MYSQLI_ASSOC)){
					$records[] = $rowHolder;
				}
			}
		}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Exercise - 7</title>
	</head>
	<body>
		<h3>Add a Comment</h3>
		<form action="contact.php" method="get">		
			First name: <input type="text" id="first" name="name" />
			<br>
			Comment: <textarea name="com" id="comment" style="width: 100%;" rows="10"></textarea>
			<input type="submit" value="Add to the List"/>
		</form>
		<hr/>
		<h3>Previous Comments</h3>
		<div id="list">
			<ul>
			<?php
				// will use for output
				// for loop for all the elements in the table will be echo'd
				// with the html lists format
				foreach($records as $this_row){
					//echo $this_row;
					echo '<li> Id: ' . $this_row['id'] . "<br> Name:" . $this_row['uname'] . "<br> Comment: " . $this_row['comment'] . "<br> Last Modified: " . $this_row['last_modified'] . '</li><br><br>';
				}
			?>
			</ul>
		</div>
	</body>
</html>