<?php

$conn = @mysqli_connect('localhost:3306','root','root');
if (!$conn) {
	die('Could not connect: ' . mysqli_error());
}
mysqli_select_db('mydb', $conn);

?>