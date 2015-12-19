
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<title>陈列室</title>
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
    <link rel="shortcut icon" href="images/logo.png">
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    
</head>
<body>

	<?php
	session_start();
	/* require('test/bookmark_fns.php'); */
	include('test/output_fns.php');
	require_once('test/data_valid_fns.php'); 
  	require_once('test/db_fns.php');
    require_once('test/user_auth_fns.php');
  	require_once('test/url_fns.php'); 

	do_html_header();
	?>

<!-- search bar -->		
		<script>
		  (function() {
			var cx = '007599678928797126739:b9x2lohdlb8';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				'//cse.google.com/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		  })();
		</script>

	<div style="width: 500px; height= 30px; float: right;">
		<gcse:search></gcse:search>
	</div>
<!-- search bar -->		



		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						<h1>陈列室</h1>                     
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->
    <p style="text-align:center; font-size:18px; color: #33CCCC"> 
    		收集整理各国好东西，用数据告诉你不同的生活方式 </p>
	
	<div id="menu-container">

		<div class="content homepage" id="menu-1">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 col-sm-6 col-md-offset-1">
						<div class="gallery-item">
							<div class="image">
								<a href="http://youyouyou.co/health.php"> <img src="images/gallery/pill.jpg" alt="image 2"> </a>
							</div>
							<div class="content-gallery">
								<h3>保健品</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
								<a href="http://youyouyou.co/shoes.php"> <img src="images/gallery/sneakers.jpg" alt="image 2"> </a>
							</div>							
							<div class="content-gallery">
								<h3>运动鞋</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/bag.php"> <img src="images/gallery/bags.jpg" alt="image 2"> </a>                
							</div>
							<div class="content-gallery">
								<h3> 箱包 </h3> 
						  </div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/beauty.php"> <img src="images/gallery/makeup.jpg" alt="image 2"> </a>
                                
							</div>
							<div class="content-gallery">
								<h3>美容美妆</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/electronic.php"> <img src="images/gallery/tech.jpg" alt="image 2"> </a>
							</div>
							<div class="content-gallery">
								<h3>数码</h3> 
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6 col-md-offset-2">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/toy.php"> <img src="images/gallery/toy.jpg" alt="image 2"> </a>                               						
							</div>
							<div class="content-gallery">
								<h3>玩具</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/snack.php"> <img src="images/gallery/gallery-item7.jpg" alt="image 2"> </a>
							</div>
							<div class="content-gallery">
								<h3>零食</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/mother.php"> <img src="images/gallery/mother.png" alt="image 2"> </a>
							</div>
							<div class="content-gallery">
								<h3>母婴</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">

								<a href="http://youyouyou.co/outdoor.php"> <img src="images/gallery/gallery-item9.jpg" alt="image 9"> </a>
							</div>
							<div class="content-gallery">
								<h3>户外</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6 col-md-offset-3">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/watch.php"> <img src="images/gallery/watch.jpg" alt="image 2"> </a>
							</div>
							<div class="content-gallery">
								<h3> 手表 </h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/study.php"> <img src="images/gallery/gallery-item11.jpg" alt="image 2"> </a> 
							</div>
							<div class="content-gallery">
								<h3>工作学习</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
                    
					<div class="col-md-2 col-sm-6">
						<div class="gallery-item">
							<div class="image">
                            	<a href="http://youyouyou.co/lifestyle.php"> <img src="images/gallery/gallery-item12.jpg" alt="image 2"> </a> 
							</div>
							<div class="content-gallery">
								<h3>生活方式</h3>
							</div>
						</div> <!-- /.gallery-item -->
					</div> <!-- /.col-md-2 -->
				</div> <!-- /.row -->
			</div> <!-- /.slide-item -->
		</div> <!-- /.homepage -->






	<!-- 	<div class="content products" id="menu-2">
        


</div> -->








		<div class="content services" id="menu-3">
			
			<div class="container">
					<div class="row">
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
					</div> <!-- /.row -->
			</div> <!-- /.slide-item -->
		</div> <!-- /.products -->
        
        
        
        
        
        
        

		<div class="content about" id="menu-4">
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
									<li>Cras quis nibh vitae ligula venenatis blandit ut eleifend nunc.</li>
									<li>Morbi imperdiet mauris ut dolor pellentesque egestas.</li>
									<li>Ut ultrices lorem quis tellus malesuada blandit.</li>
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
								<p><img src="images/products/product6.jpg" alt="product 6" class="img-responsive img_left">Labore, libero itaque quisquam officiis earum. Eaque, facilis, quibusdam, ab, voluptates quaerat dignissimos totam nam consequuntur labore explicabo temporibus atque aliquid asperiores error impedit repudiandae est nemo omnis sequi quae eius quos repellat doloribus cumque nulla sunt maxime ducimus commodi animi placeat quo debitis earum illum numquam inventore aspernatur necessitatibus voluptatum delectus maiores laboriosam magni ex illo quod corporis hic consectetur odio suscipit fugit qui aperiam. Sequi, quos, nam quam debitis architecto doloribus rerum illum magnam culpa ex eius nobis ducimus aspernatur aliquid laborum deleniti distinctio temporibus quae.</p> 
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

	<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="text-align: right"><a href="http://youyouyou.co/5thpage.php" class="btn_2"> 联系我们 </a></p>
					<p style="text-align: left">Copyright &copy; 2015 Handsome Four</p> 
				  
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