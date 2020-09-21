<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id_no = mysqli_real_escape_string($link, $_REQUEST['id_no']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
$product_name = mysqli_real_escape_string($link, $_REQUEST['product_name']);
$product_id = mysqli_real_escape_string($link, $_REQUEST['product_id']);
$farmer_id = mysqli_real_escape_string($link, $_REQUEST['farmer_id']);

 
// attempt insert query execution
$sql = "INSERT INTO order_details (id_no,name, address,contact,product_name,product_id,farmer_id) VALUES ('$id_no', '$name', '$address', '$contact', '$product_name', '$product_id', '$farmer_id')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>