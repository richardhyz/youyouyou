 <?php
								
								require_once('test/bookmark_fns.php');
																						
								
								$one = "what";
								echo "<p> $one </p>";

								
								$conn = db_connect();
								if ($conn->connect_error) {
    								die("Connection failed: " . $conn->connect_error);
								} 
								
								

								$result = $conn->query("select product from user_product where username ='hyz'");
								$row = mysql_fetch_array($result);

                        		
                        		echo "hello world";
                        					 			

                        		if ($result->num_rows > 0) {
    								// output data of each row
								    while($row = $result->fetch_assoc()) {
        								echo  $row["product"];
    								}
								} else {
    								echo "0 results";
								}
                        		
                        		 			
                        	    
                        	    echo "hello world";
                        	    
?>

	