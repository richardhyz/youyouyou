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
	
<div id="itemid" style="display:none">fishoil</div>

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
									<img class="etalage_thumb_image" src="../product_us/fishoil1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="../product_us/fishoil1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="../product_us/fishoil2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../product_us/fishoil2.jpg" class="img-responsive" title="" />
							</li> 
							<li>
								<img class="etalage_thumb_image" src="../product_us/fishoil.png" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/fishoil.png"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="../product_us/fishoil3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/fishoil3.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
					<h1>挪威小鱼油</h1>
					<p style="font-size: 16px"> 在婴儿出生的第一年，他们的大脑将长大到出生时的双倍大小。DHA是脑部发育的主要问题。摄取足够的DHA对于适当的大脑发育，对于一生的脑部健康非常必要。Nordic Naturals的鳕鱼肝油配方产品一直都用100%北极鳕鱼肝油——从不使用鱼身体油或人造添加剂。北极鳕鱼是鳕鱼中DHA,维他命A和维他命D含量最高的鳕鱼。提取自100%北极鳕鱼肝油，天然含有很高OMEGA-3 DHA.DHA是婴儿成长的要素。同时含有健康水平的维他命A和D.</p>
				     <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">可选段位</option>	
							<option value="1">1段</option>
							<option value="2">2段</option>
							<option value="3">3段</option>
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
						  <div class="head"><h2><span class="amount item_price">$14.99</span></h2></div>
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
						<li class="subitem1"> 1.液体DHA，易于吞服和吸收；</br>
											  2.100%纯净北冰洋深海鳕鱼肝中提取</li>
						<li class="subitem2">  3.帮助宝宝视网膜和大脑发育，防治视力低下，提高记忆力，增强免疫</a></li>
						<li class="subitem3"> 4.含有维生素A，防治贫血和感冒</br>　5.含有维生素D，促进钙吸收，防止佝偻病 </br> 6.含有维生素E，抗氧化，防脑疲劳</li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images_product/product_arrow.png">公司介绍</a>
					<ul>
						
					    <li class="subitem2"> <a href="#"> Nordic Naturals（挪帝克）--以质量闻名全球的鱼油第一品牌。
几十年来挪帝克一直以提供最高纯度和最佳口味的深海鱼油为己任，以品质赢得了消费者的青睐和一百多项的国际大奖，从而成为世界上最大的鱼油生厂商之一。</a></li>
						<li class="subitem3"><a href="#"> 品牌产地</br>
						Nordic Naturals（挪帝克）的专属捕捞区位于挪威海和罗浮敦群岛附近。这个海域距离北极圈只有45海里，是世界上最洁净、最美丽的海区。北大西洋暖流带来的丰富营养使这里成为北极圈内重要鱼类洄游的必经之地。这里是全球Nordic Naturals（挪帝克）鱼油产品的唯一产地。Nordic Naturals（挪帝克）珍惜上帝赋予他们的丰富而美丽的资源，在这个宝贵的海域的所有捕捞行为都有着严格的计划和安排，以保护这里的环境和避免任何鱼类频临生存危机。
Nordic Naturals（挪帝克）只在鱼季捕鱼。Nordic Naturals（挪帝克）几十年来始终保持在海上捕捞、海上生产、海上封存的传统，从鱼群出水到鱼油产品进入渔船上专业冷库的时间不超过24小时，避免任何中间环节的污染。因此Nordic Naturals（挪帝克）每年在全球销售的上百万瓶鱼油的批号始终保持在鱼群被打捞出水的那一天。这是Nordic Naturals（挪帝克）品质保障的关键之一。</a></li>
						<li class="subitem4"><a href="#"> 
					  </a></li>
						<li class="subitem5"> <a href="#">: 
						</a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images_product/product_arrow.png">评论 (9)</a>
					<ul>
						<li class="subitem1" >Amazon</br>
						I started my son on this vitamin over a month ago. So far he's eating better and seems hungry every day. Before we had issues feeding him since he is so picky. Now he ASKS for food. He's also much more energetic...which I'm not sure if that is a good thing or not since 2 yr olds are naturally crazy energetic. LOL! Also just in case you dont know its DAIRY FREE, EGG FREE, NO ARTIFICAL Color, NO ARTIFICAL FAVORS, NO ARTIFICAL SWEETNERS, PEANUT FREE, SHELLFISH FREE, WHEAT FREE, YEAST FREE & GLUTEN FREE!!! All pluses for us! I've done my research and this is the best and most natural that I could find. We love it! 5 stars from this family!</li>

						<li class="subitem2"> My baby loves this rice cereal and we were going through alot of boxes. This multi pack is a great price per box. 
						This rice cereal was recommended by her GI doctor as a good first food.</li>
						<li class="subitem3">Our daughter loves the taste and we have been using it in her bottle since her first month. We have tried others, but they aren't as fine as this product. 
						If you're looking to put into bottle with formula to help substitute instead of rice, this is the product. We also mix in with her apples for more nutrition. 
						It is very nice to buy in bulk as we go through a box in about a week, to week in a half. Very nice product and it's organic.</li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images_product/product_arrow.png">用法用量</a>
					<ul>
					    <li class="subitem2">用量</br> 
					    5-10 lb（约4.5-9斤）        1 mL</br>　						
					    11-20 lb（约10-18斤）       2 mL</br>　
                        21-25 lb（约19-22.7斤）     3 mL
                        </li>
						<li class="subitem3">○　注意事项：</br>
						开封后置于阴凉干燥处保存，开盒后请尽快使用；</br>
						○　放置在孩子不能触及之处，勿让孩子随意取食；</br>
						○　密封请存放于避光、干燥、不高于25摄氏度；</br>
						○　使用前摇匀，开封后冷藏，直接入口或加入儿童喜爱的饮料中服用</li>
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
				    <p>¥ 115</p>
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