<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>首页</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="overflow/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
		
		
		<!-- CSS Bootstrap & Custom -->
   
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">
	
	
	
	

		
			
    
	
<!-- 
Concept Template 
http://www.templatemo.com/preview/templatemo_397_concept 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">



	<!-- Favicons -->
	<link rel="shortcut icon" href="images/logo.png">
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    
    
    
<!-- style for header -->
<style>
.site-header .main-navigation ul, .services #icons ul, .about #icons-about ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
.templatemo_clear { clear: both; }
.img_left {	float: left; margin-right: 20px; margin-bottom: 15px; }
.img_right { float: right; margin-left: 20px; margin-bottom: 15px; }


.site-header .main-navigation {
  display: block;
  background-color: transparent;
  text-align: center;
  padding: 15px 0;
}
.site-header .main-navigation ul li {
  display: inline-block;
  margin-right: 60px;
}
.site-header .main-navigation ul li:last-child {
  margin-right: 0px !important;
}
.site-header .main-navigation ul li a {
  padding: 10px 20px;
  display: inline-block;
  color: white;
  font-size: 18px;
}
.site-header .main-navigation ul li a.active {
  background-color: #eeeeee;
  color: #2a2a2a;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.site-header .templatemo_logo {
  margin-top: 60px;
  display: inline-block;
  font-size: 36px;
  font-weight: 700;
}

@media only screen and (max-width: 1000px) {
  .site-header .main-navigation {
    padding: 0;
  }
  .site-header .main-navigation .container {
    width: 100%;
  }





  <!-- login style-->
  .modal-header, h4, .close {
      background-color: #33cccc;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }



</style>
    
    



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

	?>
	
	
	
	


	
	
	
	
	
	
	
	
 </div>

		<!-- Header -->
	<div class="site-header">
	  <div class="main-navigation">
	
			<div class="container">
				<div class="row">

					
					<div class="col-md-12 main_menu" >
						<ul style="display: inline">
						
							<li style="float: left !important "><img src="images/logow.png" ?><a href="http://youyouyou.co" target="_self">首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>

							<li ><a href="http://youyouyou.co/1stpage.php" target="_self">陈列室</a></li>
							<li><a href="http://youyouyou.co/2ndpagelike.php" target="_self">迷你市集</a></li>
							<li><a href="#" target="_self">论坛</a></li>
							<!--<li><a href="http://youyouyou.co/4thpage.php" target="_self">关于</a></li>-->
							<!-- <li><a href="http://youyouyou.co/5thpage.php" target="_self">联系</a></li> -->
						  	
                            <?php
							if(isset($_SESSION[ 'valid_user'])) { 
								  ?>
						
								<li style="float:right;  margin-left: 30px; !important"><a href="http://youyouyou.co/3rdpage.php" target="_self"> <?php echo $_SESSION[ 'valid_user'] ?>的小屋 </a> <a href="test/logout.php">Logout</a> </li>
							<?php } 
							else { ?>
								<li style="float:right;  margin-left: 30px;" ><a href="http://youyouyou.co/test/login.php" target="_self">登陆/注册</a></li>
							<?php } ?>
	
						</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		  </div>
		</div>

			
			
			

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>欢迎来到 有有有</h2>
				</header>
				<p>在这里找到各国最好最经典的商品<br />
				探索、收藏、分享你的新发现，从当地人那里把最货真价实东西买回来<br />
				让你的生活 有有有</p>
				<footer>
					<a href="#first" class="button style2 scrolly">近期推荐</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="http://youyouyou.co/hzhao/product_opinel.php" class="image fit"><img src="images/opinel/opinel4.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<a href="http://youyouyou.co/hzhao/product_opinel.php"><h2>Opinel<br />
						法国经典折刀</h2></a>
					</header>
					<p>号称法国国刀，法国人得第十一跟手指。法国人家传户晓的品牌。<br/>
						法国人家传户晓的品牌。
					</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="http://youyouyou.co/hzhao/product_rice.php" class="image fit"><img src="hzhao/images_product/rice7.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Earth's Best世界最好 婴幼儿米糊
						 </h2>
					</header>
					<p>
					纯天然有机认证的最高纯度含铁量的婴儿米粉。 本品采用最新鲜的天然有机糙米及有机米糠提取物，富含多种必要的维生素、蛋白质、膳食纤维及矿物质。
					</p>
				</div>
			</article>

		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<a href="http://youyouyou.co/1stpage.php"><h2>更多推荐</h2>
					<p>进入陈列室<br />
					查看不同分类的更多精彩</p></a>
				</header>
				<!--<div class="inner gallery"> -->
				</br></br>
				<div style="display: inline-block;">
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a href="http://youyouyou.co/hzhao/product_bio.php" class="image fit"><img src="images/Digest.png"/></a></div>
						<div class="3u 12u(mobile)"><a href="http://youyouyou.co/hzhao/product_shaver.php" class="image fit"><img src="product_us/braun_790cc.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="3u 12u(mobile)"><a href="http://youyouyou.co/hzhao/ddrop.php" class="image fit"><img src="images/ddrops.png" alt="" title="Raven" /></a></div>
						<div class="3u 12u(mobile)"><a href="http://youyouyou.co/hzhao/childlife.php" class="image fit"><img src="images/vitamin.png" alt="" height="422" width="22" /></a></div>
					</div>
				</div>
					<div class="row 0%">
						<div class="3u 12u(mobile)"><a href="http://youyouyou.co/hzhao/product_mega.php" class="image fit"><img src="images/mega9.jpg" alt="" title="mega" /></a></div> &nbsp; 
						<div class="3u 12u(mobile)"><a href="http://youyouyou.co/hzhao/product_women.php" class="image fit"><img src="images/women9.jpg" alt="" title="Different." /></a></div>
						<div class="3u 12u(mobile)"><a href="http://youyouyou.co/hzhao/babymachine.php" class="image fit"><img src="product_us/babymachine1.jpg" alt="" title="babymachine" height="262" width="22"/></a></div>
						<div class="3u 12u(mobile)"><a href="http://youyouyou.co/hzhao/calibb.php" class="image fit"><img src="product_us/calibb2.jpg" alt="" title="calibb" /></a></div>
					</div>
				<!-- </div> -->
			</article>

		<!-- Contact -->
			

		

			<hr>
			<div style="display : inline; ">
					<p style="text-align: right"><a href="http://youyouyou.co/5thpage.php" class="btn_2"> 联系我们 </a></p>
		  
			</div>
		



		<!-- Scripts -->
			<script src="overflow/assets/js/jquery.min.js"></script>
			<script src="overflow/assets/js/jquery.scrolly.min.js"></script>
			<script src="overflow/assets/js/jquery.poptrox.min.js"></script>
			<script src="overflow/assets/js/skel.min.js"></script>
			<script src="overflow/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="overflow/assets/js/main.js"></script>
	</body>
</html>