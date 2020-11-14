<?php

$conn=mysqli_connect('localhost','root','','registration');

if($conn->connect_error)
{
	die('Database Error:'. $conn->connect_error);
}
 ?> 