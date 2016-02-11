<?php
 /* require('test/bookmark_fns.php'); */
	include('../test/output_fns1.php');
	require_once('../test/data_valid_fns.php'); 
  	require_once('../test/db_fns.php');
    include('../test/user_auth_fns.php');
  	include('../test/url_fns.php'); 
?>

  <html>
  <head>
    <title>论坛</title>
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

	//create_cat.php
	session_start();
	do_html_header();
	include 'header.php';

	$conn = db_connect();

	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		//the form hasn't been posted yet, display it
		echo '<form method="post" action="">
			Category name: <input type="text" name="cat_name" />
			Category description: <textarea name="cat_description" /></textarea>
			<input type="submit" value="Add category" />
		 </form>';
	}
	else
	{
		//the form has been posted, so save it
		$sql = "INSERT INTO categories(cat_name, cat_description)
		   VALUES( '".$_POST['cat_name']."',
				  '".$_POST['cat_description']."' )";
	
		$result = $conn->query($sql);    
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Error' ;
		}
		else
		{
			echo 'New category successfully added.';
		}
	}




	?>
	</br></br></br></br>  
	<?php 

	 do_html_footer();
	?>
 </body>
</html>