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
	
<div id="itemid" style="display:none">opinel</div>

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
									<img class="etalage_thumb_image" src="../images/opinel/opinel4.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="../images/opinel/opinel4.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<!-- <li>
								<img class="etalage_thumb_image" src="images_product/rice2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images_product/rice2.jpg" class="img-responsive" title="" />
							</li> -->
							<li>
								<img class="etalage_thumb_image" src="../images/opinel/opinel.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../images/opinel/opinel.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="../images/opinel/opinel9.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="../images/opinel/opinel9.jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
					<h1>Opinel 法国经典折刀</h1>
					<p style="font-size: 16px">法国著名刀具品牌。号称法国国刀，法国人得第十一跟手指。法国人家传户晓的品牌。
					奧皮尼刀(Opinel Knives)即以適合自然環境使用作為設計的藍本。堅固的設計以及貼手的木柄長久以來可說是已成為祖先遺留下來最鮮活的部份。 
					並被倫敦維多利亞和艾伯特博物館譽為世上100件最美麗的物品之一 ，且曾在紐約現代博物館展覽。 1565年，為了避免仿冒做刀的人都會在刀身上打上印記以示一種保證。</p>
				     <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">可选型号</option>	
							<option value="1">碳钢</option>
							<option value="2">不锈钢</option>
							<option value="3">尺寸No.6--No.12</option>
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
						  <div class="head"><h2><span class="amount item_price">$13--$22</span></h2></div>
                          <form>
        <input id="input-22"  value="0" type="number" class="rating" min=0 max=5 step=0.5 data-rtl=1 data-container-class='text-right' data-glyphicon=0 data-size="xs">
