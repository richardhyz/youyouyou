<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>软木板</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
<!-- 
Concept Template 
http://www.templatemo.com/preview/templatemo_397_concept 
-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

<link rel='stylesheet' href='style.css' media='screen' />

	<!-- CSS Bootstrap & Custom -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="css/templatemo_style.css">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/logo.png">
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    
    
    <!-- like button style css-->
    <style>
    .loading {
	padding:3px 7px;
	text-align:center;
	line-height:16px;
	}
	.like {
	display:inline-block;
	padding:3px 7px;
	margin-right:5px;
	background:#33cccc;
	color:#fff;
	font:bold 12px Tahoma;
	text-align:center;
	line-height:16px;
	}
	.like span {
	display:inline-block;
	border-left:1px solid #eee;
	padding-left:4px;
	}
	.liked {
	display:inline-block;
	padding:3px 7px;
	margin-right:5px;
	background:#ddd;
	color:#888;
	font:bold 12px Tahoma;
	text-align:center;
	line-height:16px;
	}
	.liked span {
	display:inline-block;
	border-left:1px solid #eee;
	padding-left:4px;
	}
    </style>
    
    <!-- like button js-->
    <!-- <script type="text/javascript" src="js/function.js"></script> -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
     
    <script>
    $(function() {
		$(".like").click(function() {
			var item_id = $(this).attr("id");
			var dataString = 'item_id='+item_id;  
			$('a#'+item_id).removeClass('like');
			$('a#'+item_id).html('<img src="images/loader.gif" class="loading" />'); 
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data: dataString,
				cache: false,
				success: function(data){
					if (data == 0) {
						alert('you have liked this quote before');
						} else {
						$('a#'+item_id).addClass('liked');
						$('a#'+item_id).html(data);
					}
				}  
			});
			return false;
		});
	});
    </script>    
    <!-- like button js-->
    
    
    
    <!-- <script src="jquery.min.js"></script> -->
    
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



</head>

<body>
	
	<?php
	/* require('test/bookmark_fns.php'); */
	include('test/output_fns.php');
	require_once('test/data_valid_fns.php'); 
  	require_once('test/db_fns.php');
    require_once('test/user_auth_fns.php');
  	require_once('test/url_fns.php');
  	 
	session_start();

	do_html_header();
	?>


		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#" class="templatemo_logo">
						<h1>软木板</h1>
					</a> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.site-header -->
 
	<p style="text-align:center; font-size:18px; color: #33CCCC"> 
    		在软木板上钉上你认为值得分享的物品，再看看大家都在谈论什么 </p>



<!-- Header --> 


<!-- like button functions --> 
<?php
function get_real_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function check_ip($item_id,$ip) {
	global $conn;
	$query = "SELECT * FROM likes WHERE item_id='$item_id' AND ip='$ip' LIMIT 1";
	$result = $conn->query($query);
	$likes = $result->num_rows;
	return $likes;
}

function likes($item_id) {
	global $conn;
	$query = "SELECT * FROM likes WHERE item_id='$item_id'";
	$result = $conn->query($query);
	$likes = $result->num_rows;
	return $likes;
}
?>
<!-- like button functions --> 



<!-- Content -->
<section id="wrapper">
		<?php
			$conn = db_connect();
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT `id` FROM `product`";
			$result = $conn->query($sql);
			$idArray = Array();
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result-> fetch_array()) {
					 $idArray[] = $row["id"];
					 
				}
			} else {
				echo "0 results";
			}
		?>
			
		<div id="container">
	
				<?php		
				for($i=0; $i< count($idArray); $i++){  ?>
					<div class="grid">
						<div class="imgholder">
							<a href="http://youyouyou.co/comment.php?product=<?php echo $idArray[$i] ?>" target="_self"> <img src="images/products/<?php echo $idArray[$i] ?>.jpg" /> </a>
							
						</div>
						
						
						
						<?php
						$sql = "SELECT title FROM product WHERE id = '$idArray[$i]'";
											$r = $conn->query($sql);
											if ($r->num_rows > 0) {
											// output data of each row
												while($row = $r->fetch_assoc()) {
												$title = $row["title"] ; 
												}
											} else {
												echo "0 results";
											}	
											$sql2 = "SELECT description FROM product WHERE id ='$idArray[$i]'";
											$r2 = $conn->query($sql2);
											if ($r2->num_rows > 0) {
											// output data of each row
												while($row2 = $r2->fetch_assoc()) {
												$description = $row2["description"] ; 
												}
											} else {
												echo "0 results";
											}	
						?>	
						<strong> <?php echo $title ?> </strong>
						<p> <?php echo $description ?> </p>
						
						
						
						
						
						
						<?php 
						$sql = "SELECT `like` FROM product WHERE id = '$idArray[$i]'";
						$r = $conn->query($sql);
						
						if ($r->num_rows > 0) {
						// output data of each row
							while($row = $r->fetch_assoc()) {
							$like = $row["like"] ; 
							}
						} else {
							echo "0 results";
						}	 
						?>
						
						
						<!-- like button-->
						<?php if (check_ip($idArray[$i],get_real_ip()) == 0) { ?>
							<a href="javascript:void();" class="like" id="<?php echo $idArray[$i]; ?>">Like <span><?php echo likes($idArray[$i]); ?></span></a>
							<?php } else { ?>
							<a href="javascript:void();" class="liked">Liked <span><?php echo likes($idArray[$i]); ?></span></a>
						<?php } ?>
						<!-- like button -->
						
						
						
        				
        				
        				<!-- collect button-->
        				<input type="button" value="Collect" class="btn btn-collect" id="btn-collect">  
						
						<!-- collect-->
						
						
						<?php
						$sql = "SELECT owner FROM product WHERE id = '$idArray[$i]'";
									$r = $conn->query($sql);
									if ($r->num_rows > 0) {
									// output data of each row
										while($row = $r->fetch_assoc()) {
										$owner = $row["owner"] ; 
										}
									} else {
										echo "0 results";
									}	
						?>
						<div class="meta">by <?php echo '<a href="http://youyouyou.co/member.php?user='.$owner.'">'.$owner.'</a>'; ?>
						</div>
					</div> <!-- class='grid' -->
			<?php } ?>  <!-- for -->
						
		</div> <!-- id="container" -->
			
		<?php $conn->close(); ?>






</section>




<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p style="text-align: right"><a href="http://youyouyou.co/5thpage.php" class="btn_2"> 联系我们 </a></p>
					<p style="text-align: left">Copyright &copy; 2015 Handsome Four</p> 
				  
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.templatemo_footer -->







</body>
</html>