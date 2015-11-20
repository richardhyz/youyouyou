<?php

function db_connect() {
   
   //$result = new mysqli('localhost', 'root', 'root', 'youdb1');
   $result = new mysqli('localhost', 'youdb1', 'dbpassword', 'youdb1');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
