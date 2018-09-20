<?php
    $dsn = 'mysql:host=localhost;dbname=db_cinema';
    $username = 'root';
    $password = 'Pa$$w0rd';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
		
	$databaseHost = 'localhost';
	$databaseName = 'db_cinema';
	$databaseUsername = 'root';
	$databasePassword = 'Pa$$w0rd';
	
	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

	// Check connection
	if (mysqli_connect_error())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>