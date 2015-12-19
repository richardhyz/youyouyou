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
	
<div id="itemid" style="display:none">mega</div>

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
									<img class="etalage_thumb_image" src="../product_us/mega.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="../product_us/mega.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<!-- <li>
								<img class="etalage_thumb_image" src="images_product/rice2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images_product/rice2.jpg" class="img-responsive" title="" />
							</li> -->
							<li>
								<img class="etalage_thumb_image" src="../product_us/mega1.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/mega1.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="../product_us/mega2.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/mega2.jpg"class="img-responsive"  />
							</li>
							 <li>
								<img class="etalage_thumb_image" src="../product_us/mega3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/mega3.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
					<h1>Qunol顶级辅酶Q10 CoQ10 </h1>
					<p style="font-size: 16px">  Qunol是Quten Research Institute公司旗下的专利产品品牌，专门针对天然辅酶Q10的研究开发，
					其它很多品牌的辅酶Q10产品大都是人工合成的，而Qunol系列保健产品源自100%的天然辅酶Q10，保证最佳的吸收和最高的生物利用度。
					Qunol系列产品是美国辅酶Q10产品中的金牌标准，是众多医生、药剂师、营养师和保健师推荐的保健产品</p>
				     <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">产品线</option>	
							<option value="1">120粒/瓶</option>
							<!-- <option value="2">成人咀嚼片</option>
							<option value="3">成人增强免疫系统配方</option>
							<option value="4">婴儿速溶冲剂</option>
							<option value="5">婴儿咀嚼片</option> -->
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
						  <div class="head"><h2><span class="amount item_price">$35.99</span></h2></div>
                          <form>
        <input id="input-22"  value="0" type="number" class="rating" min=0 max=5 step=0.5 data-rtl=1 data-container-class='text-right' data-glyphicon=0 data-size="xs">
