
<?php
	require_once('test/bookmark_fns.php');   
	session_start();
	$username = $_SESSION['valid_user'];


	$file_exts = array("jpg", "bmp", "jpeg", "gif", "png", "JPG");
	$upload_exts = end(explode(".", $_FILES["file"]["name"]));
	if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/pjpeg"))
		&& ($_FILES["file"]["size"] < 24000000)
		&& in_array($upload_exts, $file_exts))
		{
			if ($_FILES["file"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
				}
			else
				{
					$conn = db_connect();
					if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
					}

					/*$ind = $conn->query("select point from user_product where username ='$username'");*/
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

						
					$newIndex = $index+1;
					$newProduct = $username.$newIndex;
					$_SESSION['newN'] = $newProduct;
					
					move_uploaded_file($_FILES["file"]["tmp_name"], "images/products/".$newProduct.".jpg");
					
					
					
					/* 把新的图片地址存到database  */
					$result2 = $conn->query("SELECT `product`  FROM `user_product` WHERE `username`='$username'");
					$row2 = mysql_fetch_array($result2);
					
					if ($result2->num_rows > 0) {
						// output data of each row
						while($row2 = $result2->fetch_assoc()) {
							 $string = $row2["product"];
							 $array = explode("," , $string);
						}
					} else {
						echo "0 results";
					}
					
					
					array_push($array, $newIndex);
					$newArray = implode(",", $array);
					
					
					$query = "UPDATE `user_product` SET `product` = '$newArray' WHERE `username` ='$username'";
					
					$query2 = "UPDATE `user_product` SET `index` = '$newIndex' WHERE `username` ='$username'";
					
					$query3 = "insert into product values ('".$newProduct."', '', '', '$username', '0')";
					
					
					$conn->query($query);
					$conn->query($query2);
					$conn->query($query3);
					

					$conn->close();
					
   			
    			}
    		}
    		
    		
    	
   
	echo "<script type=\"text/javascript\">\n";
	echo "window.location.replace('http://youyouyou.co/description.php')";
	echo "</script>\n"; 
		
  							
  ?>