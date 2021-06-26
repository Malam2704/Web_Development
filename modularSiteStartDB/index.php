<?php
	$page = "Home";
	$path = "./";

	require($path . "assets/inc/header.php");
	require_once($path . "assets/inc/nav.php");

	// get information for this page form the db!

	/* 
		1.load my connection
		2.query
		3.execute the query
		4.do something with the results
	*/
	// 1
	require $path .'../../../dbconn.php';
	// 2
	$sql = "SELECT content from modularSite2198 where name='" . $page . "'";
	// 3
	$result = $mysqli->query($sql);

	// 4
	if($result->num_rows > 0){
		while($row = $result->FETCH_ASSOC()){
			echo $row['content'];
		}
	}else{
		echo "0 results, you did something wrong!";
	}

	include($path . 'assets/inc/footer.php');

?>

				<h1>Home page stuff...</h1> 
				<div>(eventually, each page will be some includes and a db call only!)</div>
<?php
	include($path . "assets/inc/footer.php");
?>