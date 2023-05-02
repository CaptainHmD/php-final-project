<?php
$mysqli = new mysqli('localhost', 'hamad', '1234', 'tasks_db');
// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }else{
    echo "connected";
  }

?>