</form>
						  </br><p> ＊注: 此价格为美国售价，寻找代购时应考虑美国购物税（0%－10%不等），以及国际快递成本</p>
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
						<li class="subitem1"> 法国制造。精湛工艺。使用高质量材质打造</br>
											  1.刀身採含碳量0.9%的高碳不鏽鋼製成，含鉻量至少13%。 </li>
						<li class="subitem2">  2.熱處理嚴格溫度控制品管。</li>
						<li class="subitem3"> 3.研磨及處理：特殊的戒形鎖設計在開啟及收合方面皆可完好鎖定；大部份的刀柄採用櫸木製成， 有些則採其它木頭並且在握柄木材外殼塗以聚安脂塗料予以保護；至今為止全球已銷售超過20億把。</li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images_product/product_arrow.png">公司介绍</a>
					<ul>
						
					    <li class="subitem2"> 由Joseph Opinel（创始人）设计，由Marcel Opinel于1955年发明（Virobloc），2000年作了改进，使得所有的OPINEL折刀无论使用或者携带都更加安全。 </li>
						<li class="subitem3"> ·1817年，Opinel家族开始了刀具的制作，位于法国巴黎南部的萨瓦地区的一个小村庄。</br>
						·1890年，历经两代人，延续至今100多年的OPINEL刀型诞生。</br>
						·1897年，设定刀具的分类：1～12号刀；在1932年，1号和11号刀停产，但其他刀号延续至今——分类也经典</br>
						·1909年，注册商标“Crowned Hand”（手指皇冠）</br>
						·1911年，都灵登山国际博览会上，获得金牌奖的开合式小刀成为了镁光灯的焦点</br>
						·1955年，独特的安全指环锁定系统“Virobloc”取得了发明专利。</br>
						·1985年，被授予“全球100个最佳设计之一”，在“伦敦维多利亚和艾伯特博物馆”展示于保时捷911和劳力士手表的旁边。</br>
						·1989年，OPINEL作为一个常用名词（注册商标）被列入《法国拉鲁斯词典》。</li>
						<li class="subitem4"> ·2006年，获得“有史以来最成功的999个设计之一”的荣耀，由国际设计师协会组成的陪审团列入《Phaidon Design Classics》（设计经典）。</br>
						·2009年，OPINEL主编《OPINEL美食厨房》荣获“2010世界最佳美食图书”大奖。</br>
						·2010年，OPINEL赞助上海世界博览会法国罗纳-阿尔卑斯大区馆博古斯学院法国西餐厅厨房刀具。</br>
						……传奇仍在继续 </li>
						<!-- <li class="subitem5"> <a href="#">The Earth's Best Difference: </br>
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
						<li class="subitem1" > 装在你口袋里的美妙餐具历史</br>
						I bought my first Opinel No.8 pocketknife while traveling in France as a teenager.
						This is a pocketknife of long history in France, just the thing to use to cut one's baguette, cheese, sausage, and apple at lunchtime.
						I very often have a No.8 with me, anytime I expect to be somewhere to cut up an apple or orange, or coffee cake. My Opinel is kept clean, and used strictly for food. 
						Friends seeing this simple, easy to use, excellent slicer often ask to see it, many times wanting one for themselves.
						The most common Opinel size is the No.8 (the size-number roughly referring to the blade length in centimeters). 
						The 3-1/4" blade of the No.8 is long enough and thin enough to be an excellent knife for slicing. 
						The common beechwood handle Opinel knives are sold in stainless ("Inox") and carbon steel ("carbone"). 
						The stainless is a variant of 12C27, a Scandinavian stainless that takes a very good edge and holds it quite well; the carbon is a variant of C75, 
						a steel that will take an even better edge, but may require more frequent sharpening. Use mineral oil to preserve the steel and lubricate the pivot.
						Now other premium woods are available in Inox steel: Oak, Walnut, and Olive Wood. THIS knife in Bubinga is one of the Luxury series, 
						and the lowest cost of the much harder to find Luxury models, which include Ebony and Buffalo Horn handled knives. 
						For the Luxury models the blade is highly polished Inox, and a velveteen slip pouch is included with the knife. 
						Bubinga is a very hard, very durable wood, often used by Scandinavian and other knife makers for these important handle characteristics. 
						In this Opinel model the Bubinga has good character and is well polished.
						While I'll not be carrying this Opinel to cut up my lunch, 
						it will occasionally make special appearances to honor the history and utility of the Opinel pocketknife.</li>

						<!-- <li class="subitem2"> My baby loves this rice cereal and we were going through alot of boxes. This multi pack is a great price per box. 
						This rice cereal was recommended by her GI doctor as a good first food.</li>
						<li class="subitem3">Our daughter loves the taste and we have been using it in her bottle since her first month. We have tried others, but they aren't as fine as this product. 
						If you're looking to put into bottle with formula to help substitute instead of rice, this is the product. We also mix in with her apples for more nutrition. 
						It is very nice to buy in bulk as we go through a box in about a week, to week in a half. Very nice product and it's organic.</li> -->
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images_product/product_arrow.png">趣闻佚事</a>
					<ul>
					    <li class="subitem2"> *画家毕加索的衣袋里时常揣着一把OPINEL小刀，用来刻木雕及鹅卵石，送给他的情人们。</li>
						<li class="subitem3"> </br>*著名旅行家蔡澜在他的《海隅散记》中专门撰有“小刀”一文，介绍了他通过OPINEL小刀和法国老头儿JEAN-PIERRE的一段感人故事。
						老头儿独到地把OPINEL小刀称为自己的第十一根手指，最后将自己身体的这一部分送给了蔡澜。</li>
						<li class="subitem3"> </br>*对于海盗们，登船前不忘互相提醒“别忘了你的OPINEL和JJ”，之后呼啸着开始杀戮和抢劫之旅。 用OPINEL切割绳索、雕刻烟斗，也作为餐刀切烟肉和面包，餐后用面包皮擦拭心爱的OPINEL。</li>
						<li class="subitem2"> </br>*美国作家PeterMAYLE在《永远的普罗旺斯》一书中也谈及OPINEL小刀，农夫们用它来挖蘑菇、检验最佳美食----松露。</li>
						
					</ul>
				</li>
				<li class="item5"><a href="#"><img src="images_product/product_arrow.png">Make A Gift</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
	 		</ul>
   </div>
   <h3 class="m_2" id="buy">提供此商品代购商</h3>
	     <div class="container">
          		<div class="box_3">
          			<div class="col-md-3">
          				<div class="content_box"><a href="http://youyouyou.co/member.php?user=richard">
			   	          <img src="../images/products/richard4.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="http://youyouyou.co/member.php?user=richard">richard</a></h4>
				    <p>¥ 130 起</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="single.html">
			   	          <img src="images_product/pic2.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="single.html">Contrary to popular belief</a></h4>
				    <p>$ 199</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="single.html">
			   	          <img src="images_product/pic4.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="single.html">Contrary to popular belief</a></h4>
				    <p>$ 199</p>
			        </div>
          			<div class="col-md-3">
          				<div class="content_box"><a href="single.html">
			   	          <img src="images_product/pic5.jpg" class="img-responsive" alt="">
				   	   </a>
				   </div>
				    <h4><a href="single.html">Contrary to popular belief</a></h4>
				    <p>$ 199</p>
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