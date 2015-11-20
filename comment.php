<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>软木板</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- 
Concept Template 
http://www.templatemo.com/preview/templatemo_397_concept 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

<link rel='stylesheet' href='style.css' media='screen' />

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">
	<link rel="stylesheet" href="css/2ndpage.css">


	<!-- Main CSS -->
	<link rel="stylesheet" href="css/templatemo_style.css">

	<!-- Favicons -->
     <link rel="shortcut icon" href="images/logo.png">
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    
    
    
    
    
    
    
    <!-- <script src="jquery.min.js"></script>  -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    
    
<!--[if lt IE 9]>
<script src="../html5.js"></script>
<![endif]-->
<script src="blocksit.min.js"></script>
	<script src="js/bootstrap.js"></script>
<script>
$(document).ready(function() {
	//vendor script
	$('#header')
	.css({ 'top':-40 })
	.delay(1000)
	.animate({'top': 0}, 800);
	
	$('#footer')
	.css({ 'bottom':-15 })
	.delay(1000)
	.animate({'bottom': 0}, 800);
	
	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 4,
			offsetX: 4,
			offsetY: 8
		});
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth <= 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 4,
				offsetY: 8
			});
		}
	});
});
</script>


<!-- comment js-->
<script>
$(document).ready(function(){
	var form = $('form');
	var submit = $('#submit');

	form.on('submit', function(e) {
		// prevent default action
		e.preventDefault();
		// send ajax request
		$.ajax({
			url: 'ajax_comment.php',
			type: 'POST',
			cache: false,
			data: form.serialize(), //form serizlize data
			beforeSend: function(){
				// change submit button value text and disabled it
				submit.val('Submitting...').attr('disabled', 'disabled');
			},
			success: function(data){
				// Append with fadeIn see http://stackoverflow.com/a/978731
				var item = $(data).hide().fadeIn(800);
				$('.comment-block').append(item);

				// reset form and button
				form.trigger('reset');
				submit.val('Submit Comment').removeAttr('disabled');
			},
			error: function(e){
				alert(e);
			}
		});
	});
});
</script>
<!-- Comments js-->



</head>

<body>



<?php $product = $_GET["product"] ?>
<?php
	include('comment/config.php');
	include ('comment/function.php');
	
	require_once('test/bookmark_fns.php'); 
	session_start();
	
	do_html_header();
	?>


	
		
		
		
		<?php
			$conn = db_connect();
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
		?>
		
				<div class="wrap" >
											<!-- ****************************  Modal *************************  -->
					<div class="above">
						<div  id="myModal<?php echo $product ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<a href="http://youyouyou.co/2ndpagelike.php" target="_self"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
										<h3 class="modal-title" id="myModalLabel">

											<?php
											//$product = "richard1";
											
											$sql = "SELECT title FROM product WHERE id = '$product'";
											$r = $conn->query($sql);

											if ($r->num_rows > 0) {
												// output data of each row
												while($row = $r->fetch_assoc()) {
													$title = $row["title"] ;
												}
											} else {
												echo "0 results";
											}
											?>
											<?php echo $title ?>

										</h3>
									</div><!--  modal-header  -->
									
									<div class="modal-body">
									
										<img src="images/products/<?php echo $product ?>.jpg" class="img-responsive img-rounded center-block" alt=""/>
										
										
										<!-- 描述 -->
										<?php
										$sql2 = "SELECT description FROM product WHERE id ='$product'";
											$r2 = $conn->query($sql2);

											if ($r2->num_rows > 0) {
											// output data of each row
												while($row2 = $r2->fetch_assoc()) {
												$description = $row2["description"] ; 
												}
											} else {
												echo "0 results";
											}
										?>
										<p> <?php echo $description ?> </p>
										<!-- 描述 -->
										
										
										<?php
											// retrive comments with post id
											$comment_query = $conn->query(
												"SELECT *
												FROM comment
												WHERE product_id = '$product'
												");
										?>
										
										<div class="comment-block">	
																				
										
										
												<div class="comment-title">
														留言
												</div>
												<?php
										
												$comments = array();
												$sql = "SELECT content, username FROM comment WHERE product_id = '$product'";
												$r = $conn->query($sql);

												if ($r->num_rows > 0) {
													// output data of each row
													while($row = $r->fetch_assoc()) {
														$comments[] = array(
															'comment' => $row["content"],
															'username' => $row['username']
														);
													}
												}
									
												foreach ($comments as $comment) {
															$current_comment = $comment['comment'];
															$username = $comment['username'];
									
															?>
														<div >
															<p class="comment-user">
																<span class="userName">  <?php echo $username;?> : </span>
																<span class="comment-content"> <?php echo $current_comment;?> </span>
															</p>
														</div>
												<?php }
												?>
								
									    </div>  <!--  comment-block -->
										
										
										
										<form id="form" method="post">
												<!-- need to supply post id with hidden fild -->
												<input type="hidden" name="postid" value="<?php echo $product ?>">
												<label>
													<input type="hidden" name="name" id="comment-name" value="<?php echo $_SESSION[ 'valid_user'] ?>">
												</label>
												<!--<label>
													<span>Email *</span>
													<input type="email" name="mail" id="comment-mail" placeholder="Your mail here...." required>
												</label>-->
												<label>
													<span>你的留言 </span> </br>
													<textarea name="comment" id="comment" cols="100" rows="6" placeholder="Type your comment here...." required></textarea>
												</label>
												
												<div class="modal-footer">
													<input type="submit" id="submit" value="Submit Comment">
												</div>
										</form>
					
									
									</div> <!--  modal-body  -->
		

								</div> <!--  modal-content  -->
							</div> <!--  modal-dialog  -->
						</div> <!--  modal fade  -->
				<!-- ****************************  Modal *************************  -->
						</div>
					</div>
		
		
		
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						<h1>有有有</h1>
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->
 
	<p style="text-align:center; font-size:18px; color: #33CCCC"> 
    		在软木板上钉上你认为值得分享的物品，再看看大家都在谈论什么 </p>



<!-- Header --> 


<!-- Content -->
<section id="wrapper">
		<?php
			$conn = db_connect();
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT `id` FROM `product`";
			$result = $conn->query($sql);
			$idArray = Array();

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result-> fetch_array()) {
					 $idArray[] = $row["id"];
					 
				}
			} else {
				echo "0 results";
			}
		?>
			
		<div id="container">
		
	
				<?php		
				for($i=0; $i< count($idArray); $i++){  ?>
					<div class="grid">

						<div class="imgholder">
							<a href="#" data-toggle="modal" data-target="#myModal<?php echo $idArray[$i] ?>" >
								<img src="images/products/<?php echo $idArray[$i] ?>.jpg" width="150" class="img-responsive img-rounded center-block" alt="" />
							</a>
						</div>

						

						<?php
						$sql = "SELECT title FROM product WHERE id = '$idArray[$i]'";
											$r = $conn->query($sql);

											if ($r->num_rows > 0) {
											// output data of each row
												while($row = $r->fetch_assoc()) {
												$title = $row["title"] ; 
												}
											} else {
												echo "0 results";
											}	

											$sql2 = "SELECT description FROM product WHERE id ='$idArray[$i]'";
											$r2 = $conn->query($sql2);

											if ($r2->num_rows > 0) {
											// output data of each row
												while($row2 = $r2->fetch_assoc()) {
												$description = $row2["description"] ; 
												}
											} else {
												echo "0 results";
											}	
						?>	
						<strong> <?php echo $title ?> </strong>
						<p> <?php echo $description ?> </p>
						
						
						<?php
						$sql = "SELECT owner FROM product WHERE id = '$idArray[$i]'";
									$r = $conn->query($sql);

									if ($r->num_rows > 0) {
									// output data of each row
										while($row = $r->fetch_assoc()) {
										$owner = $row["owner"] ; 
										}
									} else {
										echo "0 results";
									}	
						?>
						<div class="meta">by <?php echo '<a href="http://youyouyou.co/member.php?user='.$owner.'">'.$owner.'</a>'; ?>
						</div>

					</div> <!-- class='grid' -->


			<?php } ?>  <!-- for -->
			
			
			
			
			
			 
			
			
			
			
			

		</div> <!-- id="container" -->
			



