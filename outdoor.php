<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>户外</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/css_outdoor/normalize.css">
        <link rel="stylesheet" href="css/css_outdoor/font-awesome.css">
        <link rel="stylesheet" href="css/css_outdoor/bootstrap.min.css">
        <link rel="stylesheet" href="css/css_outdoor/templatemo-style.css">
        <script src="modernizr-2.6.2.min.js"></script>
        <!-- 
        Masonry Template 
        http://www.templatemo.com/preview/templatemo_434_masonry
        -->
        
        
        
        
        
        
    
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

			<!-- Main CSS -->
			<link rel="stylesheet" href="css/templatemo_style.css">

			<!-- Favicons -->
			<link rel="shortcut icon" href="images/ico/favicon.ico">

    
    <script src="js/outdoor/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="../html5.js"></script>
<![endif]-->
<script src="js/outdoor/blocksit.min.js"></script>
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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <?php
		require_once('test/bookmark_fns.php'); 
		session_start();
		?>


        <div class="content-bg"></div>

  

        <!-- SITE TOP -->
	<div class="site-header">
		<div class="main-navigation">
	
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
						
								<li style="float: right"><a href="http://youyouyou.co/3rdpage.php" target="_self"> <?php echo $_SESSION[ 'valid_user'] ?> </a> <a href="file:///Macintosh HD/Users/richardhyz/Downloads/templatemo_434_masonry/test/logout.php">Logout</a></li>
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
						<h1>  户外  <br><br></h1>

					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->
 <!-- .site-top -->
        
        <!-- MAIN POSTS -->
        <div class="main-posts">
            <div class="container">
                <div class="row">
                    <div class="blog-masonry masonry-true">
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <a href="http://youyouyou.co/opinel.html"><img src="images/outdoor/opinel-no-8-inox2-1024x647.jpg" width="99%" height="273"></a>
                                <div class="title-over">
                                  <h4><a href="#">Opinel 法国经典折刀</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/outdoor/2.jpg" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Second Image Title</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/outdoor/3.jpg" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Image Number Three</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/outdoor/4.jpg" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Aliquam sed magna risus</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/outdoor/5.jpg" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Lorem ipsum dolor sit</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/outdoor/6.jpg" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Praesent eget lectus mauris</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/outdoor/7.jpg" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Donec nec metus non</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/outdoor/8.jpg" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Vestibulum faucibus lacus</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="images/outdoor/9.jpg" alt="">
                                <div class="title-over">
                                    <h4><a href="#">Pellentesque habitant morbi</a></h4>
                                </div>
                                
                            </div>
                        </div> <!-- /.post-masonry -->
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
		<div id="templatemo_footer">
		  <div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="color:black">Copyright &copy; 2015 Handsome Four</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		  </div> <!-- /.container -->
	    </div> <!-- /.templatemo_footer -->



        <script src="js/outdoor/jquery-1.10.2.min.js"></script>
        <script src="js/outdoor/plugins.min.js"></script>
        <script src="js/outdoor/main.min.js"></script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $('#loader').fadeOut(); // will first fade out the loading animation
                    $('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>
	<!-- templatemo 434 masonry -->
    </body>
</html>