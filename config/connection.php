<?php
// MYSQLI
$conn = mysqli_connect('localhost', 'root', 'password', 'databaseName');

    if(!$conn)
    {
        echo 'Connection error : ' . mysqli_connect_error();
    }

// PDO
try {
	$connection= new PDO("mysql:host=localhost;dbname=databaseName;charset=utf8", 'root', 'password');
} catch (Exception $e) {
	
	echo $e->getMessage();
}
