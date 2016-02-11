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
			
		include 'header.php';

		$sql = "SELECT
					topic_id,
					topic_subject
				FROM
					topics
				WHERE
					topics.topic_id = '" .$_GET['id']."'";
			
		$result = mysqli_query($conn, $sql);

		if(!$result)
		{
			echo 'The topic could not be displayed, please try again later.';
		}
		else
		{
			if(mysqli_num_rows($result) == 0)
			{
				echo 'This topic doesn&prime;t exist.';
			}
			else
			{
				while($row = mysqli_fetch_assoc($result))
				{
					//display post data
					echo '<table class="topic" border="1">
							<tr>
								<th colspan="2">' . $row['topic_subject'] . '</th>
							</tr>';
		
					//fetch the posts from the database
					$posts_sql = "SELECT
								posts.post_topic,
								posts.post_content,
								posts.post_date,
								posts.post_by								
								FROM
									posts
								WHERE
									posts.post_topic = '" . $_GET['id'] . "'";
						
					$posts_result = mysqli_query($conn, $posts_sql);
			
					if(!$posts_result)
					{
						echo '<tr><td>The posts could not be displayed, please try again later.</tr></td></table>';
					}
					else
					{
			
						while($posts_row = mysqli_fetch_assoc($posts_result))
						{
							echo '<tr class="topic-post">
									<td class="user-post">' . $posts_row['username'] . '<br/>' . date('d-m-Y H:i', strtotime($posts_row['post_date'])) . '</td>
									<td class="post-content">' . $posts_row['post_content'] . '</td>
								  </tr>';
						}
					}
			
					if(!isset($_SESSION[ 'valid_user']))
					{
						echo '<tr><td colspan=2>You must be <a href="signin.php">signed in</a> to reply. You can also <a href="signup.php">sign up</a> for an account.';
					}
					else
					{
						//show reply box
						echo '<tr><td colspan="2"><h2>Reply:</h2><br />
							<form method="post" action="reply.php?id=' . $row['topic_id'] . '">
								<textarea name="reply-content"></textarea><br /><br />
								<input type="submit" value="Submit reply" />
							</form></td></tr>';
					}
			
					//finish the table
					echo '</table>';
				}
			}
		}

		include 'footer.php';
		?>
		
	</body>
</html>	