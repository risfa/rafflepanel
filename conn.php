<?php 
$sql = new mysqli("127.0.0.1", "dapps_user", "l1m4d1g1t", "dapps_batman_rafflepanel");
if (!$sql) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit;
}
?>
