<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>陈列室</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="1stpage/css/bootstrap.css">
<link rel="stylesheet" href="1stpage/css/bootstrap-responsive.css">
<link rel="stylesheet" href="1stpage/css/prettyPhoto.css" />
<link rel="stylesheet" href="1stpage/css/flexslider.css" />
<link rel="stylesheet" href="1stpage/css/custom-styles.css">

<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <!--
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/templatemo_misc.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    -->

<!-- Main CSS -->
	<link rel="stylesheet" href="css/templatemo_style.css">


<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="1stpage/img/logo.png">

<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="1stpage/js/bootstrap.js"></script>
<script src="1stpage/js/jquery.prettyPhoto.js"></script>
<script src="1stpage/js/jquery.flexslider.js"></script>
<script src="1stpage/js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>

<body class="home" style="background: #f9f9f9 url(1stpage/img/page-bg-1.jpg)">

	<?php 
	session_start();
	
	/* require('test/bookmark_fns.php'); */
	include('test/output_fns.php');
	require_once('test/data_valid_fns.php'); 
  	require_once('test/db_fns.php');
    require_once('test/user_auth_fns.php');
  	require_once('test/url_fns.php');
  	   
	

	//do_html_header();
	?>
	
	<div class="site-header">
	  <div class="main-navigation">
	
			<div class="container">
				<!--<div class="row">-->

					
					<div class="col-md-12 main_menu" >
						<ul style="display: inline">
						
							<li style="float: left !important "><a href="http://youyouyou.co" target="_self"><img src="images/logow.png" ?></a>    <a href="http://youyouyou.co" target="_self">&nbsp;&nbsp;</a></li>

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

    <!-- Color Bars (above header)
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div> -->
    
    <div class="container">
    
   
      <div class="row header">     <!--  Begin Header -->
      
        
        
      </div><!-- End Header -->
      
      
     
    <div class="row headline" ><!-- Begin Headline -->

     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
         <div  style="margin: 20px;">
            <div class="flexslider">
              <ul class="slides">
                <li><a href="http://youyouyou.co/new1stpage.php"><img src="1stpage/img/promo.jpg" alt="slider" /></a></li>
                <li><a href="http://youyouyou.co/2ndpagelike.php"><img src="1stpage/img/mini.png" alt="slider" /></a></li>
                <!--<li><a href="gallery-single.htm"><img src="1stpage/img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="1stpage/img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.htm"><img src="1stpage/img/gallery/slider-img-1.jpg" alt="slider" /></a></li>-->
              </ul>
            </div>
        </div>
        </div>
        
        
        <!-- Headline Text
        ================================================== 
        在这里找到各国最好最经典的商品
