<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    
	<title>我想有</title>
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
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    
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

	<?php $user = $_GET["user"] ?>
	<?php $product = $_GET["product"] ?>
	
	<?php 
	include('comment/config.php');
	include ('comment/function.php');
	
	require_once('test/bookmark_fns.php');   
	session_start();
	?> 
	
	<div class="site-header">
		<div class="main-navigation">
			<div class="responsive_menu">
				<ul>
					<li><a class="show-1 templatemo_home" href="#">Gallery</a></li>
					<li><a class="show-2 templatemo_page2" href="#">Products</a></li>
					<li><a class="show-3 templatemo_page3" href="#">Services</a></li>
					<li><a class="show-4 templatemo_page4" href="#">About Us</a></li>
					<li><a class="show-5 templatemo_page5" href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 responsive-menu">
						<a href="#" class="menu-toggle-btn">
				            <i class="fa fa-bars"></i>
				        </a>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12 main_menu">
						<ul style="display: inline">
							<li style="float: left"><a href="http://youyouyou.co" target="_self">首页</a></li>
							<li><a href="http://youyouyou.co/1stpage.php" >陈列室</a></li>`
							<li><a href="http://youyouyou.co/2ndpagelike.php" >软木板</a></li>
							<li><a href="http://youyouyou.co/3rdpage.php" >我想有</a></li>
							<li><a href="http://youyouyou.co/4thpage.php" target="_self">关于</a></li>
							<li><a class="show-5 templatemo_page5" href="#">联系</a></li>
						<?php
							if(isset($_SESSION[ 'valid_user'])) { 
								  ?>
						
								<li style="float: right"><a href="http://youyouyou.co/3rdpage.php" target="_self"> <?php echo $_SESSION[ 'valid_user'] ?> </a> <a href="test/logout.php">Logout</a></li>
							<?php } 
							else { ?>
								<li style="float: right"><a href="http://youyouyou.co/test/login.php" target="_self">登陆/注册</a></li>
							<?php } ?>
							
							
						</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->
	
	
	
	
	
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
										<a href="http://youyouyou.co/member.php?user=<?php echo $user ?>" target="_self"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></a>
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
										
										
										<!-- 评论 -->
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
										<!-- 评论 -->
										
										
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
														comment
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
													<span>Your comment </span> </br>
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
						<h1> <?php echo $user  ?>的主页</h1>
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header --> 
 
 	<?php
		if(isset($_SESSION[ 'valid_user'])) { 
	?>
 		<p style="text-align:center; font-size:18px; color: #33CCCC"> 
    		关注后，可以在软木板看到<?php echo $user ?>的动态哦! </p>
    <?php } 
		else { ?>	<p style="text-align:center; font-size:18px; color: #33CCCC"> 
    		登陆后, 在这个自己的空间里，记录想要一切 </p>
    <?php } ?>



<!-- Header --> 


<!-- Content -->
<section id="wrapper">

			<div class="container">
					<div class="row">
                    

                     <?php
					 
						
							$username = $user;
							$conn = db_connect();
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}
						
						
							/*图片－－－连上database，从里面拿出记录着user自己的products的数据，然后处理为可用的，http://www.w3schools.com/php/php_mysql_select.asp 具体介绍*/
							$result = $conn->query("select product from user_product where username ='$username'");
							$row = mysql_fetch_array($result);
						
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									 $string = $row["product"];
									 $array = explode("," , $string);
								}
							} else {
								echo "0 results";
							}
						
			

							/*.............把对应图片显示出来循环............*/
							$num = count($array);
													
							for($i=1; $i< $num; $i ++){ ?>
								<div class="col-md-4 col-sm-6">
									<div class="product-item">       
						
								
										<?php		
									/*－－－描述－－－*/						
										$point = $array[$i];
										$id = $username.$point;		
									
										$sql = "SELECT title FROM product WHERE id = '$id'";
										$r = $conn->query($sql);

										if ($r->num_rows > 0) {
										// output data of each row
											while($row = $r->fetch_assoc()) {
											$title = $row["title"] ; 
											}
										} else {
											echo "0 results";
										}	

										$sql2 = "SELECT description FROM product WHERE id ='$id'";
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
								
								
													
									<!--  显示出来 -->
									<img src="images/products/<?php echo $id ?>.jpg" alt=" product<?php echo $i ?>">
							  

									<a href="#" class="product-title"> <?php echo $title ?> </a> 
									<p> <?php echo $description ?> </p>
								
																
								
									</div> <!-- /.product-item -->
								</div> <!-- /.col-md-4 -->	    
							<?php }  ?> <!-- for -->
						
						
						
						
							<!-- 让用户上传图片 -->
							 
						
							<?php $conn->close(); ?>
								
                                          
                                
							
					</div> <!-- /.row -->
			</div> <!-- /.slide-item -->
		</div> <!-- /.products -->
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





		<!-- Upload JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="js/jquery.ui.widget.js"></script>
		<script src="js/jquery.iframe-transport.js"></script>
		<script src="js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="js/script.js"></script>



</body>
</html>