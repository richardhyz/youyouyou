<?php
	require_once('test/bookmark_fns.php');   
	session_start();
	$username = $_SESSION['valid_user'];
	
	$product = $_POST['product'];
	$id = $_POST['id'];
	
	
	$conn = db_connect();
		if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
		}
	
	/* .................update user-product table .................... */
	$result = $conn->query("select product from user_product where username ='$username'");
	$row = mysql_fetch_array($result);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			 $string = $row["product"];
			 $array = explode("," , $string);
		}
	} else {
		echo "0 results";
	}
	

	$endArray = array_diff($array, array($id));
	$newArray = implode(",", $endArray);
	//print_r($newArray);
	
	// $newArray = array_pop($array);
	
	/* .........*/
	$result = $conn->query("SELECT `index` FROM `user_product` WHERE `username`='$username'");
	$row = mysql_fetch_array($result);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$index = $row["index"];
		}
	} else {
		echo "0 results";
	}
	
	//$newIndex = $index-1;
	
	
	$query = "UPDATE `user_product` SET `product` = '$newArray' WHERE `username` ='$username'";					
	//$query2 = "UPDATE `user_product` SET `index` = '$newIndex' WHERE `username` ='$username'";
	
	$conn->query($query);
	//$conn->query($query2);




	/* .................update product table .................... */
	
	$query3 = "DELETE FROM `product` WHERE `id`='$product'";
	$conn->query($query3);
	
	
	
	echo "<script type=\"text/javascript\">\n";
	echo "window.location.replace('http://youyouyou.co/3rdpage.php')";
	echo "</script>\n"; 

?>