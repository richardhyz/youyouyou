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
		
		<link rel="stylesheet" href="forumstyle.css">
	</head>
	<body>
			<?php

			//create_cat.php
			session_start();
			do_html_header();
			$conn = db_connect();
			?>
  
  <div id="wrapper">
	<div id="content">
			
		<?php
		//include 'header.php';

		//first select the category based on $_GET['cat_id']
		//$cat =  mysqli_real_escape_string($conn, $_GET['id']);
		$sql = "SELECT
					cat_id,
					cat_name,
					cat_description
				FROM
					categories
				WHERE
					cat_id = '".$_GET['id']."'";

		$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		if(!$result)
		{
			echo 'The category could not be displayed, please try again later.';
		}
		else
		{
		if(mysqli_num_rows($result) == 0)
			{
				echo 'This category does not exist.';
			}
			else
			{
				//display category data
				while($row = mysqli_fetch_array($result))
				{
					echo "<h2>"  . $row['cat_name'] . " ". "分类中的话题</h2>";
				}
	
				//do a query for the topics
				$sql = "SELECT	
							topic_id,
							topic_subject,
							topic_date,
							topic_cat
						FROM
							topics
						WHERE
							topic_cat = '" . mysqli_real_escape_string($conn, $_GET['id']) . "'";
		
				$result = mysqli_query($conn, $sql);
		
				if(!$result)
				{
					echo 'The topics could not be displayed, please try again later.';
				}
				else
				{
					if(mysqli_num_rows($result) == 0)
					{
						echo 'There are no topics in this category yet.';
					}
					else
					{
						//prepare the table
						echo '<table border="1">
							  <tr>
								<th>Topic</th>
								<th>Created at</th>
							  </tr>';	
					
						while($row = mysqli_fetch_array($result))
						{				
							echo '<tr>';
								echo '<td class="leftpart">';
									echo '<h3><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
								echo '</td>';
								echo '<td class="rightpart">';
									echo date('d-m-Y', strtotime($row['topic_date']));
								echo '</td>';
							echo '</tr>';
						}
					}
				}
			}
		}

		//include 'footer.php';
		?>
		<button type="button" class="btn btn-info btn-lg"><a class="item" href="/forum/create_topic.php"> 添加一个新话题 </a></button>
	</body>
</html>