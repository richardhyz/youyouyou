<?php

/* include('connect.php'); */
require_once('test/bookmark_fns.php');
$conn = db_connect();
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}


/* include('functions.php'); */


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






/* 正文 */
if(isset($_POST)) {
	/* $item_id = abs(intval($_POST['item_id'])); */
	$item_id = $_POST['item_id'];
	$ip = get_real_ip();
	$query = "SELECT * FROM likes WHERE item_id='$item_id' AND ip='$ip' LIMIT 1";
	$result = $conn->query($query);
	$check = mysql_num_rows($result);
	if ($check == 0) {
		$datetime = time();
		$add = "INSERT INTO likes (item_id,ip) VALUES ('$item_id','$ip')";
		if ($conn->query($add)) {
			$check = "SELECT item_id FROM likes WHERE item_id='$item_id'";
			$result = $conn->query($query);
			$number = mysql_num_rows($result);
			sleep(1);
			echo 'Liked <span>'.$number.'</span>';
		}
	} else {
		echo 0;
		}
} else {
	echo 0;
}