<!--
<div id="container">
	<div class="grid">
		<div class="imgholder">
			<img src="images/img27.jpg" />
		</div>
		<strong>Sunset Lake</strong>
		<p>A peaceful sunset view...</p>
		<div class="meta">by j osborn</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img26.jpg" />
		</div>
		<strong>Bridge to Heaven</strong>
		<p>Where is the bridge lead to?</p>
		<div class="meta">by SigitEko</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img15.jpg" />
		</div>
		<strong>Autumn</strong>
		<p>The fall of the tree...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img23.jpg" />
		</div>
		<strong>Winter Whisper</strong>
		<p>Winter feel...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img17.jpg" />
		</div>
		<strong>Light</strong>
		<p>The only shinning light...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img22.jpg" />
		</div>
		<strong>Rooster's Ranch</strong>
		<p>Rooster's ranch landscape...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img16.jpg" />
		</div>
		<strong>Autumn Light</strong>
		<p>Sun shinning into forest...</p>
		<div class="meta">by Lars van de Goor</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img21.jpg" />
		</div>
		<strong>Yellow cloudy</strong>
		<p>It is yellow cloudy...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img28.jpg" />
		</div>
		<strong>Herringfleet Mill</strong>
		<p>Just a herringfleet mill...</p>
		<div class="meta">by Ian Flindt</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img2.jpg" />
		</div>
		<strong>Battle Field</strong>
		<p>Battle Field for you...</p>
		<div class="meta">by Andrea Andrade</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img24.jpg" />
		</div>
		<strong>Sundays Sunset</strong>
		<p>Beach view sunset...</p>
		<div class="meta">by Robert Strachan</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img19.jpg" />
		</div>
		<strong>Sun Flower</strong>
		<p>Good Morning Sun flower...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img5.jpg" />
		</div>
		<strong>Beach</strong>
		<p>Something on beach...</p>
		<div class="meta">by unknown</div>
	</div>
	<div class="grid">
		<div class="imgholder"> 
			<img src="images/img25.jpg" />
		</div>
		<strong>Flowers</strong>
		<p>Hello flowers...</p>
		<div class="meta">by R A Stanley</div>
	</div>
	<div class="grid">
		<div class="imgholder">
			<img src="images/img20.jpg" />
		</div>
		<strong>Alone</strong>
		<p>Lonely plant...</p>
		<div class="meta">by Zsolt Zsigmond</div>
	</div> 
</div>

-->



</section>




<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy; 2015 Handsome Four</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.templatemo_footer -->








</body>
</html>