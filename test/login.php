<?php
 /* require('test/bookmark_fns.php'); */
	include('output_fns1.php');
	require_once('data_valid_fns.php'); 
  	require_once('db_fns.php');
    include('user_auth_fns.php');
  	include('url_fns.php'); 
?>

  <html>
  <head>
    <title>login</title>
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
    <!--<link rel="shortcut icon" href="images/ico/favicon.ico">-->
    
    
    
  </head>
  <body>
  
<?php 
 do_html_header();

 display_site_info(); 
 display_login_form();

 do_html_footer();
?>

  </body>
</html>