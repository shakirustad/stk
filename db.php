<?php
session_start();

$conn = mysqli_connect(
  '127.0.0.1:8111',
  'admin',
  '',
  'food'
) or die(mysqli_erro($mysqli));

?>
