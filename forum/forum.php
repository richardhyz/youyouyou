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

//do_html_header();
//include 'header.php';
?>

	<div class="site-header">
	  <div class="main-navigation">
	
			<div class="container">
				<!--<div class="row">-->

					
					<div class="col-md-12 main_menu" >
						<ul style="display: inline">
						
							<li style="float: left !important "><a href="http://youyouyou.co" target="_self"><img src="../images/logow.png" ?></a>  <a href="http://youyouyou.co" target="_self">&nbsp;&nbsp;&nbsp;</a></li>

							<li ><a href="http://youyouyou.co/new1stpage.php" target="_self">Gallery</a></li>
							<li><a href="http://youyouyou.co/2ndpagelike.php" target="_self">Mini Market</a></li>
							<li><a href="http://youyouyou.co/forum/forum.php" target="_self">Forum</a></li>
							<!--<li><a href="http://youyouyou.co/4thpage.php" target="_self">关于</a></li>-->
							<!-- <li><a href="http://youyouyou.co/5thpage.php" target="_self">联系</a></li> -->
						  	
                            <?php
							if(isset($_SESSION[ 'valid_user'])) { 
								  ?>
						
								<li style="float:right;  margin-left: 30px; !important"><a href="http://youyouyou.co/3rdpage.php" target="_self"> <?php echo $_SESSION[ 'valid_user'] ?>的小屋 </a> <a href="test/logout.php">Logout</a> </li>
							<?php } 
							else { ?>
								<li style="float:right;  margin-left: 30px;" ><a href="http://youyouyou.co/test/login.php" target="_self">Login / Sign Up</a></li>
							<?php } ?>
	
						</ul>
					</div> <!-- /.col-md-12 -->
				<!--</div> /.row -->
			</div> <!-- /.container -->
		  </div>
		</div>
		  


<div id="wrapper">
		

	<div id="content">
<?php
$sql = "SELECT
			categories.cat_id,
			categories.cat_name,
			categories.cat_description,
			COUNT(topics.topic_id) AS topics
		FROM
			categories
		LEFT JOIN
			topics
		ON
			topics.topic_id = categories.cat_id
		GROUP BY
			categories.cat_name, categories.cat_description, categories.cat_id";        

$conn = db_connect();
$result = $conn->query($sql);

if(!$result)
{
	echo 'The categories could not be displayed, please try again later.';
}
else
{
	if(mysqli_num_rows($result) == 0)
	{
		echo 'No categories defined yet.';
	}
	else
	{
		//prepare the table
		echo '<table border="1">
			  <tr>
				<th>分类</th>
				<th>最新话题</th>
			  </tr>';	
			
		while($row = mysqli_fetch_array($result))
		
		{				
			echo "<tr>";
				echo "<td class='leftpart'>";
					echo "<h3><a href='category.php?id=$row[cat_id]'>" . $row["cat_name"] . "</a></h3>" . $row["cat_description"];
				echo "</td>";
				echo "<td class='rightpart'>";
							
			$topicsql = "SELECT
									topic_id,
									topic_subject,
									topic_date,
									topic_cat
								FROM
									topics
								WHERE
									topic_cat = '" . $row['cat_id'] . "'
								ORDER BY
									topic_date
								DESC
								LIMIT
									1";
								
					$topicsresult = mysqli_query($conn, $topicsql);
				
					if(!$topicsresult)
					{
						echo 'Last topic could not be displayed.';
					}
					else
					{
						if(mysqli_num_rows($topicsresult) == 0)
						{
							echo 'no topics';
						}
						else
						{
							while($topicrow = mysqli_fetch_assoc($topicsresult))
							echo '<a href="topic.php?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a> at ' . date('d-m-Y', strtotime($topicrow['topic_date']));
				echo "</td>";
			echo "</tr>";
						}
					}
				echo '</td>';
			echo '</tr>';
		}
	}
}


?>
		
  </div> 
</div>

  
  
  
  

  </body>
  <button type="button" class="btn btn-info btn-lg"><a class="item" href="/forum/create_cat.php"> 新建一个话题分类 </a></button>

</html>