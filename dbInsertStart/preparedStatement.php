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
			$stmt = $mysqli->prepare("insert into 240Insert (last,first) values (?,?)");
			$stmt->bind_param("ss",$_GET["lName"],$_GET["fName"]);
			$stmt->execute();
			$stmt->close();

			// get the first and last from the 240Inserttable
			// get the contents of the table and send back...
			$res = $mysqli->query('select first, last from 240Insert');
			if($res){
				// put the first and last elements of the 240Inserttable into 
				// a php array.
				while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
					$records[] = $rowHolder;
				}
			}
		}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>240 DB Insert</title>
	</head>
	<body>
		<h3>The List</h3>
		<div id="list">
			<ul>
			<?php
				// will use for output
				// for loop for all the elements in the table will be echo'd
				// with the html lists format
				foreach($records as $this_row){
					echo '<li>' . $this_row['first'] . " " . $this_row['last'] . '</li>';
				}
			?>
			</ul>
		</div>
		<hr/>
		<h3>Add to the list</h3>
		<form action="preparedStatement.php" method="get">		
			First name: <input type="text" id="first" name="fName" />
			Last name: <input type="text" id="last" name="lName"/>
			<input type="submit" value="Add to the List"/>
		</form>
	</body>
</html>