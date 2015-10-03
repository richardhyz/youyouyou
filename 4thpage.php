
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>关于</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- 
Concept Template 
http://www.templatemo.com/preview/templatemo_397_concept 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/templatemo_style.css">

	<!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">

</head>
<body>
	
	<?php
	session_start();
	?>


	<div class="site-header">
		<div class="main-navigation">
			<div class="responsive_menu">
				<ul>
					<li><a class="show-1 templatemo_home" href="#">Gallery</a></li>
					<li><a href="http://www.baidu.com/" target="_self" >Products</a></li>
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
							<li><a href="http://youyouyou.co/index.php" target="_self">陈列室</a></li>
							<li><a href="http://youyouyou.co/2ndpage.php" target="_self">软木板</a></li>
							<li><a href="http://youyouyou.co/3rdpage.php" target="_self">我想有</a></li>
							<li><a chref="http://youyouyou.co/4thpage.php" target="_self">关于</a></li>
							<li><a class="show-5 templatemo_page5" href="#">联系</a></li>
							
							<?php
							if(isset($_SESSION[ 'valid_user'])) { 
								  ?>
						
								<li style="float: right"><a href="http://youyouyou.co/3rdpage.php" target="_self"> <?php echo $_SESSION[ 'valid_user'] ?>  </a> <a href="test/logout.php">Logout</a> </li>
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
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						<h1>有有有</h1>                     
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->   
    
    
    
    
    
    
<section id="wrapper">

		<div class="about" id="menu-3">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-10">
						<div class="about-us-content">
							<div class="toggle-content" id="tab4">
								<h2 class="page-title">Our History</h2>
                                
								<p><img src="images/products/product4.jpg" alt="product 4" class="img-responsive img_left"> A social shopping guide website helping Chinese people find interesting and high quality products in the US. As the website, we will integrate enough information(brands sifting, market share, user comments,..) to guide users to have comprehensive understandings about the products. The products on our site will either have big price difference between China and US or very popular in US but rare in China.
To make the website fun and more useful, we have a sharing board section in our site. As a member, you can post the products that you think is worth to buy or just share your new shoppings. Also, you can view and like other member’s post and write comments under the posts. The communication between all the users will make the products’ information more diverse and reliable. From here, you are not only a products hunter creating your own wish list, but also a shopping pioneer leading the next trend in China.
</p>
								<ul>
									<li>收集整理美国人生活中您所不知的常用品，以及美国人自己的评论.</li>
									<li>在软木板上钉上你认为值得分享的物品，再看看大家都在谈论什么.</li>
									<li>在自己的空间里，记录自己想要一切.</li>
									<li>Donec pharetra ante in sodales semper.</li>
                                    <li>Nam vitae bibendum velit, eu fermentum dui.</li>
								</ul>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab5">
								<h2 class="page-title">Our Team</h2>
								<p><img src="images/products/product2.jpg" alt="product 2" class="img-responsive img_right">Duis purus mauris, tincidunt at consectetur non, tristique sodales ligula. Cras congue cursus risus, nec tempus mi porta eget. Cras ante metus, aliquam tincidunt eros sed, dignissim hendrerit est. Phasellus fringilla sit amet dui eu convallis. Mauris tristique, metus eget auctor tempor, elit odio vehicula mi, ac placerat lectus augue eu arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris eu porta urna, a commodo leo. <a href="#">Phasellus porttitor</a>, nisl vitae molestie euismod, magna lorem porta ante, eu commodo nisl orci ut nisi. Curabitur imperdiet, arcu vitae tincidunt viverra, velit elit aliquam metus, sed ultrices metus odio sed nunc.</p>
                                <p>Etiam lectus tortor, lobortis eu mattis nec, eleifend a nunc. Quisque consequat lectus sed imperdiet vulputate. Vivamus tristique non elit eu faucibus. Nam et arcu vestibulum, bibendum risus vitae, gravida libero. Suspendisse sed lacus neque. Nullam arcu elit, luctus ut enim et, eleifend varius dui. Fusce sit amet convallis lacus. Quisque vel ultricies libero. Morbi at tempor nisi.</p>
							</div> <!-- /.toggle-content -->
							<div class="toggle-content" id="tab6">
								<h2 class="page-title">Our Workspace</h2>
								<p><img src="images/workspace.JPG" alt="product 6" width="279" height="191" class="img-responsive img_left">Labore, libero itaque quisquam officiis earum. Eaque, facilis, quibusdam, ab, voluptates quaerat dignissimos totam nam consequuntur labore explicabo temporibus atque aliquid asperiores error impedit repudiandae est nemo omnis sequi quae eius quos repellat doloribus cumque nulla sunt maxime ducimus commodi animi placeat quo debitis earum illum numquam inventore aspernatur necessitatibus voluptatum delectus maiores laboriosam magni ex illo quod corporis hic consectetur odio suscipit fugit qui aperiam. Sequi, quos, nam quam debitis architecto doloribus rerum illum magnam culpa ex eius nobis ducimus aspernatur aliquid laborum deleniti distinctio temporibus quae.</p> 
                                <p>Quisque consequat lectus sed imperdiet vulputate. <a href="#">Vivamus tristique</a> non elit eu faucibus. Nam et arcu vestibulum, bibendum risus vitae, gravida libero. Suspendisse sed lacus neque. Nullam arcu elit, luctus ut enim et, eleifend varius dui.</p>
							</div> <!-- /.toggle-content -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-9 -->
					<div class="col-md-3 col-sm-2">
						<div id="icons-about">
							<ul class="tabs">
								<li>
									<a href="#tab4" class="icon-item">
										<i class="fa fa-umbrella"></i>
										<span>Our History</span>
									</a> <!-- /.icon-item -->
								</li>
								<li>
									<a href="#tab5" class="icon-item">
										<i class="fa fa-camera"></i>
										<span>Our Team</span>
									</a> <!-- /.icon-item -->
								</li>
								<li>
									<a href="#tab6" class="icon-item">
										<i class="fa fa-coffee"></i>
										<span>Our Workspace</span>
									</a> <!-- /.icon-item -->
								</li>
							</ul>
						</div> <!-- /.icons -->
					</div> <!-- /.col-md-3 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.services -->

		<div class="content contact" id="menu-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="widget-content">
							<div class="page-title">Contact Us</div>
							<div class="contact-form">
								<fieldset>
									<input id="name" type="text" name="name" placeholder="Name" maxlength="40">
								</fieldset>
								<fieldset>
									<input type="email" name="email" id="email" placeholder="Email" maxlength="30">
								</fieldset>
								<fieldset>
									<input type="text" name="subject" id="subject" placeholder="Subject" maxlength="60">
								</fieldset>
								<fieldset>
									<textarea name="comments" id="comments" placeholder="Message"></textarea>
								</fieldset>
								<fieldset>
									<input type="submit" name="send" value="Send Message" id="submit" class="button">
								</fieldset>
							</div> <!-- /.contact-form -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6">
						<div class="widget-content">
							<div class="page-title">Our Location</div>

							<div id="templatemo_map"></div>

                            <div class="contact-information">
                            	<div class="row">
                            		<div class="col-md-6 col-sm-6">
                            			<p>120 Digital Studio, Inya Lake, Yangon 10620, Myanmar</p>
                            		</div> <!-- /.col-md-6 -->
                            		<div class="col-md-6 col-sm-6 text-right">
                            			<ul>
                            				<li>Tel: 010-020-0340</li>
                            				<li>Email: info@company.com</li>
                            			</ul>
                            		</div> <!-- /.col-md-6 -->
                            	</div> <!-- /.row -->
                            </div> <!-- /.contact-information -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.contact -->

	</div> <!-- /#menu-container -->

</section>    
    

	<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy; 2084 Your Company Name</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.templatemo_footer -->

	<!-- Scripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/tabs.js"></script>
	<script src="js/jquery.lightbox.js"></script>
	<script src="js/templatemo_custom.js"></script>
	<!-- 
    	Free Responsive Template by templatemo
    	http://www.templatemo.com
	-->
    <!-- templatemo 397 concept -->
</body>
</html>