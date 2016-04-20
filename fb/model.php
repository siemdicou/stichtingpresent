<?php
    // $time = "<script>(millisToMinutesAndSeconds(global.sec))</script>";
    // $name = "<script>data.name</script>";
	
	const DB_HOST = 'localhost';
	const DB_USERNAME = 'root';
	const DB_PASSWORD = '';
	const DB_NAME = 'stichtingpresent';

	// const DB_HOST = 'rdbms.strato.de';
	// const DB_USERNAME = 'U2352607';
	// const DB_PASSWORD = '';
	// const DB_NAME = 'DB2352607';

	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: 
    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
	

	$seconds = $_POST['seconds'];
	$name = $_POST['name'];
	
	$sql = "INSERT INTO highscores (name, seconds) VALUES ('".$name."', '".$seconds."')" ;

mysqli_query($mysqli, $sql);


?>
