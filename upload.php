<style>
	.sucess{
		color:#088A08;
	}
	.error{
		color:red;
	}
</style>

<?php

	require_once('test/bookmark_fns.php');   
	session_start();
	
	
	
	/*这里的N，如果对于user删除了图片以后，就会不对了，可以让N等于最新一个image的数字*/
	$products = glob("images/products/*");
	$N = count($products);	
	$newN = $N + 1;							
	$_SESSION['newN'] = $newN;
	$username = $_SESSION['valid_user'];	
	
	
	
	
	$file_exts = array("jpg", "bmp", "jpeg", "gif", "png");
	$upload_exts = end(explode(".", $_FILES["file"]["name"]));
	if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/pjpeg"))
		&& ($_FILES["file"]["size"] < 2000000)
		&& in_array($upload_exts, $file_exts))
		{
			if ($_FILES["file"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
				}
			else
				{
					echo "Upload: " . $_FILES["file"]["name"] . "<br>";
					echo "Type: " . $_FILES["file"]["type"] . "<br>";
					echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
					echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";  
					// Enter your path to upload file here
					if (file_exists("images/products/" . $_FILES["file"]["name"]))
						{
							echo "<div class='error'>"."(".$_FILES["file"]["name"].")". " already exists. "."</div>";
						}
					else
						{
			
							/* 连接database，并设置需要的变量*/
							
							$conn = db_connect();
							if ($conn->connect_error) {
    							die("Connection failed: " . $conn->connect_error);
							}
				
							
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
							
							
							/*把图片存到server */
							move_uploaded_file($_FILES["file"]["tmp_name"], "images/products/".$newProduct.".jpg");
							echo "<div class='sucess'>"."Stored in: " . "images/products/" . $_FILES["file"]["name"]."</div>"; 
							
						
								
							/* 把新的图片地址存到database  */
							$result = $conn->query("select product from user_product where username ='$username'");
							$row = mysql_fetch_array($result);
								
							if ($result->num_rows > 0) {
    								// output data of each row
								while($row = $result->fetch_assoc()) {
        							 $string = $row["product"]; 							 
									 $array = explode("," , $string);
									 }
										
    							}
							} else { /* 如果user还没有任何product，就在user－product表里给他新建一个的条目  */
								$result = $conn->query("insert into user_product values ('".$username."', '', '0')");
    							$array = array();
							}
							
							array_push($array, $newIndex); 
							$newArray = implode(",", $array);
							
							$query = "UPDATE `user_product` SET `product` = '$newArray' WHERE `username` ='$username'";
							$query2 = "UPDATE `user_product` SET `index` = '$newIndex' WHERE `username` ='$username'";
							
							$query3 = "INSERT INTO `product`(`id`, `title`, `description`, `owner`, `like_count`) VALUES ('".$newProduct."','','','$username','0')";
							
							/* $query3 = "insert into product values ('".$newProduct."', '', '', '$username', '0')"; */
							
							
							if (($conn->query($query) === TRUE) && ($conn->query($query2) && ($conn->query($query3) === TRUE)) {
    								echo "Record updated successfully";
							} else {
   									echo "Error updating record: " . $conn->error;
							}
							
							$conn->close();
							
							/* 返回到个人主页  */
							echo "<script type=\"text/javascript\">\n";
  							echo "window.location.replace('http://youyouyou.co/description.php')";
  							echo "</script>\n"; 
  							
							
						}
				}
		}
	else
		{
			echo "<div class='error'>Invalid file</div>";
		}

  		
?>

