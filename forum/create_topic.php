<?php
 /* require('test/bookmark_fns.php'); */
	include('../test/output_fns1.php');
	require_once('../test/data_valid_fns.php'); 
  	require_once('../test/db_fns.php');
    include('../test/user_auth_fns.php');
  	include('../test/url_fns.php'); 
?>

<html>
  <head>
    <title>论坛</title>
    <style>
     /* body { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      li, td { font-family: Arial, Helvetica, sans-serif; font-size: 13px }  */
      hr { color: #3333cc; width=300; text-align=left}
      a { color: #000000 }
    </style>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/templatemo_style.css">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="../images/logo.png">
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
</head>
<body>
	<?php

	//create_cat.php
	session_start();
	do_html_header();
	
		$conn = db_connect();
		//create_cat.php
		include 'header.php';


		echo "<h2>Create a topic</h2>";
		/*if($_SESSION['signed_in'] == false)
		{
			//the user is not signed in
			echo "sorry you have to be sign in to post to that topic";
		}
		else
		{*/
			//the user is signed in
			if($_SERVER['REQUEST_METHOD'] != 'POST')
			{	
				//the form hasn't been posted yet, display it
				//retrieve the categories from the database for use in the dropdown
				$sql = "SELECT
							cat_id,
							cat_name,
							cat_description
						FROM
							categories";
					
				$conn = db_connect();
				$result = $conn->query($sql);
		
				if(!$result)
				{
					//the query failed, uh-oh :-(
					echo "Error while selecting from database. Please try again later.";
				}
				else
				{
					if(mysqli_num_rows($result) == 0)
					{
						//there are no categories, so a topic can't be posted
						if($_SESSION['user_level'] == 1)
						{
							echo 'You have not created categories yet.';
						}
						else
						{
							echo 'Before you can post a topic, you must wait for an admin to create some categories.';
						}
					}
					else
					{
		
						echo '<form method="post" action="">
							Subject: <input type="text" name="topic_subject" />
							Category:'; 
				
						echo '<select name="topic_cat">';
							while($row = mysqli_fetch_array($result))
							{
								echo "<option value=\"" . $row['cat_id'] . "\">" . $row['cat_name'] . "</option>";
							}
						echo '</select>';	
					
						echo 'Message: <textarea name="post_content" /></textarea>
							<input type="submit" value="Create topic" />
						 </form>';
					}
				}
			}
			else
			{
				//start the transaction
				/*$query  = "BEGIN WORK;";*/
				/*$result = mysql_query($conn,$query);*/
				/*$result = $conn->query($query);*/
		
				/*if(!$result)
				{
					//Damn! the query failed, quit
					echo 'An error occured while creating your topic. Please try again later.';
				}
				else
				{*/
		
	
					//the form has been posted, so save it
					//insert the topic into the topics table first, then we'll save the post into the posts table
					$sql = "INSERT INTO 
								topics(topic_subject,
									   topic_date,
									   topic_cat,
									   topic_by)
						   VALUES('" . $_POST['topic_subject']. "',
									   NOW(),
									   '" .$_POST['topic_cat']. "',
									   '" . $_SESSION[ 'valid_user'] . "'
									   )";
		   
					/*$sql = "INSERT INTO topics
							VALUES(	  '1',
									   '" . mysql_real_escape_string($_POST['topic_subject']) . "',
									   NOW(),
									   '" . mysql_real_escape_string($_POST['topic_cat']) . "',
									   '" . $_SESSION['user_id'] . "'
									   )";*/
												  

					 
					/*$result = mysql_query($conn, $sql);*/
					$result = $conn->query($sql);   
			
					if(!$result)
					{
						//something went wrong, display the error
						echo "An error occured while inserting your data. Please try again later." ;
						/*$sql = "ROLLBACK;";
						$result = mysql_query($conn, $sql);*/
						/*$result = $conn->query($sql);*/
					}
					else
					{
				
						//the first query worked, now start the second, posts query
						//retrieve the id of the freshly created topic for usage in the posts query
						$topicid = mysqli_insert_id($conn);
						$post = mysqli_real_escape_string($conn, $_POST['post_content']);
				
						$sql = "INSERT INTO
									posts(post_content,
										  post_date,
										  post_topic,
										  post_by)
								 VALUES('" . $post . "',
										  NOW(),
										  '" . $topicid . "',
										  '" . $_SESSION[ 'valid_user'] . "')";
						/*$result = mysql_query($conn, $sql);*/
						$result = $conn->query($sql);
				
						if(!$result)
						{
							//something went wrong, display the error
							echo "An error occured while inserting your post. Please try again later." . mysql_error();
							/*$sql = "ROLLBACK;";
							$result = mysql_query($conn, $sql);*/
							/*$result = $conn->query($sql);*/
						}
						else
						{
							/*$sql = "COMMIT;";
							$result = mysql_query($conn, $sql);*/
							/*$result = $conn->query($sql);*/
						
							//after a lot of work, the query succeeded!
							echo "You have successfully created a new topic";
				
						}
					}
				/*}*/
			}
		/*}*/

		include 'footer.php';
		?>
	</body>
</html>	