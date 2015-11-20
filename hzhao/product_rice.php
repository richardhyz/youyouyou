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
	
<div id="itemid" style="display:none">rice</div>

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
									<img class="etalage_thumb_image" src="images_product/rice.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images_product/rice.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<!-- <li>
								<img class="etalage_thumb_image" src="images_product/rice2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images_product/rice2.jpg" class="img-responsive" title="" />
							</li> -->
							<li>
								<img class="etalage_thumb_image" src="images_product/rice3.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images_product/rice3.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images_product/rice4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images_product/rice4.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
					<h1>Earth's Best世界最好 婴幼儿米糊</h1>
					<p style="font-size: 16px"> Earth's Best 世界最好 高铁 婴幼儿大米米粉1段米糊（宝宝辅食）是纯天然有机认证的最高纯度含铁量的婴儿米粉。
					本品采用最新鲜的天然有机糙米及有机米糠提取物，富含多种必要的维生素、蛋白质、膳食纤维及矿物质。使宝宝能接触到更多的食物种类，
					并将食物转化为能量。营养价值高，消化吸收好，有助于宝宝大脑健康发育，吸取到更多更全面的营养，提高免疫力。</p>
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
						  <div class="head"><h2><span class="amount item_price">$4.59</span></h2></div>
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
						<li class="subitem1"> 采用最新鲜的纯天然有机糙米及有机米糠提取物，营养价值高，消化吸收好。</br>
											  无转基因成分，不添加盐、糖，没有人工色素、香料、防腐剂。 </li>
						<li class="subitem2">  可以帮助宝宝大脑健康发育。能提高免疫功能，有效维护全身机能。有助于细胞修复和营养吸收转化，促进宝宝健康发育成长。</a></li>
						<li class="subitem3"> 规格：227g </br>　品牌：Earth's Best </br> 产地：美国 </li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images_product/product_arrow.png">公司介绍</a>
					<ul>
						
					    <li class="subitem2"> <a href="#"> Earth's Best Organic Foods Organic foods offer countless healthful benefits for you, 
					    your children and the world around us. With The Hain Celestial Group's family of organic brands and Earth's Best 
					    you can be sure you are giving your family the highest quality organic foods. </a></li>
						<li class="subitem3"><a href="#"> Earth's Best For Infants </br>
						From the day they are born, infants rapidly change and grow. And so do their food preferences. That's why Earth's Best offers a wide variety of formulas, 
						cereals, jarred food blends and juices to ensure your baby gets the wholesome and pure nutrition they need.Earth's Best Organic Whole Grain Rice Cereal Organic... Pure... Delicious. 
						Give your baby a healthy start on life with Earth’s Best. Earth’s Best is the only full line of organic baby food and it is the first brand of baby food to be produced with NO Genetically Engineered Ingredients. 
						Earth’s Best infant cereals and jarred foods are available in over 40 varieties, along with infant juices and teething biscuits to satisfy the taste and texture of babies four months and up.</a></li>
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
						Rigorous product testing</br> </a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images_product/product_arrow.png">评论 (10)</a>
					<ul>
						<li class="subitem1" >DOES NOT CONTAIN SOY. OTHER REVIEW IS WRONG</br>
						I wrote to Earth's Best to ask about soy in the vitamin E. They responded that the vitamin E is derived from sunflower oil, 
						not soy. The top review of this product had me worried about the soy. I wanted to let others know that the review is either incorrect or outdated. 
						Please find the full response from Earth's Best below.Thank you for taking the time to contact us regarding our Earth's Best Whole Grain Rice Cereal. 
						We strive to maintain the highest quality products and your satisfaction is very important to us.

						The source of Vitamin E (tocopherols) in Earth's Best Multigrain Cereal, Rice Cereal and Oatmeal is sunflower oil. The Hain Celestial Group's labeling declares major allergens 
						(peanuts, soybeans, milk, eggs, fish, crustaceans, tree nuts, and wheat) and we follow the U.S. FDA's regulations. 
						We recognize the serious nature of the allergen issue and we strive to minimize risk. </li>

						<li class="subitem2"> My baby loves this rice cereal and we were going through alot of boxes. This multi pack is a great price per box. 
						This rice cereal was recommended by her GI doctor as a good first food.</li>
						<li class="subitem3">Our daughter loves the taste and we have been using it in her bottle since her first month. We have tried others, but they aren't as fine as this product. 
						If you're looking to put into bottle with formula to help substitute instead of rice, this is the product. We also mix in with her apples for more nutrition. 
						It is very nice to buy in bulk as we go through a box in about a week, to week in a half. Very nice product and it's organic.</li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images_product/product_arrow.png">有用信息</a>
					<ul>
					    <li class="subitem2"> 使用方法</br> 
					    将14g左右的米粉（约3汤勺）加入1/4杯（约60ml）的热水或奶（母乳/配方奶）搅拌到适合宝宝食用的稠度，即可给宝宝食用。</br>　						
					    喂食前应测试温度，以后随着孩子的食量逐量添加。</li>
						<li class="subitem3">○　注意事项：</br>
						开封后的米粉置于阴凉干燥处保存，开盒后请尽快使用；</br>
						○　放置在孩子不能触及之处，勿让孩子随意取食；</br>
						○　密封请存放于避光、干燥、不高于25摄氏度；</br>
						○　添加辅食的数量和时间，因人而异，请咨询医生和保健人员。</li>
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
				    <p>¥ 59</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="#">
			   	          <img src="images_product/empty1.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="#"></a>我们将认证每一个买手</h4>
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