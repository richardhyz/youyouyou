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


	<!--  自动排版  -->
	    <link rel="stylesheet" href="css/css_outdoor/normalize.css">
        <link rel="stylesheet" href="css/css_outdoor/font-awesome.css">
        <link rel="stylesheet" href="css/css_outdoor/bootstrap.min.css">
        
        <script src="modernizr-2.6.2.min.js"></script>
        
        <script src="js/outdoor/jquery.min.js"></script>
		<!--[if lt IE 9]>
		<script src="../html5.js"></script>
		<![endif]-->
		<script src="js/outdoor/blocksit.min.js"></script>


	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/templatemo_style.css">

	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    
    
    
    
    
    
    <script src="jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="../html5.js"></script>
<![endif]-->
<script src="blocksit.min.js"></script>
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

</head>

<body>

	
	<?php require_once('test/bookmark_fns.php');   
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
						<ul>
							<li><a href="http://youyouyou.co/index.php" >陈列室</a></li>`
							<li><a href="http://youyouyou.co/2ndpage.php" >软木板</a></li>
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
		<div class="container">
			<div class="row">
			 <div class="blog-masonry masonry-true">
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						<h1>有有有</h1>
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			 </div> <!--blog-masonry masonry-true -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->
 
 	<?php
		if(isset($_SESSION[ 'valid_user'])) { 
	?>
 		<p style="text-align:center; font-size:18px; color: #33CCCC"> 
    		你好 <?php echo $_SESSION[ 'valid_user'] ?>, 在自己的空间里，记录自己想要一切 </p>
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
					 
					 	if(isset($_SESSION[ 'valid_user'])) {
								$products = glob("images/products/*");
								$N = count($products);	
								
								$username = $_SESSION['valid_user'];
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
								
								<div class="blog-masonry masonry-true">
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
								</div> <!--blog-masonry masonry-true -->    
								<?php }  ?> <!-- for -->

								
								
								
								<!-- 让用户上传图片 -->
								 <div class="col-md-4 col-sm-6">
                                    <div class="product-item"


                                      <div class="upload">
        
                                      
                                      <form action="testUpload.php" method="post" enctype="multipart/form-data">
											<label for="file">Upload your new product:</label>
											<input type="file" name="file" id="file"><br>
											<input type="submit" name="submit" value="Submit">
									  </form>
                                 
                                      </div> <!-- upload -->
                                  
                                   </div> <!-- /.product-item --> 
								</div> <!-- /.col-md-4 -->	
								
								<?php $conn->close(); 
								
							 }      /* if(isset(valid_user)) */
							
						else {?>
														                            
                        <div class="col-md-4 col-sm-6">
							<div class="product-item">
								<img src="images/products/product1.jpg" alt="product 1">
								<a href="#" class="product-title">Vestibulum ante ipsum primis</a>
								<p>This is free <a href="#">HTML5 Template</a> by templatemo and you can use it for any website.</p>
							</div> <!-- /.product-item -->
						</div> <!-- /.col-md-4 -->
						<div class="col-md-4 col-sm-6">
							<div class="product-item">
								<img src="images/products/product2.jpg" alt="product 2">
								<a href="#" class="product-title">Nunc pulvinar leo nec</a>
								<p>Morbi nec mauris quis massa luctus consequat sit amet luctus metus. Etiam sollicitudin leo.</p>
							</div> <!-- /.product-item -->
						</div> <!-- /.col-md-4 -->
                        
                        <div class="col-md-4 col-sm-6">
							<div class="product-item">
								<img src="images/products/product3.jpg" alt="product 3">
								<a href="#" class="product-title">Curabitur mollis dignissim</a>
								<p>Cras convallis erat vitae odio. Pellentesque rutrum nisl dui, dignissim accumsan nisl.</p>
							</div> <!-- /.product-item -->
						</div> <!-- /.col-md-4 -->
						
						<div class="col-md-4 col-sm-6">
							<div class="product-item">
								<img src="images/products/product4.jpg" alt="product 4">
								<a href="#" class="product-title">Morbi venenatis nunc</a>
								<p>Nulla vel est in sapien dictum vestibulum eu ac enim. Proin pharetra mi eget sem bibendum.</p>
							</div> <!-- /.product-item -->
						</div> <!-- /.col-md-4 -->
                        
						<div class="col-md-4 col-sm-6">
							<div class="product-item">
								<img src="images/products/product5.jpg" alt="product 5">
								<a href="#" class="product-title">Phasellus id elementum</a>
								<p>Etiam sed felis id eros imperdiet tempus. Mauris sit amet metus risus. Vestibulum mi velit.</p>
							</div> <!-- /.product-item -->
						</div> <!-- /.col-md-4 -->
						
						<div class="col-md-4 col-sm-6">
							<div class="product-item">
								<img src="images/products/product6.jpg" alt="product 6">
								<a href="#" class="product-title">Donec ullamcorper</a>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, animi quia voluptatem.</p>
							</div> <!-- /.product-item -->
						</div> <!-- /.col-md-4 -->
                        
                        <?php } ?>
                                          
                                
							
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



		
		
		<!--  自动排版  -->
		<script src="js/outdoor/jquery-1.10.2.min.js"></script>
        <script src="js/outdoor/plugins.min.js"></script>
        <script src="js/outdoor/main.min.js"></script>

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