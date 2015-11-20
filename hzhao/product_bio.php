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
	
<div id="itemid" style="display:none">bio</div>

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
									<img class="etalage_thumb_image" src="../product_us/bio.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="../product_us/bio.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<!-- <li>
								<img class="etalage_thumb_image" src="images_product/rice2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images_product/rice2.jpg" class="img-responsive" title="" />
							</li> -->
							<li>
								<img class="etalage_thumb_image" src="../product_us/bio1.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/bio1.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="../product_us/bio2.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../product_us/bio2.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
					<h1>Culturelle（康萃乐）益生菌</h1>
					<p style="font-size: 16px"> Culturelle（康萃乐）是美国保健品企业i-Health公司旗下的益生菌膳食补充剂品牌。Culturelle益生菌是美国益生菌行业领先品牌，
					该产品已经被证明有助于维持天然免疫系统和缓解偶发性消化不良。Culturelle（康萃乐）益生菌主要采用益生菌菌种为鼠李糖乳杆菌（LGG），LGG是一种目前研究最充分的益生菌菌株之一。</p>
				     <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">产品线</option>	
							<option value="1">成人经典款</option>
							<option value="2">成人咀嚼片</option>
							<option value="3">成人增强免疫系统配方</option>
							<option value="4">婴儿速溶冲剂</option>
							<option value="5">婴儿咀嚼片</option>
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
						  <div class="head"><h2><span class="amount item_price">$32.95成人/$15.60婴儿</span></h2></div>
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
						<li class="subitem1"> 益生菌LGG，正式名称为鼠李糖乳杆菌GG株，LactobacillusrhamnosusGGstrain，（简写为LactobacillusGG或LGG)，
						是目前研究最多，应用最多的益生菌菌株，为Valio公司专利菌株。已证实的益生功能：平衡和改善胃肠道功能、增强人体自身免疫能力、预防和帮助治疗腹泻。 </li>
						<li class="subitem2">  culturelle产品lgg益生菌在北美日益普及，数以百万计的欧洲人，年轻人和老年人，在过去二十年来都在culturelle产品lgg益生菌之中受到的健康益处。</li>
						<li class="subitem3"> 产品规格：</br>80粒 这是COSTCO销售的大包装，比30粒的合算。这个胶囊设计很合理，都是独立密封包装，可长期保存的。买大包装也不用担心受潮变质。</li>
						<li class="subitem4"> 产品规格：</br>每盒80粒胶囊，每1粒胶囊含有:</br>
 100亿 Lactobacillus rhamnosus GG 活性菌株 ，245mg 菊粉（促进肠道有益菌生长）,不含乳制品和麸质。
