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
	
<div id="itemid" style="display:none">women</div>

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
									<img class="etalage_thumb_image" src="../product_us/women.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="../product_us/women.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<!-- <li>
								<img class="etalage_thumb_image" src="images_product/rice2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images_product/rice2.jpg" class="img-responsive" title="" />
							</li> -->
							<li>
								<img class="etalage_thumb_image" src="../product_us/women1.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/women1.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="../product_us/women2.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/women2.jpg"class="img-responsive"  />
							</li>
							 <li>
								<img class="etalage_thumb_image" src="../product_us/women3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/women3.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
					<h1>One A Day 美国拜耳每天一粒50+女性复合维生素</h1>
					<p style="font-size: 16px">  特别设计给中老年女性每天所需的综合维他命，以最新的科学方法制造出的维他命A的配方，
					帮助您加强骨骼强度，并加入镁，钙和维他命D帮助骨骼发展所需的营养。提高营养素铁的含量，帮助你的身体机能转换重要的碘物质为身体所吸收，
					提供每日所需的叶酸－女性最需要的营养素，100%满足女性的需求。</p>
				     <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">产品线</option>	
							<option value="1">120粒/瓶</option>
							<option value="2">200粒/瓶</option>
							<option value="3">300粒/瓶</option>
							<!--<option value="4">婴儿速溶冲剂</option>
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
						  <div class="head"><h2><span class="amount item_price">$22.99(200粒/瓶)</span></h2></div>
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
						<li class="subitem1"> 
						* 银杏叶精华来辅助记忆 </br>
						* 维生素D、钙、镁促进骨骼的健康 </br>
						* 维生素D有益于乳房的健康 </br>
						* 维生素C-促进胶原的合成，维护关节的健康</br>
						* 维生素B6,B12,C,E和叶酸帮助提升心脏的健康</br>
						* 维生素E, A, C和锌保护眼睛的健康 </li>
						<li class="subitem2">  研究表明，我们身体内细胞的健康在我们的一生中扮演了重要的作用。这也就是为什么
						每天一粒50+女性复合维生素选用7种不同的抗氧化剂来促进细胞的健康。它也是我们专门设计来提升妇女多方面的健康问题，
						如骨骼，眼睛，及关节的健康。</li>
						 <!-- <li class="subitem3"> Qunol是Quten Research Institute公司旗下的专利产品品牌，专门针对天然辅酶Q10的研究开发，
					其它很多品牌的辅酶Q10产品大都是人工合成的，而Qunol系列保健产品源自100%的天然辅酶Q10，保证最佳的吸收和最高的生物利用度。
					Qunol系列产品是美国辅酶Q10产品中的金牌标准，是众多医生、药剂师、营养师和保健师推荐的保健产品。</li> -->
						<li class="subitem4"> 产品规格：</br>每瓶200粒，每日一粒，可以使用6个月</br> </li>
					
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images_product/product_arrow.png">品牌介绍</a>
					<ul>
						
					    <li class="subitem2">  One A Day维生素是拜耳公司属下的系列产品,总部位于美国匹兹堡，是拜耳公司下属单位。拜耳是国际性保健、营养、创新材料公司，
					    总部位于德国勒弗库森。 2005年起，拜耳在北美已拥有16000雇员。拜耳有三大部门――拜耳保健、拜耳农化和拜尔材料科学。公司产品涉及医疗诊断、克服疾病、
					    保护作物以及提高汽车安全耐用性多个方面。拜耳公司是DAX指数成员，并在纽约上市（BAY）。</br>
					    拜耳公司最近在白宫举行的仪式上，获得了罗恩-布朗（Ron Brown）公司领导大奖，以表彰公司推进科技创新项目――“让科学有意义”。
					    这是一个公司范围的职工参与培训项目，是一个志愿和公共项目。美国商业部长卡罗斯-古铁雷斯出席了颁奖仪式。
					    其最有名的产品就是我们大家头痛、发烧的时候都用的“阿司匹林”.1904年，公司推出了拜耳十字标记———以Y为中心的横竖两行BAYER（拜耳）字样。
					    这是公司业务的总体象征，在美国，它是最有价值的商标之一。 </li>
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
				<li class="item3"><a href="#"><img src="images_product/product_arrow.png">美国亚马逊评论 (139)</a>
					<ul>
						<li>   <h3 class="m_2" id="buy">139条评论中 最有用好评</h3> </li>
						<li class="subitem1" ><p style="font-size: 16px">   如果你需要补充维生素，那么这个很不错。 5星</br>
						（19 人中 17人觉得次评论有用） </p>
						I've been taking multivitamins for years and had yet to settle on one I really like because they 
						are always too large and don't seem to do anything. These are a little smaller than a lot of vitamins out there. 
						They have a great % of the daily recommended vitamins.</br>
						---- By chata37334 on March 9, 2013</br>
						 </li>
						 
						 
						<!-- <li class="subitem1" ><p style="font-size: 16px"> </br></br> 人生良药  5星</br>
						（78 人中 81人觉得次评论有用） </p>
						我觉得这个东西对我的健康简直是神器。我患有肠易激综合征，消化系统很差，而且经常疲劳。在我的医师建议下，
						我开始每天吃两片这个产品，同时伴随着辅酶Q10一起吃，这几年来我的感觉好了很多。也没有了反胃的问题。
						我自己作为一名护士，我真是强力推荐这款益生菌。</br>
						----By Gina Waters on December 2, 2013
						 </li> -->
						 
						 <li>   <h3 class="m_2" id="buy">252条评论中 最有用差评</h3> </li>
						 <li class="subitem1" ><p style="font-size: 16px">   这是个非常好的配方，出了过量的维生素A。 1星</br>
						（11 人中 10人觉得次评论有用）</p>
						This is a great formula, except for the excess vitamin A 
						(should be no more than 2500iu as more can increase bone loss in women) and it has wayyyyyy too much copper...
						which many studies have linked to Alzheimers. You're better off getting Centrum Silver, at least they have low amounts of metals that 
						can prove dangerous to the brain in excess</br>
						---- By Nick on January 4, 2015
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
					    </li>
					
						 
						 <li class="subitem3"> 贮存方法：</br> 
						 常温、避光、防潮、置于儿童接触不到的地方 
						</li>
						
						
						<!-- <li class="subitem3">○　适宜人群：</br>
						1、心脑血管疾患者；</br>
						2、肿瘤患者；</br>
						3、糖尿病患者 ；</br>
						4、老年痴呆症和中枢神经功能失调者；</li>  -->
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
				    <p>¥310 美国直邮</p>
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