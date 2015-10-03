<?php

	require_once('test/bookmark_fns.php');   
	session_start();
	
	
	
	/*这里的N，如果对于user删除了图片以后，就会不对了，可以让N等于最新一个image的数字*/
							
	$product = $_SESSION['newN'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	
	echo gettype($prodect);
		
							
							
							/* 把新的图片地址存到database  */
							$username = $_SESSION['valid_user'];
							$conn = db_connect();
							if ($conn->connect_error) {
    							die("Connection failed: " . $conn->connect_error);
							}
								
							
							$query = "UPDATE `product` SET `title` = '$title', `description` = '$description' WHERE `id` ='$product'";
							
							
							if ($conn->query($query) === TRUE) {
    								/*echo "Record updated successfully";*/
    								/* 返回到个人主页  */
									echo "<script type=\"text/javascript\">\n";
									echo "window.location.replace('http://youyouyou.co/3rdpage.php')";
									echo "</script>\n"; 
							} else {
   									echo "Error updating record: " . $conn->error;
							}
							
							
							/* 返回到个人主页  
							echo "<script type=\"text/javascript\">\n";
  							echo "alert('Upload successful!'); window.location.replace('http://youyouyou.co/3rdpage.php')";
  							echo "</script>\n"; */
  							
					
							

  		
?>
