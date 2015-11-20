<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>商品</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- 
Concept Template 
http://www.templatemo.com/preview/templatemo_397_concept 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

<link rel="stylesheet" href="style.css" media="screen"/>

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/templatemo_misc.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="../css/templatemo_style.css">

	<!-- Favicons -->
     <link rel="shortcut icon" href="../images/logo.png">
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    
    
    
    
    
    
    
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css_product/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css_product/style.css" rel='stylesheet' type='text/css' />
<script src="js_product/simpleCart.min.js"> </script>
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js_product/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<script src="js_product/jquery.easydropdown.js"></script>
<link href="css_product/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js_product/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<link rel="stylesheet" href="css_product/etalage.css">
<script src="js_product/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>

<!-- star-rating -->

    <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css_star/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <script src="js_star/star-rating.js" type="text/javascript"></script>

<script>
    jQuery(document).ready(function () {
        $("#input-21f").rating({
            starCaptions: function(val) {
                if (val < 3) {
                    return val;
                } else {
                    return 'high';
                }
            },
            starCaptionClasses: function(val) {
                if (val < 3) {
                    return 'label label-danger';
                } else {
                    return 'label label-success';
                }
            },
            hoverOnClear: false
        });
        
        $('#rating-input').rating({
              min: 0,
              max: 5,
              step: 1,
              size: 'lg',
              showClear: false
           });
           
        $('#btn-rating-input').on('click', function() {
            $('#rating-input').rating('refresh', {
                showClear:true, 
                disabled:true
            });
        });
        
        
        $('.btn-danger').on('click', function() {
            $("#kartik").rating('destroy');
        });
        
        $('.btn-success').on('click', function() {
            $("#kartik").rating('create');
        });
        
        $('#rating-input').on('rating.change', function() {
            alert($('#rating-input').val());
        });
        
        
        $('.rb-rating').rating({'showCaption':true, 'stars':'3', 'min':'0', 'max':'3', 'step':'1', 'size':'xs', 'starCaptions': {0:'status:nix', 1:'status:wackelt', 2:'status:geht', 3:'status:laeuft'}});
    });
</script> 

<style>
p { 
    font-size: 26px;
}
</style>


</head>

<body>
	
<div id="itemid" style="display:none">babymachine</div>

	<?php
	
	require_once('../test/bookmark_fns.php'); 
	require_once('output_fns.php'); 
	session_start();
	
	do_html_header();
	?>
	
	
	
	
		
<!--<div class="container">
	<div class="col-xs-4 header-bottom-right">
	       <div class="box_1-cart">
		     <div class="box_11"><a href="checkout.html">
		      <h4><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><img src="images_product/bag.png" alt=""/><div class="clearfix"> </div></h4>
		      </a></div>
	          <p class="empty"><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	        </div>
	        <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		     </div>
	         <div class="clearfix"></div>
	</div>
    <div class="clearfix"></div>
</div> -->
      
<div class="single_top">
	 <div class="container"> 
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="../product_us/babymachine1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="../product_us/babymachine1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="../product_us/babymachine2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../product_us/babymachine2.jpg" class="img-responsive" title="" />
							</li> 
							<li>
								<img class="etalage_thumb_image" src="../product_us/babymachine.png" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/babymachine.png"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="../product_us/babymachine3.png" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/babymachine3.png"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
					<h1>Nuk婴儿辅食研磨碗</h1>
					<p style="font-size: 16px"> 什么食物也比不上妈妈自己动手给宝宝们制作的食物最安全！然而，妈妈们经常又会担心制作食物的器具。美国Freshfoods 12年最新出品不含BPA和邻笨二甲酸研磨碗，专为妈妈们制作加工最天然的食物泥而准备。妈妈们可以根据宝宝的口味来调节食品，最主要是随时随地都可以制作蔬菜泥，水果泥，鱼肉泥，鸡肉泥等等，不破坏食物本身的营养，又让宝宝吃到不同的新鲜，同时泥装食物更方便宝宝吸收，清洗又特别方便，您一定要试一下哦！</p>
				     <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">可选颜色</option>	
							<option value="1">红</option>
							<option value="2">蓝</option>
							<option value="3">绿</option>
							<option value="4"></option>
							<option value="5"></option>
							<option value="5"></option>
							<option value="5"></option>
			             </select>
			            </div>
			            <!-- <ul class="color_list">
							<li><a href="#"> <span class="color1"> </span></a></li>
							<li><a href="#"> <span class="color2"> </span></a></li>
							<li><a href="#"> <span class="color3"> </span></a></li>
							<li><a href="#"> <span class="color4"> </span></a></li>
							<li><a href="#"> <span class="color5"> </span></a></li>
						</ul> -->
						 <div class="clearfix"></div>
			         </div>
			         <div class="simpleCart_shelfItem">
			         	<div class="price_single">
                          
                          <p style="font-size: 16px"> 美国参考售价 </p>
						  <div class="head"><h2><span class="amount item_price">$9</span></h2></div>
                          <form>
        <input id="input-22"  value="0" type="number" class="rating" min=0 max=5 step=0.5 data-rtl=1 data-container-class='text-right' data-glyphicon=0 data-size="xs">