探索、收藏、分享你的新发现，从当地人那里把最货真价实东西买回来
让你的生活 有有有-->
        <!-- <div class="span4"> -->
        <div  style="margin: 20px;">
        	<h3 style = "color: #33cccc; font-size: 18px"> 欢迎来到有有有 <br />
            </h3>
            <p class="lead">最中立的全球商品点评网站</p>
            <p>在这里找到各国最好最经典的商品。探索、收藏、分享你的新发现，从当地人那里把最货真价实东西买回来。让你的生活 有有有。</p>
            <br /><br /><br /><a href="#"><i class="icon-plus-sign"></i>Read More</a> 
        </div>

    </div><!-- End Headline -->
    
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            <h5 class="title-bg" style = "color: #33cccc; font-size: 18px">近期推荐 
                <small>That we are most proud of</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">查看更多</button>
            </h5>
    	
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        
                        <a href="http://youyouyou.co/hzhao/product_opinel.php"><img src="1stpage/img/opinel-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="http://youyouyou.co/hzhao/product_opinel.php">Opinel法国折刀</a>号称法国国刀，法国人得第十一跟手指。法国人家传户晓的品牌。</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                        
                        <a href="gallery-single.htm"><img src="1stpage/img/rice-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">EARTH'S BEST 婴幼儿米糊</a>纯天然有机认证的最高纯度含铁量的婴儿米粉。</span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span3 gallery-item" data-id="id-3" data-type="web">
             
                        <a href="gallery-single.htm"><img src="1stpage/img/digest-s.png" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">美国康萃乐益生菌</a>美国益生菌行业领先品牌.</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span3 gallery-item" data-id="id-4" data-type="video">
        
                        <a href="gallery-single.htm"><img src="1stpage/img/braun-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">德国博朗电动剃须刀</a>长达六十年来常居欧洲“最受男士欢迎剃须刀”的宝座.</span>
                    </li>

                    <!-- Gallery Item 5 -->
                    <li class="span3 gallery-item" data-id="id-5" data-type="web illustration">
                  
                        <a href="gallery-single.htm"><img src="1stpage/img/ddrops-s.png" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Ddrops婴儿维生素D</a>北美医生推荐妈妈给宝宝使用，加拿大儿科医生推荐。</span>
                    </li>

                    <!-- Gallery Item 6 -->
                    <li class="span3 gallery-item" data-id="id-6" data-type="illustration design">
                        
                        <a href="gallery-single.htm"><img src="1stpage/img/childlife-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">童年时光婴儿维生素</a>ChildLife作为美国专门出品儿童营养保健品的公司，是儿童营养补充的领头羊，纯天然的提取</span>
                    </li>

                    <!-- Gallery Item 7 -->
                    <li class="span3 gallery-item" data-id="id-7" data-type="design">
                       
                        <a href="gallery-single.htm"><img src="1stpage/img/mega-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Qunol辅酶Q10</a>Qunol系列产品是美国辅酶Q10产品中的金牌标准，是众多医生、药剂师、营养师和保健师推荐的保健产品</span>
                    </li>

                    <!-- Gallery Item 8 -->
                    <li class="span3 gallery-item" data-id="id-8" data-type="web video">
                        
                        <a href="gallery-single.htm"><img src="1stpage/img/women9-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">美国拜耳女性复合维生素</a>特别设计给中老年女性每天所需的综合维他命，.</span>
                    </li>

                    <!-- Gallery Item 9 -->
                    <li class="span3 gallery-item" data-id="id-9" data-type="design">
                        
                        <a href="gallery-single.htm"><img src="1stpage/img/babymachine-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">NUK婴儿辅食研磨碗</a>美国Freshfoods 12年最新出品不含BPA和邻笨二甲酸研磨碗.</span>
                    </li>

                    <!-- Gallery Item 10 -->
                    <li class="span3 gallery-item" data-id="id-10" data-type="web design">
                        
                        <a href="gallery-single.htm"><img src="1stpage/img/calibb-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">加州宝宝婴儿沐浴露</a>使用金盏草来舒缓和治愈我们肌肤的问题</span>
                    </li>

                    <!-- Gallery Item 11 -->
                    <li class="span3 gallery-item" data-id="id-11" data-type="illustration">
                        
                        <a href="gallery-single.htm"><img src="1stpage/img/littlefish-s.jpg" alt="Gallery" height="270" width="220"></a>
                        <span class="project-details"><a href="gallery-single.htm">挪威小鱼油</a>Naturals的鳕鱼肝油配方产品一直都用100%北极鳕鱼肝油.</span>
                    </li>

                    <!-- Gallery Item 12 -->
                    <li class="span3 gallery-item" data-id="id-12" data-type="illustration video">
                       
                        <a href="gallery-single.htm"><img src="1stpage/img/bose-s.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.htm">Bose蓝牙音响</a>不仅外形小巧，而且可以呈现完整自然、带有显著更深层重低音效果的声音.</span>
                    </li>
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div id="menu-container">
    
    <h5 class="title-bg" style = "color: #33cccc; font-size: 18px">分类浏览 
    </h5>

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
                            	<a href="http://youyouyou.co/gaming.php"> <img src="images/gallery/gaming9.jpg" alt="image 2"> </a>
							</div>
							<div class="content-gallery">
								<h3> 游戏 </h3>
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
	</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="row"><!-- Begin Bottom Section -->
    
    	<!-- Blog Preview
        ================================================== -->
    	<!--<div class="span6">-->

            <h5 class="title-bg">微信公众号文章 
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide ">

            <!-- Carousel items -->
            <div class="carousel-inner">

                 <!-- Blog Item 1 -->
                <div class="active item">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=402848603&idx=1&sn=605c70bb999f7e7042451c252dd23332&3rd=MzA3MDU4NTYzMw==&scene=6#rd"><img src="1stpage/img/dyson.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=402848603&idx=1&sn=605c70bb999f7e7042451c252dd23332&3rd=MzA3MDU4NTYzMw==&scene=6#rd">来聊聊dyson戴森2个爆款空气净化器</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Jan. 25th, 2016<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Daisy</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">因健康而动--近年，dyson致力于帮助客户解决“空气污染”这一全球问题，研制出Pure Cool AM11 & Pure+hot Cool HP01，此系列空气净化器不仅可以阻挡PM2.5,可以净化99.95%小于PM0.1的有害颗粒物。 <a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=402848603&idx=1&sn=605c70bb999f7e7042451c252dd23332&3rd=MzA3MDU4NTYzMw==&scene=6#rd">Read more</a><p>
                </div>

                <!-- Blog Item 2 -->
                 <div class="item">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=402436140&idx=1&sn=8bce5a94f50850fc7a7c930fec6bac93&3rd=MzA3MDU4NTYzMw==&scene=6#rd"><img src="1stpage/img/apple.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=402436140&idx=1&sn=8bce5a94f50850fc7a7c930fec6bac93&3rd=MzA3MDU4NTYzMw==&scene=6#rd">"硅谷制造"体恤抽奖结果！抽奖过程！下期预告！</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Jan. 14th, 2016<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Richard</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">为了迎合此次“硅谷制造”的奖品设置,我们专程在前往位于硅谷的苹果公司总部为大家抽出这次两位中奖者的名单.截至美国时间13日早晨,我们把所有关注者的微信名... <a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=402436140&idx=1&sn=8bce5a94f50850fc7a7c930fec6bac93&3rd=MzA3MDU4NTYzMw==&scene=6#rd">Read more</a><p>
                </div>

                 <!-- Blog Item 3 -->
                 <div class="item">
                    <a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=401851543&idx=1&sn=7f8a67d80e44f6bcde7d996a665f7266&3rd=MzA3MDU4NTYzMw==&scene=6#rd"><img src="1stpage/img/godiva.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=401851543&idx=1&sn=7f8a67d80e44f6bcde7d996a665f7266&3rd=MzA3MDU4NTYzMw==&scene=6#rd">巧克力中的劳斯莱斯——歌帝梵(Godiva)</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Dec. 21st, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Richard</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">作为一个有底蕴的吃货，说起比利时，两个东西应该马上出现在你的脑中——啤酒和巧克力。而歌帝梵（Godiva） 巧克力一定也是你第一个应该知道的比利时巧克力。 <a href="http://mp.weixin.qq.com/s?__biz=MzI5MjEwNDM0MA==&mid=401851543&idx=1&sn=7f8a67d80e44f6bcde7d996a665f7266&3rd=MzA3MDU4NTYzMw==&scene=6#rd">Read more</a><p>
                </div>
                
            </div>
            </div> 	
        <!--</div>-->
        

        
    </div><!-- End Bottom Section -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

	<div class="footer-container" ><!-- Begin Footer -->
    	<div class="container" >

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2015.  All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://youyouyou.co/2ndpagelike.php">Mimi Market</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://youyouyou.co/5thpage.php">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
