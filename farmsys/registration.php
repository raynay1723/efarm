<?php

session_start();


link=mysqli_connect('localhost','root','');

mysqli_select_db($link 'userregistration');

$name=_POST ['user'];
$pass=POST ['password'];

$s='select * from usertable where name ='$name'';

$result= mysqli_query($link, $s);

$num=mysqli_num_rows($result);

if($num== 1){
	echo 'Username already taken';
}else {
	$reg='insert into usertable(name,password) values ('$name', '$pass',)';
	mysqli_query($link, $reg);
	echo 'Registration Succesful';
}

?>