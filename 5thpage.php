<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$from = 'Demo Contact Form'; 
		$to = 'service@youyouyou.co'; 
		$subject = 'Message from Contact ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">谢谢! 您的反馈对我们非常重要</div>';
	} else {
		$result='<div class="alert alert-danger">对不起，消息发送失败，求稍后重试.</div>';
	}
}
	}
?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]--><head>
	
	<title>联系</title>
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
	<link rel="stylesheet" href="hzhao/templatemo_style.css">

	<!-- Favicons -->
     <link rel="shortcut icon" href="images/logo.png">
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    
    <title>联系</title>
    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="https://www.facebook.com/youyouyouco" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="有有有" />
    <meta property="og:description"   content="International Commercial Platform" />
    <meta property="og:image"         content="https://www.facebook.com/youyouyouco/photos/a.745210825584249.1073741827.744853428953322/745210778917587/?type=3" />

</head>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
		
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						<h1>关于我们</h1>                     
					</a> <!-- /.logo -->
                        <div id="fb-root"></div>

<div class="fb-like" 
	data-href="https://www.facebook.com/youyouyouco" 
	data-layout="standard" 
	data-action="like" 
	data-show-faces="false" 
	data-share="true">
    </div> 
                    
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->
    <p style="text-align:center; font-size:18px; color: #33CCCC"> 
    		<br>收集整理各国好东西，用数据告诉你不同的生活方式  </p>

    
	
	<div id="menu-container">	

		<div class="content homepage" id="menu-5">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="widget-content">
							<div class="page-title">联系我们</div>
							<div class="contact-form">
							
								<form role="form" method="post" action="5thpage.php">
									<!--<fieldset>
										<input id="name" type="text" name="name" placeholder="名字" maxlength="40">
									</fieldset>
									<fieldset>
										<input type="email" name="email" id="email" placeholder="邮箱" maxlength="30">
									</fieldset>
									<fieldset>
										<input type="text" name="subject" id="subject" placeholder="主题" maxlength="60">
									</fieldset>
									<fieldset>
										<textarea name="comments" id="comments" placeholder="内容"></textarea>
									</fieldset>
									<fieldset>
										<input type="submit" name="send" value="Send Message" id="submit" class="button">
									</fieldset>-->
									
									
												<div class="form-group">
												  <fieldset>
													<label for="name" class="col-sm-2 control-label">名字</label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
														<?php echo "<p class='text-danger'>$errName</p>";?>
													</div>
												  </fieldset>													
												</div>
												
												<div class="form-group">
												  <fieldset>
													<label for="email" class="col-sm-2 control-label">Email</label>
													<div class="col-sm-10">
														<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
														<?php echo "<p class='text-danger'>$errEmail</p>";?>
													</div>
												  </fieldset>
												</div>
												
												<div class="form-group">
												  <fieldset>
													<label for="message" class="col-sm-2 control-label">信息</label>
													<div class="col-sm-10">
														<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
														<?php echo "<p class='text-danger'>$errMessage</p>";?>
													</div>
												  </fieldset>	
												</div>
												
												<div class="form-group">
												  <fieldset>
													<div class="col-sm-10 col-sm-offset-2">
														<input id="submit" name="submit" type="submit" value="发送" class="btn btn-primary">
													</div>
												  </fieldset>
												</div>
												
												<div class="form-group">
													<div class="col-sm-10 col-sm-offset-2">
														<?php echo $result; ?>	
													</div>
												</div>
								</form>
							</div> <!-- /.contact-form -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-6 -->
                    

					<div class="col-md-6">
						<div class="widget-content">
							<div class="page-title">公司地址</div>

							<div id="templatemo_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d50746.143031421336!2d-121.97461260526448!3d37.35117416926235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x808fcbae5bd2c8bf%3A0x88db1f09df4e2a55!2sLucas+Hall%2C+Santa+Clara%2C+CA+95050!3m2!1d37.3511111!2d-121.9395931!5e0!3m2!1sen!2sus!4v1444347114293"></iframe></div>

                            <div class="contact-information">
                            	<div class="row">
                            		<div class="col-md-6 col-sm-6">
                            			<p>500 El Camino Real, Santa Clara, CA 95053</p>
                            		</div> <!-- /.col-md-6 -->
                            		<div class="col-md-6 col-sm-6 text-right">
                            			<ul>
                            				<li>Tel: (408)981-2775</li>
                            				<li>Email: service@youyouyou.co</li>
                            			</ul>
                            		</div> <!-- /.col-md-6 -->
                            	</div> <!-- /.row -->
                            </div> <!-- /.contact-information -->
						</div> <!-- /.inner-content -->
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.contact -->
        
        <div class="about_box">
			 <div class="container">
			 	<h3>Our Team</h3>
				<div class="col-md-3 row_1">
					<img src="images/richard1.jpg" class="img-responsive" alt=""/>
					<h5><a href="#">Yizhou He</a></h5>
					<p>何逸舟.</p>
					<a href="#" class="btn_2">more</a>
				</div>
				<div class="col-md-3 row_1">
					<img src="/images/liangshu1.jpg" class="img-responsive" alt=""/>
					<h5><a href="#">Liangshu Liu</a></h5>
					<p>刘良书.</p>
					<a href="#" class="btn_2">more</a>
				</div>
				<div class="col-md-3 row_1">
					<img src="/images/zhaoheng1.jpg" class="img-responsive" alt=""/>
					<h5><a href="#">Heng Zhao</a></h5>
					<p>赵恒.</p>
					<a href="#" class="btn_2">more</a>
				</div>
				<div class="col-md-3 row_1">
					<img src="/images/silin1.jpg" class="img-responsive" alt=""/>
					<h5><a href="#">Silin Huang</a></h5>
					<p>黄思霖.</p>
					<a href="#" class="btn_2">more</a>
				</div>
				<div class="clearfix"> </div>
			 </div>
			</div>

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