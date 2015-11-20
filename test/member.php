<?php

// include function files for this application
require_once('bookmark_fns.php');
session_start();

//create short variable names
$username = $_POST['username'];
$passwd = $_POST['passwd'];

if ($username && $passwd) {
// they have just tried logging in
  try  {
    login($username, $passwd);
    // if they are in the database register the user id
    /*$_SESSION['valid_user'] = $username; */
    $_SESSION['valid_user'] = $username;
  }
  catch(Exception $e)  {
    // unsuccessful login
    // do_html_header('Problem:');
    echo 'You could not be logged in.
          You must be logged in to view this page.';
    do_html_url('login.php', 'Login');
    do_html_footer();
    exit;
  }
}



/* check_valid_user(); */

/* header('Refresh: 2;url=http://youyouyou.co/3rdpage.php'); */

 if (isset($_SESSION['valid_user']))  {
      echo "Logged in as ".$_SESSION['valid_user'].".<br />
      		Directing to your home page...<br />";
      		
		echo "<script type=\"text/javascript\">\n";
		echo "window.location.replace('../3rdpage.php')";
		echo "</script>\n";
 
  } else {
     // they are not logged in
     do_html_heading('Problem:');
     echo 'You are not logged in.<br />';
     do_html_url('login.php', 'Login');
     do_html_footer();
     exit;
  }



 
 

// give menu of options






?>
