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
	
<div id="itemid" style="display:none">childlifedha</div>

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
									<img class="etalage_thumb_image" src="../product_us/childlifedha1.png" class="img-responsive" />
									<img class="etalage_source_image" src="../product_us/childlifedha1.png" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="../product_us/childlifedha2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="../product_us/childlifedha2.jpg" class="img-responsive" title="" />
							</li> 
							<li>
								<img class="etalage_thumb_image" src="../product_us/childlifedha.png" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/childlifedha.png"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="../product_us/childlifedha3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/childlifedha3.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
					<h1>童年时光天然dha咀嚼胶囊</h1>
					<p style="font-size: 16px"> ChildLife纯天然DHA咀嚼胶囊为宝宝提供有助于大脑及视网膜发育必须的重要物质--DHA；天然浆果口味，没有讨厌的鱼腥味，豌豆大小的美味超软软胶囊，可直接口嚼或吞服，增加孩子食用兴趣，更容易让宝宝接受.</p>
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
						  <div class="head"><h2><span class="amount item_price">$18.99</span></h2></div>
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
						<li class="subitem1"> 品质稳定：由于鱼油含有多元不饱和脂肪酸，所以很容易被氧化而产生有害的过氧化物，食用氧化变形后的鱼油反而加害健康。</br>
											  以分子蒸馏法确保其纯度及鲜度，并含有稳定的天然抗氧化剂VE、VA和VD，保证食用的最大安全性。</li>
						<li class="subitem2"> 不含任何污染物、PCBs、杀虫剂、重金属或其他毒素。不含易过敏源食物，不含大豆，鸡蛋，酵母，大麦，玉米，酒精，人造色素，甜料或防腐剂。</a></li>
						<li class="subitem3"> </br>　 </br> </li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images_product/product_arrow.png">公司介绍</a>
					<ul>
						
					    <li class="subitem2"> <a href="#"> ChildLife的创始人——Dr. Murray Clarke(莫里·克拉克博士)，致力于顺势疗法的儿科学研究并且开了20多年的营养诊所，他创立了这家公司并且开发了这一系列产品。 莫里·克拉克博士出生于新西兰，1984年移居美国并开始从事医学研究。他现在持有三个医药学领域的执照和博士学位，分别是：自然疗法、顺势疗法与中医药(包括针灸和中草药)。</a></li>
						<li class="subitem3"><a href="#"> 品牌产地</br>
						他的诊所位于加利福尼亚州圣莫尼卡，在过去20年里，他致力于开拓儿科关于整体机能的研究领域。
						克拉克博士于1988年开立的诊所，从事一般性针灸、草药、顺势疗法和营养学的实践运用。许多父母因为在克拉克博士的治疗下恢复健康，这些家长也将他们的孩子交给克拉克博士治疗。
						克拉克博士现在的声誉、成功与儿科造诣正是他不断努力的结果。
2000年，克拉克博士创立了公司ChildLife Essentials，致力于专门为婴幼儿和儿童补充营养的一系列产品的研制开发和生产。</a></li>
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
					    每2粒含维生素E--1IU  3%, 维生素A--90-95 IU  4%~8%</br>　						
					    维生素D--0-5 IU 0%~1%, Omega 3脂肪酸--140mg </br>　
                       EPA (Eicosapentaenoic Acid)--45mg, DHA (DocasaHexanenoic Acid)--70mg, 其他Omega-3脂肪酸--25mg</br>
                       6个月-1岁 ：每日1~2颗，可以刺破胶囊直接服用，或者混入液体食物中服用， 2-4岁 ：每日4~6颗， 5-12岁 ：每日6~8颗
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
				    <p>¥ 120</p>
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