</form>
						  </br><p> ＊注: 此价格为为美国售价，寻找代购时应考虑美国购物税（0%－10%不等），以及国际快递成本</p>
						  <div class="head_desc"><a href="#">9 reviews</a><img src="images_product/review.png" alt=""/></li></div>
                          
					       <div class="clearfix"></div>
					     </div>
			               <!--<div class="single_but"><a href="" class="item_add btn_3" value=""></a></div>-->
			              <div class="size_2-right"><a href="#buy" class="item_add item_add1 btn_5" value="" />我想有 </a></div>
			          
			         </div>
				</div>
          	    <div class="clearfix"></div>
          	   </div>
				<div class="clearfix"></div>
			 <ul class="menu_drop">
				<li class="item1"><a href="#"><img src="images_product/product_arrow.png">产品介绍</a>
					<ul>
						<li class="subitem1">        Freshfoods宝宝食物研磨碗套装，帮助您轻松磨制宝宝食物，操作很方便，易清洗，可用于洗碗机，适合6个月以上宝宝，此款研磨碗十分便捷，操作简单，方便。</br>
											  适合做少量简单新鲜的果泥菜泥，也非常适合带宝宝短期旅行时随身携带。 </li>
						<li class="subitem2">  捣碎工具的设计用起来非常省力，不含BPA哦！超级多好评，用研磨勺在有纹路的那一侧一按一磨，轻松搞定。</a></li>
						<li class="subitem3"> </br>　 </br> </li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images_product/product_arrow.png">公司介绍</a>
					<ul>
						
					    <li class="subitem2"> <a href="#"> NUK是德国MAPA公司生产的世界高质量的婴儿用品的著名商标，在世界婴儿用品市场上享有很高的声誉。MAPA 公司的前身是创立于1947年德国不莱梅市(Bremen)的Hanseatische Gummiwerke Bachmann & Co. KG，并于60年代陆续并购多家橡胶制品公司，而规模日渐扩大。目前已在全世界70多个国家和地区销售。如今，MAPA公司隶属于在国际橡胶工业中具龙头地位的法国HUTCHINSON集团，而该集团更隶属于国际知名的石油公司-TOTAL S.A.。</a></li>
						<li class="subitem3"><a href="#"> 旗下产品 </br>
						洗澡水温计
给宝宝洗澡时水温最好要适中，水太烫怕烫伤小儿娇嫩的皮肤，水太凉又怕宝宝受凉感冒。医学上推荐宝宝洗澡的水温在37℃-40℃左右比较合适，但光靠大人的手感来测水温很不正确，本品可用来正确测量宝宝洗澡水的温度，让宝宝在舒适的水温中洗澡。时水温计也可作测量室内温度的温度计用。</a></li>
						<li class="subitem4"><a href="#"> 安全指甲钳
安全指甲钳在指甲钳外有一个塑料套子。它有一个安全档板，可限制手指过度伸入，避免弄伤手指。剪下的指甲片可暂时储存在指甲钳套中，不会飞溅到宝宝的眼睛中，弄伤眼睛。使用后可把剪下的指甲片一起倒出。
					  </a></li>
						<li class="subitem5"> <a href="#">: 
						</a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images_product/product_arrow.png">评论 (9)</a>
					<ul>
						<li class="subitem1" >Amazon</br>
						I love this food masher! We started feeding my son solid foods at 6 months. By that age he didn't need to eat watery cereal and could eat thicker purees. Some foods, like bananas and strawberries, can be mashed up as is. Some foods, like apples and pears, mash up really well once they are steamed. When he was about 9 months old we started putting whatever we were eating into the masher and it worked out perfectly. We put in pastas, stews, chicken and rice, spaghetti...all mashable! You can even take it to restaurants with you! Rather than spending money on a Baby Bullet, get a few of these!</li>

						<li class="subitem2"> My baby loves this rice cereal and we were going through alot of boxes. This multi pack is a great price per box. 
						This rice cereal was recommended by her GI doctor as a good first food.</li>
						<li class="subitem3">Our daughter loves the taste and we have been using it in her bottle since her first month. We have tried others, but they aren't as fine as this product. 
						If you're looking to put into bottle with formula to help substitute instead of rice, this is the product. We also mix in with her apples for more nutrition. 
						It is very nice to buy in bulk as we go through a box in about a week, to week in a half. Very nice product and it's organic.</li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images_product/product_arrow.png">产品规格</a>
					<ul>
					    <li class="subitem2"> 规格</br> 
					    1、不含BPA。
BPA（双酚A）是一种塑料瓶中含有的化学物质，有可能会引发癌变和其他功能紊乱，不排除BPA（双酚A）可能对人体产生危害。很多婴儿奶瓶、光盘、食品容器等塑料制品，都被发现含有BPA（双酚A）。
</br>　						
					    2、适用于微波炉、洗碗机，耐高温、可微波、紫外线杀菌，方便清洗。</li>
						<li class="subitem3">○　注意事项：</br>
						混搭水果、蔬菜皆可。</br>
						为宝宝准备副食品专用调理器具，可避免食物细菌感染。</li>
					</ul>
				</li>
	 		</ul>
   </div>
   <h3 class="m_2" id="buy">有有有认证买手</h3>
   <h5 style="text-align:center">经过认证的买手保证提供真品，并且有完善的售后服务，有有有官方也会对其产品质量负责，您可放心购买 <h5>
	     <div class="container">
          		<div class="box_3">
          			<div class="col-md-3">
          				<div class="content_box"><a href="http://youyouyou.co/member.php?user=liushanshu1987">
			   	          <img src="images_product/liushanshu.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="http://youyouyou.co/member.php?user=liushanshu1987">哆哆的妈咪 </a></h4>
				    <h5> 货源美国加州，在国内有库存，发货速度快</h5>
				    <p>¥ 85</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="#">
			   	          <img src="images_product/empty1.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="#">我们将认证每一个买手</a></h4>
                    <h5> </h5>
				    <p></p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="#">
			   	          <img src="images_product/empty1.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="#">我们将认证每一个买手</a></h4>
				    <p></p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="#">
			   	          <img src="images_product/empty1.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="#">我们将认证每一个买手</a></h4>
				    <p></p>
			        </div>
			        <div class="clearfix"> </div>
          		</div>
          	</div>
        </div>









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
</html></html>