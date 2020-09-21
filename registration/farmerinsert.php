<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$farmer_id = mysqli_real_escape_string($link, $_REQUEST['farmer_id']);
$product_name = mysqli_real_escape_string($link, $_REQUEST['product_name']);
$product_id = mysqli_real_escape_string($link, $_REQUEST['product_id']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);

 
// attempt insert query execution
$sql = "INSERT INTO product_details (farmer_id,product_name,product_id, address,contact) VALUES ('$farmer_id', '$product_name','$product_id', '$address', '$contact' )";
if(mysqli_query($link, $sql)){
    echo "Products posted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>