<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'schools');
if (!$connect) {
  echo 'Error code: ' . mysqli_connect_errno();
  echo 'Error message: ' . mysqli_connect_error();
  exit;
}
