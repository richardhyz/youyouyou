<?php

// include function files for this application
// require_once('bookmark_fns.php');
include('output_fns1.php');
	require_once('data_valid_fns.php'); 
  	require_once('db_fns.php');
    include('user_auth_fns.php');
  	include('url_fns.php'); 
  	
session_start();
$old_user = $_SESSION['valid_user'];

// store  to test if they *were* logged in
unset($_SESSION['valid_user']);
$result_dest = session_destroy();

// start output html



?>

  <html>
  <head>
    <title>logout</title>
    <style>
     /* body { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      li, td { font-family: Arial, Helvetica, sans-serif; font-size: 13px }  */
      hr { color: #3333cc; width=300; text-align=left}
      a { color: #000000 }
    </style>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/templatemo_style.css">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="../images/logo.png">
    
  </head>
  <body>
  
<?php 
do_html_header();

if (!empty($old_user)) {
  if ($result_dest)  {
    // if they were logged in and are now logged out
    header('Refresh: 3;url=http://youyouyou.co/index.php');
    
    echo 'Logged out.<br />';
    do_html_url('login.php', 'Login');
  } else {
   // they were logged in and could not be logged out
    echo 'Could not log you out.<br />';
  }
} else {
  // if they weren't logged in but came to this page somehow
  echo 'You were not logged in, and so have not been logged out.<br />';
  do_html_url('login.php', 'Login');
}

do_html_footer();

?>

   </body>
</html>