</form>
						  </br><p> ＊注: 此价格为为美国售价，寻找代购时应考虑美国购物税（0%－10%不等），以及国际快递成本</p>
						  <div class="head_desc"><a href="#">12 reviews</a><img src="images_product/review.png" alt=""/></li></div>
                          
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
				<li class="item1"><a href="#"><img src="images_product/product_arrow.png">产品描述</a>
					<ul>
						<li class="subitem1"> 辅酶 Q10是近年来在美国及先进国家地区十分流行的一种新型保健品，它的主要功效就是保护心脏，延年益寿。 </li>
						<li class="subitem2">  经大量临床试验证明CoQ10（辅酶Q10）是一种能提高身体抗细胞抗氧化能力的强大抗氧化剂。人体随着年龄的增长，身体中的Q10会逐渐消失殆尽，身体的抗氧化能力随之减弱，
						因此，人们对心脏及血管抗老化保护就更是必不可少，服用Co-Q10能起到补充身体中所含Q10数量，从而达到保护心血管健康的效果。CoQ10除了是一种高功能抗氧化剂外，还可为身体的营养吸收起到调和的作用,
						从而使身体随时保持在健康的状态。CoQ10对于长期服用降胆固醇药物的人群也可提供很好的帮助，
						因为大多数降胆固醇药物都会降低身体中的Q10成分，从而带来抵抗力下降和营养吸收不良的副作用，
						服用CoQ10可达到补充流失Q10的效果。</li>
						 <!-- <li class="subitem3"> Qunol是Quten Research Institute公司旗下的专利产品品牌，专门针对天然辅酶Q10的研究开发，
					其它很多品牌的辅酶Q10产品大都是人工合成的，而Qunol系列保健产品源自100%的天然辅酶Q10，保证最佳的吸收和最高的生物利用度。
					Qunol系列产品是美国辅酶Q10产品中的金牌标准，是众多医生、药剂师、营养师和保健师推荐的保健产品。</li> -->
						<li class="subitem4"> 产品规格：</br>每盒120粒胶囊，每日一粒，可以使用4个月</br> </li>
					
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images_product/product_arrow.png">品牌介绍</a>
					<ul>
						
					    <li class="subitem2">  Qunol是Quten Research Institute公司旗下的专利产品品牌，专门针对天然辅酶Q10的研究开发，
					其它很多品牌的辅酶Q10产品大都是人工合成的，而Qunol系列保健产品源自100%的天然辅酶Q10，保证最佳的吸收和最高的生物利用度。
					Qunol系列产品是美国辅酶Q10产品中的金牌标准，是众多医生、药剂师、营养师和保健师推荐的保健产品。 </li>
						<!-- <li class="subitem3"> 獨有100%鼠李糖乳桿菌 （Lactobacillus GG） ，擁有超過 800項科研及160項臨床研究，
						並於美國銷量 No.1，兒童益生菌為美國兒科醫生推薦第一品牌。康萃樂為不同年齡層的朋友改善腸胃健康，有助提高免疫能力。</li>
						 <li class="subitem4"><a href="#"> Why Organic? </br>
						Choosing organic is choosing to live a healthier life. Organic foods are produced without the use of potentially harmful chemicals 
						and synthetic pesticides or growth hormones. This is even more important when we consider infants. For four to six months following birth, 
						infants receive most of their nutrition from breast milk or infant formula. It is so important that these formulas contain the safest ingredients.
						If ingested, potential toxic chemicals or heavy metals can lead to compromised immune system development. Likewise, young infants consume disproportionately high levels of fruits and vegetables when compared to adults. This increases their risk of exposure to potential contaminants found among non-organic products. Finally, Earth's Best products do not contain genetically engineered ingredients (GEIs), made by inserting genes from one plant into a strain of another to produce more crops or control pests.
						Why organic? It is better for you, your child and the environment they will grow up in. </a></li>
						<li class="subitem5"> <a href="#">The Earth's Best Difference: </br>
						Organic ingredients grown without harmful pesticides</br>
						No Genetically Engineered Ingredients (GEIs)</br>
						Most items made only from whole grains</br>
						No added salt, modified starches or refined sugars</br>
						No artificial flavors, colors or preservatives</br>
						Kosher (excluding meat varieties)</br>
						Rigorous product testing</br> </a></li> -->
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images_product/product_arrow.png">美国亚马逊评论 (252)</a>
					<ul>
						<li>   <img src="../product_us/mega9.png"  /> </li>
						<li>   <h3 class="m_2" id="buy">252条评论中 最有用好评</h3> </li>
						<li class="subitem1" ><p style="font-size: 16px">   好东西..听我说说！ 5星</br>
						（76 人中 72人觉得次评论有用） </p>
						I have Muscular Dystrophy and am on a lot of pain meds just to stay functional for my 4 year old boy. 
						My neurologist told me to start taking large doses of Ubiquinol CoQ10 to help my muscle cells' mitochondria process what it needs to to stay alive. 
						He said at least 300mg/day (I take 400-600/day). I chose this kind because it was the best value for Ubiquinol that I've ever found... and trust me... 
						I've looked. This is a lifetime supplement for me. Found it first at Costco, but Amazon has it for a little less :). Yea :) It doesn't just help a little. 
						Within a week, I noticed that I didn't need to take as much medication. And I don't have as many bad days when I HAVE to use my wheelchair (or I don't move).
						I know it's this because I've gotten lazy a couple of times and forgot to take it. After a few days, my body just stopped - like the tin man in a rain storm. Desperate, I'd look at my litany of meds and supplements, would see this, remember how much a difference it made, and start taking it again. It's like magic ... or really good science ;). If this stuff can help me like this, it can ONLY make your body work more efficiently. It's really good, really effective, and really cheap for what it is. Thank you Qunol for making such a good product at such a great price. You will help a lot of people. :)</br>
						----By Kindle Customer on April 3, 2013 </br>
						 </li>
						 
						 
						<!-- <li class="subitem1" ><p style="font-size: 16px"> </br></br> 人生良药  5星</br>
						（78 人中 81人觉得次评论有用） </p>
						我觉得这个东西对我的健康简直是神器。我患有肠易激综合征，消化系统很差，而且经常疲劳。在我的医师建议下，
						我开始每天吃两片这个产品，同时伴随着辅酶Q10一起吃，这几年来我的感觉好了很多。也没有了反胃的问题。
						我自己作为一名护士，我真是强力推荐这款益生菌。</br>
						----By Gina Waters on December 2, 2013
						 </li> -->
						 
						 <li>   <h3 class="m_2" id="buy">252条评论中 最有用差评</h3> </li>
						 <li class="subitem1" ><p style="font-size: 16px">   含有聚山梨酯80 2星</br>
						（89 人中 78人觉得次评论有用）</p>
						I was excited from reading all the reviews of this product and not seeing any bad reviews, so I literally went straight to Costco to get it. 
						As I was in line, I checked the ingredients and "Polysorbate 80" sent up a red flag (I am generally cautious of any ingredient w/ a numerical value in it).
						 When I went home, I did research, and discovered the range of side effects of the ingredient, including: allergic reactions, nausea, vomiting, 
						 diarrhea, abnormal heart rhythm, heart attack, stroke, infertility in women, and tumor growth (Source: [...]
						Otherwise, the product is still a great buy for the quantity and an ubiquinol CoQ10 supplement in general, but it wasn't for me - 
						I ended up going w/ Garden of Life's Raw CoQ10 formula.</br>
						----By D Leeon May 12, 2013
						 </li>
						 
						 <!-- <li class="subitem1" ><p style="font-size: 16px"> </br></br> 也许只是对于我，但是...  2星</br>
						（5 人中 7人觉得次评论有用）</p>
						我身体对这个益生菌的反应很差。我持续吃了好几年其它品牌的益生菌（HomeCure FloraRite, Farden of Life Primal Defense, 等等）
						都没有出现过这种反应。我的肠道变得非常易受刺激，或者说有点压抑。我坚持吃这个大概有1个星期，希望肠道可以适应它，但并没有好转，
						还在我停止吃以后持续了几天。我没有看到其它评论里看到他们有类似反应，也许这只是我个人的情况？</br>
						----By G. Butleron January 26, 2014
						 </li> -->

						<!-- <li class="subitem2"> My baby loves this rice cereal and we were going through alot of boxes. This multi pack is a great price per box. 
						This rice cereal was recommended by her GI doctor as a good first food.</li>
						<li class="subitem3">Our daughter loves the taste and we have been using it in her bottle since her first month. We have tried others, but they aren't as fine as this product. 
						If you're looking to put into bottle with formula to help substitute instead of rice, this is the product. We also mix in with her apples for more nutrition. 
						It is very nice to buy in bulk as we go through a box in about a week, to week in a half. Very nice product and it's organic.</li> -->
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images_product/product_arrow.png">有用信息</a>
					<ul>
					    <li class="subitem2"> 用法用量</br> 
					    口服，每日1粒，随餐服用。</br>　						
					    或遵医嘱。</br>
					
						 
						 <li class="subitem3"> 产品功效：</br> 
						 1、抗氧化性，心血管系统的应用！</br>

						2、抗肿瘤作用及免疫调节作用</br>

						3、抗皮肤皱纹和延缓皮肤衰老 </br>


						4、其它用途辅助药物他汀类的辅助药</br></li>
						
						</li>
						<li class="subitem3">○　适宜人群：</br>
						1、心脑血管疾患者；</br>
						2、肿瘤患者；</br>
						3、糖尿病患者 ；</br>
						4、老年痴呆症和中枢神经功能失调者；</li> 
					</ul>
				</li>
	 		</ul>
   </div>
   <h3 class="m_2" id="buy">有有有认证买手</h3>
   <h5 style="text-align:center">经过认证的买手保证提供真品，并且有完善的售后服务，有有有官方也会对其产品质量负责，您可放心购买 <h5>
	     <div class="container">
          		<div class="box_3">
          			<div class="col-md-3">
          				<div class="content_box"><a href="http://youyouyou.co/member.php?user=richard">
			   	          <img src="../images/products/richard4.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="http://youyouyou.co/member.php?user=richard">Richard </a></h4>
				    <h5> 居住在美国旧金山市的留学生，长期进行代购服务</h5>
				    <p>¥330 美国直邮</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="#">
			   	          <img src="../images/products/heng_wechat.JPG" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="http://youyouyou.co/member.php?user=heng">Heng</a></h4>
				    
				    <p>¥349 </p>
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