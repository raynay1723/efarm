<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='db4'


#$id=filter_input(INPUT_POST, 'id');

$conn=mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
	die("could not connect".mysqli_connect_error());
}

	$sql="CREATE TABLE t4(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL)";
  if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
}

 else{
    echo "Error".$sql."<br>".$conn->error;
  }
  $conn->close();
		# code...

?>
