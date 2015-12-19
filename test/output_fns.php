<?php

function do_html_header() {
  // print an HTML header
?>
  
	<div class="site-header">
		<div class="main-navigation">
			<div class="responsive_menu">
				<ul>
							<li><a class="show-1 templatemo_home" href="#">陈列室</a></li>
							<li><a href="http://youyouyou.co/2ndpage.html" target="_self">软木板</a></li>
							<li><a href="http://youyouyou.co/3rdpage.html" target="_self">我想有</a></li>
							<li><a href="http://youyouyou.co/4thpage.html" target="_self">关于</a></li>
							<li><a href="http://youyouyou.co/5thpage.php" target="_self">联系</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 responsive-menu">
						<a href="#" class="menu-toggle-btn">
				            <i class="fa fa-bars"></i>
				        </a>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12 main_menu">
						<ul style="display: inline">
							<li style="float: left"><img src="images/logow.png" ?>
							<a href="http://youyouyou.co" target="_self">首页</a></li>
							<!-- <li style="float: left"><a href="http://youyouyou.co" target="_self">首页</a></li> -->
							<li><a href="http://youyouyou.co/1stpage.php" target="_self">陈列室</a></li>
							<li><a href="http://youyouyou.co/2ndpagelike.php" target="_self">迷你市集</a></li>
							<li><a href="http://youyouyou.co/forum/forum.php" target="_self">论坛</a></li>
							<!--<li><a href="http://youyouyou.co/4thpage.php" target="_self">关于</a></li>-->
							<!-- <li><a href="http://youyouyou.co/5thpage.php" target="_self">联系</a></li> -->
						  	
                            <?php
							if(isset($_SESSION[ 'valid_user'])) { 
								  ?>
						
								<li style="float: right"><a href="http://youyouyou.co/3rdpage.php" target="_self"> <?php echo $_SESSION[ 'valid_user'] ?>的小屋  </a> <a href="test/logout.php">Logout</a> </li>
							<?php } 
							else { ?>
								<li style="float: right"><a href="http://youyouyou.co/test/login.php" target="_self">登陆/注册</a></li>
							<?php } ?>
						</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->

  

<?php
}

function do_html_footer() {
  // print an HTML footer
?>

		<div id="templatemo_footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy; 2084 Your Company Name</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.templatemo_footer -->

  </body>
  </html>
<?php
}

function do_html_heading($heading) {
  // print heading
?>
  <h2><?php echo $heading;?></h2>
  
<?php
}

function do_html_URL($url, $name) {
  // output URL as link and br
?>
  <br /><a href="<?php echo $url;?>"><?php echo $name;?></a><br />
<?php
}

function display_site_info() {
  // display some marketing info
?>
  <div align="center">
  <ul>
  <li>Store your bookmarks online with us!</li>
  <li>See what other users use!</li>
  <li>Share your favorite links with others!</li>
  </ul>
  </div>
<?php
}

function display_login_form() {
?>

  <div class="table">
    <div align = "center">
  <p><a href="register_form.php">Not a member?</a></p>
  <form method="post" action="member.php">
  <table bgcolor="#cccccc">
   <tr>
     <td colspan="2">Members log in here:</td>
   <tr>
     <td style="width:100px;">Username:</td>
     <td style="width:200px;"><input type="text" name="username"/></td></tr>
   <tr>
     <td>Password:</td>
     <td><input type="password" name="passwd"/></td></tr>
   <tr>
     <td colspan="2" align="center">
     <input type="submit" value="Log in"/></td></tr>
   <tr>
     <td colspan="2"><a href="forgot_form.php">Forgot your password?</a></td>
   </tr>
 </table></form>
   </div>
 </div> <!-- table div -->
<?php
}