胶囊款和袋装款Culturelle益生菌的差别在于（胶囊款是袋装款ＬＧＧ菌含量的10倍，另含有菊粉245mg ，菊粉可以促进肠道有益菌生长）</br>

      Boosts your immune system *增强您的免疫力  </br>

      Improves digestive health *改善您的消化系统</br>

      Restores the natural balance of good bacteria in your digestive tract *恢复您肠道内菌群的自然平衡</br></li>
					
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images_product/product_arrow.png">公司介绍</a>
					<ul>
						
					    <li class="subitem2"> <a href="#"> Culturelle（康萃乐）是美国保健品企业i-Health公司旗下的益生菌膳食补充剂品牌。
					    Culturelle益生菌是美国益生菌行业领先品牌，该产品已经被证明有助于维持儿童天然免疫系统和缓解偶发性消化不良。 </a></li>
						<li class="subitem3"><a href="#"> 獨有100%鼠李糖乳桿菌 （Lactobacillus GG） ，擁有超過 800項科研及160項臨床研究，
						並於美國銷量 No.1，兒童益生菌為美國兒科醫生推薦第一品牌。康萃樂為不同年齡層的朋友改善腸胃健康，有助提高免疫能力。</a></li>
						<!-- <li class="subitem4"><a href="#"> Why Organic? </br>
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
				<li class="item3"><a href="#"><img src="images_product/product_arrow.png">评论 (10)</a>
					<ul>
						<li class="subitem1" >北京中美合资和睦家医院的儿科专家崔玉涛医生也是极力推崇culturelle LGG益生菌哦。下面摘录一段崔医生的话：</br>
						过敏检查结果提示IgE大于200，说明孩子确实存在过敏，因为正常值小于100，特异IgE提示孩子对包括牛奶在内的食物和部分吸入物有过敏，这样的话我们要从生活上特别地注意，首先将牛奶应该换成水解蛋白的奶粉，可以选择能恩超级金盾。
						对于其他可疑的过敏食物我们可以暂停3个月，对于吸入物的过敏，我们应该注意家里的生活方式，比如家里去掉吸尘器，用清水擦洗。这样可以减少孩子吸入灰尘等的机会，就可以减少吸入物对孩子的刺激，这些都是躲避疗法，它的作用只能达到部分效果。
						医生之所以会推荐胶囊型（成人型）的原因：一是LGG活菌是儿童型的10倍，二是胶囊型的成份相比儿童型更单纯，我也会在下面的介绍里把成份表翻译出来，大家可以参考。
						那妈妈们会问，倒底给宝宝吃哪种呢？个人建议，如果宝宝肠胃疾病或湿疹情况轻的吃儿童型，严重的吃胶囊型。这两种都是婴儿可以安全服用的。 </li>

						<!-- <li class="subitem2"> My baby loves this rice cereal and we were going through alot of boxes. This multi pack is a great price per box. 
						This rice cereal was recommended by her GI doctor as a good first food.</li>
						<li class="subitem3">Our daughter loves the taste and we have been using it in her bottle since her first month. We have tried others, but they aren't as fine as this product. 
						If you're looking to put into bottle with formula to help substitute instead of rice, this is the product. We also mix in with her apples for more nutrition. 
						It is very nice to buy in bulk as we go through a box in about a week, to week in a half. Very nice product and it's organic.</li> -->
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images_product/product_arrow.png">有用信息</a>
					<ul>
					    <li class="subitem2"> 使用方法</br> 
					    一天一片。</br>　						
					    肠胃不适时改为一天两片。</br>
					    旅游出差时一天两片。
					    </li>
						<!-- <li class="subitem3">○　适宜人群：</br>
						1、免疫力较低，容易感冒发烧咳嗽的婴幼儿、儿童、成人</br>
						2、患有湿疹，过敏性体质的婴幼儿、儿童、成人</br>
						3、容易腹泻、拉肚子、便秘的婴幼儿、儿童、成人</br>
						4、经常用药，特别是经常使用抗生素药物的婴幼儿、儿童、成人</li> -->
						 
						 <li class="subitem3"> 适用人群：</br> 
						 1、免疫力较低，容易感冒发烧咳嗽的婴幼儿、儿童、成人 人体70％的免疫系统在肠道！益生菌通过改善营养吸收，抑制有害微生物，去除肠道里产毒性大肠杆菌产生的肠毒素，刺激免疫球蛋白IgA，刺激淋巴细胞等方式，提高儿童免疫力！</br>

						2、患有湿疹，过敏性体质的婴幼儿、儿童、成人

						通过调节儿童免疫，从根本上改善湿疹，安全、有效，经临床医学证实，最适合湿疹儿童的益生菌！</br>

						3、容易腹泻、拉肚子、便秘的婴幼儿、儿童、成人 </br>


						4、经常用药，特别是经常使用抗生素药物的婴幼儿、儿童、成人</br>

						经常用药，特别是经常使用抗生素，会破坏人体内菌群的平衡，造成一些列的健康问题；而且抗生素本身的副作用和不良反应也很多，比如造成耳聋，腹泻，四环素牙等。

						对于不得不经常用药的人，推荐益生菌与抗生素同时服用。在使用1个疗程的抗生素后，应该坚持服用3～4周的益生菌类产品，以恢复肠道内菌群的平衡。</li>
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
				    <p>¥350 美国直邮</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="#">
			   	          <img src="../images/products/heng_wechat.JPG" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="http://youyouyou.co/member.php?user=heng">Heng</a></h4>
				    
				    <p>¥369 </p>
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