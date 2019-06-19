<?php 
// $con=mysqli_connect("localhost","root","","dapps_solve");
// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

// $sql="SELECT username FROM ms_users";
// $result=mysqli_query($con,$sql);

// // Numeric array
// while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
// 	// print_r(json_encode(array_values($row)));
// 	$baba[] = $row;
// }

// print_r(array_values($baba));


// // mysqli_free_result($result);

// mysqli_close($con);


$sql = new mysqli("localhost", "root", "", "dapps_solve");
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit;
}
$query = "SELECT username FROM ms_users";
$result = $sql->query($query);     
if (!$result) {
  printf("Query failed: %s\n", $mysqli->error);
  exit;
}      
while($row = $result->fetch_row()) {
  $rows[]=$row;
}
$result->close();
$sql->close();
$oneDimensionalArray = array_map('current', $rows);
print_r( array_values($oneDimensionalArray));

?>