<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Desc Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

<?php
require_once('test/bookmark_fns.php');   
session_start();
?>


<form method="post" action="uploadDesc.php" class="contact">
    <fieldset class="contact-inner">
    <p> Title </p> 
      <p class="contact-input">
        <input type="text" name="title" placeholder="Title…" autofocus>
      </p>
	
    <p> Description </p>
      <p class="contact-input">
        <textarea name="description" placeholder="Your Description…"></textarea>
      </p>
		
      <p class="contact-submit">
        <input type="submit" value="Upload Description">
      </p>
    </fieldset>
  </form>


 



</body>
</html>