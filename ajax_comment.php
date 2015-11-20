<?php
if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
	
	require_once('test/bookmark_fns.php'); 
	
	$conn = db_connect();
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
	
	if (!empty($_POST['name']) AND !empty($_POST['comment']) AND !empty($_POST['postid'])) {
		$name = $_POST['name'];
		//$mail = mysql_real_escape_string($_POST['mail']);
		$comment = $_POST['comment'];
		$postId = $_POST['postid'];

		$result = $conn->query("
			INSERT INTO comment
			(username, product_id, content)
			VALUES('{$name}', '{$postId}', '{$comment}')");			
	}
?>

<div class="comment-item">
	<p class="comment-user">
		<span class="userName">  <?php echo $name;?> : </span>
		<span class="comment-content"> <?php echo $comment;?> </span>
	</p>
	
	<!--
	<div class="comment-post">
		<h3><?php echo $name ?> <span>said....</span></h3>
		<p><?php echo $comment?></p>
	</div>
	-->
</div>

<?php
	$conn->close(); 
endif?>