function display_registration_form() {
?>

<div class="table">
  <div align = "center">
 <form method="post" action="register_new.php">
 <table bgcolor="#cccccc">
   <tr>
     <td>Email address:</td>
     <td><input type="text" name="email" size="30" maxlength="100"/></td></tr>
   <tr>
     <td>Preferred username <br />(max 16 chars):</td>
     <td valign="top"><input type="text" name="username"
         size="16" maxlength="16"/></td></tr>
   <tr>
     <td>Password <br />(between 6 and 16 chars):</td>
     <td valign="top"><input type="password" name="passwd"
         size="16" maxlength="16"/></td></tr>
   <tr>
     <td>Confirm password:</td>
     <td><input type="password" name="passwd2" size="16" maxlength="16"/></td></tr>
   <tr>
     <td colspan=2 align="center">
     <input type="submit" value="Register"></td></tr>
 </table></form>
   </div>
 </div> <!-- div -->
 
<?php

}

function display_user_urls($url_array) {
  // display the table of URLs

  // set global variable, so we can test later if this is on the page
  global $bm_table;
  $bm_table = true;
?>
  <br />
  <form name="bm_table" action="delete_bms.php" method="post">
  <table width="300" cellpadding="2" cellspacing="0">
  <?php
  $color = "#cccccc";
  echo "<tr bgcolor=\"".$color."\"><td><strong>Bookmark</strong></td>";
  echo "<td><strong>Delete?</strong></td></tr>";
  if ((is_array($url_array)) && (count($url_array) > 0)) {
    foreach ($url_array as $url)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr bgcolor=\"".$color."\"><td><a href=\"".$url."\">".htmlspecialchars($url)."</a></td>
            <td><input type=\"checkbox\" name=\"del_me[]\"
                value=\"".$url."\"/></td>
            </tr>";
    }
  } else {
    echo "<tr><td>No bookmarks on record</td></tr>";
  }
?>
  </table>
  </form>
<?php
}

function display_user_menu() {
  // display the menu options on this page
?>
<hr />
<a href="member.php">Home</a> &nbsp;|&nbsp;
<a href="add_bm_form.php">Add BM</a> &nbsp;|&nbsp;
<?php
  // only offer the delete option if bookmark table is on this page
  global $bm_table;
  if ($bm_table == true) {
    echo "<a href=\"#\" onClick=\"bm_table.submit();\">Delete BM</a> &nbsp;|&nbsp;";
  } else {
    echo "<span style=\"color: #cccccc\">Delete BM</span> &nbsp;|&nbsp;";
  }
?>
<a href="change_passwd_form.php">Change password</a>
<br />
<a href="recommend.php">Recommend URLs to me</a> &nbsp;|&nbsp;
<a href="logout.php">Logout</a>
<hr />

<?php
}

function display_add_bm_form() {
  // display the form for people to ener a new bookmark in
?>
<form name="bm_table" action="add_bms.php" method="post">
<table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
<tr><td>New BM:</td>
<td><input type="text" name="new_url" value="http://"
     size="30" maxlength="255"/></td></tr>
<tr><td colspan="2" align="center">
    <input type="submit" value="Add bookmark"/></td></tr>
</table>
</form>
<?php
}

function display_password_form() {
  // display html change password form
?>
   <br />
   <form action="change_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Old password:</td>
       <td><input type="password" name="old_passwd"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td>New password:</td>
       <td><input type="password" name="new_passwd"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td>Repeat new password:</td>
       <td><input type="password" name="new_passwd2"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan="2" align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_forgot_form() {
  // display HTML form to reset and email password
?>
   <br />
   <form action="forgot_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Enter your username</td>
       <td><input type="text" name="username" size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan=2 align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_recommended_urls($url_array) {
  // similar output to display_user_urls
  // instead of displaying the users bookmarks, display recomendation
?>
  <br />
  <table width="300" cellpadding="2" cellspacing="0">
<?php
  $color = "#cccccc";
  echo "<tr bgcolor=\"".$color."\">
        <td><strong>Recommendations</strong></td></tr>";
  if ((is_array($url_array)) && (count($url_array)>0)) {
    foreach ($url_array as $url) {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      echo "<tr bgcolor=\"".$color."\">
            <td><a href=\"".$url."\">".htmlspecialchars($url)."</a></td></tr>";
    }
  } else {
    echo "<tr><td>No recommendations for you today.</td></tr>";
  }
?>
  </table>
<?php
}
?>

























