<?php
								require_once('test/bookmark_fns.php');
								$conn = db_connect();
								
								if ($conn->connect_error) {
    								die("Connection failed: " . $conn->connect_error);
								}
								
								
								
								/*－－－描述－－－*/
								// Check connection

		$sql = "SELECT title FROM product WHERE id ='2'";
		$r = $conn->query($sql);

		if ($r->num_rows > 0) {
 			   // output data of each row
  		  while($row = $r->fetch_assoc()) {
      		  $title = $row["title"] ; 
    		}
		  } else {
    		echo "0 results";
		}
		
		echo $title;


								
								/*
								$t = $conn->query("select title from product where id ='2'");
								$t_row = mysql_fetch_array($t);
								
								if ($t_row ->num_rows > 0) {
    								// output data of each row
								    while($t_row = $t->fetch_assoc()) {
        								 $title = $t_row["title"];
    								}
								} else {
    								$title = "0 results";
								}	
								
								
								echo "the title is ".$title ; */
 


?>