<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';


#$id=filter_input(INPUT_POST, 'id');

$conn=mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
	die("could not connect".mysqli_connect_error());
}

	$sql="CREATE DATABASE db4";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
}

 else{
    echo "Error".$sql."<br>".$conn->error;
  }
  $conn->close();
		# code...

?>
